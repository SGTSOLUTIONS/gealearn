<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raster Data - GIS Lesson</title>
    
</head>
<body>

 

    <!-- Main Content -->
    <div class="content-container">
        
        

        <p class="intro-text">
            Raster data is a type of geographic data used in Geographic Information Systems (GIS) to represent the Earth's surface as a grid of cells or pixels. Each cell contains a value representing a measurement or category, such as elevation, temperature, rainfall, or land cover.
        </p>

        <h2>Learning goals</h2>
        <ul>
            <li>Understand how raster data uses a grid of cells to represent the Earth's surface</li>
            <li>Identify real-world examples and uses of raster data</li>
            <li>Recognise the concept of raster resolution and its impact on spatial detail</li>
        </ul>

        <div class="note-box">
            <strong>Note:</strong> Raster data divides a geographic area into rows and columns of cells, where each cell stores a value describing the feature or condition at that location.
        </div>

        <h2>1. Examples of Raster Data</h2>
        <p>Raster data is used to represent continuous data across a landscape. Common examples include:</p>
        <ul>
            <li>Satellite imagery</li>
            <li>Land-use classification maps</li>
            <li>Digital elevation models (DEM)</li>
            <li>Rainfall distribution maps</li>
            <li>Temperature maps</li>
            <li>Vegetation index maps</li>
        </ul>

        <h2>2. How Raster Data Works</h2>
        <p>Raster data divides a geographic area into rows and columns of cells. Each cell stores a value that describes the feature or condition at that location.</p>
        <p>For example, a <strong>Digital Elevation Model (DEM)</strong> stores elevation values in raster cells. GIS can use these values to identify high and low areas, calculate slope, and model the direction of water flow.</p>

        <h2>3. Raster Resolution</h2>
        <p>Raster resolution refers to the ground area represented by each pixel or cell. Smaller cells generally provide more spatial detail, while larger cells provide less detail.</p>
        <p>For example, a raster with <strong>10-metre cells</strong> represents the ground in smaller units than a raster with <strong>100-metre cells</strong>. However, the actual level of detail also depends on the quality of the source data and how it was collected.</p>

        <h2>Uses of Raster Data</h2>
        <p>Raster data supports several important applications, including:</p>
        <ul>
            <li><strong>Environmental monitoring:</strong> Observing changes in forests, vegetation, and land cover.</li>
            <li><strong>Agriculture:</strong> Monitoring crop health and vegetation conditions.</li>
            <li><strong>Weather analysis:</strong> Mapping rainfall and temperature distribution.</li>
            <li><strong>Terrain analysis:</strong> Identifying elevation, slope, and drainage patterns.</li>
            <li><strong>Disaster management:</strong> Mapping flood-prone areas and monitoring the spread of wildfires.</li>
        </ul>

        <p style="margin-top: 30px; font-size: 1.05rem; color: #222;">
            Raster data represents the Earth's surface as a continuous grid of cells, making it ideal for mapping and analyzing continuous phenomena such as elevation, temperature, and land cover across a landscape.
        </p>

    </div>

</body>
</html>