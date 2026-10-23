@extends('layouts.dashboard')
@section('title', 'Dashboard')

@section('dashboard-content')

    {{-- ================= HERO ================= --}}
    <section class="hero">
        <div class="hero-copy">
            <div class="eyebrow">
                <span></span> WELCOME BACK, {{ strtoupper(strtok(auth()->user()->name ?? 'EXPLORER', ' ')) }}!
            </div>
            <h1>Explore the World<br>with <span>GIS Learning</span></h1>
            <p>Interactive courses, real-world datasets and powerful analysis tools to build your geospatial
                skills.</p>
            <div class="hero-actions">
                <a class="primary-btn" href="#courses">Continue Learning <i class="bi bi-arrow-right"></i></a>
                <a class="hero-link" href="#progress">View My Progress</a>
            </div>
        </div>
        <div class="hero-feature">
            <i class="bi bi-geo-alt-fill"></i>
            <span>
                <strong>Earth Observation</strong>
                <small>Real-world insights for a better tomorrow</small>
            </span>
        </div>
    </section>

    {{-- ================= STATS ================= --}}
    <section class="stats-grid" id="stats">
        @foreach ([
            ['bi-book-half',       'Enrolled Courses',  '5',  'View Courses',      '#courses',     'green'],
            ['bi-map',             'Maps Explored',     '12', 'Open Maps',         '#map-section', 'blue'],
            ['bi-bar-chart-fill',  'Analyses Created',  '8',  'View Analyses',     '#tools',       'purple'],
            ['bi-award-fill',      'Certificates',      '3',  'View Certificates', '#courses',     'orange'],
        ] as $stat)
            <article class="stat-card">
                <span class="stat-icon {{ $stat[5] }}"><i class="bi {{ $stat[0] }}"></i></span>
                <div>
                    <div class="stat-label">{{ $stat[1] }}</div>
                    <strong class="stat-number">{{ $stat[2] }}</strong>
                    <a href="{{ $stat[4] }}">{{ $stat[3] }} <i class="bi bi-arrow-right"></i></a>
                </div>
            </article>
        @endforeach
    </section>

    {{-- ================= FEATURE GRID ================= --}}
    <div class="feature-grid">

        {{-- MAP --}}
        <section class="panel map-panel" id="map-section">
            <div class="panel-heading">
                <div>
                    <h2><i class="bi bi-globe2 text-primary"></i> Interactive World Map</h2>
                    <p>Explore real-world GIS datasets and visualise global data</p>
                </div>
                <button type="button" class="text-action" id="fullMapButton">
                    View Full Map <i class="bi bi-arrow-up-right"></i>
                </button>
            </div>
            <div class="map-wrap">
                <div id="gisMap" role="application" aria-label="Interactive OpenLayers world map"></div>
                <div class="map-layers">
                    <strong>Map Layers</strong>
                    <label><input type="radio" name="basemap" value="osm" checked> OpenStreetMap</label>
                    <label><input type="radio" name="basemap" value="satellite"> Satellite Imagery</label>
                    <label><input type="checkbox" id="gridToggle"> Coordinate Grid</label>
                </div>
                <div class="map-coordinate" id="mapCoordinate">Lon: 0.0000 · Lat: 0.0000</div>
            </div>
        </section>

        {{-- PROGRESS --}}
        <section class="panel progress-panel" id="progress">
            <div class="panel-heading">
                <h2>My Learning Progress</h2>
                <a href="#courses" class="text-action">View All <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="progress-main">
                <div class="donut"><span>60%</span></div>
                <div>
                    <strong>GIS Fundamentals</strong>
                    <div class="progress slim">
                        <div class="progress-bar bg-success" style="width:60%"></div>
                    </div>
                    <small>6 of 10 lessons</small>
                </div>
            </div>
            <div class="progress-list">
                @foreach ([['Remote Sensing', 20], ['Spatial Analysis', 0], ['Web GIS', 0], ['Cartography', 0]] as $item)
                    <div class="progress-row">
                        <span>{{ $item[0] }}</span>
                        <div class="progress slim">
                            <div class="progress-bar" style="width:{{ $item[1] }}%"></div>
                        </div>
                        <small>{{ $item[1] }}%</small>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- TOOLS --}}
        <section class="panel tools-panel" id="tools">
            <div class="panel-heading">
                <h2><i class="bi bi-tools text-primary"></i> Quick Tools</h2>
            </div>
            <div class="tools-grid">
                <a href="#map-section" class="tool green-soft">
                    <i class="bi bi-map-fill"></i><span>Open Map</span>
                </a>
                <button type="button" class="tool blue-soft" id="uploadTool">
                    <i class="bi bi-cloud-arrow-up-fill"></i><span>Upload Data</span>
                </button>
                <button type="button" class="tool purple-soft" id="analysisTool">
                    <i class="bi bi-bar-chart-fill"></i><span>Start Analysis</span>
                </button>
                <button type="button" class="tool orange-soft" id="projectTool">
                    <i class="bi bi-plus-circle-fill"></i><span>Create Project</span>
                </button>
            </div>
        </section>
    </div>

    {{-- ================= BOTTOM GRID ================= --}}
    <div class="bottom-grid">
        <section class="panel courses-panel" id="courses">
            <div class="panel-heading">
                <h2><i class="bi bi-mortarboard-fill text-primary"></i> Recommended Courses</h2>
                <a href="#courses" class="text-action">View All <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="courses-grid">
                <article class="course">
                    <div class="course-art art-gis"><i class="bi bi-globe-americas"></i></div>
                    <div class="course-info">
                        <h3>GIS Fundamentals</h3>
                        <p>Learn core GIS concepts, maps and spatial data.</p>
                        <div class="course-meta"><span>10 Lessons</span><span class="level">Beginner</span></div>
                    </div>
                </article>
                <article class="course">
                    <div class="course-art art-remote"><i class="bi bi-cloud-sun-fill"></i></div>
                    <div class="course-info">
                        <h3>Remote Sensing Basics</h3>
                        <p>Understand satellite imagery and earth observation.</p>
                        <div class="course-meta"><span>8 Lessons</span><span class="level">Beginner</span></div>
                    </div>
                </article>
                <article class="course">
                    <div class="course-art art-spatial"><i class="bi bi-bounding-box-circles"></i></div>
                    <div class="course-info">
                        <h3>Spatial Analysis</h3>
                        <p>Perform real-world spatial analysis using GIS tools.</p>
                        <div class="course-meta"><span>12 Lessons</span><span
                                class="level intermediate">Intermediate</span></div>
                    </div>
                </article>
                <article class="course">
                    <div class="course-art art-web"><i class="bi bi-layers-fill"></i></div>
                    <div class="course-info">
                        <h3>Web GIS with OpenLayers</h3>
                        <p>Build interactive web maps with open-source tools.</p>
                        <div class="course-meta"><span>8 Lessons</span><span
                                class="level intermediate">Intermediate</span></div>
                    </div>
                </article>
            </div>
        </section>

        <section class="panel activity-panel">
            <div class="panel-heading">
                <h2><i class="bi bi-clock-history text-primary"></i> Recent Activity</h2>
            </div>
            <div class="activity-list">
                <div>
                    <i class="bi bi-book-half"></i>
                    <span>Completed lesson<small>Introduction to GIS</small></span>
                    <time>2 hours ago</time>
                </div>
                <div>
                    <i class="bi bi-map"></i>
                    <span>Explored map<small>World Population Density</small></span>
                    <time>5 hours ago</time>
                </div>
                <div>
                    <i class="bi bi-bar-chart"></i>
                    <span>Created analysis<small>Buffer Analysis – Rivers</small></span>
                    <time>1 day ago</time>
                </div>
                <div>
                    <i class="bi bi-folder"></i>
                    <span>Created project<small>Urban Land Use Study</small></span>
                    <time>1 day ago</time>
                </div>
            </div>
        </section>
    </div>

    <p class="demo-note">Dashboard statistics, course progress and activity are demonstration data. Connect them to
        your Laravel database for live information.</p>

@endsection
