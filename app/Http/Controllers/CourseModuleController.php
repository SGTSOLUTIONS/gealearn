<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseModule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseModuleController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::orderBy('title')->get();

        $selectedCourse = null;
        $modules = collect();

        if ($request->filled('course_id')) {
            $selectedCourse = Course::find($request->integer('course_id'));

            if (!$selectedCourse) {
                return redirect()
                    ->route('admin.modules')
                    ->with('error', 'Selected course was not found.');
            }

            $modules = $selectedCourse->modules()
                ->withCount('lessons')
                ->orderBy('sort_order')
                ->get();
        } elseif ($courses->isNotEmpty()) {
            $selectedCourse = $courses->first();

            $modules = $selectedCourse->modules()
                ->withCount('lessons')
                ->orderBy('sort_order')
                ->get();
        }

        return view('admin.module.index', compact(
            'courses',
            'selectedCourse',
            'modules'
        ));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'course_id' => [
                'required',
                'integer',
                'exists:courses,id',
            ],
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'level' => [
                'required',
                'string',
                'in:Beginner,Intermediate,Advanced',
            ],
            'description' => [
                'nullable',
                'string',
            ],
            'sort_order' => [
                'required',
                'integer',
                'min:1',
            ],
        ]);

        $course = Course::findOrFail($data['course_id']);

        $course->modules()->create([
            'title' => $data['title'],
            'level' => $data['level'],
            'description' => $data['description'] ?? null,
            'sort_order' => $data['sort_order'],
        ]);

        return redirect()
            ->route('admin.modules', [
                'course_id' => $course->id,
            ])
            ->with('success', 'Module created successfully.');
    }

    public function update(Request $request, CourseModule $module)
    {
        $data = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'level' => [
                'required',
                'string',
                'in:Beginner,Intermediate,Advanced',
            ],
            'description' => [
                'nullable',
                'string',
            ],
            'sort_order' => [
                'required',
                'integer',
                'min:1',
            ],
        ]);

        $module->update($data);

        return redirect()
            ->route('admin.modules', [
                'course_id' => $module->course_id,
            ])
            ->with('success', 'Module updated successfully.');
    }

    public function destroy(CourseModule $module)
    {
        $courseId = $module->course_id;

        $module->delete();

        return redirect()
            ->route('admin.modules', [
                'course_id' => $courseId,
            ])
            ->with('success', 'Module deleted successfully.');
    }
}
