{{-- resources/views/learning/lessons/19-5-gis-file-format-reference.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Common GIS file formats, what they hold and when to use them.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know common vector and raster formats</li>
    <li>Choose the right format for the job</li>
    <li>Understand the limits of shapefiles</li>
</ul>

<h2>Visual Guide: Common formats at a glance</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">Common formats at a glance</div>
        
        <svg viewBox="0 0 650 320" style="width: 100%; font-family: sans-serif;">
            <!-- Shapefile -->
            <rect x="20" y="20" width="190" height="120" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="115" y="55" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle">.shp</text>
            <text x="115" y="80" font-size="13" fill="#333" font-weight="bold" text-anchor="middle">Shapefile</text>
            <rect x="60" y="100" width="110" height="25" fill="#005a70" rx="12" />
            <text x="115" y="117" font-size="11" fill="#fff" font-weight="bold" text-anchor="middle">vector</text>

            <!-- GeoPackage -->
            <rect x="230" y="20" width="190" height="120" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="6" />
            <text x="325" y="55" font-size="16" fill="#2ecc71" font-weight="bold" text-anchor="middle">.gpkg</text>
            <text x="325" y="80" font-size="13" fill="#333" font-weight="bold" text-anchor="middle">GeoPackage</text>
            <rect x="270" y="100" width="110" height="25" fill="#2ecc71" rx="12" />
            <text x="325" y="117" font-size="11" fill="#fff" font-weight="bold" text-anchor="middle">vector + raster</text>

            <!-- GeoJSON -->
            <rect x="440" y="20" width="190" height="120" fill="#fff" stroke="#2980b9" stroke-width="2" rx="6" />
            <text x="535" y="55" font-size="16" fill="#2980b9" font-weight="bold" text-anchor="middle">.geojson</text>
            <text x="535" y="80" font-size="13" fill="#333" font-weight="bold" text-anchor="middle">GeoJSON</text>
            <rect x="480" y="100" width="110" height="25" fill="#2980b9" rx="12" />
            <text x="535" y="117" font-size="11" fill="#fff" font-weight="bold" text-anchor="middle">vector, web</text>

            <!-- KML -->
            <rect x="20" y="160" width="190" height="120" fill="#fff" stroke="#8e44ad" stroke-width="2" rx="6" />
            <text x="115" y="195" font-size="16" fill="#8e44ad" font-weight="bold" text-anchor="middle">.kml .kmz</text>
            <text x="115" y="220" font-size="13" fill="#333" font-weight="bold" text-anchor="middle">KML / KMZ</text>
            <rect x="60" y="240" width="110" height="25" fill="#8e44ad" rx="12" />
            <text x="115" y="257" font-size="11" fill="#fff" font-weight="bold" text-anchor="middle">display</text>

            <!-- GeoTIFF -->
            <rect x="230" y="160" width="190" height="120" fill="#fff" stroke="#d35400" stroke-width="2" rx="6" />
            <text x="325" y="195" font-size="16" fill="#d35400" font-weight="bold" text-anchor="middle">.tif</text>
            <text x="325" y="220" font-size="13" fill="#333" font-weight="bold" text-anchor="middle">GeoTIFF</text>
            <rect x="270" y="240" width="110" height="25" fill="#d35400" rx="12" />
            <text x="325" y="257" font-size="11" fill="#fff" font-weight="bold" text-anchor="middle">raster</text>

            <!-- CSV -->
            <rect x="440" y="160" width="190" height="120" fill="#fff" stroke="#666" stroke-width="2" rx="6" />
            <text x="535" y="195" font-size="16" fill="#666" font-weight="bold" text-anchor="middle">.csv</text>
            <text x="535" y="220" font-size="13" fill="#333" font-weight="bold" text-anchor="middle">CSV</text>
            <rect x="480" y="240" width="110" height="25" fill="#666" rx="12" />
            <text x="535" y="257" font-size="11" fill="#fff" font-weight="bold" text-anchor="middle">table</text>
        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">vector · raster · table</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>Shapefile (.shp, .shx, .dbf, .prj)</strong> – widely supported vector format made of several files; field names are limited to 10 characters.</li>
    <li><strong>GeoPackage (.gpkg)</strong> – one SQLite file holding vector and raster data; the modern choice for new work.</li>
    <li><strong>GeoJSON (.geojson)</strong> – text format for web mapping, in WGS 84 coordinates.</li>
    <li><strong>KML / KMZ</strong> – Google Earth display format; KMZ is the zipped version.</li>
    <li><strong>GeoTIFF (.tif)</strong> – georeferenced raster, used for imagery and DEMs.</li>
    <li><strong>CSV</strong> – plain table; needs X and Y columns to become points.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Prefer GeoPackage for storage and GeoJSON for the web.</p>
</div>