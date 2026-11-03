{{-- resources/views/learning/lessons/16-2-import-display-shapefiles.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A shapefile is a set of files that together hold one layer. Load it, check it and read its attributes.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand shapefile components</li>
    <li>Load a shapefile into QGIS</li>
    <li>Check the CRS and attributes</li>
</ul>

<h2>Visual Guide: One shapefile = four files</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">One shapefile = four files</div>
        
        <svg viewBox="0 0 600 300" style="width: 100%;">
            <!-- File Boxes -->
            <rect x="20" y="40" width="140" height="40" fill="#f4b4b4" stroke="#d9534f" stroke-width="2" rx="4" />
            <text x="90" y="65" font-size="14" fill="#333" font-weight="bold" text-anchor="middle">.shp</text>
            <text x="180" y="65" font-size="11" fill="#666">shapes</text>

            <rect x="20" y="90" width="140" height="40" fill="#d5f4d5" stroke="#2ecc71" stroke-width="2" rx="4" />
            <text x="90" y="115" font-size="14" fill="#333" font-weight="bold" text-anchor="middle">.shx</text>
            <text x="180" y="115" font-size="11" fill="#666">index</text>

            <rect x="20" y="140" width="140" height="40" fill="#e3f2fd" stroke="#2980b9" stroke-width="2" rx="4" />
            <text x="90" y="165" font-size="14" fill="#333" font-weight="bold" text-anchor="middle">.dbf</text>
            <text x="180" y="165" font-size="11" fill="#666">attributes</text>

            <rect x="20" y="190" width="140" height="40" fill="#fdf0e0" stroke="#f07b24" stroke-width="2" rx="4" />
            <text x="90" y="215" font-size="14" fill="#333" font-weight="bold" text-anchor="middle">.prj</text>
            <text x="180" y="215" font-size="11" fill="#666">CRS</text>

            <!-- Bracket -->
            <line x1="170" y1="40" x2="170" y2="230" stroke="#666" stroke-width="2" />
            <line x1="170" y1="40" x2="180" y2="40" stroke="#666" stroke-width="2" />
            <line x1="170" y1="230" x2="180" y2="230" stroke="#666" stroke-width="2" />

            <!-- Arrow -->
            <path d="M 210 135 L 250 135" stroke="#f07b24" stroke-width="3" />
            <polygon points="250,135 240,130 240,140" fill="#f07b24" />
            <text x="230" y="125" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="middle">one</text>
            <text x="230" y="155" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="middle">layer</text>

            <!-- Map Grid -->
            <rect x="270" y="20" width="300" height="240" fill="#fdf8f4" stroke="#ccc" stroke-width="1" />
            
            <rect x="290" y="40" width="70" height="60" fill="#e3f2fd" stroke="#005a70" stroke-width="1" />
            <rect x="370" y="40" width="70" height="60" fill="#e3f2fd" stroke="#005a70" stroke-width="1" />
            <rect x="450" y="40" width="70" height="60" fill="#e3f2fd" stroke="#005a70" stroke-width="1" />

            <rect x="290" y="110" width="70" height="60" fill="#d5f4d5" stroke="#005a70" stroke-width="1" />
            <rect x="370" y="110" width="70" height="60" fill="#fdf0e0" stroke="#f07b24" stroke-width="3" />
            <text x="405" y="145" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="middle">selected</text>
            <rect x="450" y="110" width="70" height="60" fill="#d5f4d5" stroke="#005a70" stroke-width="1" />

            <rect x="290" y="180" width="70" height="60" fill="#fdf0e0" stroke="#005a70" stroke-width="1" />
            <rect x="370" y="180" width="70" height="60" fill="#fdf0e0" stroke="#005a70" stroke-width="1" />
            <rect x="450" y="180" width="70" height="60" fill="#fdf0e0" stroke="#005a70" stroke-width="1" />
        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">keep the parts together</div>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Keep all parts together in one folder: <strong>.shp</strong>, <strong>.shx</strong>, <strong>.dbf</strong> and <strong>.prj</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Open <strong>Layer > Add Layer > Add Vector Layer</strong> and choose the .shp file, or drag it onto the canvas.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Right-click the layer and choose <strong>Zoom to Layer(s)</strong> to see the whole dataset.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Check the CRS with right-click > <strong>Layer CRS</strong>; it comes from the .prj file.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Open the attribute table (<strong>F6</strong>) and check the fields and a few rows.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Use the <strong>Identify tool</strong> (Ctrl+Shift+I) to click a feature and read its values.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> If the layer lands in the wrong place, the .prj file is probably missing or wrong.</p>
</div>