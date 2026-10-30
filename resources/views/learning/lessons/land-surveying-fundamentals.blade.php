{{-- resources/views/learning/lessons/13-1-land-surveying-fundamentals.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Land surveying measures distances, angles and heights to fix the position of points and boundaries on the ground.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the basics of land surveying</li>
    <li>Identify control points and traverses</li>
    <li>Understand closure errors and datums</li>
</ul>

<h2>Visual Guide: Closed traverse with a benchmark</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Closed traverse with a benchmark</div>
        
        <svg viewBox="0 0 400 280" style="width: 100%; font-family: sans-serif;">
            <polygon points="200,30 350,100 370,210 200,240 80,210" fill="#fdf0e0" stroke="#005a70" stroke-width="2.5" />
            
            <circle cx="80" cy="210" r="5" fill="#005a70" />
            <line x1="80" y1="210" x2="95" y2="185" stroke="#d9534f" stroke-width="3" />
            <circle cx="95" cy="185" r="4" fill="#d9534f" />
            <polygon points="88,190 98,182 92,178" fill="#d9534f" />
            
            <text x="10" y="185" font-size="11" fill="#d9534f" font-weight="bold">closure</text>
            <text x="10" y="197" font-size="11" fill="#d9534f" font-weight="bold">error</text>
            <line x1="65" y1="190" x2="85" y2="190" stroke="#d9534f" stroke-width="1" />
            
            <circle cx="200" cy="240" r="5" fill="#005a70" />
            <path d="M 170 240 A 30 30 0 0 1 210 210" fill="none" stroke="#f07b24" stroke-width="2" />
            <text x="160" y="230" font-size="12" fill="#f07b24" font-weight="bold">149&deg;</text>
            
            <circle cx="370" cy="210" r="5" fill="#005a70" />
            <circle cx="350" cy="100" r="5" fill="#005a70" />
            <circle cx="200" cy="30" r="5" fill="#005a70" />
            
            <text x="65" y="215" font-size="12" fill="#005a70" font-weight="bold">A</text>
            <text x="205" y="255" font-size="12" fill="#005a70" font-weight="bold">B</text>
            <text x="380" y="215" font-size="12" fill="#005a70" font-weight="bold">C</text>
            <text x="355" y="90" font-size="12" fill="#005a70" font-weight="bold">D</text>
            <text x="195" y="20" font-size="12" fill="#005a70" font-weight="bold">E</text>

            <text x="110" y="260" font-size="12" fill="#005a70">52.40 m</text>
            
            <polygon points="40,215 45,205 50,215" fill="#2ecc71" />
            <text x="35" y="230" font-size="11" fill="#2ecc71" font-weight="bold">BM</text>
            
            <text x="190" y="125" font-size="11" fill="#666" text-anchor="middle">angles + distances</text>
            <text x="190" y="140" font-size="11" fill="#666" text-anchor="middle">give each corner</text>
        </svg>
    </div>
</div>

<p>
    The diagram shows a closed traverse. Surveying measures distances, angles, and heights to fix positions on the ground. Control points (benchmarks) are known positions that every survey ties into. A traverse is a chain of connected lines with measured angles and lengths. The closure error is the gap where a closed traverse fails to meet its start; a small gap means good work.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is surveying?</strong> Measuring distances, angles, and heights to fix positions on the ground.</li>
    <li><strong>What are control points?</strong> Known positions (benchmarks) that every survey ties into.</li>
    <li><strong>What is a traverse?</strong> A chain of connected lines with measured angles and lengths.</li>
    <li><strong>What is closure error?</strong> The gap where a closed traverse fails to meet its start; a small gap means good work.</li>
    <li><strong>What is a datum?</strong> The reference surface for positions and heights, e.g. WGS 84 or a local datum.</li>
    <li><strong>Which tools are used?</strong> Total stations, GNSS receivers, levels, tapes, and drones.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Always record the datum and the units with every survey.</p>
</div>