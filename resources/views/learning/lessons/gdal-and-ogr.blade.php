
{{-- resources/views/learning/lessons/8-18-gdal-ogr.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GDAL and OGR are important open-source tools used in GIS to read, write,
    convert and process spatial data. GDAL focuses on raster data, while OGR
    handles vector data. They support many GIS formats and are widely used
    in applications such as QGIS and Python GIS workflows.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand GDAL and OGR</li>
    <li>Work with raster and vector datasets</li>
    <li>Use command-line tools for GIS operations</li>
    <li>Access GDAL and OGR through Python</li>
</ul>

<h2>Understanding GDAL and OGR</h2>

<p>
    GDAL (Geospatial Data Abstraction Library) and OGR are components of
    the GDAL project. They provide tools for working with different
    geospatial data formats without needing separate software for each format.
</p>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:15px; margin:20px 0;">

    <div style="border:1px solid #cbd5e1; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">
            GDAL – Raster Data
        </div>
        <div style="padding:15px;">
            <p>Works with raster datasets made up of pixels or grid cells.</p>
            <p><strong>Examples:</strong></p>
            <ul>
                <li>Satellite imagery</li>
                <li>Digital Elevation Models (DEM)</li>
                <li>Land cover rasters</li>
            </ul>
        </div>
    </div>

    <div style="border:1px solid #cbd5e1; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">
            OGR – Vector Data
        </div>
        <div style="padding:15px;">
            <p>Works with vector datasets containing points, lines and polygons.</p>
            <p><strong>Examples:</strong></p>
            <ul>
                <li>Road networks</li>
                <li>Administrative boundaries</li>
                <li>Building locations</li>
            </ul>
        </div>
    </div>

</div>

<h2>Common GDAL and OGR Tools</h2>

<p>
    GDAL and OGR provide command-line utilities that allow GIS users
    to inspect, convert and transform spatial datasets.
</p>

<h3>GDAL Tools for Raster Data</h3>

<div style="  border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">Command</th>
            <th style="padding:10px; text-align:left;">Purpose</th>
        </tr>
        <tr>
            <td style="padding:10px;"><code>gdalinfo</code></td>
            <td style="padding:10px;">Displays raster information.</td>
        </tr>
        <tr>
            <td style="padding:10px;"><code>gdal_translate</code></td>
            <td style="padding:10px;">Converts raster formats.</td>
        </tr>
        <tr>
            <td style="padding:10px;"><code>gdalwarp</code></td>
            <td style="padding:10px;">Reprojects and resamples raster data.</td>
        </tr>
        <tr>
            <td style="padding:10px;"><code>gdal_calc.py</code></td>
            <td style="padding:10px;">Performs raster calculations.</td>
        </tr>
    </table>
</div>

<h3>OGR Tools for Vector Data</h3>

<div style=" border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">Command</th>
            <th style="padding:10px; text-align:left;">Purpose</th>
        </tr>
        <tr>
            <td style="padding:10px;"><code>ogrinfo</code></td>
            <td style="padding:10px;">Displays vector dataset information.</td>
        </tr>
        <tr>
            <td style="padding:10px;"><code>ogr2ogr</code></td>
            <td style="padding:10px;">Converts and reprojects vector data.</td>
        </tr>
    </table>
</div>

<h2>Working with GDAL and OGR Using Commands</h2>

<p>
    Command-line tools make common GIS operations easier to perform.
    For example, a GIS user can convert a shapefile into a GeoPackage
    or reproject a raster dataset without opening a desktop GIS application.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">
        GIS Command Line
    </div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code># Convert shapefile to GeoPackage
ogr2ogr -f GPKG output.gpkg roads.shp

# Reproject vector data
ogr2ogr -f GPKG projected.gpkg roads.shp -t_srs EPSG:4326

# Reproject raster data
gdalwarp -t_srs EPSG:4326 input.tif output.tif

# View raster information
gdalinfo elevation.tif</code></pre>
</div>

<h2>Using GDAL and OGR in Python</h2>

<p>
    GDAL and OGR can also be accessed through Python using the
    <code>osgeo</code> package. This allows developers to automate
    raster and vector processing tasks within Python programs.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">
        gdal_ogr_example.py
    </div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.8; color:#f1f5f9;"><code>from osgeo import gdal, ogr

# Read raster information
raster = gdal.Open("elevation.tif")
print("Raster size:", raster.RasterXSize, raster.RasterYSize)

# Read vector information
vector = ogr.Open("roads.shp")
layer = vector.GetLayer()
print("Number of features:", layer.GetFeatureCount())</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The program opens a raster dataset using
    <code>gdal.Open()</code> and retrieves its dimensions. It then opens
    a vector dataset using <code>ogr.Open()</code> and counts the
    features in its layer.
</p>

<h2>Applications of GDAL and OGR in GIS</h2>

<p>
    These tools are useful in many GIS workflows where spatial data
    needs to be converted, inspected or processed.
</p>

<ul>
    <li><strong>Data conversion:</strong> Convert shapefiles into GeoPackages and raster images into other supported formats.</li>
    <li><strong>Coordinate transformation:</strong> Reproject raster and vector datasets into the required coordinate reference system.</li>
    <li><strong>Raster processing:</strong> Work with satellite imagery, elevation models and other raster datasets.</li>
    <li><strong>Vector processing:</strong> Inspect and convert roads, buildings and administrative boundary datasets.</li>
    <li><strong>Automation:</strong> Integrate spatial data operations into Python scripts and GIS workflows.</li>
</ul>


<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Use <code>gdalinfo</code> to inspect
        raster datasets and <code>ogrinfo</code> to inspect vector datasets
        before starting your GIS processing workflow.
    </p>
</div>
