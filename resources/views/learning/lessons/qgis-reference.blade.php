{{-- resources/views/learning/lessons/15-tools-software.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Module 15 is a practical reference for the tools and software you will meet in almost every GIS project.
    It moves from desktop GIS through libraries, databases, web maps and open standards, so you can look up a command, a shortcut or a concept when you need it.
    Commands and menu names are shown for current versions and can vary slightly between releases; code snippets are short examples, so adjust file and layer names to match your data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify the main desktop, library, database, web map and format tools used in GIS</li>
    <li>Match each tool to the job it is best suited for</li>
    <li>Know where to find the right command, shortcut or function for a task</li>
    <li>Understand the rule of thumb for choosing a tool and checking your output</li>
</ul>

<h2>Visual Guide: The Five Tool Groups</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 19%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1. Desktop</div>
        <div style="padding: 8px; background: #fff;">
            <strong>QGIS</strong><br>open source<br><br>
            <strong>ArcGIS Pro</strong><br>commercial<br><br>
            <strong>PyQGIS / ArcPy</strong><br>scripting
        </div>
    </div>
    <div style="width: 19%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2. Libraries</div>
        <div style="padding: 8px; background: #fff;">
            <strong>GDAL / OGR</strong><br>raster / vector<br><br>
            <strong>GeoPandas</strong><br>spatial tables<br><br>
            <strong>Shapely</strong><br>geometry engine
        </div>
    </div>
    <div style="width: 19%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">3. Database / server</div>
        <div style="padding: 8px; background: #fff;">
            <strong>PostGIS</strong><br>spatial database<br><br>
            <strong>PostgreSQL</strong><br>database host<br><br>
            <strong>GeoServer</strong><br>map server
        </div>
    </div>
    <div style="width: 19%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">4. Web maps</div>
        <div style="padding: 8px; background: #fff;">
            <strong>OpenLayers</strong><br>full GIS client<br><br>
            <strong>Leaflet</strong><br>simple maps<br><br>
            <strong>CesiumJS</strong><br>3D globes
        </div>
    </div>
    <div style="width: 19%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">5. Formats / standards</div>
        <div style="padding: 8px; background: #fff;">
            <strong>GeoJSON</strong><br>vector exchange<br><br>
            <strong>WMS / WFS</strong><br>web services<br><br>
            <strong>EPSG codes</strong><br>coordinate systems
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Spatial SQL:</strong> the query language that ties the database and server group together<br>
    <strong>Rule of thumb:</strong> learn the idea once, find the tool, copy the pattern, then check the reference.
</div>

<p>
    The diagram groups the 19 references of this module into five families: desktop software, libraries, database and server, web maps, and formats and standards.
</p>

<h2>Key Points (Q&amp;A)</h2>
<ul>
    <li><strong>What is in the desktop group?</strong> QGIS (free, open source) and ArcGIS Pro (commercial, Esri) are the two main desktop GIS. PyQGIS and ArcPy are their Python scripting interfaces.</li>
    <li><strong>What is in the libraries group?</strong> GDAL handles rasters and OGR handles vectors; GeoPandas adds geometry to pandas tables; Shapely creates and tests geometries. These are the building blocks behind many GIS programs.</li>
    <li><strong>What is in the database and server group?</strong> PostGIS adds spatial types and functions to PostgreSQL, and GeoServer publishes that data as web services. Spatial SQL is the query language used with PostGIS.</li>
    <li><strong>What is in the web maps group?</strong> OpenLayers is a full-featured JavaScript map library, Leaflet is small and simple, and CesiumJS renders 3D globes and tiles.</li>
    <li><strong>What is in the formats and standards group?</strong> GeoJSON exchanges vector data, WMS serves map images, WFS serves vector features, and EPSG codes identify coordinate reference systems.</li>
    <li><strong>How do I choose a tool?</strong> Match the tool to the job: QGIS or ArcGIS Pro for interactive work, GDAL/OGR and GeoPandas for batch processing, PostGIS for large shared data, GeoServer for publishing, and Leaflet, OpenLayers or CesiumJS for the web.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep a one-page cheat sheet of your most used shortcuts and commands, run <code>gdalinfo</code> and <code>ogrinfo</code> on every new file, and always check the EPSG code of each dataset before combining layers.</p>
</div>