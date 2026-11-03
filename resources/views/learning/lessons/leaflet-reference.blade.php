{{-- resources/views/learning/lessons/15-13-leaflet.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Leaflet is a small, simple JavaScript library for interactive maps. It is the fastest way to put a map on a web page.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a map with tiles and markers</li>
    <li>Draw GeoJSON and add WMS</li>
    <li>Get coordinate order right</li>
</ul>

<h2>Visual Guide: Leaflet Map Example</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 48%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Map and tiles</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            var map = L.map("map").setView([20, 78], 5);<br><br>
            L.tileLayer(<br>
              "https://tile.openstreetmap.org/{z}/{x}/{y}.png",<br>
              {maxZoom: 19, attribution: "© OpenStreetMap"}<br>
            ).addTo(map);
        </div>
    </div>
    <div style="width: 48%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Markers and GeoJSON</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            L.marker([20, 78]).addTo(map)<br>
              .bindPopup("Hello GIS");<br><br>
            L.geoJSON(wardsData).addTo(map);
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Order:</strong> [latitude, longitude], the reverse of GeoJSON<br>
    <strong>Rule of thumb:</strong> Leaflet uses [lat, lng] but GeoJSON uses [lng, lat]; mixing them up puts points in the wrong place.
</div>

<p>
    The diagram shows the two building blocks: a map with a tile layer, and markers or GeoJSON added on top.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How big is Leaflet?</strong> About 40 KB, and it works on desktop and mobile.</li>
    <li><strong>What is the coordinate order?</strong> [latitude, longitude], the reverse of GeoJSON.</li>
    <li><strong>Which projection does it use?</strong> Web Mercator (EPSG:3857) tiles; other CRSs need the Proj4Leaflet plugin.</li>
    <li><strong>How do I extend it?</strong> Many plugins add drawing, clustering, heatmaps and measuring.</li>
    <li><strong>What must I always show?</strong> Always show the map data attribution (for example © OpenStreetMap contributors).</li>
    <li><strong>What is it best for?</strong> Simple dashboards and quick prototypes.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Leaflet uses [lat, lng] but GeoJSON uses [lng, lat]; mixing them up puts points in the wrong place.</p>
</div>