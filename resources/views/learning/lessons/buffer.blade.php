<p>
    A buffer creates a zone of a set distance around points, lines or polygons.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Create buffers around points, lines and polygons</li>
    <li>Set the distance in the right units</li>
    <li>Use a variable distance</li>
    <li>Name typical uses of buffers</li>
</ul>

<h3>Buffer types</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Point buffer</div>
        <div style="padding:15px; text-align:center;">
            <p>A circle around each point.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Line buffer</div>
        <div style="padding:15px; text-align:center;">
            <p>A zone on both sides of the line.</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Polygon buffer</div>
        <div style="padding:15px; text-align:center;">
            <p>A zone around the outline.</p>
        </div>
    </div>
</div>

<h3>Buffer settings</h3>
<div style="border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">Setting</th>
            <th style="padding:10px; text-align:left;">Meaning</th>
        </tr>
        <tr><td style="padding:10px;">Distance</td><td style="padding:10px;">In CRS units: use a metre-based CRS, not degrees</td></tr>
        <tr><td style="padding:10px;">Variable distance</td><td style="padding:10px;">Use a field or expression, e.g. road width by road type</td></tr>
        <tr><td style="padding:10px;">Segments</td><td style="padding:10px;">How smooth the rounded corners are</td></tr>
        <tr><td style="padding:10px;">Dissolve result</td><td style="padding:10px;">Merges overlapping buffers</td></tr>
        <tr><td style="padding:10px;">Tool</td><td style="padding:10px;">Vector &gt; Geoprocessing Tools &gt; Buffer</td></tr>
    </table>
</div>

<h3>Typical uses</h3>
<ul>
    <li>Sites within 500 m of a river.</li>
    <li>Noise zones around roads and airports.</li>
    <li>Safety distances around hazards.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Buffering in lat/long gives distorted shapes – reproject to a metre-based CRS first.
    </p>
</div>