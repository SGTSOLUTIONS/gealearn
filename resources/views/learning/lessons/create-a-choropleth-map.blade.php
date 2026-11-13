{{-- resources/views/learning/lessons/16-8-create-choropleth-map.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A choropleth colours areas by a value, such as population per ward.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Style polygons with graduated colours</li>
    <li>Choose the right data field</li>
    <li>Add a legend to a layout</li>
</ul>

<h2>Visual Guide: Population per ward in four classes</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">Population per ward in four classes</div>
        
        <svg viewBox="0 0 600 250" style="width: 100%;">
            <!-- Wards -->
            <polygon points="20,20 160,20 160,120 20,120" fill="#e3f2fd" stroke="#005a70" stroke-width="2" />
            <text x="90" y="60" font-size="18" fill="#005a70" font-weight="bold" text-anchor="middle">W3</text>
            <text x="90" y="85" font-size="14" fill="#005a70" text-anchor="middle">3,200</text>

            <polygon points="160,20 300,20 300,120 160,120" fill="#90caf9" stroke="#005a70" stroke-width="2" />
            <text x="230" y="60" font-size="18" fill="#005a70" font-weight="bold" text-anchor="middle">W4</text>
            <text x="230" y="85" font-size="14" fill="#005a70" text-anchor="middle">6,900</text>

            <polygon points="20,120 160,120 160,220 20,220" fill="#42a5f5" stroke="#005a70" stroke-width="2" />
            <text x="90" y="160" font-size="18" fill="#005a70" font-weight="bold" text-anchor="middle">W1</text>
            <text x="90" y="185" font-size="14" fill="#005a70" text-anchor="middle">5,400</text>

            <polygon points="160,120 300,120 300,220 160,220" fill="#1565c0" stroke="#005a70" stroke-width="2" />
            <text x="230" y="160" font-size="18" fill="#fff" font-weight="bold" text-anchor="middle">W2</text>
            <text x="230" y="185" font-size="14" fill="#fff" text-anchor="middle">8,100</text>

            <!-- Legend -->
            <rect x="330" y="160" width="250" height="30" fill="#fff" stroke="#005a70" stroke-width="1" />
            <rect x="330" y="160" width="60" height="30" fill="#e3f2fd" />
            <text x="360" y="180" font-size="12" fill="#333" text-anchor="middle"> &lt; 4k</text>
            <rect x="390" y="160" width="60" height="30" fill="#90caf9" />
            <text x="420" y="180" font-size="12" fill="#333" text-anchor="middle">4-6k</text>
            <rect x="450" y="160" width="65" height="30" fill="#42a5f5" />
            <text x="482" y="180" font-size="12" fill="#333" text-anchor="middle">6-8k</text>
            <rect x="515" y="160" width="65" height="30" fill="#1565c0" />
            <text x="547" y="180" font-size="12" fill="#fff" text-anchor="middle">8k +</text>
            
            <text x="330" y="150" font-size="11" fill="#666">people</text>
            <text x="455" y="210" font-size="11" fill="#666" text-anchor="middle">light to dark = low to high</text>
        </svg>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Make sure the polygon layer has a numeric field (population or density).</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Open <strong>Layer Styling</strong> (F7) and choose <strong>Graduated</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Select the value field and a colour ramp from light to dark.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Choose a mode (<strong>Natural Breaks</strong> or Quantile) and <strong>4 to 6 classes</strong>, then click Classify.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Prefer a density (people per hectare) over a raw count when ward sizes differ.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Add the map to a <strong>Print Layout</strong> with a title and legend and export it.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Use one colour hue for one variable and keep the number of classes small.</p>
</div>