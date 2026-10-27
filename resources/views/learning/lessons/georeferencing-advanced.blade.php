{{-- resources/views/learning/lessons/5-21-georeferencing.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Georeferencing gives a scanned map or image real-world coordinates using ground control points (GCPs).
    It is essential for bringing historical maps or drone images into a GIS.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how GCPs work</li>
    <li>Choose the right transformation type</li>
    <li>Check accuracy using RMSE</li>
</ul>

<h2>Visual Guide: Georeferencing Process</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Scanned map (pixel x, y)</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px; border: 1px solid #999;">
            <div style="position: absolute; top: 10px; left: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%; color: #fff; font-size: 8px; display: flex; align-items: center; justify-content: center;">1</div>
            <div style="position: absolute; top: 10px; right: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%; color: #fff; font-size: 8px; display: flex; align-items: center; justify-content: center;">2</div>
            <div style="position: absolute; bottom: 10px; left: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%; color: #fff; font-size: 8px; display: flex; align-items: center; justify-content: center;">3</div>
            <div style="position: absolute; bottom: 10px; right: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%; color: #fff; font-size: 8px; display: flex; align-items: center; justify-content: center;">4</div>
        </div>
    </div>
    <div style="width: 15%; text-align: center; font-size: 11px; color: #d9534f; font-weight: bold;">GCP pairs<br>&rarr;</div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Georeferenced map (real coords)</strong>
        <div style="height: 80px; position: relative; background: #eef; margin-top: 8px; border-radius: 4px; border: 1px solid #999; transform: perspective(100px) rotateY(5deg);">
            <div style="position: absolute; top: 10px; left: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%; color: #fff; font-size: 8px; display: flex; align-items: center; justify-content: center;">1</div>
            <div style="position: absolute; top: 10px; right: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%; color: #fff; font-size: 8px; display: flex; align-items: center; justify-content: center;">2</div>
            <div style="position: absolute; bottom: 10px; left: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%; color: #fff; font-size: 8px; display: flex; align-items: center; justify-content: center;">3</div>
            <div style="position: absolute; bottom: 10px; right: 10px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%; color: #fff; font-size: 8px; display: flex; align-items: center; justify-content: center;">4</div>
        </div>
    </div>
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Linear</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Helmert</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Polynomial 1-3</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Thin plate spline</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Projective</div>
</div>

<p>
    The diagram shows how Ground Control Points (GCPs) link a distorted scanned image to real-world coordinates. By matching points on the image (left) to known locations on the map (right), the software can warp the image to fit.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is georeferencing?</strong> Giving a scanned map or image real-world coordinates using ground control points (GCPs).</li>
    <li><strong>Where is the tool?</strong> Layer &gt; Georeferencer: load the image, then add GCPs.</li>
    <li><strong>How do I add a GCP?</strong> Click the image point, then enter or pick its real coordinates.</li>
    <li><strong>Where should GCPs be placed?</strong> Spread over the whole image, especially the corners.</li>
    <li><strong>How many GCPs are needed?</strong> Polynomial 1 needs 3, Polynomial 2 needs 6, Polynomial 3 needs 10.</li>
    <li><strong>How do I check quality?</strong> Look at the residuals / RMSE; remove or redo points with large errors.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Pick points you can identify exactly: road crossings, building corners, grid intersections.</p>
</div>