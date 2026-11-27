
{{-- resources/views/learning/lessons/8-23-arcpy.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    ArcPy is a Python package included with ArcGIS Pro. It allows users to
    automate GIS tasks, run geoprocessing tools, manage geographic data,
    and work with feature attributes using Python scripts.
</p>

<h2>Learning Goals</h2>
<ul>
    <li>Understand the purpose of ArcPy in GIS</li>
    <li>Set a workspace and manage GIS data</li>
    <li>Run geoprocessing tools using Python</li>
    <li>Read and update attribute records with cursors</li>
</ul>

<h2>ArcPy</h2>

<p>
    ArcPy connects Python programming with ArcGIS Pro. Instead of performing
    every GIS operation manually, users can write scripts to execute
    geoprocessing tools and automate repeated workflows.
</p>

<div class="info">
    <p>
        <strong>Example:</strong> A GIS analyst can use ArcPy to create
        buffers around roads, calculate feature counts, and update
        attribute values automatically.
    </p>
</div>

<h2>ArcPy Modules and Their Uses</h2>

<p>
    ArcPy provides different modules that organise GIS tools according
    to their functions.
</p>

<div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th>Module</th>
                <th>Purpose</th>
                <th>Example</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>arcpy.analysis</code></td>
                <td>Spatial analysis operations</td>
                <td>Buffer, Clip, Intersect</td>
            </tr>
            <tr>
                <td><code>arcpy.management</code></td>
                <td>Manage GIS datasets</td>
                <td>Copy Features, Project</td>
            </tr>
            <tr>
                <td><code>arcpy.conversion</code></td>
                <td>Convert data formats</td>
                <td>Feature Class To Shapefile</td>
            </tr>
            <tr>
                <td><code>arcpy.da</code></td>
                <td>Access and edit table records</td>
                <td>SearchCursor, UpdateCursor</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Setting Up an ArcPy Workspace</h2>

<p>
    A workspace specifies the location of GIS data that a script will use.
    It can point to a folder or a geodatabase.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        ArcPy Workspace Example
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.7; overflow-x:auto;"><code>import arcpy

# Set the workspace
arcpy.env.workspace = r"C:\GIS_Project\City.gdb"

# Allow existing outputs to be replaced
arcpy.env.overwriteOutput = True

# Display available feature classes
print(arcpy.ListFeatureClasses())</code></pre>
</div>

<p>
    In this example, ArcPy connects to the City geodatabase and lists
    the available feature classes.
</p>

<h2>Running a Geoprocessing Tool</h2>

<p>
    ArcPy allows Python scripts to execute geoprocessing tools directly.
    For example, the Buffer tool creates an area around geographic features
    within a specified distance.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        ArcPy Buffer Example
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.7; overflow-x:auto;"><code>import arcpy

arcpy.env.workspace = r"C:\GIS_Project\City.gdb"
arcpy.env.overwriteOutput = True

# Create a buffer around roads
arcpy.analysis.Buffer(
    "Roads",
    "Roads_Buffer",
    "50 Meters"
)

print("Buffer created successfully")</code></pre>
</div>

<p>
    This script creates a 50-metre buffer around the road features
    and saves the result as Roads_Buffer in the workspace.
</p>

<h2>Working with Attribute Data Using Cursors</h2>

<p>
    Cursors allow Python scripts to access and modify records in GIS
    attribute tables. ArcPy provides three commonly used data access cursors.
</p>

<ul>
    <li><strong>SearchCursor:</strong> Reads existing records.</li>
    <li><strong>UpdateCursor:</strong> Reads and modifies existing records.</li>
    <li><strong>InsertCursor:</strong> Adds new records.</li>
</ul>

<h3>Example: Reading Road Names</h3>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        ArcPy SearchCursor Example
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.7; overflow-x:auto;"><code>import arcpy

roads = r"C:\GIS_Project\City.gdb\Roads"

with arcpy.da.SearchCursor(roads, ["ROAD_NAME"]) as cursor:
    for row in cursor:
        print(row[0])</code></pre>
</div>

<p>
    This example reads the ROAD_NAME field from the Roads feature class
    and displays each road name.
</p>

<h2>Handling Geoprocessing Results</h2>

<p>
    ArcPy provides messages that help users understand whether a tool
    completed successfully and whether warnings or errors occurred.
</p>

<div style="background:#1e2b3c; border-radius:6px; overflow:hidden; margin:15px 0;">
    <div style="background:#293b52; color:#dce6f1; padding:10px 15px; font-size:13px;">
        ArcPy Error Handling Example
    </div>
    <pre style="background:#1e2b3c; color:#f1f5f9; padding:18px; margin:0; font-family:Consolas, monospace; font-size:14px; line-height:1.7; overflow-x:auto;"><code>import arcpy

try:
    arcpy.analysis.Buffer(
        "Roads",
        "Roads_Buffer",
        "50 Meters"
    )

    print(arcpy.GetMessages())

except arcpy.ExecuteError:
    print(arcpy.GetMessages(2))</code></pre>
</div>

<p>
    The try block runs the Buffer tool. If a geoprocessing error occurs,
    the except block displays the error messages.
</p>

<h2>Applications of ArcPy in GIS</h2>

<ul>
    <li><strong>Spatial analysis:</strong> Create buffers and perform overlay operations.</li>
    <li><strong>Data management:</strong> Copy, rename, and organise GIS datasets.</li>
    <li><strong>Data conversion:</strong> Convert spatial data between supported formats.</li>
    <li><strong>Attribute processing:</strong> Read, update, and insert table records.</li>
    <li><strong>Workflow automation:</strong> Run repeated GIS operations through Python scripts.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Important:</strong> ArcPy is included with ArcGIS Pro.
        Run ArcPy scripts using the Python environment configured for
        your ArcGIS Pro installation.
    </p>
</div>
