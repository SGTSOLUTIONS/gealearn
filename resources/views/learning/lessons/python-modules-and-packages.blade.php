{{-- resources/views/learning/lessons/8-12-modules.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Python modules and packages allow you to use existing code without writing
    every function yourself. In GIS programming, libraries such as GeoPandas,
    Shapely and Rasterio provide tools for working with spatial data, geometries
    and raster datasets.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand Python modules and packages</li>
    <li>Import GIS libraries into Python programs</li>
    <li>Install packages using pip</li>
    <li>Organise reusable Python code</li>
</ul>

<h2>Modules and Packages</h2>

<p>
    A <strong>module</strong> is a Python file containing reusable functions,
    classes and variables. A <strong>package</strong> is a collection of
    related modules organised together.
</p>

<p>
    Instead of writing complex GIS operations from scratch, programmers
    import existing libraries and use their built-in functionality.
</p>



<h2>Common Python Libraries Used in GIS</h2>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(160px,1fr)); gap:15px; margin:15px 0;">

    <!-- GeoPandas -->
    <div style="border:2px solid #343744; border-radius:7px; overflow:hidden; background:white;">
        <div style="background:#343744; color:white; text-align:center; padding:8px; font-size:14px; font-weight:bold;">
            1 GeoPandas
        </div>
        <div style="padding:10px; text-align:center; font-size:13px; line-height:1.5;">
            Reads, analyses and manages vector spatial data.
            <p style="margin:8px 0 0;"><code style="font-size:11px;">import geopandas as gpd</code></p>
        </div>
    </div>

    <!-- Shapely -->
    <div style="border:2px solid #00ad75; border-radius:7px; overflow:hidden; background:white;">
        <div style="background:#00ad75; color:white; text-align:center; padding:8px; font-size:14px; font-weight:bold;">
            2 Shapely
        </div>
        <div style="padding:10px; text-align:center; font-size:13px; line-height:1.5;">
            Creates and performs geometric operations.
            <p style="margin:8px 0 0;"><code style="font-size:11px;">from shapely.geometry import Point</code></p>
        </div>
    </div>

    <!-- Rasterio -->
    <div style="border:2px solid #2196f3; border-radius:7px; overflow:hidden; background:white;">
        <div style="background:#2196f3; color:white; text-align:center; padding:8px; font-size:14px; font-weight:bold;">
            3 Rasterio
        </div>
        <div style="padding:10px; text-align:center; font-size:13px; line-height:1.5;">
            Reads, writes and processes raster datasets.
            <p style="margin:8px 0 0;"><code style="font-size:11px;">import rasterio</code></p>
        </div>
    </div>

    <!-- NumPy -->
    <div style="border:2px solid #a020b0; border-radius:7px; overflow:hidden; background:white;">
        <div style="background:#a020b0; color:white; text-align:center; padding:8px; font-size:14px; font-weight:bold;">
            4 NumPy
        </div>
        <div style="padding:10px; text-align:center; font-size:13px; line-height:1.5;">
            Performs numerical calculations and array operations.
            <p style="margin:8px 0 0;"><code style="font-size:11px;">import numpy as np</code></p>
        </div>
    </div>

</div>


<h2>Importing Modules into Python</h2>

<p>
    The <code>import</code> statement makes the functionality of a module
    available in a Python program. Python supports different import styles.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">import_example.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import geopandas as gpd

from shapely.geometry import Point

locations = [Point(80.27, 13.08)]

gdf = gpd.GeoDataFrame(
    geometry=locations,
    crs="EPSG:4326"
)

print(gdf)</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li><code>import geopandas as gpd</code> imports GeoPandas using the shorter name <code>gpd</code>.</li>
    <li><code>from shapely.geometry import Point</code> imports the Point geometry class.</li>
    <li><code>GeoDataFrame()</code> creates a spatial data structure containing the point geometry.</li>
    <li><code>crs="EPSG:4326"</code> assigns the geographic coordinate reference system.</li>
</ul>

<h2>Installing Python Packages</h2>

<p>
    Some Python libraries are not included in the standard Python installation.
    They must be installed before they can be imported into a program.
    The <strong>pip</strong> package manager is commonly used for this purpose.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Terminal</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>pip install geopandas
pip install rasterio
pip install shapely</code></pre>
</div>

<p>
    After installation, import the required libraries into your Python script
    and use their functions for GIS operations.
</p>

<h2>Organising Python Projects</h2>

<p>
    Organising code into separate modules makes GIS projects easier to
    maintain and reuse. Frequently used functions can be stored in separate
    Python files and imported whenever needed.
</p>

<div style="background:#f3f6fa; border:1px solid #d5dce5; border-radius:8px; padding:18px; margin:15px 0;">
    <h3 style="margin-top:0;">Example Project Structure</h3>
    <pre style="font-size:13px; line-height:1.5; margin:0; color:#263445;"><code>GIS_Project/
│
├── main.py
├── gis_tools.py
├── data/
│   └── wards.shp
└── output/</code></pre>
</div>

<p>
    In this structure, <code>main.py</code> contains the main program,
    <code>gis_tools.py</code> stores reusable GIS functions, and the
    <code>data</code> folder contains spatial datasets.
</p>

<h3>Creating and Importing Your Own Module</h3>

<p>
    For example, a reusable function for calculating polygon areas can be
    stored in a separate module.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">gis_tools.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>def calculate_area(geometry):
    return geometry.area / 10000</code></pre>
</div>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">main.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import geopandas as gpd
from gis_tools import calculate_area

gdf = gpd.read_file("data/wards.shp")

gdf["area_ha"] = gdf.geometry.apply(calculate_area)

print(gdf[["area_ha"]])</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The function is defined in
    <code>gis_tools.py</code> and imported into <code>main.py</code>.
    GeoPandas reads the ward boundaries, and the function calculates
    the area of each polygon in hectares.
</p>


<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Install only the libraries required for
        your project and organise reusable GIS functions into separate modules.
    </p>
</div>