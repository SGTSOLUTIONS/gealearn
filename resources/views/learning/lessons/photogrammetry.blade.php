{{-- resources/views/learning/lessons/6-17-photogrammetry.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Photogrammetry measures from overlapping photographs. Matching the same point in several photos lets software calculate its 3D position.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how photogrammetry derives 3D data from 2D photos</li>
    <li>Know the Structure from Motion (SfM) workflow</li>
    <li>Compare photogrammetry with LiDAR</li>
</ul>

<h2>Visual Guide: Structure from Motion (SfM)</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Photos</div>
        <div style="padding: 6px; background: #fff;">Overlapping images from different positions</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Align (SfM)</div>
        <div style="padding: 6px; background: #fff;">Find matching tie points in multiple photos</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Dense Cloud</div>
        <div style="padding: 6px; background: #fff;">Calculate 3D positions of many points</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Mesh / DSM</div>
        <div style="padding: 6px; background: #fff;">Build 3D surface models</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">5 Orthomosaic</div>
        <div style="padding: 6px; background: #fff;">Final 2D map product</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Capture &rarr; Match &rarr; Triangulate &rarr; Model &rarr; Map &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Agisoft Metashape</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Pix4D</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">OpenDroneMap (WebODM)</div>
</div>

<p>
    The diagram shows the photogrammetry workflow. Software finds matching points in several photos and triangulates their 3D positions (Structure from Motion). Photogrammetry is cheaper than LiDAR but cannot see through vegetation. Avoid featureless surfaces (water, snow, uniform sand) and blurry photos, as matching fails there.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is photogrammetry?</strong> Getting 3D measurements from overlapping photographs.</li>
    <li><strong>Why is overlap important?</strong> A point must appear in at least two photos (better three or more) for its position to be calculated.</li>
    <li><strong>Which software is used?</strong> Agisoft Metashape, Pix4D, and the free OpenDroneMap (WebODM).</li>
    <li><strong>How does it work?</strong> Software finds matching points in several photos and triangulates their 3D positions (Structure from Motion).</li>
    <li><strong>What are the outputs?</strong> Point cloud, mesh, DSM, DTM, and orthomosaic.</li>
    <li><strong>Photogrammetry or LiDAR?</strong> Photogrammetry is cheaper but cannot see through vegetation. LiDAR can reach the ground through gaps in the canopy.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Avoid featureless surfaces (water, snow, uniform sand) and blurry photos; matching fails there.</p>
</div>