{{-- resources/views/learning/lessons/11-16-openlayers.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    OpenLayers shows GeoServer layers as WMS or WMTS tiles, or as vector features loaded from WFS.
    It is the most popular open-source JavaScript mapping library.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Connect OpenLayers to WMS</li>
    <li>Load WFS data as vectors</li>
    <li>Fix CORS errors</li>
</ul>

<h2>Visual Guide: OpenLayers + GeoServer</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 20%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">GeoServer</div>
        <div style="padding: 8px; background: #fff;">city:wards</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">WMS tiles</div>
        <div style="padding: 8px; background: #fff;">TileWMS source</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">OpenLayers</div>
        <div style="padding: 8px; background: #fff;">tile layer</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Map</div>
        <div style="padding: 8px; background: #fff;">in the browser</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">map.js</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            import TileLayer from 'ol/layer/Tile';<br>
            import TileWMS from 'ol/source/TileWMS';<br><br>
            const wards = new TileLayer({<br>
            &nbsp;&nbsp;source: new TileWMS({<br>
            &nbsp;&nbsp;&nbsp;&nbsp;url: 'http://localhost:8080/geoserver/city/wms',<br>
            &nbsp;&nbsp;&nbsp;&nbsp;params: {'LAYERS': 'city:wards', 'TILED': true},<br>
            &nbsp;&nbsp;&nbsp;&nbsp;serverType: 'geoserver'<br>
            &nbsp;&nbsp;})<br>
            });<br>
            map.addLayer(wards);
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Which service?</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>WMS / WMTS: map images</li>
            <li>WFS (GeoJSON): vector features</li>
            <li>CORS must allow your page's origin</li>
            <li>getFeatureInfoUrl() for clicks</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the connection flow from GeoServer to OpenLayers and the code to create a WMS tile layer.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does OpenLayers need?</strong> A GeoServer URL, a layer name and a source type.</li>
    <li><strong>Which source for WMS?</strong> <code>ol/source/TileWMS</code> (tiled) or <code>ImageWMS</code> (single image).</li>
    <li><strong>Which source for WMTS?</strong> <code>ol/source/WMTS</code> with a tile grid from GetCapabilities.</li>
    <li><strong>How do I show vectors?</strong> Load WFS as GeoJSON into a vector source.</li>
    <li><strong>What is CORS?</strong> A browser rule that blocks calls to another origin unless it is allowed.</li>
    <li><strong>How do I enable CORS?</strong> A CORS filter in GeoServer's web.xml or headers in the reverse proxy.</li>
    <li><strong>What does serverType do?</strong> Tells OpenLayers it is talking to GeoServer, for matching options.</li>
    <li><strong>How do I identify features?</strong> Use the source's <code>getFeatureInfoUrl()</code> on a map click.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> If the layer works in Layer Preview but not in your page, check CORS first.</p>
</div>