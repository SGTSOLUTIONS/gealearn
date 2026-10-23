<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    /**
     * Display all courses on one page.
     */
    public function index()
    {
        $courses = Course::withCount('modules')
            ->orderByDesc('created_at')
            ->get();

        return view('admin.course.index', compact('courses'));
    }

    /**
     * Add a new course.
     */
    public function store(Request $request)
    {
        $data = $this->validateCourse($request);

        $data['slug'] = $this->makeUniqueSlug($data['title']);
        $data['price'] = $data['is_free']
            ? 0
            : ($data['price'] ?? 0);

        Course::create($data);

        return redirect()
            ->route('admin.course')
            ->with('success', 'Course created successfully!');
    }

    /**
     * Update an existing course.
     */
    public function update(Request $request, Course $course)
    {
        $data = $this->validateCourse($request);

        $data['slug'] = $this->makeUniqueSlug(
            $data['title'],
            $course->id
        );

        $data['price'] = $data['is_free']
            ? 0
            : ($data['price'] ?? 0);

        $course->update($data);

        return redirect()
            ->route('admin.course')
            ->with('success', 'Course updated successfully!');
    }

    /**
     * Delete a course.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('admin.course')
            ->with('success', 'Course deleted successfully!');
    }

    /**
     * Validate course form fields.
     */
    private function validateCourse(Request $request): array
    {
        return $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'level' => [
                'required',
                Rule::in([
                    'Beginner',
                    'Intermediate',
                    'Advanced',
                ]),
            ],

            'is_free' => [
                'required',
                'boolean',
            ],

            'price' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'status' => [
                'required',
                'boolean',
            ],
        ]);
    }

    /**
     * Generate a unique slug for each course.
     */
    private function makeUniqueSlug(
        string $title,
        ?int $ignoreId = null
    ): string {
        $baseSlug = Str::slug($title) ?: 'course';
        $slug = $baseSlug;
        $counter = 1;

        while (
            Course::where('slug', $slug)
                ->when(
                    $ignoreId !== null,
                    fn ($query) => $query->where(
                        'id',
                        '!=',
                        $ignoreId
                    )
                )
                ->exists()
        ) {
            $slug = $baseSlug . '-' . $counter++;
        }

        return $slug;
    }
}
