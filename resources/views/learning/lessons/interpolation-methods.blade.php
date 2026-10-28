{{-- resources/views/learning/lessons/7-4-interpolation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Interpolation turns scattered sample points into a continuous surface by estimating values in between.
    It is the foundation for creating surfaces from point data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the main interpolation methods</li>
    <li>Compare IDW, Kriging, TIN, and Spline</li>
    <li>Choose the right method for your data</li>
</ul>

<h2>Visual Guide: Interpolation Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Sample points</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%;"></div>
            <div style="position: absolute; top: 10px; right: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%;"></div>
            <div style="position: absolute; bottom: 10px; left: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%;"></div>
            <div style="position: absolute; bottom: 10px; right: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%;"></div>
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 12px; height: 12px; background: #FF9800; border-radius: 50%;"></div>
        </div>
    </div>
    <div style="width: 10%; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 25%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff; display: flex; flex-direction: column; gap: 5px;">
        <div style="background: #e3f2fd; padding: 4px; border-radius: 3px; font-size: 11px;">IDW</div>
        <div style="background: #e3f2fd; padding: 4px; border-radius: 3px; font-size: 11px;">Kriging</div>
        <div style="background: #e3f2fd; padding: 4px; border-radius: 3px; font-size: 11px;">TIN</div>
        <div style="background: #e3f2fd; padding: 4px; border-radius: 3px; font-size: 11px;">Spline</div>
        <div style="background: #e3f2fd; padding: 4px; border-radius: 3px; font-size: 11px;">Nearest neighbour</div>
    </div>
    <div style="width: 10%; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 25%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #e8f5e9;">
        <strong style="color: #282A35;">Continuous surface</strong>
        <div style="height: 80px; margin-top: 8px; border-radius: 4px; background: linear-gradient(135deg, #bbdefb 0%, #2196f3 100%);"></div>
    </div>
</div>

<p>
    The diagram shows how scattered sample points are transformed into a continuous surface using one of several interpolation methods.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is interpolation?</strong> Estimating values at unsampled places from known sample points to create a continuous surface.</li>
    <li><strong>What is IDW?</strong> Inverse Distance Weighting: nearer points have more influence on the estimate.</li>
    <li><strong>What is Kriging?</strong> A method that weights points using a variogram and can also estimate prediction error.</li>
    <li><strong>What is a TIN?</strong> A Triangulated Irregular Network joins points into triangles; values change linearly inside each triangle.</li>
    <li><strong>What is a spline?</strong> A smooth curve fitted through the points; good for gently varying surfaces such as elevation.</li>
    <li><strong>Where are the tools in QGIS?</strong> Processing Toolbox &gt; Interpolation (IDW, TIN). Kriging needs extra providers or plugins.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Pick the method by data and purpose: IDW for quick results, kriging for accuracy, TIN for elevation.</p>
</div>