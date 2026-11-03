{{-- resources/views/learning/lessons/15-19-spatial-sql.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Spatial SQL functions in PostGIS let you create, measure, relate, process and convert geometries with ordinary SQL queries.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know the six categories of spatial SQL functions</li>
    <li>Write spatial tests in WHERE and JOIN</li>
    <li>Use indexes for fast queries</li>
</ul>

<h2>Visual Guide: Spatial SQL Function Groups</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 31%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Create &amp; Measure</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-size: 10px;">
            ST_MakePoint, ST_GeomFromText<br>
            ST_SetSRID<br><br>
            ST_Area, ST_Length, ST_Distance
        </div>
    </div>
    <div style="width: 31%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Relate &amp; Process</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-size: 10px;">
            ST_Intersects, ST_Contains,<br>
            ST_Within, ST_DWithin<br><br>
            ST_Buffer, ST_Union, ST_Intersection, ST_Centroid
        </div>
    </div>
    <div style="width: 31%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Convert &amp; Check</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-size: 10px;">
            ST_Transform, ST_AsGeoJSON, ST_AsText<br><br>
            ST_IsValid, ST_MakeValid, ST_SRID
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Spatial join:</strong> <code>JOIN ward w ON ST_Within(p.geom, w.geom)</code><br>
    <strong>Rule of thumb:</strong> use <code>ST_DWithin(a, b, distance)</code> instead of <code>ST_Distance(a, b) &lt; distance</code>; it is much faster.
</div>

<p>
    The diagram groups the functions into create and measure, relate and process, and convert and check.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do spatial queries work?</strong> Spatial queries combine normal SQL (SELECT, WHERE, JOIN) with <code>ST_</code> functions.</li>
    <li><strong>How do I use the spatial index?</strong> Use <code>ST_Intersects</code> or <code>ST_DWithin</code> in the WHERE clause so the spatial index is used.</li>
    <li><strong>What must match in a function?</strong> Both geometries in a function must have the same SRID.</li>
    <li><strong>How do I write a spatial join?</strong> <code>JOIN ward w ON ST_Within(p.geom, w.geom)</code>.</li>
    <li><strong>Why are degrees bad for measuring?</strong> Distance and area in degrees are meaningless; use a projected SRID or the <code>geography</code> type.</li>
    <li><strong>How do I test safely?</strong> Test on a small table with <code>LIMIT</code> before you run on millions of rows.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use <code>ST_DWithin(a, b, distance)</code> instead of <code>ST_Distance(a, b) &lt; distance</code>; it is much faster.</p>
</div>