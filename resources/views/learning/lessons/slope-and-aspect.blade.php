{{-- resources/views/learning/lessons/5-18-slope-aspect.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Slope tells how steep the ground is; aspect tells which direction it faces.
    Both are calculated from the 3x3 block of cells around each cell in a DEM.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand slope units (degrees or percent)</li>
    <li>Read aspect as compass directions</li>
    <li>Use slope and aspect for suitability analysis</li>
</ul>

<h2>Visual Guide: Slope and Aspect</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Slope</strong>
        <div style="height: 60px; position: relative; margin-top: 8px;">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 2px; background: #282A35;"></div>
            <div style="position: absolute; bottom: 0; left: 0; width: 0; height: 0; border-left: 50px solid transparent; border-bottom: 30px solid #c8e6c9; border-right: 0;"></div>
            <div style="position: absolute; bottom: 0; left: 50px; width: 2px; height: 30px; background: #d9534f;"></div>
            <div style="position: absolute; top: 10px; left: 20px; font-size: 10px; color: #d9534f;">rise</div>
        </div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">slope % = rise / run x 100</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Aspect</strong>
        <div style="height: 60px; position: relative; margin-top: 8px;">
            <div style="width: 60px; height: 60px; border-radius: 50%; border: 1px solid #ccc; margin: 0 auto; position: relative; background: conic-gradient(#bbdefb 0deg 90deg, #c8e6c9 90deg 180deg, #ffe0b2 180deg 270deg, #ffcdd2 270deg 360deg);">
                <div style="position: absolute; top: -5px; left: 50%; transform: translateX(-50%); font-size: 9px; font-weight: bold;">N 0</div>
                <div style="position: absolute; bottom: -5px; left: 50%; transform: translateX(-50%); font-size: 9px; font-weight: bold;">S 180</div>
                <div style="position: absolute; top: 50%; right: -8px; transform: translateY(-50%); font-size: 9px; font-weight: bold;">E 90</div>
                <div style="position: absolute; top: 50%; left: -8px; transform: translateY(-50%); font-size: 9px; font-weight: bold;">W 270</div>
            </div>
        </div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">degrees clockwise from north</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #f9f9f9; text-align: left;">
        <strong style="color: #282A35; font-size: 12px;">Example classes</strong>
        <div style="margin-top: 5px; font-size: 11px; line-height: 1.5;">
            <div style="background: #e8f5e9; padding: 3px 5px; border-radius: 3px; margin-bottom: 2px;">0 &ndash; 5&deg; gentle</div>
            <div style="background: #fff3cd; padding: 3px 5px; border-radius: 3px; margin-bottom: 2px;">5 &ndash; 15&deg; moderate</div>
            <div style="background: #ffe0b2; padding: 3px 5px; border-radius: 3px; margin-bottom: 2px;">15 &ndash; 30&deg; steep</div>
            <div style="background: #ffcdd2; padding: 3px 5px; border-radius: 3px;">over 30&deg; very steep</div>
        </div>
    </div>
</div>

<p>
    The diagram shows how slope is calculated as a percentage (rise over run) and how aspect is read as a compass direction (0&deg; is North, 90&deg; is East, 180&deg; is South, 270&deg; is West).
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>In which units is slope given?</strong> Degrees (0&deg; flat, 90&deg; vertical) or percent (rise &divide; run &times; 100).</li>
    <li><strong>What is aspect?</strong> The direction a slope faces, 0&ndash;360&deg; clockwise from north: 90 east, 180 south, 270 west.</li>
    <li><strong>Which tools?</strong> Raster &gt; Analysis &gt; Slope and Aspect.</li>
    <li><strong>How is each value calculated?</strong> From the 3 &times; 3 block of cells around the cell.</li>
    <li><strong>What are they used for?</strong> Building suitability, erosion risk, sun exposure.</li>
    <li><strong>What about flat cells?</strong> They have no direction, so aspect shows NoData.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Flat cells have no direction, so aspect shows them as NoData.</p>
</div>