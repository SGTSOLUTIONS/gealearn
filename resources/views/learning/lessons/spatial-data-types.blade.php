{{-- resources/views/learning/lessons/9-18-spatial-data-types.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PostGIS stores shapes as geometry values: points, lines, polygons, and their multi versions.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify the geometry types</li>
    <li>Understand WKT and WKB formats</li>
    <li>Check a geometry's type</li>
</ul>

<h2>Visual Guide: Geometry Types</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Point</div>
        <div style="padding: 6px; background: #fff;">one location</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">LineString</div>
        <div style="padding: 6px; background: #fff;">a path</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Polygon</div>
        <div style="padding: 6px; background: #fff;">an area</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Multi types</div>
        <div style="padding: 6px; background: #fff;">several parts, e.g. island group</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Location &rarr; Path &rarr; Area &rarr; Multi-part &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">WKT: POINT(78.5 20.5)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">WKB: compact binary form</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ST_AsGeoJSON(geom)</div>
</div>

<p>
    The diagram shows the geometry types. WKT is readable text; WKB is the compact binary form used for storage. A Multi type is one feature made of several parts. Keep one geometry type per column, e.g. GEOMETRY(Polygon, 4326).
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Which types exist?</strong> POINT, LINESTRING, POLYGON, their MULTI versions, and GEOMETRYCOLLECTION.</li>
    <li><strong>What is WKT?</strong> Well-Known Text: readable text such as POINT(78.5 20.5).</li>
    <li><strong>What is WKB?</strong> Well-Known Binary: the compact binary form used for storage.</li>
    <li><strong>What is a Multi type?</strong> One feature made of several parts, such as an island group.</li>
    <li><strong>How do I get GeoJSON?</strong> ST_AsGeoJSON(geom)</li>
    <li><strong>How do I check the type?</strong> GeometryType(geom) or ST_GeometryType(geom).</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep one geometry type per column, e.g. GEOMETRY(Polygon, 4326).</p>
</div>