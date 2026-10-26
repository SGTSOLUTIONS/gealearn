{{-- resources/views/learning/lessons/4-6-csv-excel.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    CSV and Excel files store tables. When they contain coordinate columns, GIS can turn every row into a point.
    This is one of the most common ways to bring field data into a GIS.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Load a CSV file as a spatial layer</li>
    <li>Set the correct X and Y fields</li>
    <li>Prepare tabular data for GIS use</li>
</ul>

<h2>Visual Guide: CSV to Points</h2>
<div style="display: flex; align-items: center; justify-content: space-between; margin: 20px 0;">
    <div style="width: 35%; border: 1px solid #ccc; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; text-align: center; font-size: 12px; font-weight: bold;">points.csv</div>
        <table style="width: 100%; font-size: 11px; border-collapse: collapse; margin: 0;">
            <thead>
                <tr style="background: #04AA6D; color: #fff;">
                    <th style="padding: 4px; border: 1px solid #ddd;">id</th>
                    <th style="padding: 4px; border: 1px solid #ddd;">name</th>
                    <th style="padding: 4px; border: 1px solid #ddd;">lon</th>
                    <th style="padding: 4px; border: 1px solid #ddd;">lat</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">1</td><td style="padding: 4px; border: 1px solid #ddd;">Site A</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">78.10</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">20.40</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">2</td><td style="padding: 4px; border: 1px solid #ddd;">Site B</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">78.45</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">20.60</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">3</td><td style="padding: 4px; border: 1px solid #ddd;">Site C</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">78.30</td><td style="padding: 4px; border: 1px solid #ddd; text-align: center;">20.15</td></tr>
            </tbody>
        </table>
    </div>
    <div style="width: 10%; text-align: center; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 1px solid #ccc; padding: 8px; font-size: 11px; background: #f9f9f9;">
        <strong style="font-size: 12px; color: #282A35;">Add Delimited Text Layer</strong><br>
        Format: CSV<br>
        X field: lon<br>
        Y field: lat<br>
        CRS: EPSG:4326
    </div>
    <div style="width: 10%; text-align: center; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 25%; border: 2px solid #2196F3; border-radius: 6px; background: #eef; height: 80px; position: relative;">
        <div style="position: absolute; top: 15px; left: 20px; width: 8px; height: 8px; background: #FF9800; border-radius: 50%;"></div>
        <div style="position: absolute; top: 40px; left: 50px; width: 8px; height: 8px; background: #FF9800; border-radius: 50%;"></div>
        <div style="position: absolute; top: 55px; left: 30px; width: 8px; height: 8px; background: #FF9800; border-radius: 50%;"></div>
        <div style="position: absolute; bottom: 5px; left: 5px; font-size: 9px; color: #666;">each row = one point</div>
    </div>
</div>

<p>
    The diagram shows the flow from a spreadsheet to a map. When you load a CSV, QGIS reads the X and Y columns, interprets them with the chosen CRS, and places a point for each row. You must ensure the table is clean and the coordinates are correctly formatted.
</p>

<h2>Key Points</h2>
<ul>
    <li>QGIS: <strong>Layer &gt; Add Layer &gt; Add Delimited Text Layer</strong>; choose the X (lon) and Y (lat) fields.</li>
    <li>Set the CRS of the coordinates – usually <strong>EPSG:4326</strong> for GPS data.</li>
    <li>Excel (.xlsx) can be loaded directly; for best results save as <strong>CSV UTF-8</strong>.</li>
    <li>Prepare the table: one header row, no merged cells, numbers without units, decimal point not comma.</li>
    <li>The result links to the CSV – use <strong>Save Features As</strong> to make a real spatial file.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Points not showing? Check the decimal separator and the CRS first.</p>
</div>