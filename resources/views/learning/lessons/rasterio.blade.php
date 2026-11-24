
{{-- resources/views/learning/lessons/8-16-rasterio.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Rasterio is a Python library used to read, write and process raster datasets such as GeoTIFF images. It provides access to raster cell values as NumPy arrays along with important spatial information such as coordinate reference systems, resolution and geographic extent. It is widely used in remote sensing and raster-based GIS analysis.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Open and read raster datasets using Rasterio.</li>
    <li>Access raster bands and cell values.</li>
    <li>Inspect raster metadata and properties.</li>
    <li>Clip and process raster data for GIS analysis.</li>
</ul>

<h2>1. Installing and Importing Rasterio</h2>
<p>
    Install Rasterio before using it in Python. NumPy is also useful for working with raster arrays.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Installation</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>pip install rasterio numpy</code></pre>
</div>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">import_rasterio.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import rasterio
import numpy as np

print("Rasterio imported successfully")</code></pre>
</div>

<p><strong>Output:</strong></p>
<pre>Rasterio imported successfully</pre>

<h2>2. Opening a Raster Dataset</h2>
<p>
    The <code>rasterio.open()</code> function opens a raster file. The <code>with</code> statement ensures that the dataset is properly closed after use.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">open_raster.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import rasterio

with rasterio.open("dem.tif") as src:
    print("CRS:", src.crs)
    print("Width:", src.width)
    print("Height:", src.height)
    print("Bands:", src.count)</code></pre>
</div>

<p>
    This example displays the raster's coordinate reference system, dimensions and number of bands. These properties help you understand the structure of the dataset before processing it.
</p>

<h2>3. Reading Raster Bands as NumPy Arrays</h2>
<p>
    Rasterio stores raster band values in NumPy arrays. The <code>read(1)</code> method reads the first band, allowing you to access individual pixel values and perform numerical calculations.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">read_band.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import rasterio

with rasterio.open("dem.tif") as src:
    band = src.read(1)

    print("Raster Array:")
    print(band)

    print("Mean Value:", band.mean())</code></pre>
</div>

<p>
    Each array element represents a raster cell value. For example, in a Digital Elevation Model (DEM), these values represent ground elevation. The mean calculates the average value of the selected band.
</p>

<h2>4. Understanding Raster Metadata</h2>
<p>
    Raster metadata describes how raster data is stored and positioned geographically. It includes the CRS, pixel resolution, spatial transform, NoData value and band count.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">raster_metadata.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import rasterio

with rasterio.open("dem.tif") as src:
    print("CRS:", src.crs)
    print("Resolution:", src.res)
    print("Transform:", src.transform)
    print("NoData:", src.nodata)
    print("Band Count:", src.count)
    print("Bounds:", src.bounds)</code></pre>
</div>

<p>
    The resolution describes the ground size of each pixel, while the transform connects pixel positions to geographic coordinates. The bounds describe the raster's spatial extent.
</p>

<h2>5. Clipping Raster Data Using a Polygon</h2>
<p>
    Rasterio can extract raster values within a selected polygon using <code>rasterio.mask.mask()</code>. This is useful when analysing a specific study area, district or administrative boundary.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">clip_raster.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import rasterio
from rasterio.mask import mask
import geopandas as gpd

# Read the boundary polygon
boundary = gpd.read_file("study_area.shp")

with rasterio.open("dem.tif") as src:
    # Match the polygon CRS to the raster CRS
    boundary = boundary.to_crs(src.crs)

    # Clip the raster
    clipped, transform = mask(
        src,
        boundary.geometry,
        crop=True
    )

    # Update raster metadata
    profile = src.profile.copy()
    profile.update(
        height=clipped.shape[1],
        width=clipped.shape[2],
        transform=transform
    )

    # Save the clipped raster
    with rasterio.open("clipped_dem.tif", "w", **profile) as dst:
        dst.write(clipped)

print("Raster clipped successfully")</code></pre>
</div>

<p><strong>Output:</strong></p>
<pre>Raster clipped successfully</pre>

<p>
    The output contains only the raster area covered by the selected polygon. Matching the polygon CRS with the raster CRS is important for accurate clipping.
</p>

<h2>6. Calculating Raster Statistics</h2>
<p>
    NumPy can be used with Rasterio to calculate statistics such as minimum, maximum and mean values. NoData cells should be excluded from calculations when they are represented by a NoData value.
</p>

<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">raster_statistics.py</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.5; color:#f1f5f9;"><code>import rasterio
import numpy as np

with rasterio.open("dem.tif") as src:
    band = src.read(1, masked=True)

    print("Minimum:", band.min())
    print("Maximum:", band.max())
    print("Mean:", band.mean())</code></pre>
</div>

<p>
    The masked array excludes cells marked as NoData, helping produce more meaningful raster statistics.
</p>

<h2>7. Applications of Rasterio in GIS</h2>
<p>
    Rasterio is useful in many raster-based GIS and remote sensing tasks, including:
</p>
<ul>
    <li>Analysing elevation data using Digital Elevation Models.</li>
    <li>Processing satellite imagery for land cover studies.</li>
    <li>Extracting raster data within administrative boundaries.</li>
    <li>Calculating pixel-based statistics for environmental analysis.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Practical tip:</strong> Always check the raster CRS, resolution and NoData value before performing raster analysis. These properties help prevent incorrect spatial results and statistics.</p>
</div>
