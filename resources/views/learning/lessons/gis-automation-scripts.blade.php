
{{-- resources/views/learning/lessons/8-24-automation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GIS automation uses Python scripts to perform repetitive geographic
    data processing tasks automatically. Instead of running each operation
    manually, users can combine multiple steps into one script and execute
    the entire workflow with a single command.
</p>

<h2>Learning Goals</h2>
<ul>
    <li>Understand the structure of a GIS automation script</li>
    <li>Organise Python code using functions and parameters</li>
    <li>Read, process, and save geographic data automatically</li>
    <li>Use logging to monitor script execution</li>
    <li>Run GIS scripts from the command line or a scheduler</li>
</ul>

<h2>GIS Automation</h2>

<p>
    A GIS workflow often involves several repeated operations, such as
    loading spatial data, checking its properties, performing spatial
    analysis, and saving the results. Automation combines these operations
    into a reusable Python script.
</p>

<p>
    For example, a GIS analyst who regularly creates buffers around road
    networks can automate the process instead of repeating the same steps
    manually for every dataset.
</p>

<h2>Structure of an Automation Script</h2>

<p>
    A well-organised GIS automation script generally contains the following
    stages:
</p>

<!-- Compact GIS Automation Flowchart -->
<div style="display:flex; flex-direction:column; align-items:center; gap:5px; margin:18px auto;">

    <div style="width:100%; max-width:250px; padding:9px; box-sizing:border-box; text-align:center; border:1.5px solid #64748b; border-radius:5px; background:#f1f5f9; color:#1e293b;">
        <strong style="font-size:14px;">Input</strong>
    </div>

    <div style="font-size:18px; color:#64748b;">↓</div>

    <div style="width:100%; max-width:250px; padding:9px; box-sizing:border-box; text-align:center; border:1.5px solid #16a34a; border-radius:5px; background:#f0fdf4; color:#166534;">
        <strong style="font-size:14px;">Read Data</strong>
    </div>

    <div style="font-size:18px; color:#64748b;">↓</div>

    <div style="width:100%; max-width:250px; padding:9px; box-sizing:border-box; text-align:center; border:1.5px solid #2563eb; border-radius:5px; background:#eff6ff; color:#1e40af;">
        <strong style="font-size:14px;">Process Data</strong>
    </div>

    <div style="font-size:18px; color:#64748b;">↓</div>

    <div style="width:100%; max-width:250px; padding:9px; box-sizing:border-box; text-align:center; border:1.5px solid #d97706; border-radius:5px; background:#fffbeb; color:#92400e;">
        <strong style="font-size:14px;">Save Output</strong>
    </div>

    <div style="font-size:18px; color:#64748b;">↓</div>

    <div style="width:100%; max-width:250px; padding:9px; box-sizing:border-box; text-align:center; border:1.5px solid #9333ea; border-radius:5px; background:#faf5ff; color:#6b21a8;">
        <strong style="font-size:14px;">Logging</strong>
    </div>

</div>

<h2>Creating a GIS Automation Script</h2>

<p>
    GeoPandas can be used to automate vector data processing.
    In this example, a Python script reads a road dataset, creates
    a buffer around the roads, and saves the result.
</p>

<h3>Example: Automated Road Buffering</h3>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        auto_buffer.py
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code>import geopandas as gpd
import logging
import argparse

# Configure logging
logging.basicConfig(
    filename="gis_automation.log",
    level=logging.INFO,
    format="%(asctime)s - %(levelname)s - %(message)s"
)

def main(input_path, output_path, distance):

    try:
        # Read input data
        roads = gpd.read_file(input_path)
        logging.info("Input data loaded successfully")

        # Check coordinate reference system
        if roads.crs is None:
            raise ValueError("Input data has no CRS")

        # Convert to a projected CRS for distance-based buffering
        roads = roads.to_crs(roads.estimate_utm_crs())

        # Create buffer
        roads["geometry"] = roads.geometry.buffer(distance)

        # Save output
        roads.to_file(output_path)

        logging.info("Buffer created and saved successfully")
        print("Automation completed successfully")

    except Exception:
        logging.exception("GIS automation failed")
        raise

if __name__ == "__main__":

    parser = argparse.ArgumentParser(
        description="Automated road buffering"
    )

    parser.add_argument("input_path")
    parser.add_argument("output_path")
    parser.add_argument("--distance", type=float, default=50)

    args = parser.parse_args()

    main(
        args.input_path,
        args.output_path,
        args.distance
    )</code></pre>
</div>

<p>
    This script uses a main function to organise the workflow.
    It accepts input and output file paths and a buffer distance
    through command-line arguments. It also records the processing
    progress in a log file.
</p>

<h2>Understanding the Main Function</h2>

<p>
    The <code>main()</code> function contains the operations that make up
    the automation workflow. It keeps the code organised and allows the
    same processing steps to be reused with different datasets.
</p>

<p>
    The condition <code>if __name__ == "__main__":</code> ensures that
    the main workflow runs when the Python file is executed directly.
    It does not automatically run when the file is imported into another
    Python script.
</p>

<h2>Using Parameters to Control Processing</h2>

<p>
    Parameters allow users to change the input file, output file, and
    processing distance without editing the Python script each time.
    The <code>argparse</code> module helps receive these values from
    the command line.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        Command-Line Execution
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code>python auto_buffer.py roads.gpkg roads_buffer.gpkg --distance 100</code></pre>
</div>

<p>
    In this command:
</p>

<ul>
    <li><code>auto_buffer.py</code> is the Python script.</li>
    <li><code>roads.gpkg</code> is the input road dataset.</li>
    <li><code>roads_buffer.gpkg</code> is the output file.</li>
    <li><code>--distance 100</code> sets the buffer distance to 100 metres.</li>
</ul>

<h2>Logging and Error Monitoring</h2>

<p>
    Logging records important events during script execution. It helps
    users understand which operations were completed and identify
    problems when an automation workflow fails.
</p>

<p>
    Python provides the <code>logging</code> module for recording
    information, warnings, and errors.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        Python Logging Example
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.5; overflow-x:auto;"><code>import logging

logging.basicConfig(
    filename="process.log",
    level=logging.INFO
)

logging.info("GIS processing started")
logging.warning("Check input dataset")
logging.error("Processing failed")</code></pre>
</div>

<p>
    The messages are written to <code>process.log</code>, allowing
    users to review the script's execution history.
</p>

<h2>Scheduling GIS Automation</h2>

<p>
    GIS automation scripts can also run at scheduled times without
    requiring users to start them manually each time.
</p>

<ul>
    <li>
        <strong>Windows Task Scheduler:</strong>
        Runs Python scripts at specified times or intervals on Windows.
    </li>
    <li>
        <strong>Cron:</strong>
        Schedules scripts to run automatically on Linux and Unix systems.
    </li>
</ul>

<p>
    For example, a GIS analyst can schedule a script to process updated
    road datasets every day and save the results in a designated folder.
</p>

<h2>Applications of GIS Automation</h2>

<ul>
    <li><strong>Regular data updates:</strong> Process newly received spatial datasets.</li>
    <li><strong>Spatial analysis:</strong> Automatically perform buffering and overlay operations.</li>
    <li><strong>Data conversion:</strong> Convert multiple GIS files into a common format.</li>
    <li><strong>Map preparation:</strong> Prepare geographic data for regular map updates.</li>
    <li><strong>Reporting:</strong> Generate processing summaries and log files.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Important:</strong> Always preserve the original GIS dataset
        and save processed results to a separate output file. For accurate
        distance-based operations, use an appropriate projected coordinate
        reference system with suitable linear units.
    </p>
</div>
