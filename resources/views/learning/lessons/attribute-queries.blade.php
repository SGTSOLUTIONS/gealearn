{{-- resources/views/learning/lessons/5-2-attribute-queries.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    An attribute query selects features by the values in their attribute table, without using location.
    It answers questions like "Show me all wards with a population over 5,000."
</p>

<h2>Learning goals</h2>
<ul>
    <li>Write a basic query expression</li>
    <li>Use comparison and logical operators</li>
    <li>Find empty values</li>
</ul>

<h2>Visual Guide: Query Expression Example</h2>
<div style="border: 2px solid #282A35; border-radius: 6px; padding: 15px; background: #fff; margin: 20px 0; font-family: Consolas, monospace; font-size: 14px; text-align: center;">
    <span style="color: #d9534f; font-weight: bold;">"population"</span> &gt; 5000 <span style="color: #04AA6D; font-weight: bold;">AND</span> <span style="color: #d9534f; font-weight: bold;">"type"</span> = <span style="color: #2196F3;">'Urban'</span>
</div>

<table style="width: 100%; font-size: 13px; border-collapse: collapse; margin-bottom: 20px;">
    <thead>
        <tr style="background: #282A35; color: #fff;">
            <th style="padding: 6px; border: 1px solid #ddd;">name</th>
            <th style="padding: 6px; border: 1px solid #ddd;">type</th>
            <th style="padding: 6px; border: 1px solid #ddd;">population</th>
        </tr>
    </thead>
    <tbody>
        <tr style="background: #fff3cd;"><td style="padding: 6px; border: 1px solid #ddd;">Ward A</td><td style="padding: 6px; border: 1px solid #ddd;">Urban</td><td style="padding: 6px; border: 1px solid #ddd;">5400</td></tr>
        <tr><td style="padding: 6px; border: 1px solid #ddd;">Ward B</td><td style="padding: 6px; border: 1px solid #ddd;">Rural</td><td style="padding: 6px; border: 1px solid #ddd;">4100</td></tr>
        <tr style="background: #fff3cd;"><td style="padding: 6px; border: 1px solid #ddd;">Ward C</td><td style="padding: 6px; border: 1px solid #ddd;">Urban</td><td style="padding: 6px; border: 1px solid #ddd;">7800</td></tr>
        <tr><td style="padding: 6px; border: 1px solid #ddd;">Ward D</td><td style="padding: 6px; border: 1px solid #ddd;">Urban</td><td style="padding: 6px; border: 1px solid #ddd;">3200</td></tr>
        <tr style="background: #fff3cd;"><td style="padding: 6px; border: 1px solid #ddd;">Ward E</td><td style="padding: 6px; border: 1px solid #ddd;">Urban</td><td style="padding: 6px; border: 1px solid #ddd;">6100</td></tr>
    </tbody>
</table>

<div style="border: 1px solid #ccc; padding: 10px; border-radius: 6px; background: #f9f9f9; font-size: 12px; margin-bottom: 20px;">
    <strong>Operators</strong><br>
    <strong>Compare:</strong> = &lt; &gt; &lt;= &gt;=<br>
    <strong>Logic:</strong> AND, OR, NOT<br>
    <strong>Text:</strong> LIKE 'Ward%'<br>
    <strong>List:</strong> IN ('A', 'B')<br>
    <strong>Empty:</strong> IS NULL / IS NOT NULL
</div>

<p>
    The diagram shows how a query expression is built. Fields are written in <code>"double quotes"</code>, text values in <code>'single quotes'</code>, and numbers without quotes. The highlighted rows are the ones that match the condition.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is an attribute query?</strong> Selecting features by the values in their attribute table, without using location.</li>
    <li><strong>Where do I write the condition?</strong> Select by Expression (Ctrl+F3).</li>
    <li><strong>Which operators compare values?</strong> =, &lt;, &gt;, &lt;=, &gt;=, and AND, OR, NOT.</li>
    <li><strong>How do I search text?</strong> LIKE with % as wildcard, e.g. <code>"name" LIKE 'Ward%'</code>; use IN for lists.</li>
    <li><strong>How do I find empty values?</strong> IS NULL and IS NOT NULL.</li>
    <li><strong>How do I show only matching features?</strong> Right-click the layer &gt; Filter.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Field names go in "double" quotes, text values in 'single' quotes — mixing them up is the most common error.</p>
</div>