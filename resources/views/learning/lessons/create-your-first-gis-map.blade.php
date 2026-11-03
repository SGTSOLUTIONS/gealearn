{{-- resources/views/learning/lessons/16-1-create-your-first-gis-map.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Build a simple map in QGIS: add a base map and one data layer, style it, and save the project.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a new project and add a base map</li>
    <li>Add a vector layer and style it</li>
    <li>Check the CRS and save the project</li>
</ul>

<h2>Visual Guide: A first map in QGIS</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">A first map in QGIS</div>
        
        <svg viewBox="0 0 600 300" style="width: 100%;">
            <!-- Browser Frame -->
            <rect x="10" y="10" width="580" height="280" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <rect x="10" y="10" width="580" height="25" fill="#005a70" rx="6" />
            <text x="300" y="27" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">QGIS - first_map.qgz</text>
            
            <!-- Menu Bar -->
            <text x="20" y="50" font-size="10" fill="#666">Project</text>
            <text x="70" y="50" font-size="10" fill="#666">Layer</text>
            <text x="110" y="50" font-size="10" fill="#666">Vector</text>
            <text x="160" y="50" font-size="10" fill="#666">Raster</text>
            <text x="210" y="50" font-size="10" fill="#666">Processing</text>

            <!-- Sidebar -->
            <rect x="20" y="65" width="120" height="200" fill="#eef4f0" stroke="#ccc" />
            <text x="80" y="85" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Layers</text>
            
            <rect x="30" y="100" width="12" height="12" fill="#fff" stroke="#005a70" stroke-width="1" />
            <text x="32" y="110" font-size="10" fill="#005a70" font-weight="bold">✓</text>
            <rect x="55" y="100" width="15" height="12" fill="#f4d03f" stroke="#333" />
            <text x="80" y="110" font-size="11" fill="#333">Wards</text>

            <rect x="30" y="130" width="12" height="12" fill="#fff" stroke="#005a70" stroke-width="1" />
            <text x="32" y="140" font-size="10" fill="#005a70" font-weight="bold">✓</text>
            <rect x="55" y="130" width="15" height="12" fill="#ccc" stroke="#333" />
            <text x="80" y="140" font-size="11" fill="#333">Roads</text>

            <rect x="30" y="160" width="12" height="12" fill="#fff" stroke="#005a70" stroke-width="1" />
            <text x="32" y="170" font-size="10" fill="#005a70" font-weight="bold">✓</text>
            <rect x="55" y="160" width="15" height="12" fill="#e0e0e0" stroke="#333" />
            <text x="80" y="170" font-size="11" fill="#333">OSM basemap</text>

            <!-- Map Area -->
            <rect x="150" y="65" width="420" height="200" fill="#fdf8f4" stroke="#ccc" />
            
            <!-- Map Layers -->
            <rect x="180" y="85" width="150" height="60" fill="#f5b041" opacity="0.4" stroke="#f07b24" stroke-width="2" transform="rotate(-5 255 115)" />
            <rect x="350" y="80" width="160" height="70" fill="#e3f2fd" opacity="0.4" stroke="#2980b9" stroke-width="2" transform="rotate(2 430 115)" />
            <rect x="190" y="170" width="160" height="70" fill="#d5f4d5" opacity="0.4" stroke="#2ecc71" stroke-width="2" transform="rotate(-3 270 205)" />
            
            <!-- Scale Bar -->
            <line x1="450" y1="240" x2="550" y2="240" stroke="#333" stroke-width="2" />
            <line x1="450" y1="235" x2="450" y2="245" stroke="#333" stroke-width="2" />
            <line x1="550" y1="235" x2="550" y2="245" stroke="#333" stroke-width="2" />
            <text x="500" y="235" font-size="10" fill="#333" text-anchor="middle">0  1 km</text>

            <!-- Status Bar -->
            <text x="20" y="285" font-size="10" fill="#333">Scale 1:50000</text>
            <text x="520" y="285" font-size="10" fill="#333" text-anchor="end">EPSG:4326</text>
        </svg>
        
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">base map + data layer + saved project</div>
    </div>
</div>

<h2>Steps</h2>
<div style="font-family: inherit;">
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Open QGIS and start a new project with <strong>Project > New</strong> (Ctrl+N).</div>
    </div>

    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Add a base map: in the Browser panel expand <strong>XYZ Tiles</strong> and double-click <strong>OpenStreetMap</strong>.</div>
    </div>

    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Add your data with <strong>Layer > Add Layer > Add Vector Layer</strong>, for example a ward shapefile.</div>
    </div>

    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Open <strong>Layer Styling</strong> (F7) and choose a fill colour, transparency and outline.</div>
    </div>

    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Check the project CRS in the bottom-right corner (EPSG:4326 or a local projected CRS).</div>
    </div>

    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Save with <strong>Project > Save</strong> (Ctrl+S) in a clean project folder.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Save the project in the same folder as your data so the links keep working.</p>
</div>