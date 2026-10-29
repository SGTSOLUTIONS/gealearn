{{-- resources/views/learning/lessons/9-22-spatial-indexing.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A spatial index lets the database find nearby features without checking every row.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how a GiST index speeds up queries</li>
    <li>Create a spatial index</li>
    <li>Know when the index is used</li>
</ul>

<h2>Visual Guide: How a GiST Index Speeds a Query</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Query Area</div>
        <div style="padding: 6px; background: #fff;">where are you looking?</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">GiST Index</div>
        <div style="padding: 6px; background: #fff;">finds candidates by bounding box</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Exact Test</div>
        <div style="padding: 6px; background: #fff;">checks the true shape</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Result</div>
        <div style="padding: 6px; background: #fff;">far fewer rows to check</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Bounding Boxes First, Shapes Second &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">CREATE INDEX ... USING GIST (geom);</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">VACUUM ANALYZE wards;</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">EXPLAIN shows Index Scan</div>
</div>

<p>
    The diagram shows how a GiST index works. Without it every row is checked; with it only nearby features are. It compares bounding boxes first, then the exact shapes. It is used by operators such as &&, ST_Intersects, and ST_DWithin, not by ST_Area.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Why use a spatial index?</strong> Without it every row is checked; with it only nearby features are.</li>
    <li><strong>Which index type is used?</strong> GiST for geometry; SP-GiST and BRIN suit special cases.</li>
    <li><strong>How does it work?</strong> It compares bounding boxes first, then the exact shapes.</li>
    <li><strong>When do I create it?</strong> After loading data, on every geometry column used in queries.</li>
    <li><strong>Does it help every query?</strong> No. It is used by operators such as &&, ST_Intersects, and ST_DWithin, not by ST_Area.</li>
    <li><strong>How do I check it is used?</strong> EXPLAIN shows an Index Scan or Bitmap Index Scan.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Run VACUUM ANALYZE after creating an index or loading big data.</p>
</div>