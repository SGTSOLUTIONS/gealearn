{{-- resources/views/learning/lessons/15-3-gdal.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GDAL is the core library for reading, writing and converting raster data. Its command-line tools work in any script or terminal,
    and QGIS and many other GIS programs use GDAL internally.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Inspect, convert and reproject rasters from the command line</li>
    <li>Know the key GDAL commands</li>
    <li>Check output and save disk space</li>
</ul>

<h2>Visual Guide: GDAL Command-Line Examples</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 48%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Inspect and convert</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            gdalinfo dem.tif<br><br>
            gdal_translate -of GTiff in.jp2 out.tif<br><br>
            gdalwarp -t_srs EPSG:32644 in.tif out.tif
        </div>
    </div>
    <div style="width: 48%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Analyse</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            gdaldem slope dem.tif slope.tif<br><br>
            gdal_calc.py -A in.tif --outfile=out.tif --calc="A*2"<br><br>
            gdal_polygonize.py class.tif out.shp
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Formats:</strong> GeoTIFF, JPEG2000, NetCDF and many databases<br>
    <strong>Rule of thumb:</strong> always check the output with <code>gdalinfo</code> after converting or reprojecting.
</div>

<p>
    The diagram shows the two everyday groups of GDAL commands: inspecting and converting files, and analysing or extracting data.
</p>

<h2>Key Points (Q&amp;A)</h2>
<ul>
    <li><strong>What does GDAL handle?</strong> Rasters; its vector side is called OGR (next topic).</li>
    <li><strong>What formats does it support?</strong> More than 150, including GeoTIFF, JPEG2000, NetCDF and many databases.</li>
    <li><strong>Who uses GDAL?</strong> QGIS and many other GIS programs use it internally.</li>
    <li><strong>How do I use it from Python?</strong> <code>from osgeo import gdal</code> gives you the GDAL bindings.</li>
    <li><strong>How do I check output?</strong> Always run <code>gdalinfo</code> after converting or reprojecting.</li>
    <li><strong>How do I save disk space?</strong> Add <code>-co COMPRESS=DEFLATE</code> to GeoTIFF outputs.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Put repeated commands in a script (<code>.bat</code> or <code>.sh</code>) to process many files in one run.</p>
</div>