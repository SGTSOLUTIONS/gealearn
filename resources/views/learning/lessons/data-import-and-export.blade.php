{{-- resources/views/learning/lessons/4-10-import-export.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Import brings data into the project. Export saves a layer to a new file with the format, CRS and fields you choose.
    Mastering export is essential for sharing data and standardising formats.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Learn the different ways to import data</li>
    <li>Understand the export dialog options</li>
    <li>Export only selected features and chosen fields</li>
</ul>

<h2>Visual Guide: Import and Export Flow</h2>
<div style="display: flex; align-items: stretch; justify-content: space-between; margin: 20px 0;">
    <div style="width: 35%; display: flex; flex-direction: column; gap: 8px;">
        <div style="border: 2px solid #282A35; border-radius: 6px; text-align: center; background: #282A35; color: #fff; padding: 6px; font-size: 12px; font-weight: bold;">IMPORT</div>
        <div style="border: 1px solid #ccc; padding: 6px; font-size: 11px; background: #fff; border-radius: 4px;">Files (.shp, .csv, .tif)</div>
        <div style="border: 1px solid #ccc; padding: 6px; font-size: 11px; background: #fff; border-radius: 4px;">Databases (PostGIS)</div>
        <div style="border: 1px solid #ccc; padding: 6px; font-size: 11px; background: #fff; border-radius: 4px;">Web services (WMS/WFS)</div>
    </div>
    <div style="width: 10%; display: flex; justify-content: center; align-items: center; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; display: flex; flex-direction: column; justify-content: center;">
        <div style="border: 2px solid #04AA6D; border-radius: 6px; text-align: center; background: #04AA6D; color: #fff; padding: 15px; font-size: 12px; font-weight: bold;">QGIS<br>project<br>layers</div>
    </div>
    <div style="width: 10%; display: flex; justify-content: center; align-items: center; font-size: 12px; color: #FF9800; font-weight: bold; flex-direction: column;">Export <br><span style="font-size: 20px;">&rarr;</span></div>
    <div style="width: 35%; border: 1px solid #ccc; border-radius: 6px; background: #f9f9f9; padding: 10px; font-size: 11px;">
        <strong>Save Vector Layer as...</strong><br>
        Format: [GeoPackage]<br>
        File name: [wards.gpkg]<br>
        CRS: [EPSG:4326]<br>
        Fields: [choose columns]<br>
        <input type="checkbox" checked> Save only selected features<br>
        <input type="checkbox" checked> Add saved file to map
    </div>
</div>

<p>
    The diagram shows import sources on the left and the export settings on the right. Import brings data in from files, databases, or web services. Export writes a new file, allowing you to choose the format, CRS, and a subset of fields.
</p>

<h2>Key Points</h2>
<ul>
    <li><strong>Import:</strong> drag and drop, the Browser panel, or Data Source Manager (Ctrl+L).</li>
    <li><strong>Export:</strong> right-click the layer &gt; <strong>Export &gt; Save Features As</strong>.</li>
    <li>Choose the format, file name and CRS in the dialog.</li>
    <li>Tick <strong>Save only selected features</strong> to export a subset.</li>
    <li>Pick the fields to keep so the new file has no unneeded columns.</li>
    <li>Export makes a copy; the original data stays unchanged.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Export is also the easiest way to reproject a layer permanently.</p>
</div>