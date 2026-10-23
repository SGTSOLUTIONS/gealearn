
@extends('layouts.dashboard')

@section('title', 'Course Management')

@section('dashboard-content')

<style>
    .course-page {
        --course-primary: #2563eb;
        --course-border: #e8edf4;
        color: #1e293b;
    }

    .course-page .page-heading {
        font-size: 1.65rem;
        font-weight: 750;
        letter-spacing: -.5px;
    }

    .course-page .muted-text {
        color: #64748b;
    }

    .course-page .stat-card,
    .course-page .content-card {
        background: #fff;
        border: 1px solid var(--course-border);
        border-radius: 15px;
        box-shadow: 0 3px 14px rgba(15, 23, 42, .035);
    }

    .course-page .stat-card {
        padding: 22px;
        height: 100%;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .course-page .stat-icon {
        width: 49px;
        height: 49px;
        border-radius: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.35rem;
        flex-shrink: 0;
    }

    .course-page .icon-blue {
        color: #2563eb;
        background: #eff6ff;
    }

    .course-page .icon-green {
        color: #059669;
        background: #ecfdf5;
    }

    .course-page .icon-purple {
        color: #7c3aed;
        background: #f5f3ff;
    }

    .course-page .stat-number {
        font-size: 1.7rem;
        line-height: 1.2;
        font-weight: 750;
    }

    .course-page .primary-button {
        background: #2563eb;
        color: #fff;
        border: 1px solid #2563eb;
        border-radius: 9px;
        padding: 10px 17px;
        font-weight: 600;
    }

    .course-page .primary-button:hover {
        background: #1d4ed8;
        color: #fff;
    }

    .course-page .content-card {
        overflow: hidden;
    }

    .course-page .table {
        margin-bottom: 0;
    }

    .course-page .table thead th {
        background: #f8fafc;
        color: #64748b;
        font-size: .75rem;
        text-transform: uppercase;
        letter-spacing: .55px;
        font-weight: 700;
        padding: 15px 16px;
        border-bottom: 1px solid var(--course-border);
        white-space: nowrap;
    }

    .course-page .table tbody td {
        padding: 17px 16px;
        border-color: #eef2f7;
        vertical-align: middle;
    }

    .course-page .table tbody tr:last-child td {
        border-bottom: 0;
    }

    .course-page .course-avatar {
        height: 43px;
        width: 43px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 11px;
        background: #eff6ff;
        color: #2563eb;
        font-size: 1.25rem;
        flex-shrink: 0;
    }

    .course-page .course-title {
        font-weight: 650;
        color: #1e293b;
        overflow-wrap: anywhere;
    }

    .course-page .level-badge,
    .course-page .status-badge,
    .course-page .type-badge {
        display: inline-block;
        border-radius: 6px;
        padding: 5px 9px;
        font-size: .75rem;
        font-weight: 650;
        white-space: nowrap;
    }

    .course-page .level-badge {
        background: #eff6ff;
        color: #1d4ed8;
    }

    .course-page .status-active {
        background: #ecfdf5;
        color: #047857;
    }

    .course-page .status-inactive {
        background: #f1f5f9;
        color: #64748b;
    }

    .course-page .type-free {
        background: #ecfdf5;
        color: #047857;
    }

    .course-page .type-paid {
        background: #f5f3ff;
        color: #6d28d9;
    }

    .course-page .action-btn {
        width: 35px;
        height: 35px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
    }

    .course-page .search-control {
        min-width: 230px;
        border-radius: 9px;
        padding: 10px 13px;
    }

    .course-page .form-control,
    .course-page .form-select {
        border-color: #dce3ed;
        border-radius: 8px;
        padding: 10px 12px;
    }

    .course-page .form-control:focus,
    .course-page .form-select:focus {
        border-color: #93b4ff;
        box-shadow: 0 0 0 .2rem rgba(37, 99, 235, .10);
    }

    .course-page .form-label {
        font-size: .875rem;
        font-weight: 650;
        margin-bottom: 7px;
    }

    .course-page .empty-state {
        padding: 55px 20px;
        text-align: center;
    }

    .course-page .empty-icon {
        width: 66px;
        height: 66px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eff6ff;
        color: #2563eb;
        border-radius: 18px;
        font-size: 1.8rem;
    }

    @media (max-width: 575px) {
        .course-page .page-heading {
            font-size: 1.35rem;
        }

        .course-page .stat-card {
            padding: 15px;
        }

        .course-page .search-control {
            width: 100%;
            min-width: 0;
        }
    }
</style>

<div class="course-page">

    {{-- PAGE HEADER --}}
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <div class="d-flex align-items-center gap-2 mb-2">
                <span class="text-primary">
                    <i class="bi bi-mortarboard-fill"></i>
                </span>
                <span class="small fw-semibold text-primary">
                    GEOLEARN GIS / ACADEMY
                </span>
            </div>

            <h1 class="page-heading mb-1">Course Management</h1>

            <p class="muted-text mb-0">
                Create and manage your GIS learning courses.
            </p>
        </div>

        <button type="button" class="btn primary-button"
                id="addCourseBtn">
            <i class="bi bi-plus-lg me-1"></i>
            Add New Course
        </button>
    </div>

    {{-- FLASH MESSAGE --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm"
             role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}

            <button type="button" class="btn-close"
                    data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show"
             role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close"
                    data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- VALIDATION ERRORS --}}
    @if($errors->any())
        <div class="alert alert-danger border-0 shadow-sm">
            <div class="fw-semibold mb-2">
                <i class="bi bi-exclamation-circle me-1"></i>
                Please correct the following errors:
            </div>

            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- STATISTICS --}}
    <div class="row g-3 mb-4">

        <div class="col-12 col-sm-6 col-xl-4">
            <div class="stat-card">
                <div class="stat-icon icon-blue">
                    <i class="bi bi-journal-bookmark-fill"></i>
                </div>

                <div>
                    <div class="small muted-text mb-1">Total Courses</div>
                    <div class="stat-number">{{ $courses->count() }}</div>
                    <small class="muted-text">All created courses</small>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4">
            <div class="stat-card">
                <div class="stat-icon icon-green">
                    <i class="bi bi-unlock-fill"></i>
                </div>

                <div>
                    <div class="small muted-text mb-1">Free Courses</div>
                    <div class="stat-number">
                        {{ $courses->where('is_free', true)->count() }}
                    </div>
                    <small class="muted-text">Available without payment</small>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4">
            <div class="stat-card">
                <div class="stat-icon icon-purple">
                    <i class="bi bi-gem"></i>
                </div>

                <div>
                    <div class="small muted-text mb-1">Paid Courses</div>
                    <div class="stat-number">
                        {{ $courses->where('is_free', false)->count() }}
                    </div>
                    <small class="muted-text">Premium learning content</small>
                </div>
            </div>
        </div>

    </div>

    {{-- COURSE TABLE --}}
    <div class="content-card">

        <div class="p-3 p-md-4 border-bottom"
             style="border-color: #e8edf4 !important;">

            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div>
                    <h5 class="fw-bold mb-1">All Courses</h5>
                    <p class="small muted-text mb-0">
                        Manage course information and availability.
                    </p>
                </div>

                <div class="position-relative">
                    <i class="bi bi-search position-absolute top-50 translate-middle-y text-secondary"
                       style="left: 13px;"></i>

                    <input type="search"
                           id="courseSearch"
                           class="form-control search-control"
                           style="padding-left: 38px;"
                           placeholder="Search courses...">
                </div>
            </div>

        </div>

        <div class="table-responsive">

            <table class="table table-hover" id="courseTable">

                <thead>
                    <tr>
                        <th style="width: 55px;">#</th>
                        <th>Course Details</th>
                        <th>Level</th>
                        <th>Modules</th>
                        <th>Course Type</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($courses as $course)

                        <tr class="course-row">

                            <td class="text-secondary">
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                <div class="d-flex align-items-center gap-3"
                                     style="min-width: 235px;">

                                    <div class="course-avatar">
                                        @if($course->thumbnail)
                                            <img
                                                src="{{ asset('storage/' . $course->thumbnail) }}"
                                                alt="{{ $course->title }}"
                                                style="width:100%;height:100%;object-fit:cover;border-radius:11px;">
                                        @else
                                            <i class="bi bi-globe2"></i>
                                        @endif
                                    </div>

                                    <div>
                                        <div class="course-title">
                                            {{ $course->title }}
                                        </div>

                                        <div class="small muted-text mt-1">
                                            {{ \Illuminate\Support\Str::limit($course->description ?? 'No description added', 55) }}
                                        </div>

                                        <div class="small text-secondary mt-1">
                                            {{ $course->slug }}
                                        </div>
                                    </div>

                                </div>
                            </td>

                            <td>
                                <span class="level-badge">
                                    {{ $course->level }}
                                </span>
                            </td>

                            <td>
                                <span class="fw-semibold">
                                    {{ $course->modules_count ?? $course->modules()->count() }}
                                </span>
                                <span class="small muted-text">modules</span>
                            </td>

                            <td>
                                @if($course->is_free)
                                    <span class="type-badge type-free">
                                        Free
                                    </span>
                                @else
                                    <span class="type-badge type-paid">
                                        Paid
                                    </span>

                                    <div class="small fw-semibold mt-1">
                                        ₹{{ number_format((float) $course->price, 2) }}
                                    </div>
                                @endif
                            </td>

                            <td>
                                @if($course->status)
                                    <span class="status-badge status-active">
                                        <i class="bi bi-check-circle me-1"></i>
                                        Active
                                    </span>
                                @else
                                    <span class="status-badge status-inactive">
                                        Inactive
                                    </span>
                                @endif
                            </td>

                            <td>
                                <div class="d-flex justify-content-center gap-2">

                                    {{-- EDIT --}}
                                    <button type="button"
                                            class="btn btn-outline-primary action-btn editCourseBtn"
                                            title="Edit course"

                                            data-id="{{ $course->id }}"
                                            data-title="{{ $course->title }}"
                                            data-description="{{ $course->description }}"
                                            data-level="{{ $course->level }}"
                                            data-free="{{ (int) $course->is_free }}"
                                            data-price="{{ $course->price }}"
                                            data-status="{{ (int) $course->status }}">

                                        <i class="bi bi-pencil-square"></i>
                                    </button>

                                    {{-- DELETE --}}
                                    <form
                                        action="{{ route('admin.course.destroy', $course) }}"
                                        method="POST"
                                        class="deleteCourseForm">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-outline-danger action-btn"
                                                title="Delete course">
                                            <i class="bi bi-trash3"></i>
                                        </button>

                                    </form>

                                </div>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7">
                                <div class="empty-state">

                                    <div class="empty-icon">
                                        <i class="bi bi-journal-plus"></i>
                                    </div>

                                    <h5 class="fw-bold">No courses yet</h5>

                                    <p class="muted-text mb-3">
                                        Start building your GIS learning platform
                                        by adding your first course.
                                    </p>

                                    <button type="button"
                                            class="btn primary-button"
                                            id="emptyAddCourseBtn">
                                        <i class="bi bi-plus-lg me-1"></i>
                                        Create Your First Course
                                    </button>

                                </div>
                            </td>
                        </tr>

                    @endforelse

                    <tr id="noSearchResults" style="display:none;">
                        <td colspan="7" class="text-center py-5">
                            <i class="bi bi-search fs-3 text-secondary"></i>
                            <p class="mt-2 mb-0">No matching courses found.</p>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

        <div class="px-3 px-md-4 py-3 border-top bg-light">
            <small class="muted-text">
                Showing <strong id="visibleCourseCount">{{ $courses->count() }}</strong>
                of <strong>{{ $courses->count() }}</strong> courses
            </small>
        </div>

    </div>

</div>

{{-- ADD / EDIT MODAL --}}
<div class="modal fade" id="courseModal"
     tabindex="-1" aria-labelledby="courseModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">

        <div class="modal-content border-0 shadow-lg"
             style="border-radius: 16px;">

            <form id="courseForm"
                  action="{{ route('admin.course.store') }}"
                  method="POST">

                @csrf

                <input type="hidden"
                       name="_method"
                       id="courseFormMethod"
                       value="POST">

                <div class="modal-header px-4 py-3">

                    <div>
                        <h5 class="modal-title fw-bold"
                            id="courseModalLabel">
                            Add New Course
                        </h5>

                        <small class="muted-text">
                            Configure your course information.
                        </small>
                    </div>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>

                </div>

                <div class="modal-body p-4">

                    <div class="d-flex align-items-center gap-2 mb-4">
                        <div class="stat-icon icon-blue"
                             style="width:42px;height:42px;">
                            <i class="bi bi-journal-bookmark"></i>
                        </div>

                        <div>
                            <div class="fw-bold">Course Information</div>
                            <small class="muted-text">
                                Fields marked * are required.
                            </small>
                        </div>
                    </div>

                    {{-- COURSE TITLE --}}
                    <div class="mb-3">
                        <label for="courseTitle" class="form-label">
                            Course Title <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                               class="form-control"
                               name="title"
                               id="courseTitle"
                               maxlength="255"
                               placeholder="e.g. GIS Fundamentals"
                               required>
                    </div>

                    {{-- DESCRIPTION --}}
                    <div class="mb-3">
                        <label for="courseDescription" class="form-label">
                            Course Description
                        </label>

                        <textarea class="form-control"
                                  name="description"
                                  id="courseDescription"
                                  rows="4"
                                  placeholder="Explain what students will learn in this course..."></textarea>
                    </div>

                    <div class="row g-3">

                        {{-- LEVEL --}}
                        <div class="col-md-6">
                            <label for="courseLevel" class="form-label">
                                Course Level <span class="text-danger">*</span>
                            </label>

                            <select class="form-select"
                                    name="level"
                                    id="courseLevel"
                                    required>

                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Advanced">Advanced</option>

                            </select>
                        </div>

                        {{-- COURSE TYPE --}}
                        <div class="col-md-6">
                            <label for="courseFree" class="form-label">
                                Course Type <span class="text-danger">*</span>
                            </label>

                            <select class="form-select"
                                    name="is_free"
                                    id="courseFree"
                                    required>

                                <option value="1">Free Course</option>
                                <option value="0">Paid Course</option>

                            </select>
                        </div>

                        {{-- PRICE --}}
                        <div class="col-md-6"
                             id="coursePriceContainer"
                             style="display:none;">

                            <label for="coursePrice" class="form-label">
                                Course Price (₹)
                            </label>

                            <div class="input-group">
                                <span class="input-group-text">₹</span>

                                <input type="number"
                                       class="form-control"
                                       name="price"
                                       id="coursePrice"
                                       min="0"
                                       step="0.01"
                                       value="0">
                            </div>

                            <small class="muted-text">
                                Free courses will automatically have a price of ₹0.
                            </small>
                        </div>

                        {{-- STATUS --}}
                        <div class="col-md-6">
                            <label for="courseStatus" class="form-label">
                                Course Status <span class="text-danger">*</span>
                            </label>

                            <select class="form-select"
                                    name="status"
                                    id="courseStatus"
                                    required>

                                <option value="1">Active</option>
                                <option value="0">Inactive</option>

                            </select>
                        </div>

                    </div>

                </div>

                <div class="modal-footer px-4 py-3"
                     style="background:#f8fafc;">

                    <button type="button"
                            class="btn btn-light border"
                            data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit"
                            class="btn primary-button"
                            id="saveCourseBtn">
                        <i class="bi bi-check2-circle me-1"></i>
                        Save Course
                    </button>

                </div>

            </form>

        </div>
    </div>
</div>

{{-- JAVASCRIPT --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    const modalElement = document.getElementById('courseModal');

    const courseModal = bootstrap.Modal.getOrCreateInstance(modalElement);

    const courseForm = document.getElementById('courseForm');

    const methodInput = document.getElementById('courseFormMethod');
    const titleInput = document.getElementById('courseTitle');
    const descriptionInput = document.getElementById('courseDescription');
    const levelInput = document.getElementById('courseLevel');
    const freeInput = document.getElementById('courseFree');
    const priceInput = document.getElementById('coursePrice');
    const statusInput = document.getElementById('courseStatus');
    const priceContainer = document.getElementById('coursePriceContainer');
    const saveButton = document.getElementById('saveCourseBtn');

    const storeUrl = @json(route('admin.course.store'));
    const courseBaseUrl = @json(url('/admin/course'));

    function togglePrice() {
        const isPaid = freeInput.value === '0';

        priceContainer.style.display = isPaid ? '' : 'none';
        priceInput.required = isPaid;

        if (!isPaid) {
            priceInput.value = '0';
        } else if (priceInput.value === '') {
            priceInput.value = '0';
        }
    }

    function resetCourseForm() {
        courseForm.reset();

        courseForm.action = storeUrl;
        methodInput.value = 'POST';

        titleInput.value = '';
        descriptionInput.value = '';
        levelInput.value = 'Beginner';
        freeInput.value = '1';
        priceInput.value = '0';
        statusInput.value = '1';

        document.getElementById('courseModalLabel').textContent =
            'Add New Course';

        saveButton.innerHTML =
            '<i class="bi bi-check2-circle me-1"></i> Save Course';

        togglePrice();
    }

    // Open Add modal
    function openAddModal() {
        resetCourseForm();
        courseModal.show();
    }

    document.getElementById('addCourseBtn')
        .addEventListener('click', openAddModal);

    const emptyAddButton = document.getElementById('emptyAddCourseBtn');

    if (emptyAddButton) {
        emptyAddButton.addEventListener('click', openAddModal);
    }

    // Open Edit modal and populate saved values
    document.querySelectorAll('.editCourseBtn').forEach(function (button) {

        button.addEventListener('click', function () {

            resetCourseForm();

            const id = this.dataset.id;

            courseForm.action = courseBaseUrl + '/' + encodeURIComponent(id);
            methodInput.value = 'PUT';

            titleInput.value = this.dataset.title || '';
            descriptionInput.value = this.dataset.description || '';
            levelInput.value = this.dataset.level || 'Beginner';
            freeInput.value = this.dataset.free ?? '1';
            priceInput.value = this.dataset.price || '0';
            statusInput.value = this.dataset.status ?? '1';

            document.getElementById('courseModalLabel').textContent =
                'Update Course';

            saveButton.innerHTML =
                '<i class="bi bi-check2-circle me-1"></i> Update Course';

            togglePrice();
            courseModal.show();
        });

    });

    // Show or hide price field
    freeInput.addEventListener('change', togglePrice);

    // Client-side course search
    const searchInput = document.getElementById('courseSearch');
    const rows = Array.from(
        document.querySelectorAll('#courseTable tbody tr.course-row')
    );

    const visibleCount = document.getElementById('visibleCourseCount');
    const noResults = document.getElementById('noSearchResults');

    searchInput.addEventListener('input', function () {

        const query = this.value.trim().toLowerCase();
        let visible = 0;

        rows.forEach(function (row) {
            const matches = row.textContent.toLowerCase().includes(query);

            row.style.display = matches ? '' : 'none';

            if (matches) {
                visible++;
            }
        });

        noResults.style.display =
            rows.length > 0 && visible === 0 ? '' : 'none';

        visibleCount.textContent = visible;
    });

    // Confirmation before deleting
    document.querySelectorAll('.deleteCourseForm').forEach(function (form) {

        form.addEventListener('submit', function (event) {

            const confirmed = window.confirm(
                'Are you sure you want to delete this course? ' +
                'Its related modules, lessons and quizzes may also be deleted.'
            );

            if (!confirmed) {
                event.preventDefault();
            }

        });

    });

    // Restore entered values if validation redirects back with errors.
    @if($errors->any() && session('_course_form'))
        resetCourseForm();
        courseModal.show();
    @endif

    togglePrice();

});
</script>

@endsection
