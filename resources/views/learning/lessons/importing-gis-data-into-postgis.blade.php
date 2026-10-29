{{-- resources/views/learning/lessons/9-24-importing-gis-data.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Several tools load shapefiles, GeoPackages, CSV files, and rasters into PostGIS tables.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know the tools for importing data</li>
    <li>Use shp2pgsql and ogr2ogr</li>
    <li>Verify an import</li>
</ul>

<h2>Visual Guide: Ways to Import</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">shp2pgsql</div>
        <div style="padding: 6px; background: #fff;">shapefiles to SQL</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">ogr2ogr</div>
        <div style="padding: 6px; background: #fff;">almost any vector format</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">QGIS DB Manager</div>
        <div style="padding: 6px; background: #fff;">drag and drop layers</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">GeoPandas</div>
        <div style="padding: 6px; background: #fff;">to_postgis()</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Shapefile &rarr; Any Format &rarr; GUI &rarr; Python &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">-I creates spatial index</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">-s sets the SRID</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">raster2pgsql for rasters</div>
</div>

<p>
    The diagram shows the tools for importing GIS data. After every import: count the rows, check the SRID, and view the layer in QGIS. If the CRS is wrong, check ST_SRID; set the correct one on import with -s. Load a CSV with coordinates using COPY, then build points with ST_MakePoint(lon, lat) and ST_SetSRID.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Which tools can import?</strong> shp2pgsql, ogr2ogr, QGIS DB Manager, and GeoPandas to_postgis().</li>
    <li><strong>What do the shp2pgsql options do?</strong> -I creates a spatial index; -s sets the SRID.</li>
    <li><strong>How do I load a raster?</strong> raster2pgsql loads rasters into PostGIS raster tables.</li>
    <li><strong>How do I load a CSV with coordinates?</strong> Load it with COPY, then build points with ST_MakePoint(lon, lat) and ST_SetSRID.</li>
    <li><strong>What if the CRS is wrong?</strong> Check ST_SRID; set the correct one on import with -s.</li>
    <li><strong>How do I verify an import?</strong> Compare SELECT COUNT(*) with the source file and open it in QGIS.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> After every import: count the rows, check the SRID, and view the layer in QGIS.</p>
</div>