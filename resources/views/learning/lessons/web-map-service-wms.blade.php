{{-- resources/views/learning/lessons/11-9-wms.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    WMS returns ready-made map images for a requested area, size and CRS, so any client can show the layer.
    It is the most widely supported OGC service.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand WMS capabilities</li>
    <li>Build a GetMap request</li>
    <li>Use GetFeatureInfo and GetLegendGraphic</li>
</ul>

<h2>Visual Guide: WMS Request Flow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-weight: bold;">Client</div>
        <div style="padding: 8px; background: #fff;">sends GetMap</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-weight: bold;">GeoServer</div>
        <div style="padding: 8px; background: #fff;">reads and draws</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 8px; font-weight: bold;">Image</div>
        <div style="padding: 8px; background: #fff;">PNG or JPEG</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">getmap.txt</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            http://localhost:8080/geoserver/city/wms<br>
            ?service=WMS&version=1.1.0<br>
            &request=GetMap<br>
            &layers=city:wards<br>
            &bbox=78.0,20.0,79.0,21.0<br>
            &width=768&height=768<br>
            &srs=EPSG:4326<br>
            &format=image/png
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Main WMS requests</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>GetCapabilities: list layers</li>
            <li>GetMap: draw a map image</li>
            <li>GetFeatureInfo: query a point</li>
            <li>GetLegendGraphic: legend image</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the WMS request/response flow and the four main operations.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is WMS?</strong> Web Map Service: it returns map images, not data.</li>
    <li><strong>What are the main requests?</strong> GetCapabilities, GetMap, GetFeatureInfo and GetLegendGraphic.</li>
    <li><strong>What does GetMap need?</strong> layers, bbox, width, height, CRS/SRS and format.</li>
    <li><strong>Which image formats?</strong> PNG, JPEG and GIF, plus PDF, SVG and GeoTIFF.</li>
    <li><strong>What does GetFeatureInfo do?</strong> Returns the attributes of the features at a clicked pixel.</li>
    <li><strong>How do I get a legend?</strong> <code>request=GetLegendGraphic&amp;layer=city:wards&amp;format=image/png</code>.</li>
    <li><strong>How do I make it transparent?</strong> Add <code>transparent=true</code> with <code>format=image/png</code>.</li>
    <li><strong>How do I test quickly?</strong> Use Layer Preview, or paste the URL into a browser.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Always request GetCapabilities first to confirm the exact layer names.</p>
</div>