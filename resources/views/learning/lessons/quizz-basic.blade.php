<h1 id="page-title">Module Quizzes</h1>
<p id="summary" class="loading">Loading…</p>

<div class="note">
    <p style="margin:0">
        <strong>How it works:</strong> Pick the correct answer for each question.
        Click <em>Show answer</em> to reveal the correct option and its explanation.
    </p>
</div>

<div id="lessons-container"></div>

<style>
    .quiz { background:#F8FAFC; border-left:5px solid #2196F3; border-radius:6px; padding:14px 18px; margin:14px 0; }
    .quiz .question { font-weight:700; font-size:15px; margin-bottom:8px; }
    .quiz .marks { font-size:12px; color:#888; margin-bottom:8px; }
    .quiz ul { list-style:none; margin:0 0 10px; padding:0; }
    .quiz li { padding:9px 13px; margin:6px 0; border-radius:4px; background:#fff; border:1px solid #e5e7eb; font-size:14px; cursor:pointer; transition:all .15s ease; }
    .quiz li:hover { background:#F1F5F9; border-color:#cbd5e1; }
    .quiz li.selected { background:#E3F2FD; border-color:#2196F3; }
    .quiz li.correct  { background:#E8F5E9; border-color:#04AA6D; color:#1B5E20; font-weight:600; }
    .quiz li.wrong    { background:#FFEBEE; border-color:#E53935; color:#B71C1C; }
    .quiz li.correct::after { content:" ✓"; }
    .quiz li.wrong::after   { content:" ✗"; }
    .quiz .explanation { display:none; font-size:13px; color:#444; background:#FFFDE7; border-left:4px solid #FFC107; padding:8px 12px; border-radius:4px; margin-top:8px; }
    .quiz .explanation.show { display:block; }
    .quiz .toggle-answer { background:#fff; color:#282A35; border:1px solid #cbd5e1; padding:6px 13px; border-radius:5px; font-size:13px; cursor:pointer; }
    .quiz .toggle-answer:hover { background:#F1F5F9; }
    .lesson-section > h2 { display:flex; align-items:center; gap:10px; font-size:20px; border-bottom:2px solid #e5e5e5; padding-bottom:6px; margin-top:34px; }
    .badge { background:#282A35; color:#fff; font-size:11px; padding:2px 8px; border-radius:10px; font-weight:500; }
    .loading { color:#666; font-style:italic; }
    .empty   { text-align:center; color:#999; padding:40px; }
</style>

<script>
    var module_id = @json($module_id);

    $(document).ready(function () {
        $.ajax({
            url: "/quizz",
            type: "POST",
            data: { module_id: module_id, _token: "{{ csrf_token() }}" },
            dataType: "json",
            success: renderPage,
            error: function (xhr) {
                $('#summary').text('Failed to load quizzes.').removeClass('loading');
                console.error(xhr.responseText || xhr.statusText);
            }
        });
    });

    function renderPage(data) {
        $('#page-title').text(data.module.title);
        $('#summary').removeClass('loading').html(
            '<strong>' + data.total_quizzes + '</strong> quiz' +
            (data.total_quizzes === 1 ? '' : 'zes') + ' across ' +
            data.lessons.length + ' lesson' +
            (data.lessons.length === 1 ? '' : 's') + '.'
        );

        var $c = $('#lessons-container').empty();

        if (!data.lessons.length) {
            $c.append('<div class="empty">No quizzes in this module yet.</div>');
            return;
        }

        data.lessons.forEach(function (lesson) {
            var $section = $('<div class="lesson-section"></div>');

            $section.append(
                '<h2>' + escapeHtml(lesson.title) +
                '<span class="badge">' + lesson.quiz_count + ' quiz' +
                (lesson.quiz_count === 1 ? '' : 'zes') + '</span></h2>'
            );

            lesson.quizzes.forEach(function (quiz, idx) {
                $section.append(buildQuiz(quiz, idx));
            });

            $c.append($section);
        });
    }

    function buildQuiz(quiz, idx) {
        var $quiz = $('<div class="quiz"></div>')
            .attr('data-correct', quiz.correct_option)
            .attr('data-revealed', '0');

        $quiz.append('<div class="question">Q' + (idx + 1) + '. ' + escapeHtml(quiz.question) + '</div>');
        $quiz.append('<div class="marks">Marks: ' + quiz.marks + '</div>');

        var $ul = $('<ul></ul>');
        Object.keys(quiz.options).forEach(function (key) {
            $ul.append(
                '<li data-option="' + key + '"><strong>' + key + '.</strong> ' +
                escapeHtml(quiz.options[key]) + '</li>'
            );
        });
        $quiz.append($ul);

        $quiz.append('<button type="button" class="toggle-answer">Show answer</button>');

        if (quiz.explanation) {
            $quiz.append(
                '<div class="explanation"><strong>Explanation:</strong> ' +
                escapeHtml(quiz.explanation) + '</div>'
            );
        }

        return $quiz;
    }

    $(document).on('click', '.quiz li', function () {
        var $quiz = $(this).closest('.quiz');
        if ($quiz.attr('data-revealed') === '1') return;
        $quiz.find('li').removeClass('selected');
        $(this).addClass('selected');
    });

    $(document).on('click', '.toggle-answer', function () {
        var $btn     = $(this);
        var $quiz    = $btn.closest('.quiz');
        var correct  = $quiz.attr('data-correct');
        var $lis     = $quiz.find('li');
        var revealed = $quiz.attr('data-revealed') === '1';

        if (!revealed) {
            $lis.each(function () {
                var opt = $(this).attr('data-option');
                $(this)
                    .removeClass('selected wrong correct')
                    .addClass(opt === correct ? 'correct' : 'wrong');
            });
            $quiz.find('.explanation').addClass('show');
            $quiz.attr('data-revealed', '1');
            $btn.text('Hide answer');
        } else {
            $lis.removeClass('correct wrong selected');
            $quiz.find('.explanation').removeClass('show');
            $quiz.attr('data-revealed', '0');
            $btn.text('Show answer');
        }
    });

    function escapeHtml(s) {
        if (s === null || s === undefined) return '';
        return String(s).replace(/[&<>"']/g, function (c) {
            return { '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;' }[c];
        });
    }
</script>
