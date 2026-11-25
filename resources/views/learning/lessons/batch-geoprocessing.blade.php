
{{-- resources/views/learning/lessons/8-25-batch.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Batch geoprocessing means applying the same GIS operation to many files automatically using a Python script. It saves time and avoids processing each file manually.
</p>

<h2>Learning Goals</h2>
<ul>
    <li>Understand batch geoprocessing in GIS</li>
    <li>Find multiple GIS files using Python</li>
    <li>Process datasets using loops</li>
    <li>Create organised output filenames</li>
    <li>Handle errors without stopping the entire workflow</li>
</ul>

<h2>Batch Geoprocessing</h2>

<p>
    In a typical GIS project, users may need to perform the same operation
    on many datasets. For example, a project may contain several shapefiles
    that need to be reprojected into a common coordinate reference system.
</p>

<p>
    Batch processing automates this task by applying the same instructions
    to every matching file. It saves time, reduces repetitive work, and
    helps maintain consistency across datasets.
</p>

<h2>How Batch Processing Works</h2>

<p>
    A batch geoprocessing workflow follows a sequence of steps. Each input
    file passes through the same processing operation, and its result is
    saved separately.
</p>

<style>
    .batch-flow {
        margin: 25px 0;
        padding: 24px 15px;
        background: #f4f7fb;
        border: 1px solid #e1e8f0;
        border-radius: 12px;
    }

    .batch-flow-track {
        display: flex;
        align-items: stretch;
        justify-content: center;
        gap: 8px;
    }

    .batch-flow-step {
        flex: 1;
        min-width: 0;
        min-height: 165px;
        padding: 17px 10px;
        background: #fff;
        border: 1px solid #dce5ef;
        border-top: 4px solid #2878b5;
        border-radius: 10px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    }

    .batch-flow-step.process {
        border-top-color: #e69b28;
    }

    .batch-flow-step.output {
        border-top-color: #269b63;
    }

    .batch-flow-step.error {
        border-top-color: #8056a8;
    }

    .batch-flow-number {
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #e8f2fb;
        color: #2878b5;
        font-size: 17px;
        font-weight: bold;
        margin-bottom: 11px;
    }

    .batch-flow-step.process .batch-flow-number {
        background: #fff1d9;
        color: #d88916;
    }

    .batch-flow-step.output .batch-flow-number {
        background: #e5f5eb;
        color: #269b63;
    }

    .batch-flow-step.error .batch-flow-number {
        background: #f0e9f8;
        color: #8056a8;
    }

    .batch-flow-step h3 {
        margin: 0 0 8px;
        color: #24364b;
        font-size: 14px;
    }

    .batch-flow-step p {
        margin: 0;
        color: #596779;
        font-size: 12px;
        line-height: 1.5;
    }

    .batch-flow-arrow {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        color: #df8a22;
        font-size: 22px;
        font-weight: bold;
    }

    .batch-flow-footer {
        margin-top: 18px;
        padding: 12px;
        background: #e8eef6;
        border-radius: 7px;
        text-align: center;
        color: #344b63;
        font-size: 13px;
        font-weight: 600;
    }

    @media (max-width: 700px) {
        .batch-flow-track {
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .batch-flow-step {
            width: 100%;
            min-height: 120px;
            box-sizing: border-box;
            padding: 15px;
        }

        .batch-flow-arrow {
            transform: rotate(90deg);
            font-size: 20px;
        }
    }
</style>

<div class="batch-flow">

    <div class="batch-flow-track">

        <div class="batch-flow-step">
            <div class="batch-flow-number">01</div>
            <h3>Input Files</h3>
            <p>Find all matching GIS datasets in the input folder.</p>
        </div>

        <div class="batch-flow-arrow">➜</div>

        <div class="batch-flow-step">
            <div class="batch-flow-number">02</div>
            <h3>Loop Through Files</h3>
            <p>Access each dataset one at a time using a Python loop.</p>
        </div>

        <div class="batch-flow-arrow">➜</div>

        <div class="batch-flow-step process">
            <div class="batch-flow-number">03</div>
            <h3>Process Data</h3>
            <p>Apply the same GIS operation to every dataset.</p>
        </div>

        <div class="batch-flow-arrow">➜</div>

        <div class="batch-flow-step output">
            <div class="batch-flow-number">04</div>
            <h3>Save Results</h3>
            <p>Write each processed dataset to the output folder.</p>
        </div>

        <div class="batch-flow-arrow">➜</div>

        <div class="batch-flow-step error">
            <div class="batch-flow-number">05</div>
            <h3>Error Handling</h3>
            <p>Record failed files and continue processing the remaining datasets.</p>
        </div>

    </div>

    <div class="batch-flow-footer">
        Batch GIS Workflow: Discover → Loop → Process → Save → Monitor
    </div>

</div>

<h2>Finding Multiple GIS Files</h2>

<p>
    Python provides the <code>pathlib</code> module for working with
    folders and file paths. Its <code>glob()</code> method can find
    files that match a particular pattern.
</p>

<p>
    For example, <code>*.shp</code> matches all shapefiles in a folder.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        Finding Shapefiles
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code>from pathlib import Path

# Specify the input folder
input_folder = Path("data")

# Find all shapefiles
shapefiles = list(input_folder.glob("*.shp"))

# Display the files
for shp in shapefiles:
    print(shp.name)</code></pre>
</div>

<p>
    If the folder contains roads.shp, rivers.shp, and buildings.shp,
    the loop identifies each file and displays its name.
</p>

<h2>Processing Multiple GIS Datasets</h2>

<p>
    Once the input files are identified, a <code>for</code> loop can
    process them one at a time. GeoPandas provides functions to read,
    reproject, and export vector datasets.
</p>

<h3>Example: Reprojecting Multiple Shapefiles</h3>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        batch_reproject.py
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code>import geopandas as gpd
from pathlib import Path

# Define input and output folders
input_folder = Path("data")
output_folder = Path("output")

# Create output folder if needed
output_folder.mkdir(parents=True, exist_ok=True)

# Find all shapefiles
for shp in input_folder.glob("*.shp"):

    # Read the dataset
    gdf = gpd.read_file(shp)

    # Reproject to EPSG:4326
    gdf = gdf.to_crs("EPSG:4326")

    # Create output filename
    output_file = output_folder / f"{shp.stem}.gpkg"

    # Save as GeoPackage
    gdf.to_file(output_file, driver="GPKG")

    print("Processed:", shp.name)</code></pre>
</div>

<p>
    This script processes every shapefile in the data folder, converts
    its coordinate reference system to EPSG:4326, and saves the result
    as a GeoPackage in the output folder.
</p>

<h2>Organising Input and Output Files</h2>

<p>
    A clear folder structure makes batch processing easier to manage.
    Keeping input datasets separate from processed results also helps
    protect the original data.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        GIS Project Folder Structure
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code>GIS_Project/
│
├── data/
│   ├── roads.shp
│   ├── rivers.shp
│   └── buildings.shp
│
├── output/
│   ├── roads.gpkg
│   ├── rivers.gpkg
│   └── buildings.gpkg
│
└── batch_reproject.py</code></pre>
</div>

<p>
    The data folder stores the original shapefiles, while the output
    folder contains the converted GeoPackage files. The Python script
    is stored in the main project folder.
</p>

<h2>Handling Errors During Batch Processing</h2>

<p>
    One invalid or damaged dataset should not necessarily stop the
    entire batch workflow. Using <code>try</code> and <code>except</code>
    inside the loop allows the script to handle errors for individual
    files and continue with the remaining datasets.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        Batch Error Handling
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code>for shp in input_folder.glob("*.shp"):

    try:
        gdf = gpd.read_file(shp)
        gdf = gdf.to_crs("EPSG:4326")

        output_file = output_folder / f"{shp.stem}.gpkg"
        gdf.to_file(output_file, driver="GPKG")

        print("Success:", shp.name)

    except Exception as error:
        print("Failed:", shp.name, error)

print("Batch processing completed")</code></pre>
</div>

<p>
    If a file cannot be read or processed, the error message is displayed
    and the loop moves to the next file. This makes the workflow more
    reliable when working with large collections of GIS datasets.
</p>

<h2>Monitoring Batch Processing</h2>

<p>
    Progress messages help users identify which datasets have been
    processed and which ones have failed. For larger workflows, Python's
    <code>logging</code> module can record these details in a log file.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        Batch Processing Log
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code>import logging

logging.basicConfig(
    filename="batch_process.log",
    level=logging.INFO,
    format="%(asctime)s - %(levelname)s - %(message)s"
)

logging.info("Batch processing started")
logging.info("Roads dataset processed")
logging.warning("Rivers dataset needs checking")
logging.info("Batch processing completed")</code></pre>
</div>

<p>
    The log file provides a record of the processing activity, making
    it easier to review results and investigate problems.
</p>

<h2>Applications of Batch Geoprocessing</h2>

<ul>
    <li>
        <strong>Coordinate transformation:</strong>
        Reproject multiple spatial datasets into a common CRS.
    </li>
    <li>
        <strong>Data conversion:</strong>
        Convert collections of shapefiles into GeoPackage format.
    </li>
    <li>
        <strong>Spatial analysis:</strong>
        Apply the same buffer or overlay operation to multiple layers.
    </li>
    <li>
        <strong>Raster processing:</strong>
        Apply similar processing operations to multiple raster images.
    </li>
    <li>
        <strong>Data preparation:</strong>
        Organise and prepare large collections of geographic datasets.
    </li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Important:</strong> Test your script with a small number
        of datasets before processing an entire folder. Check the output
        files and coordinate reference systems to make sure the results
        are correct.
    </p>
</div>
