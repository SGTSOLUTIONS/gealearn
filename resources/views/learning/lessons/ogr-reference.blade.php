{{-- resources/views/learning/lessons/15-4-ogr.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    OGR is the vector half of GDAL. It reads, converts, filters and reprojects shapefiles, GeoJSON, GeoPackage and spatial databases,
    and <code>ogr2ogr</code> is the most useful GIS conversion command to learn.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Inspect and convert vector data from the command line</li>
    <li>Reproject and filter while converting</li>
    <li>Load vector data into PostGIS</li>
</ul>

<h2>Visual Guide: OGR Command-Line Examples</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 48%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Inspect and convert</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            ogrinfo -so parcels.shp parcels<br><br>
            ogr2ogr -f GeoJSON out.geojson parcels.shp<br><br>
            ogr2ogr -t_srs EPSG:4326 out.shp in.shp
        </div>
    </div>
    <div style="width: 48%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Filter and load</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            ogr2ogr -where "land_use='Park'" parks.shp parcels.shp<br><br>
            ogr2ogr -f PostgreSQL PG:"dbname=gis" parcels.shp
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Formats:</strong> Shapefile, GeoJSON, GeoPackage, KML, CSV, PostGIS and more<br>
    <strong>Rule of thumb:</strong> run <code>ogrinfo -so</code> on any new file first to see its CRS, fields and feature count.
</div>

<p>
    The diagram separates the four things <code>ogr2ogr</code> does most often: inspect, convert, reproject or filter, and load into a database.
</p>

<h2>Key Points (Q&amp;A)</h2>
<ul>
    <li><strong>What is OGR?</strong> The vector half of GDAL; it reads, converts, filters and reprojects vector data.</li>
    <li><strong>Which command should I learn first?</strong> <code>ogr2ogr</code> is the most useful GIS conversion command to learn.</li>
    <li><strong>Which formats are supported?</strong> Shapefile, GeoJSON, GeoPackage, KML, CSV, PostGIS and more; run <code>ogrinfo --formats</code> to list them.</li>
    <li><strong>How do I choose the output format?</strong> Use <code>-f</code>, e.g. GPKG, GeoJSON, "ESRI Shapefile".</li>
    <li><strong>How do I reproject while converting?</strong> Use <code>-t_srs</code>.</li>
    <li><strong>How do I use it from Python?</strong> <code>from osgeo import ogr</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Run <code>ogrinfo -so</code> on any new file first to see its CRS, fields and feature count.</p>
</div>