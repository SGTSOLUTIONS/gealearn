{{-- resources/views/learning/lessons/15-14-cesiumjs.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    CesiumJS is a JavaScript library for 3D globes and maps. It shows terrain, buildings, point clouds and time-based data in the browser.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a 3D viewer with terrain</li>
    <li>Fly the camera to a location</li>
    <li>Load 3D Tiles and GeoJSON</li>
</ul>

<h2>Visual Guide: CesiumJS 3D Globe Example</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 48%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Viewer and camera</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            const viewer = new Cesium.Viewer(<br>
              "cesiumContainer", {<br>
                terrain: Cesium.Terrain.fromWorldTerrain()<br>
            });<br><br>
            viewer.camera.flyTo({<br>
              destination: Cesium.Cartesian3.fromDegrees(78, 20, 5000)<br>
            });
        </div>
    </div>
    <div style="width: 48%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Load 3D Tiles</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            const ts = await Cesium.Cesium3DTileset<br>
              .fromUrl("tileset.json");<br><br>
            viewer.scene.primitives.add(ts);
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Coordinates:</strong> longitude, latitude, height (metres above the ellipsoid)<br>
    <strong>Rule of thumb:</strong> keep 3D scenes light: stream tiles and avoid loading every building at once.
</div>

<p>
    The diagram shows the two essentials: creating a viewer and moving the camera, then loading a 3D Tiles dataset.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What are the coordinates?</strong> Longitude, latitude, height (metres above the ellipsoid).</li>
    <li><strong>Which 3D format does it use?</strong> The open 3D Tiles format for large 3D datasets.</li>
    <li><strong>Do I need a token?</strong> Terrain and imagery often need a free Cesium ion access token.</li>
    <li><strong>How do I make buildings 3D?</strong> Extrude building footprints by setting a polygon's <code>extrudedHeight</code>.</li>
    <li><strong>How do I show time-based data?</strong> Supports time-dynamic data through CZML and the timeline widget.</li>
    <li><strong>What browser does it need?</strong> A modern browser with WebGL.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep 3D scenes light: stream tiles and avoid loading every building at once.</p>
</div>