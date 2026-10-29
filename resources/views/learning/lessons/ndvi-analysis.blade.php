{{-- resources/views/learning/lessons/6-15-ndvi-analysis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    NDVI (Normalized Difference Vegetation Index) measures how green and healthy vegetation is, using red and near-infrared light.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the NDVI formula and what it measures</li>
    <li>Interpret NDVI values across different land covers</li>
    <li>Calculate NDVI in QGIS</li>
</ul>

<h2>Visual Guide: NDVI and Vegetation Health</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Healthy Leaf</div>
        <div style="padding: 6px; background: #fff;">Absorbs red light, strongly reflects NIR</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">NDVI Formula</div>
        <div style="padding: 6px; background: #fff;">(NIR - Red) / (NIR + Red)</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Value Scale (-1 to +1)</div>
        <div style="padding: 6px; background: #fff;">Water/cloud <0, Bare soil ~0–0.1, Dense veg 0.6–0.9</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Leaf Optics &rarr; Calculation &rarr; Interpretation &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Landsat 8/9: Band 5 (NIR), Band 4 (Red)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Sentinel-2: Band 8 (NIR), Band 4 (Red)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">QGIS Raster Calculator</div>
</div>

<p>
    The diagram shows why NDVI works: healthy leaves absorb red light and strongly reflect near-infrared. The index ranges from -1 to +1, where dense healthy vegetation is typically 0.6 to 0.9, and water or cloud is below 0. Always use surface-reflectance data for reliable NDVI values.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is NDVI?</strong> An index from -1 to +1 that shows vegetation vigour: NDVI = (NIR - Red) / (NIR + Red).</li>
    <li><strong>How do I read the values?</strong> Below 0 is water or cloud, about 0 to 0.1 bare soil, 0.2 to 0.4 sparse vegetation, and 0.6 to 0.9 dense healthy vegetation.</li>
    <li><strong>Which bands are used?</strong> Landsat 8/9: bands 5 (NIR) and 4 (red). Sentinel-2: bands 8 (NIR) and 4 (red).</li>
    <li><strong>Why does it work?</strong> Healthy leaves absorb red light and strongly reflect near infrared.</li>
    <li><strong>How do I calculate it in QGIS?</strong> Raster > Raster Calculator: ("nir@1" - "red@1") / ("nir@1" + "red@1").</li>
    <li><strong>What is NDVI used for?</strong> Crop monitoring, drought and forest health, and as an input for land cover and change mapping.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use surface-reflectance data for NDVI; raw digital numbers give unreliable values.</p>
</div>