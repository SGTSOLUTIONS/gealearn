{{-- resources/views/learning/lessons/9-7-sql-create-database.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A database is the container for your tables; schemas group tables inside it.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a database and schema</li>
    <li>Connect to a database</li>
    <li>Understand the server &gt; database &gt; schema &gt; tables hierarchy</li>
</ul>

<h2>Visual Guide: Server, Database, Schema, Tables</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Server</div>
        <div style="padding: 6px; background: #fff;">One PostgreSQL installation</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Database</div>
        <div style="padding: 6px; background: #fff;">gisdb</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Schema</div>
        <div style="padding: 6px; background: #fff;">city</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Tables</div>
        <div style="padding: 6px; background: #fff;">wards, schools, roads</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Container &rarr; Project &rarr; Folder &rarr; Data &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">CREATE DATABASE gisdb;</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">CREATE SCHEMA city;</div>
</div>

<p>
    The diagram shows the hierarchy. Create one database per project and use schemas to group related tables. Connect with \c gisdb in psql, or choose it in pgAdmin or QGIS. DROP DATABASE is permanent: take a backup first.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do I create a database?</strong> CREATE DATABASE gisdb;</li>
    <li><strong>How do I connect to it?</strong> \c gisdb in psql, or choose it in pgAdmin or QGIS.</li>
    <li><strong>What is a schema?</strong> A folder of tables inside a database: CREATE SCHEMA city;</li>
    <li><strong>How do I delete a database?</strong> DROP DATABASE gisdb; It is permanent: take a backup first.</li>
    <li><strong>Is MySQL the same?</strong> In MySQL, database and schema mean the same thing.</li>
    <li><strong>Which tools can I use?</strong> psql, pgAdmin, DBeaver, or the QGIS DB Manager.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Create one database per project and use schemas to group related tables.</p>
</div>