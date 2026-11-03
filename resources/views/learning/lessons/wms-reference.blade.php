{{-- resources/views/learning/lessons/15-16-wms.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A Web Map Service (WMS) returns map images for a requested area. Use it to display layers without downloading the data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know the four WMS request types</li>
    <li>Read a GetMap request</li>
    <li>Add a WMS in QGIS and web maps</li>
</ul>

<h2>Visual Guide: WMS Requests</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 23%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">GetCapabilities</div>
        <div style="padding: 8px; background: #fff;">Service description (XML)</div>
    </div>
    <div style="width: 23%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">GetMap</div>
        <div style="padding: 8px; background: #fff;">A map image (PNG, JPEG)</div>
    </div>
    <div style="width: 23%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">GetFeatureInfo</div>
        <div style="padding: 8px; background: #fff;">Attributes at a clicked point</div>
    </div>
    <div style="width: 23%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">GetLegendGraphic</div>
        <div style="padding: 8px; background: #fff;">Legend image</div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Example:</strong> <code>http://host/geoserver/city/wms?service=WMS&amp;version=1.3.0&amp;request=GetMap&amp;layers=city:wards&amp;crs=EPSG:4326&amp;bbox=11.9,79.9,13.4,80.4&amp;width=768&amp;height=512&amp;format=image/png</code><br>
    <strong>Rule of thumb:</strong> if a WMS map looks blank, check the layer name, CRS and bounding box first.
</div>

<p>
    The diagram shows the four request types: service metadata, the map image itself, clicked-point attributes, and the legend.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does WMS send?</strong> A picture (raster image) of the map, not the data itself.</li>
    <li><strong>What is the current version?</strong> 1.3.0; note that for EPSG:4326 the axis order is lat, lon.</li>
    <li><strong>How do I add a WMS in QGIS?</strong> Layer → Add Layer → Add WMS/WMTS Layer.</li>
    <li><strong>How do I use it in web maps?</strong> Use <code>L.tileLayer.wms()</code> (Leaflet) or <code>TileWMS</code> (OpenLayers).</li>
    <li><strong>How do I read attributes?</strong> Use GetFeatureInfo to let users click a map and read attributes.</li>
    <li><strong>What about heavy traffic?</strong> For heavy traffic, prefer cached tiles (WMTS).</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> If a WMS map looks blank, check the layer name, CRS and bounding box first.</p>
</div>