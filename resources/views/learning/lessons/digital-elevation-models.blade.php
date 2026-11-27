<p>
    A Digital Elevation Model (DEM) is a raster in which each cell stores the height of the ground above sea level.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Explain DEM, DTM and DSM</li>
    <li>Name common free sources</li>
    <li>Know what you can derive from a DEM</li>
    <li>Check units and CRS before use</li>
</ul>

<h3>Two kinds of height model</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">DSM – surface</div>
        <div style="padding:15px; text-align:center;">
            <p>Includes buildings and trees.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">DTM – bare ground</div>
        <div style="padding:15px; text-align:center;">
            <p>Usually what people call a DEM.</p>
        </div>
    </div>
</div>

<h3>Common sources</h3>
<div style="border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">Source</th>
            <th style="padding:10px; text-align:left;">Detail</th>
        </tr>
        <tr><td style="padding:10px;">SRTM</td><td style="padding:10px;">About 30 m, free, global</td></tr>
        <tr><td style="padding:10px;">Copernicus DEM</td><td style="padding:10px;">About 30 m, free, global</td></tr>
        <tr><td style="padding:10px;">ALOS, ASTER GDEM</td><td style="padding:10px;">Free global alternatives</td></tr>
        <tr><td style="padding:10px;">LiDAR</td><td style="padding:10px;">About 1 m; far finer detail, limited areas</td></tr>
    </table>
</div>

<h3>Using a DEM</h3>
<ul>
    <li>Derive slope, aspect, hillshade and contours (Module 5).</li>
    <li>Check the vertical unit (metres) and the CRS before analysing.</li>
    <li>Each DEM cell stores one height value.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Show a DEM with hillshade to see the terrain shape clearly.
    </p>
</div>