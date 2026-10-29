{{-- resources/views/learning/lessons/8-25-batch.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Batch geoprocessing runs one operation over many files or layers.
    It is the most common use case for automation in GIS.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Loop over files with glob</li>
    <li>Name outputs clearly</li>
    <li>Handle errors gracefully</li>
</ul>

<h2>Visual Guide: Batch Loop</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; font-size: 12px;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff; text-align: left;">
        <strong style="color: #282A35;">data/</strong>
        <div style="font-family: Consolas, monospace; font-size: 11px; margin-top: 5px;">a.shp<br>b.shp<br>c.shp</div>
    </div>
    <div style="width: 20%; text-align: center;">
        <div style="font-size: 24px; color: #FF9800;">&rarr;</div>
        <div style="width: 40px; height: 40px; background: #04AA6D; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; font-size: 10px;">loop</div>
        <div style="font-size: 24px; color: #FF9800;">&rarr;</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #e8f5e9; text-align: left;">
        <strong style="color: #282A35;">out/</strong>
        <div style="font-family: Consolas, monospace; font-size: 11px; margin-top: 5px;">a.gpkg<br>b.gpkg<br>c.gpkg</div>
    </div>
</div>

<div style="border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff; margin-bottom: 20px;">
    <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">batch.py</div>
    <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
        from pathlib import Path<br>
        for shp in Path("data").glob("*.shp"):<br>
        &nbsp;&nbsp;&nbsp;&nbsp;gdf = gpd.read_file(shp)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;gdf = gdf.to_crs(4326)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;gdf.to_file(f"out/{shp.stem}.gpkg")
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Same steps for every file</strong> &nbsp;|&nbsp; try / except keeps the batch going
</div>

<p>
    The diagram shows how a batch script loops over all shapefiles in a folder and writes the converted results to an output folder.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is batch geoprocessing?</strong> Running the same operation on many files or layers.</li>
    <li><strong>How do I find the files?</strong> <code>Path("data").glob("*.shp")</code>.</li>
    <li><strong>How do I name outputs?</strong> <code>f"out/{p.stem}.gpkg"</code> keeps the original name.</li>
    <li><strong>How do I survive a bad file?</strong> Use try/except inside the loop and continue with the next file.</li>
    <li><strong>How do I see progress?</strong> print messages or a progress bar such as tqdm.</li>
    <li><strong>Any memory tip?</strong> Process one file at a time.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Check one output by hand before trusting the whole batch.</p>
</div>