{{-- resources/views/learning/lessons/5-5-clip.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Clip cuts the input layer to the shape of a mask layer, like a cookie cutter.
    It keeps only the part of the input that falls inside the mask.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how Clip works</li>
    <li>Identify the input and overlay layers</li>
    <li>Clip raster data</li>
</ul>

<h2>Visual Guide: Clip Operation</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Input layer + clip layer (mask)</strong>
        <div style="height: 100px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 0; left: 0; width: 50%; height: 100%; background: #c8e6c9; border-right: 1px solid #ccc;"></div>
            <div style="position: absolute; top: 0; left: 50%; width: 50%; height: 100%; background: #ffe0b2; border-left: 1px solid #ccc;"></div>
            <div style="position: absolute; top: 20px; left: 20px; width: 60%; height: 60%; border: 3px dashed #d9534f;"></div>
        </div>
    </div>
    <div style="width: 15%; text-align: center; font-size: 14px; color: #FF9800; font-weight: bold;">Clip<br><span style="font-size: 20px;">&rarr;</span></div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Output: input cut to the mask</strong>
        <div style="height: 100px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 20px; left: 20px; width: 60%; height: 60%; background: #c8e6c9; border-right: 1px solid #ccc;"></div>
            <div style="position: absolute; top: 20px; left: 50%; width: 30%; height: 60%; background: #ffe0b2; border-left: 1px solid #ccc;"></div>
        </div>
        <div style="font-size: 11px; color: #d9534f; margin-top: 5px;">only the part inside the mask is kept</div>
    </div>
</div>

<p>
    The diagram shows how a clip operation works. The red dashed line represents the mask layer. The output keeps only the features that fall inside the mask.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does Clip do?</strong> It cuts the input layer to the shape of a mask layer, like a cookie cutter.</li>
    <li><strong>Input layer or overlay layer?</strong> The input is what you cut; the overlay is the mask.</li>
    <li><strong>Whose attributes are kept?</strong> Only the input's attributes; the mask's are discarded.</li>
    <li><strong>Are features selected or cut?</strong> Features crossing the mask edge are physically cut.</li>
    <li><strong>Is there a raster version?</strong> Yes: Raster &gt; Extraction &gt; Clip Raster by Mask Layer.</li>
    <li><strong>Why clip early?</strong> Smaller data makes every later tool run faster.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Clip data to your study area early — every later tool runs faster.</p>
</div>