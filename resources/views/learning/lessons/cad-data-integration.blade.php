{{-- resources/views/learning/lessons/4-9-cad-integration.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    CAD files (DXF / DWG) come from engineering and survey drawings. They need conversion before they behave as GIS data.
    CAD focuses on precise drawing, while GIS focuses on data and attributes.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the difference between CAD and GIS data</li>
    <li>Learn the steps to integrate CAD into GIS</li>
    <li>Recognise the need to assign a CRS</li>
</ul>

<h2>Visual Guide: CAD to GIS Workflow</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0;">
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; text-align: center;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-size: 12px; font-weight: bold;">1. CAD File</div>
        <div style="padding: 8px; font-size: 11px;">.dwg / .dxf</div>
    </div>
    <div style="width: 5%; text-align: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; text-align: center;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-size: 12px; font-weight: bold;">2. Convert</div>
        <div style="padding: 8px; font-size: 11px;">DWG to DXF</div>
    </div>
    <div style="width: 5%; text-align: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; text-align: center;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-size: 12px; font-weight: bold;">3. Assign CRS</div>
        <div style="padding: 8px; font-size: 11px;">correct EPSG</div>
    </div>
    <div style="width: 5%; text-align: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; text-align: center;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-size: 12px; font-weight: bold;">4. Clean + Save</div>
        <div style="padding: 8px; font-size: 11px;">GeoPackage</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin-top: 20px;">
    <div style="width: 45%; border: 2px solid #999; border-radius: 6px; background: #f9f9f9; padding: 10px; font-size: 11px;">
        <strong>CAD drawing</strong><br>
        Lines, text and layers<br>No attribute table<br>Local coordinates (often no CRS)
    </div>
    <div style="width: 10%; text-align: center; font-size: 16px; color: #FF9800; align-self: center;">&rarr;</div>
    <div style="width: 45%; border: 2px solid #04AA6D; border-radius: 6px; background: #f0f8ff; padding: 10px; font-size: 11px;">
        <strong>GIS data</strong><br>
        Features with attributes<br>Attribute table<br>Known CRS<br>Ready for analysis
    </div>
</div>

<p>
    The diagram shows the transformation from a raw CAD drawing (which lacks attributes and a coordinate system) to a proper GIS dataset. The key steps are converting DWG to DXF, assigning the correct CRS, and saving it to an open format like GeoPackage.
</p>

<h2>Key Points</h2>
<ul>
    <li>CAD stores lines, text and layers but <strong>no attribute table</strong>.</li>
    <li>Coordinates are often local; get the real CRS from the surveyor or drawing notes.</li>
    <li><strong>DXF opens directly in QGIS</strong>; DWG is proprietary – convert it to DXF first.</li>
    <li>After loading, <strong>assign</strong> the correct CRS (do not reproject).</li>
    <li>Turn closed polylines into polygons with <strong>Polygonize</strong>, then add attributes.</li>
    <li>Save the cleaned result as a GeoPackage.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep the CAD layer names – they help split features into proper GIS layers.</p>
</div>