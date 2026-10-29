
@extends('layouts.dashboard')

@section('title', 'Module Management')

@section('dashboard-content')

<style>
    .module-page {
        --module-forest: #14532D;
        --module-deep: #064E3B;
        --module-emerald: #16A34A;
        --module-cream: #FFFDF5;
        --module-slate: #334155;
        --module-gold: #D9A441;
        --module-border: #E2EADF;
        --module-muted: #64748B;
        position: relative;
        isolation: isolate;
        min-height: calc(100vh - 80px);
        padding: 8px 2px 24px;
        border-radius: 18px;
        color: var(--module-slate);
        background:
            radial-gradient(circle at 8% 5%, rgba(22,163,74,.075), transparent 25rem),
            radial-gradient(circle at 95% 25%, rgba(217,164,65,.07), transparent 22rem),
            var(--module-cream);
    }

    .module-page::before,
    .module-page::after {
        content: "";
        position: absolute;
        z-index: -1;
        pointer-events: none;
        border-radius: 50%;
    }

    .module-page::before {
        width: 260px;
        height: 260px;
        top: 60px;
        right: 5%;
        background: radial-gradient(circle, rgba(22,163,74,.075), transparent 70%);
        animation: moduleGlowDrift 6s ease-in-out infinite alternate;
    }

    .module-page::after {
        inset: 0;
        border-radius: 18px;
        opacity: .42;
        background-image:
            radial-gradient(circle at 13% 12%, #D9A441 0 1.5px, transparent 2px),
            radial-gradient(circle at 83% 8%, #16A34A 0 1.5px, transparent 2px),
            radial-gradient(circle at 94% 34%, #D9A441 0 1.5px, transparent 2px),
            radial-gradient(circle at 66% 56%, #16A34A 0 1px, transparent 2px),
            radial-gradient(circle at 8% 75%, #D9A441 0 1.5px, transparent 2px),
            radial-gradient(circle at 89% 87%, #16A34A 0 1.5px, transparent 2px);
        animation: moduleTwinkle 4.5s ease-in-out infinite;
    }

    .module-page > * { position: relative; z-index: 1; }
    .module-page .page-title {
        color: var(--module-slate);
        font-size: clamp(1.45rem, 2vw, 1.85rem);
        font-weight: 800;
        letter-spacing: -.65px;
    }

    .module-page .muted { color: var(--module-muted); }
    .module-page .text-primary { color: var(--module-forest) !important; }

    .module-page .module-card {
        position: relative;
        background: rgba(255,255,255,.96);
        border: 1px solid var(--module-border);
        border-radius: 18px;
        box-shadow: 0 6px 22px rgba(20,83,45,.055);
        transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        overflow: hidden;
        animation: moduleFadeUp .65s both;
    }

    .module-page .module-card:hover {
        border-color: rgba(22,163,74,.24);
        box-shadow: 0 10px 28px rgba(20,83,45,.075);
    }

    .module-page .module-card > .border-bottom {
        border-color: var(--module-border) !important;
        background: linear-gradient(110deg, #FFFFFF, #FBFDF8);
    }

    .module-page .page-header-mark {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        color: var(--module-forest);
        font-size: .78rem;
        font-weight: 750;
        letter-spacing: .45px;
    }

    .module-page .primary-btn {
        position: relative;
        overflow: hidden;
        background: linear-gradient(120deg, var(--module-forest), #187344, var(--module-deep));
        background-size: 180% 180%;
        color: #fff;
        border: 1px solid var(--module-forest);
        border-radius: 12px;
        padding: 11px 18px;
        font-weight: 700;
        box-shadow: 0 6px 15px rgba(20,83,45,.16);
        transition: transform .25s ease, box-shadow .25s ease, background-position .4s ease;
    }

    .module-page .primary-btn:hover,
    .module-page .primary-btn:focus-visible {
        color: #fff;
        background-position: 100% 0;
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(20,83,45,.24), 0 0 0 4px rgba(22,163,74,.1);
    }

    .module-page .primary-btn:active { transform: translateY(0) scale(.98); }
    .module-page .primary-btn:disabled { opacity: .55; box-shadow: none; transform: none; }

    .module-page .stat-box {
        position: relative;
        height: 100%;
        padding: 22px;
        overflow: hidden;
        border: 1px solid var(--module-border);
        background: rgba(255,255,255,.97);
        border-radius: 18px;
        box-shadow: 0 6px 22px rgba(20,83,45,.055);
        transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        animation: moduleFadeUp .65s both;
    }

    .module-page .stat-box:nth-child(1) { animation-delay: .05s; }
    .module-page .stat-box:nth-child(2) { animation-delay: .16s; }
    .module-page .stat-box:nth-child(3) { animation-delay: .27s; }

    .module-page .stat-box::after {
        content: "";
        position: absolute;
        width: 95px;
        height: 95px;
        right: -28px;
        top: -35px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(22,163,74,.09), transparent 70%);
        pointer-events: none;
        transition: transform .4s ease;
    }

    .module-page .stat-box:hover {
        transform: translateY(-5px);
        border-color: rgba(22,163,74,.38);
        box-shadow: 0 15px 32px rgba(20,83,45,.12), 0 0 0 3px rgba(22,163,74,.045);
    }

    .module-page .stat-box:hover::after { transform: scale(1.45); }

    .module-page .stat-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        flex-shrink: 0;
        border-radius: 15px;
        background: linear-gradient(135deg, #E7F5EA, #D5EBDD);
        color: var(--module-forest);
        font-size: 1.35rem;
        box-shadow: inset 0 1px 0 rgba(255,255,255,.7);
        transition: transform .35s ease;
    }

    .module-page .stat-box:hover .stat-icon { transform: rotate(-5deg) scale(1.06); }
    .module-page .stat-box .fs-3 { color: var(--module-slate); font-variant-numeric: tabular-nums; }

    .module-page .form-control,
    .module-page .form-select,
    .module-page .input-group-text {
        color: var(--module-slate);
        border-color: #D8E3D8;
        border-radius: 10px;
        padding: 10px 12px;
        transition: border-color .2s ease, box-shadow .2s ease;
    }

    .module-page .input-group-text {
        background: #F6FAF4;
        color: var(--module-forest);
    }

    .module-page .form-control:focus,
    .module-page .form-select:focus {
        border-color: #5D9A70;
        box-shadow: 0 0 0 .22rem rgba(22,163,74,.12);
    }

    .module-page .form-label {
        color: var(--module-slate);
        font-size: .875rem;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .module-page .table { margin-bottom: 0; }

    .module-page .table thead th {
        background: #F0F7F0;
        color: #486251;
        text-transform: uppercase;
        font-size: .73rem;
        letter-spacing: .55px;
        font-weight: 750;
        padding: 15px 16px;
        border-bottom: 1px solid #DFEADF;
        white-space: nowrap;
    }

    .module-page .table tbody td {
        padding: 18px 16px;
        border-color: #EDF2EA;
        vertical-align: middle;
        background: rgba(255,255,255,.9);
        transition: background-color .22s ease;
    }

    .module-page .table tbody tr { animation: moduleFadeUp .45s both; }
    .module-page .table tbody tr:nth-child(2) { animation-delay: .05s; }
    .module-page .table tbody tr:nth-child(3) { animation-delay: .1s; }
    .module-page .table tbody tr:nth-child(4) { animation-delay: .15s; }
    .module-page .table-hover > tbody > tr:hover > * { --bs-table-bg-state: #F5FBF5; color: inherit; }
    .module-page .table tbody tr:hover td { background: #F5FBF5; }
    .module-page .table tbody tr:last-child td { border-bottom: 0; }

    .module-page .module-number {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 43px;
        height: 43px;
        flex-shrink: 0;
        background: linear-gradient(135deg, #EAF6ED, #D9EEDF);
        color: var(--module-forest);
        border-radius: 14px;
        font-weight: 800;
        box-shadow: inset 0 0 0 1px rgba(20,83,45,.05);
    }

    .module-page .action-btn {
        width: 36px;
        height: 36px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        transition: transform .22s ease, box-shadow .22s ease, background-color .22s ease;
    }

    .module-page .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(51,65,85,.12);
    }

    .module-page .btn-outline-primary {
        --bs-btn-color: var(--module-forest);
        --bs-btn-border-color: #8AB99A;
        --bs-btn-hover-bg: var(--module-forest);
        --bs-btn-hover-border-color: var(--module-forest);
        --bs-btn-hover-color: #fff;
    }

    .module-page .module-lessons-badge {
        display: inline-block;
        border-radius: 8px;
        padding: 6px 10px;
        background: #E3F8EB;
        color: #087443;
        font-weight: 700;
    }

    .module-page .empty-state { padding: 50px 20px; text-align: center; }
    .module-page .empty-icon {
        width: 68px;
        height: 68px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 19px;
        background: linear-gradient(135deg, #EAF6ED, #D9EEDF);
        color: var(--module-forest);
        font-size: 1.8rem;
    }

    .module-page .modal-content {
        overflow: hidden;
        border-radius: 18px !important;
    }

    .module-page .modal-header {
        background: #FBFDF8;
        border-bottom-color: var(--module-border);
    }

    .module-page .modal-footer {
        background: #F6FAF4 !important;
        border-top-color: var(--module-border);
    }

    .module-page .alert-primary {
        color: var(--module-forest);
        background: #EDF7EF;
    }

    .module-page .bg-light {
        background-color: #F6FAF4 !important;
    }

    @keyframes moduleFadeUp {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes moduleTwinkle {
        0%, 100% { opacity: .22; transform: translateY(0); }
        50% { opacity: .62; transform: translateY(-5px); }
    }

    @keyframes moduleGlowDrift {
        from { transform: translate3d(0, 0, 0) scale(.95); }
        to { transform: translate3d(-16px, 13px, 0) scale(1.08); }
    }

    @media (max-width: 767px) {
        .module-page { padding: 2px 0 18px; }
        .module-page .page-title { font-size: 1.4rem; }
        .module-page .stat-box { padding: 16px; border-radius: 15px; }
        .module-page .table { min-width: 650px; }
        .module-page .module-card { border-radius: 15px; }
    }

    @media (prefers-reduced-motion: reduce) {
        .module-page *,
        .module-page *::before,
        .module-page *::after {
            animation-duration: .01ms !important;
            animation-iteration-count: 1 !important;
            scroll-behavior: auto !important;
            transition-duration: .01ms !important;
        }
    }
</style>

<div class="module-page">

    {{-- HEADER --}}
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <div class="page-header-mark mb-2">
                <i class="bi bi-mortarboard-fill me-1"></i>
                GEOLEARN GIS / COURSE CONTENT
            </div>

            <h1 class="page-title mb-1">Module Management</h1>

            <p class="muted mb-0">
                Organize course topics into structured learning modules.
            </p>
        </div>

        <button type="button"
                class="btn primary-btn"
                id="addModuleBtn"
                {{ $courses->isEmpty() ? 'disabled' : '' }}>
            <i class="bi bi-plus-lg me-1"></i>
            Add Module
        </button>
    </div>

    {{-- ALERTS --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}

            <button type="button" class="btn-close"
                    data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}

            <button type="button" class="btn-close"
                    data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Please correct these errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($courses->isEmpty())

        <div class="module-card empty-state">
            <div class="empty-icon">
                <i class="bi bi-journal-plus"></i>
            </div>

            <h5 class="fw-bold">Create a course first</h5>

            <p class="muted">
                You need at least one course before adding modules.
            </p>

            <a href="{{ route('admin.course') }}"
               class="btn primary-btn">
                <i class="bi bi-arrow-left me-1"></i>
                Go to Courses
            </a>
        </div>

    @else

        {{-- COURSE SELECTOR --}}
        <div class="module-card p-3 p-md-4 mb-4">

            <div class="row align-items-end g-3">

                <div class="col-md-8">
                    <label for="courseSelector" class="form-label">
                        Select Course
                    </label>

                    <select id="courseSelector" class="form-select">
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}"
                                {{ $selectedCourse && $selectedCourse->id == $course->id ? 'selected' : '' }}>
                                {{ $course->title }}
                            </option>
                        @endforeach
                    </select>

                    <small class="muted">
                        Select a course to view and manage its modules.
                    </small>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('admin.course') }}"
                       class="btn btn-outline-secondary w-100">
                        <i class="bi bi-journal-bookmark me-1"></i>
                        Manage Courses
                    </a>
                </div>

            </div>
        </div>

        {{-- STATISTICS --}}
        <div class="row g-3 mb-4">

            <div class="col-md-4">
                <div class="stat-box">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon">
                            <i class="bi bi-layers-fill"></i>
                        </div>

                        <div>
                            <div class="muted small">Total Modules</div>
                            <div class="fs-3 fw-bold">
                                {{ $modules->count() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="stat-box">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon"
                             style="background:#ecfdf5;color:#059669;">
                            <i class="bi bi-file-text-fill"></i>
                        </div>

                        <div>
                            <div class="muted small">Total Lessons</div>
                            <div class="fs-3 fw-bold">
                                {{ $modules->sum('lessons_count') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="stat-box">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon"
                             style="background:#f5f3ff;color:#7c3aed;">
                            <i class="bi bi-bookmark-check-fill"></i>
                        </div>

                        <div>
                            <div class="muted small">Selected Course</div>
                            <div class="fw-bold mt-1">
                                {{ \Illuminate\Support\Str::limit($selectedCourse->title, 28) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- MODULE TABLE --}}
        <div class="module-card">

            <div class="p-3 p-md-4 border-bottom">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                    <div>
                        <h5 class="fw-bold mb-1">Course Modules</h5>

                        <p class="muted small mb-0">
                            {{ $selectedCourse->title }}
                        </p>
                    </div>

                    <div class="input-group" style="max-width:280px;">
                        <span class="input-group-text bg-white">
                            <i class="bi bi-search"></i>
                        </span>

                        <input type="search"
                               class="form-control"
                               id="moduleSearch"
                               placeholder="Search modules...">
                    </div>
                </div>
            </div>

            <div class="table-responsive">

                <table class="table table-hover" id="moduleTable">

                    <thead>
                        <tr>
                            <th style="width:70px;">Order</th>
                            <th>Module Details</th>
                            <th>Lessons</th>
                            <th>Created</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($modules as $module)

                            <tr class="module-row">

                                <td>
                                    <div class="module-number">
                                        {{ $module->sort_order }}
                                    </div>
                                </td>

                                <td>
                                    <div class="fw-semibold">
                                        {{ $module->title }}
                                    </div>

                                    <div class="small muted mt-1">
                                        {{ \Illuminate\Support\Str::limit($module->description ?? 'No description added', 100) }}
                                    </div>
                                </td>

                                <td>
                                    <span class="badge bg-light text-dark border">
                                        <i class="bi bi-file-text me-1"></i>
                                        {{ $module->lessons_count }}
                                    </span>
                                </td>

                                <td class="muted small">
                                    {{ $module->created_at->format('d M Y') }}
                                </td>

                                <td>
                                    <div class="d-flex justify-content-center gap-2">

                                        {{-- EDIT --}}
                                        <button type="button"
                                                class="btn btn-outline-primary action-btn editModuleBtn"
                                                title="Edit module"
                                                data-id="{{ $module->id }}"
                                                data-title="{{ $module->title }}"
                                                data-description="{{ $module->description }}"
                                                data-order="{{ $module->sort_order }}">

                                            <i class="bi bi-pencil-square"></i>
                                        </button>

                                        {{-- DELETE --}}
                                        <form
                                            action="{{ route('admin.modules.destroy', $module) }}"
                                            method="POST"
                                            class="deleteModuleForm">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-outline-danger action-btn"
                                                    title="Delete module">
                                                <i class="bi bi-trash3"></i>
                                            </button>

                                        </form>

                                    </div>
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5">
                                    <div class="empty-state">

                                        <div class="empty-icon">
                                            <i class="bi bi-layers"></i>
                                        </div>

                                        <h5 class="fw-bold">No modules added</h5>

                                        <p class="muted">
                                            Add the first module to
                                            {{ $selectedCourse->title }}.
                                        </p>

                                        <button type="button"
                                                class="btn primary-btn"
                                                id="emptyAddModuleBtn">
                                            <i class="bi bi-plus-lg me-1"></i>
                                            Add First Module
                                        </button>

                                    </div>
                                </td>
                            </tr>

                        @endforelse

                        <tr id="noModuleResults" style="display:none;">
                            <td colspan="5" class="text-center py-5">
                                No matching modules found.
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>

            <div class="p-3 border-top bg-light">
                <small class="muted">
                    Showing <strong id="visibleModuleCount">{{ $modules->count() }}</strong>
                    of {{ $modules->count() }} modules
                </small>
            </div>

        </div>

    @endif

</div>

{{-- ADD / EDIT MODULE MODAL --}}
<div class="modal fade" id="moduleModal"
     tabindex="-1" aria-labelledby="moduleModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content border-0 shadow-lg"
             style="border-radius:15px;">

            <form id="moduleForm"
                  action="{{ route('admin.modules.store') }}"
                  method="POST">

                @csrf

                <input type="hidden"
                       name="_method"
                       id="moduleFormMethod"
                       value="POST">

                <div class="modal-header px-4 py-3">

                    <div>
                        <h5 class="modal-title fw-bold"
                            id="moduleModalLabel">
                            Add New Module
                        </h5>

                        <small class="muted">
                            Organize your course content.
                        </small>
                    </div>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"></button>

                </div>

                <div class="modal-body p-4">

                    @if($selectedCourse)

                        <input type="hidden"
                               name="course_id"
                               id="moduleCourseId"
                               value="{{ $selectedCourse->id }}">

                        <div class="alert alert-primary border-0">
                            <i class="bi bi-book me-2"></i>
                            Course:
                            <strong>{{ $selectedCourse->title }}</strong>
                        </div>

                    @endif

                    <div class="mb-3">
                        <label for="moduleTitle" class="form-label">
                            Module Title <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                               class="form-control"
                               name="title"
                               id="moduleTitle"
                               maxlength="255"
                               placeholder="e.g. Introduction to GIS"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="moduleDescription" class="form-label">
                            Module Description
                        </label>

                        <textarea class="form-control"
                                  name="description"
                                  id="moduleDescription"
                                  rows="4"
                                  placeholder="Describe the topics covered in this module..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="moduleOrder" class="form-label">
                            Display Order <span class="text-danger">*</span>
                        </label>

                        <input type="number"
                               class="form-control"
                               name="sort_order"
                               id="moduleOrder"
                               min="1"
                               value="{{ $modules->count() + 1 }}"
                               required>

                        <small class="muted">
                            Controls the sequence in which modules appear.
                        </small>
                    </div>

                </div>

                <div class="modal-footer bg-light px-4 py-3">

                    <button type="button"
                            class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit"
                            class="btn primary-btn"
                            id="saveModuleBtn">
                        <i class="bi bi-check2-circle me-1"></i>
                        Save Module
                    </button>

                </div>

            </form>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const modalElement = document.getElementById('moduleModal');
    const moduleModal = bootstrap.Modal.getOrCreateInstance(modalElement);

    const moduleForm = document.getElementById('moduleForm');
    const formMethod = document.getElementById('moduleFormMethod');

    const titleInput = document.getElementById('moduleTitle');
    const descriptionInput = document.getElementById('moduleDescription');
    const orderInput = document.getElementById('moduleOrder');
    const saveButton = document.getElementById('saveModuleBtn');

    const storeUrl = @json(route('admin.modules.store'));
    const moduleBaseUrl = @json(url('/admin/modules'));

    const courseSelector = document.getElementById('courseSelector');

    // Change selected course
    if (courseSelector) {
        courseSelector.addEventListener('change', function () {
            const url = new URL(window.location.href);

            url.searchParams.set('course_id', this.value);

            window.location.href = url.toString();
        });
    }

    // Reset the form
    function resetModuleForm() {
        moduleForm.reset();

        moduleForm.action = storeUrl;
        formMethod.value = 'POST';

        titleInput.value = '';
        descriptionInput.value = '';
        orderInput.value = @json($modules->count() + 1);

        document.getElementById('moduleModalLabel').textContent =
            'Add New Module';

        saveButton.innerHTML =
            '<i class="bi bi-check2-circle me-1"></i> Save Module';
    }

    // Add module
    function openAddModal() {
        resetModuleForm();
        moduleModal.show();
    }

    const addButton = document.getElementById('addModuleBtn');

    if (addButton) {
        addButton.addEventListener('click', openAddModal);
    }

    const emptyAddButton = document.getElementById('emptyAddModuleBtn');

    if (emptyAddButton) {
        emptyAddButton.addEventListener('click', openAddModal);
    }

    // Edit module
    document.querySelectorAll('.editModuleBtn').forEach(function (button) {

        button.addEventListener('click', function () {

            resetModuleForm();

            const id = this.dataset.id;

            moduleForm.action =
                moduleBaseUrl + '/' + encodeURIComponent(id);

            formMethod.value = 'PUT';

            titleInput.value = this.dataset.title || '';
            descriptionInput.value = this.dataset.description || '';
            orderInput.value = this.dataset.order || '1';

            document.getElementById('moduleModalLabel').textContent =
                'Update Module';

            saveButton.innerHTML =
                '<i class="bi bi-check2-circle me-1"></i> Update Module';

            moduleModal.show();
        });

    });

    // Search modules
    const searchInput = document.getElementById('moduleSearch');
    const moduleRows = Array.from(
        document.querySelectorAll('#moduleTable tbody tr.module-row')
    );

    const noResults = document.getElementById('noModuleResults');
    const visibleCount = document.getElementById('visibleModuleCount');

    if (searchInput) {
        searchInput.addEventListener('input', function () {

            const query = this.value.trim().toLowerCase();
            let visible = 0;

            moduleRows.forEach(function (row) {
                const matches =
                    row.textContent.toLowerCase().includes(query);

                row.style.display = matches ? '' : 'none';

                if (matches) {
                    visible++;
                }
            });

            if (noResults) {
                noResults.style.display =
                    moduleRows.length > 0 && visible === 0 ? '' : 'none';
            }

            if (visibleCount) {
                visibleCount.textContent = visible;
            }
        });
    }

    // Confirm deletion
    document.querySelectorAll('.deleteModuleForm').forEach(function (form) {

        form.addEventListener('submit', function (event) {

            const confirmed = window.confirm(
                'Delete this module? Related lessons and quizzes may also be deleted.'
            );

            if (!confirmed) {
                event.preventDefault();
            }

        });

    });

    // Animate numeric module statistics on first load.
    document.querySelectorAll('.module-page .stat-box .fs-3').forEach(function (element) {
        const target = Number(element.textContent.trim());
        if (!Number.isFinite(target) || target < 0) return;

        const duration = 650;
        const startTime = performance.now();

        function updateCount(now) {
            const progress = Math.min((now - startTime) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            element.textContent = String(Math.round(target * eased));
            if (progress < 1) requestAnimationFrame(updateCount);
        }

        element.textContent = '0';
        requestAnimationFrame(updateCount);
    });

});
</script>

@endsection
