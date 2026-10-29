{{-- resources/views/learning/lessons/9-9-sql-insert-data.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    INSERT adds new rows to a table.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Write basic INSERT statements</li>
    <li>Insert geometry using WKT</li>
    <li>Load data from files</li>
</ul>

<h2>Visual Guide: One Statement, One New Row</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Values</div>
        <div style="padding: 6px; background: #fff;">'Ward A', 5400, polygon</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">INSERT INTO</div>
        <div style="padding: 6px; background: #fff;">wards (name, pop, geom)</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">New Row</div>
        <div style="padding: 6px; background: #fff;">appears in the table</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Data &rarr; Statement &rarr; Result &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ST_GeomFromText for WKT</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ST_SetSRID(ST_MakePoint(lon, lat), 4326)</div>
</div>

<p>
    The diagram shows one statement creating one new row. Geometry is written as WKT text. Use single quotes for text values; double quotes only for names. Wrap many inserts in one transaction (BEGIN ... COMMIT) for speed and safety.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the syntax?</strong> INSERT INTO t (cols) VALUES (...);</li>
    <li><strong>How do I insert several rows?</strong> Give several value groups separated by commas.</li>
    <li><strong>Can I insert from another table?</strong> Yes: INSERT INTO a SELECT ... FROM b;</li>
    <li><strong>How do I insert a point from lon/lat?</strong> ST_SetSRID(ST_MakePoint(lon, lat), 4326)</li>
    <li><strong>How do I load whole files?</strong> Use COPY or \copy for CSV, and ogr2ogr or shp2pgsql for GIS files.</li>
    <li><strong>Which quotes are used?</strong> Single quotes for text values; double quotes only for names.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Wrap many inserts in one transaction (BEGIN ... COMMIT) for speed and safety.</p>
</div>