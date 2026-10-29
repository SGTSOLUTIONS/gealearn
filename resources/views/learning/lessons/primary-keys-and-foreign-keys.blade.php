{{-- resources/views/learning/lessons/9-6-primary-keys-foreign-keys.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A primary key identifies each row; a foreign key points from one table to a row in another.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the role of primary and foreign keys</li>
    <li>Know what SERIAL does</li>
    <li>Understand referential integrity</li>
</ul>

<h2>Visual Guide: Two Kinds of Keys</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 45%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Primary Key</div>
        <div style="padding: 6px; background: #fff;">Unique id of a row, e.g. wards.ward_id</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 45%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Foreign Key</div>
        <div style="padding: 6px; background: #fff;">Copy of another table's key, e.g. schools.ward_id</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Identifies &rarr; References &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Unique: no duplicates, never NULL</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">References: value must exist</div>
</div>

<p>
    The diagram shows the two kinds of keys. The primary key uniquely identifies a row and cannot be NULL or duplicated. The foreign key refers to the primary key of another table, keeping links valid. Give every table a primary key; QGIS also needs one to edit a layer.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a primary key?</strong> A column (or columns) that uniquely identifies each row; it cannot be NULL or duplicated.</li>
    <li><strong>What is a foreign key?</strong> A column that refers to the primary key of another table.</li>
    <li><strong>Why use foreign keys?</strong> They keep links valid: no school can point to a ward that does not exist.</li>
    <li><strong>Can a table have several foreign keys?</strong> Yes, one for each table it links to.</li>
    <li><strong>Can a key use several columns?</strong> Yes. That is called a composite key.</li>
    <li><strong>What is SERIAL?</strong> An auto-numbering column; the modern form is GENERATED ALWAYS AS IDENTITY.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Give every table a primary key; QGIS also needs one to edit a layer.</p>
</div>