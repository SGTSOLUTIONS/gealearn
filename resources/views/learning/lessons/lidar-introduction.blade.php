{{-- resources/views/learning/lessons/6-16-lidar-introduction.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    LiDAR (Light Detection and Ranging) fires laser pulses and measures their return time to create a precise 3D point cloud of the surface.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how LiDAR measures distance</li>
    <li>Know what a point cloud is and its common file formats</li>
    <li>Identify the products derived from LiDAR data</li>
</ul>

<h2>Visual Guide: LiDAR Returns and Point Cloud</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Laser Pulse</div>
        <div style="padding: 6px; background: #fff;">Sent from aircraft to ground</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Multiple Returns</div>
        <div style="padding: 6px; background: #fff;">First return = canopy top, Last return = ground</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Distance Calculation</div>
        <div style="padding: 6px; background: #fff;">Speed of light x time / 2</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Point Cloud</div>
        <div style="padding: 6px; background: #fff;">x, y, z + intensity/classification</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Emit &rarr; Reflect &rarr; Calculate &rarr; Store &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">LAS / LAZ formats</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Ground, Vegetation, Building classes</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Check point density (pts/m²)</div>
</div>

<p>
    The diagram shows how a single laser pulse can produce multiple returns. The first return hits the top of the canopy, while the last return reaches the ground. The point cloud stores x, y, z coordinates plus attributes like intensity and classification. Point density limits how detailed your elevation model can be.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is LiDAR?</strong> An active sensor that uses laser pulses to measure distance and build a 3D point cloud.</li>
    <li><strong>What are returns?</strong> One pulse can give several returns: the first from the top of the canopy, the last from the ground below.</li>
    <li><strong>Which file formats are used?</strong> LAS and the compressed LAZ.</li>
    <li><strong>How is the distance found?</strong> From the time a pulse takes to return: distance = speed of light x time / 2.</li>
    <li><strong>What is a point cloud?</strong> A set of x,y,z points, each with attributes such as intensity and classification.</li>
    <li><strong>What products come from it?</strong> DSM, DTM, canopy height, contours, building footprints, and 3D models.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Check the point density (points per square metre); it limits how detailed your elevation model can be.</p>
</div>