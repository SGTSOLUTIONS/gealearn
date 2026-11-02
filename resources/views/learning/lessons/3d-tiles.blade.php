{{-- resources/views/learning/lessons/12-5-3d-tiles.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    3D Tiles is an open standard for streaming huge 3D datasets. It splits the scene into a tree of tiles that load only when they are needed.
    This makes it possible to view entire cities in a browser.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the tile tree structure</li>
    <li>Recognise geometric error</li>
    <li>Know the content types</li>
</ul>

<h2>Visual Guide: 3D Tiles Hierarchy</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 55%; display: flex; flex-direction: column; align-items: center;">
        <div style="width: 80%; border: 2px solid #282A35; border-radius: 6px; padding: 8px; background: #fff; margin-bottom: 5px; font-weight: bold;">Root tile (coarse)</div>
        <div style="display: flex; justify-content: space-around; width: 100%;">
            <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; padding: 6px; background: #e8f5e9; margin-bottom: 5px;">Child tile</div>
            <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; padding: 6px; background: #e8f5e9; margin-bottom: 5px;">Child tile</div>
            <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; padding: 6px; background: #e8f5e9; margin-bottom: 5px;">Child tile</div>
        </div>
        <div style="display: flex; justify-content: space-around; width: 100%;">
            <div style="width: 30%; display: flex; justify-content: center; gap: 2px;">
                <div style="width: 48%; border: 1px solid #ccc; padding: 4px; background: #fff; font-size: 10px;">Detail</div>
                <div style="width: 48%; border: 1px solid #ccc; padding: 4px; background: #fff; font-size: 10px;">Detail</div>
            </div>
            <div style="width: 30%; display: flex; justify-content: center; gap: 2px;">
                <div style="width: 48%; border: 1px solid #ccc; padding: 4px; background: #fff; font-size: 10px;">Detail</div>
                <div style="width: 48%; border: 1px solid #ccc; padding: 4px; background: #fff; font-size: 10px;">Detail</div>
            </div>
            <div style="width: 30%; display: flex; justify-content: center; gap: 2px;">
                <div style="width: 48%; border: 1px solid #ccc; padding: 4px; background: #fff; font-size: 10px;">Detail</div>
                <div style="width: 48%; border: 1px solid #ccc; padding: 4px; background: #fff; font-size: 10px;">Detail</div>
            </div>
        </div>
    </div>
    <div style="width: 40%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff; text-align: left;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">tileset.json</div>
        <div style="padding: 10px; font-family: Consolas, monospace; font-size: 10px;">
            {<br>
            &nbsp;&nbsp;"root": {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"boundingVolume": {...},<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"geometricError": 500,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"content": {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"uri": "root.glb" },<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"children": [ ... ]<br>
            &nbsp;&nbsp;}<br>
            }
        </div>
    </div>
</div>
<div style="text-align: center; font-size: 11px; color: #666; margin-bottom: 20px;">
    Only the tiles in view, at the needed detail, are loaded
</div>

<p>
    The diagram shows the tile tree hierarchy and the structure of a tileset.json file.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a tile tree?</strong> A hierarchy with a coarse root tile and children that hold more detail.</li>
    <li><strong>What is geometric error?</strong> The error in metres if that tile is shown instead of its children. The viewer uses it to decide detail.</li>
    <li><strong>What content types exist?</strong> Building meshes, photogrammetry meshes, point clouds, and instanced models (glTF inside the tiles).</li>
    <li><strong>How do I create tilesets?</strong> Tools such as Cesium ion, or exporting from photogrammetry and GIS software.</li>
    <li><strong>How do I load them in Cesium?</strong> As a <code>Cesium3DTileset</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Test a tileset first in a Cesium viewer. Check that its position and height line up with the terrain.</p>
</div>