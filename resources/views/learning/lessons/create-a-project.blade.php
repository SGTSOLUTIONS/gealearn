<p>
    A project file (.qgz) remembers which layers you use, their styles, the CRS
    and your layouts. Setting a project up properly saves time later. A project
    stores links to data rather than the data itself, so keeping files organised
    prevents broken layers.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Create and save a project</li>
    <li>Set the project CRS</li>
    <li>Understand that projects store links, not data</li>
</ul>

<h3>Four steps</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(160px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; padding:12px; background:#f5f8fc; text-align:center;">
        <div style="color:#245b83; font-weight:bold; margin-bottom:5px;">1. New project</div>
        <div style="font-size:14px;">Project &gt; New, or <code>Ctrl+N</code>.</div>
    </div>
    <div style="border:1px solid #245b83; border-radius:8px; padding:12px; background:#f5f8fc; text-align:center;">
        <div style="color:#245b83; font-weight:bold; margin-bottom:5px;">2. Set CRS</div>
        <div style="font-size:14px;">Click the CRS button in the bottom-right corner of the window.</div>
    </div>
    <div style="border:1px solid #245b83; border-radius:8px; padding:12px; background:#f5f8fc; text-align:center;">
        <div style="color:#245b83; font-weight:bold; margin-bottom:5px;">3. Add data</div>
        <div style="font-size:14px;">Layer &gt; Add Layer, or drag files from the Browser panel.</div>
    </div>
    <div style="border:1px solid #245b83; border-radius:8px; padding:12px; background:#f5f8fc; text-align:center;">
        <div style="color:#245b83; font-weight:bold; margin-bottom:5px;">4. Save</div>
        <div style="font-size:14px;"><code>Ctrl+S</code> creates the .qgz file.</div>
    </div>
</div>

<h3>Suggested project folder</h3>
<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Project folder</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code>my_project/
  data/       roads.shp  dem.tif  wards.gpkg
  outputs/    exported maps and results
  my_map.qgz  the project file</code></pre>
</div>

<h3>Common CRS choices</h3>
<ul>
    <li><strong>EPSG:4326 (WGS 84)</strong> – GPS coordinates, latitude and longitude in degrees.</li>
    <li><strong>EPSG:3857 (Web Mercator)</strong> – web maps such as OpenStreetMap tiles.</li>
    <li><strong>A UTM zone</strong> (for example EPSG:32644) – accurate distances and areas in metres.</li>
</ul>

<ul>
    <li>The project stores links to data, not copies: moving files breaks the links.</li>
    <li>Check <strong>Project &gt; Properties &gt; General &gt; Save paths</strong> to use relative paths.</li>
    <li>The .qgz format is compressed; .qgs is plain XML.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> The first layer you add usually sets the project
        CRS automatically; always check it before you start measuring or analysing.
    </p>
</div>