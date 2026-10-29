{{-- resources/views/learning/lessons/9-8-sql-create-table.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    CREATE TABLE defines the columns, their types, and the rules the data must follow.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Write a basic CREATE TABLE statement</li>
    <li>Add constraints to protect data quality</li>
    <li>Alter or drop a table</li>
</ul>

<h2>Visual Guide: Constraints Protect Data Quality</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">NOT NULL</div>
        <div style="padding: 6px; background: #fff;">A value is required</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">UNIQUE</div>
        <div style="padding: 6px; background: #fff;">No duplicates</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">DEFAULT</div>
        <div style="padding: 6px; background: #fff;">Value used when none is given</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">CHECK</div>
        <div style="padding: 6px; background: #fff;">pop &gt;= 0</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Required &rarr; Unique &rarr; Default &rarr; Valid &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">CREATE TABLE name (col type, ...);</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">geom GEOMETRY(Polygon, 4326)</div>
</div>

<p>
    The diagram shows the constraints that protect data quality. Declare the geometry type and SRID in the column definition. The database rejects bad data, keeping your GIS layers consistent.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the basic syntax?</strong> CREATE TABLE name (column type, ...);</li>
    <li><strong>Which constraints exist?</strong> PRIMARY KEY, NOT NULL, UNIQUE, CHECK, DEFAULT, and FOREIGN KEY.</li>
    <li><strong>How do I add geometry?</strong> Declare geom GEOMETRY(Polygon, 4326) once PostGIS is installed.</li>
    <li><strong>How do I change a table later?</strong> ALTER TABLE wards ADD COLUMN area_ha NUMERIC;</li>
    <li><strong>How do I remove a table?</strong> DROP TABLE wards;</li>
    <li><strong>How do I copy a table?</strong> CREATE TABLE b AS SELECT * FROM a; (add WITH NO DATA for structure only).</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Declare the geometry type and SRID in the column definition.</p>
</div>