{{-- resources/views/learning/lessons/workflow.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A GIS workflow is a structured sequence of steps used to collect, prepare, manage, analyze, visualize, and share geographic information to solve a specific problem.
    A well-designed workflow helps ensure data quality, reduces errors, and produces reliable results.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Learn the 10 main steps of a GIS workflow</li>
    <li>Understand the different types of GIS workflows</li>
    <li>See a complete example of a land parcel mapping workflow</li>
</ul>

<div class="note">
    <p style="margin:0"><strong>Note:</strong> A clear workflow improves the quality and reliability of GIS projects and provides a foundation for more advanced spatial analysis and GIS application development.</p>
</div>

<h2>The 10 Main Steps in a GIS Workflow</h2>
<ol>
    <li><strong>Define the Problem:</strong> Identify the project's purpose and the core questions it needs to answer.</li>
    <li><strong>Collect Geographic Data:</strong> Gather required information from surveys, GPS devices, satellite imagery, or government records.</li>
    <li><strong>Prepare and Clean the Data:</strong> Check for missing values, duplicate records, incorrect coordinates, and invalid geometries.</li>
    <li><strong>Manage and Store the Data:</strong> Organize datasets into GIS folders, files, or spatial databases with proper documentation.</li>
    <li><strong>Align Coordinate Reference Systems:</strong> Ensure all datasets use compatible coordinate systems so map layers align correctly.</li>
    <li><strong>Perform Spatial Analysis:</strong> Apply GIS tools (such as buffer, overlay, or network analysis) to answer the project's questions.</li>
    <li><strong>Visualize the Results:</strong> Use proper map symbols, colors, labels, and layouts to represent findings clearly.</li>
    <li><strong>Validate the Results:</strong> Check map outputs against field observations, original data, or reliable external sources.</li>
    <li><strong>Share and Publish the Results:</strong> Present findings through reports, maps, dashboards, or web applications.</li>
    <li><strong>Maintain and Update the Data:</strong> Continuously revise and update datasets as real-world geographic conditions change.</li>
</ol>

<h2>Types of GIS Workflows</h2>
<ul>
    <li><strong>Mapping Workflow:</strong> Collect data, style map layers, label features, and prepare final map layouts.</li>
    <li><strong>Data Management Workflow:</strong> Import, clean, validate, organize, and update geographic datasets.</li>
    <li><strong>Spatial Analysis Workflow:</strong> Select datasets, perform spatial operations, validate outcomes, and interpret findings.</li>
    <li><strong>Remote Sensing Workflow:</strong> Acquire imagery, preprocess data, classify features, and produce raster maps.</li>
    <li><strong>Web GIS Workflow:</strong> Prepare data, store it in databases, publish map services, and deploy interactive web applications.</li>
    <li><strong>Automation Workflow:</strong> Use scripts or models to execute repetitive GIS operations consistently.</li>
</ul>

<div >
    <h2>Example: Land Parcel Mapping Workflow</h2>
    <ol>
        <li>Collect survey measurements and existing parcel records.</li>
        <li>Prepare coordinates and verify the coordinate reference system.</li>
        <li>Create digital parcel polygons.</li>
        <li>Link each polygon to its unique parcel identification number.</li>
        <li>Validate geometry and attribute records.</li>
        <li>Calculate parcel areas using a suitable projected coordinate system.</li>
        <li>Compare results with authoritative survey records.</li>
        <li>Publish the validated data for authorized users.</li>
        <li>Maintain a log of updates and revisions.</li>
    </ol>
</div>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Documenting each step of your workflow helps you repeat the process later, identify where errors occurred, and explain your methods to others.</p>
</div>