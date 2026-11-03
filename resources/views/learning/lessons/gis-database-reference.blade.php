{{-- resources/views/learning/lessons/19-8-gis-database-reference.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Terms and objects used when working with spatial databases such as PostGIS.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know the key objects in a spatial table</li>
    <li>Understand keys and indexes</li>
    <li>Know geometry vs geography</li>
</ul>

<h2>Visual Guide: Key objects in a spatial table</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px; font-family: sans-serif;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">Key objects in a spatial table</div>
        
        <svg viewBox="0 0 650 300" style="width: 100%;">
            <!-- Table Label -->
            <text x="325" y="20" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">table: parcels</text>
            
            <!-- Table Background -->
            <rect x="20" y="40" width="610" height="120" fill="#fff" stroke="#ccc" stroke-width="1" />
            
            <!-- Headers -->
            <rect x="20" y="40" width="120" height="30" fill="#005a70" />
            <text x="80" y="60" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">id</text>
            
            <rect x="140" y="40" width="130" height="30" fill="#2980b9" />
            <text x="205" y="60" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">owner_id</text>
            
            <rect x="270" y="40" width="130" height="30" fill="#005a70" />
            <text x="335" y="60" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">area_m2</text>
            
            <rect x="400" y="40" width="230" height="30" fill="#d35400" />
            <text x="515" y="60" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">geom</text>

            <!-- Row 1 -->
            <text x="80" y="95" font-size="11" fill="#333" text-anchor="middle">1</text>
            <text x="205" y="95" font-size="11" fill="#333" text-anchor="middle">10</text>
            <text x="335" y="95" font-size="11" fill="#333" text-anchor="middle">450</text>
            <text x="515" y="95" font-size="11" fill="#333" text-anchor="middle">POLYGON(...)</text>
            <line x1="20" y1="110" x2="630" y2="110" stroke="#eee" />

            <!-- Row 2 -->
            <text x="80" y="125" font-size="11" fill="#333" text-anchor="middle">2</text>
            <text x="205" y="125" font-size="11" fill="#333" text-anchor="middle">11</text>
            <text x="335" y="125" font-size="11" fill="#333" text-anchor="middle">600</text>
            <text x="515" y="125" font-size="11" fill="#333" text-anchor="middle">POLYGON(...)</text>
            <line x1="20" y1="140" x2="630" y2="140" stroke="#eee" />

            <!-- Row 3 -->
            <text x="80" y="155" font-size="11" fill="#333" text-anchor="middle">3</text>
            <text x="205" y="155" font-size="11" fill="#333" text-anchor="middle">10</text>
            <text x="335" y="155" font-size="11" fill="#333" text-anchor="middle">1200</text>
            <text x="515" y="155" font-size="11" fill="#333" text-anchor="middle">POLYGON(...)</text>

            <!-- Annotations -->
            <!-- Primary Key Arrow -->
            <line x1="80" y1="170" x2="80" y2="200" stroke="#005a70" stroke-width="2" />
            <polygon points="80,170 75,180 85,180" fill="#005a70" />
            <rect x="20" y="200" width="120" height="40" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="80" y="215" font-size="11" fill="#005a70" font-weight="bold" text-anchor="middle">PRIMARY KEY</text>
            <text x="80" y="230" font-size="9" fill="#666" text-anchor="middle">unique row</text>

            <!-- Foreign Key Arrow -->
            <line x1="205" y1="170" x2="205" y2="200" stroke="#2980b9" stroke-width="2" />
            <polygon points="205,170 200,180 210,180" fill="#2980b9" />
            <rect x="140" y="200" width="130" height="40" fill="#fff" stroke="#2980b9" stroke-width="2" rx="4" />
            <text x="205" y="215" font-size="11" fill="#2980b9" font-weight="bold" text-anchor="middle">FOREIGN KEY</text>
            <text x="205" y="230" font-size="9" fill="#666" text-anchor="middle">links to owners</text>

            <!-- SRID Arrow -->
            <line x1="515" y1="170" x2="515" y2="200" stroke="#d35400" stroke-width="2" />
            <polygon points="515,170 510,180 520,180" fill="#d35400" />
            <rect x="400" y="200" width="230" height="40" fill="#fff" stroke="#d35400" stroke-width="2" rx="4" />
            <text x="515" y="215" font-size="11" fill="#d35400" font-weight="bold" text-anchor="middle">SRID 32644</text>
            <text x="515" y="230" font-size="9" fill="#666" text-anchor="middle">+ GiST index</text>
        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 15px;">keys link tables, indexes speed queries</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>Geometry</strong> – a flat-plane type; measurements use the units of its SRID.</li>
    <li><strong>Geography</strong> – a spherical type; distances are returned in metres.</li>
    <li><strong>SRID</strong> – the number that identifies the CRS of a geometry, usually the EPSG code.</li>
    <li><strong>Spatial index (GiST)</strong> – speeds up spatial queries by searching bounding boxes first.</li>
    <li><strong>Primary key / foreign key</strong> – a unique row identifier / a link to another table.</li>
    <li><strong>Transaction</strong> – a group of changes that succeed or fail together (BEGIN, COMMIT, ROLLBACK).</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Create a GiST index on every geometry column that you query.</p>
</div>