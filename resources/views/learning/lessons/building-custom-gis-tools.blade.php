
{{-- resources/views/learning/lessons/8-27-custom-tools.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A custom GIS tool allows users to perform specific geographic
    operations without writing Python code each time. It combines
    Python scripts with user inputs to create reusable tools for
    common GIS tasks.
</p>

<h2>Learning Goals</h2>
<ul>
    <li>Understand the purpose of custom GIS tools</li>
    <li>Identify different types of custom GIS tools</li>
    <li>Create reusable geoprocessing functions using Python</li>
    <li>Understand how tools accept inputs and generate outputs</li>
    <li>Explore practical applications of custom GIS tools</li>
</ul>

<h2>Custom GIS Tools</h2>

<p>
    A custom GIS tool is a program designed to perform a particular
    geographic task. It accepts input data and parameters, executes
    a GIS operation, and produces an output dataset.
</p>

<p>
    For example, a buffer tool can allow users to select a road
    dataset, enter a buffer distance, and generate a new layer
    containing buffer zones.
</p>

<div class="custom-tool-info">
    <strong>Example:</strong>
    A road buffer tool can create a 50-metre zone around roads
    to identify nearby buildings or other geographic features.
</div>

<h2>How a Custom GIS Tool Works</h2>

<p>
    A custom GIS tool follows a sequence of steps, starting with
    user input and ending with the generated geographic output.
</p>

<style>
    .custom-tool-flow {
        margin: 25px 0;
        padding: 24px 15px;
        background: #f4f7fb;
        border: 1px solid #e1e8f0;
        border-radius: 12px;
    }

    .custom-tool-flow-track {
        display: flex;
        align-items: stretch;
        justify-content: center;
        gap: 8px;
    }

    .custom-tool-step {
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

    .custom-tool-step.interface {
        border-top-color: #8056a8;
    }

    .custom-tool-step.processing {
        border-top-color: #e69b28;
    }

    .custom-tool-step.output {
        border-top-color: #269b63;
    }

    .custom-tool-number {
        width: 43px;
        height: 43px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #e8f2fb;
        color: #2878b5;
        font-weight: bold;
        margin-bottom: 12px;
    }

    .custom-tool-step.interface .custom-tool-number {
        background: #f0e9f8;
        color: #8056a8;
    }

    .custom-tool-step.processing .custom-tool-number {
        background: #fff1d9;
        color: #d88916;
    }

    .custom-tool-step.output .custom-tool-number {
        background: #e5f5eb;
        color: #269b63;
    }

    .custom-tool-step h3 {
        margin: 0 0 8px;
        color: #24364b;
    }

    .custom-tool-step p {
        margin: 0;
        color: #596779;
    }

    .custom-tool-arrow {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        color: #df8a22;
        font-weight: bold;
    }

    .custom-tool-footer {
        margin-top: 20px;
        padding: 12px;
        background: #e8eef6;
        border-radius: 7px;
        text-align: center;
        color: #344b63;
        font-weight: 600;
    }

    /* Custom GIS Tool Cards */

    .custom-tool-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 16px;
        margin: 20px 0;
    }

    .custom-tool-card {
        background: #f4f7fb;
        border: 1px solid #e1e8f0;
        border-top: 4px solid #2878b5;
        border-radius: 10px;
        padding: 18px;
        transition: transform 0.2s ease,
                    box-shadow 0.2s ease;
    }

    .custom-tool-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 14px rgba(0,0,0,0.08);
    }

    .custom-tool-card:nth-child(2) {
        border-top-color: #8056a8;
    }

    .custom-tool-card:nth-child(3) {
        border-top-color: #269b63;
    }

    .custom-tool-card:nth-child(4) {
        border-top-color: #e69b28;
    }

    .custom-tool-card:nth-child(5) {
        border-top-color: #d46b91;
    }

    .custom-tool-card h3 {
        color: #24364b;
        margin: 0 0 8px;
    }

    .custom-tool-card p {
        color: #596779;
        margin: 0;
    }

    .custom-tool-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #e8f2fb;
        color: #2878b5;
        border-radius: 8px;
        margin-bottom: 12px;
    }

    .custom-tool-card:nth-child(2) .custom-tool-icon {
        background: #f0e9f8;
        color: #8056a8;
    }

    .custom-tool-card:nth-child(3) .custom-tool-icon {
        background: #e5f5eb;
        color: #269b63;
    }

    .custom-tool-card:nth-child(4) .custom-tool-icon {
        background: #fff1d9;
        color: #d88916;
    }

    .custom-tool-card:nth-child(5) .custom-tool-icon {
        background: #fceaf1;
        color: #c4517b;
    }

    /* Code Blocks */

    .custom-tool-code {
        background: #1e2b3c;
        border-radius: 6px;
        overflow: hidden;
        margin: 15px 0;
    }

    .custom-tool-code-header {
        background: #293b52;
        color: #dce6f1;
        padding: 10px 15px;
    }

    .custom-tool-code pre {
        background: #1e2b3c;
        color: #f1f5f9;
        padding: 18px;
        margin: 0;
        font-family: Consolas, monospace;
        overflow-x: auto;
        line-height: 1.5;
    }

    /* Information and Tip */

    .custom-tool-info {
        background: #e8f2fb;
        border-left: 4px solid #2878b5;
        border-radius: 6px;
        padding: 14px 18px;
        margin: 18px 0;
    }

    .custom-tool-tip {
        background: #fff8e7;
        border-left: 4px solid #e69b28;
        border-radius: 6px;
        padding: 14px 18px;
        margin: 20px 0;
    }

    /* Applications */

    .custom-tool-applications {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
        margin: 18px 0;
    }

    .custom-tool-app {
        background: #f4f7fb;
        border: 1px solid #e1e8f0;
        border-radius: 8px;
        padding: 14px;
    }

    @media (max-width: 700px) {
        .custom-tool-flow-track {
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .custom-tool-step {
            width: 100%;
            min-height: 120px;
            box-sizing: border-box;
            padding: 15px;
        }

        .custom-tool-arrow {
            transform: rotate(90deg);
        }

        .custom-tool-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 500px) {
        .custom-tool-grid,
        .custom-tool-applications {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="custom-tool-flow">

    <div class="custom-tool-flow-track">

        <div class="custom-tool-step">
            <div class="custom-tool-number">01</div>
            <h3>User Inputs</h3>
            <p>Select GIS data and enter processing parameters.</p>
        </div>

        <div class="custom-tool-arrow">➜</div>

        <div class="custom-tool-step interface">
            <div class="custom-tool-number">02</div>
            <h3>Tool Interface</h3>
            <p>Collect and validate the selected inputs.</p>
        </div>

        <div class="custom-tool-arrow">➜</div>

        <div class="custom-tool-step processing">
            <div class="custom-tool-number">03</div>
            <h3>GIS Processing</h3>
            <p>Execute the Python geoprocessing operation.</p>
        </div>

        <div class="custom-tool-arrow">➜</div>

        <div class="custom-tool-step output">
            <div class="custom-tool-number">04</div>
            <h3>Output</h3>
            <p>Save the processed geographic dataset.</p>
        </div>

    </div>

    <div class="custom-tool-footer">
        Custom GIS Tool: Input → Interface → Processing → Output
    </div>

</div>

<h2>Common Types of Custom GIS Tools</h2>

<p>
    Custom GIS tools can be developed in different formats depending
    on the GIS software and how users need to access them.
</p>

<div class="custom-tool-grid">

    <div class="custom-tool-card">
        <div class="custom-tool-icon">⚙</div>
        <h3>QGIS Processing Script</h3>
        <p>
            Adds a custom Python algorithm to the QGIS Processing
            Toolbox for performing GIS operations.
        </p>
    </div>

    <div class="custom-tool-card">
        <div class="custom-tool-icon">🧩</div>
        <h3>QGIS Plugin</h3>
        <p>
            Provides reusable GIS functionality through a graphical
            interface inside QGIS.
        </p>
    </div>

    <div class="custom-tool-card">
        <div class="custom-tool-icon">🗺</div>
        <h3>ArcGIS Python Toolbox</h3>
        <p>
            Uses a .pyt file to define custom geoprocessing
            tools in ArcGIS Pro.
        </p>
    </div>

    <div class="custom-tool-card">
        <div class="custom-tool-icon">⌨</div>
        <h3>Command-Line Tool</h3>
        <p>
            Accepts parameters through a terminal and runs
            Python GIS operations.
        </p>
    </div>

    <div class="custom-tool-card">
        <div class="custom-tool-icon">🌐</div>
        <h3>Web-Based GIS Tool</h3>
        <p>
            Allows users to submit geographic data and run
            GIS operations through a web interface.
        </p>
    </div>

</div>

<h2>Creating a Reusable GIS Tool with Python</h2>

<p>
    Python functions make it possible to reuse the same GIS
    operation with different input files and parameters.
    The following example creates a buffer around geographic features.
</p>

<div class="custom-tool-code">
    <div class="custom-tool-code-header">
        Python – Reusable Buffer Function
    </div>
    <pre><code>import geopandas as gpd

def create_buffer(input_file, distance, output_file):

    # Read the input GIS dataset
    gdf = gpd.read_file(input_file)

    # Create a buffer around each feature
    gdf["geometry"] = gdf.geometry.buffer(distance)

    # Save the output dataset
    gdf.to_file(output_file, driver="GPKG")

    print("Buffer created successfully!")

    return output_file</code></pre>
</div>

<p>
    The <code>create_buffer()</code> function accepts three parameters:
    the input file, buffer distance, and output file. It reads the
    dataset, creates buffer geometries, and saves the result.
</p>

<h3>Using the Function</h3>

<p>
    The function can be called with different input datasets,
    buffer distances, and output filenames.
</p>

<div class="custom-tool-code">
    <div class="custom-tool-code-header">
        Python – Function Call
    </div>
    <pre><code>create_buffer(
    "roads.gpkg",
    50,
    "roads_buffer.gpkg"
)</code></pre>
</div>

<div class="custom-tool-info">
    <strong>Important:</strong>
    Buffer distance uses the coordinate units of the dataset.
    Use a suitable projected coordinate reference system with
    metre units when the required distance is in metres.
</div>

<h2>Running a Custom Tool from the Command Line</h2>

<p>
    A Python GIS function can also be connected to command-line
    arguments. This allows users to provide input filenames,
    processing values, and output locations through a terminal.
</p>

<div class="custom-tool-code">
    <div class="custom-tool-code-header">
        Python – Complete Command-Line Tool
    </div>
    <pre><code>import geopandas as gpd
import argparse

def create_buffer(input_file, distance, output_file):

    gdf = gpd.read_file(input_file)

    gdf["geometry"] = gdf.geometry.buffer(distance)

    gdf.to_file(output_file, driver="GPKG")

    print("Buffer created successfully!")


parser = argparse.ArgumentParser(
    description="Create a GIS buffer"
)

parser.add_argument("input_file")
parser.add_argument("distance", type=float)
parser.add_argument("output_file")

args = parser.parse_args()

create_buffer(
    args.input_file,
    args.distance,
    args.output_file
)</code></pre>
</div>

<p>Example command:</p>

<div class="custom-tool-code">
    <div class="custom-tool-code-header">
        Terminal
    </div>
    <pre><code>python buffer_tool.py roads.gpkg 50 roads_buffer.gpkg</code></pre>
</div>

<p>
    In this command, the user provides the input dataset,
    buffer distance, and output filename. The script uses
    these values to execute the buffer operation.
</p>

<h2>Applications of Custom GIS Tools</h2>

<p>
    Custom tools help automate frequently performed GIS tasks
    and make complex operations easier to repeat.
</p>
<ul>
    <li><strong>Road Network Analysis:</strong> Create road buffers and analyse nearby geographic features.</li>
    <li><strong>Urban Planning:</strong> Identify suitable areas for development using spatial analysis.</li>
    <li><strong>Environmental Analysis:</strong> Process land-use and vegetation datasets.</li>
    <li><strong>Water Resource Management:</strong> Analyse rivers, drainage networks, and watersheds.</li>
    <li><strong>Data preparation:</strong> Reproject, process, and export multiple spatial layers.</li>
</ul>

<div class="custom-tool-tip">
    <p style="margin:0">
        <strong>Important:</strong>
        Design custom GIS tools with clear input parameters,
        meaningful output filenames, and useful error messages.
        Test the tool with different datasets before sharing it
        with other users.
    </p>
</div>
