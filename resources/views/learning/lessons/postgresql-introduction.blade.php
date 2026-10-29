{{-- resources/views/learning/lessons/9-16-postgresql-introduction.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PostgreSQL is a free, open-source relational database known for reliability and extensions.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand why PostgreSQL is used for GIS</li>
    <li>Know the default port and client tools</li>
    <li>Connect from Python</li>
</ul>

<h2>Visual Guide: How a Client Reaches the Data</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Client</div>
        <div style="padding: 6px; background: #fff;">psql, pgAdmin, QGIS, Python</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">PostgreSQL Server</div>
        <div style="padding: 6px; background: #fff;">default port 5432</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Database</div>
        <div style="padding: 6px; background: #fff;">gisdb</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Request &rarr; Server &rarr; Storage &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">psql -U postgres -d gisdb</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">\l list databases</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">\dt list tables</div>
</div>

<p>
    The diagram shows how a client reaches the data. PostgreSQL is free, open-source, and known for reliability. PostGIS is added as an extension. Use psql for quick checks and pgAdmin for browsing. GeoPandas has read_postgis() to read spatial data directly.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is PostgreSQL?</strong> A free, open-source relational database known for reliability and extensions.</li>
    <li><strong>Why is it used for GIS?</strong> The PostGIS extension adds full spatial support.</li>
    <li><strong>What is the default port?</strong> 5432.</li>
    <li><strong>Which tools can I use?</strong> psql (command line), pgAdmin, DBeaver, and the QGIS DB Manager.</li>
    <li><strong>What are extensions?</strong> Add-on features installed with CREATE EXTENSION.</li>
    <li><strong>How do I connect from Python?</strong> psycopg2 or SQLAlchemy; GeoPandas has read_postgis().</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use psql for quick checks and pgAdmin for browsing.</p>
</div>