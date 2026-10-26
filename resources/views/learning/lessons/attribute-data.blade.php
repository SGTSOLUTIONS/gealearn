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
            In Geographic Information Systems (GIS), attribute data refers to the descriptive information associated with geographic features. It provides details about the features represented on a map, helping users understand their characteristics and properties.
        </p>
        
        <p class="intro-text">
            Spatial data shows <em>where</em> a feature is located and what shape it has, while attribute data explains <em>what</em> the feature is and what information is associated with it.
        </p>

        <div class="note-box">
            <strong>Note:</strong> Attribute data provides descriptive information about geographic features, while spatial geometry represents their locations and shapes. Together, they allow GIS users to visualize, query, and analyze geographic information effectively.
        </div>

        <h2>Components of a GIS Layer</h2>
        <p>A GIS layer commonly contains the following components:</p>
        <ul>
            <li><strong>Geometry:</strong> Defines the location and shape of each geographic feature using points, lines, or polygons.</li>
            <li><strong>Attribute table:</strong> Stores descriptive information about each feature in rows and columns.</li>
            <li><strong>Unique identifier:</strong> Distinguishes each feature's record from others within the layer.</li>
        </ul>

        <h2>Example of Attribute Data</h2>
        <p>Consider a road layer containing the following attribute table:</p>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Road ID</th>
                    <th>Road Name</th>
                    <th>Surface Type</th>
                    <th>Length (km)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>R001</td>
                    <td>Main Road</td>
                    <td>Asphalt</td>
                    <td>5.2</td>
                </tr>
                <tr>
                    <td>R002</td>
                    <td>Village Road</td>
                    <td>Gravel</td>
                    <td>2.7</td>
                </tr>
                <tr>
                    <td>R003</td>
                    <td>Market Street</td>
                    <td>Concrete</td>
                    <td>1.4</td>
                </tr>
            </tbody>
        </table>

        <p>In this example:</p>
        <ul>
            <li><strong>Road ID</strong> uniquely identifies each road record.</li>
            <li><strong>Road Name</strong> specifies the name of the road.</li>
            <li><strong>Surface Type</strong> describes the material used for the road surface.</li>
            <li><strong>Length (km)</strong> indicates the length of the road in kilometres.</li>
        </ul>
        <p>The road geometries show where the roads are located and the paths they follow. The attribute table provides additional information about their names, surface types, and lengths.</p>

        <h2>Types of Attribute Data</h2>
        <p>Attribute data can contain different kinds of information, depending on the geographic feature being studied.</p>
        <ul>
            <li><strong>Text data:</strong> Names, addresses, road types, and land-use categories.</li>
            <li><strong>Numeric data:</strong> Population, road length, land area, and elevation.</li>
            <li><strong>Date and time data:</strong> Survey dates, construction dates, and observation times.</li>
            <li><strong>Categorical data:</strong> Land-use classes, soil types, and road surface categories.</li>
            <li><strong>Boolean data:</strong> Values such as Yes/No or True/False, used to indicate conditions such as whether a road is paved.</li>
        </ul>

        <h2>How Attribute Data Is Collected</h2>
        <p>Attribute information can be obtained from several sources:</p>
        <ul>
            <li><strong>Field surveys:</strong> Information collected through direct observation and measurement.</li>
            <li><strong>GPS surveys:</strong> Coordinates and related information recorded during fieldwork.</li>
            <li><strong>Government records:</strong> Census data, administrative boundaries, and infrastructure records.</li>
            <li><strong>Remote sensing:</strong> Information derived from satellite imagery and aerial photographs.</li>
            <li><strong>Existing databases:</strong> Data imported from spreadsheets, databases, and other information systems.</li>
        </ul>
        <p>Some attributes, such as road length and polygon area, can be calculated from geographic geometry. Other attributes, such as road names, surface types, and population figures, generally require surveys, external records, or other data sources.</p>

        <h2>Importance of Attribute Data in GIS</h2>
        <p>Attribute data makes geographic information more useful by allowing users to search, compare, classify, and analyze features.</p>
        <p>For example, attribute data can help GIS users:</p>
        <ul>
            <li>Identify roads with specific surface types.</li>
            <li>Find hospitals with particular facilities.</li>
            <li>Calculate the total area of agricultural land.</li>
            <li>Compare population figures between districts.</li>
            <li>Select buildings based on their type or usage.</li>
        </ul>

    </div>

</body>
</html>