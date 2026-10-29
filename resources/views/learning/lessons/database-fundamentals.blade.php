{{-- resources/views/learning/lessons/9-1-database-fundamentals.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A database stores data in an organised way so many people and programs can read, search and update it safely.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what a database and DBMS are</li>
    <li>Know why databases are better than files or spreadsheets</li>
    <li>Understand the client-server model for databases</li>
</ul>

<h2>Visual Guide: How Apps Talk to the DBMS</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">App / GIS Client</div>
        <div style="padding: 6px; background: #fff;">QGIS, Python, web map</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">DBMS</div>
        <div style="padding: 6px; background: #fff;">PostgreSQL, MySQL</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Database</div>
        <div style="padding: 6px; background: #fff;">Tables stored on disk</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Request &rarr; Management &rarr; Storage &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">SELECT name, pop FROM wards</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Spatial database supports geometry</div>
</div>

<p>
    The diagram shows that apps talk to the DBMS, not directly to the files. The DBMS manages access and safety, while the database stores the tables. A spatial database also stores geometry (points, lines, polygons) and can query it.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a database?</strong> An organised collection of data stored so it can be searched and updated quickly.</li>
    <li><strong>What is a DBMS?</strong> Database management system: the software (PostgreSQL, MySQL) that manages the data.</li>
    <li><strong>Why not use files or Excel?</strong> Databases handle many users, large data, rules, and fast queries; shapefiles and spreadsheets scale less well.</li>
    <li><strong>What is a spatial database?</strong> A database that also stores geometry (points, lines, polygons) and can query it.</li>
    <li><strong>What are client and server?</strong> The server runs the DBMS; clients such as QGIS or Python connect to it.</li>
    <li><strong>What is a query?</strong> A request to the database, written in SQL.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep attributes and geometry in one database so every tool sees the same data.</p>
</div>