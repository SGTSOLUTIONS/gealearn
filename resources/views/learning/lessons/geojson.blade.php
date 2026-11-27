<p>
    GeoJSON is a plain-text format built on JSON. It is the standard way to send vector data to web maps.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Read the structure of a GeoJSON file</li>
    <li>Remember the coordinate order</li>
    <li>Know which CRS GeoJSON uses</li>
    <li>Spot swapped coordinates</li>
</ul>

<h3>Example GeoJSON</h3>
<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">point.geojson</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code>{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "geometry": { "type": "Point", "coordinates": [78.0, 20.5] },
      "properties": { "name": "Station A" }
    }
  ]
}</code></pre>
</div>

<h3>Structure</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">FeatureCollection</div>
        <div style="padding:15px; text-align:center;">
            <p>Holds a list of Features.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Feature</div>
        <div style="padding:15px; text-align:center;">
            <p>One object with a geometry and properties.</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Geometry and properties</div>
        <div style="padding:15px; text-align:center;">
            <p>Shape as [lon, lat]; attributes such as name or value.</p>
        </div>
    </div>
</div>

<h3>Key facts</h3>
<ul>
    <li>Geometry types – Point, LineString, Polygon and their Multi versions.</li>
    <li>Coordinate order – [longitude, latitude]: x first, then y.</li>
    <li>CRS – WGS 84 (EPSG:4326); QGIS reprojects the data when you export.</li>
    <li>Readable in any text editor, but very large files become slow.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Points in the wrong country? Longitude and latitude are probably swapped.
    </p>
</div>