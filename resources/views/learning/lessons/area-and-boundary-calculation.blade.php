{{-- resources/views/learning/lessons/13-10-area-and-boundary-calculation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Area and length come from the geometry, so the CRS must be projected, or you must use geography.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Calculate area and perimeter</li>
    <li>Convert units correctly</li>
    <li>Compare calculated and recorded areas</li>
</ul>

<h2>Visual Guide: Area, perimeter and units</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Area, perimeter and units</div>
        
        <svg viewBox="0 0 400 230" style="width: 100%; font-family: sans-serif;">
            <!-- Polygon -->
            <polygon points="50,80 150,40 300,60 350,140 250,190 80,170" fill="#fdf0e0" stroke="#f07b24" stroke-width="3" />
            
            <!-- Vertices -->
            <circle cx="50" cy="80" r="5" fill="#005a70" />
            <circle cx="150" cy="40" r="5" fill="#005a70" />
            <circle cx="300" cy="60" r="5" fill="#005a70" />
            <circle cx="350" cy="140" r="5" fill="#005a70" />
            <circle cx="250" cy="190" r="5" fill="#005a70" />
            <circle cx="80" cy="170" r="5" fill="#005a70" />
            
            <!-- Labels -->
            <text x="20" y="70" font-size="11" fill="#f07b24" font-style="italic">perimeter = outline</text>
            <text x="170" y="120" font-size="11" fill="#666" font-style="italic">area = inside</text>
            
            <!-- Area Text -->
            <text x="180" y="145" font-size="20" fill="#005a70" font-weight="bold">A = 450 m2</text>
            
            <!-- Measurements -->
            <text x="340" y="90" font-size="12" fill="#f07b24" font-weight="bold">26.1 m</text>
            <text x="150" y="220" font-size="12" fill="#f07b24" font-weight="bold">28.4 m</text>
        </svg>
        
        <!-- Unit Conversion Bar -->
        <div style="width: 100%; border-top: 1px solid #005a70; border-bottom: 1px solid #005a70; padding: 8px 0; margin-top: 10px; display: flex; justify-content: space-around; font-size: 11px; font-weight: bold; color: #005a70;">
            <span>m2 / 10,000 = hectares</span>
            <span>m2 / 4,046.86 = acres</span>
        </div>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">state the unit on every report</div>
    </div>
</div>

<p>
    The diagram shows area, perimeter and units. Area is the space inside a polygon; perimeter is the length of its outline. Use a projected CRS so results come out in square metres and metres. 1 hectare = 10,000 m²; 1 acre = 4,046.86 m². In QGIS use $area and $length in the Field Calculator to store values for every feature. GIS area can differ from the recorded area: set a tolerance and review the exceptions.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is area?</strong> The space inside a polygon; perimeter is the length of its outline.</li>
    <li><strong>Which CRS should I use?</strong> Use a projected CRS so results come out in square metres and metres.</li>
    <li><strong>How many m² in a hectare?</strong> 1 hectare = 10,000 m².</li>
    <li><strong>How many m² in an acre?</strong> 1 acre = 4,046.86 m².</li>
    <li><strong>How do I calculate in QGIS?</strong> Use $area and $length in the Field Calculator.</li>
    <li><strong>What about differences?</strong> GIS area can differ from the recorded area: set a tolerance and review the exceptions.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Compare calculated and recorded areas and review every parcel that differs by more than your tolerance.</p>
</div>