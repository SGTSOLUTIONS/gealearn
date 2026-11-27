<p>
    CSV and Excel files store tables. When they contain coordinate columns, GIS can turn every row into a point.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Prepare a table for loading</li>
    <li>Load a CSV with coordinates</li>
    <li>Set the correct CRS</li>
    <li>Save the result as a spatial file</li>
</ul>

<h3>Example points.csv</h3>
<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">points.csv</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code>id,name,lon,lat
1,Site A,78.10,20.40
2,Site B,78.45,20.60
3,Site C,78.30,20.15
4,Site D,78.70,20.35</code></pre>
</div>

<h3>Add Delimited Text Layer</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Format</div>
        <div style="padding:15px; text-align:center;">
            <p>CSV</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">X field</div>
        <div style="padding:15px; text-align:center;">
            <p>lon</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Y field</div>
        <div style="padding:15px; text-align:center;">
            <p>lat</p>
        </div>
    </div>
    <div style="border:1px solid #6d28d9; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#6d28d9; color:white; padding:12px; font-weight:bold; text-align:center;">CRS</div>
        <div style="padding:15px; text-align:center;">
            <p>EPSG:4326 for GPS data.</p>
        </div>
    </div>
</div>

<h3>Prepare and load</h3>
<ul>
    <li>QGIS: Layer &gt; Add Layer &gt; Add Delimited Text Layer, then choose the X (lon) and Y (lat) fields.</li>
    <li>Prepare the table: one header row, no merged cells, numbers without units, decimal point not comma.</li>
    <li>Excel (.xlsx) can be loaded directly; for best results save as CSV UTF-8.</li>
    <li>The result links to the CSV: use Save Features As to make a real spatial file.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Points not showing? Check the decimal separator and the CRS first.
    </p>
</div>