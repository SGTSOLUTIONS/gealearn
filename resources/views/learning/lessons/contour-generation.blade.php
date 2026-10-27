{{-- resources/views/learning/lessons/5-19-contour.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A contour is a line joining points of equal elevation, created from a DEM.
    Contours help visualise the shape of the terrain in two dimensions.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how contours represent elevation</li>
    <li>Read steep vs. gentle slopes from contour spacing</li>
    <li>Generate contours from a DEM</li>
</ul>

<h2>Visual Guide: Contours in Map and Profile View</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 48%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Map view</strong>
        <div style="height: 100px; position: relative; margin-top: 8px; background: #f9f9f9; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 20px; width: 80px; height: 80px; border: 1.5px solid #795548; border-radius: 50%;"></div>
            <div style="position: absolute; top: 20px; left: 30px; width: 60px; height: 60px; border: 1.5px solid #795548; border-radius: 50%;"></div>
            <div style="position: absolute; top: 30px; left: 40px; width: 40px; height: 40px; border: 1.5px solid #795548; border-radius: 50%;"></div>
            <div style="position: absolute; top: 40px; left: 50px; width: 20px; height: 20px; border: 1.5px solid #795548; border-radius: 50%;"></div>
            
            <div style="position: absolute; top: 40px; left: 35px; font-size: 9px;">180</div>
            <div style="position: absolute; top: 25px; left: 25px; font-size: 9px;">160</div>
            <div style="position: absolute; top: 15px; left: 15px; font-size: 9px;">140</div>
        </div>
        <div style="display: flex; justify-content: space-between; font-size: 10px; margin-top: 5px; color: #d9534f;">
            <span>steep: lines close</span>
            <span>gentle: lines apart</span>
        </div>
    </div>
    <div style="width: 48%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Side view (profile)</strong>
        <div style="height: 100px; position: relative; margin-top: 8px; background: #f9f9f9; border-radius: 4px;">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 40px; background: #d7ccc8; clip-path: polygon(0 100%, 10% 80%, 30% 20%, 50% 0, 70% 20%, 90% 80%, 100% 100%);"></div>
            
            <div style="position: absolute; bottom: 30px; left: 10%; width: 80%; border-top: 1px dashed #d9534f; font-size: 9px; text-align: left; color: #d9534f;">100</div>
            <div style="position: absolute; bottom: 45px; left: 10%; width: 80%; border-top: 1px dashed #d9534f; font-size: 9px; text-align: left; color: #d9534f;">120</div>
            <div style="position: absolute; bottom: 60px; left: 10%; width: 80%; border-top: 1px dashed #d9534f; font-size: 9px; text-align: left; color: #d9534f;">140</div>
            
            <div style="position: absolute; bottom: 5px; left: 5px; right: 5px; display: flex; justify-content: space-between;">
                <div style="width: 2px; height: 5px; background: #795548;"></div>
                <div style="width: 2px; height: 5px; background: #795548;"></div>
                <div style="width: 2px; height: 5px; background: #795548;"></div>
                <div style="width: 2px; height: 5px; background: #795548;"></div>
                <div style="width: 2px; height: 5px; background: #795548;"></div>
            </div>
        </div>
        <div style="font-size: 10px; color: #666; margin-top: 5px;">each dot on the ground line becomes a point on a contour</div>
    </div>
</div>

<p>
    The diagram shows how a hill is represented as concentric circles in map view. The closer the lines, the steeper the terrain. In the side view, you can see how a horizontal slice through the hill creates a contour line.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a contour?</strong> A line joining points of equal elevation, created from a DEM.</li>
    <li><strong>Which tool makes them?</strong> Raster &gt; Extraction &gt; Contour; set the interval, e.g. 10 m.</li>
    <li><strong>What do close and wide spacing mean?</strong> Close lines mean steep ground; wide spacing means gentle ground.</li>
    <li><strong>How do I read rings and V shapes?</strong> Closed rings mark a hill or depression; V shapes pointing uphill mark valleys.</li>
    <li><strong>Where is the elevation stored?</strong> In a field (default ELEV); use it for labels.</li>
    <li><strong>What if contours look noisy?</strong> Smooth the DEM first or simplify the lines.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Choose the interval to suit the scale: 5 m for a town map, 50 m for a region.</p>
</div>