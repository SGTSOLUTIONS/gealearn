
{{-- resources/views/learning/lessons/8-9-collections.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Collections are Python data types used to store multiple values in a
    single variable. They are useful in GIS programming for organizing
    geographic information such as coordinates, road names, land parcels
    and attribute data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand lists, tuples and dictionaries</li>
    <li>Store and organize GIS data using collections</li>
    <li>Access and modify collection elements</li>
    <li>Iterate through collections using loops</li>
    <li>Choose suitable collection types for GIS tasks</li>
</ul>

<h2>Collections in Python</h2>

<p>
    Python provides different collection types for storing and managing
    multiple values. Each type has its own structure and purpose.
    The three commonly used collections are lists, tuples and dictionaries.
</p>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(180px,1fr)); gap:12px; margin:20px 0;">

    <div style="border:1px solid #3182ce; border-radius:8px; overflow:hidden;">
        <div style="background:#3182ce; color:white; padding:10px; text-align:center; font-weight:bold;">
            List [ ]
        </div>
        <div style="padding:12px; text-align:center;">
            <div style="font-family:Consolas,monospace; font-size:13px;">
                roads = ["A", "B", "C"]
            </div>
            <p style="font-size:12px; color:#64748b; margin-bottom:0;">
                Ordered and changeable collection
            </p>
        </div>
    </div>

    <div style="border:1px solid #24965a; border-radius:8px; overflow:hidden;">
        <div style="background:#24965a; color:white; padding:10px; text-align:center; font-weight:bold;">
            Tuple ( )
        </div>
        <div style="padding:12px; text-align:center;">
            <div style="font-family:Consolas,monospace; font-size:13px;">
                point = (78.0, 20.5)
            </div>
            <p style="font-size:12px; color:#64748b; margin-bottom:0;">
                Ordered and unchangeable collection
            </p>
        </div>
    </div>

    <div style="border:1px solid #e5a12c; border-radius:8px; overflow:hidden;">
        <div style="background:#e5a12c; color:white; padding:10px; text-align:center; font-weight:bold;">
            Dictionary { }
        </div>
        <div style="padding:12px; text-align:center;">
            <div style="font-family:Consolas,monospace; font-size:13px;">
                ward = {"name": "A"}
            </div>
            <p style="font-size:12px; color:#64748b; margin-bottom:0;">
                Stores key-value pairs
            </p>
        </div>
    </div>

</div>

<h2>1. Lists in Python</h2>

<p>
    A list is an ordered and changeable collection that stores multiple
    values in a single variable. Lists are created using square brackets
    <strong>[ ]</strong>.
</p>

<p>
    In GIS programming, lists can store road names, layer names,
    land-use categories and other groups of geographic information.
    New elements can be added, removed or modified whenever required.
</p>

<h3>Example: Storing Road Names</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        road_list.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code># Create a list of road names
roads = ["Main Road", "Market Road", "Lake Road"]

# Access the first road
print(roads[0])

# Add a new road
roads.append("Temple Road")

# Display all roads
print(roads)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The list stores four road names.
    The index <code>[0]</code> accesses the first element, while
    <code>append()</code> adds a new road name to the end of the list.
</p>

<h3>Accessing and Modifying List Elements</h3>

<p>
    List elements can be accessed using their index positions.
    Python indexing starts at zero. You can also replace an existing
    value or remove an element from the list.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        modify_list.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>land_use = ["Residential", "Agriculture", "Forest"]

# Access an element
print(land_use[1])

# Modify an element
land_use[1] = "Industrial"

# Remove an element
land_use.remove("Forest")

print(land_use)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The program accesses the second
    land-use category, changes it to Industrial and removes the
    Forest category from the list.
</p>

<h2>2. Tuples in Python</h2>

<p>
    A tuple is an ordered collection that cannot be changed after
    it is created. Tuples are written using parentheses <strong>( )</strong>.
</p>

<p>
    In GIS, tuples are useful for storing fixed coordinate values,
    such as longitude and latitude, or projected X and Y coordinates.
    Their values remain unchanged unless a new tuple is created.
</p>

<h3>Example: Storing Geographic Coordinates</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        coordinates.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code># Store longitude and latitude
location = (80.2707, 13.0827)

# Access longitude
longitude = location[0]

# Access latitude
latitude = location[1]

print("Longitude:", longitude)
print("Latitude:", latitude)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The tuple stores the longitude
    and latitude of a location. The first element represents
    longitude, and the second represents latitude.
</p>

<h3>Using Tuples for Multiple Locations</h3>

<p>
    A list can contain multiple tuples to represent several geographic
    locations. This is useful when storing coordinate pairs for
    different points.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        multiple_locations.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code># Store multiple coordinate pairs
locations = [
    (80.2707, 13.0827),
    (80.2206, 13.0674),
    (80.2500, 13.1000)
]

# Display each location
for point in locations:
    print("Longitude:", point[0], "Latitude:", point[1])</code></pre>
</div>

<p>
    <strong>Explanation:</strong> Each tuple represents one location.
    The list stores all three coordinate pairs, and the loop
    displays the coordinates one by one.
</p>

<h2>3. Dictionaries in Python</h2>

<p>
    A dictionary stores data as key-value pairs. Each key identifies
    a value, making it easier to access information using meaningful
    labels instead of numerical index positions.
</p>

<p>
    In GIS, dictionaries are useful for representing feature attributes
    such as road names, population, land-use types, area and administrative
    information. They are created using curly brackets <strong>{ }</strong>.
</p>

<h3>Example: Storing Land Parcel Attributes</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        parcel_attributes.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code># Create a dictionary of parcel attributes
parcel = {
    "Parcel_ID": "P001",
    "Land_Use": "Residential",
    "Area_ha": 2.5,
    "Owner": "Government"
}

# Access attribute values
print("Parcel ID:", parcel["Parcel_ID"])
print("Land Use:", parcel["Land_Use"])
print("Area:", parcel["Area_ha"], "hectares")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The dictionary stores information
    about a land parcel using descriptive keys. Each key is associated
    with a corresponding value. For example, <code>Area_ha</code>
    identifies the parcel area.
</p>

<h3>Adding and Updating Dictionary Values</h3>

<p>
    Dictionary values can be updated or new key-value pairs can be
    added whenever additional attribute information becomes available.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        update_attributes.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>parcel = {
    "Parcel_ID": "P001",
    "Land_Use": "Residential",
    "Area_ha": 2.5
}

# Update an existing attribute
parcel["Land_Use"] = "Commercial"

# Add a new attribute
parcel["District"] = "Chennai"

print(parcel)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The program changes the land-use
    category from Residential to Commercial and adds a new attribute
    called District.
</p>

<h2>Working with GIS Collections</h2>

<p>
    Lists, tuples and dictionaries can be combined to organize
    geographic information. For example, a GIS project may contain
    multiple land parcels, each with its own coordinates and attributes.
</p>

<h3>Example: Organizing Multiple Land Parcels</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        gis_collections.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code># Store land parcel information
parcels = [
    {
        "Parcel_ID": "P001",
        "Land_Use": "Residential",
        "Area_ha": 2.5,
        "Coordinates": (80.2707, 13.0827)
    },
    {
        "Parcel_ID": "P002",
        "Land_Use": "Agriculture",
        "Area_ha": 4.2,
        "Coordinates": (80.2206, 13.0674)
    },
    {
        "Parcel_ID": "P003",
        "Land_Use": "Commercial",
        "Area_ha": 1.8,
        "Coordinates": (80.2500, 13.1000)
    }
]

# Display parcel information
for parcel in parcels:
    print("Parcel ID:", parcel["Parcel_ID"])
    print("Land Use:", parcel["Land_Use"])
    print("Area:", parcel["Area_ha"], "hectares")
    print("Coordinates:", parcel["Coordinates"])
    print("------------------------")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> This program combines all three
    collection types. A list stores multiple parcels, dictionaries
    store their attribute information, and tuples store their
    coordinate pairs. A loop accesses and displays each parcel's data.
</p>

<h2>Using Collections with GeoPandas</h2>

<p>
    Collections are also useful when working with actual GIS datasets.
    For example, a list can store the names of attribute fields that
    need to be selected from a GeoDataFrame.
</p>

<h3>Example: Selecting GIS Attribute Columns</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        select_columns.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>import geopandas as gpd

# Read land parcel data
gdf = gpd.read_file("data/land_parcels.shp")

# Store the required column names in a list
selected_fields = [
    "Parcel_ID",
    "Land_Use",
    "Area_ha"
]

# Select the required attributes
result = gdf[selected_fields]

# Display the selected data
print(result.head())

# Save the selected data
result.to_file(
    "output/selected_parcels.gpkg",
    driver="GPKG"
)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The list stores the names of the
    required attribute columns. GeoPandas uses this list to select
    only those fields from the land parcel dataset. The selected
    information is then saved as a new GeoPackage.
</p>

<h2>Choosing the Right Collection</h2>

<p>
    The appropriate collection type depends on how the data needs
    to be stored and used in a GIS program.
</p>

<div style="overflow-x:auto; margin:18px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:13px;">
        <thead>
            <tr style="background:#293548; color:white;">
                <th style="padding:10px; text-align:left;">Collection</th>
                <th style="padding:10px; text-align:left;">Characteristics</th>
                <th style="padding:10px; text-align:left;">GIS application</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background:#f1f5f9;">
                <td style="padding:10px;"><strong>List</strong></td>
                <td style="padding:10px;">Ordered and changeable</td>
                <td style="padding:10px;">Storing layer names and feature IDs</td>
            </tr>
            <tr>
                <td style="padding:10px;"><strong>Tuple</strong></td>
                <td style="padding:10px;">Ordered and unchangeable</td>
                <td style="padding:10px;">Storing coordinate pairs</td>
            </tr>
            <tr style="background:#f1f5f9;">
                <td style="padding:10px;"><strong>Dictionary</strong></td>
                <td style="padding:10px;">Key-value pairs; changeable</td>
                <td style="padding:10px;">Storing feature attributes</td>
            </tr>
        </tbody>
    </table>
</div>


<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong>
        In GIS programming, collections help organize geographic
        information efficiently. Use lists for groups of features,
        tuples for coordinate values and dictionaries for attribute data.
    </p>
</div>
