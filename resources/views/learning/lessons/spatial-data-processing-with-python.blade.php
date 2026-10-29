{{-- resources/views/learning/lessons/8-26-pipeline.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Combine the libraries into a pipeline: read, reproject, analyse and export.
    This is the core pattern of professional GIS programming.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Build a five-step pipeline</li>
    <li>Reproject before spatial operations</li>
    <li>Summarise and export results</li>
</ul>

<h2>Visual Guide: The Pipeline</h2>
<div style="display: flex; flex-direction: column; align-items: center; margin: 20px 0; font-size: 12px;">
    <div style="width: 80%; border: 2px solid #282A35; border-radius: 6px; padding: 8px; background: #f9f9f9; text-align: center;"><strong>1 Read</strong><br><span style="font-size: 11px; color: #666;">two layers</span></div>
    <div style="font-size: 16px; color: #FF9800;">&darr;</div>
    <div style="width: 80%; border: 2px solid #04AA6D; border-radius: 6px; padding: 8px; background: #e8f5e9; text-align: center;"><strong>2 Reproject</strong><br><span style="font-size: 11px; color: #666;">same CRS</span></div>
    <div style="font-size: 16px; color: #FF9800;">&darr;</div>
    <div style="width: 80%; border: 2px solid #2196F3; border-radius: 6px; padding: 8px; background: #e3f2fd; text-align: center;"><strong>3 Join</strong><br><span style="font-size: 11px; color: #666;">points in polygons</span></div>
    <div style="font-size: 16px; color: #FF9800;">&darr;</div>
    <div style="width: 80%; border: 2px solid #9C27B0; border-radius: 6px; padding: 8px; background: #f3e5f5; text-align: center;"><strong>4 Summarise</strong><br><span style="font-size: 11px; color: #666;">count per ward</span></div>
    <div style="font-size: 16px; color: #FF9800;">&darr;</div>
    <div style="width: 80%; border: 2px solid #FF9800; border-radius: 6px; padding: 8px; background: #fff3cd; text-align: center;"><strong>5 Export</strong><br><span style="font-size: 11px; color: #666;">CSV / GPKG</span></div>
</div>

<div style="border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff; margin-bottom: 20px;">
    <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">pipeline.py</div>
    <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
        wards = gpd.read_file("wards.gpkg").to_crs(32644)<br>
        pts = gpd.read_file("schools.gpkg").to_crs(32644)<br>
        join = gpd.sjoin(pts, wards, predicate="within")<br>
        counts = join.groupby("ward").size()<br>
        counts.to_csv("schools_per_ward.csv")
    </div>
</div>

<p>
    The diagram shows the five steps of a typical spatial data processing pipeline.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a typical pipeline?</strong> Read, reproject, clean, analyse, export.</li>
    <li><strong>Why reproject first?</strong> All layers must share a CRS before joins or distance calculations.</li>
    <li><strong>How do I do a spatial join?</strong> <code>gpd.sjoin(points, polygons, predicate="within")</code>.</li>
    <li><strong>How do I summarise results?</strong> <code>.groupby("ward").size()</code> or <code>.agg()</code>.</li>
    <li><strong>How do I save?</strong> <code>gdf.to_file("out.gpkg", driver="GPKG")</code>.</li>
    <li><strong>How do I check each step?</strong> <code>len(gdf)</code>, <code>gdf.crs</code> and <code>gdf.is_valid.all()</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Print the feature count after every step to catch lost data.</p>
</div>