@extends('layouts.dashboard')

@section('title', 'Lesson Management')

@section('dashboard-content')

<style>
    .lesson-page { color: #1e293b; }
    .lesson-page .module-card {
        background: #fff; border: 1px solid #e8edf4; border-radius: 14px;
        box-shadow: 0 3px 14px rgba(15, 23, 42, .035);
    }
    .lesson-page .page-title { font-size: 1.65rem; font-weight: 750; letter-spacing: -.4px; }
    .lesson-page .muted { color: #64748b; }
    .lesson-page .primary-btn {
        background: #2563eb; color: #fff; border: 1px solid #2563eb;
        border-radius: 9px; padding: 10px 16px; font-weight: 600;
    }
    .lesson-page .primary-btn:hover { background: #1d4ed8; color: #fff; }
    .lesson-page .stat-box {
        border: 1px solid #e8edf4; background: #fff; border-radius: 12px;
        padding: 18px; height: 100%;
    }
    .lesson-page .stat-icon {
        display: flex; align-items: center; justify-content: center;
        width: 44px; height: 44px; border-radius: 12px;
        background: #eff6ff; color: #2563eb; font-size: 1.25rem;
    }
    .lesson-page .form-control,
    .lesson-page .form-select {
        border-color: #dce3ed; border-radius: 8px; padding: 10px 12px;
    }
    .lesson-page .form-label { font-size: .875rem; font-weight: 650; margin-bottom: 7px; }
    .lesson-page .table { margin-bottom: 0; }
    .lesson-page .table thead th {
        background: #f8fafc; color: #64748b; text-transform: uppercase;
        font-size: .75rem; letter-spacing: .4px; padding: 14px 16px; white-space: nowrap;
    }
    .lesson-page .table tbody td {
        padding: 16px; border-color: #eef2f7; vertical-align: middle;
    }
    .lesson-page .lesson-number {
        display: flex; align-items: center; justify-content: center;
        width: 42px; height: 42px; flex-shrink: 0;
        background: #eff6ff; color: #2563eb; border-radius: 11px; font-weight: 700;
    }
    .lesson-page .action-btn {
        width: 35px; height: 35px; display: inline-flex;
        justify-content: center; align-items: center; border-radius: 8px;
    }
    .lesson-page .empty-state { padding: 48px 20px; text-align: center; }
    .lesson-page .empty-icon {
        width: 65px; height: 65px; margin: 0 auto 15px;
        display: flex; align-items: center; justify-content: center;
        border-radius: 17px; background: #eff6ff; color: #2563eb; font-size: 1.8rem;
    }
    .lesson-page .table tbody tr.row-flash { animation: lessonFlash 1.2s ease; }
    @keyframes lessonFlash {
        0%   { background: #dbeafe; }
        100% { background: transparent; }
    }
</style>

<div class="lesson-page" id="lessonPage"
     data-store-url="{{ route('admin.lessons.store') }}"
     data-base-url="{{ url('/admin/lessons') }}"
     data-selected-course="{{ $selectedCourse->id ?? '' }}"
     data-selected-module="{{ $selectedModule->id ?? '' }}">

    {{-- HEADER --}}
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <div class="small text-primary fw-semibold mb-2">
                <i class="bi bi-journal-text me-1"></i> GEOLEARN GIS / COURSE CONTENT
            </div>
            <h1 class="page-title mb-1">Lesson Management</h1>
            <p class="muted mb-0">Add, edit and organise the lessons inside a course module.</p>
        </div>
        <button type="button" class="btn primary-btn" id="addLessonBtn"
                {{ !$selectedModule ? 'disabled' : '' }}>
            <i class="bi bi-plus-lg me-1"></i> Add Lesson
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

    @if($courses->isEmpty())
        <div class="module-card empty-state">
            <div class="empty-icon"><i class="bi bi-journal-plus"></i></div>
            <h5 class="fw-bold">Create a course first</h5>
            <p class="muted">You need at least one course (and module) before adding lessons.</p>
            <a href="{{ route('admin.course') }}" class="btn primary-btn">
                <i class="bi bi-arrow-left me-1"></i> Go to Courses
            </a>
        </div>
    @elseif($modules->isEmpty())
        <div class="module-card empty-state">
            <div class="empty-icon"><i class="bi bi-layers"></i></div>
            <h5 class="fw-bold">Add modules to this course</h5>
            <p class="muted">Lessons live inside modules. Create a module first for <strong>{{ $selectedCourse->title }}</strong>.</p>
            <a href="{{ route('admin.modules', ['course_id' => $selectedCourse->id]) }}" class="btn primary-btn">
                <i class="bi bi-arrow-left me-1"></i> Go to Modules
            </a>
        </div>
    @else

        {{-- COURSE + MODULE SELECTORS --}}
        <div class="module-card p-3 p-md-4 mb-4">
            <div class="row align-items-end g-3">
                <div class="col-md-5">
                    <label for="courseSelector" class="form-label">Course</label>
                    <select id="courseSelector" class="form-select">
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}"
                                {{ $selectedCourse->id == $course->id ? 'selected' : '' }}>
                                {{ $course->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="moduleSelector" class="form-label">Module</label>
                    <select id="moduleSelector" class="form-select">
                        @foreach($modules as $module)
                            <option value="{{ $module->id }}"
                                {{ $selectedModule->id == $module->id ? 'selected' : '' }}>
                                #{{ $module->sort_order }} — {{ $module->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('admin.modules', ['course_id' => $selectedCourse->id]) }}"
                       class="btn btn-outline-secondary w-100">
                        <i class="bi bi-layers me-1"></i> Modules
                    </a>
                </div>
            </div>
        </div>

        {{-- STATISTICS --}}
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="stat-box">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon"><i class="bi bi-file-text-fill"></i></div>
                        <div>
                            <div class="muted small">Total Lessons</div>
                            <div class="fs-4 fw-bold" id="statTotalLessons">{{ $lessons->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="stat-box">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon" style="background:#f5f3ff;color:#7c3aed;">
                            <i class="bi bi-question-circle-fill"></i>
                        </div>
                        <div>
                            <div class="muted small">Quizzes</div>
                            <div class="fs-4 fw-bold" id="statTotalQuizzes">{{ $lessons->sum('quizzes_count') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- LESSON TABLE --}}
        <div class="module-card">
            <div class="p-3 p-md-4 border-bottom">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                    <div>
                        <h5 class="fw-bold mb-1">Module Lessons</h5>
                        <p class="muted small mb-0" id="moduleTitleLabel">
                            {{ $selectedModule->title }}
                        </p>
                    </div>
                    <div class="input-group" style="max-width:280px;">
                        <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                        <input type="search" class="form-control" id="lessonSearch" placeholder="Search lessons...">
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover" id="lessonTable">
                    <thead>
                        <tr>
                            <th style="width:70px;">Order</th>
                            <th>Lesson</th>
                            <th>Created</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="lessonTableBody">
                        @forelse($lessons as $lesson)
                            <tr class="lesson-row" data-id="{{ $lesson->id }}">
                                <td>
                                    <div class="lesson-number">{{ $lesson->sort_order }}</div>
                                </td>
                                <td>
                                    <div class="fw-semibold js-title">{{ $lesson->title }}</div>
                                    <div class="small muted mt-1 js-slug">
                                        Slug: <code>{{ $lesson->slug }}</code>
                                    </div>
                                </td>
                                <td class="muted small js-created">{{ $lesson->created_at->format('d M Y') }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <button type="button"
                                                class="btn btn-outline-primary action-btn editLessonBtn"
                                                title="Edit lesson"
                                                data-id="{{ $lesson->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-outline-danger action-btn deleteLessonBtn"
                                                title="Delete lesson"
                                                data-id="{{ $lesson->id }}">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr id="emptyRow">
                                <td colspan="4">
                                    <div class="empty-state">
                                        <div class="empty-icon"><i class="bi bi-journal-text"></i></div>
                                        <h5 class="fw-bold">No lessons yet</h5>
                                        <p class="muted">Add the first lesson to {{ $selectedModule->title }}.</p>
                                        <button type="button" class="btn primary-btn" id="emptyAddLessonBtn">
                                            <i class="bi bi-plus-lg me-1"></i> Add First Lesson
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforelse

                        <tr id="noLessonResults" style="display:none;">
                            <td colspan="4" class="text-center py-5">No matching lessons found.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="p-3 border-top bg-light">
                <small class="muted">
                    Showing <strong id="visibleLessonCount">{{ $lessons->count() }}</strong>
                    of <strong id="totalLessonCount">{{ $lessons->count() }}</strong> lessons
                </small>
            </div>
        </div>
    @endif
</div>

{{-- ADD / EDIT LESSON MODAL --}}
<div class="modal fade" id="lessonModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius:15px;">
            <form id="lessonForm" novalidate>
                @csrf
                <input type="hidden" name="_method" id="lessonFormMethod" value="POST">
                <input type="hidden" name="course_module_id" id="lessonModuleId"
                       value="{{ $selectedModule->id ?? '' }}">

                <div class="modal-header px-4 py-3">
                    <div>
                        <h5 class="modal-title fw-bold" id="lessonModalLabel">Add New Lesson</h5>
                        <small class="muted">Organize your course content.</small>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body p-4">
                    <div class="alert alert-primary border-0" id="modalModuleInfo">
                        <i class="bi bi-layers me-2"></i>
                        Module: <strong id="modalModuleTitle">{{ $selectedModule->title ?? '' }}</strong>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="lessonTitle" class="form-label">
                                Lesson Title <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="title" id="lessonTitle"
                                   maxlength="255" placeholder="e.g. Introduction" required>
                            <div class="invalid-feedback" id="err-title"></div>
                        </div>

                        {{-- EDITABLE SLUG FIELD --}}
                        <div class="col-md-6">
                            <label for="lessonSlug" class="form-label">Slug (Blade filename)</label>
                            <input type="text" class="form-control" name="slug" id="lessonSlug"
                                   maxlength="255" placeholder="e.g. intro">
                            <div class="form-text">Filename: <code>resources/views/learning/lessons/<span id="slugPreview">slug</span>.blade.php</code></div>
                            <div class="invalid-feedback" id="err-slug"></div>
                        </div>

                        <div class="col-md-4">
                            <label for="lessonOrder" class="form-label">
                                Display Order <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control" name="sort_order" id="lessonOrder"
                                   min="1" value="{{ $lessons->count() + 1 }}" required>
                            <div class="invalid-feedback" id="err-sort_order"></div>
                        </div>

                        <div class="col-12">
                            <label for="lessonContent" class="form-label">Lesson Content (HTML)</label>
                            <textarea class="form-control" name="content" id="lessonContent"
                                      rows="6"
                                      placeholder="Write the lesson body (Fallback if blade file missing)..."></textarea>
                            <div class="invalid-feedback" id="err-content"></div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer bg-light px-4 py-3">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn primary-btn" id="saveLessonBtn">
                        <i class="bi bi-check2-circle me-1"></i> Save Lesson
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- DELETE CONFIRM --}}
<div class="modal fade" id="deleteLessonModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Delete Lesson</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this lesson?
                <strong>Related quizzes may also be deleted.</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteLessonBtn">
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
    const $page      = $('#lessonPage');
    const storeUrl   = $page.data('store-url');
    const baseUrl    = $page.data('base-url');
    const csrf       = $('meta[name="csrf-token"]').attr('content');

    const $form      = $('#lessonForm');
    const $method    = $('#lessonFormMethod');
    const $title     = $('#lessonTitle');
    const $slug      = $('#lessonSlug');
    const $content   = $('#lessonContent');
    const $order     = $('#lessonOrder');
    const $moduleId  = $('#lessonModuleId');
    const $saveBtn   = $('#saveLessonBtn');
    const $modalLbl  = $('#lessonModalLabel');

    const lessonModal = new bootstrap.Modal(document.getElementById('lessonModal'));
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteLessonModal'));

    let editingId  = null;
    let deletingId = null;

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

    // Auto-generate slug preview from title (only for ADD)
    function slugify(text) {
        return text.toString().toLowerCase().trim()
            .replace(/[^\w\s-]/g, '')
            .replace(/[\s_-]+/g, '-')
            .replace(/^-+|-+$/g, '');
    }

    $title.on('input', function () {
        if (editingId === null) { // only auto-generate on ADD
            const newSlug = slugify($(this).val());
            $slug.val(newSlug);
            $('#slugPreview').text(newSlug || 'slug');
        }
    });

    $slug.on('input', function () {
        $('#slugPreview').text($(this).val() || 'slug');
    });

    function resetForm() {
        editingId = null;
        clearFormErrors();
        $form[0].reset();
        $method.val('POST');
        $form.attr('action', storeUrl);
        $title.val('');
        $slug.val('');
        $('#slugPreview').text('slug');
        $content.val('');
        $moduleId.val($page.data('selected-module'));
        $order.val(parseInt($('#totalLessonCount').text() || 0) + 1);
        $modalLbl.text('Add New Lesson');
        $saveBtn.html('<i class="bi bi-check2-circle me-1"></i> Save Lesson');
    }

    function openAddModal() {
        resetForm();
        lessonModal.show();
    }

    function updateStats(stats) {
        if (!stats) return;
        $('#statTotalLessons').text(stats.total_lessons);
        $('#statTotalQuizzes').text(stats.total_quizzes);
        $('#totalLessonCount').text(stats.total_lessons);
        $('#visibleLessonCount').text(stats.total_lessons);
        if (stats.next_order) $order.val(stats.next_order);
    }

    function bindRowActions($row) {
        $row.find('.editLessonBtn').on('click', function () {
            openEditModal($(this).data('id'));
        });
        $row.find('.deleteLessonBtn').on('click', function () {
            deletingId = $(this).data('id');
            deleteModal.show();
        });
    }

    function escapeHtml(s) {
        return String(s ?? '')
            .replace(/&/g, '&amp;').replace(/</g, '&lt;')
            .replace(/>/g, '&gt;').replace(/"/g, '&quot;')
            .replace(/'/g, '&#39;');
    }

    /* ================= Selectors ================= */
    $('#courseSelector').on('change', function () {
        const url = new URL(window.location.href);
        url.searchParams.set('course_id', this.value);
        url.searchParams.delete('module_id');
        window.location.href = url.toString();
    });

    $('#moduleSelector').on('change', function () {
        const url = new URL(window.location.href);
        url.searchParams.set('module_id', this.value);
        window.location.href = url.toString();
    });

    /* ================= Add ================= */
    $('#addLessonBtn, #emptyAddLessonBtn').on('click', openAddModal);

    /* ================= Row actions (initial) ================= */
    $('#lessonTableBody .lesson-row').each(function () {
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

            const l = res.lesson;

            editingId = l.id;
            $method.val('PUT');
            $form.attr('action', baseUrl + '/' + id);
            $moduleId.val(l.course_module_id);
            $title.val(l.title);
            $slug.val(l.slug || '');
            $('#slugPreview').text(l.slug || 'slug');
            $content.val(l.content || '');
            $order.val(l.sort_order);
            $modalLbl.text('Update Lesson');
            $saveBtn.html('<i class="bi bi-check2-circle me-1"></i> Update Lesson');
            lessonModal.show();
        }).fail(function () {
            alertBox('Could not load lesson details.', 'danger');
        });
    }

    /* ================= Submit (add / update) ================= */
    $form.on('submit', function (e) {
        e.preventDefault();
        clearFormErrors();

        const isUpdate = editingId !== null;
        const url      = isUpdate ? baseUrl + '/' + editingId : storeUrl;

        const formData = new FormData($form[0]);
        formData.set('_method', isUpdate ? 'PUT' : 'POST');
        formData.set('course_module_id', $moduleId.val());

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

            const l = res.lesson;
            const $body = $('#lessonTableBody');

            if (isUpdate) {
                const $row = $body.find('tr.lesson-row[data-id="' + l.id + '"]');
                if ($row.length) {
                    $row.find('.lesson-number').text(l.sort_order);
                    $row.find('.js-title').text(l.title);
                    $row.find('.js-slug').html('Slug: <code>' + escapeHtml(l.slug || '') + '</code>');
                    $row.find('.js-created').text(l.created_at);
                    $row.addClass('row-flash');
                    setTimeout(() => $row.removeClass('row-flash'), 1300);
                }
            } else {
                $('#emptyRow').remove();
                $('#noLessonResults').hide();

                const $row = $(`
                    <tr class="lesson-row row-flash" data-id="${l.id}">
                        <td><div class="lesson-number">${l.sort_order}</div></td>
                        <td>
                            <div class="fw-semibold js-title">${escapeHtml(l.title)}</div>
                            <div class="small muted mt-1 js-slug">Slug: <code>${escapeHtml(l.slug || '')}</code></div>
                        </td>
                        <td class="muted small js-created">${escapeHtml(l.created_at)}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <button type="button" class="btn btn-outline-primary action-btn editLessonBtn" title="Edit" data-id="${l.id}">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button type="button" class="btn btn-outline-danger action-btn deleteLessonBtn" title="Delete" data-id="${l.id}">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `);
                $body.prepend($row);
                bindRowActions($row);
                setTimeout(() => $row.removeClass('row-flash'), 1300);
            }

            updateStats(res.stats);
            lessonModal.hide();
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
                        ? '<i class="bi bi-check2-circle me-1"></i> Update Lesson'
                        : '<i class="bi bi-check2-circle me-1"></i> Save Lesson');
        });
    });

    /* ================= Delete ================= */
    $('#confirmDeleteLessonBtn').on('click', function () {
        if (!deletingId) return;

        const $btn = $(this).prop('disabled', true)
            .html('<span class="spinner-border spinner-border-sm me-2"></span>Deleting...');

        $.ajax({
            url: baseUrl + '/' + deletingId,
            type: 'POST',
            data: { _token: csrf, _method: 'DELETE' },
            headers: { 'Accept': 'application/json' }
        }).done(function (res) {
            const $row = $('#lessonTableBody tr.lesson-row[data-id="' + deletingId + '"]');
            $row.fadeOut(200, function () {
                $(this).remove();
                if ($('#lessonTableBody tr.lesson-row').length === 0) {
                    const moduleTitle = $('#moduleTitleLabel').text();
                    $('#lessonTableBody').prepend(`
                        <tr id="emptyRow">
                            <td colspan="4">
                                <div class="empty-state">
                                    <div class="empty-icon"><i class="bi bi-journal-text"></i></div>
                                    <h5 class="fw-bold">No lessons yet</h5>
                                    <p class="muted">Add the first lesson to ${escapeHtml(moduleTitle)}.</p>
                                    <button type="button" class="btn primary-btn" id="emptyAddLessonBtn">
                                        <i class="bi bi-plus-lg me-1"></i> Add First Lesson
                                    </button>
                                </div>
                            </td>
                        </tr>
                    `);
                    $('#emptyAddLessonBtn').on('click', openAddModal);
                }
            });

            updateStats(res.stats);
            alertBox(res.message, 'success');
            deleteModal.hide();
            deletingId = null;
            applySearch();
        }).fail(function (xhr) {
            alertBox(
                (xhr.responseJSON && xhr.responseJSON.message) || 'Could not delete lesson.',
                'danger'
            );
        }).always(function () {
            $btn.prop('disabled', false).html('<i class="bi bi-trash3 me-1"></i> Delete');
        });
    });

    /* ================= Search ================= */
    function applySearch() {
        const q = ($('#lessonSearch').val() || '').trim().toLowerCase();
        const $rows = $('#lessonTableBody tr.lesson-row');
        let visible = 0;

        $rows.each(function () {
            const matches = $(this).text().toLowerCase().indexOf(q) !== -1;
            $(this).toggle(matches);
            if (matches) visible++;
        });

        $('#visibleLessonCount').text(visible);
        $('#totalLessonCount').text($rows.length);
        $('#noLessonResults').toggle($rows.length > 0 && visible === 0);
    }
    $('#lessonSearch').on('input', applySearch);

});
</script>
@endpush
