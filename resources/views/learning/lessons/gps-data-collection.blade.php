{{-- resources/views/learning/lessons/5-24-gps.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GPS (GNSS) receivers calculate position from satellite signals. The data can be loaded into GIS as points and lines.
    It is the most common way to capture field locations.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how GPS works</li>
    <li>Know the different levels of accuracy</li>
    <li>Import GPS data into GIS</li>
</ul>

<h2>Visual Guide: GPS Positioning and Accuracy</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Satellite signals</strong>
        <div style="height: 80px; position: relative; margin-top: 8px; background: #f9f9f9;">
            <div style="position: absolute; top: 5px; left: 10px; width: 20px; height: 10px; background: #2196F3; border-radius: 2px;"></div>
            <div style="position: absolute; top: 5px; left: 50px; width: 20px; height: 10px; background: #2196F3; border-radius: 2px;"></div>
            <div style="position: absolute; top: 5px; right: 10px; width: 20px; height: 10px; background: #2196F3; border-radius: 2px;"></div>
            <div style="position: absolute; top: 20px; left: 20px; width: 1px; height: 50px; border-left: 1px dashed #999; transform: rotate(20deg);"></div>
            <div style="position: absolute; top: 20px; left: 60px; width: 1px; height: 50px; border-left: 1px dashed #999;"></div>
            <div style="position: absolute; top: 20px; right: 20px; width: 1px; height: 50px; border-left: 1px dashed #999; transform: rotate(-20deg);"></div>
            <div style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%); width: 20px; height: 30px; background: #282A35; border-radius: 4px;"></div>
            <div style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 40px; border-top: 1px dashed #d9534f; border-radius: 50%; height: 10px;"></div>
            <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); font-size: 9px; color: #d9534f; white-space: nowrap;">position &plusmn; error</div>
        </div>
        <div style="font-size: 10px; color: #666; margin-top: 15px;">needs 4+ satellites for a 3D fix</div>
    </div>
    
    <div style="width: 50%; display: flex; flex-direction: column; gap: 6px;">
        <strong style="color: #282A35; font-size: 11px;">Typical accuracy</strong>
        <div style="border-left: 6px solid #FF9800; background: #fff3cd; padding: 6px; border-radius: 4px; text-align: left; font-size: 11px;">
            <strong>Phone GPS:</strong> about 3 &ndash; 10 m (open sky)
        </div>
        <div style="border-left: 6px solid #04AA6D; background: #e8f5e9; padding: 6px; border-radius: 4px; text-align: left; font-size: 11px;">
            <strong>Handheld GNSS:</strong> about 1 &ndash; 3 m
        </div>
        <div style="border-left: 6px solid #2196F3; background: #e3f2fd; padding: 6px; border-radius: 4px; text-align: left; font-size: 11px;">
            <strong>RTK / survey GNSS:</strong> centimetre level
        </div>
    </div>
</div>

<p>
    The diagram shows how a GPS receiver calculates its position using signals from multiple satellites. The accuracy of the position depends on the type of receiver used, from standard phones to survey-grade RTK equipment.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How does GPS (GNSS) work?</strong> A receiver calculates position from satellite signals; it needs 4 or more satellites for a 3D fix.</li>
    <li><strong>Which data types exist?</strong> Waypoints (points), tracks (recorded path) and routes (planned path).</li>
    <li><strong>What accuracy can I expect?</strong> Phone about 3&ndash;10 m, handheld 1&ndash;3 m, survey RTK centimetres.</li>
    <li><strong>What reduces accuracy?</strong> Tree cover, tall buildings and few satellites.</li>
    <li><strong>Which file format is used?</strong> GPX (WGS 84); open it with Layer &gt; Add Layer &gt; Add Vector Layer.</li>
    <li><strong>What metadata should I record?</strong> Device, date, operator and accuracy.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Wait for the fix to settle before recording and note the accuracy value shown.</p>
</div>