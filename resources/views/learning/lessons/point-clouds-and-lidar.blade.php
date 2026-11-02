{{-- resources/views/learning/lessons/12-10-pointclouds.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A point cloud is a large set of 3D points captured by LiDAR or photogrammetry. Each point has x, y, z and often colour or intensity.
    Point clouds give the most detailed capture of real sites.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand point cloud structure</li>
    <li>Load a point cloud in a web viewer</li>
    <li>Know the performance limits</li>
</ul>

<h2>Visual Guide: Point Cloud Structure</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; display: flex; flex-direction: column; gap: 6px; font-size: 11px; text-align: left;">
        <div style="border: 2px solid #282A35; border-radius: 6px; padding: 6px; background: #fff;">
            <strong>LAS / LAZ</strong><br>source point cloud: x, y, z, intensity, class
        </div>
        <div style="font-size: 16px; color: #FF9800; text-align: center;">&darr;</div>
        <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 6px; background: #fff;">
            <strong>Processing</strong><br>classify ground, buildings, vegetation
        </div>
        <div style="font-size: 16px; color: #FF9800; text-align: center;">&darr;</div>
        <div style="border: 2px solid #2196F3; border-radius: 6px; padding: 6px; background: #fff;">
            <strong>3D Tiles / pnts</strong><br>tiled point cloud for the web
        </div>
    </div>
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #f9f9f9; text-align: center;">
        <strong style="color: #282A35;">Point cloud view</strong>
        <div style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 1px; margin-top: 10px;">
            <div style="background: #d9534f; height: 8px;"></div><div style="background: #f0ad4e; height: 8px;"></div><div style="background: #5bc0de; height: 8px;"></div><div style="background: #5cb85c; height: 8px;"></div><div style="background: #d9534f; height: 8px;"></div><div style="background: #f0ad4e; height: 8px;"></div>
            <div style="background: #5cb85c; height: 8px;"></div><div style="background: #5bc0de; height: 8px;"></div><div style="background: #d9534f; height: 8px;"></div><div style="background: #f0ad4e; height: 8px;"></div><div style="background: #5cb85c; height: 8px;"></div><div style="background: #5bc0de; height: 8px;"></div>
            <div style="background: #f0ad4e; height: 8px;"></div><div style="background: #d9534f; height: 8px;"></div><div style="background: #5cb85c; height: 8px;"></div><div style="background: #5bc0de; height: 8px;"></div><div style="background: #f0ad4e; height: 8px;"></div><div style="background: #d9534f; height: 8px;"></div>
            <div style="background: #5bc0de; height: 8px;"></div><div style="background: #5cb85c; height: 8px;"></div><div style="background: #d9534f; height: 8px;"></div><div style="background: #f0ad4e; height: 8px;"></div><div style="background: #5cb85c; height: 8px;"></div><div style="background: #5bc0de; height: 8px;"></div>
        </div>
        <div style="font-size: 10px; color: #666; margin-top: 5px;">coloured by height or class</div>
    </div>
</div>

<p>
    The diagram shows the path from a raw LAS file through processing to a web-ready tiled point cloud.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a point cloud?</strong> A very large set of x, y, z points with optional colour and intensity.</li>
    <li><strong>Where does it come from?</strong> LiDAR scanners, drones (photogrammetry) and terrestrial scanners.</li>
    <li><strong>How is it stored?</strong> LAS and LAZ for source data; 3D Tiles (pnts) or I3S for the web.</li>
    <li><strong>How do I display it in Cesium?</strong> As a 3D Tiles tileset of points.</li>
    <li><strong>Why is it heavy?</strong> Single scans can hold millions of points; tiling and level of detail are essential.</li>
    <li><strong>What can I extract?</strong> DEMs, building footprints, tree heights and change detection.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Classify and thin the point cloud before web delivery; browsers cannot show raw scan files.</p>
</div>