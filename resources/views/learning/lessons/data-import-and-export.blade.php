<p>
    Import brings data into the project. Export saves a layer to a new file with the format, CRS and fields you choose.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Import from files, databases and web services</li>
    <li>Export a layer with Save Features As</li>
    <li>Export only selected features</li>
    <li>Reproject a layer permanently</li>
</ul>

<h3>Import sources</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Files</div>
        <div style="padding:15px; text-align:center;">
            <p><code>.shp, .csv, .tif</code></p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Databases</div>
        <div style="padding:15px; text-align:center;">
            <p>PostGIS</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Web services</div>
        <div style="padding:15px; text-align:center;">
            <p>WMS and WFS</p>
        </div>
    </div>
</div>

<h3>Export dialog: Save Vector Layer as</h3>
<div style="border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">Option</th>
            <th style="padding:10px; text-align:left;">Example</th>
        </tr>
        <tr><td style="padding:10px;">Format</td><td style="padding:10px;">GeoPackage</td></tr>
        <tr><td style="padding:10px;">File name</td><td style="padding:10px;">wards.gpkg</td></tr>
        <tr><td style="padding:10px;">CRS</td><td style="padding:10px;">EPSG:4326</td></tr>
        <tr><td style="padding:10px;">Fields</td><td style="padding:10px;">Choose the columns to keep</td></tr>
        <tr><td style="padding:10px;">Save only selected features</td><td style="padding:10px;">Tick to export a subset</td></tr>
        <tr><td style="padding:10px;">Add saved file to map</td><td style="padding:10px;">Tick to load the result</td></tr>
    </table>
</div>

<h3>Key points</h3>
<ul>
    <li><strong>Import:</strong> drag and drop, the Browser panel, or Data Source Manager (Ctrl+L).</li>
    <li><strong>Export:</strong> right-click the layer &gt; Export &gt; Save Features As.</li>
    <li>Export makes a copy; the original data stays unchanged.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Export is also the easiest way to reproject a layer permanently.
    </p>
</div>