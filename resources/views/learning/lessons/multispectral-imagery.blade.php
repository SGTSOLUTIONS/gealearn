{{-- resources/views/learning/lessons/6-7-multispectral-imagery.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Multispectral imagery records several wide bands across visible and infrared light. Different surfaces reflect each band differently, which is how they are told apart.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how multispectral bands separate surface types</li>
    <li>Create true-colour and false-colour composites</li>
    <li>Interpret spectral signatures and band combinations in QGIS</li>
</ul>

<h2>Visual Guide: Spectral Signatures and Composites</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Spectral Signature</div>
        <div style="padding: 6px; background: #fff;">Water is dark in NIR; vegetation is bright in NIR</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">True Colour</div>
        <div style="padding: 6px; background: #fff;">Red, Green, Blue shown as R, G, B (Landsat 8: 4-3-2)</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">False Colour</div>
        <div style="padding: 6px; background: #fff;">NIR, Red, Green shown as R, G, B (Landsat 8: 5-4-3)</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Wavelengths &rarr; Natural View &rarr; Vegetation View &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Sentinel-2 True Colour: 4-3-2</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Sentinel-2 False Colour: 8-4-3</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">QGIS: Layer Properties > Symbology > Multiband color</div>
</div>

<p>
    The diagram shows how different surfaces reflect bands differently. Healthy vegetation looks bright red in a false-colour composite because it reflects strongly in the near-infrared. Water is very dark in NIR. Learn the band numbers of your sensor to make composites correctly.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a band?</strong> A layer that records one range of wavelengths.</li>
    <li><strong>What bands does Landsat 8/9 have?</strong> Blue, green, red, near infrared (NIR), and two shortwave infrared (SWIR) bands, plus panchromatic, cirrus, and thermal bands.</li>
    <li><strong>What is a true-colour composite?</strong> Red, green, and blue bands shown as red, green, and blue. For Landsat 8 this is bands 4-3-2.</li>
    <li><strong>What is a false-colour composite?</strong> NIR, red, and green shown as red, green, and blue (Landsat 8: 5-4-3). Healthy vegetation looks bright red.</li>
    <li><strong>What is a spectral signature?</strong> The pattern of reflectance across bands for a surface type. Water, for example, is very dark in NIR.</li>
    <li><strong>How do I make a composite in QGIS?</strong> Open Layer Properties, choose Symbology, set the type to Multiband color, and pick a band for each channel.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Learn the band numbers of your sensor: Sentinel-2 uses 4-3-2 for true colour and 8-4-3 for false colour.</p>
</div>