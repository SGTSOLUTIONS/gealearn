{{-- resources/views/learning/lessons/8-18-gdal-ogr.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GDAL (raster) and OGR (vector) are the engines behind most GIS software.
    They support a vast number of formats and provide command-line tools for quick conversions.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the difference between GDAL and OGR</li>
    <li>Use command-line tools for conversion</li>
    <li>Access GDAL/OGR from Python</li>
</ul>

<h2>Visual Guide: GDAL/OGR Toolbox</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 48%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-weight: bold; text-align: center;">GDAL (raster)</div>
        <div style="padding: 10px; background: #fff; font-family: Consolas, monospace; font-size: 12px; text-align: left;">
            gdalinfo &nbsp; file details<br>
            gdal_translate &nbsp; convert / clip<br>
            gdalwarp &nbsp; reproject<br>
            gdal_calc.py &nbsp; raster maths
        </div>
    </div>
    <div style="width: 48%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-weight: bold; text-align: center;">OGR (vector)</div>
        <div style="padding: 10px; background: #fff; font-family: Consolas, monospace; font-size: 12px; text-align: left;">
            ogrinfo &nbsp; file details<br>
            ogr2ogr &nbsp; convert / reproject<br><br>
            Python: <code>from osgeo import gdal, ogr</code>
        </div>
    </div>
</div>

<div style="border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff; margin-bottom: 20px;">
    <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">command line</div>
    <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
        ogr2ogr -f GPKG out.gpkg in.shp &nbsp; # convert<br>
        ogr2ogr -t_srs EPSG:4326 out.shp in.shp &nbsp; # reproject<br>
        gdalwarp -t_srs EPSG:4326 in.tif out.tif &nbsp; # raster<br>
        gdalinfo dem.tif &nbsp; # inspect
    </div>
</div>

<p>
    The diagram shows the main command-line tools for GDAL and OGR, along with their Python import.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>GDAL or OGR?</strong> GDAL handles rasters; OGR handles vectors. They ship together.</li>
    <li><strong>Which command-line tools exist?</strong> gdalinfo, gdal_translate, gdalwarp, ogrinfo, ogr2ogr.</li>
    <li><strong>How do I use them in Python?</strong> <code>from osgeo import gdal, ogr</code>.</li>
    <li><strong>How do I convert a vector file?</strong> <code>ogr2ogr -f GPKG out.gpkg in.shp</code>.</li>
    <li><strong>How do I reproject a raster?</strong> <code>gdalwarp -t_srs EPSG:4326 in.tif out.tif</code>.</li>
    <li><strong>Why does it matter?</strong> QGIS, GeoPandas, Rasterio and many others rely on it, and it supports a very large number of formats.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use the command-line tools for quick conversions.</p>
</div>