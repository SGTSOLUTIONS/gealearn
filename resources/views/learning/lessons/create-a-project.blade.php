{{-- resources/views/learning/lessons/3-5-new-project.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A project file (.qgz) remembers which layers you use, their styles, the CRS, and your layouts.
    It is the container that holds your entire mapping workspace together.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Learn how to create and save a new project</li>
    <li>Understand how the project file links to data</li>
    <li>Set the correct Coordinate Reference System (CRS)</li>
</ul>

<h2>Visual Guide: Project Workflow</h2>
<div style="display: flex; align-items: center; justify-content: space-between; margin: 20px 0;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; text-align: center;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-size: 13px; font-weight: bold;">1. New Project</div>
        <div style="padding: 12px; font-size: 12px;">Ctrl+N</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; text-align: center;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-size: 13px; font-weight: bold;">2. Set CRS</div>
        <div style="padding: 12px; font-size: 12px;">Bottom-right corner (e.g., EPSG:4326 or UTM)</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; text-align: center;">
        <div style="background: #2196F3; color: #fff; padding: 8px; font-size: 13px; font-weight: bold;">3. Add Data</div>
        <div style="padding: 12px; font-size: 12px;">Layer > Add Layer</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; text-align: center;">
        <div style="background: #FF9800; color: #fff; padding: 8px; font-size: 13px; font-weight: bold;">4. Save</div>
        <div style="padding: 12px; font-size: 12px;">.qgz file</div>
    </div>
</div>

<div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
    <div style="border: 2px dashed #ccc; padding: 15px; border-radius: 6px; text-align: center; background: #f9f9f9; width: 80%;">
        <strong style="font-size: 16px;">.qgz Project File</strong><br>
        <span style="font-size: 12px; color: #666;">Layer links &bull; Styles &bull; CRS &bull; Layouts</span>
        <div style="margin-top: 15px; display: flex; justify-content: space-around;">
            <div style="border: 1px solid #ccc; padding: 5px 10px; background: #fff; border-radius: 4px; font-size: 12px;">roads.shp</div>
            <div style="border: 1px solid #ccc; padding: 5px 10px; background: #fff; border-radius: 4px; font-size: 12px;">dem.tif</div>
            <div style="border: 1px solid #ccc; padding: 5px 10px; background: #fff; border-radius: 4px; font-size: 12px;">wards.gpkg</div>
        </div>
        <div style="font-size: 11px; margin-top: 10px; color: #d9534f;">(Links to data files — not copies)</div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li>Start with <strong>Project > New (Ctrl+N)</strong> and save early with <strong>Ctrl+S</strong>.</li>
    <li>Set the CRS from the bottom-right corner: <strong>EPSG:4326</strong> for GPS lat/long, a projected CRS (e.g. UTM) for measuring.</li>
    <li>The project stores <strong>links to data, not copies</strong> – moving files breaks the links.</li>
    <li>Keep one folder per project, for example <code>data/</code>, <code>outputs/</code> and the <code>.qgz</code> file.</li>
    <li><code>.qgz</code> is the compressed project format; <code>.qgs</code> is plain XML.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> The first layer you add usually sets the project CRS automatically – always check it.</p>
</div>