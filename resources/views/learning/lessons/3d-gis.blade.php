{{-- resources/views/learning/lessons/7-12-3d-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    3D GIS adds height (z) to the position (x, y) so places can be seen and analysed as they really are.
    It is essential for urban planning, visibility analysis, and underground infrastructure.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the difference between 2D, 2.5D, and 3D</li>
    <li>Identify data that feeds a 3D scene</li>
    <li>View 3D maps in QGIS</li>
</ul>

<h2>Visual Guide: 2D vs. 3D</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">2D map (x, y)</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 10px; width: 40px; height: 30px; background: #b0bec5; border: 1px solid #78909c;"></div>
            <div style="position: absolute; top: 10px; right: 10px; width: 20px; height: 30px; background: #b0bec5; border: 1px solid #78909c;"></div>
            <div style="position: absolute; bottom: 10px; left: 10px; width: 50px; height: 20px; background: #b0bec5; border: 1px solid #78909c;"></div>
            <div style="position: absolute; bottom: 10px; right: 10px; width: 30px; height: 20px; background: #b0bec5; border: 1px solid #78909c;"></div>
        </div>
    </div>
    <div style="width: 10%; font-size: 14px; color: #FF9800; font-weight: bold;">add z<br>&rarr;</div>
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">3D scene (x, y, z)</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px; background: linear-gradient(180deg, #e3f2fd 0%, #fff 100%);">
            <div style="position: absolute; bottom: 10px; left: 10px; width: 30px; height: 40px; background: #90a4ae; border: 1px solid #546e7a; transform: skewY(-10deg);"></div>
            <div style="position: absolute; bottom: 10px; left: 50px; width: 20px; height: 50px; background: #78909c; border: 1px solid #455a64; transform: skewY(-10deg);"></div>
            <div style="position: absolute; bottom: 10px; left: 80px; width: 40px; height: 30px; background: #b0bec5; border: 1px solid #78909c; transform: skewY(-10deg);"></div>
            <div style="position: absolute; bottom: 10px; left: 130px; width: 25px; height: 45px; background: #78909c; border: 1px solid #455a64; transform: skewY(-10deg);"></div>
            <div style="position: absolute; bottom: 10px; left: 5px; width: 160px; height: 15px; background: #a5d6a7; border: 1px solid #4caf50; transform: skewY(5deg);"></div>
        </div>
    </div>
</div>

<div style="display: flex; justify-content: center; gap: 20px; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 15px; border-radius: 4px; background: #e3f2fd;">
        <strong>2.5D:</strong> one height per x, y (terrain surface)
    </div>
    <div style="border: 1px solid #ccc; padding: 5px 15px; border-radius: 4px; background: #e8f5e9;">
        <strong>True 3D:</strong> volumes, floors, tunnels (several heights per x, y)
    </div>
</div>

<p>
    The diagram shows the difference between a 2D map, a 2.5D terrain surface, and true 3D data that includes multiple heights for a single location.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is 3D GIS?</strong> GIS that stores and shows x, y and z (height) so data can be viewed and analysed in three dimensions.</li>
    <li><strong>What is the difference between 2.5D and true 3D?</strong> 2.5D has one height per x, y (a terrain surface). True 3D has volumes and several levels (floors, tunnels).</li>
    <li><strong>Where do I view 3D in QGIS?</strong> View &gt; New 3D Map View.</li>
    <li><strong>Which data feeds a 3D scene?</strong> DEMs, LiDAR point clouds, extruded footprints and 3D models.</li>
    <li><strong>What can I analyse in 3D?</strong> Line of sight, viewshed, shadows and volumes.</li>
    <li><strong>Where is more detail?</strong> Module 12 covers 3D data formats, 3D Tiles and CesiumJS.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Start with the 2.5D terrain view; add true 3D only when the question needs it.</p>
</div>