{{-- resources/views/learning/lessons/6-18-digital-surface-models.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A Digital Surface Model (DSM) shows the height of the top of everything on the ground: buildings, trees, and bare earth.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what a DSM represents and how it is used</li>
    <li>Differentiate between DSM, DTM, and DEM</li>
    <li>Calculate object heights using a DSM and DTM</li>
</ul>

<h2>Visual Guide: DSM vs. DTM</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">DSM (Top Surface)</div>
        <div style="padding: 6px; background: #fff;">Captures buildings, trees, and ground</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">DTM (Bare Earth)</div>
        <div style="padding: 6px; background: #fff;">Ground only, objects removed</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">nDSM = DSM - DTM</div>
        <div style="padding: 6px; background: #fff;">Gives building and tree heights (CHM)</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Surface &rarr; Terrain &rarr; Object Height &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">DEM = general term for elevation raster</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Used for 3D city models, viewsheds, solar potential</div>
</div>

<p>
    The diagram shows the difference between a DSM and a DTM. A DSM captures the top surface, including buildings and vegetation. A DTM captures the bare earth. Subtracting the DTM from the DSM gives the normalized DSM (nDSM), which provides the heights of buildings and trees.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a DSM?</strong> A raster of elevation values for the top surface, including buildings and vegetation.</li>
    <li><strong>What is it used for?</strong> 3D city models, viewsheds, solar potential, and obstacle checks.</li>
    <li><strong>How do I get object heights?</strong> Subtract the DTM from the DSM: nDSM = DSM - DTM.</li>
    <li><strong>How is it made?</strong> From LiDAR first returns, photogrammetry, or radar.</li>
    <li><strong>DSM, DTM, or DEM?</strong> DEM is the general term for an elevation raster. A DSM is the surface; a DTM is the bare earth.</li>
    <li><strong>What affects quality?</strong> Resolution, vertical accuracy, moving objects, and reflective water.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Subtract the DTM from the DSM to get the heights of buildings and trees (nDSM or canopy height model).</p>
</div>