{{-- resources/views/learning/lessons/5-23-geocoding.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Geocoding turns an address into coordinates; reverse geocoding turns coordinates into the nearest address or place name.
    It is the bridge between text-based records and spatial data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the difference between geocoding and reverse geocoding</li>
    <li>Prepare addresses for geocoding</li>
    <li>Verify results using a match score</li>
</ul>

<h2>Visual Guide: Geocoding Process</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 35%; border: 2px solid #282A35; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Address</strong>
        <div style="margin-top: 8px; font-size: 11px;">12 Main Street<br>Green Town<br>Postcode 123456</div>
        <div style="color: #666; margin-top: 8px; font-size: 10px;">text to coordinates</div>
    </div>
    <div style="width: 30%; display: flex; flex-direction: column; gap: 5px; text-align: center; font-size: 11px;">
        <div style="color: #FF9800; font-weight: bold;">Geocoding &rarr;</div>
        <div style="color: #2196F3; font-weight: bold;">&larr; Reverse geocoding</div>
    </div>
    <div style="width: 35%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #e8f5e9; position: relative;">
        <strong style="color: #282A35;">Coordinates</strong>
        <div style="margin-top: 8px; font-size: 11px;">78.10, 20.40</div>
        <div style="position: absolute; top: 25px; left: 50%; transform: translateX(-50%); width: 20px; height: 20px; background: #d9534f; border-radius: 50% 50% 0 50%; transform: translateX(-50%) rotate(45deg);"></div>
        <div style="color: #666; margin-top: 8px; font-size: 10px;">coordinates to text</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #f9f9f9;">
        <strong>Geocoder</strong><br>Nominatim, Google, Esri
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #f9f9f9;">
        <strong>Match score</strong><br>how sure the result is
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #f9f9f9;">
        <strong>Always check</strong><br>a sample on the map
    </div>
</div>

<p>
    The diagram shows the two-way relationship between text addresses and geographic coordinates. Geocoding converts an address into a point, while reverse geocoding converts a point into the nearest known address.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Geocoding or reverse geocoding?</strong> Geocoding turns an address into coordinates; reverse geocoding turns coordinates into the nearest address or place name.</li>
    <li><strong>What does QGIS need for it?</strong> A plugin (e.g. MMQGIS) or an online geocoder such as Nominatim, Google or Esri.</li>
    <li><strong>What is a match score?</strong> It shows how sure the result is; review low scores by hand.</li>
    <li><strong>How should addresses be prepared?</strong> Consistent spelling and separate street, city and postcode columns.</li>
    <li><strong>Are there limits?</strong> Free services have usage limits; read the terms before bulk geocoding.</li>
    <li><strong>How do I verify results?</strong> Save a point layer and spot-check positions on a basemap.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Geocode a small sample first to test match quality before processing the whole table.</p>
</div>