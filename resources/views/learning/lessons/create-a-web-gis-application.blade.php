{{-- resources/views/learning/lessons/16-10-create-web-gis-application.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A simple web GIS shows your layers in a browser with a base map, a layer switcher and popups.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Export data as GeoJSON</li>
    <li>Load GeoJSON into Leaflet</li>
    <li>Add popups and layer controls</li>
</ul>

<h2>Visual Guide: A simple web map page</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">A simple web map page</div>
        
        <svg viewBox="0 0 600 300" style="width: 100%;">
            <!-- Browser Frame -->
            <rect x="10" y="10" width="580" height="280" fill="#fff" stroke="#005a70" stroke-width="2" rx="8" />
            <rect x="10" y="10" width="580" height="30" fill="#005a70" rx="8" />
            <circle cx="30" cy="25" r="4" fill="#fff" />
            <circle cx="50" cy="25" r="4" fill="#fff" />
            <circle cx="70" cy="25" r="4" fill="#fff" />
            <rect x="150" y="15" width="300" height="20" fill="#fff" rx="10" />
            <text x="300" y="29" font-size="11" fill="#666" text-anchor="middle">gis.example.org</text>

            <!-- Sidebar -->
            <rect x="20" y="50" width="120" height="230" fill="#eef4f0" rx="4" />
            <text x="80" y="75" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Layers</text>
            
            <rect x="30" y="95" width="12" height="12" fill="#fff" stroke="#005a70" stroke-width="2" />
            <text x="32" y="105" font-size="10" fill="#005a70" font-weight="bold">✓</text>
            <text x="50" y="105" font-size="12" fill="#333">Parcels</text>

            <rect x="30" y="125" width="12" height="12" fill="#fff" stroke="#005a70" stroke-width="2" />
            <text x="32" y="135" font-size="10" fill="#005a70" font-weight="bold">✓</text>
            <text x="50" y="135" font-size="12" fill="#333">Buildings</text>

            <rect x="30" y="155" width="12" height="12" fill="#fff" stroke="#005a70" stroke-width="2" />
            <text x="32" y="165" font-size="10" fill="#005a70" font-weight="bold">✓</text>
            <text x="50" y="165" font-size="12" fill="#333">Roads</text>

            <rect x="30" y="185" width="12" height="12" fill="#fff" stroke="#005a70" stroke-width="2" />
            <text x="50" y="195" font-size="12" fill="#333">Wards</text>

            <!-- Map Area -->
            <rect x="150" y="50" width="420" height="230" fill="#eef4f0" rx="4" />
            
            <!-- Search Bar -->
            <rect x="160" y="60" width="200" height="25" fill="#fff" stroke="#ccc" rx="12" />
            <text x="175" y="77" font-size="11" fill="#666">Search parcel ID</text>
            <circle cx="340" cy="72" r="5" fill="none" stroke="#005a70" stroke-width="2" />
            <line x1="344" y1="76" x2="348" y2="80" stroke="#005a70" stroke-width="2" />

            <!-- Parcels -->
            <rect x="170" y="100" width="70" height="60" fill="#fdf0e0" stroke="#333" stroke-width="1" />
            <rect x="250" y="100" width="70" height="60" fill="#f5b041" stroke="#f07b24" stroke-width="3" />
            <rect x="330" y="100" width="70" height="60" fill="#e3f2fd" stroke="#333" stroke-width="1" />
            <rect x="410" y="100" width="70" height="60" fill="#fdf0e0" stroke="#333" stroke-width="1" />

            <!-- Road -->
            <rect x="150" y="170" width="420" height="20" fill="#ccc" />

            <!-- Parcels Bottom -->
            <rect x="170" y="200" width="70" height="60" fill="#e8f5e9" stroke="#333" stroke-width="1" />
            <rect x="250" y="200" width="70" height="60" fill="#e3f2fd" stroke="#333" stroke-width="1" />
            <rect x="330" y="200" width="70" height="60" fill="#fdf0e0" stroke="#333" stroke-width="1" />
            <rect x="410" y="200" width="70" height="60" fill="#e8f5e9" stroke="#333" stroke-width="1" />

            <!-- Popup -->
            <rect x="270" y="110" width="100" height="30" fill="#fff" stroke="#333" stroke-width="1" rx="4" />
            <polygon points="320,140 330,150 340,140" fill="#fff" stroke="#333" stroke-width="1" />
            <text x="320" y="130" font-size="11" fill="#333" font-weight="bold" text-anchor="middle">P101 · 450 m2</text>

            <!-- Zoom Controls -->
            <rect x="530" y="150" width="20" height="20" fill="#fff" stroke="#333" stroke-width="1" />
            <text x="540" y="164" font-size="14" fill="#333" font-weight="bold" text-anchor="middle">+</text>
            <rect x="530" y="170" width="20" height="20" fill="#fff" stroke="#333" stroke-width="1" />
            <text x="540" y="184" font-size="14" fill="#333" font-weight="bold" text-anchor="middle">-</text>
        </svg>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Export your layer as GeoJSON in EPSG:4326 (<strong>Export > Save Features As</strong>).</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Create an HTML page with a map container and load the Leaflet library.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Add an OpenStreetMap base layer and set the starting view.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Load the GeoJSON file and draw it on the map.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Add a popup that shows the main attributes of each feature.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Add a layer control, then test on a phone and a desktop browser.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Serve the page from a small web server; browsers block data files opened directly from disk.</p>
</div>