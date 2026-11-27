<p>
    Conversion changes data from one format, coordinate system or data type into another.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Convert between formats</li>
    <li>Tell reprojecting from assigning a CRS</li>
    <li>Convert between data types</li>
    <li>Use GDAL and OGR commands</li>
</ul>

<h3>Three kinds of conversion</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Format</div>
        <div style="padding:15px; text-align:center;">
            <p>Shapefile to GeoPackage; GeoJSON to KML.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">CRS (reproject)</div>
        <div style="padding:15px; text-align:center;">
            <p>EPSG:4326 (lat/long) to a UTM zone (metres).</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Data type</div>
        <div style="padding:15px; text-align:center;">
            <p>CSV to points; vector to raster; raster to vector.</p>
        </div>
    </div>
</div>

<h3>GDAL / OGR command line</h3>
<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">GDAL / OGR</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code>ogr2ogr -f GPKG out.gpkg in.shp
ogr2ogr -t_srs EPSG:4326 out.shp in.shp
gdal_translate -of GTiff in.img out.tif 
# format
# reproject
# raster </code></pre>
</div>

<h3>Key points</h3>
<ul>
    <li><strong>Reprojecting</strong> changes the coordinate values; <strong>Assign CRS</strong> only corrects a wrong label.</li>
    <li>Vector to raster uses Rasterize; raster to vector uses Polygonize.</li>
    <li>After converting, check feature count, CRS and attributes.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Data in the wrong place because the label was wrong: assign. Right place but a different CRS needed: reproject.
    </p>
</div>