{{-- resources/views/learning/lessons/6-11-supervised-classification.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    In supervised classification you give the software labelled training samples, and it learns to label all the other pixels.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the supervised classification workflow</li>
    <li>Know how to collect and separate training and validation samples</li>
    <li>Measure accuracy using a confusion matrix</li>
</ul>

<h2>Visual Guide: Supervised Classification Steps</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Samples</div>
        <div style="padding: 6px; background: #fff;">Draw polygons for each class</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Train</div>
        <div style="padding: 6px; background: #fff;">Algorithm learns class signatures</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Classify</div>
        <div style="padding: 6px; background: #fff;">Every pixel gets a label</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Assess</div>
        <div style="padding: 6px; background: #fff;">Confusion matrix, overall accuracy</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">5 Map</div>
        <div style="padding: 6px; background: #fff;">Final thematic map</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Label &rarr; Learn &rarr; Apply &rarr; Verify &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Maximum Likelihood</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Random Forest</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Support Vector Machine</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Keep validation samples separate</div>
</div>

<p>
    The diagram shows the supervised workflow. You provide training samples for each class, the algorithm learns the spectral signatures, and then classifies the rest of the image. Accuracy is measured using separate validation points in a confusion matrix.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is supervised classification?</strong> The analyst provides training samples for each class and the algorithm classifies the rest.</li>
    <li><strong>Which algorithms are common?</strong> Maximum Likelihood, Minimum Distance, Random Forest, and Support Vector Machine.</li>
    <li><strong>How do I measure accuracy?</strong> Compare with separate validation points in a confusion matrix: overall accuracy and kappa.</li>
    <li><strong>What are training samples?</strong> Polygons or points of known land cover drawn on the image for each class.</li>
    <li><strong>How many samples are needed?</strong> Enough to cover the variety of each class, spread across the area rather than in one patch.</li>
    <li><strong>What problems are common?</strong> Mixed pixels and classes with similar signatures, such as bare soil and built-up areas.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep training and validation samples separate; testing on the training samples gives inflated accuracy.</p>
</div>