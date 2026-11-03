{{-- resources/views/learning/lessons/19-10-gis-api-reference.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Web services and APIs used to read and publish geographic data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know the OGC web services</li>
    <li>Understand WMS, WFS, WCS and WMTS</li>
    <li>Use OGC API - Features</li>
</ul>

<h2>Visual Guide: OGC web services</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">OGC web services</div>
        
        <svg viewBox="0 0 650 300" style="width: 100%; font-family: sans-serif;">
            <!-- WMS -->
            <rect x="20" y="20" width="140" height="200" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="90" y="50" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">WMS</text>
            <text x="90" y="70" font-size="11" fill="#666" text-anchor="middle">map images</text>
            <rect x="40" y="90" width="100" height="80" fill="#d5f4d5" stroke="#005a70" stroke-width="1" />
            <circle cx="120" cy="110" r="10" fill="#f4d03f" />
            <polygon points="70,150 90,120 110,150" fill="#2ecc71" />

            <!-- WFS -->
            <rect x="170" y="20" width="140" height="200" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="240" y="50" font-size="14" fill="#2980b9" font-weight="bold" text-anchor="middle">WFS</text>
            <text x="240" y="70" font-size="11" fill="#666" text-anchor="middle">vector features</text>
            <line x1="190" y1="100" x2="270" y2="100" stroke="#2980b9" stroke-width="2" />
            <circle cx="210" cy="100" r="4" fill="#d9534f" />
            <circle cx="250" cy="100" r="4" fill="#d9534f" />
            <polygon points="200,160 240,130 270,170 230,180" fill="#f4d03f" stroke="#333" stroke-width="1" />

            <!-- WCS -->
            <rect x="320" y="20" width="140" height="200" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="390" y="50" font-size="14" fill="#8e44ad" font-weight="bold" text-anchor="middle">WCS</text>
            <text x="390" y="70" font-size="11" fill="#666" text-anchor="middle">raster data</text>
            <rect x="340" y="90" width="100" height="80" fill="#eef4f0" stroke="#005a70" stroke-width="1" />
            <g stroke="#005a70" stroke-width="1">
                <rect x="340" y="90" width="25" height="25" fill="#81c784" />
                <rect x="365" y="90" width="25" height="25" fill="#81c784" />
                <rect x="390" y="90" width="25" height="25" fill="#66bb6a" />
                <rect x="415" y="90" width="25" height="25" fill="#66bb6a" />
                <rect x="340" y="115" width="25" height="25" fill="#8d6e63" />
                <rect x="365" y="115" width="25" height="25" fill="#8d6e63" />
                <rect x="390" y="115" width="25" height="25" fill="#81c784" />
                <rect x="415" y="115" width="25" height="25" fill="#81c784" />
                <rect x="340" y="140" width="25" height="25" fill="#8d6e63" />
                <rect x="365" y="140" width="25" height="25" fill="#8d6e63" />
                <rect x="390" y="140" width="25" height="25" fill="#81c784" />
                <rect x="415" y="140" width="25" height="25" fill="#81c784" />
            </g>

            <!-- WMTS -->
            <rect x="470" y="20" width="140" height="200" fill="#fff" stroke="#f07b24" stroke-width="2" rx="6" />
            <text x="540" y="50" font-size="14" fill="#f07b24" font-weight="bold" text-anchor="middle">WMTS</text>
            <text x="540" y="70" font-size="11" fill="#666" text-anchor="middle">map tiles</text>
            <rect x="490" y="90" width="100" height="80" fill="#eef4f0" stroke="#005a70" stroke-width="1" />
            <g stroke="#fff" stroke-width="2">
                <rect x="490" y="90" width="33" height="40" fill="#fdf0e0" />
                <rect x="523" y="90" width="33" height="40" fill="#e3f2fd" />
                <rect x="556" y="90" width="34" height="40" fill="#d5f4d5" />
                <rect x="490" y="130" width="33" height="40" fill="#d5f4d5" />
                <rect x="523" y="130" width="33" height="40" fill="#fdf0e0" />
                <rect x="556" y="130" width="34" height="40" fill="#e3f2fd" />
            </g>

            <!-- Bottom API Bar -->
            <rect x="20" y="240" width="590" height="40" fill="#eef4f0" stroke="#005a70" stroke-width="1" rx="6" />
            <text x="315" y="265" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">OGC API - Features: modern REST API that returns GeoJSON</text>

        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">one standard per kind of data</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>WMS</strong> – Web Map Service: returns map images.</li>
    <li><strong>WFS</strong> – Web Feature Service: returns vector features; WFS-T also allows editing.</li>
    <li><strong>WCS</strong> – Web Coverage Service: returns raster data values.</li>
    <li><strong>WMTS</strong> – Web Map Tile Service: serves pre-rendered tiles for fast display.</li>
    <li><strong>OGC API - Features</strong> – the modern REST-style API for vector data, returning GeoJSON.</li>
    <li><strong>REST + GeoJSON</strong> – the usual pattern for custom APIs; status codes 200, 401, 403 and 404.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Use WMS or WMTS to display, WFS to query and edit features.</p>
</div>