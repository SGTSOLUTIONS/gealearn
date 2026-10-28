{{-- resources/views/learning/lessons/6-8-hyperspectral-imagery.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Hyperspectral imagery records hundreds of narrow, continuous bands, giving a detailed spectrum for every pixel.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the difference between multispectral and hyperspectral data</li>
    <li>Recognize the data cube structure of hyperspectral imagery</li>
    <li>Know applications and challenges of hyperspectral analysis</li>
</ul>

<h2>Visual Guide: Hyperspectral Data Cube</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Data Cube (x, y, &lambda;)</div>
        <div style="padding: 6px; background: #fff;">Image data in three dimensions: x, y, and wavelength</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Continuous Spectrum</div>
        <div style="padding: 6px; background: #fff;">100s of narrow bands with no gaps (blue lines)</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Multispectral (for contrast)</div>
        <div style="padding: 6px; background: #fff;">Few wide bands with gaps between them (orange boxes)</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Structure &rarr; Detail &rarr; Comparison &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">AVIRIS (airborne)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">EnMAP / PRISMA (satellite)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">PCA for band reduction</div>
</div>

<p>
    The diagram shows a hyperspectral data cube. Unlike multispectral imagery which has a few wide bands, hyperspectral covers the spectrum continuously. This allows for detailed material identification but comes with challenges: very large files, high cost, and complex processing because many neighbouring bands are highly correlated.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is hyperspectral imagery?</strong> Imagery with hundreds of narrow, adjacent bands, so each pixel has a full spectrum.</li>
    <li><strong>What is a data cube?</strong> The image data in three dimensions: x, y, and wavelength.</li>
    <li><strong>Which sensors are used?</strong> AVIRIS (airborne), EnMAP and PRISMA (satellite), and sensors mounted on drones.</li>
    <li><strong>How is it different from multispectral?</strong> Multispectral has a few wide bands with gaps between them. Hyperspectral covers the spectrum continuously.</li>
    <li><strong>What is it used for?</strong> Mineral mapping, plant stress, water quality, and identifying materials.</li>
    <li><strong>What are the challenges?</strong> Very large files, high cost, and complex processing, because many neighbouring bands are highly correlated.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Reduce the number of bands first (for example with PCA) before classifying; neighbouring bands carry much the same information.</p>
</div>