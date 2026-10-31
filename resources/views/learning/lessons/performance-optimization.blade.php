{{-- resources/views/learning/lessons/14-17-performance-optimization.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Optimization makes the system respond quickly even with large data and many users.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Measure before optimizing</li>
    <li>Use spatial indexes and caching</li>
    <li>Simplify geometry and use tiles</li>
</ul>

<h2>Visual Guide: Before and after tuning</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 60%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 25px 15px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 25px; font-size: 14px;">Before and after tuning</div>
        
        <svg viewBox="0 0 650 340" style="width: 100%;">
            
            <!-- X-Axis Base Line -->
            <line x1="40" y1="270" x2="330" y2="270" stroke="#333" stroke-width="1.5" />

            <!-- ================= BEFORE BAR ================= -->
            <rect x="60" y="90" width="50" height="180" fill="#d9534f" />
            <text x="85" y="80" font-size="13" fill="#d9534f" font-weight="bold" text-anchor="middle">4.2 s</text>
            <text x="85" y="295" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">before</text>

            <!-- ================= ARROW ================= -->
            <g stroke="#f07b24" stroke-width="2" fill="none">
                <path d="M 125 145 L 185 205" />
                <polygon points="185,205 175,200 183,193" fill="#f07b24" stroke="none" />
            </g>
            <text x="145" y="145" font-size="13" fill="#f07b24" font-weight="bold" text-anchor="middle">20x</text>
            <text x="145" y="162" font-size="13" fill="#f07b24" font-weight="bold" text-anchor="middle">faster</text>

            <!-- ================= AFTER BAR ================= -->
            <rect x="210" y="250" width="50" height="20" fill="#2ecc71" />
            <text x="235" y="240" font-size="12" fill="#2ecc71" font-weight="bold" text-anchor="middle">0.2 s</text>
            <text x="235" y="295" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">after</text>

            <!-- ================= OPTIMIZATION BOXES ================= -->
            
            <!-- Box 1: Spatial index -->
            <rect x="340" y="50" width="280" height="45" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="480" y="72" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Spatial index</text>
            <text x="480" y="87" font-size="11" fill="#666" text-anchor="middle">find features fast</text>

            <!-- Box 2: Caching -->
            <rect x="340" y="110" width="280" height="45" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="480" y="132" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Caching</text>
            <text x="480" y="147" font-size="11" fill="#666" text-anchor="middle">reuse results</text>

            <!-- Box 3: Simplify -->
            <rect x="340" y="170" width="280" height="45" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="480" y="192" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Simplify</text>
            <text x="480" y="207" font-size="11" fill="#666" text-anchor="middle">fewer vertices</text>

            <!-- Box 4: Tiles -->
            <rect x="340" y="230" width="280" height="45" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="480" y="252" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Tiles</text>
            <text x="480" y="267" font-size="11" fill="#666" text-anchor="middle">small downloads</text>

        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 20px; font-weight: bold;">measure, change one thing, measure</div>
    </div>
</div>

<p>
    The diagram shows before and after tuning. Measure first – time the slow query, page or map layer. Spatial indexes are the biggest single gain for map queries. Caching stores repeated results and map tiles. Simplify geometry for small-scale views. Send less data by filtering by extent and using vector tiles for big layers. Change one thing at a time and measure again.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the first step?</strong> Measure first – time the slow query, page or map layer.</li>
    <li><strong>What is the biggest gain?</strong> Spatial indexes – the biggest single gain for map queries.</li>
    <li><strong>What does caching do?</strong> Store repeated results and map tiles.</li>
    <li><strong>Why simplify geometry?</strong> For small-scale views.</li>
    <li><strong>How do I send less data?</strong> Filter by extent and use vector tiles for big layers.</li>
    <li><strong>How should I test?</strong> Change one thing at a time and measure again.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Test with realistic data size; a map that is fast with 100 features may fail with a million.</p>
</div>