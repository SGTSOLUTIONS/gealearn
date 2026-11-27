<p>
    GeoPackage (.gpkg) is an open standard that stores many layers in one SQLite file. It is the modern replacement for the shapefile.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Explain why GeoPackage replaces the shapefile</li>
    <li>Know what one file can hold</li>
    <li>Create a new GeoPackage</li>
    <li>Use it as the default storage format</li>
</ul>

<h3>Shapefile and GeoPackage</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Shapefile: many files</div>
        <div style="padding:15px; text-align:center;">
            <p>Every layer needs .shp, .shx, .dbf and .prj files.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">GeoPackage: one file</div>
        <div style="padding:15px; text-align:center;">
            <p>city.gpkg holds roads, wards, a raster, tables and layer styles.</p>
        </div>
    </div>
</div>

<h3>Why use GeoPackage</h3>
<ul>
    <li><strong>One file</strong> – vector layers, rasters, tables and layer styles together.</li>
    <li><strong>No old limits</strong> – no 10-character field names and no 2 GB shapefile limit.</li>
    <li><strong>Wide support</strong> – QGIS, ArcGIS, GDAL and most GIS software; an open OGC standard.</li>
    <li><strong>Fast</strong> – spatial indexes, and it can be queried with SQL.</li>
</ul>

<h3>Create a GeoPackage</h3>
<ul>
    <li>Layer &gt; Create Layer &gt; New GeoPackage Layer.</li>
    <li>Or use Export &gt; Save Features As and choose GeoPackage.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Make GeoPackage the default storage format for every new project.
    </p>
</div>