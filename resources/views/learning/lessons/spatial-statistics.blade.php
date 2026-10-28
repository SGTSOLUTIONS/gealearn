{{-- resources/views/learning/lessons/7-2-spatial-statistics.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Spatial statistics test whether a pattern in your data is real or could have happened by chance.
    They take location into account to see if clustering, dispersion, or randomness is statistically significant.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify clustered, random, and dispersed patterns</li>
    <li>Understand the nearest neighbour ratio</li>
    <li>Use Moran's I and hot spot analysis</li>
</ul>

<h2>Visual Guide: Spatial Patterns</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 32%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #d9534f;">Clustered</strong>
        <div style="height: 60px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 20px; left: 20px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 25px; left: 30px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 15px; left: 35px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 40px; left: 60px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 45px; left: 70px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
        </div>
        <div style="color: #d9534f; font-weight: bold; margin-top: 5px;">NN ratio below 1</div>
        <div style="color: #666; font-size: 10px;">points group together</div>
    </div>
    <div style="width: 32%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #FF9800;">Random</strong>
        <div style="height: 60px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 15px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 40px; left: 40px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 20px; left: 65px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 50px; left: 20px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 30px; left: 50px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
        </div>
        <div style="color: #FF9800; font-weight: bold; margin-top: 5px;">NN ratio about 1</div>
        <div style="color: #666; font-size: 10px;">no pattern</div>
    </div>
    <div style="width: 32%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D;">Dispersed</strong>
        <div style="height: 60px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 15px; left: 10px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 15px; left: 40px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 15px; left: 70px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 45px; left: 10px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 45px; left: 40px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 45px; left: 70px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
        </div>
        <div style="color: #04AA6D; font-weight: bold; margin-top: 5px;">NN ratio above 1</div>
        <div style="color: #666; font-size: 10px;">evenly spaced</div>
    </div>
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9; width: 30%;">
        <strong>Nearest neighbour</strong><br>pattern of points
    </div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9; width: 30%;">
        <strong>Moran's I</strong><br>do similar values cluster?
    </div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9; width: 30%;">
        <strong>Hot spot (Gi*)</strong><br>where are significant clusters?
    </div>
</div>

<p>
    The diagram shows the three patterns of spatial distribution: clustered (NN ratio below 1), random (NN ratio about 1), and dispersed (NN ratio above 1).
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is spatial statistics?</strong> Statistics that take location into account to test whether a pattern is real or just random.</li>
    <li><strong>What is spatial autocorrelation?</strong> Nearby features tend to have similar values. Moran's I measures it: positive = similar values cluster, near 0 = random, negative = dispersed.</li>
    <li><strong>What is the nearest neighbour ratio?</strong> Observed mean distance divided by expected distance: below 1 clustered, about 1 random, above 1 dispersed.</li>
    <li><strong>What is hot spot analysis?</strong> It finds statistically significant clusters of high (hot) or low (cold) values, e.g. Getis-Ord Gi*.</li>
    <li><strong>Heat map or hot spot analysis?</strong> A heat map only shows concentration; hot spot analysis also tests significance.</li>
    <li><strong>Which tools can I use?</strong> QGIS: Nearest Neighbour Analysis and Heatmap. Moran's I and Gi* via plugins or Python (PySAL). ArcGIS Pro has a Spatial Statistics toolbox.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> A pretty cluster on a map is not proof — test it with a statistic.</p>
</div>