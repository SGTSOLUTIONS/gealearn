{{-- resources/views/learning/lessons/4-5-geopackage.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoPackage (.gpkg) is an open standard that stores many layers in one SQLite file. It is the modern replacement for the shapefile.
    It is fast, compact, and supported by almost all GIS software.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the advantages of GeoPackage over shapefile</li>
    <li>Learn what can be stored inside a GeoPackage</li>
    <li>Create a new GeoPackage layer</li>
</ul>

<h2>Visual Guide: Shapefile vs. GeoPackage</h2>
<div style="display: flex; align-items: center; justify-content: space-between; margin: 20px 0;">
    <div style="width: 40%; border: 2px solid #999; border-radius: 6px; padding: 10px; background: #f9f9f9;">
        <div style="text-align: center; font-weight: bold; font-size: 13px; margin-bottom: 8px;">Shapefile: many files</div>
        <div style="display: flex; flex-direction: column; gap: 6px; font-size: 11px;">
            <div style="display: flex; gap: 4px;">
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.shp</div>
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.shx</div>
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.dbf</div>
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.prj</div>
            </div>
            <div style="display: flex; gap: 4px;">
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.shp</div>
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.shx</div>
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.dbf</div>
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.prj</div>
            </div>
            <div style="display: flex; gap: 4px;">
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.shp</div>
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.shx</div>
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.dbf</div>
                <div style="flex: 1; border: 1px solid #ccc; padding: 4px; text-align: center; background: #fff;">.prj</div>
            </div>
        </div>
    </div>
    <div style="width: 15%; text-align: center; font-size: 12px; color: #FF9800; font-weight: bold;">combine<br><span style="font-size: 20px;">&rarr;</span></div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden; background: #fff;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; text-align: center; font-weight: bold; font-size: 13px;">city.gpkg (one file)</div>
        <div style="display: flex; flex-wrap: wrap; gap: 4px; padding: 8px;">
            <div style="width: 48%; border: 1px solid #04AA6D; padding: 5px; font-size: 11px; text-align: center; border-radius: 3px;">roads (lines)</div>
            <div style="width: 48%; border: 1px solid #04AA6D; padding: 5px; font-size: 11px; text-align: center; border-radius: 3px;">wards (polygons)</div>
            <div style="width: 48%; border: 1px solid #2196F3; padding: 5px; font-size: 11px; text-align: center; border-radius: 3px;">dem (raster)</div>
            <div style="width: 48%; border: 1px solid #FF9800; padding: 5px; font-size: 11px; text-align: center; border-radius: 3px;">attribute table</div>
            <div style="width: 100%; border: 1px solid #999; padding: 5px; font-size: 11px; text-align: center; border-radius: 3px;">layer styles</div>
        </div>
    </div>
</div>
<div style="text-align: center; font-size: 11px; color: #666; margin-bottom: 20px;">Open OGC standard &bull; SQLite based</div>

<p>
    The diagram shows the key advantage: a GeoPackage combines many separate shapefiles into a single, self-contained database file. It can hold vectors, rasters, and tables side by side without the 10-character field limit or 2 GB size limit.
</p>

<h2>Key Points</h2>
<ul>
    <li>One file can hold <strong>vector layers, rasters, tables and layer styles</strong>.</li>
    <li>No 10-character field-name limit and no 2 GB shapefile limit.</li>
    <li>Supported by QGIS, ArcGIS, GDAL and most GIS software.</li>
    <li>Fast: it has spatial indexes and can be queried with SQL.</li>
    <li>Create one: <strong>Layer &gt; Create Layer &gt; New GeoPackage Layer</strong>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Make GeoPackage the default storage format for every new project.</p>
</div>