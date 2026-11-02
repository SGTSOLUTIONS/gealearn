{{-- resources/views/learning/lessons/12-6-cesiumjs.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    CesiumJS is an open-source JavaScript library that shows 3D globes and maps in a web browser, with terrain, imagery, models and 3D Tiles.
    It is the standard library for web-based 3D GIS.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the Viewer and Scene</li>
    <li>Control the camera</li>
    <li>Add content to the scene</li>
</ul>

<h2>Visual Guide: CesiumJS Structure</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">JavaScript</div>
        <div style="padding: 10px; font-family: Consolas, monospace; font-size: 12px; text-align: left;">
            const viewer = new Cesium.Viewer(<br>
            &nbsp;&nbsp;'cesiumContainer', {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;terrain: Cesium.Terrain<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.fromWorldTerrain()<br>
            &nbsp;&nbsp;});<br><br>
            viewer.camera.flyTo({<br>
            &nbsp;&nbsp;destination: Cesium.Cartesian3<br>
            &nbsp;&nbsp;&nbsp;&nbsp;.fromDegrees(80.27, 13.08, 1500)<br>
            });
        </div>
    </div>
    <div style="width: 45%; display: flex; flex-direction: column; align-items: center; gap: 5px;">
        <div style="width: 100%; border: 2px solid #282A35; border-radius: 6px; padding: 6px; background: #f9f9f9; text-align: center;"><strong>Viewer</strong></div>
        <div style="font-size: 16px; color: #FF9800;">&darr;</div>
        <div style="width: 90%; border: 2px solid #04AA6D; border-radius: 6px; padding: 6px; background: #e8f5e9; text-align: center;"><strong>Scene</strong></div>
        <div style="display: flex; justify-content: space-between; width: 100%; gap: 5px;">
            <div style="width: 48%; border: 1px solid #ccc; padding: 6px; background: #fff; text-align: center; font-size: 10px;"><strong>Camera</strong><br>flyTo, setView</div>
            <div style="width: 48%; border: 1px solid #ccc; padding: 6px; background: #fff; text-align: center; font-size: 10px;"><strong>Globe</strong><br>imagery + terrain</div>
        </div>
        <div style="display: flex; justify-content: space-between; width: 100%; gap: 5px;">
            <div style="width: 48%; border: 1px solid #ccc; padding: 6px; background: #fff; text-align: center; font-size: 10px;"><strong>Entities</strong><br>points, lines, models</div>
            <div style="width: 48%; border: 1px solid #ccc; padding: 6px; background: #fff; text-align: center; font-size: 10px;"><strong>3D Tiles</strong><br>buildings, clouds</div>
        </div>
    </div>
</div>
<div style="text-align: center; font-size: 11px; color: #666; margin-bottom: 20px;">
    A free Cesium ion token unlocks default imagery and terrain
</div>

<p>
    The diagram shows the structure of a CesiumJS application, from the Viewer down to the Scene and its contents.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the Viewer?</strong> The main widget. One line of code creates a globe in a web page. It contains the Scene.</li>
    <li><strong>How does the camera move?</strong> <code>flyTo</code> for animated trips, <code>setView</code> for jumps, and <code>lookAt</code> to circle a target.</li>
    <li><strong>How do I add content?</strong> Entities are the easy way for points, lines, polygons and models. Primitives and 3D Tiles are lower level and faster for large data.</li>
    <li><strong>What do I need to get started?</strong> The CesiumJS files, a div for the viewer, and a Cesium ion access token.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep your access token out of public code. Use tokens restricted to your website address.</p>
</div>