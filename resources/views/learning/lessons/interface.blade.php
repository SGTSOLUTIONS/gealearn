{{-- resources/views/learning/lessons/3-4-interface.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The QGIS window is divided into several areas. Each area has one clear job, from finding data to displaying the final map.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify the main panels in the QGIS interface</li>
    <li>Understand what each panel is used for</li>
</ul>

<h2>Visual Guide: QGIS Interface Layout</h2>
<div style="border: 2px solid #ccc; border-radius: 6px; overflow: hidden; margin: 20px 0; font-size: 13px;">
    <div style="background: #282A35; color: #fff; padding: 8px; display: flex; justify-content: space-between;">
        <span><strong>Menu Bar:</strong> Project, Edit, View, Layer...</span>
        <span>Toolbars: [icons]</span>
    </div>
    <div style="display: flex; height: 200px;">
        <div style="width: 25%; border-right: 1px solid #ccc; background: #f9f9f9; padding: 10px;">
            <strong style="color: #04AA6D;">Browser Panel</strong><br>
            <span style="font-size: 11px; color: #666;">Favorites, Project Home, GeoPackage</span>
        </div>
        <div style="width: 50%; border-right: 1px solid #ccc; background: #eef; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <strong>Map Canvas</strong>
            <span style="font-size: 11px; color: #666;">(Your map is drawn here)</span>
        </div>
        <div style="width: 25%; background: #f9f9f9; padding: 10px;">
            <strong style="color: #04AA6D;">Processing Toolbox</strong><br>
            <span style="font-size: 11px; color: #666;">Search... Vector analysis, Raster analysis</span>
        </div>
    </div>
    <div style="display: flex; background: #f1f1f1; border-top: 1px solid #ccc;">
        <div style="width: 25%; padding: 6px; border-right: 1px solid #ccc;">
            <strong style="color: #04AA6D;">Layers Panel</strong><br>
            <span style="font-size: 11px;">[x] Rivers &nbsp; [x] Wards</span>
        </div>
        <div style="width: 75%; padding: 6px; font-size: 11px; display: flex; justify-content: space-between;">
            <span>Coordinate: 78.00, 20.00</span>
            <span>Scale: 1:50000</span>
            <span>Rotation: 0.0&deg;</span>
            <span>EPSG:4326</span>
        </div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li><strong>Menu bar and toolbars</strong> – commands such as Project, Layer, Vector, Raster.</li>
    <li><strong>Browser panel</strong> – finds files and databases on your computer.</li>
    <li><strong>Layers panel</strong> – lists, orders and shows or hides layers.</li>
    <li><strong>Map canvas</strong> – the area where your data is displayed.</li>
    <li><strong>Processing Toolbox</strong> – searchable list of analysis tools (Ctrl+Alt+T).</li>
    <li><strong>Status bar</strong> – shows coordinates, scale, rotation and the project CRS.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Lost a panel? Use <em>View > Panels</em> to bring it back.</p>
</div>