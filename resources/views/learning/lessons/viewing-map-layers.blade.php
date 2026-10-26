{{-- resources/views/learning/lessons/3-7-viewing-layers.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Layers are drawn in stacked order: the top layer in the Layers panel appears on top of the map.
    Understanding this stacking order is key to making your map readable.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how layer stacking works</li>
    <li>Learn how to reorder and hide layers</li>
    <li>Identify features using the Identify tool</li>
</ul>

<h2>Visual Guide: Layer Stacking & Map Result</h2>
<div style="display: flex; align-items: center; justify-content: space-between; margin: 20px 0;">
    <div style="width: 35%; display: flex; flex-direction: column; gap: 5px;">
        <div style="border: 2px solid #ccc; background: #fff; padding: 5px 10px; font-size: 12px; font-weight: bold; border-left: 4px solid #FF9800;">Hospitals (Points) &#9632;</div>
        <div style="border: 2px solid #ccc; background: #fff; padding: 5px 10px; font-size: 12px; font-weight: bold; border-left: 4px solid #04AA6D;">Roads (Lines) &#9632;</div>
        <div style="border: 2px solid #ccc; background: #fff; padding: 5px 10px; font-size: 12px; font-weight: bold; border-left: 4px solid #282A35;">Wards (Polygons) &#9632;</div>
        <div style="border: 2px solid #ccc; background: #fff; padding: 5px 10px; font-size: 12px; font-weight: bold; border-left: 4px solid #2196F3;">Satellite (Raster) &#9632;</div>
        <div style="font-size: 11px; color: #d9534f; margin-top: 5px;">Top row = drawn on top</div>
    </div>
    <div style="width: 20%; text-align: center; font-size: 20px; color: #999;">&rarr;</div>
    <div style="width: 40%; display: flex; justify-content: center;">
        <div style="border: 1px solid #ccc; width: 100%; height: 120px; background: linear-gradient(135deg, #a8e6cf 0%, #dcedc1 100%); position: relative; border-radius: 4px;">
            <div style="position: absolute; top: 20%; left: 10%; width: 50%; height: 50%; background: rgba(255, 152, 0, 0.4); border: 1px solid #FF9800;"></div>
            <div style="position: absolute; bottom: 20%; right: 10%; width: 40%; height: 50%; background: rgba(4, 170, 109, 0.4); border: 1px solid #04AA6D;"></div>
            <div style="position: absolute; top: 50%; left: 20%; width: 80%; height: 2px; background: #282A35; transform: rotate(-15deg);"></div>
            <div style="position: absolute; top: 30%; left: 40%; width: 6px; height: 6px; background: #d9534f; border-radius: 50%;"></div>
            <div style="position: absolute; top: 60%; left: 70%; width: 6px; height: 6px; background: #d9534f; border-radius: 50%;"></div>
        </div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li>Common order, top to bottom: <strong>points, lines, polygons, raster</strong>.</li>
    <li>The checkbox hides a layer without deleting it.</li>
    <li>Drag layers up or down to change what is covered.</li>
    <li>Opaque polygons hide layers below – lower the <strong>Opacity</strong> in Symbology.</li>
    <li>Use the <strong>Identify tool (Ctrl+Shift+I)</strong> and click a feature to read its attributes.</li>
    <li>Layers in different CRS still line up because QGIS reprojects on the fly.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Layer Styling panel (F7) lets you restyle a layer while watching the map.</p>
</div>