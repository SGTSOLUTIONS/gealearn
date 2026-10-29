{{-- resources/views/learning/lessons/8-29-recap.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The 28 topics go from Python basics to GIS libraries and APIs, then to automation and finished tools.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Review the complete programming workflow</li>
    <li>Check your understanding with the practice checklist</li>
</ul>

<h2>Visual Guide: The Programming Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; text-align: center; margin: 30px 0; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Python core</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            8.1&ndash;8.2 Languages<br>8.3 Basics<br>8.4&ndash;8.5 Types, operators<br>8.6&ndash;8.7 Logic, loops<br>8.8 Functions<br>8.9 Collections<br>8.10&ndash;8.11 Files, errors<br>8.12 Packages
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Libraries</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            8.13 GeoPandas<br>8.14 Shapely<br>8.15 Fiona<br>8.16 Rasterio<br>8.17 PyProj<br>8.18 GDAL / OGR<br>8.19 NumPy<br>8.20 Pandas<br>8.21 Matplotlib
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 GIS APIs</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            8.22 PyQGIS<br>8.23 ArcPy
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Automate</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            8.24 Scripts<br>8.25 Batch
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">5 Build</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            8.26 Processing<br>8.27 Custom tools<br>8.28 Projects
        </div>
    </div>
</div>
<div style="text-align: center; font-weight: bold; font-size: 14px; color: #04AA6D; margin-bottom: 20px;">
    Learn Python &gt; Use libraries &gt; Call GIS APIs &gt; Automate &gt; Build tools
</div>

<p>
    The diagram summarises the entire module as a five-stage pipeline, moving from Python basics to finished tools.
</p>

<h2>Key Points (Practice Checklist)</h2>
<ul>
    <li>Write a script that prints the name and population of every ward in a CSV.</li>
    <li>Read a shapefile with GeoPandas, reproject it and save it as GeoPackage.</li>
    <li>Use Shapely to buffer a point and test which points fall inside.</li>
    <li>Read a DEM with Rasterio and calculate the percentage of cells steeper than 15 degrees.</li>
    <li>Loop over a folder of files and convert each one, skipping any that fail.</li>
    <li>Turn one of your scripts into a QGIS Processing script with a dialog.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Next:</strong> Module 9 &mdash; Database and Spatial SQL (SQL, PostgreSQL, PostGIS, spatial queries and indexing).</p>
</div>