{{-- resources/views/learning/lessons/7-3-geostatistics.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Geostatistics describes how values of a continuous phenomenon change with distance, using the semivariogram.
    It is used for rainfall, soil, pollution, and other continuous data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the semivariogram</li>
    <li>Identify nugget, sill, and range</li>
    <li>Follow the geostatistics workflow</li>
</ul>

<h2>Visual Guide: Semivariogram</h2>
<div style="border: 1px solid #ccc; border-radius: 6px; padding: 15px; background: #fff; margin: 20px 0; text-align: center;">
    <div style="height: 120px; position: relative; border-left: 2px solid #282A35; border-bottom: 2px solid #282A35; margin: 0 20px;">
        <div style="position: absolute; top: -20px; left: -20px; font-size: 11px; color: #282A35;">semivariance</div>
        <div style="position: absolute; bottom: -20px; right: 0; font-size: 11px; color: #282A35;">distance between samples</div>
        
        <div style="position: absolute; top: 40px; left: 0; width: 100%; height: 1px; border-top: 1px dashed #999;">
            <span style="position: absolute; top: -15px; left: 0; font-size: 10px; color: #FF9800;">sill</span>
        </div>
        <div style="position: absolute; top: 40px; left: 60%; width: 2px; height: 80px; border-left: 1px dashed #999;">
            <span style="position: absolute; top: -15px; left: 5px; font-size: 10px; color: #04AA6D;">range</span>
        </div>
        <div style="position: absolute; top: 50px; left: 0; width: 2px; height: 50px; background: #d9534f;">
            <span style="position: absolute; top: 10px; left: 5px; font-size: 10px; color: #d9534f;">nugget</span>
        </div>
        
        <svg width="100%" height="100%" style="position: absolute; top: 0; left: 0;">
            <path d="M 0 90 Q 30 50, 60 40 T 100 40" fill="none" stroke="#2196F3" stroke-width="2"/>
        </svg>
        <div style="position: absolute; top: 60px; left: 20%; width: 6px; height: 6px; background: #FF9800; border-radius: 50%;"></div>
        <div style="position: absolute; top: 45px; left: 35%; width: 6px; height: 6px; background: #FF9800; border-radius: 50%;"></div>
        <div style="position: absolute; top: 38px; left: 55%; width: 6px; height: 6px; background: #FF9800; border-radius: 50%;"></div>
        <div style="position: absolute; top: 42px; left: 80%; width: 6px; height: 6px; background: #FF9800; border-radius: 50%;"></div>
    </div>
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">1 Explore the data</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">2 Fit a variogram</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">3 Krige (predict)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">4 Check the errors</div>
</div>

<p>
    The diagram shows a semivariogram plot with its key components: the nugget (variance at tiny distances), the sill (plateau where values are unrelated), and the range (distance where the plateau is reached). The workflow is to explore, fit, krige, and check.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is geostatistics?</strong> Statistics for continuous phenomena (rainfall, soil, pollution) measured at sample points.</li>
    <li><strong>What is a semivariogram?</strong> A plot showing how differences between sample values grow with distance.</li>
    <li><strong>What are nugget, sill and range?</strong> Nugget = variance at tiny distance (noise); sill = plateau where values are unrelated; range = distance where the plateau is reached.</li>
    <li><strong>Why fit a model curve?</strong> The fitted curve (spherical, exponential, Gaussian) supplies the weights that kriging uses.</li>
    <li><strong>What is the workflow?</strong> Explore the data, fit a variogram, krige, then check errors (cross-validation).</li>
    <li><strong>How many samples are needed?</strong> Enough, well-spread points. Very few points give an unreliable variogram.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Plot the variogram before kriging: it shows whether the data have spatial structure at all.</p>
</div>