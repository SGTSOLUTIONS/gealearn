{{-- resources/views/learning/lessons/12-13-performance.blade.php --}}
{{-- CONTENT ONLY (continued) --}}

<h2>Key Points (Q&A) — continued</h2>
<ul>
    <li><strong>What makes 3D slow?</strong> Too many triangles, huge textures, too many separate requests and no level of detail.</li>
    <li><strong>How do I reduce data size?</strong> Simplify meshes (decimation, Draco/meshopt compression), downscale textures (JPEG/KTX2), and strip unused nodes and animations.</li>
    <li><strong>What is level of detail (LOD)?</strong> Swapping a high-detail model for a cheaper version when the camera is far away, so distant objects cost almost nothing to draw.</li>
    <li><strong>Why tile a scene?</strong> Tiling splits a huge model into spatial chunks that load on demand, so the viewer only downloads what is on screen.</li>
    <li><strong>What are 3D Tiles?</strong> An open format for streaming massive 3D datasets (photogrammetry, BIM, point clouds) as a tree of tiles with built-in LOD and bounding volumes.</li>
    <li><strong>How does caching help?</strong> A CDN keeps tiles close to users and the browser reuses downloaded tiles, cutting latency and repeat requests.</li>
    <li><strong>What should I measure first?</strong> Frame rate, draw calls, triangle count and download size — fix the biggest number before micro-optimising.</li>
</ul>

<h2>Performance Budget (Rule of Thumb)</h2>
<table style="border-collapse: collapse; width: 100%; font-size: 12px; margin: 15px 0;">
    <thead>
        <tr style="background: #282A35; color: #fff;">
            <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Metric</th>
            <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Target</th>
            <th style="padding: 8px; text-align: left; border: 1px solid #ddd;">Why it matters</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Frame rate</td>
            <td style="padding: 8px; border: 1px solid #ddd;">60 fps desktop / 30 fps mobile</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Smooth interaction</td>
        </tr>
        <tr style="background: #f7f7f7;">
            <td style="padding: 8px; border: 1px solid #ddd;">Draw calls</td>
            <td style="padding: 8px; border: 1px solid #ddd;">&lt; 1,000 per frame</td>
            <td style="padding: 8px; border: 1px solid #ddd;">CPU overhead per object</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Triangles on screen</td>
            <td style="padding: 8px; border: 1px solid #ddd;">&lt; 1–2 million</td>
            <td style="padding: 8px; border: 1px solid #ddd;">GPU vertex load</td>
        </tr>
        <tr style="background: #f7f7f7;">
            <td style="padding: 8px; border: 1px solid #ddd;">Texture memory</td>
            <td style="padding: 8px; border: 1px solid #ddd;">&lt; 512 MB</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Avoid GPU memory stalls</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Initial download</td>
            <td style="padding: 8px; border: 1px solid #ddd;">&lt; 5 MB to first render</td>
            <td style="padding: 8px; border: 1px solid #ddd;">Fast first paint</td>
        </tr>
    </tbody>
</table>

<h2>Try It</h2>
<ol>
    <li>Take a sample <code>.glb</code> model and run <code>gltf-transform optimize</code>. Compare file size and triangle count before and after.</li>
    <li>Load the scene in a viewer, open the developer tools, and record the frame rate and draw calls.</li>
    <li>Add two LOD levels (high and low detail) and switch them by camera distance. Note the change in triangles drawn.</li>
    <li>Serve the tiles through a CDN-enabled host and confirm tiles are cached on a second visit.</li>
</ol>

<div style="border-left: 4px solid #FF9800; background: #fff8e6; padding: 10px 14px; margin: 20px 0; font-size: 13px;">
    <strong style="color: #E65100;">Common pitfall:</strong>
    Compressing the file is not the same as reducing what is drawn. A 2 MB model with 5 million triangles still stalls the GPU.
    Always pair <em>smaller data</em> with <em>less on screen</em> (LOD + tiling + culling).
</div>

<h2>Summary</h2>
<ul>
    <li>Performance is a design decision, not a final polish step.</li>
    <li>The workflow: <strong>Reduce → Tile → LOD → Cache</strong>.</li>
    <li>Measure before and after; optimise the largest bottleneck first.</li>
    <li>Combine small data with smart streaming to keep scenes fast at any scale.</li>
</ul>

<p style="font-size: 12px; color: #666;">
    Next up: applying these techniques in a real viewer and reviewing a before/after performance report.
</p>