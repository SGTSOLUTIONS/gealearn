{{-- resources/views/learning/lessons/5-15-raster-analysis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Raster analysis works on grids of cells. Tools differ in how many cells they use for each result cell.
    Understanding this difference is key to choosing the right tool.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand local, focal, zonal, and global operations</li>
    <li>Choose the right resampling method</li>
    <li>Ensure rasters align correctly</li>
</ul>

<h2>Visual Guide: Raster Analysis Operations</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Local</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #e0e0e0; height: 20px;"></div>
            <div style="background: #e0e0e0; height: 20px;"></div>
            <div style="background: #e0e0e0; height: 20px;"></div>
            <div style="background: #e0e0e0; height: 20px;"></div>
            <div style="background: #ffeb3b; height: 20px;"></div>
            <div style="background: #e0e0e0; height: 20px;"></div>
            <div style="background: #e0e0e0; height: 20px;"></div>
            <div style="background: #e0e0e0; height: 20px;"></div>
            <div style="background: #e0e0e0; height: 20px;"></div>
        </div>
        <div style="margin-top: 5px; color: #282A35; font-weight: bold;">each cell alone</div>
        <div style="color: #666; font-size: 10px;">reclassify, calculator</div>
    </div>
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Focal</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px; border: 2px solid #FF9800;">
            <div style="background: #ffe0b2; height: 20px;"></div>
            <div style="background: #ffe0b2; height: 20px;"></div>
            <div style="background: #ffe0b2; height: 20px;"></div>
            <div style="background: #ffe0b2; height: 20px;"></div>
            <div style="background: #ffeb3b; height: 20px;"></div>
            <div style="background: #ffe0b2; height: 20px;"></div>
            <div style="background: #e0e0e0; height: 20px;"></div>
            <div style="background: #e0e0e0; height: 20px;"></div>
            <div style="background: #e0e0e0; height: 20px;"></div>
        </div>
        <div style="margin-top: 5px; color: #282A35; font-weight: bold;">cell + neighbours</div>
        <div style="color: #666; font-size: 10px;">smoothing, slope</div>
    </div>
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Zonal</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #bbdefb; height: 20px;"></div>
            <div style="background: #bbdefb; height: 20px;"></div>
            <div style="background: #ffe0b2; height: 20px;"></div>
            <div style="background: #bbdefb; height: 20px;"></div>
            <div style="background: #bbdefb; height: 20px;"></div>
            <div style="background: #ffe0b2; height: 20px;"></div>
            <div style="background: #bbdefb; height: 20px;"></div>
            <div style="background: #bbdefb; height: 20px;"></div>
            <div style="background: #ffe0b2; height: 20px;"></div>
        </div>
        <div style="margin-top: 5px; color: #282A35; font-weight: bold;">cells inside a zone</div>
        <div style="color: #666; font-size: 10px;">mean per ward</div>
    </div>
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Global</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #0d47a1; height: 20px;"></div>
            <div style="background: #1976d2; height: 20px;"></div>
            <div style="background: #42a5f5; height: 20px;"></div>
            <div style="background: #1976d2; height: 20px;"></div>
            <div style="background: #42a5f5; height: 20px;"></div>
            <div style="background: #90caf9; height: 20px;"></div>
            <div style="background: #42a5f5; height: 20px;"></div>
            <div style="background: #90caf9; height: 20px;"></div>
            <div style="background: #bbdefb; height: 20px;"></div>
        </div>
        <div style="margin-top: 5px; color: #282A35; font-weight: bold;">whole raster</div>
        <div style="color: #666; font-size: 10px;">distance surfaces</div>
    </div>
</div>

<p>
    The diagram shows the four types of raster operations. Local operations work on one cell at a time. Focal operations use a neighbourhood of cells. Zonal operations summarize cells within defined zones. Global operations use the entire raster.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a local operation?</strong> Each cell on its own (reclassify, calculator).</li>
    <li><strong>What is a focal operation?</strong> A cell and its neighbours (smoothing, slope).</li>
    <li><strong>What is a zonal operation?</strong> Cells inside a zone summarised, e.g. mean elevation per ward.</li>
    <li><strong>What is a global operation?</strong> The whole raster at once, e.g. distance surfaces.</li>
    <li><strong>What should input rasters share?</strong> The same CRS, extent and cell size.</li>
    <li><strong>Which resampling method?</strong> Nearest neighbour for categories, bilinear for continuous values.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Resampling: nearest neighbour for categories, bilinear for continuous values.</p>
</div>