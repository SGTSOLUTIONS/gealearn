{{-- resources/views/learning/lessons/15-11-geoserver.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoServer is an open-source map server. It publishes data from PostGIS, shapefiles and rasters as web services (WMS, WFS, WCS, WMTS)
    that any client can consume.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Follow the publishing flow from workspace to services</li>
    <li>Know what each component does</li>
    <li>Secure and cache published layers</li>
</ul>

<h2>Visual Guide: GeoServer Publishing Flow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; padding: 8px; background: #fff; font-weight: bold;">Workspace</div>
    <div style="width: 4%; font-size: 18px; color: #282A35;">→</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; padding: 8px; background: #e8f5e9; font-weight: bold;">Store</div>
    <div style="width: 4%; font-size: 18px; color: #282A35;">→</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; padding: 8px; background: #fff3e0; font-weight: bold;">Layer</div>
    <div style="width: 4%; font-size: 18px; color: #282A35;">→</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; padding: 8px; background: #e3f2fd; font-weight: bold;">Style</div>
    <div style="width: 4%; font-size: 18px; color: #282A35;">→</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; padding: 8px; background: #f3e5f5; font-weight: bold;">Services</div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Services:</strong> WMS · WFS · WCS · WMTS for any client<br>
    <strong>Rule of thumb:</strong> set the correct native CRS and compute bounding boxes when you publish a layer.
</div>

<p>
    The diagram shows the five-step publishing flow: a workspace groups data, a store connects to it, a layer publishes it, a style colours it, and services expose it to clients.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Where is the admin page?</strong> <code>http://localhost:8080/geoserver</code>.</li>
    <li><strong>What should I change first?</strong> Change the default login (admin / geoserver) as soon as you install it.</li>
    <li><strong>What is the publishing flow?</strong> Create a workspace, add a store, then publish a layer.</li>
    <li><strong>How do I test a layer?</strong> Use Layer Preview to test a layer in OpenLayers straight away.</li>
    <li><strong>How do I handle heavy traffic?</strong> Turn on tile caching (GeoWebCache) for layers that many users view.</li>
    <li><strong>How do I secure layers?</strong> Restrict layers with security rules before exposing the server to the internet.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Set the correct native CRS and compute bounding boxes when you publish a layer.</p>
</div>