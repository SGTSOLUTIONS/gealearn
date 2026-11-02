{{-- resources/views/learning/lessons/10-10-openlayers-introduction.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    OpenLayers is a full-featured JavaScript map library with strong support for projections and map services.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the four core ideas of OpenLayers</li>
    <li>Create a basic map</li>
    <li>Add GeoJSON data</li>
</ul>

<h2>Visual Guide: Four OpenLayers Ideas</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 12px; border-radius: 6px; font-family: monospace; font-size: 10px; line-height: 1.5; text-align: left; overflow-x: auto;">
        <span style="color: #569cd6;">ol_map.js</span><br><br>
        <span style="color: #569cd6;">const</span> map = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">ol.Map</span>({<br>
        &nbsp;&nbsp;target: <span style="color: #ce9178;">'map'</span>,<br>
        &nbsp;&nbsp;layers: [<span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">ol.layer.Tile</span>({<br>
        &nbsp;&nbsp;&nbsp;&nbsp;source: <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">ol.source.OSM</span>() })],<br>
        &nbsp;&nbsp;view: <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">ol.View</span>({<br>
        &nbsp;&nbsp;&nbsp;&nbsp;center: ol.proj.fromLonLat(<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<span style="color: #b5cea8;">80.27</span>, <span style="color: #b5cea8;">13.08</span>]),<br>
        &nbsp;&nbsp;&nbsp;&nbsp;zoom: <span style="color: #b5cea8;">11</span> })<br>
        });
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70;">Four OpenLayers ideas</div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">Map</strong><br><span style="color: #666;">the container object</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">View</strong><br><span style="color: #666;">centre, zoom, projection</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px;">
                <strong style="color: #005a70;">Layer</strong><br><span style="color: #666;">Tile, Vector, Image</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px;">
                <strong style="color: #005a70;">Source</strong><br><span style="color: #666;">OSM, GeoJSON, WMS, WMTS</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 8px;">a layer needs a source</div>
    </div>
</div>

<p>
    The diagram shows the four core ideas. Map holds everything; View sets centre and zoom; Layers draw; Sources supply the data. OpenLayers works in lon/lat order and in the view's projection: convert with fromLonLat. OpenLayers is more powerful than Leaflet; Leaflet is simpler to learn.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is OpenLayers?</strong> A free JavaScript library for interactive maps with strong standards support.</li>
    <li><strong>What are Map, View, Layer, and Source?</strong> Map holds everything; View sets centre and zoom; Layers draw; Sources supply the data.</li>
    <li><strong>How do I set the centre?</strong> ol.proj.fromLonLat([lon, lat]) converts degrees to the view's projection.</li>
    <li><strong>What is OpenLayers best at?</strong> Projections, WMS/WFS/WMTS services, and editing tools.</li>
    <li><strong>How do I add GeoJSON?</strong> A Vector layer with a VectorSource that uses the GeoJSON format.</li>
    <li><strong>OpenLayers or Leaflet?</strong> OpenLayers is more powerful; Leaflet is simpler to learn.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> OpenLayers works in lon/lat order and in the view's projection: convert with fromLonLat.</p>
</div>