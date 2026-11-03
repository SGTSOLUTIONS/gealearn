{{-- resources/views/learning/lessons/15-15-geojson.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoJSON is a simple text format for geographic features, based on JSON. It is the standard way web maps and APIs exchange vector data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Read the structure of a GeoJSON feature</li>
    <li>Know the geometry types and coordinate order</li>
    <li>Validate a file before using it</li>
</ul>

<h2>Visual Guide: A GeoJSON Feature</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 48%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Feature</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            {<br>
              "type": "Feature",<br>
              "properties": {<br>
                "parcel_id": "P-102",<br>
                "land_use": "Residential"<br>
              },<br>
              "geometry": {<br>
                "type": "Point",<br>
                "coordinates": [78.0, 20.0]<br>
              }<br>
            }
        </div>
    </div>
    <div style="width: 48%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Building blocks</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-size: 10px;">
            <strong>Geometry types</strong><br>Point, LineString, Polygon, Multi-versions<br><br>
            <strong>Feature</strong><br>One geometry + properties<br><br>
            <strong>FeatureCollection</strong><br>A list of features (a whole layer)
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Coordinates:</strong> [longitude, latitude] in EPSG:4326 (RFC 7946)<br>
    <strong>Rule of thumb:</strong> paste GeoJSON into geojson.io to see it on a map and spot coordinate-order errors.
</div>

<p>
    The diagram shows a single GeoJSON feature and the three building blocks: geometry types, features and feature collections.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the coordinate order?</strong> Always [longitude, latitude] in EPSG:4326 (the current standard, RFC 7946).</li>
    <li><strong>What is a layer?</strong> A FeatureCollection containing many Feature objects.</li>
    <li><strong>How must polygon rings close?</strong> The first and last coordinate are the same.</li>
    <li><strong>Why is it popular?</strong> It is plain text, so it is easy to read, edit and send through APIs.</li>
    <li><strong>What about large datasets?</strong> Files get large quickly; use GeoPackage or vector tiles for big datasets.</li>
    <li><strong>How do I validate a file?</strong> Validate with geojson.io or QGIS before using a file in an app.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Paste GeoJSON into geojson.io to see it on a map and spot coordinate-order errors.</p>
</div>