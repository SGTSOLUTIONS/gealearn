{{-- resources/views/learning/lessons/8-15-fiona.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Fiona reads and writes vector files feature by feature.
    It gives you fine-grained control over each feature, useful for streaming large files.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Open a vector file with Fiona</li>
    <li>Iterate over features</li>
    <li>Understand the relationship with GeoPandas</li>
</ul>

<h2>Visual Guide: Fiona Feature Structure</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">fiona.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            import fiona<br>
            with fiona.open("wards.shp") as src:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;print(src.crs, len(src))<br>
            &nbsp;&nbsp;&nbsp;&nbsp;for feat in src:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(feat['properties'])
        </div>
    </div>
    <div style="width: 45%; display: flex; flex-direction: column; align-items: center; justify-content: center; font-size: 11px;">
        <div style="border: 1px solid #ccc; padding: 6px 12px; border-radius: 4px; background: #f9f9f9; margin-bottom: 5px;">file .shp</div>
        <div style="font-size: 20px; color: #FF9800;">&darr;</div>
        <div style="border: 2px solid #282A35; padding: 6px 12px; border-radius: 4px; background: #282A35; color: #fff; margin-bottom: 5px;">Fiona<br><span style="font-size: 9px;">(GDAL / OGR)</span></div>
        <div style="font-size: 20px; color: #FF9800;">&darr;</div>
        <div style="border: 1px solid #ccc; padding: 6px 12px; border-radius: 4px; background: #e8f5e9; width: 80%; text-align: left;">
            <strong>One feature</strong><br>
            { 'geometry': {...},<br>
            &nbsp;&nbsp;'properties': {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;'name': 'Ward A'}<br>
            }
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>GeoPandas builds on Fiona / Pyogrio</strong>
</div>

<p>
    The diagram shows how Fiona reads a file and returns each feature as a dictionary with geometry and properties.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is Fiona?</strong> A Python library that reads and writes vector files through GDAL/OGR.</li>
    <li><strong>How do I open a file?</strong> <code>fiona.open(path)</code>; then use src.crs, src.schema, len(src).</li>
    <li><strong>What is a feature?</strong> A dictionary with geometry and properties.</li>
    <li><strong>Fiona or GeoPandas?</strong> GeoPandas is easier and builds on Fiona (or Pyogrio).</li>
    <li><strong>When is Fiona useful?</strong> Streaming large files and fine control over each feature.</li>
    <li><strong>How do I list layers?</strong> <code>fiona.listlayers("city.gpkg")</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> For everyday work start with GeoPandas; use Fiona when you need streaming.</p>
</div>