{{-- resources/views/learning/lessons/3-10-selecting-features.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Selecting picks features for inspection, analysis, or export. Selected features turn yellow on the map.
    There are three main ways to select features in QGIS.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Select features by click, expression, or location</li>
    <li>Deselect features</li>
    <li>Process only selected features</li>
</ul>

<h2>Visual Guide: Selection Methods</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">By click / area</strong>
        <div style="border: 1px solid #ddd; height: 80px; margin-top: 8px; position: relative; background: #f9f9f9;">
            <div style="position: absolute; top: 15px; left: 15px; width: 6px; height: 6px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 40px; left: 40px; width: 6px; height: 6px; background: #FF9800; border-radius: 50%;"></div>
            <div style="position: absolute; top: 25px; left: 50px; width: 6px; height: 6px; background: #FF9800; border-radius: 50%;"></div>
            <div style="position: absolute; top: 15px; left: 50px; width: 60px; height: 40px; border: 2px dashed #FF9800;"></div>
        </div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">Select Features tools</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">By expression</strong>
        <div style="border: 1px solid #ddd; margin-top: 8px; background: #f9f9f9; font-size: 10px;">
            <div style="background: #fff; padding: 5px; border: 1px solid #ccc; margin: 5px;">"population" &gt; 5000</div>
            <div style="padding: 3px; background: #fff3cd; margin: 2px 5px;">Ward A: 5400</div>
            <div style="padding: 3px; background: #fff3cd; margin: 2px 5px;">Ward C: 7800</div>
        </div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">Ctrl+F3</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">By location</strong>
        <div style="border: 1px solid #ddd; height: 80px; margin-top: 8px; position: relative; background: #f9f9f9;">
            <div style="position: absolute; top: 5px; left: 5px; width: 90%; height: 90%; background: rgba(4, 170, 109, 0.2); border: 1px solid #04AA6D; border-radius: 4px;"></div>
            <div style="position: absolute; top: 25px; left: 40px; width: 6px; height: 6px; background: #FF9800; border-radius: 50%;"></div>
            <div style="position: absolute; top: 45px; left: 60px; width: 6px; height: 6px; background: #FF9800; border-radius: 50%;"></div>
        </div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">Vector > Research Tools</div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li><strong>By click or area</strong> – Select Features tool: rectangle, polygon, freehand or radius.</li>
    <li><strong>By expression</strong> – Ctrl+F3, e.g. <code>"population" &gt; 5000</code>.</li>
    <li><strong>By location</strong> – Vector > Research Tools > Select by Location (e.g. points inside a polygon).</li>
    <li>Deselect all with <strong>Ctrl+Alt+A</strong>.</li>
    <li>Many tools have <strong>Selected features only</strong> – tick it to process just your selection.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> A selection belongs to one layer; make sure the correct layer is active before selecting.</p>
</div>