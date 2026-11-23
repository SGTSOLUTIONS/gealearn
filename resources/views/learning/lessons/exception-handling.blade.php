```blade
{{-- resources/views/learning/lessons/8-14-shapely.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Shapely is a Python library used to create, manipulate and analyse
    geometric objects such as points, lines and polygons. It is an important
    library in GIS applications and works closely with GeoPandas to perform
    spatial operations on geographic data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand geometric objects in Shapely</li>
    <li>Create points, lines and polygons</li>
    <li>Perform geometric operations such as intersection, union and buffer</li>
    <li>Measure distances, lengths and areas</li>
    <li>Identify spatial relationships between geometries</li>
    <li>Apply Shapely operations in GIS workflows</li>
</ul>

<h2>Understanding Geometries in Shapely</h2>

<p>
    In GIS, real-world features are represented using geometric objects.
    For example, a city location can be represented as a point, a road as
    a line and a park boundary as a polygon.
</p>

<p>
    Shapely provides different geometry classes to represent these spatial
    features. These geometries store coordinate information and allow us
    to perform mathematical and spatial operations.
</p>

<h3>1. Point Geometry</h3>

<p>
    A <strong>Point</strong> represents a single location using X and Y
    coordinates. In GIS applications, points are commonly used to represent
    schools, hospitals, bus stops and other individual locations.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">point_geometry.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Point

# Create a point using coordinates
location = Point(78.0, 20.5)

# Display point information
print(location)
print("X Coordinate:", location.x)
print("Y Coordinate:", location.y)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The Point() function creates a point
    using the supplied coordinates. The x and y properties return the
    individual coordinate values.
</p>

<h3>2. LineString Geometry</h3>

<p>
    A <strong>LineString</strong> represents a connected sequence of two
    or more points. It is useful for representing roads, rivers, pipelines
    and transportation routes.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">linestring_geometry.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">from shapely.geometry import LineString

# Create a road using multiple coordinates
road = LineString([
    (78.0, 20.0),
    (78.5, 20.5),
    (79.0, 21.0)
])

print(road)
print("Road Length:", road.length)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The LineString() function connects
    the supplied coordinates in sequence to create a continuous line.
    Its length property calculates the total planar length of the line
    in the units of the coordinates.
</p>

<h3>3. Polygon Geometry</h3>

<p>
    A <strong>Polygon</strong> represents an enclosed area formed by
    connecting coordinates. In GIS, polygons are commonly used to represent
    land parcels, lakes, buildings, administrative boundaries and parks.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">polygon_geometry.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Polygon

# Create a rectangular polygon
park = Polygon([
    (78.0, 20.0),
    (79.0, 20.0),
    (79.0, 21.0),
    (78.0, 21.0)
])

print(park)
print("Area:", park.area)
print("Boundary Length:", park.length)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The Polygon() function creates an
    enclosed area from the given coordinates. Shapely automatically
    closes the polygon boundary. The area and length properties calculate
    its area and perimeter respectively.
</p>

<h2>Performing Geometric Operations</h2>

<p>
    Shapely provides several operations that allow us to analyse and modify
    geometries. These operations are particularly useful when identifying
    overlapping areas, combining boundaries and finding differences between
    spatial features.
</p>

<h3>1. Intersection Operation</h3>

<p>
    The <strong>intersection()</strong> operation identifies the common
    area shared by two geometries. For example, it can be used to identify
    the portion of a road that passes through a particular administrative
    boundary.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">intersection.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">from shapely.geometry import box

# Create two overlapping rectangles
a = box(0, 0, 4, 3)
b = box(2, 1, 6, 5)

# Find their common area
result = a.intersection(b)

print("Intersection:", result)
print("Intersection Area:", result.area)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The intersection() method finds the
    overlapping portion of both rectangles. In this example, the shared
    region is a rectangle with an area of 4 square coordinate units.
</p>

<h3>2. Union Operation</h3>

<p>
    The <strong>union()</strong> operation combines two geometries into
    a single geometry that covers both areas. It is useful when combining
    adjacent or overlapping land boundaries.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">union.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">from shapely.geometry import box

a = box(0, 0, 4, 3)
b = box(2, 1, 6, 5)

# Combine both geometries
combined = a.union(b)

print("Combined Geometry:", combined)
print("Combined Area:", combined.area)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The union() method combines both
    rectangles and removes the overlapping portion from the combined
    area calculation. The resulting geometry represents the complete
    coverage of both rectangles.
</p>

<h3>3. Difference Operation</h3>

<p>
    The <strong>difference()</strong> operation returns the portion of
    the first geometry that does not overlap with the second geometry.
    It is useful for identifying areas that remain after removing
    overlapping regions.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">difference.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">from shapely.geometry import box

a = box(0, 0, 4, 3)
b = box(2, 1, 6, 5)

# Remove the overlapping portion of B from A
remaining = a.difference(b)

print("Remaining Geometry:", remaining)
print("Remaining Area:", remaining.area)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The difference() method removes the
    overlapping portion of the second rectangle from the first rectangle.
    The resulting geometry contains only the remaining area of A.
</p>

<h3>4. Buffer Operation</h3>

<p>
    The <strong>buffer()</strong> operation creates an area around an
    existing geometry at a specified distance. It is commonly used in
    GIS for identifying areas within a certain distance of roads,
    rivers, schools or hospitals.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">buffer.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Point

# Create a point representing a hospital
hospital = Point(10, 10)

# Create a buffer of 5 coordinate units
service_area = hospital.buffer(5)

print("Hospital:", hospital)
print("Buffer Area:", service_area.area)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The buffer() method creates a polygon
    around the hospital point at a distance of 5 coordinate units.
    This can represent a simplified service coverage zone around the
    hospital.
</p>

<h2>Measuring Geometries</h2>

<p>
    Shapely provides properties and methods to calculate geometric
    measurements. These measurements help analyse the size, shape
    and spatial separation of geographic features.
</p>

<h3>1. Area and Length</h3>

<p>
    The <strong>area</strong> property calculates the area of a polygon,
    while the <strong>length</strong> property calculates the length of
    a line or the perimeter of a polygon.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">geometry_measurement.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Polygon

# Create a rectangular area
land = Polygon([
    (0, 0),
    (5, 0),
    (5, 4),
    (0, 4)
])

print("Area:", land.area)
print("Perimeter:", land.length)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The polygon has an area of 20 square
    coordinate units and a perimeter of 18 coordinate units. These
    measurements are calculated directly from its coordinate values.
</p>

<h3>2. Distance and Centroid</h3>

<p>
    The <strong>distance()</strong> method calculates the minimum planar
    distance between two geometries. The <strong>centroid</strong> property
    returns the geometric centre of a geometry.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">distance_centroid.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Point, Polygon

# Create two locations
p1 = Point(0, 0)
p2 = Point(3, 4)

# Calculate distance
print("Distance:", p1.distance(p2))

# Create a polygon
area = Polygon([
    (0, 0),
    (4, 0),
    (4, 4),
    (0, 4)
])

# Calculate centroid
print("Centroid:", area.centroid)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The distance between the two points
    is 5 coordinate units. The centroid of the square polygon is
    located at the coordinate (2, 2).
</p>

<h2>Checking Spatial Relationships</h2>

<p>
    Shapely can determine how two geometries are spatially related.
    These relationship tests return Boolean values (True or False)
    and help identify whether geometries contain, intersect or touch
    one another.
</p>

<h3>1. Contains and Within</h3>

<p>
    The <strong>contains()</strong> method checks whether one geometry
    completely contains another. The <strong>within()</strong> method
    performs the reverse relationship test.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">contains_within.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Point, Polygon

# Create a boundary
boundary = Polygon([
    (0, 0),
    (10, 0),
    (10, 10),
    (0, 10)
])

# Create a point inside the boundary
location = Point(5, 5)

print("Contains:", boundary.contains(location))
print("Within:", location.within(boundary))</code></pre>
</div>

<p>
    <strong>Explanation:</strong> Since the point lies inside the polygon,
    both contains() and within() return True. These methods are useful
    for checking whether a facility or other location falls inside
    a particular administrative boundary.
</p>

<h3>2. Intersects and Touches</h3>

<p>
    The <strong>intersects()</strong> method checks whether two geometries
    share any portion of space, including their boundaries. The
    <strong>touches()</strong> method checks whether geometries meet
    at their boundaries without sharing interior points.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">spatial_relationships.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">from shapely.geometry import box

# Create two adjacent rectangles
a = box(0, 0, 4, 4)
b = box(4, 0, 8, 4)

print("Intersects:", a.intersects(b))
print("Touches:", a.touches(b))</code></pre>
</div>

<p>
    <strong>Explanation:</strong> Both rectangles share a common boundary.
    Therefore, intersects() returns True because they have points in
    common, and touches() also returns True because their interiors
    do not overlap.
</p>

<h2>Using Shapely with GeoPandas</h2>

<p>
    Shapely focuses on geometric operations, whereas GeoPandas provides
    a tabular structure for managing spatial features and their attributes.
    GeoPandas uses Shapely geometries to perform many spatial operations
    on geographic datasets.
</p>

<p>
    For example, we can load a city boundary dataset and calculate
    the centroid of each feature using GeoPandas.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">shapely_geopandas.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.6; color:#f1f5f9;"><code class="language-python">import geopandas as gpd

# Read a spatial dataset
gdf = gpd.read_file("data/cities.geojson")

# Reproject to a suitable projected CRS
gdf = gdf.to_crs(gdf.estimate_utm_crs())

# Calculate centroid of each geometry
gdf["centroid"] = gdf.geometry.centroid

# Calculate area
gdf["area"] = gdf.geometry.area

print(gdf[["area", "centroid"]].head())</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The read_file() function loads the
    spatial dataset into a GeoDataFrame. The dataset is then transformed
    into an estimated UTM coordinate reference system so that area
    measurements use projected coordinate units. Shapely-based geometry
    operations calculate the centroid and area of each feature.
</p>

<h2>Important Considerations When Using Shapely</h2>

<p>
    Although Shapely provides powerful geometric operations, there are
    some important considerations when applying it to real-world GIS data.
</p>

<ul>
    <li><strong>Coordinate Reference Systems:</strong> Shapely does not automatically manage CRS information. It performs calculations using the supplied coordinate values.</li>
    <li><strong>Measurement Units:</strong> Area, length and distance use the units of the coordinate system. Geographic longitude and latitude coordinates do not directly provide measurements in metres.</li>
    <li><strong>Geometry Validity:</strong> Invalid polygons and other problematic geometries may cause unexpected results in spatial operations.</li>
    <li><strong>Geometry Types:</strong> Operations can return different geometry types depending on the input geometries and the result.</li>
    <li><strong>Centroid:</strong> A polygon's centroid is its mathematical centre and may sometimes fall outside the polygon.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Before performing operations such as
        intersection, buffer or distance calculation, make sure the
        geometries are valid and use an appropriate projected CRS when
        working with real-world measurements. This helps produce more
        reliable GIS analysis results.
    </p>
</div>
