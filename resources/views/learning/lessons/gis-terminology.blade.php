{{-- resources/views/learning/lessons/19-1-gis-terminology.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Core terms used throughout GIS, grouped by what they describe.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand core GIS terms</li>
    <li>Recognise how features, layers, and attributes relate</li>
    <li>Use terms correctly in projects</li>
</ul>

<h2>Visual Guide: How the core terms fit together</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">How the core terms fit together</div>
        
        <svg viewBox="0 0 650 340" style="width: 100%; font-family: sans-serif;">
            <!-- Outer Map Container -->
            <rect x="20" y="20" width="610" height="280" fill="#fdf8f4" stroke="#005a70" stroke-width="2" rx="8" />
            <text x="40" y="45" font-size="14" fill="#005a70" font-weight="bold">MAP</text>

            <!-- Wards Layer Box -->
            <rect x="40" y="65" width="370" height="215" fill="#fff" stroke="#d35400" stroke-width="2" rx="6" />
            <text x="55" y="90" font-size="13" fill="#d35400" font-weight="bold">Layer: Wards</text>

            <!-- Feature Box -->
            <rect x="55" y="105" width="340" height="160" fill="#f9f9f9" stroke="#ccc" stroke-width="1" rx="4" />
            <text x="70" y="125" font-size="12" fill="#666" font-weight="bold">Feature</text>
            
            <!-- Geometry -->
            <polygon points="90,170 160,140 190,210 120,230" fill="#f4d03f" stroke="#333" stroke-width="2" />
            <text x="140" y="250" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">geometry</text>

            <!-- Attributes Table -->
            <rect x="220" y="145" width="150" height="75" fill="#fff" stroke="#ccc" stroke-width="1" />
            <rect x="220" y="145" width="150" height="20" fill="#005a70" />
            <text x="260" y="158" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">ward</text>
            <text x="330" y="158" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">pop</text>
            
            <text x="260" y="178" font-size="10" fill="#333" text-anchor="middle">W1</text>
            <text x="330" y="178" font-size="10" fill="#333" text-anchor="middle">5400</text>
            <line x1="220" y1="188" x2="370" y2="188" stroke="#eee" />
            <text x="260" y="205" font-size="10" fill="#333" text-anchor="middle">W2</text>
            <text x="330" y="205" font-size="10" fill="#333" text-anchor="middle">4100</text>
            
            <text x="295" y="250" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">attributes</text>

            <!-- Roads Layer Box -->
            <rect x="430" y="65" width="180" height="100" fill="#fff" stroke="#2980b9" stroke-width="2" rx="6" />
            <text x="445" y="90" font-size="13" fill="#2980b9" font-weight="bold">Layer: Roads</text>
            <line x1="450" y1="125" x2="590" y2="125" stroke="#2980b9" stroke-width="3" />
            <line x1="450" y1="155" x2="580" y2="110" stroke="#2980b9" stroke-width="3" />

            <!-- Basemap Box -->
            <rect x="430" y="180" width="180" height="100" fill="#e0e0e0" stroke="#999" stroke-width="2" rx="6" />
            <text x="520" y="235" font-size="13" fill="#666" font-weight="bold" text-anchor="middle">Basemap</text>

            <!-- Bottom Text -->
            <text x="325" y="330" font-size="12" fill="#f07b24" font-weight="bold" text-anchor="middle">map &gt; layer &gt; feature &gt; geometry + attributes</text>
        </svg>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>GIS</strong> – a system to capture, store, analyse and display geographic data.</li>
    <li><strong>Feature</strong> – one real-world object stored as a point, line or polygon together with its attributes.</li>
    <li><strong>Layer</strong> – a collection of features of one kind, such as roads or wards.</li>
    <li><strong>Attribute</strong> – descriptive data about a feature, stored in a field of a table.</li>
    <li><strong>Spatial database</strong> – a database that stores geometry and attributes together.</li>
    <li><strong>Basemap</strong> – a background map, such as OpenStreetMap or imagery, under your own layers.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Learn the terms in pairs: feature and layer, vector and raster, geometry and attribute.</p>
</div>