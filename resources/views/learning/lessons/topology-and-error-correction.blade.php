{{-- resources/views/learning/lessons/4-15-topology.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Topology describes how features share borders and connect. Errors break these rules and must be corrected.
    Topology is especially important for land parcels and road networks.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify gaps, overlaps, and dangles</li>
    <li>Use snapping to fix errors</li>
    <li>Enable topological editing</li>
</ul>

<h2>Visual Guide: Topology Errors and Fixes</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #d9534f;">Gap</strong>
        <div style="display: flex; justify-content: center; margin: 8px 0;">
            <div style="width: 40px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="width: 15px; height: 30px; border: 2px dashed #d9534f; background: #ffcdd2;"></div>
            <div style="width: 40px; height: 30px; background: #bbdefb; border: 1px solid #2196F3;"></div>
        </div>
        <div style="border-top: 1px solid #ccc; padding-top: 5px; color: #04AA6D; font-weight: bold;">Fixed</div>
        <div style="display: flex; justify-content: center; margin: 8px 0;">
            <div style="width: 40px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="width: 40px; height: 30px; background: #bbdefb; border: 1px solid #2196F3;"></div>
        </div>
        <div style="font-size: 10px; color: #666;">Snap geometries to layer</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #d9534f;">Overlap</strong>
        <div style="display: flex; justify-content: center; margin: 8px 0;">
            <div style="width: 40px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="width: 20px; height: 30px; background: #ffcdd2; border: 2px solid #d9534f;"></div>
            <div style="width: 40px; height: 30px; background: #bbdefb; border: 1px solid #2196F3;"></div>
        </div>
        <div style="border-top: 1px solid #ccc; padding-top: 5px; color: #04AA6D; font-weight: bold;">Fixed</div>
        <div style="display: flex; justify-content: center; margin: 8px 0;">
            <div style="width: 40px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="width: 40px; height: 30px; background: #bbdefb; border: 1px solid #2196F3;"></div>
        </div>
        <div style="font-size: 10px; color: #666;">Geometry Checker resolve overlap</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #d9534f;">Dangle (undershoot)</strong>
        <div style="height: 50px; position: relative; margin: 8px 0;">
            <div style="position: absolute; top: 25px; left: 10px; width: 80%; height: 2px; background: #282A35;"></div>
            <div style="position: absolute; top: 10px; left: 50%; width: 2px; height: 30px; background: #282A35;"></div>
            <div style="position: absolute; top: 22px; left: 50%; width: 8px; height: 8px; background: #ffcdd2; border: 1px solid #d9534f; border-radius: 50%;"></div>
        </div>
        <div style="border-top: 1px solid #ccc; padding-top: 5px; color: #04AA6D; font-weight: bold;">Fixed</div>
        <div style="height: 30px; position: relative; margin: 8px 0;">
            <div style="position: absolute; top: 15px; left: 10px; width: 80%; height: 2px; background: #282A35;"></div>
            <div style="position: absolute; top: 0; left: 50%; width: 2px; height: 30px; background: #282A35;"></div>
            <div style="position: absolute; top: 12px; left: 50%; width: 6px; height: 6px; background: #04AA6D; border-radius: 50%;"></div>
        </div>
        <div style="font-size: 10px; color: #666;">Snapping / extend line to node</div>
    </div>
</div>

<p>
    The diagram illustrates the three most common topology errors: gaps between adjacent polygons, overlaps between polygons, and dangles where a line fails to connect to another line. Each error is shown alongside its corrected version.
</p>

<h2>Key Points</h2>
<ul>
    <li>Common errors: <strong>gaps, overlaps, dangles</strong> (unconnected line ends), duplicates and slivers.</li>
    <li>Find them with the <strong>Topology Checker</strong> or <strong>Geometry Checker</strong> (core plugins).</li>
    <li>Turn on <strong>Snapping</strong> (Project &gt; Snapping Options) so edges meet exactly.</li>
    <li>Fix with the <strong>Vertex tool</strong>, <strong>Snap geometries to layer</strong> or the checker's fix options.</li>
    <li>Typical rules: polygons must not overlap or leave gaps; lines must not dangle.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Enable topological editing so shared borders move together when you edit.</p>
</div>