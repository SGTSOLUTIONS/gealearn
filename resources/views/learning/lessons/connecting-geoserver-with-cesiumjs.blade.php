{{-- resources/views/learning/lessons/11-17-cesiumjs.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    CesiumJS can drape GeoServer WMS or WMTS imagery over a 3D globe and load features from WFS.
    It brings your 2D data into a 3D visualisation environment.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Connect CesiumJS to WMS</li>
    <li>Load WFS data as GeoJSON</li>
    <li>Understand CORS requirements</li>
</ul>

<h2>Visual Guide: CesiumJS + GeoServer</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-weight: bold;">GeoServer</div>
        <div style="padding: 8px; background: #fff;">WMS / WMTS</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-weight: bold;">Imagery provider</div>
        <div style="padding: 8px; background: #fff;">Cesium class</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 8px; font-weight: bold;">Globe</div>
        <div style="padding: 8px; background: #fff;">3D viewer</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">globe.js</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            const viewer = new Cesium.Viewer('cesiumContainer');<br>
            viewer.imageryLayers.addImageryProvider(<br>
            &nbsp;&nbsp;new Cesium.WebMapServiceImageryProvider({<br>
            &nbsp;&nbsp;&nbsp;&nbsp;url: 'http://localhost:8080/geoserver/city/wms',<br>
            &nbsp;&nbsp;&nbsp;&nbsp;layers: 'city:wards',<br>
            &nbsp;&nbsp;&nbsp;&nbsp;parameters: { transparent: true,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;format: 'image/png' }<br>
            &nbsp;&nbsp;})<br>
            );
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Cesium and GeoServer</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>WMS / WMTS imagery on the globe</li>
            <li>WFS GeoJSON via GeoJsonDataSource</li>
            <li>Terrain and 3D Tiles from other tools</li>
            <li>Check CesiumJS docs for your version</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the connection flow from GeoServer to CesiumJS and the code to create a WMS imagery provider.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How does Cesium use GeoServer?</strong> It drapes WMS or WMTS imagery over the 3D globe.</li>
    <li><strong>Which provider for WMS?</strong> <code>Cesium.WebMapServiceImageryProvider</code>.</li>
    <li><strong>Which provider for WMTS?</strong> <code>Cesium.WebMapTileServiceImageryProvider</code>.</li>
    <li><strong>How do I show vector data?</strong> Fetch WFS as GeoJSON and load it with <code>GeoJsonDataSource</code>.</li>
    <li><strong>Which CRS should layers use?</strong> EPSG:4326 or EPSG:3857, which Cesium handles natively.</li>
    <li><strong>Can GeoServer serve 3D terrain?</strong> Not usually. Terrain and 3D Tiles come from other tools or hosts.</li>
    <li><strong>What about CORS?</strong> Same as OpenLayers: allow your web page's origin.</li>
    <li><strong>Where do I check API changes?</strong> The CesiumJS documentation for your version.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Test the WMS URL in a browser tab first; then paste it into Cesium.</p>
</div>