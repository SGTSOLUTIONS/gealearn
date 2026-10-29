{{-- resources/views/learning/lessons/6-14-change-detection.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Change detection compares images of the same place from different dates to find what has changed.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the main methods for detecting change</li>
    <li>Identify factors that can be mistaken for real change</li>
    <li>Know the requirements for accurate change analysis</li>
</ul>

<h2>Visual Guide: Change Detection Methods</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Image Differencing</div>
        <div style="padding: 6px; background: #fff;">Subtract pixel values between dates</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Post-Classification</div>
        <div style="padding: 6px; background: #fff;">Classify each date, then compare maps</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Index Differencing</div>
        <div style="padding: 6px; background: #fff;">Compare NDVI or other indices over time</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Change Matrix</div>
        <div style="padding: 6px; background: #fff;">Report from-to changes and area</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Pixel Math &rarr; Map Comparison &rarr; Index Trend &rarr; Reporting &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Co-registration is critical</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Match seasons and sun angle</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Same atmospheric correction</div>
</div>

<p>
    The diagram shows the main change detection methods. Post-classification comparison classifies each date separately and then compares the maps. Image differencing subtracts pixel values. Clouds, shadows, seasonal growth, and misaligned images can be mistaken for real change, so check alignment first.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is change detection?</strong> Comparing two or more dates to find and measure changes.</li>
    <li><strong>What is post-classification comparison?</strong> Classify each date separately, then compare the maps to see from-to changes such as forest to built-up.</li>
    <li><strong>What can be mistaken for change?</strong> Clouds, shadows, seasonal growth, and misaligned images.</li>
    <li><strong>What are the main methods?</strong> Image differencing, post-classification comparison, and index differencing (for example NDVI).</li>
    <li><strong>What must match between dates?</strong> The CRS, accurate co-registration, similar season and sun angle, and the same atmospheric correction.</li>
    <li><strong>How do I report it?</strong> A change map plus a change matrix with the area of each from-to class.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> A co-registration error of even one pixel creates false change along edges; check alignment first.</p>
</div>