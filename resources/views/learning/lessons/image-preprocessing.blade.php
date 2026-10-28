{{-- resources/views/learning/lessons/6-9-image-preprocessing.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Preprocessing corrects raw imagery so that pixel values and positions are reliable before analysis.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the steps of image preprocessing</li>
    <li>Know the difference between radiometric, atmospheric, and geometric corrections</li>
    <li>Identify when Level-2 products save time</li>
</ul>

<h2>Visual Guide: Preprocessing Pipeline</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 14%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Raw</div>
        <div style="padding: 6px; background: #fff;">Digital numbers (DN)</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 14%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Radiometric</div>
        <div style="padding: 6px; background: #fff;">DN to reflectance</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 14%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Atmospheric</div>
        <div style="padding: 6px; background: #fff;">Remove haze, scattering</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 14%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Geometric</div>
        <div style="padding: 6px; background: #fff;">Align, orthorectify</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 14%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">5 Cloud Mask</div>
        <div style="padding: 6px; background: #fff;">Hide clouds and shadows</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 14%; border: 2px solid #e91e63; border-radius: 6px; overflow: hidden;">
        <div style="background: #e91e63; color: #fff; padding: 6px; font-weight: bold;">6 Mosaic</div>
        <div style="padding: 6px; background: #fff;">Join scenes, clip to area</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Raw Data &rarr; Value Correction &rarr; Position Correction &rarr; Final Product &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Sen2Cor</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">DOS (Dark Object Subtraction)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Level-2 products (L2A)</div>
</div>

<p>
    The diagram shows the six steps of preprocessing. Raw images contain sensor errors, haze, position shifts, and clouds that lead to wrong results. Note that Level-2 products already include steps 2 to 4. Downloading surface-reflectance products when available saves time and removes most atmospheric effects.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Why preprocess?</strong> Raw images contain sensor errors, haze, position shifts, and clouds that lead to wrong results.</li>
    <li><strong>What is atmospheric correction?</strong> Removing haze and scattering effects to get surface reflectance (for example with Sen2Cor or DOS).</li>
    <li><strong>What are cloud masking and mosaicking?</strong> Cloud masking hides clouds and their shadows. A mosaic joins several scenes into one image.</li>
    <li><strong>What is radiometric correction?</strong> Converting raw digital numbers (DN) to radiance or reflectance.</li>
    <li><strong>What is geometric correction?</strong> Fixing position errors using control points and a DEM (orthorectification).</li>
    <li><strong>Do I always need to do it?</strong> Not always. Level-2 products such as Sentinel-2 L2A and Landsat Collection 2 Level 2 are already corrected.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Download surface-reflectance (Level-2) products when they are available; it saves time and removes most atmospheric effects.</p>
</div>