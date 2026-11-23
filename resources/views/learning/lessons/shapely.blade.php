
{{-- resources/views/learning/lessons/8-14-shapely.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Shapely is a Python library for creating, manipulating and analysing geometric objects such as points, lines and polygons. It is commonly used with GeoPandas for spatial analysis.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create points, lines and polygons</li>
    <li>Perform geometric operations</li>
    <li>Calculate area, length and distance</li>
    <li>Analyse spatial relationships using Shapely.</li>
</ul>

<h2>Geometries in Shapely</h2>

<p>
    Shapely represents GIS features using three main geometries: Point (location), LineString (road or river) and Polygon (park or boundary). These are used for spatial analysis and measurements.
</p>


<h3>1. Creating Point Geometry</h3>

<p>
    A <strong>Point</strong> represents a single location using X and Y
    coordinates. In GIS applications, points are commonly used to represent
    hospitals, schools, bus stops and other individual locations.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">point_geometry.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Point

# Create a point using coordinates
location = Point(78.0, 20.5)

# Display point information
print(location)
print("X Coordinate:", location.x)
print("Y Coordinate:", location.y)</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li><code>Point(78.0, 20.5)</code> creates a point using X and Y coordinates.</li>
    <li><code>location.x</code> returns the X coordinate.</li>
    <li><code>location.y</code> returns the Y coordinate.</li>
    <li>The point can be used in further spatial analysis.</li>
</ul>

<h3>2. Creating LineString Geometry</h3>

<p>
    A <strong>LineString</strong> represents a connected sequence of
    two or more coordinate points. It is useful for representing roads,
    rivers, pipelines and transportation routes.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">linestring_geometry.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">from shapely.geometry import LineString

# Create a road using multiple coordinates
road = LineString([
    (78.0, 20.0),
    (78.5, 20.5),
    (79.0, 21.0)
])

# Display road information
print(road)
print("Road Length:", road.length)</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li><code>LineString()</code> connects multiple coordinate points to create a line.</li>
    <li>Each coordinate represents a location along the road.</li>
    <li><code>road.length</code> calculates the total planar length of the line.</li>
</ul>

<h3>3. Creating Polygon Geometry</h3>

<p>
    A <strong>Polygon</strong> represents an enclosed area formed by
    connecting coordinates. In GIS, polygons are used to represent
    land parcels, lakes, buildings, parks and administrative boundaries.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">polygon_geometry.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Polygon

# Create a rectangular polygon
park = Polygon([
    (78.0, 20.0),
    (79.0, 20.0),
    (79.0, 21.0),
    (78.0, 21.0)
])

# Display polygon information
print(park)
print("Area:", park.area)
print("Boundary Length:", park.length)</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li><code>Polygon()</code> creates an enclosed geometric area.</li>
    <li>The coordinates define the polygon boundary.</li>
    <li>Shapely automatically closes the polygon ring.</li>
    <li><code>park.area</code> calculates the area.</li>
    <li><code>park.length</code> calculates the perimeter.</li>
</ul>

<h2>Performing Geometric Operations</h2>

<p>
    Shapely provides several geometric operations to analyse and modify
    spatial objects. These operations help identify overlapping regions,
    combine boundaries and extract areas from different geometries.
</p>

<h3>1. Intersection Operation</h3>

<p>
    The <strong>intersection()</strong> operation identifies the common
    area shared by two geometries. For example, it can identify the
    portion of a road or land parcel that overlaps with a particular
    administrative boundary.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">intersection.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">from shapely.geometry import box

# Create two overlapping rectangles
a = box(0, 0, 4, 3)
b = box(2, 1, 6, 5)

# Find their overlapping region
result = a.intersection(b)

print("Intersection:", result)
print("Intersection Area:", result.area)</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li><code>box()</code> creates rectangular polygon geometries.</li>
    <li><code>a.intersection(b)</code> finds the common region between both rectangles.</li>
    <li><code>result.area</code> calculates the area of the overlapping region.</li>
</ul>

<h3>2. Union Operation</h3>

<p>
    The <strong>union()</strong> operation combines two geometries into
    one geometry covering both areas. It is useful when combining
    overlapping land parcels or adjacent spatial boundaries.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">union.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">from shapely.geometry import box

# Create two rectangles
a = box(0, 0, 4, 3)
b = box(2, 1, 6, 5)

# Combine both geometries
combined = a.union(b)

print("Combined Geometry:", combined)
print("Combined Area:", combined.area)</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li>Two rectangular geometries are created using <code>box()</code>.</li>
    <li><code>union()</code> combines both geometries.</li>
    <li>The overlapping region is included only once in the combined area.</li>
    <li>The resulting geometry represents the complete coverage of both rectangles.</li>
</ul>

<h3>3. Difference Operation</h3>

<p>
    The <strong>difference()</strong> operation returns the portion of
    the first geometry that does not overlap with the second geometry.
    It is useful for identifying the remaining area after removing
    overlapping regions.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">difference.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">from shapely.geometry import box

# Create two rectangles
a = box(0, 0, 4, 3)
b = box(2, 1, 6, 5)

# Find the part of A outside B
remaining = a.difference(b)

print("Remaining Geometry:", remaining)
print("Remaining Area:", remaining.area)</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li><code>difference()</code> compares the first geometry with the second.</li>
    <li>The overlapping portion of B is removed from A.</li>
    <li>The remaining geometry contains only the area of A outside B.</li>
</ul>

<h3>4. Buffer Operation</h3>

<p>
    The <strong>buffer()</strong> operation creates an area around an
    existing geometry at a specified distance. In GIS, it is commonly
    used to identify areas around roads, rivers, schools and hospitals.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">buffer.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Point

# Create a hospital location
hospital = Point(10, 10)

# Create a buffer of 5 coordinate units
service_area = hospital.buffer(5)

print("Hospital:", hospital)
print("Buffer Geometry:", service_area)
print("Buffer Area:", service_area.area)</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li>A point is created to represent the hospital location.</li>
    <li><code>buffer(5)</code> creates an area extending 5 coordinate units around the point.</li>
    <li>The resulting geometry is approximately circular.</li>
    <li>The buffer can represent a simplified service coverage zone around the hospital.</li>
</ul>

<h2>Measuring Geometries</h2>

<p>
    Shapely provides measurement properties and methods to calculate
    the size and spatial separation of geometries. These measurements
    are useful for analysing land areas, road networks and distances
    between geographic features.
</p>

<h3>1. Calculating Area and Length</h3>

<p>
    The <strong>area</strong> property calculates the area of a polygon,
    while the <strong>length</strong> property calculates the length
    of a line or the perimeter of a polygon.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">geometry_measurement.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Polygon

# Create a rectangular land area
land = Polygon([
    (0, 0),
    (5, 0),
    (5, 4),
    (0, 4)
])

# Calculate area and perimeter
print("Area:", land.area)
print("Perimeter:", land.length)</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li>The Polygon() function creates a rectangular land area.</li>
    <li><code>land.area</code> calculates the enclosed area.</li>
    <li><code>land.length</code> calculates the total boundary length.</li>
</ul>

<h3>2. Calculating Distance and Centroid</h3>

<p>
    The <strong>distance()</strong> method calculates the minimum planar
    distance between two geometries. The <strong>centroid</strong> property
    returns the geometric centre of a geometry.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">distance_centroid.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Point, Polygon

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

<p><strong>Explanation:</strong></p>
<ul>
    <li>Two points are created using their coordinate values.</li>
    <li><code>distance()</code> calculates the minimum distance between them.</li>
    <li>The square polygon is created using four corner coordinates.</li>
    <li><code>centroid</code> returns the geometric centre of the polygon.</li>
</ul>

<h2>Checking Spatial Relationships</h2>

<p>
    Shapely can determine how two geometries are spatially related.
    These relationship tests return Boolean values (True or False)
    and help identify whether one geometry contains, intersects or
    touches another geometry.
</p>

<h3>1. Contains and Within</h3>

<p>
    The <strong>contains()</strong> method checks whether one geometry
    contains another. The <strong>within()</strong> method performs
    the reverse relationship test.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">contains_within.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">from shapely.geometry import Point, Polygon

# Create a polygon boundary
boundary = Polygon([
    (0, 0),
    (10, 0),
    (10, 10),
    (0, 10)
])

# Create points
inside_point = Point(5, 5)
outside_point = Point(15, 15)

# Check spatial relationships
print("Contains:", boundary.contains(inside_point))
print("Within:", inside_point.within(boundary))
print("Outside:", boundary.contains(outside_point))</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li>A polygon is created to represent an administrative boundary.</li>
    <li>A point is created inside the polygon.</li>
    <li>Another point is created outside the polygon.</li>
    <li><code>contains()</code> and <code>within()</code> check the relationship between the geometries.</li>
    <li>The methods return True or False depending on the spatial relationship.</li>
</ul>

<h3>2. Intersects and Touches</h3>

<p>
    The <strong>intersects()</strong> method checks whether two geometries
    share any portion of space, including their boundaries. The
    <strong>touches()</strong> method checks whether geometries meet
    at their boundaries without overlapping interiors.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">spatial_relationships.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">from shapely.geometry import box

# Create two adjacent rectangles
a = box(0, 0, 4, 4)
b = box(4, 0, 8, 4)

# Test spatial relationships
print("Intersects:", a.intersects(b))
print("Touches:", a.touches(b))</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li>Two adjacent rectangular geometries are created.</li>
    <li>They share a common boundary but their interiors do not overlap.</li>
    <li><code>intersects()</code> returns True because they share boundary points.</li>
    <li><code>touches()</code> returns True because they meet only at their boundaries.</li>
</ul>

<h2>Using Shapely with GeoPandas</h2>

<p>
    Shapely focuses on geometric operations, while GeoPandas manages
    geometries together with tabular attributes and coordinate reference
    systems. GeoPandas uses Shapely geometries to perform many spatial
    operations on geographic datasets.
</p>

<p>
    For example, we can load a city boundary dataset, calculate the
    centroid of each feature and measure its area using GeoPandas.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">shapely_geopandas.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code class="language-python">import geopandas as gpd

# Read a spatial dataset
gdf = gpd.read_file("cities.geojson")

# Reproject to a suitable projected CRS
gdf = gdf.to_crs(gdf.estimate_utm_crs())

# Calculate the centroid
gdf["centroid"] = gdf.geometry.centroid

# Calculate geometry area
gdf["area"] = gdf.geometry.area

# Display the results
print(gdf[["area", "centroid"]].head())</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li><code>gpd.read_file()</code> loads the spatial dataset into a GeoDataFrame.</li>
    <li><code>estimate_utm_crs()</code> estimates a suitable UTM coordinate reference system from the dataset extent.</li>
    <li><code>to_crs()</code> transforms the dataset into the estimated projected CRS.</li>
    <li><code>centroid</code> calculates the geometric centre of each feature.</li>
    <li><code>area</code> calculates the area of each geometry in the projected coordinate units.</li>
</ul>

<h2>Expected Output</h2>

<p><strong>When the point geometry is created:</strong></p>

<div style="background:#1e293b; color:#f1f5f9; border-radius:8px; padding:14px 16px; margin:12px 0; font-size:13px;">
    <pre style="margin:0; white-space:pre-wrap; color:inherit;">POINT (78 20.5)
X Coordinate: 78.0
Y Coordinate: 20.5</pre>
</div>

<p><strong>When geometric measurements are calculated:</strong></p>

<div style="background:#1e293b; color:#f1f5f9; border-radius:8px; padding:14px 16px; margin:12px 0; font-size:13px;">
    <pre style="margin:0; white-space:pre-wrap; color:inherit;">Distance: 5.0
Area: 20.0
Boundary Length: 18.0
Centre: POINT (2.5 2)</pre>
</div>

<p><strong>When spatial relationships are tested:</strong></p>

<div style="background:#1e293b; color:#f1f5f9; border-radius:8px; padding:14px 16px; margin:12px 0; font-size:13px;">
    <pre style="margin:0; white-space:pre-wrap; color:inherit;">Contains: True
Within: True
Outside: False
Intersects: True
Touches: True</pre>
</div>

<p>
    <em>Note: These are example outputs based on the coordinates used
    in the programs. Area, distance and length are expressed in the
    corresponding coordinate units.</em>
</p>
