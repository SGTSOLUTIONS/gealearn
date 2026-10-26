{{-- resources/views/learning/lessons/3-9-attribute-tables.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    An attribute table stores descriptive data: each row is one feature, each column is one field.
    It is the link between the geometry on the map and the information about that geometry.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Open and navigate attribute tables</li>
    <li>Sort and select records</li>
    <li>Use the Field Calculator</li>
</ul>

<h2>Visual Guide: Map vs. Attribute Table</h2>
<div style="display: flex; align-items: center; justify-content: space-between; margin: 20px 0;">
    <div style="width: 45%; border: 1px solid #ccc; padding: 5px; text-align: center; background: #eef;">
        <strong style="font-size: 12px;">Map (Geometry)</strong>
        <div style="display: flex; justify-content: center; margin-top: 10px;">
            <div style="width: 100px; height: 80px; background: #a8e6cf; border: 1px solid #04AA6D; display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: bold; color: #333;">3</div>
        </div>
    </div>
    <div style="width: 10%; text-align: center; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 45%; border: 1px solid #ccc; background: #fff;">
        <table style="width: 100%; font-size: 12px; border-collapse: collapse; margin: 0;">
            <thead>
                <tr style="background: #282A35; color: #fff;">
                    <th style="padding: 5px; border: 1px solid #ddd;">fid</th>
                    <th style="padding: 5px; border: 1px solid #ddd;">Ward</th>
                    <th style="padding: 5px; border: 1px solid #ddd;">Area (ha)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 5px; border: 1px solid #ddd; text-align: center;">1</td><td style="padding: 5px; border: 1px solid #ddd;">Ward A</td><td style="padding: 5px; border: 1px solid #ddd; text-align: center;">120</td></tr>
                <tr><td style="padding: 5px; border: 1px solid #ddd; text-align: center;">2</td><td style="padding: 5px; border: 1px solid #ddd;">Ward B</td><td style="padding: 5px; border: 1px solid #ddd; text-align: center;">95</td></tr>
                <tr style="background: #fff3cd;"><td style="padding: 5px; border: 1px solid #ddd; text-align: center;">3</td><td style="padding: 5px; border: 1px solid #ddd; font-weight: bold;">Ward C</td><td style="padding: 5px; border: 1px solid #ddd; text-align: center; font-weight: bold;">150</td></tr>
            </tbody>
        </table>
    </div>
</div>
<div style="text-align: center; font-size: 12px; color: #d9534f; margin-bottom: 15px;">
    Row = one feature &nbsp;|&nbsp; Column = one field
</div>

<h2>Key Points</h2>
<ul>
    <li>Open it with <strong>F6</strong> (layer selected) or right-click > Open Attribute Table.</li>
    <li>Click a row number to select the feature – it turns yellow on the map.</li>
    <li>Click a column header to sort the table.</li>
    <li>Use <strong>Show Selected Features</strong> (bottom-left) to see only your selection.</li>
    <li><strong>Field Calculator (Ctrl+1)</strong> creates or updates fields with expressions.</li>
    <li>Common field types: text, integer, decimal number and date.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> To edit values, switch on Toggle Editing (pencil icon), change the cell, then save.</p>
</div>