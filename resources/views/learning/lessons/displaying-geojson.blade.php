{{-- resources/views/learning/lessons/10-15-displaying-geojson.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Fetch a GeoJSON file or API response and draw it on the map as vector features.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Load and display GeoJSON</li>
    <li>Add popups and zoom to data</li>
    <li>Handle local files and large datasets</li>
</ul>

<h2>Visual Guide: From File to Map</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">geojson.js</span><br><br>
        <span style="color: #dcdcaa;">fetch</span>(<span style="color: #ce9178;">'wards.geojson'</span>)<br>
        &nbsp;&nbsp;.<span style="color: #dcdcaa;">then</span>(r =&gt; r.<span style="color: #dcdcaa;">json</span>())<br>
        &nbsp;&nbsp;.<span style="color: #dcdcaa;">then</span>(data =&gt; {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;L.geoJSON(data, {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;onEachFeature: (f, layer) =&gt;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;layer.bindPopup(f.properties.name)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;}).addTo(map);<br>
        &nbsp;&nbsp;});
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center; align-items: center; background: #f4f7f6; padding: 10px; border-radius: 6px;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px;">From file to map</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">GeoJSON</strong><br><span style="color: #666;">file or API URL</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">fetch()</strong><br><span style="color: #666;">download and parse</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">L.geoJSON()</strong><br><span style="color: #666;">create the layer</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px; text-align: center;">
            <strong style="color: #005a70;">addTo(map)</strong><br><span style="color: #666;">draw it</span>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">the same steps for every layer</div>
    </div>
</div>

<p>
    The diagram shows the steps to display GeoJSON. Browsers block file:// requests; serve the page from a web server. Test with a small file first; large GeoJSON files slow the browser. Simplify geometry, filter on the server, or use vector tiles for big datasets.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do I load GeoJSON?</strong> fetch(url) then response.json().</li>
    <li><strong>How do I draw it?</strong> L.geoJSON(data).addTo(map) in Leaflet; a Vector layer in OpenLayers.</li>
    <li><strong>How do I add popups?</strong> Use onEachFeature and bind a popup to each layer.</li>
    <li><strong>How do I zoom to the data?</strong> map.fitBounds(layer.getBounds()).</li>
    <li><strong>Why does a local file fail?</strong> Browsers block file:// requests; serve the page from a web server.</li>
    <li><strong>What about big files?</strong> Simplify geometry, filter on the server, or use vector tiles.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Test with a small file first; large GeoJSON files slow the browser.</p>
</div>