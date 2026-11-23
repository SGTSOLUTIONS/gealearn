```blade
{{-- resources/views/learning/lessons/8-14-shapely.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Shapely is a Python library used to create, manipulate and analyse
    geometric objects. It helps us work with spatial shapes such as points,
    lines and polygons. It is commonly used with GeoPandas when performing
    spatial analysis on geographic data.
</p>

<h2>Understanding Geometries in Shapely</h2>

<p>
    In spatial analysis, real-world objects can be represented using different
    geometric shapes. For example, a city location can be represented as a
    point, a road as a line and a park boundary as a polygon.
    Shapely provides ready-made geometry classes to represent these objects.
</p>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Geometry</th>
                <th>Description</th>
                <th>Example</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Point</td>
                <td>Represents a single location.</td>
                <td>ATM location</td>
            </tr>
            <tr>
                <td>LineString</td>
                <td>Represents a connected sequence of points.</td>
                <td>Road or river</td>
            </tr>
            <tr>
                <td>Polygon</td>
                <td>Represents an enclosed area.</td>
                <td>Park or building boundary</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Creating Geometric Objects</h2>

<p>
    Shapely provides geometry classes that allow us to create spatial objects
    directly using coordinate values. These geometries form the foundation
    for performing spatial operations.
</p>

<pre><code class="language-python">from shapely.geometry import Point, LineString, Polygon

# Create a point
location = Point(78.0, 20.5)

# Create a line
road = LineString([
    (78.0, 20.5),
    (78.5, 21.0),
    (79.0, 21.5)
])

# Create a polygon
park = Polygon([
    (78.0, 20.0),
    (79.0, 20.0),
    (79.0, 21.0),
    (78.0, 21.0)
])

print(location)
print(road)
print(park)</code></pre>

<p>
    Each object stores its geometric shape and coordinates. Once created,
    these objects can be used for measurements, comparisons and spatial
    operations.
</p>

<h2>Performing Geometric Operations</h2>

<p>
    One of the most useful features of Shapely is its ability to perform
    operations between geometries. These operations help identify overlapping
    regions, combine shapes and calculate areas.
</p>

<pre><code class="language-python">from shapely.geometry import box

# Create two rectangular geometries
a = box(0, 0, 4, 3)
b = box(2, 1, 6, 5)

# Find their overlapping region
overlap = a.intersection(b)

# Combine both geometries
combined = a.union(b)

# Find the part of A outside B
remaining = a.difference(b)

print("Intersection area:", overlap.area)
print("Combined area:", combined.area)
print("Remaining area:", remaining.area)</code></pre>

<p>
    The intersection identifies the shared region between two shapes.
    Union combines their areas, while difference returns the portion of
    the first geometry that does not overlap the second.
</p>

<h2>Measuring Geometries</h2>

<p>
    Shapely also provides measurement properties and methods. These are
    useful when calculating the size of an area, the length of a route
    or the distance between two locations.
</p>

<pre><code class="language-python">from shapely.geometry import Point, Polygon

# Create two locations
p1 = Point(0, 0)
p2 = Point(3, 4)

# Calculate distance
print("Distance:", p1.distance(p2))

# Create a rectangular area
area = Polygon([
    (0, 0),
    (5, 0),
    (5, 4),
    (0, 4)
])

print("Area:", area.area)
print("Boundary length:", area.length)
print("Centre:", area.centroid)</code></pre>

<p>
    The distance between the two points is 5 coordinate units.
    The polygon has an area of 20 square coordinate units and a boundary
    length of 18 coordinate units.
</p>

<h2>Checking Spatial Relationships</h2>

<p>
    Sometimes we need to determine how two geometries are related rather
    than calculate their measurements. Shapely provides relationship
    methods that return True or False depending on the spatial condition.
</p>

<pre><code class="language-python">from shapely.geometry import Point, Polygon

# Create a polygon
boundary = Polygon([
    (0, 0),
    (10, 0),
    (10, 10),
    (0, 10)
])

# Create points
inside_point = Point(5, 5)
outside_point = Point(15, 15)

print(boundary.contains(inside_point))
print(boundary.contains(outside_point))
print(boundary.intersects(inside_point))</code></pre>

<p>
    These tests are useful in applications such as checking whether a
    location falls inside a city boundary, whether two roads intersect,
    or whether a point touches the boundary of a particular area.
</p>

<h2>Using Shapely with GeoPandas</h2>

<p>
    Shapely focuses on geometry, while GeoPandas extends this functionality
    by managing geometries together with tabular attributes and coordinate
    reference systems. In a typical GIS workflow, GeoPandas stores geographic
    features and Shapely performs many of the geometric operations on them.
</p>

<pre><code class="language-python">import geopandas as gpd

# Read a spatial dataset
gdf = gpd.read_file("cities.geojson")

# Calculate the centroid of each geometry
gdf["centroid"] = gdf.geometry.centroid

# Calculate geometry area
gdf["area"] = gdf.geometry.area

print(gdf[["area", "centroid"]].head())</code></pre>

<div class="tip">
    <p style="margin:0">
        <strong>Important:</strong> Shapely performs calculations using
        planar coordinates. It does not automatically understand geographic
        coordinate systems. For meaningful area and distance measurements,
        use an appropriate projected CRS, typically through GeoPandas.
    </p>
</div>

<h2>Where Is Shapely Used?</h2>

<ul>
    <li>Finding locations that fall inside administrative boundaries.</li>
    <li>Identifying overlapping land parcels or building footprints.</li>
    <li>Calculating distances between geographic features.</li>
    <li>Creating buffer zones around roads, rivers and facilities.</li>
    <li>Combining, splitting and modifying spatial boundaries.</li>
</ul>

<p>
    Shapely makes geometric analysis easier by providing a consistent set
    of tools for working with spatial shapes. Understanding these operations
    is an important step before moving into more advanced GIS analysis
    with GeoPandas.
</p>
```