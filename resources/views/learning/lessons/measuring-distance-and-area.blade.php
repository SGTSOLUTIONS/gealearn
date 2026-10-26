{{-- resources/views/learning/lessons/3-11-measuring.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    QGIS measures lengths, areas, and angles directly on the map canvas.
    These tools are essential for quick spatial analysis without creating new datasets.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Measure lines and areas</li>
    <li>Set the correct units and ellipsoid</li>
    <li>Store measurements in the attribute table</li>
</ul>

<h2>Visual Guide: Measurement Tools</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">Measure Line</strong>
        <div style="border: 1px solid #ddd; height: 80px; margin-top: 8px; position: relative; background: #f9f9f9;">
            <div style="position: absolute; bottom: 10px; left: 10px; width: 10px; height: 10px; background: #FF9800; border-radius: 50%;"></div>
            <div style="position: absolute; bottom: 10px; left: 10px; width: 80px; height: 2px; background: #FF9800; transform: rotate(-30deg); transform-origin: left center;"></div>
            <div style="position: absolute; bottom: 35px; left: 80px; width: 10px; height: 10px; background: #FF9800; border-radius: 50%;"></div>
            <div style="position: absolute; top: 20px; left: 100px; font-size: 10px; font-weight: bold;">120m</div>
        </div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">Ctrl+Shift+M</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">Measure Area</strong>
        <div style="border: 1px solid #ddd; height: 80px; margin-top: 8px; position: relative; background: #f9f9f9;">
            <div style="position: absolute; top: 15px; left: 30px; width: 60px; height: 50px; background: rgba(255, 152, 0, 0.2); border: 2px solid #FF9800; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; font-weight: bold;">1,250 sqm</div>
        </div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">Ctrl+Shift+J</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">Set Units</strong>
        <div style="border: 1px solid #ddd; margin-top: 8px; background: #f9f9f9; padding: 5px; font-size: 10px; text-align: left;">
            <strong>Project settings</strong><br>
            Project > Properties > General > Measurements<br>
            Ellipsoid, Distance units, Area units
        </div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li><strong>Measure Line (Ctrl+Shift+M):</strong> click vertices, right-click to finish; shows segments and total.</li>
    <li><strong>Measure Area (Ctrl+Shift+J):</strong> click the corners of the shape.</li>
    <li><strong>Measure Angle</strong> gives the angle between two lines.</li>
    <li>Set units and ellipsoid in <strong>Project > Properties > General > Measurements</strong>.</li>
    <li>To store values for every feature, use <code>$length</code> or <code>$area</code> in the <strong>Field Calculator</strong>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use an ellipsoidal setting, or a suitable projected CRS, for accurate ground distances.</p>
</div>