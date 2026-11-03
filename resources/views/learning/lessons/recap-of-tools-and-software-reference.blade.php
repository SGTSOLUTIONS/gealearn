{{-- resources/views/learning/lessons/15-20-recap.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Module 15 is a reference library, not a story. Its 19 pages cover the tools you will meet in almost every GIS project,
    from desktop software to web services. This recap pulls them together into five groups, gives you a practice checklist,
    and points to what comes next.
</p>

<h2>Learning goals</h2>
<ul>
    <li>See how the 19 references fit into five tool groups</li>
    <li>Recall the one-line job of each tool</li>
    <li>Work through a practice checklist that touches every group</li>
</ul>

<h2>Visual Guide: The Five Groups at a Glance</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 19%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1. Desktop</div>
        <div style="padding: 8px; background: #fff; text-align: left;">
            <strong>15.1 QGIS</strong><br>free desktop GIS<br><br>
            <strong>15.2 ArcGIS Pro</strong><br>commercial desktop GIS<br><br>
            <strong>15.7 PyQGIS</strong><br>script QGIS<br><br>
            <strong>15.8 ArcPy</strong><br>script ArcGIS Pro
        </div>
    </div>
    <div style="width: 19%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2. Libraries</div>
        <div style="padding: 8px; background: #fff; text-align: left;">
            <strong>15.3 GDAL</strong><br>raster engine<br><br>
            <strong>15.4 OGR</strong><br>vector engine<br><br>
            <strong>15.5 GeoPandas</strong><br>spatial tables<br><br>
            <strong>15.6 Shapely</strong><br>geometry engine
        </div>
    </div>
    <div style="width: 19%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">3. Database / server</div>
        <div style="padding: 8px; background: #fff; text-align: left;">
            <strong>15.9 PostGIS</strong><br>spatial database<br><br>
            <strong>15.10 PostgreSQL</strong><br>database host<br><br>
            <strong>15.11 GeoServer</strong><br>map server<br><br>
            <strong>15.19 Spatial SQL</strong><br>query language
        </div>
    </div>
    <div style="width: 19%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">4. Web maps</div>
        <div style="padding: 8px; background: #fff; text-align: left;">
            <strong>15.12 OpenLayers</strong><br>full GIS client<br><br>
            <strong>15.13 Leaflet</strong><br>simple maps<br><br>
            <strong>15.14 CesiumJS</strong><br>3D globes
        </div>
    </div>
    <div style="width: 19%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">5. Formats / standards</div>
        <div style="padding: 8px; background: #fff; text-align: left;">
            <strong>15.15 GeoJSON</strong><br>vector exchange<br><br>
            <strong>15.16 WMS</strong><br>map images<br><br>
            <strong>15.17 WFS</strong><br>vector features<br><br>
            <strong>15.18 Coordinate systems</strong><br>EPSG codes
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>One flow:</strong> desktop and libraries prepare the data → the database and server store and publish it → web maps display it → formats and standards hold it all together<br>
    <strong>Rule of thumb:</strong> learn the idea once → find the tool → copy the pattern → check the reference.
</div>

<p>
    The diagram maps all 19 references into the five families introduced on the module's first page, so you can see where each page sits in a real workflow.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does the desktop group do?</strong> QGIS and ArcGIS Pro for interactive work, with PyQGIS and ArcPy to automate it.</li>
    <li><strong>What does the libraries group do?</strong> GDAL and OGR convert and process files, GeoPandas handles spatial tables, and Shapely builds and tests geometries.</li>
    <li><strong>What does the database and server group do?</strong> PostgreSQL hosts PostGIS, which stores geometry and answers spatial SQL; GeoServer publishes that data as WMS and WFS.</li>
    <li><strong>What does the web maps group do?</strong> Leaflet, OpenLayers and CesiumJS display data in the browser: 2D simple, 2D full-featured, and 3D.</li>
    <li><strong>What does the formats and standards group do?</strong> GeoJSON exchanges vectors, WMS and WFS carry them over the web, and EPSG codes keep coordinate systems consistent.</li>
    <li><strong>Which tool should I pick?</strong> Interactive work → QGIS or ArcGIS Pro; batch processing → GDAL, OGR or GeoPandas; large shared data → PostGIS; publishing → GeoServer; display → Leaflet, OpenLayers or CesiumJS.</li>
</ul>

<h2>Practice Checklist</h2>
<div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 12px; margin: 20px 0; background: #fff; font-size: 12px;">
    <ol style="margin: 0; padding-left: 20px; line-height: 1.8;">
        <li>Keep a one-page cheat sheet of your most used QGIS (or ArcGIS Pro) shortcuts.</li>
        <li>Run <code>gdalinfo</code> and <code>ogrinfo</code> on a file, then convert it with <code>ogr2ogr</code>.</li>
        <li>Read, reproject and save a layer with GeoPandas.</li>
        <li>Create a point, a buffer and an intersection with Shapely.</li>
        <li>Run one spatial SQL query in PostGIS and publish the layer in GeoServer.</li>
        <li>Show the layer in Leaflet or OpenLayers using WMS or GeoJSON.</li>
        <li>Check the EPSG code of every dataset before you combine them.</li>
    </ol>
</div>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Treat this module as a lookup, not a lesson to memorise. When a project needs a format, a command or a service, come back to the matching page, copy the pattern, and check the output before you trust it.</p>
</div>

<h2>Next</h2>
<p>
    Module 16 — GIS Practical Examples: your first map, shapefiles, buffers, spatial joins, web GIS apps and more. The references here become the tools you use there.
</p>