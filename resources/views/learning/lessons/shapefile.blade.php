<p>
    The shapefile is Esri's classic vector format. One shapefile is a set of files that share the same name.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Name the required and optional files</li>
    <li>Keep all the parts of a shapefile together</li>
    <li>Know its main limits</li>
    <li>Decide when to use it</li>
</ul>

<h3>Files in a shapefile</h3>
<div style="border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">File</th>
            <th style="padding:10px; text-align:left;">Holds</th>
            <th style="padding:10px; text-align:left;">Status</th>
        </tr>
        <tr><td style="padding:10px;"><code>.shp</code></td><td style="padding:10px;">Geometry (the shapes)</td><td style="padding:10px;">Required</td></tr>
        <tr><td style="padding:10px;"><code>.shx</code></td><td style="padding:10px;">Index of the shapes</td><td style="padding:10px;">Required</td></tr>
        <tr><td style="padding:10px;"><code>.dbf</code></td><td style="padding:10px;">Attribute table</td><td style="padding:10px;">Required</td></tr>
        <tr><td style="padding:10px;"><code>.prj</code></td><td style="padding:10px;">CRS definition</td><td style="padding:10px;">Optional, recommended</td></tr>
        <tr><td style="padding:10px;"><code>.cpg</code></td><td style="padding:10px;">Text encoding</td><td style="padding:10px;">Optional, recommended</td></tr>
    </table>
</div>

<h3>Limits</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Size</div>
        <div style="padding:15px; text-align:center;">
            <p>About 2 GB maximum per file.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Field names</div>
        <div style="padding:15px; text-align:center;">
            <p>10 characters maximum.</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Geometry</div>
        <div style="padding:15px; text-align:center;">
            <p>One geometry type per file.</p>
        </div>
    </div>
</div>

<h3>Working with shapefiles</h3>
<ul>
    <li>Always copy, zip or move all the files together; a lone .shp is incomplete.</li>
    <li>A missing .prj leaves the layer without a CRS, and a missing .cpg can garble non-English text.</li>
    <li>Use a shapefile to exchange data with older software; use GeoPackage for your own work.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Zip every part of a shapefile before sending it, so nothing gets lost on the way.
    </p>
</div>