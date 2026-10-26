{{-- resources/views/learning/lessons/spatial-data-intro.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Spatial data represents the geographic location, shape, size, and relationships of real-world features such as roads, rivers, buildings, forests, and administrative boundaries.
    It is the foundation of every GIS map and spatial analysis.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what spatial data is</li>
    <li>Learn the key characteristics of spatial data</li>
    <li>Recognise the two main spatial data models: vector and raster</li>
</ul>

<div class="note">
    <p style="margin:0"><strong>Note:</strong> Spatial data tells us <strong>where</strong> something is and what its geographic shape or extent looks like.</p>
</div>

<h2>Key Characteristics of Spatial Data</h2>
<ul>
    <li><strong>Location:</strong> Where a feature exists (e.g., school coordinates).</li>
    <li><strong>Geometry:</strong> The shape of a feature (point, line, or polygon).</li>
    <li><strong>Coordinate system:</strong> How locations are referenced (geographic or projected CRS).</li>
    <li><strong>Spatial relationships:</strong> How features relate geographically (e.g., a school located near a road).</li>
    <li><strong>Extent:</strong> The geographic area covered (e.g., a district boundary).</li>
    <li><strong>Scale and resolution:</strong> The level of geographic detail represented.</li>
</ul>

<h2>Two Main Data Models</h2>
<ul>
    <li><strong>Vector Data:</strong> Represents features using points, lines, and polygons. Best for discrete features with defined boundaries.</li>
    <li><strong>Raster Data:</strong> Represents geographic information as a grid of cells or pixels. Best for continuous surfaces and imagery.</li>
</ul>

<h2>Spatial vs. Attribute Data</h2>
<ul>
    <li><strong>Spatial data</strong> tells you where a feature is (geometry, coordinates).</li>
    <li><strong>Attribute data</strong> tells you what a feature is like (name, population, type).</li>
</ul>

<h2>Common Sources of Spatial Data</h2>
<ul>
    <li>Field surveys (GNSS/GPS receivers)</li>
    <li>Remote sensing (satellites, aircraft)</li>
    <li>Existing maps (digitized or georeferenced)</li>
    <li>Government datasets</li>
    <li>GPS-enabled devices</li>
    <li>Drones</li>
    <li>Open geospatial data</li>
</ul>

<h2>Why Spatial Data Matters</h2>
<ul>
    <li><strong>Mapping:</strong> Display geographic features and patterns.</li>
    <li><strong>Measurement:</strong> Calculate distances, lengths, and areas.</li>
    <li><strong>Spatial analysis:</strong> Identify proximity, overlap, connectivity, and distribution.</li>
    <li><strong>Planning:</strong> Support land use, transport, and infrastructure decisions.</li>
    <li><strong>Monitoring:</strong> Track environmental and urban changes.</li>
    <li><strong>Communication:</strong> Present geographic information visually.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Understanding spatial data is the foundation for learning how GIS stores, displays, and analyzes geographic information.</p>
</div>