{{-- resources/views/learning/lessons/11-6-postgis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoServer can publish PostGIS tables directly, so the database stays the single source of truth.
    This is the recommended setup for production environments.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Connect GeoServer to PostGIS</li>
    <li>Publish database tables</li>
    <li>Use spatial indexes</li>
</ul>

<h2>Visual Guide: PostGIS Integration</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">PostGIS</div>
        <div style="padding: 8px; background: #fff;">tables + geometry</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Store</div>
        <div style="padding: 8px; background: #fff;">connection settings</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Layer</div>
        <div style="padding: 8px; background: #fff;">table or SQL view</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Service</div>
        <div style="padding: 8px; background: #fff;">WMS / WFS</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">postgis_store.txt</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            dbtype &nbsp;&nbsp;&nbsp; postgis<br>
            host &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; localhost<br>
            port &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5432<br>
            database &nbsp; city<br>
            schema &nbsp;&nbsp;&nbsp; public<br>
            user &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gis_reader<br>
            password &nbsp; ********
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Good practice</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Primary key on every table</li>
            <li>GiST index on geometry</li>
            <li>Read-only database user</li>
            <li>Sensible connection pool</li>
            <li>SQL views for derived layers</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the PostGIS connection workflow and the good practices for database integration.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Why connect to PostGIS?</strong> Databases handle big, shared and frequently edited data better than files.</li>
    <li><strong>What do I enter?</strong> Host, port, database, schema, user and password.</li>
    <li><strong>Do tables need a primary key?</strong> Yes, for stable feature IDs and for editing through WFS-T.</li>
    <li><strong>What is a spatial index?</strong> A GiST index on the geometry column that speeds up map requests.</li>
    <li><strong>What is an SQL view layer?</strong> A layer defined by a SELECT query, with no new table needed.</li>
    <li><strong>Which user should I use?</strong> A dedicated read-only user, unless editing is needed.</li>
    <li><strong>What is connection pooling?</strong> Reusing database connections; set sensible minimum and maximum values.</li>
    <li><strong>Does the layer update live?</strong> Yes, GeoServer queries the database on each request, unless tiles are cached.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Create the spatial index before publishing a large table.</p>
</div>