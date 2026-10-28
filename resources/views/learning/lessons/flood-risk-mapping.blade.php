{{-- resources/views/learning/lessons/7-9-flood-risk.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Flood risk maps combine how likely a flood is with what it would affect and how badly.
    Risk is a function of hazard, exposure, and vulnerability.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the flood risk equation</li>
    <li>Identify hazard, exposure, and vulnerability layers</li>
    <li>Combine factors into a risk map</li>
</ul>

<h2>Visual Guide: Flood Risk Components</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 20%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Hazard</strong>
        <div style="height: 60px; margin-top: 8px; background: #bbdefb; border-radius: 4px; display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 1px;">
            <div style="background: #2196f3;"></div><div style="background: #bbdefb;"></div>
            <div style="background: #bbdefb;"></div><div style="background: #2196f3;"></div>
        </div>
        <div style="font-size: 10px; color: #666; margin-top: 5px;">score 1 (low) to 3 (high)</div>
    </div>
    <div style="width: 5%; font-size: 16px; color: #d9534f; font-weight: bold;">&times;</div>
    <div style="width: 20%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Exposure</strong>
        <div style="height: 60px; margin-top: 8px; background: #ffe0b2; border-radius: 4px; display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 1px;">
            <div style="background: #ff9800;"></div><div style="background: #ffe0b2;"></div>
            <div style="background: #ffe0b2;"></div><div style="background: #ff9800;"></div>
        </div>
        <div style="font-size: 10px; color: #666; margin-top: 5px;">score 1 (low) to 3 (high)</div>
    </div>
    <div style="width: 5%; font-size: 16px; color: #d9534f; font-weight: bold;">&times;</div>
    <div style="width: 20%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Vulnerability</strong>
        <div style="height: 60px; margin-top: 8px; background: #e1bee7; border-radius: 4px; display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 1px;">
            <div style="background: #9c27b0;"></div><div style="background: #e1bee7;"></div>
            <div style="background: #e1bee7;"></div><div style="background: #9c27b0;"></div>
        </div>
        <div style="font-size: 10px; color: #666; margin-top: 5px;">score 1 (low) to 3 (high)</div>
    </div>
    <div style="width: 5%; font-size: 20px; color: #FF9800; font-weight: bold;">=</div>
    <div style="width: 20%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Risk</strong>
        <div style="height: 60px; margin-top: 8px; border-radius: 4px; display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 1px;">
            <div style="background: #d9534f;"></div><div style="background: #ffeb3b;"></div>
            <div style="background: #c8e6c9;"></div><div style="background: #d9534f;"></div>
        </div>
        <div style="font-size: 10px; color: #666; margin-top: 5px;">Low, medium, high</div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px; font-weight: bold; color: #d9534f;">
    Risk = hazard &times; exposure &times; vulnerability
</div>

<p>
    The diagram shows how flood risk is calculated by multiplying hazard (how likely and deep), exposure (what is in its way), and vulnerability (how easily it is harmed).
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is flood risk?</strong> Hazard &times; exposure &times; vulnerability: how likely and deep the flood, what is in its way, and how easily it is harmed.</li>
    <li><strong>What is the hazard layer?</strong> Flood extent or depth from river, rainfall or DEM-based modelling.</li>
    <li><strong>What is exposure?</strong> The buildings, roads, people and land use inside the hazard zone (overlay or intersect).</li>
    <li><strong>What is vulnerability?</strong> How easily people or assets suffer damage, e.g. building type, income, age.</li>
    <li><strong>How do I combine them?</strong> Score each factor (1&ndash;3), multiply or weight, then classify into low, medium and high.</li>
    <li><strong>Is there a simple DEM method?</strong> Flag DEM cells below a chosen water level with the Raster Calculator. It is only an approximation.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Hazard alone is not risk: an empty floodplain is hazardous but low risk.</p>
</div>