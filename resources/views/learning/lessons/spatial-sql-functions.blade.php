{{-- resources/views/learning/lessons/9-21-spatial-sql-functions.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PostGIS adds hundreds of ST_ functions to measure, create, test, and convert geometries.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know the four groups of spatial functions</li>
    <li>Measure and create geometries</li>
    <li>Test relationships between geometries</li>
</ul>

<h2>Visual Guide: Four Groups of Functions</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Measure</div>
        <div style="padding: 6px; background: #fff;">ST_Area, ST_Length, ST_Distance</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Create</div>
        <div style="padding: 6px; background: #fff;">ST_Buffer, ST_Centroid, ST_Union</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Relate</div>
        <div style="padding: 6px; background: #fff;">ST_Intersects, ST_Within, ST_DWithin</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Convert</div>
        <div style="padding: 6px; background: #fff;">ST_Transform, ST_AsText, ST_AsGeoJSON</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Size &rarr; New Geometry &rarr; Tests &rarr; Formats &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">All start with ST_</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ST_SetSRID(ST_MakePoint(lon, lat), 4326)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ST_Union and ST_Collect aggregate</div>
</div>

<p>
    The diagram shows the four groups of spatial functions. They all start with ST_. Check the PostGIS reference for each function's units and argument order. ST_Union and ST_Collect merge many rows into one geometry.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How are spatial functions named?</strong> They start with ST_ (spatial type).</li>
    <li><strong>How do I measure?</strong> ST_Area, ST_Length, ST_Perimeter, and ST_Distance.</li>
    <li><strong>How do I create new geometry?</strong> ST_Buffer, ST_Centroid, ST_Union, and ST_Intersection.</li>
    <li><strong>How do I test relationships?</strong> ST_Intersects, ST_Contains, ST_Within, ST_Touches, and ST_DWithin.</li>
    <li><strong>How do I make a point?</strong> ST_SetSRID(ST_MakePoint(lon, lat), 4326)</li>
    <li><strong>Which functions aggregate?</strong> ST_Union and ST_Collect merge many rows into one geometry.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Check the PostGIS reference for each function's units and argument order.</p>
</div>