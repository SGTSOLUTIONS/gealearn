{{-- resources/views/learning/lessons/15-9-postgis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PostGIS adds spatial types, functions and indexes to PostgreSQL, turning it into a powerful spatial database.
    It lets you store geometry alongside ordinary data and query both with SQL.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Enable PostGIS and create a spatial table</li>
    <li>Choose between geometry and geography</li>
    <li>Add a spatial index for fast queries</li>
</ul>

<h2>Visual Guide: PostGIS Building Blocks</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 31%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Enable</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            CREATE EXTENSION postgis;<br><br>
            SELECT PostGIS_Full_Version();
        </div>
    </div>
    <div style="width: 31%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Store</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            CREATE TABLE ward (<br>
              ward_id serial PRIMARY KEY,<br>
              geom geometry(Polygon, 4326)<br>
            );
        </div>
    </div>
    <div style="width: 31%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Query</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            CREATE INDEX ward_geom_idx<br>
              ON ward USING GIST (geom);<br><br>
            SELECT ST_Area(geom::geography) FROM ward;
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>geometry:</strong> planar shapes in any SRID · <strong>geography:</strong> shapes on the globe, results in metres<br>
    <strong>Rule of thumb:</strong> always add a GiST index on geometry columns.
</div>

<p>
    The diagram shows the three PostGIS steps: enable the extension, create a spatial table with a geometry column, then index and query it.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do I enable PostGIS?</strong> Run <code>CREATE EXTENSION postgis;</code> once per database.</li>
    <li><strong>How do I check the install?</strong> Run <code>SELECT PostGIS_Full_Version();</code>.</li>
    <li><strong>When should I use geometry vs geography?</strong> Use <code>geometry</code> for projected data and <code>geography</code> for global distances in metres.</li>
    <li><strong>Where are coordinate systems stored?</strong> In the <code>spatial_ref_sys</code> table.</li>
    <li><strong>How do I make spatial queries fast?</strong> Always add a GiST index on geometry columns.</li>
    <li><strong>What can connect to PostGIS?</strong> QGIS, GeoServer, GeoPandas and <code>ogr2ogr</code> all connect directly.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use <code>ST_Transform</code> to change SRID; <code>ST_SetSRID</code> only labels the data and does not move it.</p>
</div>