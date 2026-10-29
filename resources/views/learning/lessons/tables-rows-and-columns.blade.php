{{-- resources/views/learning/lessons/9-5-tables-rows-columns.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A table holds records (rows); each column holds one kind of value.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand rows and columns</li>
    <li>Know common column types</li>
    <li>Understand NULL values and spatial tables</li>
</ul>

<h2>Visual Guide: Rows and Columns in a Spatial Table</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 45%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Row</div>
        <div style="padding: 6px; background: #fff;">One feature (one ward)</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 45%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Column</div>
        <div style="padding: 6px; background: #fff;">One field (name, pop, geom)</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Record &rarr; Field &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">INTEGER, NUMERIC, TEXT, DATE</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">GEOMETRY(Polygon, 4326)</div>
</div>

<p>
    The diagram shows a spatial table. The row is one feature (one ward). The column is one property. The geom column holds the shapes. Pick the right type: numbers belong in numeric columns, not text.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a row?</strong> One record, such as one ward (a feature in GIS).</li>
    <li><strong>What is a column?</strong> One field with a fixed data type.</li>
    <li><strong>Which column types are common?</strong> INTEGER, NUMERIC, TEXT or VARCHAR, DATE, BOOLEAN, and geometry.</li>
    <li><strong>What is NULL?</strong> A missing or unknown value; it is not zero or empty text.</li>
    <li><strong>What is a spatial table?</strong> A table that has a geometry column.</li>
    <li><strong>How do I see a table's structure?</strong> \d wards in psql, or query information_schema.columns.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Pick the right type: numbers belong in numeric columns, not text.</p>
</div>