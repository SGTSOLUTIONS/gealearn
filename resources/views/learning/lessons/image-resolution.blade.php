{{-- resources/views/learning/lessons/6-5-image-resolution.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Resolution describes how much detail an image holds. Remote sensing uses four kinds: spatial, spectral, temporal, and radiometric.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the four types of image resolution</li>
    <li>Explain the trade-offs between spatial and temporal resolution</li>
    <li>Choose the right imagery resolution for a mapping task</li>
</ul>

<h2>Visual Guide: The Four Types of Resolution</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Spatial</div>
        <div style="padding: 6px; background: #fff;">Size of one pixel on the ground (e.g., 10m)</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Spectral</div>
        <div style="padding: 6px; background: #fff;">Number and width of bands</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Temporal</div>
        <div style="padding: 6px; background: #fff;">How often a place is imaged (revisit time)</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Radiometric</div>
        <div style="padding: 6px; background: #fff;">Brightness levels per pixel (e.g., 8-bit = 256 levels)</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Detail &rarr; Color &rarr; Frequency &rarr; Depth &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Sentinel-2: 10m spatial</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Sentinel-2: 5 day temporal</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">12-bit radiometric = 4,096 levels</div>
</div>

<p>
    The diagram shows the four resolution types. High spatial detail usually means a smaller area and fewer revisits. Radiometric resolution determines the number of brightness levels per pixel. A feature must be several pixels wide to be identified reliably, so choose a pixel size well below the feature size.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is spatial resolution?</strong> The ground size of one pixel, for example 10m for the Sentinel-2 visible bands.</li>
    <li><strong>What is temporal resolution?</strong> How often the same place is imaged (revisit time), for example about 5 days for Sentinel-2.</li>
    <li><strong>Can all four be high?</strong> Rarely. High spatial detail usually means a smaller area and fewer revisits.</li>
    <li><strong>What is spectral resolution?</strong> The number and width of the bands a sensor records.</li>
    <li><strong>What is radiometric resolution?</strong> The number of brightness levels per pixel: 8-bit gives 256 levels and 12-bit gives 4,096.</li>
    <li><strong>How do I choose?</strong> Match the resolution to the smallest feature and the fastest change you need to see.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> A feature must be several pixels wide to be identified reliably, so choose a pixel size well below the feature size.</p>
</div>