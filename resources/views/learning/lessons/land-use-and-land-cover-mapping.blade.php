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
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4