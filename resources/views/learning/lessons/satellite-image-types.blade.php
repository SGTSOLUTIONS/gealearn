{{-- resources/views/learning/lessons/6-6-satellite-image-types.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Satellite images come in several types, depending on the sensor: panchromatic, multispectral, hyperspectral, radar, and thermal.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify the five main types of satellite imagery</li>
    <li>Match image types to specific mapping applications</li>
    <li>Understand pan-sharpening and radar capabilities</li>
</ul>

<h2>Visual Guide: Satellite Sensor Types</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Panchromatic</div>
        <div style="padding: 6px; background: #fff;">1 broad band, grey tones, finest detail</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Multispectral</div>
        <div style="padding: 6px; background: #fff;">4 to 13 bands, visible + infrared</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Hyperspectral</div>
        <div style="padding: 6px; background: #fff;">100s of narrow bands, full spectrum</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Radar (SAR)</div>
        <div style="padding: 6px; background: #fff;">Microwaves, sees through cloud, works at night</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Thermal</div>
        <div style="padding: 6px; background: #fff;">Heat energy, surface temperature</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Detail &rarr; Color &rarr; Spectrum &rarr; All-weather &rarr; Heat &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Landsat pan</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Sentinel-2 (Multispectral)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">EnMAP (Hyperspectral)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Sentinel-1 (Radar)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Landsat TIRS (Thermal)</div>
</div>

<p>
    The diagram shows the five main satellite sensor types. Use radar when clouds block optical imagery (e.g., monsoon floods). Pan-sharpening merges a sharp panchromatic band with colour bands to get a sharper colour image.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a panchromatic image?</strong> One broad band shown in grey tones, with the finest spatial detail.</li>
    <li><strong>What is a hyperspectral image?</strong> An image with hundreds of narrow bands that give a detailed spectrum for each pixel.</li>
    <li><strong>What is a thermal image?</strong> It records heat (thermal infrared), used for surface temperature and fires.</li