{{-- resources/views/learning/lessons/9-23-spatial-queries.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Spatial queries ask questions about location: what is inside, near, touching, or closest.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Write queries for inside, near, touching, and nearest</li>
    <li>Use ST_DWithin for distance queries</li>
    <li>Count features per polygon</li>
</ul>

<h2>Visual Guide: Typical Spatial Questions</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Inside?</div>
        <div style="padding: 6px; background: #fff;">ST_Within, ST_Contains</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Touching?</div>
        <div style="padding: 6px; background: #fff;">ST_Intersects</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Near?</div>
        <div style="padding: 6px; background: #fff;">ST_DWithin</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Nearest?</div>
        <div style="padding: 6px; background: #fff;">ORDER BY a &lt;-&gt; b LIMIT 1</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Containment &rarr; Intersection &rarr; Distance &rarr; Ordering &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ST_Within(point, polygon)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ST_DWithin(a, b, 500)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Most use the spatial index</div>
</div>

<p>
    The diagram shows typical spatial questions. Use ST_DWithin, not ST_Distance, in WHERE: it can use the index. The units for the distance (e.g., 500) are the SRID's units: metres in a projected CRS, degrees in 4326 geometry. To count features per polygon, join with ST_Within, then GROUP BY the polygon.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do I find points in a polygon?</strong> ST_Within(point, polygon) or ST_Contains(polygon, point).</li>
    <li><strong>How do I find features within a distance?</strong> ST_DWithin(a, b, 500); it uses the index, unlike ST_Distance in WHERE.</li>
    <li><strong>How do I find the nearest feature?</strong> ORDER BY a.geom &lt;-&gt; b.geom LIMIT 1</li>
    <li><strong>What does ST_Intersects test?</strong> Whether two geometries share any space.</li>
    <li><strong>How do I count features per polygon?</strong> Join with ST_Within, then GROUP BY the polygon.</li>
    <li><strong>Which units does 500 use?</strong> The SRID's units: metres in a projected CRS, degrees in 4326 geometry.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use ST_DWithin, not ST_Distance, in WHERE: it can use the index.</p>
</div>