<p>
    Data cleaning finds and fixes errors in the data so analysis results can be trusted.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Recognise typical data problems</li>
    <li>Find errors with sorting and expressions</li>
    <li>Fix text with the Field Calculator</li>
    <li>Remove duplicates safely</li>
</ul>

<h3>Before cleaning</h3>
<div style="border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">id</th>
            <th style="padding:10px; text-align:left;">name</th>
            <th style="padding:10px; text-align:left;">population</th>
            <th style="padding:10px; text-align:left;">Problem</th>
        </tr>
        <tr><td style="padding:10px;">1</td><td style="padding:10px;">Ward A</td><td style="padding:10px;">5400</td><td style="padding:10px;">None</td></tr>
        <tr><td style="padding:10px;">2</td><td style="padding:10px;">ward a</td><td style="padding:10px;">5400</td><td style="padding:10px;">Duplicate and inconsistent spelling</td></tr>
        <tr><td style="padding:10px;">3</td><td style="padding:10px;">Ward B</td><td style="padding:10px;">NULL</td><td style="padding:10px;">Missing value</td></tr>
        <tr><td style="padding:10px;">4</td><td style="padding:10px;">Ward C</td><td style="padding:10px;">-780</td><td style="padding:10px;">Impossible value</td></tr>
    </table>
</div>

<h3>After cleaning</h3>
<div style="border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">id</th>
            <th style="padding:10px; text-align:left;">name</th>
            <th style="padding:10px; text-align:left;">population</th>
        </tr>
        <tr><td style="padding:10px;">1</td><td style="padding:10px;">Ward A</td><td style="padding:10px;">5400</td></tr>
        <tr><td style="padding:10px;">3</td><td style="padding:10px;">Ward B</td><td style="padding:10px;">4100</td></tr>
        <tr><td style="padding:10px;">4</td><td style="padding:10px;">Ward C</td><td style="padding:10px;">7800</td></tr>
    </table>
</div>

<h3>Typical fixes</h3>
<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Field Calculator and selection</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code>title(trim("name")) -- trim spaces, fix capitals
"population" IS NULL -- select missing values</code></pre>
</div>

<ul>
    <li>Delete duplicates: Delete duplicate geometries or Delete duplicates by attribute.</li>
    <li>Always work on a copy and keep the original data untouched.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Clean first, then analyse – errors multiply through every later step.
    </p>
</div>