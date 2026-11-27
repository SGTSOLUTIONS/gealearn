<p>
    Data is added to a project from files, databases or web services. QGIS can read
    most common GIS formats directly, so you rarely need to convert files before
    opening them. Choosing a sensible default format such as GeoPackage avoids many
    common problems later.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Add vector, raster and tabular data</li>
    <li>Use the Data Source Manager</li>
    <li>Add web services</li>
</ul>

<h3>Data types</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #cbd5e1; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Vector</div>
        <div style="padding:15px; text-align:center;"><p><code>.shp</code>, <code>.geojson</code>, <code>.gpkg</code>, <code>.kml</code></p></div>
    </div>
    <div style="border:1px solid #cbd5e1; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Raster</div>
        <div style="padding:15px; text-align:center;"><p><code>.tif</code>, DEM, imagery</p></div>
    </div>
    <div style="border:1px solid #cbd5e1; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Tabular</div>
        <div style="padding:15px; text-align:center;"><p><code>.csv</code>, <code>.xlsx</code> with x and y columns</p></div>
    </div>
    <div style="border:1px solid #cbd5e1; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#6d28d9; color:white; padding:12px; font-weight:bold; text-align:center;">Web services</div>
        <div style="padding:15px; text-align:center;"><p>WMS, WFS and XYZ tiles</p></div>
    </div>
</div>

<h3>Ways to add data</h3>
<ul>
    <li><strong>Menu:</strong> Layer &gt; Add Layer (vector, raster, delimited text and more).</li>
    <li><strong>Drag and drop:</strong> drag a file from the Browser panel or a folder onto the map canvas.</li>
    <li><strong>Data Source Manager:</strong> <code>Ctrl+L</code> gathers every source type in one window.</li>
</ul>

<h3>Which vector format?</h3>
<ul>
    <li><strong>Shapefile (.shp)</strong> – very common but made of several files, with short field names. Keep <code>.shp</code>, <code>.shx</code>, <code>.dbf</code> and <code>.prj</code> together.</li>
    <li><strong>GeoPackage (.gpkg)</strong> – one modern file that can hold many layers. The best default.</li>
    <li><strong>GeoJSON (.geojson)</strong> – text based and popular for web maps.</li>
</ul>

<h3>Add a CSV with coordinates</h3>
<ol>
    <li>Open Layer &gt; Add Layer &gt; Add Delimited Text Layer.</li>
    <li>Choose the CSV file.</li>
    <li>Set X field = longitude and Y field = latitude.</li>
    <li>Set the Geometry CRS to EPSG:4326, then click Add.</li>
</ol>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> After loading, glance at the layer's CRS
        (right-click &gt; Layer CRS) before you analyse, because a wrong CRS makes
        every measurement unreliable.
    </p>
</div>