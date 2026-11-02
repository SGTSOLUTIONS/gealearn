{{-- resources/views/learning/lessons/12-13-performance.blade.php --}}
{{-- CONTENT ONLY (continued) --}}

<h2>Applying It in a Real Viewer</h2>
<p>
    The workflow only pays off when it is wired into a viewer. The example below uses CesiumJS, but the same
    pattern applies to Three.js, deck.gl or any WebGL engine: load a tiled dataset, let the engine pick LOD,
    and keep the camera from drawing what it cannot see.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #282A35; color: #fff; margin: 15px 0;">
    <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">viewer.js</div>
    <div style="padding: 10px; font-family: Consolas, monospace; text-align: left; font-size: 12px;">
        // 1. Create the viewer with sensible limits<br>
        const viewer = new Cesium.Viewer('cesiumContainer', {<br>
        &nbsp;&nbsp;requestRenderMode: true,        // only redraw when the scene changes<br>
        &nbsp;&nbsp;maximumScreenSpaceError: 16,    // higher = fewer, coarser tiles<br>
        &nbsp;&nbsp;cacheBytes: 512 * 1024 * 1024     // cap tile cache at 512 MB<br>
        });<br><br>
        // 2. Stream a 3D Tiles dataset (LOD + tiling built in)<br>
        const tileset = viewer.scene.primitives.add(<br>
        &nbsp;&nbsp;new Cesium.Cesium3DTileset({ url: '/tiles/building/tileset.json' })<br>
        );<br><br>
        // 3. Only refine tiles that are actually visible<br>
        viewer.scene.globe.depthTestAgainstTerrain = true;<br>
        viewer.scene.fog.enabled = true;             // hides distant pop-in<br><br>
        // 4. Report what is being drawn<br>
        viewer.scene.postRender.addEventListener(() => {<br>
        &nbsp;&nbsp;const stats = viewer.scene.primitives;<br>
        &nbsp;&nbsp;console.log('tiles loaded:', tileset.statistics.numberOfTilesLoaded);<br>
        });
    </div>
</div>

<h2>Before / After Performance Report</h2>
<p>
    A worked review of the same building scene before and after each step of the workflow. Numbers are
    representative of a mid-range laptop GPU.
</p>

<table style="border-collapse: collapse; width: 100%; font-size: 12px; margin: 15px 0;">
    <thead>
        <tr style="background: #282A35; color: #fff;">
            <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Step</th>
            <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Download</th>
            <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Triangles drawn</th>
            <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Frame rate</th>
            <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Time to first render</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Baseline (single .glb)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">180 MB</td>
            <td style="padding: 8px; border: 1px solid #ddd;">5.2 M</td>
            <td style="padding: 8px; border: 1px solid #ddd;">12 fps</td>
            <td style="padding: 8px; border: 1px solid #ddd;">9.4 s</td>
        </tr>
        <tr style="background: #f7f7f7;">
            <td style="padding: 8px; border: 1px solid #ddd;">+ Reduce (meshopt + KTX2)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">24 MB</td>
            <td style="padding: 8px; border: 1px solid #ddd;">5.2 M</td>
            <td style="padding: 8px; border: 1px solid #ddd;">13 fps</td>
            <td style="padding: 8px; border: 1px solid #ddd;">1.6 s</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">+ Tile (3D Tiles)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">6 MB first view</td>
            <td style="padding: 8px; border: 1px solid #ddd;">2.1 M</td>
            <td style="padding: 8px; border: 1px solid #ddd;">34 fps</td>
            <td style="padding: 8px; border: 1px solid #ddd;">0.8 s</td>
        </tr>
        <tr style="background: #f7f7f7;">
            <td style="padding: 8px; border: 1px solid #ddd;">+ LOD (screen-space error)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">6 MB first view</td>
            <td style="padding: 8px; border: 1px solid #ddd;">0.9 M</td>
            <td style="padding: 8px; border: 1px solid #ddd;">58 fps</td>
            <td style="padding: 8px; border: 1px solid #ddd;">0.8 s</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">+ Cache (CDN)</td>
            <td style="padding: 8px; border: 1px solid #ddd;">~0 MB repeat</td>
            <td style="padding: 8px; border: 1px solid #ddd;">0.9 M</td>
            <td style="padding: 8px; border: 1px solid #ddd;">58 fps</td>
            <td style="padding: 8px; border: 1px solid #ddd;">0.3 s repeat</td>
        </tr>
    </tbody>
</table>

<div style="display: flex; gap: 15px; margin: 20px 0; font-size: 12px;">
    <div style="flex: 1; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D;">What improved the frame rate most?</strong>
        <p style="margin: 5px 0 0;">LOD — cutting triangles drawn from 2.1 M to 0.9 M nearly doubled fps.</p>
    </div>
    <div style="flex: 1; border: 2px solid #2196F3; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #2196F3;">What improved load time most?</strong>
        <p style="margin: 5px 0 0;">Compression cut download 7×; tiling cut the first view to 6 MB.</p>
    </div>
    <div style="flex: 1; border: 2px solid #FF9800; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #FF9800;">What helped repeat visits?</strong>
        <p style="margin: 5px 0 0;">CDN caching dropped first render from 0.8 s to 0.3 s.</p>
    </div>
</div>

<h2>Check Your Understanding</h2>
<ol>
    <li>Which single change gave the largest fps gain, and why? <em>(LOD — it reduces triangles the GPU must process.)</em></li>
    <li>Why did "Reduce" barely change the frame rate? <em>(It shrank download size, but the same triangles were still drawn.)</em></li>
    <li>Which two steps work together to cut both load time and draw cost? <em>(Tiling + LOD.)</em></li>
    <li>What does <code>maximumScreenSpaceError</code> control? <em>(How much on-screen error is tolerated before a finer tile is requested — higher means fewer, coarser tiles.)</em></li>
</ol>

<div style="border-left: 4px solid #04AA6D; background: #eefaf4; padding: 10px 14px; margin: 20px 0; font-size: 13px;">
    <strong style="color: #04AA6D;">Takeaway:</strong>
    The four steps attack different bottlenecks. Reduce and Cache fix <em>download time</em>; Tile and LOD fix
    <em>draw cost</em>. Measure each independently — a change that shrinks the file will not fix a GPU stall,
    and a change that skips distant geometry will not speed up the first download.
</div>

<h2>Module Complete</h2>
<p style="font-size: 12px; color: #666;">
    You can now identify 3D bottlenecks, reduce data size, and apply tiling, LOD and caching in a real viewer.
    Next lesson: reviewing a full performance report and setting regression budgets for a production pipeline.
</p>