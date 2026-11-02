{{-- resources/views/learning/lessons/12-9-extrusion.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A common shortcut to a 3D city is to extrude building footprints upward using a height attribute.
    It is fast, uses existing 2D data, and gives an immediate sense of volume.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Extrude polygons by a height field</li>
    <li>Use a minimum and maximum height</li>
    <li>Style the extruded buildings</li>
</ul>

<h2>Visual Guide: Footprint to Building</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Footprints</strong>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 5px; margin: 10px 0;">
            <div style="width: 30px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="width: 30px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="width: 30px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
        </div>
        <div style="font-size: 10px; color: #666;">height attribute: 10, 25, 15 m</div>
    </div>
    <div style="width: 10%; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Extruded</strong>
        <div style="display: flex; align-items: flex-end; justify-content: center; gap: 5px; height: 60px; margin: 10px 0; background: #e3f2fd; border-radius: 4px;">
            <div style="width: 20px; height: 15px; background: #90caf9; border: 1px solid #2196F3;"></div>
            <div style="width: 20px; height: 40px; background: #90caf9; border: 1px solid #2196F3;"></div>
            <div style="width: 20px; height: 25px; background: #90caf9; border: 1px solid #2196F3;"></div>
        </div>
    </div>
    <div style="width: 25%; display: flex; flex-direction: column; gap: 5px; font-size: 11px; text-align: left;">
        <div style="border: 1px solid #ccc; padding: 5px; border-radius: 4px; background: #f9f9f9;">extrudedHeight</div>
        <div style="border: 1px solid #ccc; padding: 5px; border-radius: 4px; background: #f9f9f9;">height (base)</div>
        <div style="border: 1px solid #ccc; padding: 5px; border-radius: 4px; background: #f9f9f9;">per-feature height</div>
    </div>
</div>

<p>
    The diagram shows how 2D footprints with height attributes are extruded into 3D buildings.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is extrusion?</strong> Raising a polygon by a height to give it walls and a roof.</li>
    <li><strong>How do I do it in Cesium?</strong> Use a polygon entity with <code>extrudedHeight</code> or <code>height</code>.</li>
    <li><strong>Can height vary per building?</strong> Yes. Use a height attribute such as <code>building:levels * 3</code>.</li>
    <li><strong>Where does the base sit?</strong> On the terrain or at a fixed base height; set it correctly to avoid floating buildings.</li>
    <li><strong>What are the limits?</strong> No windows, roofs or interiors; great for a quick city view, not a full model.</li>
    <li><strong>What is the next step?</strong> Replace important buildings with real glTF or CityGML models.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Extrusion needs a height field. Add one from survey data, floor counts or LiDAR.</p>
</div>