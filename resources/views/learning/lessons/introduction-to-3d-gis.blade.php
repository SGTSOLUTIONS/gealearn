{{-- resources/views/learning/lessons/12-1-intro.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    3D GIS stores, analyses and displays spatial data with height as well as position, so terrain, buildings and underground features can be seen as real volumes.
    It moves beyond flat maps to give a realistic view of the world.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what 3D GIS adds to traditional GIS</li>
    <li>Identify typical 3D data sources</li>
    <li>Recognise where 3D GIS is used</li>
</ul>

<h2>Visual Guide: What 3D Adds</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #f9f9f9; position: relative;">
        <div style="position: absolute; top: 10px; left: 10px; font-size: 10px; font-weight: bold; color: #d9534f;">Z (height)</div>
        <div style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); font-size: 10px; font-weight: bold; color: #282A35;">3D scene: terrain + buildings</div>
        <div style="height: 120px; display: flex; align-items: flex-end; justify-content: center; gap: 5px; padding-bottom: 25px; background: #e3f2fd; margin-top: 15px; border-radius: 4px;">
            <div style="width: 20px; height: 30px; background: #b0bec5; border: 1px solid #78909c;"></div>
            <div style="width: 20px; height: 50px; background: #b0bec5; border: 1px solid #78909c;"></div>
            <div style="width: 20px; height: 40px; background: #b0bec5; border: 1px solid #78909c;"></div>
        </div>
    </div>
    <div style="width: 50%; display: flex; flex-direction: column; gap: 8px; text-align: left; font-size: 11px;">
        <div style="border: 2px solid #282A35; border-radius: 6px; padding: 8px; background: #fff;"><strong>Height (Z)</strong><br>every feature has elevation</div>
        <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 8px; background: #fff;"><strong>Volume</strong><br>buildings and terrain have mass</div>
        <div style="border: 2px solid #2196F3; border-radius: 6px; padding: 8px; background: #fff;"><strong>Visibility</strong><br>line of sight and shadows</div>
        <div style="border: 2px solid #FF9800; border-radius: 6px; padding: 8px; background: #fff;"><strong>Realism</strong><br>easy for anyone to understand</div>
    </div>
</div>

<p>
    The diagram shows how adding the Z value to features creates a 3D scene, and the four main capabilities that 3D adds.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does 3D GIS add?</strong> A third value, height (Z), to every feature, enabling volume, depth and realistic views.</li>
    <li><strong>What analysis does it enable?</strong> Shadow studies, line of sight, flood depth, volume, and view from a window.</li>
    <li><strong>What is a typical 3D scene built from?</strong> A terrain model (DEM), draped imagery, building models, and sometimes point clouds from LiDAR or drones.</li>
    <li><strong>Where is 3D GIS used?</strong> Smart cities, urban planning, utilities, property management, disaster planning, and tourism.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Start with a simple scene: terrain plus extruded buildings. It teaches most of the key ideas.</p>
</div>