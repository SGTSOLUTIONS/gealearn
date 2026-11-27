
{{-- resources/views/learning/lessons/8-1-intro.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GIS programming means writing code to automate, extend and customise GIS work.
    It follows a simple four-step cycle: read, process, analyse, and save.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the benefits of scripting GIS work</li>
    <li>Identify the four steps of a GIS script</li>
    <li>Know where to run your code</li>
</ul>

<h2>Visual Guide: The Four-Step Script Flow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-weight: bold;">1 Read</div>
        <div style="padding: 8px; background: #fff;">open files, databases, APIs</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-weight: bold;">2 Process</div>
        <div style="padding: 8px; background: #fff;">reproject, clean, filter</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 8px; font-weight: bold;">3 Analyse</div>
        <div style="padding: 8px; background: #fff;">buffer, join, summarise</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 8px; font-weight: bold;">4 Save</div>
        <div style="padding: 8px; background: #fff;">files, maps, reports</div>
    </div>
</div>

<h3>Why Script GIS Work?</h3>
<div style="display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9; width: 22%;"><strong>Repeatable</strong></div>
    <div style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9; width: 22%;"><strong>Fast on many files</strong></div>
    <div style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9; width: 22%;"><strong>Fewer manual errors</strong></div>
    <div style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9; width: 22%;"><strong>Easy to share</strong></div>
</div>

<p>
    The diagram shows the repetitive four-step cycle that every GIS script follows, and the four main reasons why scripting saves time and reduces errors compared to clicking through menus.
</p>

<h2>GIS Programming Workflow</h2>

<p>
    Each stage of a GIS script performs a specific task. Together, these
    stages transform raw geographic data into useful information.
    Understanding how they work makes it easier to plan and write
    a complete GIS program.
</p>

<h3>1. Reading Geographic Data</h3>

<p>
    A script first needs to access the geographic data required for
    the task. This data may come from spatial files, databases or
    web services. For example, a script can load a road network
    or a district boundary dataset.
</p>

<h3>2. Processing Geographic Data</h3>

<p>
    The loaded data may need preparation before analysis. Processing
    includes filtering unwanted features, correcting data and
    converting datasets into a suitable coordinate reference system.
</p>

<h3>3. Performing Spatial Analysis</h3>

<p>
    Spatial analysis helps identify patterns and relationships
    between geographic features. Operations such as buffering,
    spatial joining and calculating areas can be performed using
    programming libraries.
</p>

<h3>4. Saving the Results</h3>

<p>
    After processing and analysis, the results can be exported
    into formats such as GeoPackage, Shapefile, GeoJSON or GeoTIFF.
    Scripts can also generate maps, tables and reports for further use.
</p>

<h2>Example: Automating a GIS Task</h2>

<p>
    Consider a project that identifies roads located within a
    particular distance of a river. Instead of performing every
    operation manually, a GIS script can organise the workflow
    into a sequence of steps.
</p>

<ul>
    <li><strong>Read:</strong> Load the river and road datasets.</li>
    <li><strong>Process:</strong> Check the coordinate reference system and prepare the data.</li>
    <li><strong>Analyse:</strong> Create a buffer around the river and identify roads that intersect it.</li>
    <li><strong>Save:</strong> Export the selected roads as a new spatial dataset.</li>
</ul>

<p>
    This approach makes the workflow easier to repeat when new road
    or river datasets become available. The same script can be used
    again with updated input data.
</p>

<h2>Where Can GIS Programming Be Used?</h2>

<p>
    GIS programming can be performed in different software environments.
    The choice depends on the programming language and the type of
    GIS operation being developed.
</p>

<ul>
    <li><strong>QGIS Python Console:</strong> Execute Python commands and access QGIS layers and projects.</li>
    <li><strong>ArcGIS Python Environment:</strong> Automate ArcGIS operations using Python and ArcPy.</li>
    <li><strong>VS Code and IDLE:</strong> Write, edit and execute Python scripts.</li>
    <li><strong>Jupyter Notebook:</strong> Run code in separate cells and explore data analysis results.</li>
    <li><strong>Command Line:</strong> Execute scripts and automate processing tasks through a terminal.</li>
</ul>



<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Script any task you will do more than twice.</p>
</div>
