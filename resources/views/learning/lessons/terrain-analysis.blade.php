{{-- resources/views/learning/lessons/5-17-terrain-analysis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Terrain analysis derives new information from a DEM: steepness, direction, shading and roughness.
    It is essential for environmental modelling, hydrology, and site suitability.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify the four main terrain derivatives</li>
    <li>Understand what slope, aspect, and hillshade show</li>
    <li>Use a projected CRS for terrain analysis</li>
</ul>

<h2>Visual Guide: Terrain Derivatives</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 100%; text-align: center; margin-bottom: 15px;">
        <div style="background: #c8e6c9; width: 80px; height: 60px; margin: 0 auto; border: 2px solid #04AA6D; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 12px;">DEM</div>
        <div style="width: 2px; height: 15px; background: #999; margin: 0 auto;"></div>
    </div>
    <div style="display: flex; justify-content: space-between; width: 100%; gap: 10px;">
        <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
            <div style="height: 50px; background: linear-gradient(135deg, #e0e0e0 0%, #424242 100%);"></div>
            <strong style="color: #282A35;">Slope</strong><br><span style="color: #666; font-size: 11px;">steepness</span>
        </div>
        <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
            <div style="height: 50px; background: conic-gradient(#ff9800 0deg 90deg, #4caf50 90deg 180deg, #2196f3 180deg 270deg, #9c27b0 270deg 360deg);"></div>
            <strong style="color: #282A35;">Aspect</strong><br><span style="color: #666; font-size: 11px;">facing direction</span>
        </div>
        <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
            <div style="height: 50px; background: radial-gradient(circle at 30% 30%, #fff 0%, #757575 100%);"></div>
            <strong style="color: #282A35;">Hillshade</strong><br><span style="color: #666; font-size: 11px;">lit relief</span>
        </div>
        <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
            <div style="height: 50px; border: 1px solid #ccc; position: relative;">
                <div style="position: absolute; top: 10px; left: 10px; width: 20px; height: 20px; border: 1px solid #282A35; border-radius: 50%;"></div>
                <div style="position: absolute; top: 20px; left: 20px; width: 30px; height: 20px; border: 1px solid #282A35; border-radius: 50%;"></div>
            </div>
            <strong style="color: #282A35;">Contours</strong><br><span style="color: #666; font-size: 11px;">equal height</span>
        </div>
    </div>
</div>

<p>
    The diagram shows how four different layers are derived from a single DEM: Slope (steepness), Aspect (facing direction), Hillshade (lit relief), and Contours (lines of equal height).
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is terrain analysis?</strong> Deriving steepness, direction, shading and roughness from a DEM.</li>
    <li><strong>What are Slope, Aspect and Hillshade?</strong> Steepness, facing direction, and lit relief for display.</li>
    <li><strong>What do Roughness, TRI and TPI show?</strong> How rugged the surface is.</li>
    <li><strong>What are contours?</strong> Lines of equal height.</li>
    <li><strong>Where are the tools?</strong> Raster &gt; Analysis and Raster &gt; Extraction &gt; Contour.</li>
    <li><strong>Which CRS should the DEM use?</strong> A projected CRS (metres), so horizontal and vertical units match.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Place a semi-transparent coloured DEM over a hillshade for a classic terrain map.</p>
</div>