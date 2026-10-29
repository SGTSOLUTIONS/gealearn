{{-- resources/views/learning/lessons/9-15-mysql-for-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    MySQL can store and query spatial data too, with a smaller feature set than PostGIS.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand MySQL spatial support</li>
    <li>Know the axis-order trap in MySQL 8</li>
    <li>Compare MySQL and PostGIS for GIS work</li>
</ul>

<h2>Visual Guide: Spatial Support in MySQL</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Types</div>
        <div style="padding: 6px; background: #fff;">POINT, LINESTRING, POLYGON</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Functions</div>
        <div style="padding: 6px; background: #fff;">ST_Distance, ST_Contains</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Index</div>
        <div style="padding: 6px; background: #fff;">SPATIAL INDEX</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Engine</div>
        <div style="padding: 6px; background: #fff;">InnoDB</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Geometry &rarr; Operations &rarr; Speed &rarr; Storage &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">MySQL 8 SRID 4326 = lat, lon</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ST_Distance_Sphere returns metres</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">PostGIS has more functions</div>
</div>

<p>
    The diagram shows MySQL's spatial support. It has good basics but fewer functions than PostGIS. Watch out for the axis-order trap: MySQL 8 reads SRID 4326 as lat, lon; use the axis-order=long-lat option for lon, lat. Use PostGIS for serious spatial work; use MySQL when the project already runs on it.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Does MySQL support spatial data?</strong> Yes: geometry types, ST_ functions, and spatial indexes (SRID support in MySQL 8).</li>
    <li><strong>How do I index geometry?</strong> SPATIAL INDEX (geom) on a NOT NULL geometry column.</li>
    <li><strong>What is the axis-order trap?</strong> MySQL 8 reads SRID 4326 as lat, lon; use the axis-order=long-lat option for lon, lat.</li>
    <li><strong>MySQL or PostGIS?</strong> PostGIS has far more functions, raster, and the geography type; MySQL is simpler.</li>
    <li><strong>How do I get distance in metres?</strong> ST_Distance_Sphere(p1, p2) returns metres on a sphere.</li>
    <li><strong>Which should I learn first?</strong> PostgreSQL with PostGIS for serious GIS work.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use PostGIS for serious spatial work; use MySQL when the project already runs on it.</p>
</div>