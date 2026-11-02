{{-- resources/views/learning/lessons/14-11-spatial-analysis-modules.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Analysis modules package common GIS operations so users can run them without writing code.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand common spatial analysis tools</li>
    <li>Apply buffers, intersections, spatial joins, and nearest searches</li>
    <li>Run slow analyses as background jobs</li>
</ul>

<h2>Visual Guide: Buffer analysis around a hospital</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Buffer analysis around a hospital</div>
        
        <svg viewBox="0 0 550 250" style="width: 100%; font-family: sans-serif;">
            <!-- Grid of Parcels -->
            <rect x="20" y="20" width="300" height="200" fill="#f9f9f9" stroke="#005a70" stroke-width="2" />
            
            <!-- Grid Cells -->
            <rect x="30" y="30" width="50" height="50" fill="#fff" stroke="#ccc" />
            <rect x="90" y="30" width="50" height="50" fill="#fff" stroke="#ccc" />
            <rect x="150" y="30" width="50" height="50" fill="#fff" stroke="#ccc" />
            <rect x="210" y="30" width="50" height="50" fill="#fff" stroke="#ccc" />
            <rect x="270" y="30" width="50" height="50" fill="#fff" stroke="#ccc" />

            <rect x="30" y="90" width="50" height="50" fill="#fdf0e0" stroke="#ccc" />
            <rect x="90" y="90" width="50" height="50" fill="#f4d03f" stroke="#ccc" />
            <rect x="150" y="90" width="50" height="50" fill="#f4d03f" stroke="#ccc" />
            <rect x="210" y="90" width="50" height="50" fill="#f4d03f" stroke="#ccc" />
            <rect x="270" y="90" width="50" height="50" fill="#fff" stroke="#ccc" />

            <rect x="30" y="150" width="50" height="50" fill="#fdf0e0" stroke="#ccc" />
            <rect x="90" y="150" width="50" height="50" fill="#fdf0e0" stroke="#ccc" />
            <rect x="150" y="150" width="50" height="50" fill="#f4d03f" stroke="#ccc" />
            <rect x="210" y="150" width="50" height="50" fill="#f4d03f" stroke="#ccc" />
            <rect x="270" y="150" width="50" height="50" fill="#fff" stroke="#ccc" />

            <!-- Buffer Circle -->
            <circle cx="170" cy="120" r="80" fill="none" stroke="#f07b24" stroke-width="3" stroke-dasharray="8,4" />

            <!-- Hospital -->
            <rect x="162" y="112" width="16" height="16" fill="#d9534f" />
            <text x="170" y="125" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">+</text>

            <!-- Radius Line -->
            <line x1="170" y1="120" x2="250" y2="120" stroke="#f07b24" stroke-width="2" />
            <text x="210" y="115" font-size="10" fill="#f07b24" font-weight="bold" text-anchor="middle">500 m</text>

            <!-- Buttons -->
            <rect x="360" y="30" width="150" height="30" fill="#f07b24" rx="6" />
            <text x="435" y="50" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">Buffer</text>

            <rect x="360" y="75" width="150" height="30" fill="#005a70" rx="6" />
            <text x="435" y="95" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">Intersect</text>

            <rect x="360" y="120" width="150" height="30" fill="#005a70" rx="6" />
            <text x="435" y="140" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">Spatial join</text>

            <rect x="360" y="165" width="150" height="30" fill="#005a70" rx="6" />
            <text x="435" y="185" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">Nearest</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">tools run without code</div>
    </div>
</div>

<p>
    The diagram shows buffer analysis around a hospital. A buffer finds what lies within a distance of a feature. Intersect / overlay combines layers, e.g. parcels with flood zones. Spatial join counts or sums features inside each ward. Nearest finds the closest school, hospital or pipe. Inputs and outputs should have clear parameters, units and a result layer. Run slow analyses as background jobs and show progress.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does a buffer do?</strong> Finds what lies within a distance of a feature.</li>
    <li><strong>What does intersect/overlay do?</strong> Combines layers, e.g. parcels with flood zones.</li>
    <li><strong>What does a spatial join do?</strong> Counts or sums features inside each ward.</li>
    <li><strong>What does nearest find?</strong> The closest school, hospital or pipe.</li>
    <li><strong>What should inputs and outputs have?</strong> Clear parameters, units and a result layer.</li>
    <li><strong>How do I handle slow analyses?</strong> Run them as background jobs and show progress.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Test each analysis tool on a small area where you know the right answer.</p>
</div>