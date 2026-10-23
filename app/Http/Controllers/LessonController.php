<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseModule;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class LessonController extends Controller
{
    /* ==========================================================
     | PAGE INDEX
     |==========================================================*/
    public function index(Request $request)
    {
        $courses = Course::orderBy('title')->get(['id', 'title']);

        if ($courses->isEmpty()) {
            return view('admin.lessons.index', [
                'courses'        => $courses,
                'selectedCourse' => null,
                'modules'        => collect(),
                'selectedModule' => null,
                'lessons'        => collect(),
            ]);
        }

        $selectedCourseId = $request->integer('course_id') ?: $courses->first()->id;
        $selectedCourse   = $courses->firstWhere('id', $selectedCourseId) ?? $courses->first();

        $modules = CourseModule::where('course_id', $selectedCourse->id)
            ->orderBy('sort_order')
            ->get(['id', 'course_id', 'title', 'sort_order']);

        $selectedModuleId = $request->integer('module_id') ?: optional($modules->first())->id;
        $selectedModule   = $modules->firstWhere('id', $selectedModuleId) ?? $modules->first();

        $lessons = $selectedModule
            ? Lesson::where('course_module_id', $selectedModule->id)
                ->withCount('quizzes')
                ->orderBy('sort_order')
                ->get()
            : collect();

        return view('admin.lessons.index', compact(
            'courses', 'selectedCourse', 'modules', 'selectedModule', 'lessons'
        ));
    }

    /* ==========================================================
     | AJAX — STORE
     |==========================================================*/
    public function store(Request $request)
    {
        $data = $this->validatePayload($request);

        // Auto generate slug (unique inside the course) if empty
        $data['slug'] = !empty($data['slug'])
            ? $data['slug']
            : $this->makeUniqueSlug($data['title'], (int) $data['course_module_id']);

        $lesson = DB::transaction(fn () => Lesson::create($data));

        $lesson->loadCount('quizzes');

        return response()->json([
            'success' => true,
            'message' => 'Lesson created successfully.',
            'lesson'  => $this->serialize($lesson),
            'stats'   => $this->moduleStats($lesson->course_module_id),
        ]);
    }

    /* ==========================================================
     | AJAX — SHOW
     |==========================================================*/
    public function show(Lesson $lesson)
    {
        $lesson->loadCount('quizzes');

        return response()->json([
            'success' => true,
            'lesson'  => $this->serialize($lesson, true), // include full content
        ]);
    }

    /* ==========================================================
     | AJAX — UPDATE
     |==========================================================*/
    public function update(Request $request, Lesson $lesson)
    {
        $data = $this->validatePayload($request, $lesson->id);

        $data['slug'] = !empty($data['slug'])
            ? $data['slug']
            : $this->makeUniqueSlug($data['title'], (int) $data['course_module_id'], $lesson->id);

        DB::transaction(fn () => $lesson->update($data));

        $lesson->refresh()->loadCount('quizzes');

        return response()->json([
            'success' => true,
            'message' => 'Lesson updated successfully.',
            'lesson'  => $this->serialize($lesson),
            'stats'   => $this->moduleStats($lesson->course_module_id),
        ]);
    }

    /* ==========================================================
     | AJAX — DESTROY
     |==========================================================*/
    public function destroy(Lesson $lesson)
    {
        $moduleId = $lesson->course_module_id;

        DB::transaction(fn () => $lesson->delete());

        return response()->json([
            'success' => true,
            'message' => 'Lesson deleted successfully.',
            'stats'   => $this->moduleStats($moduleId),
        ]);
    }

    /* ==========================================================
     | HELPERS
     |==========================================================*/
    private function validatePayload(Request $request, ?int $ignoreId = null): array
    {
        $moduleId = $request->input('course_module_id');
        $courseId = $moduleId ? CourseModule::whereKey($moduleId)->value('course_id') : null;

        return $request->validate([
            'course_module_id' => ['required', 'integer', 'exists:course_modules,id'],
            'title'            => ['required', 'string', 'max:255'],
            'slug'             => [
                'nullable',
                'string',
                'max:255',
                // letters, numbers, - and _ only (slug = blade file name)
                'regex:/^[A-Za-z0-9]+(?:[-_][A-Za-z0-9]+)*$/',
                function ($attribute, $value, $fail) use ($courseId, $ignoreId) {
                    if (!$value || !$courseId) {
                        return;
                    }

                    $exists = Lesson::where('slug', $value)
                        ->whereHas('module', fn ($q) => $q->where('course_id', $courseId))
                        ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                        ->exists();

                    if ($exists) {
                        $fail('This slug is already used in this course.');
                    }
                },
            ],
            'content'          => ['nullable', 'string'],
            'sort_order'       => [
                'required', 'integer', 'min:1',
                Rule::unique('lessons', 'sort_order')
                    ->where('course_module_id', $moduleId)
                    ->ignore($ignoreId),
            ],
        ], [
            'sort_order.unique' => 'This display order is already used in this module.',
            'slug.regex'        => 'Slug can contain only letters, numbers, "-" and "_".',
        ]);
    }

    /**
     * Unique slug within the whole course (lesson URLs are course-scoped).
     */
    private function makeUniqueSlug(string $title, int $moduleId, ?int $ignoreId = null): string
    {
        $courseId = CourseModule::whereKey($moduleId)->value('course_id');
        $base     = Str::slug($title) ?: 'lesson';
        $slug     = $base;
        $i        = 1;

        while (
            Lesson::where('slug', $slug)
                ->whereHas('module', fn ($q) => $q->where('course_id', $courseId))
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }

    private function serialize(Lesson $lesson, bool $full = false): array
    {
        $base = [
            'id'               => $lesson->id,
            'course_module_id' => $lesson->course_module_id,
            'title'            => $lesson->title,
            'slug'             => $lesson->slug,
            'sort_order'       => $lesson->sort_order,
            'quizzes_count'    => $lesson->quizzes_count ?? 0,
            'created_at'       => optional($lesson->created_at)->format('d M Y'),
            'short_content'    => Str::limit(strip_tags($lesson->content ?? ''), 100),
        ];

        if ($full) {
            $base['content'] = $lesson->content;
        }

        return $base;
    }

    private function moduleStats(int $moduleId): array
    {
        $lessons = Lesson::where('course_module_id', $moduleId)
            ->withCount('quizzes')
            ->get();

        return [
            'total_lessons' => $lessons->count(),
            'total_quizzes' => $lessons->sum('quizzes_count'),
            'next_order'    => ($lessons->max('sort_order') ?? 0) + 1,
        ];
    }
}
