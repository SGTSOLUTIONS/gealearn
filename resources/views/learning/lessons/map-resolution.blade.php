{{-- resources/views/learning/lessons/map-resolution.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Resolution describes how much detail a dataset can show.
    For raster data, it is the pixel size on the ground. For printed or exported images, it is also measured in dpi (dots per inch).
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand spatial resolution for raster data</li>
    <li>Learn the four types of resolution (spatial, spectral, temporal, radiometric)</li>
    <li>Recognise the trade-offs between resolution and file size</li>
</ul>

<div class="note">
    <p style="margin:0"><strong>Note:</strong> Zooming into a low-resolution raster shows blocky pixels. Zooming in does not add detail.</p>
</div>

<h2>Visualizing Resolution</h2>

<!-- Exact Replica of the provided image -->
<div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 40px 30px; margin-bottom: 24px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
    
    <div style="display: flex; align-items: flex-end; gap: 30px; margin-bottom: 20px;">
        
        <!-- LEFT SIDE: High Resolution (8x8 Grid) -->
        <div style="text-align: center;">
            <div style="font-size: 16px; font-weight: 700; color: #2e7d32; margin-bottom: 15px;">High resolution (1 m pixels)</div>
            
            <!-- Grid Container -->
            <div style="display: grid; grid-template-columns: repeat(8, 1fr); grid-template-rows: repeat(8, 1fr); gap: 1px; background: #94a3b8; border: 1px solid #94a3b8; width: 250px; height: 250px; position: relative;">
                
                <!-- Background (Light Green/Beige) -->
                <div style="grid-column: 1 / -1; grid-row: 1 / -1; background: #f0f4e8; position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;"></div>
                
                <!-- The dashed red line -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom right, transparent calc(50% - 1px), #e53935 calc(50% - 1px), #e53935 calc(50% + 1px), transparent calc(50% + 1px)); z-index: 2; pointer-events: none;"></div>

                <!-- The Blue Cells (Matching exact positions) -->
                <!-- Row 5 (from top) -->
                <div style="background: #30689c; z-index: 1; grid-column: 2; grid-row: 5;"></div>
                <!-- Row 4 -->
                <div style="background: #30689c; z-index: 1; grid-column: 3; grid-row: 4;"></div>
                <!-- Row 3 -->
                <div style="background: #30689c; z-index: 1; grid-column: 4; grid-row: 3;"></div>
                <!-- Row 2 -->
                <div style="background: #30689c; z-index: 1; grid-column: 5; grid-row: 2;"></div>
                <!-- Row 1 -->
                <div style="background: #30689c; z-index: 1; grid-column: 6; grid-row: 1;"></div>
                <!-- Row 1 (Edge) -->
                <div style="background: #30689c; z-index: 1; grid-column: 7; grid-row: 1;"></div>
                <div style="background: #30689c; z-index: 1; grid-column: 8; grid-row: 1;"></div>

                <!-- Grid Lines overlay to make cells visible -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: grid; grid-template-columns: repeat(8, 1fr); grid-template-rows: repeat(8, 1fr); gap: 1px; background: transparent; z-index: 3; pointer-events: none;">
                    <!-- Generate 64 empty divs with borders -->
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                </div>
            </div>
            
            <div style="font-size: 14px; color: #64748b; margin-top: 15px;">small cells = fine detail</div>
        </div>

        <!-- ARROW -->
        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 8px; margin-bottom: 40px;">
            <div style="font-size: 13px; color: #475569;">pixel size</div>
            <div style="width: 50px; height: 2px; background: #1e293b; position: relative;">
                <div style="position: absolute; right: -5px; top: -5px; width: 0; height: 0; border-top: 6px solid transparent; border-bottom: 6px solid transparent; border-left: 8px solid #1e293b;"></div>
            </div>
            <div style="font-size: 13px; color: #475569;">grows</div>
        </div>

        <!-- RIGHT SIDE: Low Resolution (4x4 Grid) -->
        <div style="text-align: center;">
            <div style="font-size: 16px; font-weight: 700; color: #d97706; margin-bottom: 15px;">Low resolution (30 m pixels)</div>
            
            <!-- Grid Container -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); grid-template-rows: repeat(4, 1fr); gap: 1px; background: #94a3b8; border: 1px solid #94a3b8; width: 250px; height: 250px; position: relative;">
                
                <!-- Background (Light Green/Beige) -->
                <div style="grid-column: 1 / -1; grid-row: 1 / -1; background: #f0f4e8; position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;"></div>
                
                <!-- The dashed red line -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom right, transparent calc(50% - 1px), #e53935 calc(50% - 1px), #e53935 calc(50% + 1px), transparent calc(50% + 1px)); z-index: 2; pointer-events: none;"></div>

                <!-- The Blue Cells (Matching exact positions) -->
                <!-- Row 1 -->
                <div style="background: #30689c; z-index: 1; grid-column: 4; grid-row: 1;"></div>
                <!-- Row 2 -->
                <div style="background: #30689c; z-index: 1; grid-column: 2; grid-row: 2;"></div>
                <div style="background: #30689c; z-index: 1; grid-column: 3; grid-row: 2;"></div>
                <!-- Row 3 -->
                <div style="background: #30689c; z-index: 1; grid-column: 1; grid-row: 3;"></div>
                <div style="background: #30689c; z-index: 1; grid-column: 2; grid-row: 3;"></div>
                <div style="background: #30689c; z-index: 1; grid-column: 3; grid-row: 3;"></div>

                <!-- Grid Lines overlay to make cells visible -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: grid; grid-template-columns: repeat(4, 1fr); grid-template-rows: repeat(4, 1fr); gap: 1px; background: transparent; z-index: 3; pointer-events: none;">
                    <!-- Generate 16 empty divs with borders -->
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                    <div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div><div style="border: 0.5px solid #7f9db9;"></div>
                </div>
            </div>
            
            <div style="font-size: 14px; color: #64748b; margin-top: 15px;">large cells = coarse detail</div>
        </div>
    </div>

    <!-- Legend -->
    <div style="width: 100%; display: flex; justify-content: flex-end; align-items: center; gap: 8px; font-size: 12px; color: #64748b; padding-right: 20px;">
        <div style="width: 30px; border-top: 2px dashed #e53935;"></div>
        <span>real feature</span>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li><strong>Spatial resolution</strong> is the size of one pixel on the ground (e.g., 10 m for some Sentinel-2 bands).</li>
    <li>Smaller pixels give more detail but also larger files.</li>
    <li><strong>Spectral resolution</strong> is how many bands a sensor records.</li>
    <li><strong>Temporal resolution</strong> is how often an area is imaged.</li>
    <li><strong>Radiometric resolution</strong> is how many brightness levels a pixel can store (e.g., 8-bit = 256 levels).</li>
    <li>Print resolution is measured in dpi: 150 dpi suits screens and 300 dpi suits print.</li>
    <li>Vector data has no pixels, so its detail depends on how finely it was digitised.</li>
</ul>

<h2>Resolution Types</h2>
<ul>
    <li><strong>Spatial:</strong> Pixel size on the ground (e.g., 30 m for Landsat).</li>
    <li><strong>Spectral:</strong> Number of bands (e.g., RGB = 3, multispectral = many).</li>
    <li><strong>Temporal:</strong> Revisit time (e.g., every 5 days).</li>
    <li><strong>Radiometric:</strong> Brightness levels (e.g., 8-bit = 256 levels).</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Pick the coarsest resolution that still shows the features you need. Finer data costs more storage and processing time.</p>
</div>