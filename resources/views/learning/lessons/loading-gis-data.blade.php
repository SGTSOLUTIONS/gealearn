{{-- resources/views/learning/lessons/3-6-loading-data.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Data is added to a project from files, databases, or web services.
    QGIS supports many formats, from simple vector files to complex web map tiles.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Learn how to load vector, raster, and tabular data</li>
    <li>Use the Data Source Manager</li>
    <li>Understand the importance of keeping shapefile components together</li>
</ul>

<h2>Visual Guide: Loading Data Flow</h2>
<div style="display: flex; align-items: center; justify-content: space-between; margin: 20px 0;">
    <div style="width: 30%; display: flex; flex-direction: column; gap: 8px;">
        <div style="border: 2px solid #282A35; border-radius: 6px; padding: 6px 10px; font-size: 12px;"><strong>Vector:</strong> .shp, .geojson, .gpkg, .kml</div>
        <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 6px 10px; font-size: 12px;"><strong>Raster:</strong> .tif, DEM, imagery</div>
        <div style="border: 2px solid #2196F3; border-radius: 6px; padding: 6px 10px; font-size: 12px;"><strong>Tabular:</strong> .csv, .xlsx (X, Y columns)</div>
        <div style="border: 2px solid #FF9800; border-radius: 6px; padding: 6px 10px; font-size: 12px;"><strong>Web Services:</strong> WMS, WFS, XYZ tiles</div>
    </div>
    <div style="width: 10%; text-align: center; font-size: 20px; color: #999;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; text-align: center; background: #282A35; color: #fff;">
        <div style="padding: 15px; font-size: 14px; font-weight: bold;">Data Source Manager<br><span style="font-size: 12px; font-weight: normal;">Ctrl+L &nbsp;|&nbsp; Layer > Add Layer</span></div>
    </div>
    <div style="width: 10%; text-align: center; font-size: 20px; color: #999;">&rarr;</div>
    <div style="width: 20%; display: flex; flex-direction: column; gap: 8px;">
        <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 8px; text-align: center; font-size: 12px;">Layers panel<br><span style="font-size: 10px; color: #666;">(layer appears in list)</span></div>
        <div style="border: 2px solid #2196F3; border-radius: 6px; padding: 8px; text-align: center; font-size: 12px;">Map canvas<br><span style="font-size: 10px; color: #666;">(data is drawn)</span></div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li>Menu: <strong>Layer > Add Layer</strong> – vector, raster, delimited text (CSV) and more.</li>
    <li>Fastest way: <strong>drag a file</strong> from the Browser panel or folder onto the map canvas.</li>
    <li><strong>Data Source Manager (Ctrl+L)</strong> gathers every source type in one window.</li>
    <li>Web data such as <strong>XYZ tiles</strong> (OpenStreetMap), WMS and WFS can be added directly.</li>
    <li>A shapefile is several files (.shp, .shx, .dbf, .prj) – keep them together.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> After loading, glance at the layer's CRS (right-click > Layer CRS) before you analyse.</p>
</div>