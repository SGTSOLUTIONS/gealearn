{{-- resources/views/learning/lessons/9-12-sql-joins.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A join combines rows from two tables using a shared column.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the four main join types</li>
    <li>Write a join with aliases</li>
    <li>Know the difference between relational and spatial joins</li>
</ul>

<h2>Visual Guide: Join Types</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">INNER JOIN</div>
        <div style="padding: 6px; background: #fff;">only rows that match in both</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">LEFT JOIN</div>
        <div style="padding: 6px; background: #fff;">all left rows, NULL if no match</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">RIGHT JOIN</div>
        <div style="padding: 6px; background: #fff;">all right rows, NULL if no match</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">FULL JOIN</div>
        <div style="padding: 6px; background: #fff;">all rows from both tables</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Matches Only &rarr; Left Kept &rarr; Right Kept &rarr; All Kept &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">LEFT JOIN is most useful in GIS</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ON a.ward_id = w.ward_id</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Spatial join uses ST_Intersects</div>
</div>

<p>
    The diagram shows the four join types. LEFT JOIN keeps wards with zero schools; INNER JOIN would drop them. In one-to-many joins the left row repeats; aggregate or use DISTINCT. A spatial join uses ST_Intersects or ST_Within instead of a shared id.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a join?</strong> Combining rows of two tables using a shared column.</li>
    <li><strong>What does INNER JOIN return?</strong> Only the rows that have a match in both tables.</li>
    <li><strong>What does LEFT JOIN return?</strong> All rows of the left table, with NULL where there is no match.</li>
    <li><strong>What are aliases?</strong> Short names such as wards w that make queries shorter.</li>
    <li><strong>What is a spatial join?</strong> A join on ST_Intersects or ST_Within instead of a shared id.</li>
    <li><strong>Why do I get duplicate rows?</strong> In one-to-many joins the left row repeats; aggregate or use DISTINCT.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> LEFT JOIN keeps wards with zero schools; INNER JOIN would drop them.</p>
</div>