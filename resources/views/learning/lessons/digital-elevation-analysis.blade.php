{{-- resources/views/learning/lessons/5-20-elevation-analysis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Elevation analysis answers practical questions with a DEM: what is the profile, how high, and what can be seen.
    It is used in engineering, planning, and environmental studies.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create an elevation profile</li>
    <li>Reclassify heights into zones</li>
    <li>Calculate zonal statistics and viewsheds</li>
</ul>

<h2>Visual Guide: Digital Elevation Analysis Tools</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Profile</strong>
        <div style="height: 60px; margin-top: 8px; position: relative; background: #f9f9f9;">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 100%; background: transparent; border-left: 1px solid #999; border-bottom: 1px solid #999;"></div>
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 100%; background: transparent; clip-path: polygon(0 100%, 20% 60%, 50% 20%, 80% 70%, 100% 40%, 100% 100%); border-top: 2px solid #2196F3;"></div>
            <div style="position: absolute; bottom: 5px; left: 5px; font-size: 9px;">h</div>
            <div style="position: absolute; bottom: -12px; left: 40%; font-size: 9px;">distance</div>
        </div>
        <div style="color: #666; margin-top: 10px;">height along a line</div>
    </div>
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Zones</strong>
        <div style="height: 60px; margin-top: 8px; display: flex; flex-direction: column; gap: 2px; border-radius: 3px; overflow: hidden;">
            <div style="flex: 1; background: #d7ccc8; display: flex; align-items: center; justify-content: center; font-weight: bold;">high</div>
            <div style="flex: 1; background: #fff9c4; display: flex; align-items: center; justify-content: center; font-weight: bold;">mid</div>
            <div style="flex: 1; background: #c8e6c9; display: flex; align-items: center; justify-content: center; font-weight: bold;">low</div>
        </div>
        <div style="color: #666; margin-top: 5px;">group heights</div>
    </div>
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Zonal stats</strong>
        <div style="height: 60px; margin-top: 8px; position: relative; background: #e3f2fd; border: 1px solid #2196F3; clip-path: polygon(20% 0, 80% 10%, 100% 50%, 80% 90%, 20% 100%, 0 50%); display: flex; flex-direction: column; justify-content: center; align-items: center; font-size: 10px;">
            <span>max 48</span>
            <span>mean 31</span>
            <span>min 12</span>
        </div>
        <div style="color: #666; margin-top: 5px;">min, max, mean</div>
    </div>
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Viewshed</strong>
        <div style="height: 60px; margin-top: 8px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 1px;">
            <div style="background: #c8e6c9;"></div><div style="background: #c8e6c9;"></div><div style="background: #e0e0e0;"></div><div style="background: #e0e0e0;"></div>
            <div style="background: #c8e6c9;"></div><div style="background: #d9534f; border-radius: 50%;"></div><div style="background: #c8e6c9;"></div><div style="background: #e0e0e0;"></div>
            <div style="background: #c8e6c9;"></div><div style="background: #c8e6c9;"></div><div style="background: #c8e6c9;"></div><div style="background: #e0e0e0;"></div>
            <div style="background: #c8e6c9;"></div><div style="background: #c8e6c9;"></div><div style="background: #c8e6c9;"></div><div style="background: #c8e6c9;"></div>
        </div>
        <div style="color: #04AA6D; font-weight: bold; margin-top: 5px;">green = visible</div>
    </div>
</div>

<p>
    The diagram shows four ways to analyse elevation: creating a profile graph of height along a line, grouping heights into zones, calculating statistics per zone, and determining the viewshed (what can be seen) from a specific point.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is an elevation profile?</strong> Height along a line (Elevation Profile panel, View menu).</li>
    <li><strong>What does Reclassify by table do?</strong> Groups heights into low, mid and high zones.</li>
    <li><strong>What does Zonal statistics give?</strong> Min, max and mean elevation per polygon.</li>
    <li><strong>What is a viewshed?</strong> The areas visible from a viewpoint (GDAL Viewshed or Visibility Analysis plugin).</li>
    <li><strong>What limits the detail?</strong> DEM resolution: a 30 m DEM cannot show features smaller than about 30 m.</li>
    <li><strong>What should I note with results?</strong> The DEM source and resolution.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Note the DEM source and resolution next to every elevation result.</p>
</div>