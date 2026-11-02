{{-- resources/views/learning/lessons/14-7-frontend-map-development.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Frontend map development builds the pages people actually use: the map, layer controls, search and forms.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Build a map page with layer controls</li>
    <li>Add search and popups</li>
    <li>Ensure responsive design</li>
</ul>

<h2>Visual Guide: Anatomy of a web map page</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Anatomy of a web map page</div>
        
        <svg viewBox="0 0 550 300" style="width: 100%; font-family: sans-serif;">
            <!-- Browser Frame -->
            <rect x="10" y="10" width="530" height="270" fill="#fff" stroke="#005a70" stroke-width="3" rx="8" />
            <rect x="10" y="10" width="530" height="30" fill="#005a70" rx="8" />
            <circle cx="30" cy="25" r="4" fill="#fff" />
            <circle cx="50" cy="25" r="4" fill="#fff" />
            <circle cx="70" cy="25" r="4" fill="#fff" />
            
            <rect x="150" y="15" width="250" height="20" fill="#fff" rx="10" />
            <text x="275" y="29" font-size="11" fill="#666" text-anchor="middle">gis.example.org</text>

            <!-- Sidebar -->
            <rect x="20" y="50" width="100" height="220" fill="#eef4f0" rx="4" />
            <text x="70" y="70" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Layers</text>
            
            <rect x="30" y="90" width="12" height="12" fill="#fff" stroke="#005a70" stroke-width="2" />
            <path d="M 32 96 L 35 99 L 40 92" fill="none" stroke="#005a70" stroke-width="2" />
            <text x="50" y="101" font-size="12" fill="#333">Parcels</text>

            <rect x="30" y="120" width="12" height="12" fill="#fff" stroke="#005a70" stroke-width="2" />
            <path d="M 32 126 L 35 129 L 40 122" fill="none" stroke="#005a70" stroke-width="2" />
            <text x="50" y="131" font-size="12" fill="#333">Buildings</text>

            <rect x="30" y="150" width="12" height="12" fill="#fff" stroke="#005a70" stroke-width="2" />
            <path d="M 32 156 L 35 159 L 40 152" fill="none" stroke="#005a70" stroke-width="2" />
            <text x="50" y="161" font-size="12" fill="#333">Roads</text>

            <rect x="30" y="180" width="12" height="12" fill="#fff" stroke="#005a70" stroke-width="2" />
            <text x="50" y="191" font-size="12" fill="#333">Wards</text>

            <!-- Map Area -->
            <rect x="130" y="50" width="400" height="220" fill="#eef4f0" rx="4" />
            
            <!-- Search Bar -->
            <rect x="140" y="60" width="180" height="25" fill="#fff" stroke="#ccc" rx="12" />
            <text x="155" y="77" font-size="11" fill="#666">Search parcel ID</text>
            <circle cx="305" cy="72" r="5" fill="none" stroke="#005a70" stroke-width="2" />
            <line x1="309" y1="76" x2="313" y2="80" stroke="#005a70" stroke-width="2" />

            <!-- Parcels -->
            <rect x="150" y="100" width="60" height="60" fill="#fdf0e0" stroke="#333" stroke-width="1" />
            <rect x="220" y="100" width="60" height="60" fill="#f5b041" stroke="#333" stroke-width="1" />
            <rect x="290" y="100" width="60" height="60" fill="#e3f2fd" stroke="#333" stroke-width="1" />
            <rect x="360" y="100" width="60" height="60" fill="#fdf0e0" stroke="#333" stroke-width="1" />

            <!-- Road -->
            <rect x="130" y="170" width="400" height="20" fill="#ccc" />

            <!-- Parcels Bottom -->
            <rect x="150" y="200" width="60" height="60" fill="#e8f5e9" stroke="#333" stroke-width="1" />
            <rect x="220" y="200" width="60" height="60" fill="#e3f2fd" stroke="#333" stroke-width="1" />
            <rect x="290" y="200" width="60" height="60" fill="#fdf0e0" stroke="#333" stroke-width="1" />
            <rect x="360" y="200" width="60" height="60" fill="#e8f5e9" stroke="#333" stroke-width="1" />

            <!-- Popup -->
            <rect x="290" y="115" width="80" height="30" fill="#fff" stroke="#333" stroke-width="1" rx="4" />
            <polygon points="330,145 340,155 350,145" fill="#fff" stroke="#333" stroke-width="1" />
            <text x="330" y="135" font-size="11" fill="#333" font-weight="bold" text-anchor="middle">P101 - 450 m2</text>

            <!-- Zoom Controls -->
            <rect x="500" y="140" width="20" height="20" fill="#fff" stroke="#333" stroke-width="1" />
            <text x="510" y="154" font-size="14" fill="#333" font-weight="bold" text-anchor="middle">+</text>
            <rect x="500" y="160" width="20" height="20" fill="#fff" stroke="#333" stroke-width="1" />
            <text x="510" y="174" font-size="14" fill="#333" font-weight="bold" text-anchor="middle">-</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">layers - search - popup</div>
    </div>
</div>

<p>
    The diagram shows the anatomy of a web map page. The map library can be Leaflet or OpenLayers for 2D, or CesiumJS for 3D. A layer panel lets users switch layers on and off. Search and filter help users find a parcel by ID, owner or ward. Popups show the attributes of the clicked feature. Responsive design ensures it works on desktop, tablet and phone. Show a legend and clear loading and error messages.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Which map library should I use?</strong> Leaflet or OpenLayers for 2D, CesiumJS for 3D.</li>
    <li><strong>What does a layer panel do?</strong> Lets users switch layers on and off.</li>
    <li><strong>What do search and filter do?</strong> Find a parcel by ID, owner or ward.</li>
    <li><strong>What do popups show?</strong> The attributes of the clicked feature.</li>
    <li><strong>Why responsive design?</strong> Works on desktop, tablet and phone.</li>
    <li><strong>What should I show?</strong> A legend and clear loading and error messages.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Test the page with real users early; small layout problems show up fast.</p>
</div>