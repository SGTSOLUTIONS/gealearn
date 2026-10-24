{{-- resources/views/learning/lessons/types-of-data.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Geographic Information Systems (GIS) rely on different types of data to represent the Earth's surface, human activities, and natural features.
    The two fundamental spatial data models are <strong>Vector</strong> and <strong>Raster</strong>, which are supported by attribute, tabular, imagery, and elevation data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the difference between vector and raster data</li>
    <li>Learn how attribute and tabular data describe features</li>
    <li>Recognise the role of imagery and elevation data</li>
</ul>

<div class="note">
    <p style="margin:0"><strong>Note:</strong> Understanding these data types is essential for selecting suitable datasets, creating accurate maps, and performing reliable spatial analysis.</p>
</div>

<h2>1. Vector Data</h2>
<p>Vector data represents geographic features using precise coordinates and geometric shapes. It is ideal for clearly defined, discrete objects like roads and buildings.</p>
<ul>
    <li><strong>Point Data:</strong> Represents specific locations using coordinates (e.g., hospitals, schools, wells, bus stops).</li>
    <li><strong>Line Data:</strong> Represents linear features that follow a path (e.g., roads, rivers, railways, pipelines).</li>
    <li><strong>Polygon Data:</strong> Represents enclosed areas with boundaries (e.g., land parcels, building footprints, lakes, districts).</li>
</ul>
<p><strong>Common Formats:</strong> Shapefile (.shp), GeoJSON (.geojson), GeoPackage (.gpkg), KML (.kml), and Esri Geodatabase.</p>

<h2>2. Raster Data</h2>
<p>Raster data represents information using a grid of cells or pixels. Each cell stores a value corresponding to a specific characteristic, such as elevation, temperature, rainfall, or color.</p>
<ul>
    <li><strong>Best Suited For:</strong> Continuous geographic phenomena and imagery (e.g., satellite photos, DEMs, temperature maps).</li>
    <li><strong>Resolution:</strong> Determines spatial detail. Smaller cells (e.g., 10-meter) provide finer detail than larger cells (e.g., 100-meter).</li>
    <li><strong>Common Formats:</strong> GeoTIFF (.tif), JPEG (.jpg), PNG (.png), and Cloud Optimized GeoTIFF (COG).</li>
</ul>

<h2>3. Attribute Data</h2>
<p>Attribute data describes the descriptive properties of geographic features and is stored in tables (rows are records, columns are fields).</p>
<ul>
    <li><strong>Values Include:</strong> Text (names/categories), integers (counts), decimals (areas), dates, and unique identifiers.</li>
    <li><strong>Uses:</strong> Searching for features, filtering by category, calculating statistics, and creating thematic maps.</li>
</ul>

<h2>4. Tabular Data</h2>
<p>Tabular data consists of rows and columns (found in spreadsheets or CSV files) that do not inherently contain geometry. However, they can be linked (joined) to spatial GIS layers using shared unique identifiers or geographic coordinates.</p>

<h2>5. Imagery Data</h2>
<p>Imagery data consists of photographs or sensor-captured images of the Earth's surface collected via satellites, aircraft, or drones.</p>
<ul>
    <li><strong>Types:</strong> Satellite imagery, aerial photos, drone captures, and multispectral imagery (used to distinguish vegetation, water, and soil).</li>
    <li><strong>Applications:</strong> Monitoring forest cover, tracking urban expansion, and mapping water bodies.</li>
</ul>

<h2>6. Elevation Data</h2>
<p>Elevation data measures the height of the Earth's surface relative to a vertical reference, essential for terrain and hydrological analysis.</p>
<ul>
    <li><strong>DEM (Digital Elevation Model):</strong> Represents general ground elevation as a raster grid.</li>
    <li><strong>DTM (Digital Terrain Model):</strong> Represents bare-earth terrain with trees and buildings removed.</li>
    <li><strong>DSM (Digital Surface Model):</strong> Represents the upper surface, including objects like buildings and tree canopies.</li>
</ul>

<div class="example">
    <h2>Example</h2>
    <p>A building polygon may be associated with the following attribute information:</p>
    <table>
        <thead>
            <tr>
                <th>Building ID</th>
                <th>Building Type</th>
                <th>Floors</th>
                <th>Area (sq. ft.)</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>B001</td><td>Residential</td><td>2</td><td>1,200</td></tr>
            <tr><td>B002</td><td>Commercial</td><td>3</td><td>2,400</td></tr>
            <tr><td>B003</td><td>Residential</td><td>1</td><td>850</td></tr>
        </tbody>
    </table>
    <p>When this table is linked to the corresponding building polygons, GIS can display and analyse the information geographically.</p>
</div>

<h2>Difference Between Vector and Raster Data</h2>
<table>
    <thead>
        <tr>
            <th>Feature</th>
            <th>Vector Data</th>
            <th>Raster Data</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>Representation</td><td>Coordinates and geometric shapes</td><td>Grid of cells or pixels</td></tr>
        <tr><td>Main types</td><td>Points, lines, polygons</td><td>Raster cells</td></tr>
        <tr><td>Best suited for</td><td>Discrete features and boundaries</td><td>Continuous surfaces and imagery</td></tr>
        <tr><td>Examples</td><td>Roads, buildings, parcels</td><td>Satellite images, elevation, rainfall</td></tr>
    </tbody>
</table>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Neither data model is universally better. Many GIS projects use both vector and raster data together to get a complete picture.</p>
</div>