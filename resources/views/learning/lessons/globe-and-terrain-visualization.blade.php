{{-- resources/views/learning/lessons/12-7-globe-terrain.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The Cesium globe is a 3D model of the Earth. Imagery layers are draped over a terrain mesh made from elevation data.
    This creates a realistic representation of the planet.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand imagery layers and terrain providers</li>
    <li>Drape imagery onto the terrain</li>
    <li>Adjust visual settings</li>
</ul>

<h2>Visual Guide: Globe and Terrain</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #e3f2fd; position: relative;">
        <strong style="color: #282A35;">The globe</strong>
        <div style="width: 80px; height: 80px; border-radius: 50%; border: 2px solid #2196F3; margin: 10px auto; position: relative; background: #bbdefb;">
            <div style="position: absolute; top: 10px; left: 20px; width: 20px; height: 20px; background: #a5d6a7; border: 1px solid #4caf50; transform: rotate(20deg);"></div>
            <div style="position: absolute; bottom: 15px; right: 15px; width: 15px; height: 15px; background: #a5d6a7; border: 1px solid #4caf50; transform: rotate(-15deg);"></div>
        </div>
        <div style="font-size: 10px; color: #666;">a 3D model of the Earth</div>
    </div>
    <div style="width: 10%; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 55%; display: flex; flex-direction: column; gap: 8px;">
        <div style="border: 2px solid #2196F3; border-radius: 6px; padding: 6px; background: #fff; text-align: center;">
            <strong>Imagery layer</strong><br><span style="font-size: 10px; color: #666;">satellite photos or maps</span>
        </div>
        <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 6px; background: #fff; text-align: center;">
            <strong>Terrain provider</strong><br><span style="font-size: 10px; color: #666;">elevation as a 3D mesh</span>
        </div>
        <div style="border: 2px solid #FF9800; border-radius: 6px; padding: 6px; background: #fff; text-align: center;">
            <strong>Globe</strong><br><span style="font-size: 10px; color: #666;">imagery draped on terrain</span>
        </div>
    </div>
</div>

<div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
    <div style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9; width: 100%; font-size: 11px;">
        <strong style="color: #282A35;">Terrain and imagery options</strong>
        <ul style="margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Cesium World Terrain (from Cesium ion)</li>
            <li>Custom terrain from a DEM (quantized-mesh)</li>
            <li>Imagery: Bing, OpenStreetMap, WMS, WMTS</li>
            <li>Use <code>viewer.scene.globe.terrainProvider</code> to change terrain</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows how imagery and terrain combine on the globe, and the main terrain and imagery options available.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the globe?</strong> The 3D Earth model on which imagery and terrain are displayed.</li>
    <li><strong>What is an imagery layer?</strong> A map or photo layer draped over the globe.</li>
    <li><strong>What is a terrain provider?</strong> The elevation mesh that gives the globe its hills and valleys.</li>
    <li><strong>How do I add an imagery layer?</strong> <code>viewer.imageryLayers.addImageryProvider(...)</code>.</li>
    <li><strong>How do I change terrain?</strong> Set <code>terrainProvider</code> on the Viewer options or the globe.</li>
    <li><strong>How do I improve performance?</strong> Use lower-resolution imagery and terrain for overviews; load detail only when zoomed in.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Match the terrain's vertical datum to your data, or buildings will float or sink.</p>
</div>