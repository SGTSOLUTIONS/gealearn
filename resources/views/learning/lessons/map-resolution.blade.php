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

<!-- Improved Replica of the provided image -->
<div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 40px 30px; margin-bottom: 24px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
    
    <div style="display: flex; align-items: flex-end; gap: 30px; margin-bottom: 20px; flex-wrap: wrap; justify-content: center;">
        
        <!-- LEFT SIDE: High Resolution (8x8 Grid) -->
        <div style="text-align: center;">
            <div style="font-size: 16px; font-weight: 700; color: #2e7d32; margin-bottom: 15px;">High resolution (1 m pixels)</div>
            
            <div style="position: relative; width: 250px; height: 250px; border: 1.5px solid #94a3b8; background-color: #f0f4e8; background-image: linear-gradient(#7f9db9 1px, transparent 1px), linear-gradient(90deg, #7f9db9 1px, transparent 1px); background-size: 31.25px 31.25px; background-position: -1px -1px;">
                
                <!-- The Real Feature (Red Dashed Line) via SVG -->
                <svg width="100%" height="100%" style="position: absolute; top: 0; left: 0; z-index: 2;">
                    <line x1="0" y1="250" x2="250" y2="0" stroke="#e53935" stroke-width="3" stroke-dasharray="6,4" />
                </svg>

                <!-- Blue Pixels (Representing the raster cells intersecting the line) -->
                <!-- Using absolute positioning to align with the 31.25px grid cells -->
                <div style="position: absolute; width: 31.25px; height: 31.25px; background: #30689c; left: 31.25px; top: 125px; z-index: 1;"></div>
                <div style="position: absolute; width: 31.25px; height: 31.25px; background: #30689c; left: 62.5px; top: 93.75px; z-index: 1;"></div>
                <div style="position: absolute; width: 31.25px; height: 31.25px; background: #30689c; left: 93.75px; top: 62.5px; z-index: 1;"></div>
                <div style="position: absolute; width: 31.25px; height: 31.25px; background: #30689c; left: 125px; top: 31.25px; z-index: 1;"></div>
                <div style="position: absolute; width: 31.25px; height: 31.25px; background: #30689c; left: 156.25px; top: 0px; z-index: 1;"></div>
                <div style="position: absolute; width: 31.25px; height: 31.25px; background: #30689c; left: 187.5px; top: 0px; z-index: 1;"></div>
                <div style="position: absolute; width: 31.25px; height: 31.25px; background: #30689c; left: 218.75px; top: 0px; z-index: 1;"></div>
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
            
            <div style="position: relative; width: 250px; height: 250px; border: 1.5px solid #94a3b8; background-color: #f0f4e8; background-image: linear-gradient(#7f9db9 1px, transparent 1px), linear-gradient(90deg, #7f9db9 1px, transparent 1px); background-size: 62.5px 62.5px; background-position: -1px -1px;">
                
                <!-- The Real Feature (Red Dashed Line) via SVG -->
                <svg width="100%" height="100%" style="position: absolute; top: 0; left: 0; z-index: 2;">
                    <line x1="0" y1="250" x2="250" y2="0" stroke="#e53935" stroke-width="3" stroke-dasharray="6,4" />
                </svg>

                <!-- Blue Pixels (Representing the raster cells intersecting the line) -->
                <!-- Using absolute positioning to align with the 62.5px grid cells -->
                <div style="position: absolute; width: 62.5px; height: 62.5px; background: #30689c; left: 187.5px; top: 0px; z-index: 1;"></div>
                <div style="position: absolute; width: 62.5px; height: 62.5px; background: #30689c; left: 62.5px; top: 62.5px; z-index: 1;"></div>
                <div style="position: absolute; width: 62.5px; height: 62.5px; background: #30689c; left: 125px; top: 62.5px; z-index: 1;"></div>
                <div style="position: absolute; width: 62.5px; height: 62.5px; background: #30689c; left: 0px; top: 125px; z-index: 1;"></div>
                <div style="position: absolute; width: 62.5px; height: 62.5px; background: #30689c; left: 62.5px; top: 125px; z-index: 1;"></div>
                <div style="position: absolute; width: 62.5px; height: 62.5px; background: #30689c; left: 125px; top: 125px; z-index: 1;"></div>
            </div>
            
            <div style="font-size: 14px; color: #64748b; margin-top: 15px;">large cells = coarse detail</div>
        </div>
    </div>

    <!-- Legend -->
    <div style="width: 100%; display: flex; justify-content: flex-end; align-items: center; gap: 8px; font-size: 12px; color: #64748b; padding-right: 20px;">
        <div style="width: 30px; border-top: 3px dashed #e53935;"></div>
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