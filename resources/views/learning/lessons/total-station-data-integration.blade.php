{{-- resources/views/learning/lessons/13-8-total-station-data-integration.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A total station measures angles and distances very precisely. Its data is converted to coordinates and brought into GIS.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand total station measurements</li>
    <li>Calculate coordinates from polar measurements</li>
    <li>Export and import total station data</li>
</ul>

<h2>Visual Guide: Polar measurement to x, y</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Polar measurement to x, y</div>
        
        <svg viewBox="0 0 400 250" style="width: 100%; font-family: sans-serif;">
            <!-- North Arrow -->
            <text x="70" y="30" font-size="14" fill="#005a70" font-weight="bold">N</text>
            <line x1="80" y1="40" x2="80" y2="200" stroke="#999" stroke-width="1" stroke-dasharray="4,4" />
            <polygon points="80,40 76,50 84,50" fill="#999" />
            
            <!-- Station S -->
            <rect x="70" y="200" width="20" height="15" fill="#005a70" />
            <polygon points="70,215 90,215 85,230 75,230" fill="#333" />
            <polygon points="70,215 60,230 65,230" fill="#333" />
            <polygon points="90,215 100,230 95,230" fill="#333" />
            <text x="80" y="245" font-size="11" fill="#005a70" font-weight="bold" text-anchor="middle">station S</text>
            
            <!-- Prism -->
            <polygon points="350,80 360,80 355,90" fill="#d9534f" />
            <circle cx="355" cy="75" r="5" fill="#d9534f" />
            <text x="370" y="85" font-size="12" fill="#d9534f" font-weight="bold">prism</text>
            <line x1="355" y1="80" x2="355" y2="110" stroke="#333" stroke-width="2" />
            <circle cx="355" cy="110" r="3" fill="#333" />
            
            <!-- Measurement Line -->
            <line x1="80" y1="200" x2="350" y2="80" stroke="#f07b24" stroke-width="3" />
            <text x="220" y="150" font-size="14" fill="#f07b24" font-weight="bold">d</text>
            
            <!-- Azimuth Angle -->
            <path d="M 80 170 A 30 30 0 0 1 105 195" fill="none" stroke="#f07b24" stroke-width="2" />
            <text x="110" y="185" font-size="12" fill="#f07b24" font-weight="bold">az</text>
            
            <!-- Construction Lines -->
            <line x1="80" y1="80" x2="350" y2="80" stroke="#999" stroke-width="1" stroke-dasharray="4,4" />
            <line x1="80" y1="200" x2="80" y2="80" stroke="#999" stroke-width="1" stroke-dasharray="4,4" />
            
            <!-- Formulas -->
            <text x="210" y="70" font-size="12" fill="#005a70">dx = d sin(az)</text>
            <text x="30" y="150" font-size="12" fill="#005a70">dy =</text>
            <text x="30" y="165" font-size="12" fill="#005a70">d cos(az)</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">angle + distance = coordinates</div>
    </div>
</div>

<p>
    The diagram shows polar measurement to x, y. A total station measures a horizontal angle, a vertical angle and a slope distance. Coordinates are computed from a known station and a backlight point. Instrument and target heights must be recorded to get correct elevations. Export CSV or DXF and add the points to QGIS. Record the station and backlight points so the data can be checked later.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does a total station measure?</strong> A horizontal angle, a vertical angle and a slope distance.</li>
    <li><strong>How are coordinates computed?</strong> From a known station and a backlight point.</li>
    <li><strong>What must be recorded?</strong> Instrument and target heights must be recorded to get correct elevations.</li>
    <li><strong>How is data exported?</strong> Export CSV or DXF and add the points to QGIS.</li>
    <li><strong>Where is a total station best?</strong> Under trees, near buildings and for very precise local work.</li>
    <li><strong>What should be recorded?</strong> Record the station and backlight points so the data can be checked later.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Record the station and backlight points: you need them to check the data.</p>
</div>