
{{-- resources/views/learning/lessons/8-13-geopandas.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoPandas is a powerful Python library used to work with vector
    geographic data. It combines the data manipulation capabilities of
    Pandas with spatial operations, allowing users to read, analyse,
    modify and visualise geographic datasets such as shapefiles and
    GeoPackages.
</p>

<h2>Learning Goals</h2>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(150px,1fr)); gap:10px; margin:15px 0;">

    <div style="border:1px solid #343744; border-radius:7px; overflow:hidden;">
        <div style="background:#343744; color:white; padding:8px; text-align:center; font-weight:bold;">01 Read Data</div>
        <div style="padding:10px; text-align:center; font-size:13px;">Load shapefiles and other vector formats.</div>
    </div>

    <div style="border:1px solid #00ad75; border-radius:7px; overflow:hidden;">
        <div style="background:#00ad75; color:white; padding:8px; text-align:center; font-weight:bold;">02 Manage Data</div>
        <div style="padding:10px; text-align:center; font-size:13px;">Filter, select and modify spatial attributes.</div>
    </div>

    <div style="border:1px solid #2196f3; border-radius:7px; overflow:hidden;">
        <div style="background:#2196f3; color:white; padding:8px; text-align:center; font-weight:bold;">03 Analyse Data</div>
        <div style="padding:10px; text-align:center; font-size:13px;">Perform spatial operations and calculations.</div>
    </div>

    <div style="border:1px solid #a020b0; border-radius:7px; overflow:hidden;">
        <div style="background:#a020b0; color:white; padding:8px; text-align:center; font-weight:bold;">04 Visualise Data</div>
        <div style="padding:10px; text-align:center; font-size:13px;">Create maps using geographic information.</div>
    </div>

</div>

<h2>Introduction to GeoPandas</h2>

<p>
    In traditional data analysis, Pandas works with rows and columns.
    GeoPandas extends this concept by introducing a geometry column
    that stores geographic features such as points, lines and polygons.
</p>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(180px,1fr)); gap:12px; margin:15px 0;">

    <div style="background:#f5f8fc; border:1px solid #343744; border-radius:7px; padding:12px;">
        <h3 style="color:#343744; margin:0 0 8px;">Pandas DataFrame</h3>
        <p style="font-size:13px;">Stores ordinary tabular information such as names, population and area.</p>
        <div style="background:white; padding:8px; border:1px solid #ddd; border-radius:5px; font-size:12px;">
            <strong>Name</strong> &nbsp; Population<br>
            Ward A &nbsp; 5400<br>
            Ward B &nbsp; 4100
        </div>
    </div>

    <div style="background:#f5f8fc; border:1px solid #00ad75; border-radius:7px; padding:12px;">
        <h3 style="color:#00ad75; margin:0 0 8px;">GeoDataFrame</h3>
        <p style="font-size:13px;">Stores attribute information together with geographic geometry.</p>
        <div style="background:white; padding:8px; border:1px solid #ddd; border-radius:5px; font-size:12px;">
            <strong>Name</strong> &nbsp; Population &nbsp; Geometry<br>
            Ward A &nbsp; 5400 &nbsp; Polygon<br>
            Ward B &nbsp; 4100 &nbsp; Polygon
        </div>
    </div>

</div>

<h2>Working with GeoPandas</h2>

<h3>1. Importing the Library</h3>

<p>
    Before performing GIS operations, import GeoPandas into your Python
    program. The commonly used abbreviation is <code>gpd</code>.
</p>

<div style="background:#1e293b; border-radius:7px; overflow:hidden; margin:12px 0;">
    <div style="background:#343f52; color:white; padding:8px 12px; font-size:12px;">Python Code</div>
    <pre style="padding:13px; margin:0; color:#f1f5f9; font-size:13px;"><code>import geopandas as gpd

print(gpd.__version__)</code></pre>
</div>

<p>
    The version command displays the installed GeoPandas version and
    helps confirm that the library is available.
</p>

<h3>2. Reading Vector Data</h3>

<p>
    GeoPandas provides <code>read_file()</code> to load vector datasets
    into a GeoDataFrame. It supports common formats such as Shapefiles
    and GeoPackages.
</p>

<div style="background:#1e293b; border-radius:7px; overflow:hidden; margin:12px 0;">
    <div style="background:#343f52; color:white; padding:8px 12px; font-size:12px;">Reading a Shapefile</div>
    <pre style="padding:13px; margin:0; color:#f1f5f9; font-size:13px;"><code>import geopandas as gpd

wards = gpd.read_file("wards.shp")

print(wards.head())
print(wards.columns)
print(wards.crs)</code></pre>
</div>

<p><strong>What happens here?</strong></p>
<ul>
    <li><code>read_file()</code> loads the spatial dataset.</li>
    <li><code>head()</code> displays the first five records.</li>
    <li><code>columns</code> displays the available attribute fields.</li>
    <li><code>crs</code> displays the coordinate reference system.</li>
</ul>

<h3>3. Filtering Spatial Data</h3>

<p>
    GeoPandas allows users to select geographic records based on
    attribute conditions. For example, population data can be filtered
    to identify wards with more than 5,000 people.
</p>

<div style="background:#1e293b; border-radius:7px; overflow:hidden; margin:12px 0;">
    <div style="background:#343f52; color:white; padding:8px 12px; font-size:12px;">Filtering Example</div>
    <pre style="padding:13px; margin:0; color:#f1f5f9; font-size:13px;"><code>big_wards = wards[wards["pop"] > 5000]

print(big_wards)</code></pre>
</div>

<p>
    This operation selects only the records where the population
    value is greater than 5,000. The selected features retain their
    geographic geometry.
</p>

<h3>4. Coordinate Reference Systems (CRS)</h3>

<p>
    A Coordinate Reference System defines how geographic coordinates
    are represented on the Earth's surface. Correct CRS information
    is essential for accurate spatial measurements and mapping.
</p>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(150px,1fr)); gap:10px; margin:12px 0;">

    <div style="border:1px solid #2196f3; border-radius:7px; padding:11px; background:#f5f8fc;">
        <h3 style="margin:0 0 6px; color:#2196f3; font-size:16px;">EPSG:4326</h3>
        <p style="font-size:13px; margin:0;">Geographic coordinates represented using longitude and latitude.</p>
    </div>

    <div style="border:1px solid #00ad75; border-radius:7px; padding:11px; background:#f5f8fc;">
        <h3 style="margin:0 0 6px; color:#00ad75; font-size:16px;">EPSG:32644</h3>
        <p style="font-size:13px; margin:0;">UTM Zone 44N, a projected coordinate system useful for measurements in its area of use.</p>
    </div>

</div>

<div style="background:#1e293b; border-radius:7px; overflow:hidden; margin:12px 0;">
    <div style="background:#343f52; color:white; padding:8px 12px; font-size:12px;">Reprojecting Data</div>
    <pre style="padding:13px; margin:0; color:#f1f5f9; font-size:13px;"><code>print(wards.crs)

wards_projected = wards.to_crs(epsg=32644)</code></pre>
</div>

<p>
    The <code>to_crs()</code> method transforms coordinates into
    another coordinate reference system. The source CRS must already
    be correctly defined.
</p>

<h3>5. Performing Spatial Operations</h3>

<p>
    GeoPandas provides several spatial operations that help analyse
    relationships between geographic features.
</p>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(145px,1fr)); gap:10px; margin:15px 0;">

    <div style="border:1px solid #343744; border-radius:7px; overflow:hidden;">
        <div style="background:#343744; color:white; padding:7px; text-align:center; font-weight:bold;">Buffer</div>
        <div style="padding:9px; font-size:12px;">Creates a zone around geographic features.</div>
    </div>

    <div style="border:1px solid #00ad75; border-radius:7px; overflow:hidden;">
        <div style="background:#00ad75; color:white; padding:7px; text-align:center; font-weight:bold;">Clip</div>
        <div style="padding:9px; font-size:12px;">Extracts features within a specified boundary.</div>
    </div>

    <div style="border:1px solid #2196f3; border-radius:7px; overflow:hidden;">
        <div style="background:#2196f3; color:white; padding:7px; text-align:center; font-weight:bold;">Dissolve</div>
        <div style="padding:9px; font-size:12px;">Combines features based on common attribute values.</div>
    </div>

    <div style="border:1px solid #a020b0; border-radius:7px; overflow:hidden;">
        <div style="background:#a020b0; color:white; padding:7px; text-align:center; font-weight:bold;">Spatial Join</div>
        <div style="padding:9px; font-size:12px;">Combines records based on spatial relationships.</div>
    </div>

</div>

<h3>6. Creating Maps with GeoPandas</h3>

<p>
    GeoPandas includes a built-in plotting method that allows users
    to create quick visual representations of spatial datasets.
</p>

<div style="background:#1e293b; border-radius:7px; overflow:hidden; margin:12px 0;">
    <div style="background:#343f52; color:white; padding:8px 12px; font-size:12px;">Map Visualisation</div>
    <pre style="padding:13px; margin:0; color:#f1f5f9; font-size:13px;"><code>wards.plot(
    column="pop",
    cmap="YlOrRd",
    legend=True,
    edgecolor="black"
)</code></pre>
</div>

<p>
    The map uses population values to assign different colours to
    geographic features. The legend explains the variation in
    population across the mapped areas.
</p>

<h2>Practical GIS Application: Ward Population Analysis</h2>

<p>
    Consider a municipal GIS project where ward boundary data is
    available as a shapefile. The objective is to identify highly
    populated wards, calculate their areas and prepare a thematic map.
</p>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(145px,1fr)); gap:10px; margin:15px 0;">

    <div style="border:1px solid #343744; border-radius:7px; overflow:hidden;">
        <div style="background:#343744; color:white; padding:7px; text-align:center; font-weight:bold;">Load Data</div>
        <div style="padding:9px; font-size:12px;">Read ward boundaries.</div>
    </div>

    <div style="border:1px solid #00ad75; border-radius:7px; overflow:hidden;">
        <div style="background:#00ad75; color:white; padding:7px; text-align:center; font-weight:bold;">Filter Wards</div>
        <div style="padding:9px; font-size:12px;">Select population above 5,000.</div>
    </div>

    <div style="border:1px solid #2196f3; border-radius:7px; overflow:hidden;">
        <div style="background:#2196f3; color:white; padding:7px; text-align:center; font-weight:bold;">Calculate Area</div>
        <div style="padding:9px; font-size:12px;">Calculate area in hectares.</div>
    </div>

    <div style="border:1px solid #a020b0; border-radius:7px; overflow:hidden;">
        <div style="background:#a020b0; color:white; padding:7px; text-align:center; font-weight:bold;">Create Map</div>
        <div style="padding:9px; font-size:12px;">Visualise population distribution.</div>
    </div>

</div>

<div style="background:#1e293b; border-radius:7px; overflow:hidden; margin:12px 0;">
    <div style="background:#343f52; color:white; padding:8px 12px; font-size:12px;">Complete Python Program</div>
    <pre style="padding:13px; margin:0; color:#f1f5f9; font-size:13px; white-space:pre-wrap;"><code>import geopandas as gpd

# Read ward boundary data
wards = gpd.read_file("wards.shp")

# Reproject to a suitable projected CRS
wards = wards.to_crs(epsg=32644)

# Calculate area in hectares
wards["area_ha"] = wards.geometry.area / 10000

# Filter highly populated wards
big_wards = wards[wards["pop"] > 5000]

# Display selected records
print(big_wards[["pop", "area_ha"]])

# Create population map
big_wards.plot(
    column="pop",
    cmap="YlOrRd",
    legend=True,
    edgecolor="black"
)

# Save the result
big_wards.to_file("big_wards.gpkg")</code></pre>
</div>

<p>
    <strong>Expected outcome:</strong> A filtered GeoDataFrame containing
    highly populated wards, their calculated areas and a thematic map
    showing population distribution. The selected features are also
    saved as a GeoPackage for future GIS analysis.
</p>


<h2>Applications of GeoPandas in GIS</h2>

<ul>
    <li><strong>Urban planning:</strong> Analyse ward boundaries, population distribution and land-use patterns.</li>
    <li><strong>Environmental studies:</strong> Examine protected areas, forest boundaries and environmental features.</li>
    <li><strong>Transportation:</strong> Manage road networks and analyse spatial relationships between transport features.</li>
    <li><strong>Disaster management:</strong> Identify geographic areas affected by floods and other natural hazards.</li>
    <li><strong>Regional planning:</strong> Compare administrative boundaries and regional spatial statistics.</li>
</ul>
