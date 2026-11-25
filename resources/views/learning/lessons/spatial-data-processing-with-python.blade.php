
{{-- resources/views/learning/lessons/8-26-pipeline.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A GIS pipeline combines multiple processing steps into one workflow.
    It allows users to read, prepare, analyse, and export spatial data
    using Python libraries.
</p>

<h2>Learning Goals</h2>
<ul>
    <li>Understand the stages of a GIS processing pipeline</li>
    <li>Read and prepare multiple spatial datasets</li>
    <li>Reproject layers into a common coordinate system</li>
    <li>Perform spatial joins and summarise results</li>
    <li>Export processed data into useful formats</li>
</ul>

<h2>GIS Pipeline</h2>

<p>
    A GIS pipeline is a sequence of connected operations where the
    output of one step becomes the input for the next step.
    It helps organise spatial analysis and makes workflows easier
    to repeat.
</p>

<p>
    For example, a GIS analyst can use a pipeline to identify how many
    schools are located inside each administrative ward.
</p>

<h2>Stages of a GIS Processing Pipeline</h2>

<p>
    A typical spatial analysis pipeline contains five main stages:
    reading data, reprojecting layers, performing spatial analysis,
    summarising results, and exporting the output.
</p>

<style>
    .pipeline-flow {
        margin: 25px 0;
        padding: 24px 15px;
        background: #f4f7fb;
        border: 1px solid #e1e8f0;
        border-radius: 12px;
    }

    .pipeline-flow-track {
        display: flex;
        align-items: stretch;
        justify-content: center;
        gap: 8px;
    }

    .pipeline-step {
        flex: 1;
        min-width: 0;
        min-height: 170px;
        padding: 17px 10px;
        background: #ffffff;
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

    .pipeline-step.analysis {
        border-top-color: #e69b28;
    }

    .pipeline-step.summary {
        border-top-color: #8056a8;
    }

    .pipeline-step.export {
        border-top-color: #269b63;
    }

    .pipeline-number {
        width: 43px;
        height: 43px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #e8f2fb;
        color: #2878b5;
        font-size: 17px;
        font-weight: bold;
        margin-bottom: 12px;
    }

    .pipeline-step.analysis .pipeline-number {
        background: #fff1d9;
        color: #d88916;
    }

    .pipeline-step.summary .pipeline-number {
        background: #f0e9f8;
        color: #8056a8;
    }

    .pipeline-step.export .pipeline-number {
        background: #e5f5eb;
        color: #269b63;
    }

    .pipeline-step h3 {
        margin: 0 0 8px;
        font-size: 14px;
        color: #24364b;
    }

    .pipeline-step p {
        margin: 0;
        font-size: 12px;
        line-height: 1.5;
        color: #596779;
    }

    .pipeline-arrow {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        color: #df8a22;
        font-size: 22px;
        font-weight: bold;
    }

    .pipeline-footer {
        margin-top: 20px;
        padding: 12px;
        background: #e8eef6;
        border-radius: 7px;
        text-align: center;
        color: #344b63;
        font-size: 13px;
        font-weight: 600;
    }

    @media (max-width: 700px) {
        .pipeline-flow-track {
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .pipeline-step {
            width: 100%;
            min-height: 120px;
            box-sizing: border-box;
            padding: 15px;
        }

        .pipeline-arrow {
            transform: rotate(90deg);
            font-size: 20px;
        }
    }
</style>

<div class="pipeline-flow">

    <div class="pipeline-flow-track">

        <div class="pipeline-step">
            <div class="pipeline-number">01</div>
            <h3>Read Data</h3>
            <p>Load the required spatial datasets.</p>
        </div>

        <div class="pipeline-arrow">➜</div>

        <div class="pipeline-step">
            <div class="pipeline-number">02</div>
            <h3>Reproject</h3>
            <p>Convert layers into a common coordinate system.</p>
        </div>

        <div class="pipeline-arrow">➜</div>

        <div class="pipeline-step analysis">
            <div class="pipeline-number">03</div>
            <h3>Spatial Analysis</h3>
            <p>Join points with polygons to identify their locations.</p>
        </div>

        <div class="pipeline-arrow">➜</div>

        <div class="pipeline-step summary">
            <div class="pipeline-number">04</div>
            <h3>Summarise</h3>
            <p>Count the number of schools in each ward.</p>
        </div>

        <div class="pipeline-arrow">➜</div>

        <div class="pipeline-step export">
            <div class="pipeline-number">05</div>
            <h3>Export</h3>
            <p>Save the processed results as GIS or table files.</p>
        </div>

    </div>

    <div class="pipeline-footer">
        GIS Pipeline: Read → Reproject → Analyse → Summarise → Export
    </div>

</div>

<h2>Reading Spatial Datasets</h2>

<p>
    The first step is to load the required geographic datasets.
    GeoPandas provides the <code>read_file()</code> function to
    read vector formats such as Shapefile and GeoPackage.
</p>

<p>
    In this example, two datasets are used: ward boundaries stored
    as polygons and school locations stored as points.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        Reading GIS Data
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code>import geopandas as gpd

# Read ward boundaries
wards = gpd.read_file("wards.gpkg")

# Read school locations
schools = gpd.read_file("schools.gpkg")

print("Wards:", len(wards))
print("Schools:", len(schools))</code></pre>
</div>

<p>
    The datasets are loaded into GeoDataFrames, which allow users
    to work with geographic features and their attribute information.
</p>

<h2>Reprojecting Spatial Data</h2>

<p>
    Before performing spatial analysis, the layers should use a
    suitable common coordinate reference system (CRS). Reprojecting
    converts geographic data into the selected coordinate system.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        Reprojecting Layers
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code># Reproject both layers
wards = wards.to_crs("EPSG:32644")
schools = schools.to_crs("EPSG:32644")

print(wards.crs)
print(schools.crs)</code></pre>
</div>

<p>
    Both layers are converted to EPSG:32644 in this example.
    This is a projected coordinate system using metres, suitable
    for many areas in UTM Zone 44N. Always select a CRS appropriate
    for the actual study area.
</p>

<h2>Performing a Spatial Join</h2>

<p>
    A spatial join combines information from two layers based on
    their geographic relationship. For example, it can identify
    which ward contains each school location.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        Spatial Join Example
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code># Join schools with ward boundaries
joined = gpd.sjoin(
    schools,
    wards,
    how="left",
    predicate="within"
)

print(joined.head())</code></pre>
</div>

<p>
    The <code>within</code> predicate checks whether each school
    point is located inside a ward polygon. The resulting GeoDataFrame
    contains the school information and the matching ward attributes.
</p>

<h2>Summarising Spatial Results</h2>

<p>
    After the spatial join, the results can be grouped by ward to
    calculate how many schools are located in each area.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        Counting Schools by Ward
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code># Count schools in each ward
counts = joined.groupby("ward").size()

# Display the results
print(counts)</code></pre>
</div>

<p>
    Here, <code>ward</code> represents the name of the ward attribute
    in the polygon dataset. The <code>groupby()</code> function groups
    school records by ward, while <code>size()</code> counts the records
    in each group.
</p>

<h2>Exporting the Results</h2>

<p>
    The final stage is to save the processed results. GeoPandas supports
    exporting spatial data to formats such as GeoPackage and CSV.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        Exporting Pipeline Results
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code># Save school counts as CSV
counts.to_csv("schools_per_ward.csv")

# Save spatial join results as GeoPackage
joined.to_file(
    "schools_by_ward.gpkg",
    driver="GPKG"
)</code></pre>
</div>

<p>
    The CSV file stores the school counts for each ward, while the
    GeoPackage preserves the spatial features and their attributes.
</p>

<h2>Complete GIS Processing Pipeline</h2>

<p>
    The following example combines the main stages into one script.
    It reads both datasets, reprojects them, performs a spatial join,
    counts schools by ward, and exports the results.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        pipeline.py
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code>import geopandas as gpd

# Read datasets
wards = gpd.read_file("wards.gpkg")
schools = gpd.read_file("schools.gpkg")

# Reproject layers
wards = wards.to_crs("EPSG:32644")
schools = schools.to_crs("EPSG:32644")

# Perform spatial join
joined = gpd.sjoin(
    schools,
    wards,
    how="left",
    predicate="within"
)

# Count schools by ward
counts = joined.groupby("ward").size()

# Export results
counts.to_csv("schools_per_ward.csv")

joined.to_file(
    "schools_by_ward.gpkg",
    driver="GPKG"
)

print("GIS pipeline completed successfully")</code></pre>
</div>

<h2>Checking Pipeline Results</h2>

<p>
    Each processing stage should be checked to make sure the data
    remains correct. Feature counts, CRS information, and geometry
    validity can help identify problems before exporting the results.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        Checking GIS Data
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code>print("Ward count:", len(wards))
print("School count:", len(schools))

print("Ward CRS:", wards.crs)
print("School CRS:", schools.crs)

print("Valid geometries:", wards.geometry.is_valid.all())</code></pre>
</div>

<h2>Applications of GIS Pipelines</h2>

<ul>
    <li><strong>School distribution:</strong> Count schools within administrative boundaries.</li>
    <li><strong>Population analysis:</strong> Summarise population information by region.</li>
    <li><strong>Environmental studies:</strong> Combine land cover and environmental datasets.</li>
    <li><strong>Transport planning:</strong> Analyse roads, transport networks, and service locations.</li>
    <li><strong>Data preparation:</strong> Reproject, process, and export multiple spatial layers.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Important:</strong> Check the CRS and feature count after
        each major processing step. This helps identify projection issues
        or unexpected changes in the data before exporting the final results.
    </p>
</div>
