
{{-- resources/views/learning/lessons/8-17-pyproj.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PyProj is a Python library used to transform geographic coordinates between different coordinate reference systems (CRSs). It is based on the PROJ library and supports coordinate conversion, map projections and geodetic measurements. It is widely used in GIS applications to ensure accurate spatial positioning and distance calculations.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand coordinate reference systems using PyProj.</li>
    <li>Transform coordinates between different CRSs.</li>
    <li>Use the always_xy option for coordinate order.</li>
    <li>Calculate geodesic distances between locations.</li>
</ul>

<h2>1. Installing and Importing PyProj</h2>
<p>
    Install PyProj before using it in Python. Import the required classes to work with coordinate systems and transformations.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Installation</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>pip install pyproj</code></pre>
</div>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">import_pyproj.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>from pyproj import CRS, Transformer, Geod

print("PyProj imported successfully")</code></pre>
</div>

<p><strong>Output:</strong></p>
<pre>PyProj imported successfully</pre>

<h2>2. Coordinate Reference Systems</h2>
<p>
    A Coordinate Reference System defines how locations are represented on the Earth's surface. PyProj provides the <code>CRS</code> class to describe and inspect different coordinate systems.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">crs_example.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>from pyproj import CRS

# Define geographic and projected CRSs
crs1 = CRS.from_epsg(4326)
crs2 = CRS.from_epsg(32644)

print("Geographic CRS:", crs1.name)
print("Projected CRS:", crs2.name)</code></pre>
</div>

<p><strong>Output:</strong></p>
<pre>Geographic CRS: WGS 84
Projected CRS: WGS 84 / UTM zone 44N</pre>

<p>
    EPSG:4326 represents geographic coordinates in degrees, while EPSG:32644 represents projected coordinates in metres. The appropriate CRS depends on the location and purpose of the analysis.
</p>

<h2>3. Transforming Coordinates Between CRSs</h2>
<p>
    The <code>Transformer</code> class converts coordinates from one CRS to another. This is useful when geographic coordinates need to be converted into projected coordinates for mapping and measurement.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">coordinate_transform.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>from pyproj import Transformer

# Create a coordinate transformer
transformer = Transformer.from_crs(
    "EPSG:4326",
    "EPSG:32644",
    always_xy=True
)

# Transform longitude and latitude
longitude = 78.5
latitude = 20.5

x, y = transformer.transform(longitude, latitude)

print("Easting:", x)
print("Northing:", y)</code></pre>
</div>

<p>
    The <code>always_xy=True</code> option ensures that coordinates are supplied in X, Y order, meaning longitude followed by latitude for this geographic CRS. The resulting projected coordinates represent easting and northing in metres.
</p>

<h2>4. Transforming Multiple Coordinates</h2>
<p>
    PyProj can also transform multiple coordinate pairs using the same Transformer. This is useful when processing several locations, such as city centres, survey points or GPS records.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">multiple_coordinates.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>from pyproj import Transformer

transformer = Transformer.from_crs(
    4326, 32644, always_xy=True
)

locations = [
    (78.5, 20.5),
    (79.0, 21.0),
    (77.5, 19.5)
]

for lon, lat in locations:
    x, y = transformer.transform(lon, lat)
    print("Easting:", x, "Northing:", y)</code></pre>
</div>

<p>
    The loop transforms each location using the same Transformer. Reusing the Transformer avoids creating a new transformation for every coordinate pair.
</p>

<h2>5. Calculating Geodesic Distance</h2>
<p>
    PyProj provides the <code>Geod</code> class to calculate distances and directions between geographic locations on an ellipsoid. This is useful when measuring the actual surface distance between two places.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">geodesic_distance.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>from pyproj import Geod

# Use the WGS84 ellipsoid
geod = Geod(ellps="WGS84")

# Coordinates of two locations
lon1, lat1 = 80.2707, 13.0827
lon2, lat2 = 77.5946, 12.9716

# Calculate distance and directions
azimuth1, azimuth2, distance = geod.inv(
    lon1, lat1, lon2, lat2
)

print("Distance in metres:", distance)
print("Distance in kilometres:", distance / 1000)</code></pre>
</div>

<p>
    The <code>Geod.inv()</code> method calculates the forward azimuth, backward azimuth and geodesic distance between two coordinate points. The distance is returned in metres.
</p>

<h2>6. Applications of PyProj in GIS</h2>
<p>
    PyProj is an important library for coordinate management and spatial measurements. It is commonly used in:
</p>

<ul>
    <li>Converting GPS coordinates into projected map coordinates.</li>
    <li>Preparing spatial datasets for accurate mapping.</li>
    <li>Calculating distances between geographic locations.</li>
    <li>Converting coordinate systems in GeoPandas workflows.</li>
    <li>Supporting spatial analysis in remote sensing and surveying.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Practical tip:</strong> Always check the source and target CRS before transforming coordinates. Use <code>always_xy=True</code> when you want consistent longitude, latitude input order.</p>
</div>
