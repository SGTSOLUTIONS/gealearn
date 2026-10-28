{{-- resources/views/learning/lessons/6-12-unsupervised-classification.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    In unsupervised classification the software groups pixels with similar values into clusters, and the analyst then names the clusters.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how unsupervised classification works</li>
    <li>Know when to use it and what parameters to set</li>
    <li>Interpret and refine the resulting clusters</li>
</ul>

<h2>Visual Guide: Unsupervised Clustering</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Unlabelled Pixels</div>
        <div style="padding: 6px; background: #fff;">Raw spectral data with no class labels</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Algorithm (K-means)</div>
        <div style="padding: 6px; background: #fff;">Groups similar pixels into clusters (X = centre)</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Analyst Names Clusters</div>
        <div style="padding: 6px; background: #fff;">Cluster 1 = water? Cluster 2 = forest?</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; No Samples &rarr; Grouping &rarr; Interpretation &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">K-means</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ISODATA</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Set clusters (e.g., 15–20 for 6 classes)</div>
</div>

<p>
    The diagram shows how the algorithm finds clusters of similar pixels without any training samples. After clustering, the analyst compares the clusters with the image or reference data, names them, and merges those that share a class.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is unsupervised classification?</strong> The algorithm finds clusters of similar pixels without any training samples.</li>
    <li><strong>What must I set?</strong> The number of clusters, the number of iterations, and a convergence threshold.</li>
    <li><strong>When is it useful?</strong> For a quick first look, or when you have no field knowledge of the area.</li>
    <li><strong>Which algorithms are used?</strong> K-means and ISODATA.</li>
    <li><strong>What happens after clustering?</strong> You compare clusters with the image or reference data, name them, and merge those that share a class.</li>
    <li><strong>What is a downside?</strong> Clusters may not match real classes: one class can split into several, or two can merge.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Start with more clusters than classes (for example 15 to 20 for 6 classes), then merge them after checking.</p>
</div>