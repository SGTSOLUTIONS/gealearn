{{-- resources/views/learning/lessons/6-10-image-classification.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Image classification assigns every pixel to a class, such as water, forest, or urban, and produces a thematic map.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the goal of image classification</li>
    <li>Compare pixel-based and object-based approaches</li>
    <li>Know how to check classification accuracy</li>
</ul>

<h2>Visual Guide: From Pixels to Thematic Map</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Satellite Image</div>
        <div style="padding: 6px; background: #fff;">Pixel values (continuous data)</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Classification</div>
        <div style="padding: 6px; background: #fff;">Sort pixels by spectral values</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Thematic Map</div>
        <div style="padding: 6px; background: #fff;">Water, Forest, Cropland, Urban, Bare soil</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Continuous &rarr; Categorical &rarr; Map &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Pixel-based</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Object-based (OBIA)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Confusion Matrix</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Semi-Automatic Classification Plugin (QGIS)</div>
</div>

<p>
    The diagram shows the transition from a raw satellite image to a thematic map. The classification process groups pixels with similar spectral values into land cover classes. Accuracy assessment with independent reference points and a confusion matrix is essential to verify the result.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is image classification?</strong> Sorting pixels into classes by their spectral values to make a thematic map.</li>
    <li><strong>Pixel-based or object-based?</strong> Pixel-based labels each pixel. Object-based first groups pixels into segments, then classifies the segments.</li>
    <li><strong>How do I check the result?</strong> Accuracy assessment with independent reference points and a confusion matrix.</li>
    <li><strong>What are the main approaches?</strong> Supervised, unsupervised, and object-based image analysis (OBIA).</li>
    <li><strong>What input data is used?</strong> Bands, indices such as NDVI, texture, and elevation.</li>
    <li><strong>Which tools can I use?</strong> QGIS (for example the Semi-Automatic Classification Plugin), Orfeo Toolbox, and SAGA.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Define a simple class list before you start; too many similar classes lowers accuracy.</p>
</div>