{{-- resources/views/learning/lessons/7-22-performance.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Optimisation makes maps draw and analyses run faster, without changing the results.
    It is about finding the bottleneck and applying the right fix.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify common performance bottlenecks</li>
    <li>Apply spatial indexes and simplification</li>
    <li>Use raster pyramids and scale rules</li>
</ul>

<h2>Visual Guide: Five Common Speed-Ups</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 40px; background: #f9f9f9; margin-bottom: 5px; position: relative; border: 1px solid #ccc;">
            <div style="position: absolute; top: 5px; left: 5px; right: 5px; bottom: 5px; border: 1px dashed #d9534f;"></div>
            <div style="position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; background: #fff3cd;"></div>
        </div>
        <strong style="color: #282A35;">Spatial index</strong><br><span style="color: #666;">faster queries</span>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 40px; background: #f9f9f9; margin-bottom: 5px; border: 1px solid #ccc; display: flex; align-items: center; justify-content: center;">
            <svg width="40" height="20" viewBox="0 0 40 20"><path d="M 0 15 Q 10 5, 20 10 T 40 5" fill="none" stroke="#2196F3" stroke-width="2"/><path d="M 0 15 L 20 10 L 40 5" fill="none" stroke="#d9534f" stroke-width="1" stroke-dasharray="2,2"/></svg>
        </div>
        <strong style="color: #282A35;">Simplify</strong><br><span style="color: #666;">fewer vertices</span>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 40px; background: #f9f9f9; margin-bottom: 5px; border: 1px solid #ccc; display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <div style="width: 30px; height: 8px; background: #e0e0e0; margin-bottom: 2px; font-size: 7px; text-align: center; line-height: 8px;">1:4</div>
            <div style="width: 20px; height: 8px; background: #90caf9; margin-bottom: 2px; font-size: 7px; text-align: center; line-height: 8px;">1:2</div>
            <div style="width: 10px; height: 8px; background: #0d47a1; font-size: 7px; text-align: center; line-height: 8px;">1:1</div>
        </div>
        <strong style="color: #282A35;">Pyramids</strong><br><span style="color: #666;">fast when zoomed out</span>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 40px; background: #f9f9f9; margin-bottom: 5px; border: 1px solid #ccc; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 5px;">
            <div style="width: 30px; height: 10px; background: #fff3cd; border: 1px solid #ccc; display: flex; align-items: center; justify-content: center; gap: 2px;">
                <div style="width: 4px; height: 4px; background: #ff9800; border-radius: 50%;"></div>
                <div style="width: 4px; height: 4px; background: #ff9800; border-radius: 50%;"></div>
            </div>
            <div style="width: 30px; height: 10px; background: #fff3cd; border: 1px solid #ccc; display: flex; align-items: center; justify-content: center; gap: 2px;">
                <div style="width: 4px; height: 4px; background: #ff9800; border-radius: 50%;"></div>
                <div style="width: 4px; height: 4px; background: #ff9800; border-radius: 50%;"></div>
                <div style="width: 4px; height: 4px; background: #ff9800; border-radius: 50%;"></div>
            </div>
        </div>
        <strong style="color: #282A35;">Scale rules</strong><br><span style="color: #666;">detail only when zoomed in</span>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 40px; background: #f9f9f9; margin-bottom: 5px; border: 1px solid #ccc; display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px;">
            <div style="background: #e8f5e9;"></div><div style="background: #c8e6c9;"></div><div style="background: #e8f5e9;"></div>
            <div style="background: #c8e6c9;"></div><div style="background: #a5d6a7;"></div><div style="background: #c8e6c9;"></div>
            <div style="background: #e8f5e9;"></div><div style="background: #c8e6c9;"></div><div style="background: #e8f5e9;"></div>
        </div>
        <strong style="color: #282A35;">Tile cache</strong><br><span style="color: #666;">pre-drawn tiles</span>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px; font-weight: bold; color: #d9534f;">
    Measure first: find the slow layer before you optimise
</div>

<p>
    The diagram shows five common techniques for speeding up GIS performance: spatial indexes, simplification, raster pyramids, scale-dependent rules, and tile caching.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the first step?</strong> Measure: find which layer or operation is slow before changing anything.</li>
    <li><strong>What does a spatial index do?</strong> It speeds up queries and drawing. GeoPackage and PostGIS have one; QGIS can create it for other formats.</li>
    <li><strong>What does simplifying do?</strong> It reduces vertices, which suits small-scale maps (Simplify tool).</li>
    <li><strong>What are raster pyramids (overviews)?</strong> Lower-resolution copies for fast zoomed-out display; COG files include them.</li>
    <li><strong>What are scale-dependent rules?</strong> Detail is drawn only when zoomed in.</li>
    <li><strong>Which data choices help?</strong> Use GeoPackage or PostGIS instead of huge shapefiles, keep only needed fields and cache tiles.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Optimise the slowest thing first; one change often solves most of the delay.</p>
</div>