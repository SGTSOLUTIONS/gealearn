{{-- resources/views/learning/lessons/14-3-gis-system-architecture.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    System architecture shows the main parts of the GIS and how they connect.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the three-layer architecture</li>
    <li>Know what belongs in each layer</li>
    <li>Apply the rule of layer isolation</li>
</ul>

<h2>Visual Guide: Three-layer GIS architecture</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 25px 15px; border-radius: 8px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 20px; font-size: 16px;">Three-layer GIS architecture</div>
        
        <svg viewBox="0 0 700 380" style="width: 100%; font-family: sans-serif;">
            
            <!-- ================= PRESENTATION LAYER ================= -->
            <rect x="20" y="20" width="660" height="90" fill="#edf2f9" stroke="#aebbd1" stroke-width="1.5" rx="8" />
            <text x="40" y="55" font-size="13" fill="#555" font-weight="bold">PRESENTATION</text>
            
            <rect x="220" y="35" width="110" height="55" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="275" y="60" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Web map</text>
            <text x="275" y="78" font-size="11" fill="#666" text-anchor="middle">browser</text>

            <rect x="355" y="35" width="110" height="55" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="410" y="60" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Mobile</text>
            <text x="410" y="78" font-size="11" fill="#666" text-anchor="middle">field app</text>

            <rect x="490" y="35" width="110" height="55" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="545" y="60" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Admin</text>
            <text x="545" y="78" font-size="11" fill="#666" text-anchor="middle">dashboard</text>

            <!-- Arrows Down (Left side of column) -->
            <g stroke="#f07b24" stroke-width="2">
                <line x1="265" y1="90" x2="265" y2="125" />
                <polygon points="260,115 270,115 265,125" fill="#f07b24" stroke="none" />
                
                <line x1="400" y1="90" x2="400" y2="125" />
                <polygon points="395,115 405,115 400,125" fill="#f07b24" stroke="none" />
                
                <line x1="535" y1="90" x2="535" y2="125" />
                <polygon points="530,115 540,115 535,125" fill="#f07b24" stroke="none" />
            </g>

            <!-- Arrows Up (Right side of column) -->
            <g stroke="#f07b24" stroke-width="2">
                <line x1="285" y1="95" x2="285" y2="130" />
                <polygon points="280,100 290,100 285,90" fill="#f07b24" stroke="none" />
                
                <line x1="420" y1="95" x2="420" y2="130" />
                <polygon points="415,100 425,100 420,90" fill="#f07b24" stroke="none" />
                
                <line x1="555" y1="95" x2="555" y2="130" />
                <polygon points="550,100 560,100 555,90" fill="#f07b24" stroke="none" />
            </g>

            <!-- ================= APPLICATION LAYER ================= -->
            <rect x="20" y="125" width="660" height="90" fill="#e8f5ee" stroke="#a3ceb8" stroke-width="1.5" rx="8" />
            <text x="40" y="160" font-size="13" fill="#555" font-weight="bold">APPLICATION</text>
            
            <rect x="220" y="140" width="110" height="55" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="275" y="165" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">API</text>
            <text x="275" y="183" font-size="11" fill="#666" text-anchor="middle">routes</text>

            <rect x="355" y="140" width="110" height="55" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="410" y="165" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Login</text>
            <text x="410" y="183" font-size="11" fill="#666" text-anchor="middle">roles</text>

            <rect x="490" y="140" width="110" height="55" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="545" y="165" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Analysis</text>
            <text x="545" y="183" font-size="11" fill="#666" text-anchor="middle">tools</text>

            <!-- Arrows Down (Left side of column) -->
            <g stroke="#f07b24" stroke-width="2">
                <line x1="265" y1="195" x2="265" y2="230" />
                <polygon points="260,220 270,220 265,230" fill="#f07b24" stroke="none" />
                
                <line x1="400" y1="195" x2="400" y2="230" />
                <polygon points="395,220 405,220 400,230" fill="#f07b24" stroke="none" />
                
                <line x1="535" y1="195" x2="535" y2="230" />
                <polygon points="530,220 540,220 535,230" fill="#f07b24" stroke="none" />
            </g>

            <!-- Arrows Up (Right side of column) -->
            <g stroke="#f07b24" stroke-width="2">
                <line x1="285" y1="200" x2="285" y2="235" />
                <polygon points="280,205 290,205 285,195" fill="#f07b24" stroke="none" />
                
                <line x1="420" y1="200" x2="420" y2="235" />
                <polygon points="415,205 425,205 420,195" fill="#f07b24" stroke="none" />
                
                <line x1="555" y1="200" x2="555" y2="235" />
                <polygon points="550,205 560,205 555,195" fill="#f07b24" stroke="none" />
            </g>

            <!-- ================= DATA LAYER ================= -->
            <rect x="20" y="230" width="660" height="90" fill="#fdf5e6" stroke="#d8c3a5" stroke-width="1.5" rx="8" />
            <text x="40" y="265" font-size="13" fill="#555" font-weight="bold">DATA</text>
            
            <rect x="220" y="245" width="110" height="55" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="275" y="270" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">PostGIS</text>
            <text x="275" y="288" font-size="11" fill="#666" text-anchor="middle">database</text>

            <rect x="355" y="245" width="110" height="55" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="410" y="270" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Files</text>
            <text x="410" y="288" font-size="11" fill="#666" text-anchor="middle">rasters, docs</text>

            <rect x="490" y="245" width="110" height="55" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="545" y="270" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Map server</text>
            <text x="545" y="288" font-size="11" fill="#666" text-anchor="middle">WMS / WFS</text>

        </svg>
        <div style="text-align: center; font-size: 13px; color: #d9534f; margin-top: 20px;">the browser never talks to the database</div>
    </div>
</div>

<p>
    The diagram shows the three-layer GIS architecture. The presentation layer contains the web map, mobile app and forms used by people. The application layer contains the API, login, business rules and analysis modules. The data layer contains the spatial database, files and map services. Each layer talks only to the next one; the browser never reaches the database directly. Prefer open standards so parts can be replaced later.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the presentation layer?</strong> Web map, mobile app and forms used by people.</li>
    <li><strong>What is the application layer?</strong> The API, login, business rules and analysis modules.</li>
    <li><strong>What is the data layer?</strong> The spatial database, files and map services.</li>
    <li><strong>How do layers communicate?</strong> Each layer talks only to the next one; the browser never reaches the database directly.</li>
    <li><strong>Why prefer open standards?</strong> (OGC services, GeoJSON) so parts can be replaced later.</li>
    <li><strong>When should I draw the architecture?</strong> Early, and update it when the design changes.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep the first architecture simple; add parts only when a requirement needs them.</p>
</div>