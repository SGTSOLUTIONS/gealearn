{{-- resources/views/learning/lessons/10-12-cesiumjs-introduction.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    CesiumJS is a JavaScript library for 3D globes and maps, with terrain, buildings, and time-based data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the core parts of Cesium</li>
    <li>Move the camera and set positions</li>
    <li>Know when a token is needed</li>
</ul>

<h2>Visual Guide: Core Cesium Parts</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <!-- Left side: Code block -->
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">cesium_map.js</span><br><br>
        Cesium.Ion.defaultAccessToken = <span style="color: #ce9178;">'TOKEN'</span>;<br><br>
        <span style="color: #569cd6;">const</span> viewer =<br>
        &nbsp;&nbsp;<span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">Cesium.Viewer</span>(<span style="color: #ce9178;">'cesiumContainer'</span>);<br><br>
        viewer.camera.flyTo({<br>
        &nbsp;&nbsp;destination: Cesium.Cartesian3<br>
        &nbsp;&nbsp;&nbsp;&nbsp;.fromDegrees(<span style="color: #b5cea8;">80.27</span>, <span style="color: #b5cea8;">13.08</span>, <span style="color: #b5cea8;">5000</span>)<br>
        });
    </div>

    <!-- Right side: Visual Boxes -->
    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px;">Core Cesium parts</div>
        <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px;">
                <strong style="color: #005a70;">Viewer</strong><br><span style="color: #666;">the 3D globe widget</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px;">
                <strong style="color: #005a70;">Camera</strong><br><span style="color: #666;">flyTo, lookAt</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px;">
                <strong style="color: #005a70;">Terrain</strong><br><span style="color: #666;">real elevation</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px;">
                <strong style="color: #005a70;">3D Tiles</strong><br><span style="color: #666;">buildings, point clouds</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">a globe instead of a flat map</div>
    </div>
</div>

<p>
    The diagram shows the core Cesium parts. The Viewer is the ready-made widget with globe, controls, and timeline. Use the Camera to move around. Cesium ion data and terrain need a free access token; your own data does not. Cesium uses lon, lat, height in metres: the same order as GeoJSON.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is CesiumJS?</strong> An open-source JavaScript library for 3D globes and 2D maps.</li>
    <li><strong>What is the Viewer?</strong> The ready-made widget with globe, controls, and timeline.</li>
    <li><strong>How do I move the camera?</strong> viewer.camera.flyTo({destination: ...}).</li>
    <li><strong>How do I set a position?</strong> Cesium.Cartesian3.fromDegrees(lon, lat, height).</li>
    <li><strong>What are 3D Tiles?</strong> A streaming format for large 3D datasets such as cities and point clouds.</li>
    <li><strong>Do I need a token?</strong> Cesium ion data and terrain need a free access token; your own data does not.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Cesium uses lon, lat, height in metres: the same order as GeoJSON.</p>
</div>