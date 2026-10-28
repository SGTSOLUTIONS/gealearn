{{-- resources/views/learning/lessons/6-3-aerial-photography.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Aerial photography takes photographs of the ground from an aircraft.
    Overlapping photos can be used for mapping, interpretation, and 3D measurement.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand vertical and oblique aerial photography</li>
    <li>Explain why photos overlap and what stereo pairs are</li>
    <li>Know what an orthophoto is and why it matters</li>
</ul>

<h2>Visual Guide: Aerial Photography Geometry</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Flight Line</div>
        <div style="padding: 6px; background: #fff;">Aircraft flies a straight path over the area</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Vertical Photo</div>
        <div style="padding: 6px; background: #fff;">Camera looks straight down, good for mapping</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Oblique Photo</div>
        <div style="padding: 6px; background: #fff;">Camera tilted, shows building sides</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Overlap</div>
        <div style="padding: 6px; background: #fff;">~60% forward, ~30% side for full coverage</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Stereo Pair</div>
        <div style="padding: 6px; background: #fff;">Two overlapping photos enable 3D measurement</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Capture &rarr; Orientation &rarr; Coverage &rarr; 3D &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Panchromatic (B&W)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Natural colour</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Colour infrared</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Orthophoto</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Photo scale = focal length / flying height</div>
</div>

<p>
    The diagram shows an aircraft flying a line and taking overlapping vertical photos. About 60% forward overlap and 30% side overlap gives complete coverage and stereo pairs for 3D. An orthophoto is corrected for tilt and terrain, so it has a uniform scale and can be used like a map.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is aerial photography?</strong> Photographs taken from an aircraft, usually looking straight down.</li>
    <li><strong>Vertical or oblique?</strong> Vertical photos look straight down and suit mapping. Oblique photos are tilted and show the sides of buildings.</li>
    <li><strong>Why do photos overlap?</strong> About 60% forward and 30% side overlap gives complete coverage and stereo pairs for 3D.</li>
    <li><strong>What is the photo scale?</strong> Focal length divided by flying height above ground. A lower flight gives a larger scale.</li>
    <li><strong>What is an orthophoto?</strong> A photo corrected for tilt and terrain, so it has a uniform scale and can be used like a map.</li>
    <li><strong>What film or sensor types exist?</strong> Panchromatic (black and white), natural colour, and colour infrared. Most cameras are digital today.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Photos are not maps until they are orthorectified: distances measured on raw photos are unreliable.</p>
</div>