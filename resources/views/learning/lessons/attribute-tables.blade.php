<p>
    An attribute table stores descriptive data: each row is one feature and each
    column is one field. Reading the table alongside the map is the fastest way to
    check that your data is correct before you analyse it.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Open and read an attribute table</li>
    <li>Select and sort rows</li>
    <li>Edit values</li>
    <li>Create fields with the Field Calculator</li>
</ul>

<h3>Example attribute table</h3>
<div style="border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">fid</th>
            <th style="padding:10px; text-align:left;">Ward</th>
            <th style="padding:10px; text-align:left;">Area (ha)</th>
            <th style="padding:10px; text-align:left;">Population</th>
        </tr>
        <tr><td style="padding:10px;">1</td><td style="padding:10px;">Ward A</td><td style="padding:10px;">120</td><td style="padding:10px;">5400</td></tr>
        <tr><td style="padding:10px;">2</td><td style="padding:10px;">Ward B</td><td style="padding:10px;">95</td><td style="padding:10px;">4100</td></tr>
        <tr><td style="padding:10px;">3</td><td style="padding:10px;">Ward C</td><td style="padding:10px;">150</td><td style="padding:10px;">7800</td></tr>
        <tr><td style="padding:10px;">4</td><td style="padding:10px;">Ward D</td><td style="padding:10px;">80</td><td style="padding:10px;">3200</td></tr>
        <tr><td style="padding:10px;">5</td><td style="padding:10px;">Ward E</td><td style="padding:10px;">110</td><td style="padding:10px;">6100</td></tr>
    </table>
</div>

<h3>Key actions</h3>
<ul>
    <li><code>F6</code> – open the attribute table of the selected layer.</li>
    <li>Click a row number – selects the feature; it turns yellow on the map.</li>
    <li>Show Selected Features (bottom-left) – shows only your selection.</li>
    <li><code>Ctrl+I</code> – Field Calculator: create or update fields with expressions.</li>
</ul>

<h3>Field Calculator examples</h3>
<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Field Calculator (Ctrl+I)</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code>"population" / "area_ha"   -- people per hectare
$area / 10000             -- area in hectares
upper("ward")             -- WARD A</code></pre>
</div>

<h3>Common field types</h3>
<p>
    Text (Ward A), integer (5400), decimal number (120.5) and date.
</p>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> To edit values, switch on <strong>Toggle Editing</strong> (pencil icon), change the cell, then save.
    </p>
</div>