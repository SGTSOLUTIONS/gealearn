@extends('layouts.dashboard')

@section('title', 'Quiz Management')

@section('dashboard-content')

<style>
    .quiz-page {
        --geo-green: #174c3c;
        --geo-green-dark: #10382d;
        --geo-green-light: #e5f0e9;
        --geo-cream: #f7f4e9;
        --geo-slate: #26343b;
        --geo-muted: #718078;
        --geo-violet: #6d3fc4;
        --geo-violet-light: #efe7ff;
        color: var(--geo-slate);
        position: relative;
        isolation: isolate;
    }
    .quiz-page::before {
        content: "";
        position: absolute;
        inset: -12px -8px auto;
        height: 250px;
        z-index: -1;
        pointer-events: none;
        opacity: .5;
        background:
            radial-gradient(circle at 8% 22%, rgba(23,76,60,.13) 0 1.5px, transparent 2px),
            radial-gradient(circle at 22% 64%, rgba(183,153,79,.22) 0 1px, transparent 2px),
            radial-gradient(circle at 54% 18%, rgba(23,76,60,.12) 0 1px, transparent 2px),
            radial-gradient(circle at 78% 50%, rgba(183,153,79,.2) 0 1.5px, transparent 2px),
            radial-gradient(circle at 94% 16%, rgba(23,76,60,.12) 0 1px, transparent 2px);
        background-size: 180px 130px, 210px 150px, 230px 160px, 190px 140px, 170px 120px;
        animation: quizSparkleDrift 16s linear infinite;
    }
    .quiz-page .module-card {
        background: #fffefa;
        border: 1px solid rgba(23,76,60,.12);
        border-radius: 17px;
        box-shadow: 0 8px 26px rgba(26,51,42,.055);
        overflow: hidden;
        transition: box-shadow .25s ease, transform .25s ease, border-color .25s ease;
    }
    .quiz-page .module-card:hover {
        border-color: rgba(23,76,60,.23);
        box-shadow: 0 12px 30px rgba(26,51,42,.085);
    }
    .quiz-page .page-title {
        color: var(--geo-slate);
        font-size: clamp(1.55rem, 2vw, 1.95rem);
        font-weight: 800;
        letter-spacing: -.65px;
    }
    .quiz-page .muted { color: var(--geo-muted) !important; }
    .quiz-page .text-primary { color: var(--geo-green) !important; }
    .quiz-page .primary-btn {
        background: var(--geo-green);
        color: #fff;
        border: 1px solid var(--geo-green);
        border-radius: 10px;
        padding: 10px 17px;
        font-weight: 700;
        box-shadow: 0 4px 10px rgba(23,76,60,.13);
        transition: transform .2s ease, background .2s ease, box-shadow .2s ease;
    }
    .quiz-page .primary-btn:hover,
    .quiz-page .primary-btn:focus {
        background: var(--geo-green-dark);
        color: #fff;
        border-color: var(--geo-green-dark);
        transform: translateY(-2px);
        box-shadow: 0 7px 15px rgba(23,76,60,.2);
    }
    .quiz-page .primary-btn:disabled { opacity: .55; transform: none; box-shadow: none; }
    .quiz-page .btn-outline-secondary {
        color: var(--geo-green);
        border-color: rgba(23,76,60,.3);
        border-radius: 10px;
        font-weight: 650;
        padding: 10px 12px;
    }
    .quiz-page .btn-outline-secondary:hover {
        color: #fff; background: var(--geo-green); border-color: var(--geo-green);
    }
    .quiz-page .stat-box {
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(23,76,60,.13);
        background: linear-gradient(135deg, #fffefa 0%, #f4f5eb 100%);
        border-radius: 16px;
        padding: 20px;
        height: 100%;
        box-shadow: 0 5px 18px rgba(26,51,42,.045);
        animation: quizCardIn .55s ease both;
        transition: transform .25s ease, box-shadow .25s ease;
    }
    .quiz-page .stat-box::after {
        content: "";
        position: absolute;
        width: 100px; height: 100px;
        border-radius: 50%;
        right: -38px; top: -45px;
        background: rgba(23,76,60,.055);
        transition: transform .35s ease;
        pointer-events: none;
    }
    .quiz-page .stat-box:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 25px rgba(26,51,42,.09);
    }
    .quiz-page .stat-box:hover::after { transform: scale(1.35); }
    .quiz-page .stat-icon {
        display: flex; align-items: center; justify-content: center;
        width: 48px; height: 48px; flex-shrink: 0;
        border-radius: 14px;
        background: var(--geo-green-light);
        color: var(--geo-green);
        font-size: 1.3rem;
    }
    .quiz-page .stat-icon.violet { background: var(--geo-violet-light); color: var(--geo-violet); }
    .quiz-page .stat-icon.gold   { background: #fbf2dc; color: #9a7a2e; }
    .quiz-page #statTotalQuizzes,
    .quiz-page #statPerLesson,
    .quiz-page #statTotalMarks { color: var(--geo-green); font-variant-numeric: tabular-nums; }
    .quiz-page .form-control,
    .quiz-page .form-select {
        color: var(--geo-slate);
        background-color: #fffefa;
        border: 1px solid #d7e1d9;
        border-radius: 10px;
        padding: 10px 12px;
        transition: border-color .2s ease, box-shadow .2s ease, background .2s ease;
    }
    .quiz-page .form-control:focus,
    .quiz-page .form-select:focus {
        border-color: #43836b;
        box-shadow: 0 0 0 .22rem rgba(23,76,60,.12);
        background-color: #fff;
    }
    .quiz-page .form-label { color: var(--geo-slate); font-size: .875rem; font-weight: 700; margin-bottom: 7px; }
    .quiz-page .input-group-text {
        border-color: #d7e1d9; border-radius: 10px 0 0 10px; color: var(--geo-green);
    }
    .quiz-page .table { margin-bottom: 0; --bs-table-hover-bg: #f3f6ef; }
    .quiz-page .table thead th {
        background: #edf2e9;
        color: #52645a;
        text-transform: uppercase;
        font-size: .73rem;
        font-weight: 800;
        letter-spacing: .55px;
        padding: 15px 16px;
        white-space: nowrap;
        border-bottom: 1px solid #dfe8dc;
    }
    .quiz-page .table tbody td {
        padding: 16px;
        border-color: #edf0e8;
        vertical-align: middle;
        background-color: transparent;
    }
    .quiz-page .table tbody tr { transition: background-color .2s ease; }
    .quiz-page .quiz-question {
        display: block;
        font-weight: 600;
        line-height: 1.45;
        max-width: 480px;
        overflow-wrap: anywhere;
    }
    .quiz-page .option-chip {
        display: inline-flex; align-items: center; justify-content: center;
        width: 22px; height: 22px;
        font-size: .72rem; font-weight: 800;
        border-radius: 7px;
        background: #eef1ea; color: #52645a;
        margin-right: 4px;
    }
    .quiz-page .option-chip.correct {
        background: var(--geo-green); color: #fff;
    }
    .quiz-page .lesson-pill {
        display: inline-block;
        padding: 3px 10px;
        background: var(--geo-green-light);
        color: var(--geo-green);
        border-radius: 999px;
        font-size: .78rem;
        font-weight: 650;
        text-decoration: none;
    }
    .quiz-page .lesson-pill:hover { background: var(--geo-green); color: #fff; }
    .quiz-page .action-btn {
        width: 36px; height: 36px;
        display: inline-flex; justify-content: center; align-items: center;
        border-radius: 10px;
        transition: transform .2s ease, box-shadow .2s ease;
    }
    .quiz-page .action-btn:hover { transform: translateY(-2px); box-shadow: 0 4px 10px rgba(38,52,59,.1); }
    .quiz-page .btn-outline-primary {
        color: var(--geo-green); border-color: rgba(23,76,60,.35);
    }
    .quiz-page .btn-outline-primary:hover { color: #fff; background: var(--geo-green); border-color: var(--geo-green); }
    .quiz-page .btn-outline-danger { border-color: rgba(220,53,69,.35); }
    .quiz-page .empty-state { padding: 48px 20px; text-align: center; }
    .quiz-page .empty-icon {
        width: 66px; height: 66px; margin: 0 auto 16px;
        display: flex; align-items: center; justify-content: center;
        border-radius: 19px;
        background: var(--geo-green-light); color: var(--geo-green); font-size: 1.8rem;
        box-shadow: inset 0 0 0 1px rgba(23,76,60,.07);
    }
    .quiz-page .table tbody tr.row-flash { animation: quizFlash 1.2s ease; }
    .quiz-page #modalLessonInfo { color: var(--geo-green-dark); background: #edf4ec; }
    .quiz-page .modal-content { background: #fffefa; }
    .quiz-page .modal-header { border-bottom-color: #e8eee5; }
    .quiz-page .modal-footer { background: #f5f5eb !important; border-top-color: #e8eee5; }
    .quiz-page .form-text { color: var(--geo-muted); overflow-wrap: anywhere; }
    .quiz-page .bg-light { background-color: #f5f5eb !important; }
    .quiz-page .alert-success { border-color: #d2e6d6; }
    .quiz-page .alert-danger { border-color: #f0d4d1; }
    .quiz-page .option-wrap { position: relative; }
    .quiz-page .option-wrap .option-letter {
        position: absolute; left: 12px; top: 50%; transform: translateY(-50%);
        width: 24px; height: 24px; display: flex; align-items: center; justify-content: center;
        font-size: .75rem; font-weight: 800;
        border-radius: 6px; background: #eef1ea; color: #52645a;
    }
    .quiz-page .option-wrap.correct .option-letter {
        background: var(--geo-green); color: #fff;
    }
    .quiz-page .option-wrap input { padding-left: 46px; }
    .quiz-page .option-wrap.correct input { border-color: var(--geo-green); background: #f3fbf5; }
    @keyframes quizFlash {
        0% { background: #e1eee4; }
        100% { background: transparent; }
    }
    @keyframes quizCardIn {
        from { opacity: 0; transform: translateY(12px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes quizSparkleDrift {
        from { background-position: 0 0, 0 0, 0 0, 0 0, 0 0; }
        to { background-position: 180px 130px, -210px 150px, 230px -160px, -190px 140px, 170px -120px; }
    }
    @media (max-width: 767.98px) {
        .quiz-page .page-title { font-size: 1.5rem; }
        .quiz-page .stat-box { padding: 16px; }
        .quiz-page .table tbody td { padding: 12px; }
        .quiz-page .module-card { border-radius: 14px; }
        .quiz-page #quizSearch { min-width: 0; }
    }
    @media (prefers-reduced-motion: reduce) {
        .quiz-page *, .quiz-page::before {
            animation-duration: .01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: .01ms !important;
            scroll-behavior: auto !important;
        }
    }
</style>

<div class="quiz-page" id="quizPage"
     data-store-url="{{ route('admin.quiz.store') }}"
     data-base-url="{{ url('/admin/quiz') }}"
     data-selected-lesson="{{ $selectedLessonId ?? '' }}">

    {{-- HEADER --}}
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <div class="small text-primary fw-semibold mb-2">
                <i class="bi bi-patch-question me-1"></i> GEOLEARN GIS / ASSESSMENTS
            </div>
            <h1 class="page-title mb-1">Quiz Management</h1>
            <p class="muted mb-0">Create and manage quiz questions for each lesson.</p>
        </div>
        <button type="button" class="btn primary-btn" id="addQuizBtn"
                {{ !$lessons->count() ? 'disabled' : '' }}>
            <i class="bi bi-plus-lg me-1"></i> Add Question
        </button>
    </div>

    {{-- FLASH --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div id="ajaxAlert" class="alert d-none alert-dismissible fade show" role="alert">
        <span id="ajaxAlertMessage"></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

    @if($lessons->isEmpty())
        <div class="module-card empty-state">
            <div class="empty-icon"><i class="bi bi-journal-plus"></i></div>
            <h5 class="fw-bold">Create a lesson first</h5>
            <p class="muted">Quizzes belong to a lesson. Add at least one lesson before creating questions.</p>
            <a href="{{ route('admin.lessons.index') }}" class="btn primary-btn">
                <i class="bi bi-arrow-left me-1"></i> Go to Lessons
            </a>
        </div>
    @else

        {{-- LESSON SELECTOR --}}
        <div class="module-card p-3 p-md-4 mb-4">
            <div class="row align-items-end g-3">
                <div class="col-md-7">
                    <label for="lessonSelector" class="form-label">Filter by Lesson</label>
                    <select id="lessonSelector" class="form-select">
                        <option value="">All lessons</option>
                        @foreach($lessons as $lesson)
                            <option value="{{ $lesson->id }}"
                                @selected($selectedLessonId == $lesson->id)>
                                {{ $lesson->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-5">
                    <a href="{{ route('admin.lessons.index') }}"
                       class="btn btn-outline-secondary w-100">
                        <i class="bi bi-journal-text me-1"></i> Manage Lessons
                    </a>
                </div>
            </div>
        </div>

        {{-- STATISTICS --}}
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="stat-box">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon"><i class="bi bi-question-circle-fill"></i></div>
                        <div>
                            <div class="muted small">Total Quizzes</div>
                            <div class="fs-4 fw-bold" id="statTotalQuizzes">{{ $stats['total_quizzes'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon violet"><i class="bi bi-collection-fill"></i></div>
                        <div>
                            <div class="muted small">In This Lesson</div>
                            <div class="fs-4 fw-bold" id="statPerLesson">{{ $stats['per_lesson'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon gold"><i class="bi bi-star-fill"></i></div>
                        <div>
                            <div class="muted small">Total Marks</div>
                            <div class="fs-4 fw-bold" id="statTotalMarks">{{ $stats['total_marks'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- QUIZ TABLE --}}
        <div class="module-card">
            <div class="p-3 p-md-4 border-bottom">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                    <div>
                        <h5 class="fw-bold mb-1">Quiz Questions</h5>
                        <p class="muted small mb-0" id="lessonTitleLabel">
                            {{ $selectedLesson?->title ?? 'All lessons' }}
                        </p>
                    </div>
                    <div class="input-group" style="max-width:280px;">
                        <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                        <input type="search" class="form-control" id="quizSearch" placeholder="Search questions...">
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover" id="quizTable">
                    <thead>
                        <tr>
                            <th>Question</th>
                            <th>Lesson</th>
                            <th class="text-center">Options</th>
                            <th class="text-center">Correct</th>
                            <th class="text-center">Marks</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="quizTableBody">
                        @forelse($quizzes as $quiz)
                            <tr class="quiz-row" data-id="{{ $quiz->id }}">
                                <td>
                                    <span class="quiz-question js-question">
                                        {{ \Illuminate\Support\Str::limit($quiz->question, 100) }}
                                    </span>
                                    @if($quiz->explanation)
                                        <div class="small muted mt-1">
                                            <i class="bi bi-info-circle me-1"></i>
                                            {{ \Illuminate\Support\Str::limit($quiz->explanation, 70) }}
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    @if($quiz->lesson)
                                        <a href="{{ route('admin.quiz.index', ['lesson_id' => $quiz->lesson_id]) }}"
                                           class="lesson-pill js-lesson">
                                            {{ $quiz->lesson->title }}
                                        </a>
                                    @else
                                        <span class="muted">—</span>
                                    @endif
                                </td>
                                <td class="text-center js-options">
                                    @foreach($quiz->options() as $letter => $text)
                                        <span class="option-chip {{ $quiz->isCorrect($letter) ? 'correct' : '' }}"
                                              title="{{ $text }}">
                                            {{ $letter }}
                                        </span>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-success js-correct">
                                        {{ $quiz->correct_option }}
                                    </span>
                                </td>
                                <td class="text-center js-marks">{{ $quiz->marks }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <button type="button"
                                                class="btn btn-outline-secondary action-btn viewQuizBtn"
                                                title="View question"
                                                data-id="{{ $quiz->id }}">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-outline-primary action-btn editQuizBtn"
                                                title="Edit question"
                                                data-id="{{ $quiz->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-outline-danger action-btn deleteQuizBtn"
                                                title="Delete question"
                                                data-id="{{ $quiz->id }}">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr id="emptyRow">
                                <td colspan="6">
                                    <div class="empty-state">
                                        <div class="empty-icon"><i class="bi bi-patch-question"></i></div>
                                        <h5 class="fw-bold">No quiz questions yet</h5>
                                        <p class="muted">
                                            @if($selectedLesson)
                                                Add the first question to {{ $selectedLesson->title }}.
                                            @else
                                                Add the first quiz question to any lesson.
                                            @endif
                                        </p>
                                        <button type="button" class="btn primary-btn" id="emptyAddQuizBtn">
                                            <i class="bi bi-plus-lg me-1"></i> Add First Question
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforelse

                        <tr id="noQuizResults" style="display:none;">
                            <td colspan="6" class="text-center py-5">No matching quiz questions found.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="p-3 border-top bg-light">
                <small class="muted">
                    Showing <strong id="visibleQuizCount">{{ $quizzes->count() }}</strong>
                    of <strong id="totalQuizCount">{{ $quizzes->count() }}</strong> questions
                </small>
            </div>
        </div>
    @endif
</div>

{{-- ADD / EDIT QUIZ MODAL --}}
<div class="modal fade" id="quizModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius:15px;">
            <form id="quizForm" novalidate>
                @csrf
                <input type="hidden" name="_method" id="quizFormMethod" value="POST">

                <div class="modal-header px-4 py-3">
                    <div>
                        <h5 class="modal-title fw-bold" id="quizModalLabel">Add New Question</h5>
                        <small class="muted">Write the question and its answer options.</small>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body p-4">
                    <div class="alert alert-primary border-0" id="modalLessonInfo">
                        <i class="bi bi-journal-text me-2"></i>
                        Lesson: <strong id="modalLessonTitle">—</strong>
                    </div>

                    <div class="row g-3">

                        <div class="col-md-8">
                            <label for="quizLesson" class="form-label">
                                Lesson <span class="text-danger">*</span>
                            </label>
                            <select name="lesson_id" id="quizLesson" class="form-select" required>
                                <option value="">— Select a lesson —</option>
                                @foreach($lessons as $lesson)
                                    <option value="{{ $lesson->id }}"
                                        @selected($selectedLessonId == $lesson->id)>
                                        {{ $lesson->title }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback" id="err-lesson_id"></div>
                        </div>

                        <div class="col-md-2">
                            <label for="quizMarks" class="form-label">
                                Marks <span class="text-danger">*</span>
                            </label>
                            <input type="number" name="marks" id="quizMarks"
                                   class="form-control" min="1" max="100" value="1" required>
                            <div class="invalid-feedback" id="err-marks"></div>
                        </div>

                        <div class="col-md-2">
                            <label for="quizCorrect" class="form-label">
                                Correct <span class="text-danger">*</span>
                            </label>
                            <select name="correct_option" id="quizCorrect"
                                    class="form-select" required>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                            <div class="invalid-feedback" id="err-correct_option"></div>
                        </div>

                        <div class="col-12">
                            <label for="quizQuestion" class="form-label">
                                Question <span class="text-danger">*</span>
                            </label>
                            <textarea name="question" id="quizQuestion" class="form-control"
                                      rows="3" maxlength="2000" required
                                      placeholder="Enter the question text..."></textarea>
                            <div class="invalid-feedback" id="err-question"></div>
                        </div>

                        @foreach(['a','b','c','d'] as $opt)
                            <div class="col-md-6">
                                <label for="quizOption{{ $opt }}" class="form-label">
                                    Option {{ strtoupper($opt) }}
                                    @if(in_array($opt, ['a','b']))
                                        <span class="text-danger">*</span>
                                    @else
                                        <small class="text-muted">(optional)</small>
                                    @endif
                                </label>
                                <div class="option-wrap" data-option="{{ strtoupper($opt) }}">
                                    <span class="option-letter">{{ strtoupper($opt) }}</span>
                                    <input type="text" name="option_{{ $opt }}"
                                           id="quizOption{{ $opt }}"
                                           class="form-control"
                                           maxlength="500"
                                           @if(in_array($opt, ['a','b'])) required @endif
                                           placeholder="Option {{ strtoupper($opt) }} text...">
                                </div>
                                <div class="invalid-feedback" id="err-option_{{ $opt }}"></div>
                            </div>
                        @endforeach

                                            <div class="col-12">
                            <label for="quizExplanation" class="form-label">
                                Explanation <small class="text-muted">(optional)</small>
                            </label>
                            <textarea name="explanation" id="quizExplanation"
                                      class="form-control" rows="2" maxlength="5000"
                                      placeholder="Shown after the answer is revealed (optional)..."></textarea>
                            <div class="invalid-feedback" id="err-explanation"></div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer bg-light px-4 py-3">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn primary-btn" id="saveQuizBtn">
                        <i class="bi bi-check2-circle me-1"></i> Save Question
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- VIEW QUIZ MODAL --}}
<div class="modal fade" id="viewQuizModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius:15px;">
            <div class="modal-header px-4 py-3">
                <div>
                    <h5 class="modal-title fw-bold">Question Details</h5>
                    <small class="muted" id="viewQuizLesson">—</small>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body p-4">
                <p class="muted small mb-1">Question</p>
                <p class="fw-semibold" id="viewQuizQuestion">—</p>

                <p class="muted small mb-2 mt-3">Options</p>
                <div id="viewQuizOptions"></div>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <p class="muted small mb-1">Correct</p>
                        <p class="fw-bold" id="viewQuizCorrect">—</p>
                    </div>
                    <div class="col-md-4">
                        <p class="muted small mb-1">Marks</p>
                        <p class="fw-bold" id="viewQuizMarks">—</p>
                    </div>
                    <div class="col-md-4">
                        <p class="muted small mb-1">Updated</p>
                        <p class="fw-bold" id="viewQuizUpdated">—</p>
                    </div>
                </div>

                <div id="viewQuizExplanationWrap" class="mt-3 d-none">
                    <p class="muted small mb-1">Explanation</p>
                    <p id="viewQuizExplanation">—</p>
                </div>
            </div>

            <div class="modal-footer bg-light px-4 py-3">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn primary-btn" id="viewQuizEditBtn">
                    <i class="bi bi-pencil-square me-1"></i> Edit
                </button>
            </div>
        </div>
    </div>
</div>

{{-- DELETE CONFIRM --}}
<div class="modal fade" id="deleteQuizModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Delete Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this quiz question?
                <strong>This cannot be undone.</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteQuizBtn">
                    <i class="bi bi-trash3 me-1"></i> Delete
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
$(function () {

    /* ================= Setup ================= */
    const $page    = $('#quizPage');
    const storeUrl = $page.data('store-url');
    const baseUrl  = $page.data('base-url');
    const csrf     = $('meta[name="csrf-token"]').attr('content');

    const $form     = $('#quizForm');
    const $method   = $('#quizFormMethod');
    const $lesson   = $('#quizLesson');
    const $question = $('#quizQuestion');
    const $marks    = $('#quizMarks');
    const $correct  = $('#quizCorrect');
    const $explain  = $('#quizExplanation');
    const $saveBtn  = $('#saveQuizBtn');
    const $modalLbl = $('#quizModalLabel');

    const quizModal   = new bootstrap.Modal(document.getElementById('quizModal'));
    const viewModal   = new bootstrap.Modal(document.getElementById('viewQuizModal'));
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteQuizModal'));

    let editingId  = null;
    let deletingId = null;
    let viewingId  = null;

    /* ================= Helpers ================= */
    function alertBox(message, type) {
        const $box = $('#ajaxAlert');
        $box.removeClass('d-none alert-success alert-danger').addClass('alert-' + type);
        $('#ajaxAlertMessage').text(message);
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function clearFormErrors() {
        $form.find('.is-invalid').removeClass('is-invalid');
        $form.find('.invalid-feedback').text('');
    }

    function showFormErrors(errors) {
        clearFormErrors();
        Object.keys(errors).forEach(function (field) {
            $('[name="' + field + '"]', $form).addClass('is-invalid');
            $('#err-' + field).text(errors[field][0]);
        });
    }

    function escapeHtml(s) {
        return String(s ?? '')
            .replace(/&/g, '&amp;').replace(/</g, '&lt;')
            .replace(/>/g, '&gt;').replace(/"/g, '&quot;')
            .replace(/'/g, '&#39;');
    }

    function updateModalLessonLabel() {
        const lessonText = $lesson.find('option:selected').text() || '—';
        $('#modalLessonTitle').text(lessonText.trim());
    }

    function refreshCorrectHighlight() {
        const selected = $correct.val();
        $form.find('.option-wrap').each(function () {
            $(this).toggleClass('correct', $(this).data('option') === selected);
        });
    }

    $lesson.on('change', updateModalLessonLabel);
    $correct.on('change', refreshCorrectHighlight);

    function resetForm() {
        editingId = null;
        clearFormErrors();
        $form[0].reset();
        $method.val('POST');
        $form.attr('action', storeUrl);
        $question.val('');
        $marks.val(1);
        $correct.val('A');
        $explain.val('');
        $lesson.val($page.data('selected-lesson') || '');
        $modalLbl.text('Add New Question');
        $saveBtn.html('<i class="bi bi-check2-circle me-1"></i> Save Question');
        updateModalLessonLabel();
        refreshCorrectHighlight();
    }

    function updateStats(stats) {
        if (!stats) return;
        if (stats.total_quizzes !== undefined) $('#statTotalQuizzes').text(stats.total_quizzes);
        if (stats.per_lesson   !== undefined) $('#statPerLesson').text(stats.per_lesson);
        if (stats.total_marks  !== undefined) $('#statTotalMarks').text(stats.total_marks);
    }

    function renderOptionChips(quiz) {
        let html = '';
        ['A', 'B', 'C', 'D'].forEach(function (letter) {
            if (quiz['option_' + letter.toLowerCase()]) {
                const isCorrect = quiz.correct_option === letter;
                html += `<span class="option-chip ${isCorrect ? 'correct' : ''}">${letter}</span>`;
            }
        });
        return html;
    }

    function renderQuizRow(quiz) {
        const safeQuestion   = escapeHtml(quiz.question).substring(0, 140);
        const safeLessonName = escapeHtml(quiz.lesson_title || '—');
        const lessonUrl      = `${baseUrl}?lesson_id=${quiz.lesson_id}`;

        const explanation = quiz.explanation
            ? `<div class="small muted mt-1"><i class="bi bi-info-circle me-1"></i>${escapeHtml(quiz.explanation).substring(0, 90)}</div>`
            : '';

        return `
            <tr class="quiz-row row-flash" data-id="${quiz.id}">
                <td>
                    <span class="quiz-question js-question">${safeQuestion}</span>
                    ${explanation}
                </td>
                <td>
                    <a href="${lessonUrl}" class="lesson-pill js-lesson">${safeLessonName}</a>
                </td>
                <td class="text-center js-options">${renderOptionChips(quiz)}</td>
                <td class="text-center">
                    <span class="badge bg-success js-correct">${escapeHtml(quiz.correct_option)}</span>
                </td>
                <td class="text-center js-marks">${quiz.marks}</td>
                <td>
                    <div class="d-flex justify-content-center gap-2">
                        <button type="button" class="btn btn-outline-secondary action-btn viewQuizBtn" title="View question" data-id="${quiz.id}">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary action-btn editQuizBtn" title="Edit question" data-id="${quiz.id}">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button type="button" class="btn btn-outline-danger action-btn deleteQuizBtn" title="Delete question" data-id="${quiz.id}">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </div>
                </td>
            </tr>
        `;
    }

    function bindRowActions($row) {
        $row.find('.editQuizBtn').on('click', function () {
            openEditModal($(this).data('id'));
        });
        $row.find('.viewQuizBtn').on('click', function () {
            openViewModal($(this).data('id'));
        });
        $row.find('.deleteQuizBtn').on('click', function () {
            deletingId = $(this).data('id');
            deleteModal.show();
        });
    }

    /* ================= Lesson selector ================= */
    $('#lessonSelector').on('change', function () {
        const url = new URL(window.location.href);
        if (this.value) url.searchParams.set('lesson_id', this.value);
        else            url.searchParams.delete('lesson_id');
        window.location.href = url.toString();
    });

    /* ================= Add ================= */
    function openAddModal() {
        resetForm();
        quizModal.show();
    }

    $('#addQuizBtn, #emptyAddQuizBtn').on('click', openAddModal);

    /* ================= Initial row binding ================= */
    $('#quizTableBody .quiz-row').each(function () {
        bindRowActions($(this));
    });

    /* ================= Edit ================= */
    function openEditModal(id) {
        resetForm();

        $.ajax({
            url: baseUrl + '/' + id,
            type: 'GET',
            headers: { 'Accept': 'application/json' }
        }).done(function (res) {
            if (!res.success) return;

            const q = res.quiz;

            editingId = q.id;
            $method.val('PUT');
            $form.attr('action', baseUrl + '/' + id);
            $lesson.val(q.lesson_id);
            $question.val(q.question);
            $('#quizOptiona').val(q.option_a || '');
            $('#quizOptionb').val(q.option_b || '');
            $('#quizOptionc').val(q.option_c || '');
            $('#quizOptiond').val(q.option_d || '');
            $marks.val(q.marks);
            $correct.val(q.correct_option);
            $explain.val(q.explanation || '');
            $modalLbl.text('Edit Question');
            $saveBtn.html('<i class="bi bi-check2-circle me-1"></i> Update Question');
            updateModalLessonLabel();
            refreshCorrectHighlight();
            quizModal.show();
        }).fail(function () {
            alertBox('Could not load quiz details.', 'danger');
        });
    }

    /* ================= View ================= */
    function openViewModal(id) {
        viewingId = id;

        $.ajax({
            url: baseUrl + '/' + id,
            type: 'GET',
            headers: { 'Accept': 'application/json' }
        }).done(function (res) {
            if (!res.success) return;

            const q = res.quiz;

            $('#viewQuizLesson').text(q.lesson_title || '—');
            $('#viewQuizQuestion').text(q.question);
            $('#viewQuizCorrect').text(q.correct_option);
            $('#viewQuizMarks').text(q.marks);
            $('#viewQuizUpdated').text(q.updated_at || '—');

            let optsHtml = '';
            ['A', 'B', 'C', 'D'].forEach(function (letter) {
                const val = q['option_' + letter.toLowerCase()];
                if (!val) return;
                const isCorrect = q.correct_option === letter;
                optsHtml += `
                    <div class="d-flex align-items-start gap-2 mb-2">
                        <span class="badge ${isCorrect ? 'bg-success' : 'bg-secondary'}">${letter}</span>
                        <span class="${isCorrect ? 'fw-bold' : ''}">${escapeHtml(val)}</span>
                        ${isCorrect ? '<span class="badge bg-success-subtle text-success ms-2">Correct</span>' : ''}
                    </div>
                `;
            });
            $('#viewQuizOptions').html(optsHtml);

            if (q.explanation) {
                $('#viewQuizExplanationWrap').removeClass('d-none');
                $('#viewQuizExplanation').text(q.explanation);
            } else {
                $('#viewQuizExplanationWrap').addClass('d-none');
            }

            viewModal.show();
        }).fail(function () {
            alertBox('Could not load quiz details.', 'danger');
        });
    }

    $('#viewQuizEditBtn').on('click', function () {
        if (!viewingId) return;
        viewModal.hide();
        setTimeout(function () { openEditModal(viewingId); }, 250);
    });

    /* ================= Submit (add / update) ================= */
    $form.on('submit', function (e) {
        e.preventDefault();
        clearFormErrors();

        const isUpdate = editingId !== null;
        const url      = isUpdate ? baseUrl + '/' + editingId : storeUrl;

        const formData = new FormData($form[0]);
        formData.set('_method', isUpdate ? 'PUT' : 'POST');

        $saveBtn.prop('disabled', true)
                .html('<span class="spinner-border spinner-border-sm me-2"></span>Saving...');

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: { 'Accept': 'application/json' }
        }).done(function (res) {
            if (!res.success) {
                alertBox(res.message || 'Something went wrong.', 'danger');
                return;
            }

            const q = res.quiz;
            const $body = $('#quizTableBody');

            if (isUpdate) {
                const $row = $body.find('tr.quiz-row[data-id="' + q.id + '"]');
                if ($row.length) {
                    $row.replaceWith(renderQuizRow(q));
                    const $newRow = $body.find('tr.quiz-row[data-id="' + q.id + '"]');
                    bindRowActions($newRow);
                    setTimeout(() => $newRow.removeClass('row-flash'), 1300);
                }
            } else {
                $('#emptyRow').remove();
                $('#noQuizResults').hide();

                const $row = $(renderQuizRow(q));
                $body.prepend($row);
                bindRowActions($row);
                setTimeout(() => $row.removeClass('row-flash'), 1300);
            }

            updateStats(res.stats);
            quizModal.hide();
            alertBox(res.message, 'success');
            applySearch();

        }).fail(function (xhr) {
            if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
                showFormErrors(xhr.responseJSON.errors);
            } else {
                alertBox(
                    (xhr.responseJSON && xhr.responseJSON.message) || 'Server error. Please try again.',
                    'danger'
                );
            }
        }).always(function () {
            $saveBtn.prop('disabled', false)
                    .html(isUpdate
                        ? '<i class="bi bi-check2-circle me-1"></i> Update Question'
                        : '<i class="bi bi-check2-circle me-1"></i> Save Question');
        });
    });

    /* ================= Delete ================= */
    $('#confirmDeleteQuizBtn').on('click', function () {
        if (!deletingId) return;

        const $btn = $(this).prop('disabled', true)
            .html('<span class="spinner-border spinner-border-sm me-2"></span>Deleting...');

        $.ajax({
            url: baseUrl + '/' + deletingId,
            type: 'POST',
            data: { _token: csrf, _method: 'DELETE' },
            headers: { 'Accept': 'application/json' }
        }).done(function (res) {
            const $row = $('#quizTableBody tr.quiz-row[data-id="' + deletingId + '"]');
            $row.fadeOut(200, function () {
                $(this).remove();
                if ($('#quizTableBody tr.quiz-row').length === 0) {
                    const lessonName = $('#lessonTitleLabel').text().trim();
                    $('#quizTableBody').prepend(`
                        <tr id="emptyRow">
                            <td colspan="6">
                                <div class="empty-state">
                                    <div class="empty-icon"><i class="bi bi-patch-question"></i></div>
                                    <h5 class="fw-bold">No quiz questions yet</h5>
                                    <p class="muted">Add the first question to ${escapeHtml(lessonName)}.</p>
                                    <button type="button" class="btn primary-btn" id="emptyAddQuizBtn">
                                        <i class="bi bi-plus-lg me-1"></i> Add First Question
                                    </button>
                                </div>
                            </td>
                        </tr>
                    `);
                    $('#emptyAddQuizBtn').on('click', openAddModal);
                }
            });

            updateStats(res.stats);
            alertBox(res.message, 'success');
            deleteModal.hide();
            deletingId = null;
            applySearch();
        }).fail(function (xhr) {
            alertBox(
                (xhr.responseJSON && xhr.responseJSON.message) || 'Could not delete question.',
                'danger'
            );
        }).always(function () {
            $btn.prop('disabled', false).html('<i class="bi bi-trash3 me-1"></i> Delete');
        });
    });

    /* ================= Search ================= */
    function applySearch() {
        const q = ($('#quizSearch').val() || '').trim().toLowerCase();
        const $rows = $('#quizTableBody tr.quiz-row');
        let visible = 0;

        $rows.each(function () {
            const matches = $(this).text().toLowerCase().indexOf(q) !== -1;
            $(this).toggle(matches);
            if (matches) visible++;
        });

        $('#visibleQuizCount').text(visible);
        $('#totalQuizCount').text($rows.length);
        $('#noQuizResults').toggle($rows.length > 0 && visible === 0);
    }
    $('#quizSearch').on('input', applySearch);

});
</script>
@endpush
