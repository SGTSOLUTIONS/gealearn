<p>
    QGIS measures lengths, areas and angles directly on the map canvas.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Measure lines and areas</li>
    <li>Set units and the ellipsoid</li>
    <li>Store measurements in fields</li>
</ul>

<h3>Measure tools</h3>
<ul>
    <li>Measure Line (Ctrl+Shift+M) – click vertices, right-click to finish; shows segments and the total.</li>
    <li>Measure Area (Ctrl+Shift+J) – click the corners of the shape.</li>
    <li>Measure Angle – gives the angle between two lines.</li>
</ul>

<p>
    Set the units and the ellipsoid in <strong>Project &gt; Properties &gt; General &gt; Measurements</strong>.
</p>

<h3>Store measurements for every feature</h3>
<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Field Calculator expressions</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code>$length   -- length of each line feature
$area     -- area of each polygon feature</code></pre>
</div>

<h3>Pick a CRS that measures well</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Geographic (EPSG:4326)</div>
        <div style="padding:15px; text-align:center;">
            <p>Units are degrees. Not suitable for distance or area.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Projected (for example UTM)</div>
        <div style="padding:15px; text-align:center;">
            <p>Units are metres. Accurate locally.</p>
        </div>
    </div>
</div>

<h3>Handy unit conversions</h3>
<ul>
    <li>1 km = 1,000 m</li>
    <li>1 hectare (ha) = 10,000 square metres</li>
    <li>1 square kilometre = 100 hectares</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Use an ellipsoidal setting, or a suitable projected CRS, for accurate ground distances.
    </p>
</div>