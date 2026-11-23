
{{-- resources/views/learning/lessons/8-8-functions.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Functions are reusable blocks of code that perform specific tasks.
    In GIS programming, functions help automate repetitive operations such
    as calculating polygon areas, measuring road lengths, creating buffers
    and checking attribute data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how functions work in Python</li>
    <li>Define and call functions</li>
    <li>Use parameters, arguments and return values</li>
    <li>Understand default parameters and docstrings</li>
    <li>Apply functions to common GIS operations</li>
</ul>

<h2>Functions in Python</h2>

<p>
    A function is defined using the <strong>def</strong> keyword,
    followed by a function name and parentheses. The statements inside
    the function are executed when the function is called.
</p>

<p>
    Functions allow the same instructions to be reused without writing
    the entire code repeatedly. They also make GIS scripts easier to
    organize, understand and maintain.
</p>

<h3>Basic Structure of a Function</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        function_structure.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.9;"><code>def function_name(parameters):
    # Statements to perform a task
    return result

# Calling the function
function_name(arguments)</code></pre>
</div>

<ul>
    <li><strong>def:</strong> Defines a function.</li>
    <li><strong>Function name:</strong> Identifies the function.</li>
    <li><strong>Parameters:</strong> Receive input values.</li>
    <li><strong>return:</strong> Sends the result back to the caller.</li>
    <li><strong>Function call:</strong> Executes the function.</li>
</ul>

<h2>Defining and Calling a Function</h2>

<p>
    A function can perform a GIS calculation and return its result.
    For example, land parcel areas can be converted from square metres
    into hectares using a reusable function.
</p>

<h3>Example: Calculating Land Parcel Area</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        area_function.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.9;"><code>def calculate_area(area_m2):
    return area_m2 / 10000

# Call the function
result = calculate_area(25000)

print("Land area:", result, "hectares")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The function accepts an area in square
    metres and divides it by 10,000 to convert it into hectares.
    When the function receives 25,000, it returns 2.5 hectares.
</p>

<h2>Parameters, Arguments and Return Values</h2>

<p>
    Functions can receive information, process it and return a result.
    These three concepts are important when developing reusable GIS programs.
</p>

<ul>
    <li><strong>Parameter:</strong> A variable specified in the function definition.</li>
    <li><strong>Argument:</strong> The actual value passed when calling the function.</li>
    <li><strong>Return value:</strong> The result sent back by the function.</li>
</ul>

<h3>Example: Calculating Road Length</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        road_length.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.9;"><code>def calculate_road_length(geometry):
    length_km = geometry.length / 1000
    return length_km

# Example road length in metres
road_length_m = 5000

# Convert to kilometres
result = road_length_m / 1000

print("Road length:", result, "km")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The calculation converts a road length
    from metres into kilometres. In a real GIS dataset, the function can
    receive a road geometry and calculate its length directly.
</p>

<h2>Using Default Parameters</h2>

<p>
    A default parameter provides a predefined value to a function.
    If the caller does not provide another value, Python uses the
    default. This is useful when performing GIS operations with
    commonly used distances.
</p>

<h3>Example: Setting a Default Buffer Distance</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        buffer_distance.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.9;"><code>def create_buffer(geometry, distance=100):
    return geometry.buffer(distance)

# A different distance can be supplied
# when calling the function.
# Example: create_buffer(road_geometry)
# Example: create_buffer(road_geometry, 250)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The function creates a buffer around
    a geographic feature. The default buffer distance is 100 metres.
    A different distance, such as 250 metres, can be supplied when
    calling the function. The geometry should use a projected CRS
    with metre-based units.
</p>



<h2>Applying Functions in GIS</h2>

<p>
    Functions are particularly useful when working with large GIS datasets.
    They allow the same processing operation to be applied to multiple
    geographic features without repeating the code.
</p>

<h3>Example 1: Calculating Areas of Multiple Land Parcels</h3>

<p>
    A polygon layer may contain hundreds or thousands of land parcels.
    A function can calculate the area of each parcel and store the
    measurements in a new attribute field.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        polygon_area.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>import geopandas as gpd

# Define a function to calculate area
def calculate_area(geometry):
    if geometry is None or geometry.is_empty:
        return None

    return geometry.area / 10000

# Read land parcel data
gdf = gpd.read_file("data/land_parcels.shp")

# Reproject to a suitable projected CRS
gdf = gdf.to_crs(gdf.estimate_utm_crs())

# Apply the function to every polygon
gdf["Area_ha"] = gdf.geometry.apply(calculate_area)

# Save the updated dataset
gdf.to_file("output/land_parcels.gpkg", driver="GPKG")

print(gdf[["Area_ha"]])</code></pre>
</div>

<p>
    <strong>Explanation:</strong> GeoPandas reads the land parcel dataset.
    The function calculates the area of each polygon and converts it
    into hectares. The <code>apply()</code> method applies the function
    to every geometry, and the results are stored in a new field called
    <code>Area_ha</code>.
</p>

<h3>Example 2: Creating Buffers Around Roads</h3>

<p>
    Buffer analysis identifies areas within a specified distance of
    geographic features. A reusable function can create buffers around
    all roads in a road network.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        road_buffer.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>import geopandas as gpd

# Define a buffer function
def create_buffer(geometry, distance=100):
    return geometry.buffer(distance)

# Read road network data
roads = gpd.read_file("data/roads.shp")

# Reproject to a suitable projected CRS
roads = roads.to_crs(roads.estimate_utm_crs())

# Create buffers around roads
buffers = roads.copy()
buffers["geometry"] = roads.geometry.apply(
    create_buffer
)

# Save the buffer output
buffers.to_file("output/road_buffers.gpkg", driver="GPKG")

print("Road buffers created successfully!")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The function creates a 100-metre
    buffer around each road feature. The resulting buffer geometries
    are stored in a new GeoDataFrame and exported as a GeoPackage.
</p>

<h3>Example 3: Calculating Road Lengths</h3>

<p>
    Functions can calculate the length of road features and store
    the measurements in an attribute field. This information can
    be used for road network analysis and infrastructure planning.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        calculate_road_length.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>import geopandas as gpd

# Define a function to calculate road length
def calculate_length(geometry):
    if geometry is None or geometry.is_empty:
        return None

    return geometry.length / 1000

# Read road network data
roads = gpd.read_file("data/roads.shp")

# Reproject to a suitable projected CRS
roads = roads.to_crs(roads.estimate_utm_crs())

# Calculate length for each road
roads["Length_km"] = roads.geometry.apply(
    calculate_length
)

# Save the results
roads.to_file("output/road_lengths.gpkg", driver="GPKG")

print(roads[["Length_km"]])</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The function measures each road
    geometry and converts its length from metres into kilometres.
    The calculated values are stored in a new field named
    <code>Length_km</code>.
</p>

<h3>Example 4: Checking Missing Attribute Values</h3>

<p>
    GIS attribute tables may contain missing information, such as
    road names, population values or land-use categories.
    Functions can help identify these missing values before analysis.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        check_attributes.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>import geopandas as gpd
import pandas as pd

# Define a function to check missing values
def check_missing(value):
    if pd.isna(value):
        return "Missing"
    return "Available"

# Read road network data
roads = gpd.read_file("data/roads.shp")

# Check road name attributes
roads["Name_Status"] = roads["Road_Name"].apply(
    check_missing
)

# Display the results
print(roads[["Road_Name", "Name_Status"]])

# Save the updated dataset
roads.to_file("output/checked_roads.gpkg", driver="GPKG")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The function checks whether each
    road name is missing or available. The result is stored in a
    new attribute field called <code>Name_Status</code>.
    This helps identify incomplete information in the road dataset.
</p>

<h2>How Functions Support GIS Workflows</h2>

<p>
    Functions make GIS processing more organized by separating
    individual operations into reusable blocks of code.
    They can be combined to build larger workflows for spatial
    analysis and data management.
</p>

<div style="background:#eef4f0; border:1px solid #cbd8d2; border-radius:8px; padding:16px; margin:18px 0; text-align:center;">

    <div style="background:#dce9f5; border:1px solid #7da8ce; border-radius:6px; padding:12px; margin-bottom:10px;">
        <strong>Input GIS Data</strong>
        <div style="font-size:12px;">Roads, land parcels and administrative boundaries</div>
    </div>

    <div style="font-size:22px; color:#64748b;">↓</div>

    <div style="background:#e0f0e5; border:1px solid #75ae87; border-radius:6px; padding:12px; margin-bottom:10px;">
        <strong>Reusable Python Functions</strong>
        <div style="font-size:12px;">Calculate area · Create buffers · Measure length · Check attributes</div>
    </div>

    <div style="font-size:22px; color:#64748b;">↓</div>

    <div style="background:#fff0d7; border:1px solid #d9ad5c; border-radius:6px; padding:12px;">
        <strong>Processed GIS Data</strong>
        <div style="font-size:12px;">Updated attribute tables and spatial datasets</div>
    </div>

</div>


<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong>
        Create a function for every repeated GIS operation.
        This reduces duplicate code and makes spatial processing
        workflows easier to maintain and reuse.
    </p>
</div>
