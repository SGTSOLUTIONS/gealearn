{{-- resources/views/learning/lessons/4-3-geojson.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoJSON is a plain-text format built on JSON. It is the standard way to send vector data to web maps.
    Because it is text-based, it is easy to read and edit.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the structure of a GeoJSON file</li>
    <li>Learn the importance of coordinate order</li>
    <li>Recognise the limitations of GeoJSON</li>
</ul>

<h2>Visual Guide: GeoJSON Structure</h2>
<div style="display: flex; flex-direction: column; align-items: center; margin: 20px 0;">
    <div style="width: 60%; border: 2px solid #282A35; border-radius: 6px; text-align: center; background: #282A35; color: #fff; padding: 8px; font-weight: bold; font-size: 13px;">FeatureCollection</div>
    <div style="width: 2px; height: 15px; background: #999;"></div>
    <div style="width: 55%; border: 2px solid #04AA6D; border-radius: 6px; text-align: center; background: #04AA6D; color: #fff; padding: 8px; font-weight: bold; font-size: 13px;">Feature</div>
    <div style="width: 2px; height: 15px; background: #999;"></div>
    <div style="display: flex; width: 60%; justify-content: space-between;">
        <div style="width: 48%; border: 2px solid #2196F3; border-radius: 6px; text-align: center; background: #2196F3; color: #fff; padding: 8px; font-size: 12px;">
            <strong>geometry</strong><br>shape as [lon, lat]
        </div>
        <div style="width: 48%; border: 2px solid #FF9800; border-radius: 6px; text-align: center; background: #FF9800; color: #fff; padding: 8px; font-size: 12px;">
            <strong>properties</strong><br>attributes: name, value
        </div>
    </div>
    <div style="color: #d9534f; font-weight: bold; margin-top: 15px; font-size: 12px;">Order: longitude first, then latitude</div>
</div>

<p>
    A GeoJSON file is structured like a tree. The root is a FeatureCollection, which holds an array of Features. Each Feature contains a geometry (the shape) and properties (the data). The order of coordinates is [longitude, latitude], not the other way around.
</p>

<h2>Key Points</h2>
<ul>
    <li>A <strong>FeatureCollection</strong> holds Features; each has a geometry and properties.</li>
    <li>Geometry types: Point, LineString, Polygon and their Multi versions.</li>
    <li>Coordinates are written <strong>[longitude, latitude]</strong> – x first, then y.</li>
    <li>Uses <strong>WGS 84 (EPSG:4326)</strong>; QGIS reprojects data when you export.</li>
    <li>Readable in any text editor, but very large files become slow.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Points in the wrong country? Longitude and latitude are probably swapped.</p>
</div>