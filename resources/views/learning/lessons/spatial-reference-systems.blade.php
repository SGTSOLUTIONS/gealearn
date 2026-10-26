<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIS Lesson</title>
    
</head>
<body>

    

    <!-- Main Content -->
    <div class="content-container">
        
        <p class="intro-text">
            A Spatial Reference System (SRS) defines how geographic locations are represented using coordinates in a Geographic Information System (GIS). It helps GIS software identify locations, align map layers, measure distances, and perform spatial analysis.
        </p>
        
        <p class="intro-text">
            Without the correct spatial reference information, roads, rivers, satellite imagery, and administrative boundaries may not align properly on a map.
        </p>

        <div class="note">
        <p style="margin:0"><strong>Note:</strong> A spatial reference system helps GIS software interpret geographic coordinates correctly, ensuring that spatial data can be mapped and analyzed accurately.
        </div>

        <h2>Components of a Spatial Reference System</h2>
        <p>A spatial reference system may include:</p>
        <ul>
            <li><strong>Coordinate system:</strong> Defines how locations are expressed using coordinates.</li>
            <li><strong>Datum or reference frame:</strong> Provides the reference for locating positions on the Earth.</li>
            <li><strong>Earth model:</strong> Represents the Earth's shape mathematically.</li>
            <li><strong>Map projection:</strong> Converts locations on the curved Earth into positions on a flat map, when applicable.</li>
            <li><strong>Units of measurement:</strong> Specifies units such as degrees or metres.</li>
        </ul>

        <h2>Why Is It Important?</h2>
        <p>Spatial reference systems help GIS users:</p>
        <ul>
            <li>Locate geographic features accurately.</li>
            <li>Combine datasets from different sources.</li>
            <li>Measure distances and areas using suitable coordinate systems.</li>
            <li>Transform data between coordinate reference systems.</li>
            <li>Create accurate maps and perform spatial analysis.</li>
        </ul>

        
<div class="example">
        <p>Example:Suppose you combine a road network, satellite imagery, and district boundaries in a GIS project. If these datasets use different coordinate reference systems, they may not align correctly until their reference information is interpreted and the data is transformed when necessary.</p>
    </div>  

</body>
</html>