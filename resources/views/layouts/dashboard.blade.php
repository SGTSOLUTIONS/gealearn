<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') | GeoLearn GIS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/ol@10.6.1/ol.css" rel="stylesheet">
    <link href="{{ asset('css/gis-dashboard.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <div class="app-shell">

        {{-- ================= SIDEBAR (common) ================= --}}
        <aside class="sidebar" id="sidebar">
            <a class="brand" href="{{ route('dashboard') }}">
                <span class="brand-mark"><i class="bi bi-globe-americas"></i></span>
                <span>
                    <strong>GeoLearn <em>GIS</em></strong>
                    <small>Learn · Explore · Analyse · Create</small>
                </span>
            </a>
            <nav class="side-nav" aria-label="Main navigation">
                <a class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                    href="{{ route('dashboard') }}">
                    <i class="bi bi-grid-1x2-fill"></i> Dashboard
                </a>
                @auth
                    @if (auth()->user()->role === 'admin')
                        <a class="nav-item" href="{{ route('admin.course') }}"><i class="bi bi-mortarboard-fill"></i> My
                            Courses</a>
                        <a class="nav-item {{ request()->routeIs('admin.modules') ? 'active' : '' }}"
                            href="{{ route('admin.modules') }}">
                            <i class="bi bi-layers-fill"></i> Modules
                        </a>
                         <a class="nav-item {{ request()->routeIs('admin.lessons.*') ? 'active' : '' }}"
           href="{{ route('admin.lessons.index') }}">
            <i class="bi bi-file-text-fill"></i>
            Lessons
        </a>
                    @endif

                @endauth
                <a class="nav-item" href="#map-section"><i class="bi bi-map-fill"></i> Interactive Maps</a>
                <a class="nav-item" href="#map-section"><i class="bi bi-database-fill"></i> Datasets</a>
                <a class="nav-item" href="#tools"><i class="bi bi-bar-chart-line-fill"></i> Spatial Analysis</a>
                <a class="nav-item" href="#tools"><i class="bi bi-folder-fill"></i> Projects</a>
                <a class="nav-item" href="#stats"><i class="bi bi-award-fill"></i> Certificates</a>
                <div class="nav-caption">ACCOUNT</div>
                <a class="nav-item" href="#tools"><i class="bi bi-gem"></i> Subscription</a>
                <a class="nav-item" href="#tools"><i class="bi bi-gear-fill"></i> Settings</a>
                <a class="nav-item" href="mailto:support@example.com"><i class="bi bi-question-circle-fill"></i> Help
                    &amp; Support</a>
            </nav>
            <div class="sidebar-bottom">
                <p>“Maps turn data into understanding.”</p>
                <small>— GeoLearn GIS</small>
            </div>
        </aside>

        <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

        <div class="workspace">

            {{-- ================= TOPBAR (common) ================= --}}
            <header class="topbar">
                <div class="top-left">
                    <button class="icon-button menu-button" id="menuButton" aria-label="Open menu"
                        aria-expanded="false">
                        <i class="bi bi-list"></i>
                    </button>
                    <div class="top-search">
                        <i class="bi bi-search"></i>
                        <input type="search" aria-label="Search dashboard"
                            placeholder="Search courses, maps, datasets or tools...">
                        <kbd>Ctrl K</kbd>
                    </div>
                </div>
                <div class="top-right">
                    <button class="icon-button" aria-label="Notifications" title="Notifications">
                        <i class="bi bi-bell"></i><span class="notification-dot"></span>
                    </button>
                    <div class="profile">
                        <span class="avatar">{{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}</span>
                        <span class="profile-copy">
                            <strong>{{ auth()->user()->name ?? 'User' }}</strong>
                            <small>{{ ucfirst(str_replace('_', ' ', auth()->user()->role ?? 'student')) }}</small>
                        </span>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="icon-button" aria-label="Logout" title="Logout">
                            <i class="bi bi-box-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </header>

            <main class="dashboard-content">
                @yield('dashboard-content')
            </main>
        </div>
    </div>

    {{-- ================= COMMON TOAST + HIDDEN FILE INPUT ================= --}}
    <input type="file" id="geojsonFile" accept=".geojson,.json,application/geo+json,application/json" hidden>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="dashboardToast" class="toast" role="status" aria-live="polite">
            <div class="toast-header">
                <strong class="me-auto">GeoLearn GIS</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastMessage"></div>
        </div>
    </div>

    @yield('content')

    {{-- ================= COMMON SCRIPTS ================= --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ol@10.6.1/dist/ol.js"></script>
    <script src="{{ asset('js/gis-dashboard.js') }}"></script>
    @stack('scripts')
</body>

</html>
