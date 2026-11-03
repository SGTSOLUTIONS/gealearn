<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        $lessons = Lesson::orderBy('title')->get(['id', 'title']);

        $selectedLessonId = $request->integer('lesson_id') ?: null;
        $selectedLesson   = $selectedLessonId
            ? $lessons->firstWhere('id', $selectedLessonId)
            : null;

        $quizzesQuery = Quiz::with('lesson')
            ->when($selectedLessonId, fn ($q) => $q->where('lesson_id', $selectedLessonId))
            ->when($request->filled('search'), fn ($q) =>
                $q->where('question', 'like', '%' . $request->input('search') . '%')
            );

        $quizzes = $quizzesQuery->latest()->get();

        $stats = [
            'total_quizzes'  => Quiz::count(),
            'total_marks'    => (int) Quiz::sum('marks'),
            'per_lesson'     => $selectedLessonId
                ? Quiz::where('lesson_id', $selectedLessonId)->count()
                : $quizzes->count(),
            'next_marks'     => 1,
            'lessons_count'  => Lesson::count(),
        ];

        // AJAX responses (used by create / update / destroy / show)
        if ($request->wantsJson() && $request->isMethod('GET') && $request->ajax() && !$request->routeIs('admin.quiz.index')) {
            // handled elsewhere
        }

        return view('admin.quiz.index', compact(
            'quizzes', 'lessons', 'selectedLesson', 'selectedLessonId', 'stats'
        ));
    }

    public function create(Request $request)
    {
        return redirect()->route('admin.quiz.index', [
            'lesson_id' => $request->integer('lesson_id') ?: null,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateQuiz($request);

        $quiz = Quiz::create($validated);
        $quiz->load('lesson');

        return response()->json([
            'success' => true,
            'message' => 'Quiz question created successfully.',
            'quiz'    => $this->serialize($quiz),
            'stats'   => $this->statsFor($quiz->lesson_id),
        ]);
    }

    public function show(Request $request, Quiz $quiz)
    {
        $quiz->load('lesson');

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'quiz'    => $this->serialize($quiz, true),
            ]);
        }

        return redirect()->route('admin.quiz.index', ['lesson_id' => $quiz->lesson_id]);
    }

    public function edit(Quiz $quiz)
    {
        return redirect()->route('admin.quiz.index', ['lesson_id' => $quiz->lesson_id]);
    }

    public function update(Request $request, Quiz $quiz)
    {
        $validated = $this->validateQuiz($request, $quiz->id);

        $quiz->update($validated);
        $quiz->refresh()->load('lesson');

        return response()->json([
            'success' => true,
            'message' => 'Quiz question updated successfully.',
            'quiz'    => $this->serialize($quiz),
            'stats'   => $this->statsFor($quiz->lesson_id),
        ]);
    }

    public function destroy(Quiz $quiz)
    {
        $lessonId = $quiz->lesson_id;
        $quiz->delete();

        return response()->json([
            'success' => true,
            'message' => 'Quiz question deleted.',
            'stats'   => $this->statsFor($lessonId),
        ]);
    }

    /* ─────────────────────── helpers ─────────────────────── */
    private function validateQuiz(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'lesson_id'      => ['required', 'integer', 'exists:lessons,id'],
            'question'       => ['required', 'string', 'max:2000'],
            'option_a'       => ['required', 'string', 'max:500'],
            'option_b'       => ['required', 'string', 'max:500'],
            'option_c'       => ['nullable', 'string', 'max:500'],
            'option_d'       => ['nullable', 'string', 'max:500'],
            'correct_option' => ['required', Rule::in(['A', 'B', 'C', 'D'])],
            'marks'          => ['required', 'integer', 'min:1', 'max:100'],
            'explanation'    => ['nullable', 'string', 'max:5000'],
        ], [
            'lesson_id.exists'        => 'The selected lesson does not exist.',
            'correct_option.required' => 'Choose which option is correct.',
            'correct_option.in'       => 'Correct option must be A, B, C, or D.',
        ]);
    }

    private function serialize(Quiz $quiz, bool $withExplanation = false): array
    {
        $data = [
            'id'             => $quiz->id,
            'lesson_id'      => $quiz->lesson_id,
            'lesson_title'   => $quiz->lesson?->title,
            'question'       => $quiz->question,
            'option_a'       => $quiz->option_a,
            'option_b'       => $quiz->option_b,
            'option_c'       => $quiz->option_c,
            'option_d'       => $quiz->option_d,
            'correct_option' => $quiz->correct_option,
            'marks'          => $quiz->marks,
            'created_at'     => $quiz->created_at?->format('d M Y'),
            'options'        => $quiz->options(),
        ];

        if ($withExplanation) {
            $data['explanation'] = $quiz->explanation;
            $data['updated_at']  = $quiz->updated_at?->diffForHumans();
        }

        return $data;
    }

    private function statsFor(?int $lessonId): array
    {
        return [
            'total_quizzes' => Quiz::count(),
            'total_marks'   => (int) Quiz::sum('marks'),
            'per_lesson'    => $lessonId
                ? Quiz::where('lesson_id', $lessonId)->count()
                : Quiz::count(),
        ];
    }
}
