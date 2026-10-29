{{-- resources/views/learning/lessons/6-19-digital-terrain-models.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A Digital Terrain Model (DTM) shows the bare-earth surface, with buildings, trees, and other objects removed.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how a DTM is created from point cloud data</li>
    <li>Know the difference between ground filtering and interpolation</li>
    <li>Identify applications where a DTM is essential</li>
</ul>

<h2>Visual Guide: From Points to a DTM</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Classify Points</div>
        <div style="padding: 6px; background: #fff;">Separate ground from objects</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Keep Ground Only</div>
        <div style="padding: 6px; background: #fff;">Remove roofs and canopy</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Interpolate</div>
        <div style="padding: 6px; background: #fff;">TIN, IDW, or kriging to raster</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Check</div>
        <div style="padding: 6px; background: #fff;">Profile across a building/forest</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Filter &rarr; Select &rarr; Surface &rarr; Verify &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">CSF (Cloth Simulation Filter)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Progressive morphological filters</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Hydrology needs the DTM</div>
</div>

<p>
    The diagram shows the process of creating a DTM. Ground filtering algorithms separate ground points from objects. Only the ground points are kept and interpolated into a raster. A DTM is essential for hydrology and flood models, slope and contours, and engineering design, because water flows over the bare ground, not roofs and treetops.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a DTM?</strong> A raster of bare-ground elevation with buildings and vegetation removed.</li>
    <li><strong>What is ground filtering?</strong> Algorithms that separate ground points from objects, for example CSF or progressive morphological filters.</li>
    <li><strong>What are DTMs used for?</strong> Hydrology and flood models, slope and contours, and road and engineering design.</li>
    <li><strong>How is it made?</strong> Classify LiDAR points as ground, keep only the ground points, then interpolate a raster.</li>
    <li><strong>Which interpolation methods are used?</strong> TIN, IDW, or kriging between the ground points.</li>
    <li><strong>DTM or DSM for water flow?</strong> The DTM. Hydrology needs the bare ground, not roofs and treetops.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Check a DTM with a profile across a building or forest: the line should follow the ground, not the roof or canopy.</p>
</div>