<p>
    An attribute query selects features by the values in their attribute table, without using location.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Write conditions with operators</li>
    <li>Use Select by Expression</li>
    <li>Search text and lists</li>
    <li>Show only the matching features</li>
</ul>

<h3>Example query</h3>
<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Select by Expression (Ctrl+F3)</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code>"population" > 5000 AND "type" = 'Urban'
-- selects Ward A (5400), Ward C (7800) and Ward E (6100): 3 of 5 rows</code></pre>
</div>

<h3>Operators</h3>
<div style="border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">Purpose</th>
            <th style="padding:10px; text-align:left;">Operators</th>
        </tr>
        <tr><td style="padding:10px;">Compare</td><td style="padding:10px;"><code>=, &lt;&gt;, &gt;, &lt;, &gt;=, &lt;=</code></td></tr>
        <tr><td style="padding:10px;">Logic</td><td style="padding:10px;">AND, OR, NOT</td></tr>
        <tr><td style="padding:10px;">Text</td><td style="padding:10px;"><code>LIKE 'Ward%'</code></td></tr>
        <tr><td style="padding:10px;">List</td><td style="padding:10px;"><code>IN ('A', 'B')</code></td></tr>
        <tr><td style="padding:10px;">Empty values</td><td style="padding:10px;">IS NULL, IS NOT NULL</td></tr>
    </table>
</div>

<h3>Writing conditions</h3>
<ul>
    <li>Write the condition in Select by Expression (Ctrl+F3).</li>
    <li>Field names go in "double" quotes and text values in 'single' quotes.</li>
    <li>LIKE uses % as a wildcard; use IN for lists.</li>
    <li>To show only matching features, right-click the layer &gt; Filter.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Field names go in "double" quotes, text values in 'single' quotes – mixing them up is the most common error.
    </p>
</div>