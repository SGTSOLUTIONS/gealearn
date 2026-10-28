{{-- resources/views/learning/lessons/6-4-drone-mapping.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Drone mapping uses small unmanned aircraft (UAVs) with cameras or sensors to map small areas at very high detail.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the drone mapping workflow from planning to products</li>
    <li>Know the overlap and GCP requirements for accurate results</li>
    <li>Be aware of regulations and quality factors</li>
</ul>

<h2>Visual Guide: Drone Mapping Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Plan</div>
        <div style="padding: 6px; background: #fff;">Area, height, overlap</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Fly</div>
        <div style="padding: 6px; background: #fff;">Automatic grid of overlapping photos</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Process</div>
        <div style="padding: 6px; background: #fff;">Photogrammetry software</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 GCPs</div>
        <div style="padding: 6px; background: #fff;">Ground control points improve accuracy</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">5 Products</div>
        <div style="padding: 6px; background: #fff;">Orthomosaic, DSM, point cloud</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Setup &rarr; Capture &rarr; Compute &rarr; Control &rarr; Output &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">75–80% forward overlap</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">65–70% side overlap</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">5+ GCPs spread across the area</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Fly in even light</div>
</div>

<p>
    The diagram shows the cyclical workflow of drone mapping. Planning is key to preventing errors later. After data is collected, it must be processed using photogrammetry software and tied to the ground with GCPs to ensure absolute accuracy.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is drone mapping?</strong> Mapping with a UAV flown in an automatic grid while its camera takes overlapping photos.</li>
    <li><strong>What products come out?</strong> Orthomosaic, DSM, DTM, 3D point cloud, and 3D models.</li>
    <li><strong>How much overlap is needed?</strong> Around 75 to 80% forward and 65 to 70% side overlap.</li>
    <li><strong>What are GCPs?</strong> Ground control points: marked points with surveyed coordinates that improve absolute accuracy.</li>
    <li><strong>What affects quality?</strong> Flight height, overlap, light, wind, and camera sharpness.</li>
    <li><strong>What about rules?</strong> Check local drone regulations first: height limits (often 120 m), permits, and no-fly zones.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Fly in even light and spread five or more GCPs across the area for the best accuracy.</p>
</div>