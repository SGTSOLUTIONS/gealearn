{{-- resources/views/learning/lessons/components.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A Geographic Information System (GIS) consists of <strong>five main components: Hardware, Software, Data, People, and Methods.</strong>
    These components work together to collect, manage, analyze, and display geographic information.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify the five main components of GIS</li>
    <li>Understand the role of each component</li>
    <li>See how all five components work together in a real-world example</li>
</ul>

{{-- Embedded Diagram Matching Your Image --}}
<style>
    .gis-diagram-container {
        margin: 30px 0;
        font-family: sans-serif;
        text-align: center;
    }
    .gis-top-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
        position: relative;
    }
    .gis-box {
        flex: 1;
        border-radius: 8px;
        padding: 15px 10px;
        min-height: 120px;
        box-sizing: border-box;
        font-size: 14px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    .gis-box h4 {
        margin: 0 0 8px 0;
        font-size: 16px;
    }
    .gis-box p {
        margin: 0;
        font-size: 13px;
        color: #333;
    }
    /* Specific Box Colors matching your image */
    .box-hardware { background-color: #e6f0fa; border: 1px solid #b3d1f2; }
    .box-data { background-color: #faede6; border: 1px solid #f2cbb3; }
    .box-software { background-color: #e6f7ef; border: 1px solid #b3e6d1; }
    .box-people { background-color: #e6ebf5; border: 1px solid #b3c2e6; }
    
    .gis-arrow {
        font-size: 20px;
        color: #888;
        font-weight: bold;
    }
    
    .gis-methods-box {
        background-color: #fce8ec;
        border: 1px solid #f5b8c4;
        border-radius: 8px;
        padding: 15px;
        text-align: center;
    }
    .gis-methods-box h4 {
        margin: 0 0 5px 0;
        font-size: 16px;
    }
    .gis-methods-box p {
        margin: 0;
        font-size: 13px;
    }
</style>

<div class="gis-diagram-container">
    <div style="font-weight: bold; margin-bottom: 15px; text-align: left;">A GIS works when five parts meet around the data</div>
    
    <!-- Top Row Boxes -->
    <div class="gis-top-row">
        <div class="gis-box box-hardware">
            <h4>Hardware</h4>
            <p>Computers, servers, GPS receivers, drones, mobile devices</p>
        </div>
        <div class="gis-arrow">&rarr;</div>
        <div class="gis-box box-data">
            <h4>Data</h4>
            <p>Spatial (where) plus attribute (what) information</p>
        </div>
        <div class="gis-arrow">&rarr;</div>
        <div class="gis-box box-software">
            <h4>Software</h4>
            <p>QGIS, ArcGIS, GRASS GIS, PostGIS stores and queries spatial data</p>
        </div>
        <div class="gis-arrow">&rarr;</div>
        <div class="gis-box box-people">
            <h4>People</h4>
            <p>Analysts, surveyors, cartographers, decision-makers</p>
        </div>
    </div>

    <!-- Bottom Methods Box -->
    <div class="gis-methods-box">
        <h4>Methods</h4>
        <p>Workflows and standards used to collect, process and present data</p>
    </div>
</div>

<div class="note">
    <p style="margin:0"><strong>Note:</strong> Hardware provides the equipment, software performs the operations, data supplies the geographic information, people operate the system, and methods ensure that work is performed consistently and accurately.</p>
</div>

<h2>1. Hardware</h2>
<p>Hardware refers to the physical devices used to collect, process, store, and display geographic data.</p>
<p><strong>Examples:</strong></p>
<ul>
    <li>Computers and laptops</li>
    <li>GPS receivers and mobile phones</li>
    <li>Drones and surveying equipment</li>
    <li>Servers and storage devices</li>
</ul>
<p><strong>Real-world example:</strong> A surveyor uses a GPS receiver to collect building coordinates and a computer to process the collected information.</p>

<h2>2. Software</h2>
<p>GIS software provides the tools needed to create maps, manage geographic data, and perform spatial analysis.</p>
<p><strong>Examples:</strong></p>
<ul>
    <li><strong>QGIS:</strong> Used to create maps and analyze geographic data.</li>
    <li><strong>ArcGIS Pro:</strong> Used for professional mapping and spatial analysis.</li>
    <li><strong>Leaflet:</strong> A JavaScript library for creating interactive web maps.</li>
    <li><strong>OpenLayers:</strong> A JavaScript library for displaying and interacting with geographic data on websites.</li>
</ul>
<p><strong>Real-world example:</strong> A GIS developer uses OpenLayers to display buildings and roads on a website and allows users to click a building to view its details.</p>

<h2>3. Data</h2>
<p>Data is the foundation of GIS. It contains information about geographic locations and the features found at those locations.</p>
<p>GIS commonly uses two types of data:</p>

<h3>Spatial Data</h3>
<p>Spatial data describes the location, shape, and size of geographic features.</p>
<ul>
    <li><strong>Points:</strong> Schools, wells, and streetlights</li>
    <li><strong>Lines:</strong> Roads, rivers, and pipelines</li>
    <li><strong>Polygons:</strong> Buildings, land parcels, and municipal boundaries</li>
</ul>

<h3>Attribute Data</h3>
<p>Attribute data describes the details associated with geographic features, such as names, addresses, ownership, and tax records.</p>
<p>GIS can also use satellite imagery, drone images, elevation data, and spreadsheets.</p>
<p><strong>Real-world example:</strong> A building's location is stored as spatial data, while its building ID, address, usage, and property tax details are stored as attribute data.</p>

<h2>4. People</h2>
<p>People are the individuals who collect, manage, analyze, develop, and use GIS information.</p>
<p><strong>Examples:</strong></p>
<ul>
    <li><strong>Surveyors:</strong> Collect geographic information.</li>
    <li><strong>GIS analysts:</strong> Prepare maps and analyze data.</li>
    <li><strong>GIS developers:</strong> Build mapping applications.</li>
    <li><strong>Urban planners:</strong> Use maps to plan infrastructure.</li>
    <li><strong>Government officials:</strong> Use GIS information to manage public services.</li>
</ul>
<p><strong>Real-world example:</strong> A surveyor collects building locations, a GIS analyst checks the data, and a municipal officer uses the map to review property records.</p>

<h2>5. Methods</h2>
<p>Methods are the procedures, workflows, and rules followed to collect, process, analyze, and maintain geographic data. They help ensure that GIS work is consistent, accurate, and reliable.</p>
<p><strong>Examples:</strong></p>
<ul>
    <li>Collecting coordinates using GPS.</li>
    <li>Checking and correcting geographic data.</li>
    <li>Using the correct coordinate reference system.</li>
    <li>Following standard procedures for mapping buildings.</li>
    <li>Updating property records and verifying data accuracy.</li>
    <li>Performing spatial analysis to identify nearby facilities.</li>
</ul>
<p><strong>Real-world example:</strong> A municipality follows a standard workflow to survey buildings, verify their boundaries, update property details, and publish the information on a GIS map.</p>

<h2>How Do the Five Components Work Together?</h2>
<p>Imagine a municipality creating a digital map of all buildings in a town.</p>
<ol>
    <li><strong>Hardware:</strong> GPS devices collect building coordinates, and computers process the data.</li>
    <li><strong>Software:</strong> GIS applications create and display the building map.</li>
    <li><strong>Data:</strong> Building locations, boundaries, addresses, and property records are stored.</li>
    <li><strong>People:</strong> Surveyors, GIS analysts, and municipal officers work with the information.</li>
    <li><strong>Methods:</strong> Standard procedures help verify locations and maintain accurate records.</li>
</ol>
<p>Together, these five components help the municipality manage buildings, maintain property records, and plan public infrastructure more efficiently.</p>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Even with good hardware, software, and data, poor methods can result in unreliable maps or incorrect conclusions. Always follow consistent procedures.</p>
</div>