{{-- resources/views/learning/lessons/4-12-data-cleaning.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Data cleaning finds and fixes errors in the data so analysis results can be trusted.
    Errors multiply through every later step, so cleaning should happen early.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify common data errors</li>
    <li>Fix text and numeric issues</li>
    <li>Remove duplicates safely</li>
</ul>

<h2>Visual Guide: Before and After Cleaning</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0;">
    <div style="width: 48%; border: 1px solid #ccc; overflow: hidden; border-radius: 6px;">
        <div style="background: #d9534f; color: #fff; padding: 6px; font-size: 12px; font-weight: bold;">Before</div>
        <table style="width: 100%; font-size: 11px; border-collapse: collapse; margin: 0;">
            <thead>
                <tr style="background: #f1f1f1;"><th style="padding: 4px; border: 1px solid #ddd;">id</th><th style="padding: 4px; border: 1px solid #ddd;">name</th><th style="padding: 4px; border: 1px solid #ddd;">population</th></tr>
            </thead>
            <tbody>
                <tr><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">1</td><td style="padding: 4px; border: 1px solid #ddd;">Ward A</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">5400</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">2</td><td style="padding: 4px; border: 1px solid #ddd;">ward a</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">5400</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">3</td><td style="padding: 4px; border: 1px solid #ddd;">Ward B</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">NULL</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">4</td><td style="padding: 4px; border: 1px solid #ddd;">Ward C</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">-780</td></tr>
            </tbody>
        </table>
        <div style="padding: 5px; font-size: 10px; color: #d9534f;">Spaces &bull; duplicate &bull; missing &bull; wrong value</div>
    </div>
    <div style="width: 4%; text-align: center; font-size: 20px; color: #04AA6D; align-self: center;">&rarr;</div>
    <div style="width: 48%; border: 1px solid #ccc; overflow: hidden; border-radius: 6px;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-size: 12px; font-weight: bold;">After</div>
        <table style="width: 100%; font-size: 11px; border-collapse: collapse; margin: 0;">
            <thead>
                <tr style="background: #f1f1f1;"><th style="padding: 4px; border: 1px solid #ddd;">id</th><th style="padding: 4px; border: 1px solid #ddd;">name</th><th style="padding: 4px; border: 1px solid #ddd;">population</th></tr>
            </thead>
            <tbody>
                <tr><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">1</td><td style="padding: 4px; border: 1px solid #ddd;">Ward A</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">5400</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">3</td><td style="padding: 4px; border: 1px solid #ddd;">Ward B</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">4100</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">4</td><td style="padding: 4px; border: 1px solid #ddd;">Ward C</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">7800</td></tr>
            </tbody>
        </table>
        <div style="padding: 5px; font-size: 10px; color: #04AA6D;">Trimmed &bull; unique &bull; filled &bull; corrected</div>
    </div>
</div>

<p>
    The diagram compares a dirty table with a cleaned one. Notice the duplicate "ward a" has been merged, the missing NULL value has been filled (or removed), the negative population has been corrected, and extra spaces have been trimmed.
</p>

<h2>Key Points</h2>
<ul>
    <li>Typical problems: duplicates, missing values, extra spaces, inconsistent spelling, impossible values.</li>
    <li>Find them by sorting, filtering or selecting by expression, e.g. <code>"population" IS NULL</code>.</li>
    <li>Fix text in the Field Calculator with <code>trim()</code>, <code>upper()</code> and <code>title()</code>.</li>
    <li>Remove duplicates: <strong>Delete duplicate geometries</strong> or <strong>Delete duplicates by attribute</strong>.</li>
    <li>Always work on a copy and keep the original data untouched.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Clean first, then analyse — errors multiply through every later step.</p>
</div>