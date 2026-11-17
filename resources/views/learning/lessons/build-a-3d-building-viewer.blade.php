{{-- resources/views/learning/lessons/16-13-build-3d-building-viewer.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A 3D viewer extrudes building footprints by their height to show a city in three dimensions.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Prepare a footprint layer with heights</li>
    <li>Load GeoJSON into CesiumJS</li>
    <li>Set extrusion height and camera view</li>
</ul>

<h2>Visual Guide: Extruding footprints into buildings</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 20px 10px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 15px; font-size: 14px;">Extruding footprints into buildings</div>
        
        <svg viewBox="0 0 650 320" style="width: 100%;">
            
            <!-- ================= LEFT SIDE: 2D FOOTPRINTS ================= -->
            <text x="110" y="70" font-size="13" fill="#666" font-weight="bold" text-anchor="middle">2D footprints</text>
            
            <!-- Footprint 1 -->
            <rect x="60" y="100" width="45" height="45" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="82.5" y="127" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">20 m</text>

            <!-- Footprint 2 -->
            <rect x="120" y="100" width="45" height="45" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="142.5" y="127" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">45 m</text>

            <!-- Footprint 3 -->
            <rect x="60" y="160" width="45" height="45" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="82.5" y="187" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">12 m</text>

            <!-- Footprint 4 -->
            <rect x="120" y="160" width="45" height="45" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="142.5" y="187" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">30 m</text>

            <!-- Arrow -->
            <path d="M 185 152 L 215 152" stroke="#f07b24" stroke-width="2" />
            <polygon points="215,152 205,147 205,157" fill="#f07b24" />
            <text x="200" y="142" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="middle">+ height</text>

            <!-- ================= RIGHT SIDE: 3D BUILDINGS ================= -->
            
            <!-- Ground Plane -->
            <polygon points="260,210 380,270 540,210 420,150" fill="#e8f5e9" stroke="#2ecc71" stroke-width="1.5" opacity="0.6" />

            <!-- Building 1 (Back Left - 20m) -->
            <!-- Top -->
            <polygon points="340,150 380,130 420,150 380,170" fill="#e8a57a" stroke="#333" stroke-width="1" />
            <!-- Right Wall -->
            <polygon points="380,130 420,150 420,200 380,180" fill="#b87d56" stroke="#333" stroke-width="1" />
            <!-- Left Wall -->
            <polygon points="340,150 380,170 380,180 340,160" fill="#d1946b" stroke="#333" stroke-width="1" />

            <!-- Building 2 (Back Right - 58m) -->
            <!-- Top -->
            <polygon points="450,110 490,90 530,110 490,130" fill="#e8a57a" stroke="#333" stroke-width="1" />
            <!-- Right Wall -->
            <polygon points="490,90 530,110 530,230 490,210" fill="#b87d56" stroke="#333" stroke-width="1" />
            <!-- Left Wall -->
            <polygon points="450,110 490,130 490,210 450,190" fill="#d1946b" stroke="#333" stroke-width="1" />
            <text x="510" y="95" font-size="12" fill="#333" font-weight="bold">58 m</text>

            <!-- Building 3 (Front Left - 12m) -->
            <!-- Top -->
            <polygon points="300,220 340,200 380,220 340,240" fill="#e8a57a" stroke="#333" stroke-width="1" />
            <!-- Right Wall -->
            <polygon points="340,200 380,220 380,260 340,240" fill="#b87d56" stroke="#333" stroke-width="1" />
            <!-- Left Wall -->
            <polygon points="300,220 340,240 340,260 300,240" fill="#d1946b" stroke="#333" stroke-width="1" />

            <!-- Building 4 (Front Center - 45m) -->
            <!-- Top -->
            <polygon points="380,180 420,160 460,180 420,200" fill="#e8a57a" stroke="#333" stroke-width="1" />
            <!-- Right Wall -->
            <polygon points="420,160 460,180 460,230 420,210" fill="#b87d56" stroke="#333" stroke-width="1" />
            <!-- Left Wall -->
            <polygon points="380,180 420,200 420,210 380,190" fill="#d1946b" stroke="#333" stroke-width="1" />

            <!-- Bottom Text -->
            <text x="400" y="300" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">extruded in CesiumJS</text>

        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 10px;">height turns 2D into 3D</div>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Prepare a footprint layer with a numeric height field (metres, or floors x 3).</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Check that geometries are valid and the CRS is <strong>EPSG:4326</strong> for web use.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Export the layer as <strong>GeoJSON</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>In CesiumJS, create a <strong>Viewer</strong> and load the GeoJSON as a data source.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Set each polygon's <strong>extruded height</strong> from the height field and colour by use or height.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Fly the camera to the data and tilt the view to check the result.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Missing or zero heights give flat buildings: check the height field first.</p>
</div>