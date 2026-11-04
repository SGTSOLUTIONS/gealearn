<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseModule;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index()
    {
        $courses = Course::where('status', true)
            ->withCount('modules')
            ->orderBy('title')
            ->get();

        return view('learning.index', compact('courses'));
    }

    public function showCourse(string $course)
    {
        $courseModel = $this->loadCourse($course);

        // Modules & lessons already sorted -> first lesson of first module
        $firstLesson = $courseModel->modules->flatMap->lessons->first();

        return $this->renderCoursePage($courseModel, $firstLesson);
    }

    public function showLesson(string $course, string $lesson)
    {
        $courseModel = $this->loadCourse($course);

        $flat = $courseModel->modules->flatMap->lessons;

        // 1) slug match (inside this course only), 2) fallback to numeric id
        $lessonModel = $flat->firstWhere('slug', $lesson)
            ?? (ctype_digit($lesson) ? $flat->firstWhere('id', (int) $lesson) : null);

        abort_if(! $lessonModel, 404);

        if (! auth()->check() && optional($lessonModel->module)->level !== 'Beginner' && auth()->user()?->role !== 'admin') {
            return redirect()->guest(route('login'));
        }

        return $this->renderCoursePage($courseModel, $lessonModel);
    }

    private function allowedLevels(): array
    {
        if (! auth()->check()) {
            return ['Beginner'];
        }

        if (auth()->user()->is_subscribed) {
            return ['Beginner', 'Intermediate', 'Advanced'];
        }

        return ['Beginner', 'Intermediate'];
    }

    /**
     * Load course with modules + lessons, each sorted properly.
     * (sort_order is unique per module, so we must NOT sort the flattened list.)
     */
    private function loadCourse(string $slug): Course
    {
        return Course::where('slug', $slug)
            ->with([
                'modules' => fn ($q) => $q->orderBy('sort_order'),
                'modules.lessons' => fn ($q) => $q->orderBy('sort_order'),
            ])
            ->firstOrFail();
    }

    private function renderCoursePage(Course $course, ?Lesson $lesson)
    {
        $flatLessons = $course->modules
            ->flatMap(fn ($m) => $m->lessons)
            ->values();

        $lessonIndex = 0;
        $customView = null;

        if ($lesson) {
            $found = $flatLessons->search(fn ($l) => $l->id === $lesson->id);
            $lessonIndex = $found === false ? 0 : $found + 1;

            // Custom blade: resources/views/learning/lessons/{slug}.blade.php
            if ($lesson->slug && preg_match('/^[A-Za-z0-9_-]+$/', $lesson->slug)) {
                $candidate = 'learning.lessons.'.$lesson->slug;
                if (view()->exists($candidate)) {
                    $customView = $candidate;
                }
            }
        }

        return view('learning.course', [
            'course' => $course,
            'lesson' => $lesson,
            'module_id' => $lesson->course_module_id,
            'flatLessons' => $flatLessons,
            'lessonIndex' => $lessonIndex,
            'totalLessons' => $flatLessons->count(),
            'customView' => $customView,
            'navCourses' => Course::where('status', true)
                ->orderBy('title')
                ->get(['id', 'title', 'slug']),
            'allowedLevels' => $this->allowedLevels(),
        ]);
    }


   public function quizz(Request $request)
    {
        $request->validate([
            'module_id' => 'required|integer|exists:course_modules,id',
        ]);

        // Eager load module -> lessons -> quizzes
        $module = CourseModule::with([
            'lessons' => function ($q) {
                $q->orderBy('sort_order');
            },
            'lessons.quizzes',
        ])->findOrFail($request->module_id);

        // Shape the response for the frontend
        $payload = [
            'module' => [
                'id'    => $module->id,
                'title' => $module->title,
            ],
            'lessons' => $module->lessons->map(function ($lesson) {
                return [
                    'id'         => $lesson->id,
                    'title'      => $lesson->title,
                    'slug'       => $lesson->slug,
                    'snippet'    => $lesson->contentSnippet(120),
                    'heading'    => $lesson->primaryHeading(),
                    'blocks'     => $lesson->blockCount(),
                    'quiz_count' => $lesson->quizzes->count(),
                    'quizzes'    => $lesson->quizzes->map(function ($quiz) {
                        return [
                            'id'             => $quiz->id,
                            'question'       => $quiz->question,
                            'options'        => $quiz->options(),     // ['A'=>..., 'B'=>...]
                            'correct_option' => $quiz->correct_option,
                            'marks'          => $quiz->marks,
                            'explanation'    => $quiz->explanation,
                        ];
                    })->values(),
                ];
            })->values(),
        ];

        return response()->json($payload);
    }
}
