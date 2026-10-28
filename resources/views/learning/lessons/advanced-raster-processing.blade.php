{{-- resources/views/learning/lessons/7-6-advanced-raster.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Advanced raster processing prepares rasters for analysis: merging, reprojecting, clipping, reclassifying and converting.
    These steps are often chained in Model Builder to repeat them on new data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the five raster processing steps</li>
    <li>Learn the difference between Mosaic and Virtual Raster</li>
    <li>Convert between raster and vector</li>
</ul>

<h2>Visual Guide: Raster Processing Pipeline</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Mosaic</div>
        <div style="padding: 6px; background: #fff;">Merge / Build<br><span style="font-size: 9px; color: #666;">Virtual Raster</span></div>
    </div>
    <div style="font-size: 16px; color: #FF9800; align-self: center;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Reproject</div>
        <div style="padding: 6px; background: #fff;">Warp<br><span style="font-size: 9px; color: #666;">(reproject)</span></div>
    </div>
    <div style="font-size: 16px; color: #FF9800; align-self: center;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Clip</div>
        <div style="padding: 6px; background: #fff;">Clip by<br><span style="font-size: 9px; color: #666;">mask layer</span></div>
    </div>
    <div style="font-size: 16px; color: #FF9800; align-self: center;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Reclassify</div>
        <div style="padding: 6px; background: #fff;">Reclassify<br><span style="font-size: 9px; color: #666;">by table</span></div>
    </div>
    <div style="font-size: 16px; color: #FF9800; align-self: center;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">5 To vector</div>
        <div style="padding: 6px; background: #fff;">Polygonize<br><span style="font-size: 9px; color: #666;">(raster to vector)</span></div>
    </div>
</div>

<p>
    The diagram shows the five-step raster processing pipeline. Chain these steps in Model Builder (7.18) to repeat them on new data.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a mosaic?</strong> Several neighbouring rasters merged into one (Raster &gt; Miscellaneous &gt; Merge).</li>
    <li><strong>What is a virtual raster (VRT)?</strong> A small file that points to many rasters, so they act as one without copying data.</li>
    <li><strong>What does Warp do?</strong> It reprojects and resamples a raster (Raster &gt; Projections &gt; Warp).</li>
    <li><strong>How do I cut a raster to my area?</strong> Raster &gt; Extraction &gt; Clip Raster by Mask Layer.</li>
    <li><strong>What does Reclassify by table do?</strong> It turns value ranges into classes, e.g. slope into 1, 2, 3.</li>
    <li><strong>How do I convert raster to vector?</strong> Polygonize (Raster &gt; Conversion) turns cells of equal value into polygons.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Do the heavy steps once and save the result, instead of repeating them each session.</p>
</div>