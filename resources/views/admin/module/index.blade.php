
@extends('layouts.dashboard')

@section('title', 'Module Management')

@section('dashboard-content')

<style>
    .module-page {
        color: #1e293b;
    }

    .module-page .module-card {
        background: #fff;
        border: 1px solid #e8edf4;
        border-radius: 14px;
        box-shadow: 0 3px 14px rgba(15, 23, 42, .035);
    }

    .module-page .page-title {
        font-size: 1.65rem;
        font-weight: 750;
        letter-spacing: -.4px;
    }

    .module-page .muted {
        color: #64748b;
    }

    .module-page .primary-btn {
        background: #2563eb;
        color: white;
        border: 1px solid #2563eb;
        border-radius: 9px;
        padding: 10px 16px;
        font-weight: 600;
    }

    .module-page .primary-btn:hover {
        background: #1d4ed8;
        color: white;
    }

    .module-page .stat-box {
        border: 1px solid #e8edf4;
        background: #fff;
        border-radius: 12px;
        padding: 18px;
        height: 100%;
    }

    .module-page .stat-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #eff6ff;
        color: #2563eb;
        font-size: 1.25rem;
    }

    .module-page .form-control,
    .module-page .form-select {
        border-color: #dce3ed;
        border-radius: 8px;
        padding: 10px 12px;
    }

    .module-page .form-label {
        font-size: .875rem;
        font-weight: 650;
        margin-bottom: 7px;
    }

    .module-page .table {
        margin-bottom: 0;
    }

    .module-page .table thead th {
        background: #f8fafc;
        color: #64748b;
        text-transform: uppercase;
        font-size: .75rem;
        letter-spacing: .4px;
        padding: 14px 16px;
        white-space: nowrap;
    }

    .module-page .table tbody td {
        padding: 16px;
        border-color: #eef2f7;
        vertical-align: middle;
    }

    .module-page .module-number {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        flex-shrink: 0;
        background: #eff6ff;
        color: #2563eb;
        border-radius: 11px;
        font-weight: 700;
    }

    .module-page .action-btn {
        width: 35px;
        height: 35px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border-radius: 8px;
    }

    .module-page .empty-state {
        padding: 48px 20px;
        text-align: center;
    }

    .module-page .empty-icon {
        width: 65px;
        height: 65px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 17px;
        background: #eff6ff;
        color: #2563eb;
        font-size: 1.8rem;
    }
</style>

<div class="module-page">

    {{-- HEADER --}}
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <div class="small text-primary fw-semibold mb-2">
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

});
</script>

@endsection
