
@extends('layouts.dashboard')

@section('title', 'Course Management')

@section('dashboard-content')

<style>
    .course-page {
        --course-forest: #14532D;
        --course-deep: #064E3B;
        --course-emerald: #16A34A;
        --course-cream: #FFFDF5;
        --course-slate: #334155;
        --course-gold: #D9A441;
        --course-border: #E2EADF;
        --course-muted: #64748B;
        position: relative;
        isolation: isolate;
        color: var(--course-slate);
        padding: 8px 2px 24px;
        min-height: calc(100vh - 80px);
        background:
            radial-gradient(circle at 8% 5%, rgba(22,163,74,.075), transparent 25rem),
            radial-gradient(circle at 95% 25%, rgba(217,164,65,.07), transparent 22rem),
            var(--course-cream);
        border-radius: 18px;
    }

    .course-page::before,
    .course-page::after {
        content: "";
        position: absolute;
        z-index: -1;
        pointer-events: none;
        border-radius: 50%;
    }

    .course-page::before {
        width: 260px;
        height: 260px;
        top: 65px;
        right: 5%;
        background: radial-gradient(circle, rgba(22,163,74,.075), transparent 70%);
        animation: courseGlowDrift 6s ease-in-out infinite alternate;
    }

    .course-page::after {
        inset: 0;
        opacity: .4;
        background-image:
            radial-gradient(circle at 13% 12%, #D9A441 0 1.5px, transparent 2px),
            radial-gradient(circle at 83% 8%, #16A34A 0 1.5px, transparent 2px),
            radial-gradient(circle at 94% 34%, #D9A441 0 1.5px, transparent 2px),
            radial-gradient(circle at 66% 56%, #16A34A 0 1px, transparent 2px),
            radial-gradient(circle at 8% 75%, #D9A441 0 1.5px, transparent 2px),
            radial-gradient(circle at 89% 87%, #16A34A 0 1.5px, transparent 2px);
        animation: courseTwinkle 4.5s ease-in-out infinite;
    }

    .course-page > * {
        position: relative;
        z-index: 1;
    }

    .course-page .page-heading {
        color: var(--course-slate);
        font-size: clamp(1.45rem, 2vw, 1.85rem);
        font-weight: 800;
        letter-spacing: -.65px;
    }

    .course-page .muted-text { color: var(--course-muted); }

    .course-page .text-primary { color: var(--course-forest) !important; }

    .course-page .stat-card,
    .course-page .content-card {
        position: relative;
        background: rgba(255,255,255,.96);
        border: 1px solid var(--course-border);
        border-radius: 18px;
        box-shadow: 0 6px 22px rgba(20,83,45,.055);
        transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
    }

    .course-page .stat-card {
        min-height: 112px;
        height: 100%;
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 23px;
        overflow: hidden;
        animation: courseFadeUp .65s both;
    }

    .course-page .stat-card:nth-child(1) { animation-delay: .05s; }
    .course-page .stat-card:nth-child(2) { animation-delay: .16s; }
    .course-page .stat-card:nth-child(3) { animation-delay: .27s; }

    .course-page .stat-card::after {
        content: "";
        position: absolute;
        width: 95px;
        height: 95px;
        right: -28px;
        top: -35px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(22,163,74,.09), transparent 70%);
        transition: transform .4s ease;
        pointer-events: none;
    }

    .course-page .stat-card:hover {
        transform: translateY(-5px);
        border-color: rgba(22,163,74,.38);
        box-shadow: 0 15px 32px rgba(20,83,45,.12), 0 0 0 3px rgba(22,163,74,.045);
    }

    .course-page .stat-card:hover::after { transform: scale(1.45); }

    .course-page .stat-icon {
        width: 52px;
        height: 52px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        flex-shrink: 0;
        box-shadow: inset 0 1px 0 rgba(255,255,255,.7);
        transition: transform .35s ease;
    }

    .course-page .stat-card:hover .stat-icon { transform: rotate(-5deg) scale(1.06); }

    .course-page .icon-blue {
        color: var(--course-forest);
        background: linear-gradient(135deg, #E7F5EA, #D5EBDD);
    }

    .course-page .icon-green {
        color: #087443;
        background: linear-gradient(135deg, #E3F8EB, #C8F0D7);
    }

    .course-page .icon-purple {
        color: #8A641A;
        background: linear-gradient(135deg, #FFF4D8, #F7E4AF);
    }

    .course-page .stat-number {
        font-size: 1.85rem;
        line-height: 1.2;
        font-weight: 800;
        letter-spacing: -.5px;
        color: var(--course-slate);
        font-variant-numeric: tabular-nums;
    }

    .course-page .primary-button {
        position: relative;
        overflow: hidden;
        background: linear-gradient(120deg, var(--course-forest), #187344, var(--course-deep));
        background-size: 180% 180%;
        color: #fff;
        border: 1px solid var(--course-forest);
        border-radius: 12px;
        padding: 11px 18px;
        font-weight: 700;
        box-shadow: 0 6px 15px rgba(20,83,45,.16);
        transition: transform .25s ease, box-shadow .25s ease, background-position .4s ease;
    }

    .course-page .primary-button:hover,
    .course-page .primary-button:focus-visible {
        color: #fff;
        background-position: 100% 0;
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(20,83,45,.24), 0 0 0 4px rgba(22,163,74,.1);
    }

    .course-page .primary-button:active { transform: translateY(0) scale(.98); }

    .course-page .content-card {
        overflow: hidden;
        animation: courseFadeUp .7s .25s both;
        border-radius: 18px;
        box-shadow: 0 8px 28px rgba(20,83,45,.055);
    }

    .course-page .content-card > .border-bottom {
        background: linear-gradient(110deg, #FFFFFF, #FBFDF8) !important;
        border-color: var(--course-border) !important;
    }

    .course-page .content-card h5 {
        color: var(--course-slate);
        letter-spacing: -.2px;
    }

    .course-page .table { margin-bottom: 0; }

    .course-page .table thead th {
        background: #F0F7F0;
        color: #486251;
        font-size: .73rem;
        text-transform: uppercase;
        letter-spacing: .55px;
        font-weight: 750;
        padding: 15px 16px;
        border-bottom: 1px solid #DFEADF;
        white-space: nowrap;
    }

    .course-page .table tbody td {
        padding: 18px 16px;
        border-color: #EDF2EA;
        vertical-align: middle;
        background: rgba(255,255,255,.9);
        transition: background-color .22s ease;
    }

    .course-page .table tbody tr {
        animation: courseFadeUp .45s both;
    }

    .course-page .table tbody tr:nth-child(2) { animation-delay: .05s; }
    .course-page .table tbody tr:nth-child(3) { animation-delay: .1s; }
    .course-page .table tbody tr:nth-child(4) { animation-delay: .15s; }

    .course-page .table-hover > tbody > tr:hover > * {
        --bs-table-bg-state: #F5FBF5;
        color: inherit;
    }

    .course-page .table tbody tr:hover td { background: #F5FBF5; }
    .course-page .table tbody tr:last-child td { border-bottom: 0; }

    .course-page .course-avatar {
        height: 46px;
        width: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 14px;
        background: linear-gradient(135deg, #EAF6ED, #D9EEDF);
        color: var(--course-forest);
        font-size: 1.3rem;
        flex-shrink: 0;
        box-shadow: inset 0 0 0 1px rgba(20,83,45,.05);
    }

    .course-page .course-title {
        font-weight: 750;
        color: var(--course-slate);
        overflow-wrap: anywhere;
    }

    .course-page .level-badge,
    .course-page .status-badge,
    .course-page .type-badge {
        display: inline-block;
        border-radius: 8px;
        padding: 6px 10px;
        font-size: .75rem;
        font-weight: 700;
        white-space: nowrap;
    }

    .course-page .level-badge { background: #EDF5E9; color: #315C35; }
    .course-page .status-active { background: #E3F8EB; color: #087443; }
    .course-page .status-inactive { background: #F1F5F2; color: #64748B; }
    .course-page .type-free { background: #E3F8EB; color: #087443; }
    .course-page .type-paid { background: #FFF3D4; color: #805B10; }

    .course-page .action-btn {
        width: 36px;
        height: 36px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        transition: transform .22s ease, box-shadow .22s ease, background-color .22s ease;
    }

    .course-page .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(51,65,85,.12);
    }

    .course-page .btn-outline-primary {
        --bs-btn-color: var(--course-forest);
        --bs-btn-border-color: #8AB99A;
        --bs-btn-hover-bg: var(--course-forest);
        --bs-btn-hover-border-color: var(--course-forest);
        --bs-btn-hover-color: #fff;
    }

    .course-page .search-control {
        min-width: 230px;
        border-radius: 11px;
        padding: 10px 13px;
    }

    .course-page .form-control,
    .course-page .form-select {
        color: var(--course-slate);
        border-color: #D8E3D8;
        border-radius: 10px;
        padding: 10px 12px;
        transition: border-color .2s ease, box-shadow .2s ease;
    }

    .course-page .form-control:focus,
    .course-page .form-select:focus {
        border-color: #5D9A70;
        box-shadow: 0 0 0 .22rem rgba(22,163,74,.12);
    }

    .course-page .form-label {
        color: var(--course-slate);
        font-size: .875rem;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .course-page .empty-state { padding: 55px 20px; text-align: center; }

    .course-page .empty-icon {
        width: 68px;
        height: 68px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #EAF6ED, #D9EEDF);
        color: var(--course-forest);
        border-radius: 19px;
        font-size: 1.8rem;
    }

    .course-page .modal-content { overflow: hidden; }
    .course-page .modal-header { background: #FBFDF8; border-bottom-color: var(--course-border); }
    .course-page .modal-footer { background: #F6FAF4 !important; border-top-color: var(--course-border); }

    @keyframes courseFadeUp {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes courseTwinkle {
        0%, 100% { opacity: .22; transform: translateY(0); }
        50% { opacity: .62; transform: translateY(-5px); }
    }

    @keyframes courseGlowDrift {
        from { transform: translate3d(0, 0, 0) scale(.95); }
        to { transform: translate3d(-16px, 13px, 0) scale(1.08); }
    }

    @media (max-width: 767px) {
        .course-page { padding: 2px 0 18px; }
        .course-page .page-heading { font-size: 1.4rem; }
        .course-page .stat-card { padding: 16px; border-radius: 15px; }
        .course-page .stat-number { font-size: 1.6rem; }
        .course-page .search-control { width: 100%; min-width: 0; }
        .course-page .table { min-width: 850px; }
        .course-page .content-card { border-radius: 15px; }
    }

    @media (max-width: 575px) {
        .course-page .stat-card { gap: 12px; }
        .course-page .stat-icon { width: 44px; height: 44px; border-radius: 13px; }
        .course-page .stat-number { font-size: 1.45rem; }
    }

    @media (prefers-reduced-motion: reduce) {
        .course-page *,
        .course-page *::before,
        .course-page *::after {
            animation-duration: .01ms !important;
            animation-iteration-count: 1 !important;
            scroll-behavior: auto !important;
            transition-duration: .01ms !important;
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

    // Animate the visible statistic numbers once when the page loads.
    document.querySelectorAll('.course-page .stat-number').forEach(function (element) {
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
