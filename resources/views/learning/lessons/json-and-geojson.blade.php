{{-- resources/views/learning/lessons/10-9-json-and-geojson.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    JSON is a simple text format for data; GeoJSON is JSON with a standard way to describe geometry.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand JSON structure</li>
    <li>Know the parts of a GeoJSON file</li>
    <li>Understand coordinate order</li>
</ul>

<h2>Visual Guide: Parts of GeoJSON</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 12px; border-radius: 6px; font-family: monospace; font-size: 10px; line-height: 1.5; text-align: left; overflow-x: auto;">
        <span style="color: #569cd6;">school.geojson</span><br><br>
        {<span style="color: #ce9178;">"type"</span>: <span style="color: #ce9178;">"Feature"</span>,<br>
        &nbsp;<span style="color: #ce9178;">"geometry"</span>: {<br>
        &nbsp;&nbsp;&nbsp;<span style="color: #ce9178;">"type"</span>: <span style="color: #ce9178;">"Point"</span>,<br>
        &nbsp;&nbsp;&nbsp;<span style="color: #ce9178;">"coordinates"</span>: [<span style="color: #b5cea8;">80.27</span>, <span style="color: #b5cea8;">13.08</span>]<br>
        &nbsp;},<br>
        &nbsp;<span style="color: #ce9178;">"properties"</span>: {<br>
        &nbsp;&nbsp;&nbsp;<span style="color: #ce9178;">"name"</span>: <span style="color: #ce9178;">"School A"</span> }<br>
        }
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70;">Parts of GeoJSON</div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">FeatureCollection</strong><br><span style="color: #666;">a list of features</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">Feature</strong><br><span style="color: #666;">geometry + properties</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px;">
                <strong style="color: #005a70;">geometry</strong><br><span style="color: #666;">Point, LineString, Polygon</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px;">
                <strong style="color: #005a70;">coordinates</strong><br><span style="color: #666;">[longitude, latitude]</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 8px;">x comes first: lon, lat</div>
    </div>
</div>

<p>
    The diagram shows the parts of GeoJSON. It is a JSON format with set rules for features, geometries, and properties. The coordinate order is longitude first, then latitude: [lon, lat]. GeoJSON uses WGS 84 (EPSG:4326) in the current standard.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is JSON?</strong> A text format of keys and values, easy for JavaScript to read.</li>
    <li><strong>What is GeoJSON?</strong> JSON with set rules for features, geometries, and properties.</li>
    <li><strong>What is the coordinate order?</strong> Longitude first, then latitude: [lon, lat].</li>
    <li><strong>Which CRS does GeoJSON use?</strong> WGS 84 (EPSG:4326) in the current standard.</li>
    <li><strong>How do I read it in JavaScript?</strong> JSON.parse(text), or response.json() after fetch.</li>
    <li><strong>Where do I get GeoJSON?</strong> Export from QGIS, ogr2ogr, GeoPandas, or ST_AsGeoJSON in PostGIS.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Leaflet uses [lat, lng] but GeoJSON uses [lon, lat]: watch the order.</p>
</div>