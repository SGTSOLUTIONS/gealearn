{{-- resources/views/learning/lessons/16-6-perform-buffer-analysis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A buffer draws a zone of a set distance around features, used to ask what lies nearby.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a buffer around features</li>
    <li>Use a projected CRS for metres</li>
    <li>Select features inside the buffer</li>
</ul>

<h2>Visual Guide: A 50 m buffer around a road</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">A 50 m buffer around a road</div>
        
        <svg viewBox="0 0 600 300" style="width: 100%;">
            <!-- Background -->
            <rect x="20" y="20" width="560" height="260" fill="#fdf8f4" stroke="#cce5e5" stroke-width="1" />
            
            <!-- Buffer Zone -->
            <path d="M 40 240 L 520 40" stroke="#f5b041" stroke-width="60" opacity="0.3" />
            
            <!-- Road -->
            <path d="M 40 240 L 520 40" stroke="#333" stroke-width="3" stroke-dasharray="10,5" />
            <path d="M 40 240 L 520 40" stroke="#666" stroke-width="1" />

            <!-- Buildings (Squares) -->
            <rect x="80" y="100" width="20" height="20" fill="#fff" stroke="#005a70" stroke-width="1.5" />
            <rect x="150" y="80" width="20" height="20" fill="#fff" stroke="#005a70" stroke-width="1.5" />
            
            <rect x="180" y="140" width="20" height="20" fill="#fdf0e0" stroke="#f07b24" stroke-width="2" />
            <rect x="220" y="160" width="20" height="20" fill="#fdf0e0" stroke="#f07b24" stroke-width="2" />
            <rect x="260" y="120" width="20" height="20" fill="#fdf0e0" stroke="#f07b24" stroke-width="2" />

            <rect x="300" y="100" width="20" height="20" fill="#fff" stroke="#005a70" stroke-width="1.5" />
            <rect x="350" y="80" width="20" height="20" fill="#fdf0e0" stroke="#f07b24" stroke-width="2" />
            <rect x="400" y="120" width="20" height="20" fill="#fdf0e0" stroke="#f07b24" stroke-width="2" />

            <rect x="250" y="220" width="20" height="20" fill="#fff" stroke="#005a70" stroke-width="1.5" />
            <rect x="450" y="200" width="20" height="20" fill="#fff" stroke="#005a70" stroke-width="1.5" />
            
            <!-- Distance Label -->
            <circle cx="300" cy="140" r="4" fill="#f07b24" />
            <line x1="300" y1="140" x2="360" y2="110" stroke="#f07b24" stroke-width="2" />
            <text x="330" y="130" font-size="12" fill="#f07b24" font-weight="bold">50 m</text>

            <!-- Title -->
            <text x="40" y="50" font-size="13" fill="#005a70" font-style="italic">highlighted = inside the buffer</text>
        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">what lies inside the zone?</div>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Use a layer in a projected CRS so the distance is in metres.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Open <strong>Vector > Geoprocessing Tools > Buffer</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Choose the input layer (for example roads) and a distance of <strong>50 metres</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Tick <strong>Dissolve result</strong> to get one clean zone, then run the tool.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Use <strong>Select by Location</strong> (buildings that intersect the buffer) to find what lies inside.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Count or export the selection (<strong>View > Statistical Summary</strong>, or Export > Save Selected Features As).</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> A buffer in a geographic CRS uses degrees, not metres: reproject first.</p>
</div>