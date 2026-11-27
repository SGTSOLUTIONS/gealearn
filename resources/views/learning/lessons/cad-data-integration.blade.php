<p>
    CAD files (DXF and DWG) come from engineering and survey drawings. They need conversion before they behave as GIS data.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Convert CAD files for use in QGIS</li>
    <li>Assign the correct CRS</li>
    <li>Turn drawings into features</li>
    <li>Save the cleaned result</li>
</ul>

<h3>Conversion steps</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(160px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; padding:12px; background:#f5f8fc; text-align:center;">
        <div style="color:#245b83; font-weight:bold; margin-bottom:5px;">1. Convert</div>
        <div style="font-size:14px;">DWG to DXF.</div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; padding:12px; background:#f5f8fc; text-align:center;">
        <div style="color:#198754; font-weight:bold; margin-bottom:5px;">2. Assign CRS</div>
        <div style="font-size:14px;">Use the correct EPSG code.</div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; padding:12px; background:#f5f8fc; text-align:center;">
        <div style="color:#b45309; font-weight:bold; margin-bottom:5px;">3. Clean</div>
        <div style="font-size:14px;">Polygonize and add attributes.</div>
    </div>
    <div style="border:1px solid #6d28d9; border-radius:8px; padding:12px; background:#f5f8fc; text-align:center;">
        <div style="color:#6d28d9; font-weight:bold; margin-bottom:5px;">4. Save</div>
        <div style="font-size:14px;">As a GeoPackage.</div>
    </div>
</div>

<h3>CAD data and GIS data</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">CAD drawing</div>
        <div style="padding:15px; text-align:center;">
            <p>Lines, text and layers. No attribute table. Local coordinates, often no CRS.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">GIS data</div>
        <div style="padding:15px; text-align:center;">
            <p>Features with attributes, an attribute table and a known CRS. Ready for analysis.</p>
        </div>
    </div>
</div>

<h3>Key points</h3>
<ul>
    <li>DXF opens directly in QGIS; DWG is proprietary, so convert it to DXF first.</li>
    <li>Get the real CRS from the surveyor or drawing notes; assign it, do not reproject.</li>
    <li>Turn closed polylines into polygons with Polygonize, then add attributes.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Keep the CAD layer names – they help split features into proper GIS layers.
    </p>
</div>