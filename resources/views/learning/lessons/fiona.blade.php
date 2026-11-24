
{{-- resources/views/learning/lessons/8-15-fiona.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Fiona is a Python library used to read and write vector data formats such as Shapefile, GeoJSON and GeoPackage. It allows you to access and process vector features individually, making it useful when working with large datasets or when you need control over individual features.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Open and inspect vector datasets using Fiona.</li>
    <li>Read and access individual features.</li>
    <li>Understand feature geometry and attributes.</li>
    <li>Write vector data using Fiona.</li>
</ul>

<h2>1. Installing and Importing Fiona</h2>
<p>
    Before using Fiona, install the library and import it into your Python program.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Installation</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>pip install fiona</code></pre>
</div>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">import_fiona.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import fiona

print("Fiona imported successfully")</code></pre>
</div>

<p><strong>Output:</strong></p>
<pre>Fiona imported successfully</pre>

<h2>2. Opening a Vector File</h2>
<p>
    The <code>fiona.open()</code> function opens a vector dataset. You can inspect its coordinate reference system, feature structure and number of records.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">open_file.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import fiona

with fiona.open("wards.shp", "r") as src:
    print("Number of features:", len(src))
    print("CRS:", src.crs)
    print("Schema:", src.schema)</code></pre>
</div>

<p>
    The <code>with</code> statement automatically closes the file after processing. The <code>"r"</code> mode indicates that the file is opened for reading.
</p>

<h2>3. Reading Features and Attributes</h2>
<p>
    A vector dataset contains multiple features. Each feature includes geometry information and attribute values. Fiona allows you to iterate through the dataset and access each feature individually.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">read_features.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import fiona

with fiona.open("wards.shp") as src:
    for feature in src:
        print("Geometry:", feature.geometry)
        print("Properties:", dict(feature.properties))</code></pre>
</div>

<p>
    Here, the loop reads one feature at a time. Geometry contains the spatial information, while properties contain attribute data such as ward names and population values.
</p>

<h2>4. Filtering Features</h2>
<p>
    You can use attribute values to select specific features while reading a dataset. For example, the following code displays only the ward named "Ward A".
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">filter_features.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import fiona

with fiona.open("wards.shp") as src:
    for feature in src:
        properties = dict(feature.properties)

        if properties["name"] == "Ward A":
            print(properties)</code></pre>
</div>

<p>
    This approach is useful when extracting selected records from administrative boundaries, road networks or other GIS datasets.
</p>

<h2>5. Writing Features to a New Vector File</h2>
<p>
    Fiona can also create vector files and write features into them. The output file requires a geometry type, coordinate reference system and attribute schema.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">write_features.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import fiona

schema = {
    "geometry": "Point",
    "properties": {"name": "str"}
}

with fiona.open(
    "places.geojson",
    "w",
    driver="GeoJSON",
    crs="EPSG:4326",
    schema=schema
) as dst:
    dst.write({
        "geometry": {
            "type": "Point",
            "coordinates": (80.2707, 13.0827)
        },
        "properties": {"name": "Chennai"}
    })

print("Vector file created successfully")</code></pre>
</div>

<p><strong>Output:</strong></p>
<pre>Vector file created successfully</pre>


<div class="tip">
    <p style="margin:0"><strong>Practical tip:</strong> Use Fiona when you need to process individual features or control how vector data is read and written. Use GeoPandas for common GIS analysis and data manipulation tasks.</p>
</div>
