{{-- resources/views/learning/lessons/13-3-property-boundary-mapping.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Boundary mapping records the exact outline of each property from survey data, deeds and field marks.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how boundaries are defined</li>
    <li>Handle shared boundaries and corner points</li>
    <li>Fix gaps and overlaps</li>
</ul>

<h2>Visual Guide: Two neighbours share one boundary</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Two neighbours share one boundary</div>
        
        <svg viewBox="0 0 400 250" style="width: 100%; font-family: sans-serif;">
            <polygon points="30,100 180,90 190,230 40,240" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <polygon points="180,90 370,100 360,240 190,230" fill="#e8f5e9" stroke="#005a70" stroke-width="2" />
            
            <line x1="180" y1="90" x2="190" y2="230" stroke="#f07b24" stroke-width="4" />
            
            <rect x="174" y="84" width="12" height="12" fill="#333" />
            <rect x="184" y="224" width="12" height="12" fill="#333" />
            <rect x="24" y="94" width="12" height="12" fill="#333" />
            <rect x="34" y="234" width="12" height="12" fill="#333" />
            <rect x="364" y="94" width="12" height="12" fill="#333" />
            <rect x="354" y="234" width="12" height="12" fill="#333" />

            <text x="100" y="170" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle">P101</text>
            <text x="275" y="170" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle">P102</text>
            
            <text x="100" y="260" font-size="12" fill="#666" text-anchor="middle">24.50 m</text>
            <line x1="40" y1="245" x2="180" y2="245" stroke="#ccc" stroke-width="1" />
            <text x="200" y="70" font-size="12" fill="#f07b24" font-weight="bold">shared boundary</text>
            <line x1="185" y1="75" x2="185" y2="90" stroke="#f07b24" stroke-width="1" />
            <text x="10" y="60" font-size="11" fill="#666">boundary stone</text>
            <line x1="80" y1="70" x2="35" y2="95" stroke="#666" stroke-width="1" />
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">corner stones define the polygon</div>
    </div>
</div>

<p>
    The diagram shows two neighbouring parcels sharing a boundary. A boundary is the line that separates one property from another. Corner points are surveyed vertices, often marked with a stone or pin. Shared boundaries mean neighbours use the same vertices, so no gaps or overlaps appear. Fix tiny gaps by snapping vertices or with topology rules in QGIS. Disputes are recorded as an attribute and settled by the legal process, not by editing the map.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a boundary?</strong> The line that separates one property from another.</li>
    <li><strong>What are corner points?</strong> Surveyed vertices, often marked with a stone or pin.</li>
    <li><strong>What sources are used?</strong> Survey measurements, deeds, village maps and field marks.</li>
    <li><strong>What are shared boundaries?</strong> Neighbours use the same vertices, so no gaps or overlaps appear.</li>
    <li><strong>How do I fix tiny gaps?</strong> Snap vertices or use topology rules in QGIS.</li>
    <li><strong>How are disputes handled?</strong> Recorded as an attribute and settled by the legal process, not by editing the map.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Neighbouring parcels must share the same vertices, or gaps and overlaps appear.</p>
</div>