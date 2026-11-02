{{-- resources/views/learning/lessons/14-10-gis-data-import-modules.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    An import module loads outside data (shapefiles, CSV, GeoJSON) into the project database safely and repeatably.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Accept common GIS formats</li>
    <li>Validate and reproject data during import</li>
    <li>Use staging tables</li>
</ul>

<h2>Visual Guide: Import pipeline</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Import pipeline</div>
        
        <svg viewBox="0 0 550 250" style="width: 100%; font-family: sans-serif;">
            <!-- Input Files -->
            <rect x="10" y="40" width="80" height="25" fill="#e8a5a5" stroke="#333" rx="4" />
            <text x="50" y="57" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">.shp</text>
            <path d="M 90 52 L 130 52" stroke="#f07b24" stroke-width="2" />
            <polygon points="130,52 120,47 120,57" fill="#f07b24" />

            <rect x="10" y="80" width="80" height="25" fill="#e8f5e9" stroke="#333" rx="4" />
            <text x="50" y="97" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">.csv</text>
            <path d="M 90 92 L 130 92" stroke="#f07b24" stroke-width="2" />
            <polygon points="130,92 120,87 120,97" fill="#f07b24" />

            <rect x="10" y="120" width="80" height="25" fill="#e3f2fd" stroke="#333" rx="4" />
            <text x="50" y="137" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">.geojson</text>
            <path d="M 90 132 L 130 132" stroke="#f07b24" stroke-width="2" />
            <polygon points="130,132 120,127 120,137" fill="#f07b24" />

            <rect x="10" y="160" width="80" height="25" fill="#fdf0e0" stroke="#333" rx="4" />
            <text x="50" y="177" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">.gpkg</text>
            <path d="M 90 172 L 130 172" stroke="#f07b24" stroke-width="2" />
            <polygon points="130,172 120,167 120,177" fill="#f07b24" />

            <!-- Import Module -->
            <rect x="140" y="20" width="150" height="180" fill="#f9f9f9" stroke="#005a70" stroke-width="2" rx="8" />
            <text x="215" y="45" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Import module</text>

            <circle cx="160" cy="70" r="8" fill="#4caf50" />
            <path d="M 156 70 L 159 73 L 164 66" fill="none" stroke="#fff" stroke-width="1.5" />
            <text x="180" y="74" font-size="12" fill="#333">Validate</text>

            <circle cx="160" cy="105" r="8" fill="#4caf50" />
            <path d="M 156 105 L 159 108 L 164 101" fill="none" stroke="#fff" stroke-width="1.5" />
            <text x="180" y="109" font-size="12" fill="#333">Reproject</text>

            <circle cx="160" cy="140" r="8" fill="#4caf50" />
            <path d="M 156 140 L 159 143 L 164 136" fill="none" stroke="#fff" stroke-width="1.5" />
            <text x="180" y="144" font-size="12" fill="#333">Clean</text>

            <!-- Arrow to Staging -->
            <path d="M 290 100 L 340 100" stroke="#f07b24" stroke-width="2" />
            <polygon points="340,100 330,95 330,105" fill="#f07b24" />
            <text x="315" y="90" font-size="10" fill="#f07b24" font-weight="bold" text-anchor="middle">staging</text>

            <!-- Arrow to Live Tables -->
            <path d="M 340 140 L 390 140" stroke="#f07b24" stroke-width="2" />
            <polygon points="390,140 380,135 380,145" fill="#f07b24" />
            <text x="365" y="130" font-size="10" fill="#f07b24" font-weight="bold" text-anchor="middle">live tables</text>

            <!-- DB -->
            <path d="M 400 70 C 400 60, 460 60, 460 70 L 460 180 C 460 190, 400 190, 400 180 Z" fill="#e0f2f1" stroke="#005a70" stroke-width="2" />
            <ellipse cx="430" cy="70" rx="30" ry="8" fill="#b2dfdb" stroke="#005a70" stroke-width="2" />
            <text x="430" y="135" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">DB</text>

            <!-- Error Log -->
            <rect x="160" y="210" width="100" height="25" fill="#fff" stroke="#d9534f" stroke-width="2" rx="4" />
            <text x="210" y="227" font-size="12" fill="#d9534f" font-weight="bold" text-anchor="middle">error log</text>
            <path d="M 215 200 L 215 210" stroke="#d9534f" stroke-width="2" />
            <polygon points="215,210 210,200 220,200" fill="#d9534f" />
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">staging first, live second</div>
    </div>
</div>

<p>
    The diagram shows the import pipeline. Accept common formats: shapefile, GeoPackage, GeoJSON, CSV and KML. Validate by checking required fields, geometry validity and duplicate IDs. Reproject to the project CRS during import. Log errors – keep rejected rows with the reason. Load first into a staging table, review, then copy to the live table.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What formats should I accept?</strong> Shapefile, GeoPackage, GeoJSON, CSV and KML.</li>
    <li><strong>What validation is needed?</strong> Check required fields, geometry validity and duplicate IDs.</li>
    <li><strong>What happens to the CRS?</strong> Reproject to the project CRS during import.</li>
    <li><strong>What happens to bad data?</strong> Log errors – keep rejected rows with the reason.</li>
    <li><strong>How should data be loaded?</strong> Load first into a staging table, review, then copy to the live table.</li>
    <li><strong>What should every import record?</strong> Record the source, date and user of every import.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Never import straight into live tables; use a staging table first.</p>
</div>