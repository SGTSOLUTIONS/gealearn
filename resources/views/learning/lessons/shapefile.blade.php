{{-- resources/views/learning/lessons/4-2-shapefile.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The shapefile is Esri's classic vector format. One shapefile is not a single file, but a set of files that share the same name.
    Understanding this structure is essential for data exchange.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify the required and optional files in a shapefile</li>
    <li>Understand the limitations of the shapefile format</li>
    <li>Learn why all files must be kept together</li>
</ul>

<h2>Visual Guide: Shapefile Components</h2>
<div style="display: flex; align-items: center; justify-content: space-between; margin: 20px 0;">
    <div style="width: 45%; display: flex; flex-direction: column; gap: 6px;">
        <div style="border: 2px solid #282A35; border-radius: 6px; display: flex; overflow: hidden; font-size: 12px;">
            <div style="width: 25%; background: #282A35; color: #fff; padding: 6px; text-align: center; font-weight: bold;">.shp</div>
            <div style="width: 75%; padding: 6px; background: #fff;">geometry (the shapes) <span style="color: #d9534f; font-weight: bold; float: right;">required</span></div>
        </div>
        <div style="border: 2px solid #282A35; border-radius: 6px; display: flex; overflow: hidden; font-size: 12px;">
            <div style="width: 25%; background: #282A35; color: #fff; padding: 6px; text-align: center; font-weight: bold;">.shx</div>
            <div style="width: 75%; padding: 6px; background: #fff;">index of the shapes <span style="color: #d9534f; font-weight: bold; float: right;">required</span></div>
        </div>
        <div style="border: 2px solid #282A35; border-radius: 6px; display: flex; overflow: hidden; font-size: 12px;">
            <div style="width: 25%; background: #282A35; color: #fff; padding: 6px; text-align: center; font-weight: bold;">.dbf</div>
            <div style="width: 75%; padding: 6px; background: #fff;">attribute table <span style="color: #d9534f; font-weight: bold; float: right;">required</span></div>
        </div>
        <div style="border: 2px solid #04AA6D; border-radius: 6px; display: flex; overflow: hidden; font-size: 12px;">
            <div style="width: 25%; background: #04AA6D; color: #fff; padding: 6px; text-align: center; font-weight: bold;">.prj</div>
            <div style="width: 75%; padding: 6px; background: #fff;">CRS definition <span style="color: #04AA6D; float: right;">optional</span></div>
        </div>
        <div style="border: 2px solid #04AA6D; border-radius: 6px; display: flex; overflow: hidden; font-size: 12px;">
            <div style="width: 25%; background: #04AA6D; color: #fff; padding: 6px; text-align: center; font-weight: bold;">.cpg</div>
            <div style="width: 75%; padding: 6px; background: #fff;">text encoding <span style="color: #04AA6D; float: right;">optional</span></div>
        </div>
    </div>
    <div style="width: 10%; text-align: center; font-size: 24px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; text-align: center; background: #282A35; color: #fff; padding: 20px 10px;">
        <strong>One layer</strong><br><span style="font-size: 12px;">roads</span>
    </div>
</div>

<div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
    <div style="width: 45%; border: 2px solid #FF9800; border-radius: 6px; padding: 10px; font-size: 12px; background: #fff3cd;">
        <strong style="color: #FF9800;">Limits</strong><br>
        &bull; 2 GB max per file<br>
        &bull; Field names: 10 characters max<br>
        &bull; One geometry type per file
    </div>
</div>

<p>
    A shapefile is actually a collection of separate files that work together. The .shp, .shx, and .dbf files are mandatory, while the .prj and .cpg files add important context like coordinate system and text encoding.
</p>

<h2>Key Points</h2>
<ul>
    <li><strong>.shp</strong> geometry, <strong>.shx</strong> index and <strong>.dbf</strong> attributes are the required files.</li>
    <li><strong>.prj</strong> stores the CRS and <strong>.cpg</strong> the text encoding – optional but recommended.</li>
    <li>Always copy, zip or move all the files together; a lone .shp is incomplete.</li>
    <li>Field names are limited to 10 characters; a file is limited to about 2 GB.</li>
    <li>One shapefile holds one geometry type only: points, lines or polygons.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use shapefile to exchange data with older software; use GeoPackage for your own work.</p>
</div>