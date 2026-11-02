
{{-- resources/views/learning/index.blade.php --}}

@extends('layouts.app')

@section('title', 'Explore Courses | GeoLearn')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/learning.css') }}">
@endpush

@section('content')

<div class="learning-page">

    {{-- Navigation --}}
    <header class="learning-topbar">

        <a href="{{ url('/') }}" class="learning-brand">
            <span class="brand-mark">
                <i class="bi bi-globe-asia-australia"></i>
            </span>
            <span>Geo<b>Learn</b></span>
        </a>

        <nav class="learning-nav" aria-label="Main navigation">
            <a href="#courses" class="active">Courses</a>
            <a href="#courses" data-nav-filter="gis">GIS</a>
            <a href="#courses" data-nav-filter="python">Python</a>
            <a href="#courses" data-nav-filter="remote-sensing">
                Remote Sensing
            </a>
            <a href="#learning-path">Learning Path</a>
        </nav>

        <div class="learning-user">
            @auth
                <span class="user-avatar">
                    {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                </span>
            @else
                {{-- Add your existing login route here if needed. --}}
                <a href="{{ url('/login') }}" class="login-link">
                    <i class="bi bi-person me-1"></i>
                    Login
                </a>
            @endauth
        </div>

    </header>


    <main>

        {{-- Hero Section --}}
        <section class="learning-hero">

            <div class="hero-copy">

                <span class="eyebrow">
                    <i class="bi bi-stars"></i>
                    LEARN · PRACTICE · GROW
                </span>

                <h1>
                    Explore the World Through
                    <span>GIS.</span>
                </h1>

                <p>
                    Learn GIS, Python, Remote Sensing and Spatial Analysis
                    through practical, step-by-step courses designed
                    to build your geospatial skills.
                </p>

                <div class="hero-actions">
                    <a href="#courses" class="primary-button">
                        Explore Courses
                        <i class="bi bi-arrow-right"></i>
                    </a>

                    <a href="#learning-path" class="secondary-button">
                        <i class="bi bi-signpost-split"></i>
                        Learning Path
                    </a>
                </div>

                <div class="hero-trust">
                    <span>
                        <i class="bi bi-check-circle-fill"></i>
                        Learn at your own pace
                    </span>

                    <span>
                        <i class="bi bi-check-circle-fill"></i>
                        Practical lessons
                    </span>

                    <span>
                        <i class="bi bi-check-circle-fill"></i>
                        GIS-focused learning
                    </span>
                </div>

            </div>


            {{-- Decorative GIS illustration using CSS --}}
            <div class="hero-art" aria-hidden="true">

                <div class="orbit"></div>
                <div class="orbit orbit-two"></div>

                <div class="earth">
                    <div class="earth-grid"></div>

                    <span class="map-pin pin-one">
                        <i class="bi bi-geo-alt-fill"></i>
                    </span>

                    <span class="map-pin pin-two">
                        <i class="bi bi-geo-alt-fill"></i>
                    </span>

                    <span class="map-pin pin-three">
                        <i class="bi bi-geo-alt-fill"></i>
                    </span>
                </div>

                <div class="floating-label label-top">
                    <i class="bi bi-map"></i>
                    <span>
                        <b>Geospatial Data</b>
                        <small>Explore spatial information</small>
                    </span>
                </div>

                <div class="floating-label label-bottom">
                    <i class="bi bi-layers"></i>
                    <span>
                        <b>GIS Skills</b>
                        <small>Learn step by step</small>
                    </span>
                </div>

            </div>

        </section>


        {{-- Benefits --}}
        <section class="learning-benefits">

            <div>
                <span class="benefit-icon green">
                    <i class="bi bi-map"></i>
                </span>

                <span>
                    <b>GIS Fundamentals</b>
                    <small>Build your mapping foundation</small>
                </span>
            </div>

            <div>
                <span class="benefit-icon blue">
                    <i class="bi bi-code-slash"></i>
                </span>

                <span>
                    <b>Practical Learning</b>
                    <small>Develop technical skills step by step</small>
                </span>
            </div>

            <div>
                <span class="benefit-icon purple">
                    <i class="bi bi-globe2"></i>
                </span>

                <span>
                    <b>Spatial Intelligence</b>
                    <small>Understand data through geography</small>
                </span>
            </div>

        </section>


        {{-- Course Catalog --}}
        <section class="catalog-section" id="courses">

            <div class="section-heading">
                <div>
                    <span class="section-kicker">
                        YOUR LEARNING STARTS HERE
                    </span>

                    <h2>Explore Courses</h2>

                    <p>
                        Find the right course and start building
                        your geospatial skills.
                    </p>
                </div>

                <span class="course-total">
                    <i class="bi bi-collection-play me-1"></i>
                    {{ $courses->count() }} Courses
                </span>
            </div>


            {{-- Search --}}
            <div class="catalog-toolbar">

                <label class="course-search" for="courseSearch">
                    <i class="bi bi-search"></i>

                    <input
                        type="search"
                        id="courseSearch"
                        placeholder="Search courses or topics..."
                        autocomplete="off"
                        aria-label="Search courses"
                    >

                    <button
                        type="button"
                        id="clearSearch"
                        class="btn btn-sm border-0 d-none"
                        aria-label="Clear search"
                        title="Clear search"
                    >
                        <i class="bi bi-x-lg"></i>
                    </button>
                </label>

            </div>


            {{-- Category Filters --}}
            @php
                $categoryCounts = [
                    'all' => $courses->count(),
                    'gis' => 0,
                    'python' => 0,
                    'remote-sensing' => 0,
                ];

                foreach ($courses as $item) {
                    $rawCategory = $item->category_slug
                        ?? (is_string($item->category ?? null)
                            ? $item->category
                            : null);

                    $searchText = \Illuminate\Support\Str::lower(
                        ($item->title ?? '') . ' ' . ($item->description ?? '')
                    );

                    if ($rawCategory) {
                        $itemCategory = \Illuminate\Support\Str::slug($rawCategory);
                    } elseif (
                        str_contains($searchText, 'python')
                    ) {
                        $itemCategory = 'python';
                    } elseif (
                        str_contains($searchText, 'remote sensing')
                        || str_contains($searchText, 'remotely sensed')
                    ) {
                        $itemCategory = 'remote-sensing';
                    } else {
                        $itemCategory = 'gis';
                    }

                    if (array_key_exists($itemCategory, $categoryCounts)
                        && $itemCategory !== 'all') {
                        $categoryCounts[$itemCategory]++;
                    }
                }
            @endphp

            <div class="course-filters" id="categoryFilters">

                <button
                    type="button"
                    class="filter-chip active"
                    data-filter="all"
                    aria-pressed="true"
                >
                    All Courses
                    <span>{{ $categoryCounts['all'] }}</span>
                </button>

                <button
                    type="button"
                    class="filter-chip"
                    data-filter="gis"
                    aria-pressed="false"
                >
                    <i class="bi bi-globe2"></i>
                    GIS
                    <span>{{ $categoryCounts['gis'] }}</span>
                </button>

                <button
                    type="button"
                    class="filter-chip"
                    data-filter="python"
                    aria-pressed="false"
                >
                    <i class="bi bi-code-slash"></i>
                    Python
                    <span>{{ $categoryCounts['python'] }}</span>
                </button>

                <button
                    type="button"
                    class="filter-chip"
                    data-filter="remote-sensing"
                    aria-pressed="false"
                >
                    <i class="bi bi-satellite"></i>
                    Remote Sensing
                    <span>{{ $categoryCounts['remote-sensing'] }}</span>
                </button>

            </div>


            {{-- Courses --}}
            @if($courses->isEmpty())

                <div class="no-courses">
                    <i class="bi bi-journal-bookmark"></i>

                    <h3>No courses available yet</h3>

                    <p>
                        Courses will appear here once they are added.
                    </p>
                </div>

            @else

                <div class="course-grid" id="courseGrid">

                    @foreach($courses as $course)

                        @php
                            $rawCategory = $course->category_slug
                                ?? (is_string($course->category ?? null)
                                    ? $course->category
                                    : null);

                            $searchText = \Illuminate\Support\Str::lower(
                                ($course->title ?? '') . ' ' .
                                ($course->description ?? '')
                            );

                            if ($rawCategory) {
                                $category = \Illuminate\Support\Str::slug(
                                    $rawCategory
                                );
                            } elseif (str_contains($searchText, 'python')) {
                                $category = 'python';
                            } elseif (
                                str_contains($searchText, 'remote sensing')
                                || str_contains($searchText, 'remotely sensed')
                            ) {
                                $category = 'remote-sensing';
                            } else {
                                $category = 'gis';
                            }

                            $level = strtolower($course->level ?? 'beginner');

                            $levelClass = match ($level) {
                                'advanced' => 'badge-advanced',
                                'intermediate' => 'badge-intermediate',
                                default => 'badge-beginner',
                            };

                            if (str_contains($searchText, 'python')) {
                                $imageClass = 'image-python';
                                $imageIcon = 'bi-code-slash';
                                $imageLabel = 'PYTHON';
                            } elseif (
                                str_contains($searchText, 'remote sensing')
                                || str_contains($searchText, 'remotely sensed')
                            ) {
                                $imageClass = 'image-remote';
                                $imageIcon = 'bi-satellite';
                                $imageLabel = 'REMOTE SENSING';
                            } elseif (
                                str_contains($searchText, 'lidar')
                                || str_contains($searchText, '3d mapping')
                            ) {
                                $imageClass = 'image-lidar';
                                $imageIcon = 'bi-broadcast';
                                $imageLabel = '3D MAPPING';
                            } elseif (
                                str_contains($searchText, 'environment')
                                || str_contains($searchText, 'climate')
                            ) {
                                $imageClass = 'image-environment';
                                $imageIcon = 'bi-tree';
                                $imageLabel = 'ENVIRONMENT';
                            } elseif (
                                str_contains($searchText, 'analysis')
                                || str_contains($searchText, 'spatial')
                            ) {
                                $imageClass = 'image-analysis';
                                $imageIcon = 'bi-bar-chart-line';
                                $imageLabel = 'SPATIAL ANALYSIS';
                            } elseif (
                                str_contains($searchText, 'web gis')
                                || str_contains($searchText, 'webgis')
                            ) {
                                $imageClass = 'image-webgis';
                                $imageIcon = 'bi-globe';
                                $imageLabel = 'WEB GIS';
                            } else {
                                $imageClass = 'image-fundamentals';
                                $imageIcon = 'bi-map';
                                $imageLabel = 'GIS LEARNING';
                            }

                            $modulesCount = (int) ($course->modules_count ?? 0);
                            $isFree = (bool) $course->is_free;
                        @endphp

                        <article
                            class="course-item"
                            data-category="{{ $category }}"
                            data-title="{{ \Illuminate\Support\Str::lower($course->title ?? '') }}"
                            data-description="{{ \Illuminate\Support\Str::lower($course->description ?? '') }}"
                        >

                            <div class="course-card">

                                {{-- Course Thumbnail --}}
                                <div class="course-image {{ $imageClass }}">

                                    <span class="image-tag">
                                        {{ $imageLabel }}
                                    </span>

                                    <i class="bi {{ $imageIcon }} course-image-icon"></i>

                                </div>


                                {{-- Course Details --}}
                                <div class="course-body">

                                    <div class="course-badges">

                                        <span class="course-badge {{ $levelClass }}">
                                            {{ ucfirst($level) }}
                                        </span>

                                        @if($isFree)
                                            <span class="course-badge badge-free">
                                                FREE
                                            </span>
                                        @else
                                            <span class="course-badge badge-premium">
                                                PREMIUM
                                            </span>
                                        @endif

                                    </div>


                                    <h3>
                                        <a href="{{ route('learning.course', $course->slug) }}">
                                            {{ $course->title }}
                                        </a>
                                    </h3>


                                    <p>
                                        {{ \Illuminate\Support\Str::limit(
                                            $course->description ?? 'Explore this course and develop your skills.',
                                            125
                                        ) }}
                                    </p>


                                    <div class="course-stats">

                                        <span>
                                            <i class="bi bi-collection"></i>
                                            {{ $modulesCount }} modules
                                        </span>

                                        <span>
                                            <i class="bi bi-journal-text"></i>
                                            {{ $modulesCount * 5 }} lessons
                                        </span>

                                    </div>


                                    <div class="course-footer">

                                        <span class="course-price {{ $isFree ? '' : 'premium' }}">
                                            @if($isFree)
                                                <i class="bi bi-unlock"></i>
                                                Free access
                                            @else
                                                <i class="bi bi-gem"></i>
                                                Premium course
                                            @endif
                                        </span>

                                        <a
                                            href="{{ route('learning.course', $course->slug) }}"
                                            class="course-start"
                                            aria-label="Start learning {{ $course->title }}"
                                        >
                                            Start Learning
                                            <i class="bi bi-arrow-up-right"></i>
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </article>

                    @endforeach

                </div>


                {{-- No search results --}}
                <div id="noResults" class="no-courses d-none" aria-live="polite">

                    <i class="bi bi-search"></i>

                    <h3>No matching courses found</h3>

                    <p>
                        Try another keyword or choose a different category.
                    </p>

                    <button
                        type="button"
                        class="primary-button mt-3"
                        id="resetFilters"
                    >
                        <i class="bi bi-arrow-counterclockwise"></i>
                        Reset Filters
                    </button>

                </div>

            @endif

        </section>


        {{-- Learning Path --}}
        <section class="learning-path-section" id="learning-path">

            <div class="path-copy">

                <span class="section-kicker">
                    YOUR LEARNING JOURNEY
                </span>

                <h2>Build Your GIS Skills Step by Step</h2>

                <p>
                    Start with the fundamentals, practise your skills
                    and gradually explore advanced geospatial concepts.
                </p>

                <a href="#courses" class="primary-button">
                    Find Your Course
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>


            <div class="path-steps">

                <div class="path-step">
                    <span>01</span>

                    <div>
                        <b>Learn the Fundamentals</b>
                        <small>Understand maps, spatial data and GIS concepts.</small>
                    </div>
                </div>

                <div class="path-step">
                    <span>02</span>

                    <div>
                        <b>Practise with Tools</b>
                        <small>Explore GIS software and geospatial workflows.</small>
                    </div>
                </div>

                <div class="path-step">
                    <span>03</span>

                    <div>
                        <b>Explore Advanced Skills</b>
                        <small>Discover Python, remote sensing and spatial analysis.</small>
                    </div>
                </div>

            </div>

        </section>

    </main>


    {{-- Footer --}}
    <footer class="learning-footer">

        <a href="{{ url('/') }}" class="learning-brand">
            <span class="brand-mark">
                <i class="bi bi-globe-asia-australia"></i>
            </span>
            <span>Geo<b>Learn</b></span>
        </a>

        <p>
            Learn GIS. Explore Data. Build Your Skills.
        </p>

        <a href="#courses">
            Explore Courses
            <i class="bi bi-arrow-up"></i>
        </a>

    </footer>

</div>

@endsection


@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('courseSearch');
    const clearSearch = document.getElementById('clearSearch');
    const filters = document.querySelectorAll('.filter-chip');
    const navFilters = document.querySelectorAll('[data-nav-filter]');
    const courseItems = document.querySelectorAll('.course-item');
    const noResults = document.getElementById('noResults');
    const resetButton = document.getElementById('resetFilters');

    let activeFilter = 'all';

    function filterCourses() {

        const query = (searchInput?.value || '')
            .trim()
            .toLocaleLowerCase();

        let visibleCount = 0;

        courseItems.forEach(function (item) {

            const title = item.dataset.title || '';
            const description = item.dataset.description || '';
            const category = item.dataset.category || 'gis';

            const matchesSearch =
                title.includes(query) ||
                description.includes(query);

            const matchesCategory =
                activeFilter === 'all' ||
                category === activeFilter;

            const visible = matchesSearch && matchesCategory;

            item.hidden = !visible;

            if (visible) {
                visibleCount++;
            }
        });

        if (noResults) {
            noResults.classList.toggle('d-none', visibleCount !== 0);
        }

        if (clearSearch && searchInput) {
            clearSearch.classList.toggle(
                'd-none',
                searchInput.value.length === 0
            );
        }
    }


    function setActiveFilter(filter) {

        activeFilter = filter;

        filters.forEach(function (button) {

            const active = button.dataset.filter === filter;

            button.classList.toggle('active', active);
            button.setAttribute('aria-pressed', active ? 'true' : 'false');
        });

        filterCourses();
    }


    filters.forEach(function (button) {

        button.addEventListener('click', function () {
            setActiveFilter(button.dataset.filter || 'all');
        });

    });


    navFilters.forEach(function (link) {

        link.addEventListener('click', function (event) {

            const filter = link.dataset.navFilter;

            if (!filter) {
                return;
            }

            event.preventDefault();

            setActiveFilter(filter);

            document.getElementById('courses')?.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });

    });


    if (searchInput) {
        searchInput.addEventListener('input', filterCourses);
    }


    if (clearSearch && searchInput) {

        clearSearch.addEventListener('click', function () {

            searchInput.value = '';
            filterCourses();
            searchInput.focus();

        });

    }


    if (resetButton) {

        resetButton.addEventListener('click', function () {

            if (searchInput) {
                searchInput.value = '';
            }

            setActiveFilter('all');

            document.getElementById('courses')?.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

        });

    }

    filterCourses();

});
</script>
@endpush
