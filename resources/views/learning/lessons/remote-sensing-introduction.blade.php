{{-- resources/views/learning/lessons/6-1-remote-sensing-introduction.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Remote sensing collects information about the Earth's surface from a distance, using sensors on satellites, aircraft, or drones, without touching the ground.
    It is the foundation for all raster-based GIS analysis.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what remote sensing is and why it is useful</li>
    <li>Distinguish between passive and active sensors</li>
    <li>Connect remote sensing imagery to GIS workflows</li>
</ul>

<h2>Visual Guide: How Remote Sensing Works</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Sunlight</div>
        <div style="padding: 6px; background: #fff;">Energy from the sun reaches the surface</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Reflectance</div>
        <div style="padding: 6px; background: #fff;">Surface reflects energy differently by material</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Sensor</div>
        <div style="padding: 6px; background: #fff;">Satellite or drone records reflected energy</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Data</div>
        <div style="padding: 6px; background: #fff;">Sent to ground station as pixel values</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">5 GIS</div>
        <div style="padding: 6px; background: #fff;">Raster combined with vector layers</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Energy source &rarr; Surface interaction &rarr; Detection &rarr; Processing &rarr; Analysis &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Passive sensor (optical)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Active sensor (radar, LiDAR)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Satellite</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Aircraft</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Drone (UAV)</div>
</div>

<p>
    The diagram shows the remote sensing chain. Energy from the sun (or from the sensor itself) interacts with the surface, and the reflected or emitted energy is recorded by the sensor. The data is then transmitted to a ground station and stored as raster pixels for GIS analysis.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is remote sensing?</strong> Gathering information about the Earth from a distance with sensors that record reflected or emitted energy.</li>
    <li><strong>What are the main platforms?</strong> Satellites, aircraft, and drones (UAVs). Ground instruments are used for field checks.</li>
    <li><strong>Why is it useful?</strong> It covers large areas, repeats over time, and reaches places that are hard to visit.</li>
    <li><strong>Passive or active sensors?</strong> Passive sensors record natural energy such as sunlight (optical imagery). Active sensors send their own signal (radar, LiDAR).</li>
    <li><strong>What does a sensor record?</strong> Energy reflected or emitted by surfaces, stored as numbers in the pixels of an image.</li>
    <li><strong>How does it connect to GIS?</strong> Images are rasters, so they can be classified, measured, and combined with vector layers.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Always ask what energy the sensor measures and at what resolution; that decides what you can map.</p>
</div>