{{-- resources/views/learning/lessons/4-11-data-conversion.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Conversion changes data from one format, coordinate system or data type into another.
    This is a common step when preparing data for analysis or sharing.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the three types of conversion</li>
    <li>Learn the difference between assigning and reprojecting</li>
    <li>Convert between vector and raster data</li>
</ul>

<h2>Visual Guide: Types of Conversion</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Format</strong>
        <div style="margin-top: 8px; display: flex; flex-direction: column; gap: 6px;">
            <div style="display: flex; align-items: center; justify-content: center; gap: 4px;"><span style="border: 1px solid #ccc; padding: 2px 6px; border-radius: 3px; background: #f9f9f9;">Shapefile</span> &rarr; <span style="border: 1px solid #04AA6D; padding: 2px 6px; border-radius: 3px; background: #e8f5e9;">GeoPackage</span></div>
            <div style="display: flex; align-items: center; justify-content: center; gap: 4px;"><span style="border: 1px solid #ccc; padding: 2px 6px; border-radius: 3px; background: #f9f9f9;">GeoJSON</span> &rarr; <span style="border: 1px solid #FF9800; padding: 2px 6px; border-radius: 3px; background: #fff3cd;">KML</span></div>
        </div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">CRS (reproject)</strong>
        <div style="margin-top: 8px; display: flex; flex-direction: column; gap: 6px;">
            <div style="display: flex; align-items: center; justify-content: center; gap: 4px;"><span style="border: 1px solid #ccc; padding: 2px 6px; border-radius: 3px; background: #f9f9f9;">EPSG:4326</span> &rarr; <span style="border: 1px solid #04AA6D; padding: 2px 6px; border-radius: 3px; background: #e8f5e9;">UTM zone</span></div>
            <div style="display: flex; align-items: center; justify-content: center; gap: 4px;"><span style="border: 1px solid #ccc; padding: 2px 6px; border-radius: 3px; background: #f9f9f9;">lat/long</span> &rarr; <span style="border: 1px solid #04AA6D; padding: 2px 6px; border-radius: 3px; background: #e8f5e9;">metres</span></div>
        </div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Data type</strong>
        <div style="margin-top: 8px; display: flex; flex-direction: column; gap: 6px;">
            <div style="display: flex; align-items: center; justify-content: center; gap: 4px;"><span style="border: 1px solid #ccc; padding: 2px 6px; border-radius: 3px; background: #f9f9f9;">CSV</span> &rarr; <span style="border: 1px solid #04AA6D; padding: 2px 6px; border-radius: 3px; background: #e8f5e9;">points</span></div>
            <div style="display: flex; align-items: center; justify-content: center; gap: 4px;"><span style="border: 1px solid #ccc; padding: 2px 6px; border-radius: 3px; background: #f9f9f9;">Vector</span> &rarr; <span style="border: 1px solid #04AA6D; padding: 2px 6px; border-radius: 3px; background: #e8f5e9;">Raster</span></div>
        </div>
    </div>
</div>

<div style="background: #282A35; color: #fff; padding: 10px; border-radius: 6px; font-size: 11px; font-family: Consolas, monospace; margin-bottom: 20px;">
    <strong style="color: #FF9800;">GDAL / OGR command line</strong><br>
    ogr2ogr -f GPKG out.gpkg in.shp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # format<br>
    ogr2ogr -t_srs EPSG:4326 out.shp in.shp &nbsp; # reproject<br>
    gdal_translate -of GTiff in.img out.tif &nbsp;&nbsp;&nbsp;&nbsp; # raster
</div>

<p>
    The diagram shows the three main types of conversion: changing format, changing coordinate system (reprojecting), and changing data type. The code snippet below shows how to perform these same tasks using GDAL/OGR command-line tools for batch processing.
</p>

<h2>Key Points</h2>
<ul>
    <li><strong>Format:</strong> shapefile to GeoPackage, GeoJSON to KML (Save Features As).</li>
    <li><strong>CRS:</strong> reprojecting changes the coordinate values; Assign CRS only corrects a wrong label.</li>
    <li><strong>Type:</strong> CSV to points, vector to raster (Rasterize), raster to vector (Polygonize).</li>
    <li>GDAL / OGR commands convert in batches from the command line.</li>
    <li>After converting, check feature count, CRS and attributes.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Data in the wrong place because the label was wrong: assign. Right place, different CRS needed: reproject.</p>
</div>