{{-- resources/views/learning/lessons/6-13-land-use-land-cover-mapping.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Land use and land cover (LULC) mapping classifies the Earth's surface into categories such as forest, cropland, water, and built-up land.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Distinguish between land cover (physical) and land use (human)</li>
    <li>Know where to find ready-made LULC datasets</li>
    <li>Understand the workflow for creating a LULC map</li>
</ul>

<h2>Visual Guide: Land Cover vs. Land Use</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 45%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Land Cover</div>
        <div style="padding: 6px; background: #fff;">What physically covers the ground: trees, grass, water, concrete, bare soil</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 45%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Land Use</div>
        <div style="padding: 6px; background: #fff;">How people use the land: farming, housing, industry, recreation</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Example: Grass (cover) can be a park or pasture (use) &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ESA WorldCover (10m)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Dynamic World</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">CORINE</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">NLCD</div>
</div>

<p>
    The diagram shows the distinction between land cover and land use. Land cover is the physical material on the ground, while land use describes how people utilize that land. Ready-made datasets like ESA WorldCover and CORINE are useful for comparison, but creating your own map involves choosing a classification scheme, preprocessing imagery, collecting samples, classifying, and assessing accuracy.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Land cover or land use?</strong> Land cover is what physically covers the ground (grass, trees). Land use is how people use it (park, farm).</li>
    <li><strong>Which data are used?</strong> Multispectral imagery, ideally from several dates, plus indices and a DEM.</li>
    <li><strong>Are ready-made maps available?</strong> Yes: ESA WorldCover (10 m), Dynamic World, CORINE, and NLCD are useful for comparison.</li>
    <li><strong>What is a classification scheme?</strong> A fixed list of classes, such as Anderson levels, CORINE, or the ESA WorldCover legend.</li>
    <li><strong>What are the steps?</strong> Choose a scheme, preprocess, collect samples, classify, assess accuracy, and make the map.</li>
    <li><strong>How do I report results?</strong> A map with a legend, a table of area per class, and an accuracy statement.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use images from different seasons: crops and forests may look alike in one season but different in another.</p>
</div>