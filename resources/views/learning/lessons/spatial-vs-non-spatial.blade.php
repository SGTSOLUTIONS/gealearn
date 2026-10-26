{{-- resources/views/learning/lessons/spatial-vs-non-spatial.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Spatial and non-spatial data are two important types of information used in GIS. Understanding the difference helps you organize geographic information, create accurate maps, and perform spatial analysis.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the difference between spatial and non-spatial data</li>
    <li>Learn how they work together in a GIS project</li>
    <li>See a workflow for combining both data types</li>
</ul>

<div class="note">
    <p style="margin:0"><strong>Note:</strong> Spatial data describes where a feature is; non-spatial data tells you more about that feature.</p>
</div>

<h2>What Is Spatial Data?</h2>
<p>Spatial data describes the geographic location, shape, or extent of a real-world feature. It answers questions such as:</p>
<ul>
    <li>Where is the feature located?</li>
    <li>What shape does it have?</li>
    <li>How large is the area?</li>
    <li>How is it positioned relative to other features?</li>
</ul>

<h2>What Is Non-Spatial Data?</h2>
<p>Non-spatial data describes the properties or characteristics of an object without directly representing its geographic location or geometry. It answers questions such as:</p>
<ul>
    <li>What is the name of the feature?</li>
    <li>What category does it belong to?</li>
    <li>How many people live there?</li>
    <li>When was the information recorded?</li>
</ul>

<div class="example">
    <h2>Example</h2>
    <p>A school can be represented as a point (spatial data), while its name, student count, and school type are non-spatial data.</p>
</div>

<h2>How They Work Together</h2>
<p>In GIS, spatial and non-spatial data are connected through a shared identifier (e.g., School ID, Village Code) or stored together as geometry and attribute fields in one dataset.</p>

<div class="example">
    <h2>Example: School Dataset</h2>
    <p>Each school record has a point location (geometry) and attributes like school name, student count, and school type. The unique School ID links the spatial data to the attribute data.</p>
</div>

<h2>Workflow to Combine Data</h2>
<ol>
    <li>Load the spatial layer.</li>
    <li>Load the table (CSV/spreadsheet).</li>
    <li>Identify a common field.</li>
    <li>Check records for missing or duplicate values.</li>
    <li>Join the data.</li>
    <li>Visualize results (e.g., using graduated colours).</li>
    <li>Analyze the map.</li>
</ol>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> A common identifier is usually safer than matching by names, because names may have spelling variations or duplicates.</p>
</div>