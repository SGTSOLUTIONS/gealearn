{{-- resources/views/learning/lessons/16-5-calculate-polygon-areas.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The Field Calculator stores each polygon's area in a new field.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Set the area measurement units</li>
    <li>Use the Field Calculator</li>
    <li>Store area in hectares</li>
</ul>

<h2>Visual Guide: Area, perimeter and units</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">Area, perimeter and units</div>
        
        <svg viewBox="0 0 600 300" style="width: 100%;">
            <!-- Polygon -->
            <polygon points="150,80 280,40 480,60 520,180 380,240 200,200" fill="#fdf0e0" stroke="#f07b24" stroke-width="3" />
            
            <!-- Vertices -->
            <circle cx="150" cy="80" r="5" fill="#005a70" />
            <circle cx="280" cy="40" r="5" fill="#005a70" />
            <circle cx="480" cy="60" r="5" fill="#005a70" />
            <circle cx="520" cy="180" r="5" fill="#005a70" />
            <circle cx="380" cy="240" r="5" fill="#005a70" />
            <circle cx="200" cy="200" r="5" fill="#005a70" />

            <!-- Labels -->
            <text x="120" y="60" font-size="12" fill="#f07b24" font-style="italic">perimeter = outline</text>
            <text x="280" y="150" font-size="12" fill="#666" font-style="italic">area = inside</text>
            
            <text x="280" y="180" font-size="20" fill="#005a70" font-weight="bold" text-anchor="middle">A = 450 m2</text>
            
            <text x="520" y="130" font-size="12" fill="#f07b24" font-weight="bold">26.1 m</text>
            <text x="300" y="260" font-size="12" fill="#f07b24" font-weight="bold">28.4 m</text>

            <!-- Unit Conversion Bar -->
            <rect x="100" y="290" width="400" height="30" fill="#fff" stroke="#005a70" stroke-width="1" />
            <text x="200" y="310" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">m2 / 10,000 = hectares</text>
            <text x="400" y="310" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">m2 / 4,046.86 = acres</text>
        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">state the unit on every report</div>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Set <strong>Project > Properties > General > Measurements</strong>: the ellipsoid and area units (square metres).</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Open the attribute table and click the <strong>Field Calculator</strong> (Ctrl+1).</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Create a new field named <strong>area_ha</strong> of type Decimal number.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Enter the expression <strong>$area / 10000</strong> to get hectares (with area units in square metres).</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Click <strong>OK</strong> and save the edits.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Sort the column to find the largest and the smallest polygons.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Check the area units in the project settings before you divide by 10,000.</p>
</div>