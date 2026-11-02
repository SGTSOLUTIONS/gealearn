{{-- resources/views/learning/lessons/12-3-coordinates.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A 3D coordinate has three values: east or longitude, north or latitude, and height.
    The height must always be tied to a clear reference surface.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand 3D coordinate values</li>
    <li>Distinguish ellipsoidal and orthometric height</li>
    <li>Recognise the geoid gap</li>
</ul>

<h2>Visual Guide: 3D Coordinates and Height References</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">3D coordinate</strong>
        <div style="height: 100px; position: relative; margin-top: 10px; border-left: 2px solid #d9534f; border-bottom: 2px solid #2196F3;">
            <div style="position: absolute; top: 0; left: -10px; font-size: 10px; color: #d9534f; font-weight: bold;">Z (height)</div>
            <div style="position: absolute; bottom: -15px; right: 0; font-size: 10px; color: #2196F3; font-weight: bold;">X (east)</div>
            <div style="position: absolute; bottom: 20px; left: 20px; width: 40px; height: 2px; background: #04AA6D; transform: rotate(-45deg); transform-origin: left center;"></div>
            <div style="position: absolute; bottom: 20px; left: 20px; font-size: 10px; color: #04AA6D; font-weight: bold;">Y (north)</div>
            <div style="position: absolute; top: 30px; right: 20px; width: 12px; height: 12px; background: #FF9800; border-radius: 50%; border: 2px solid #fff;"></div>
            <div style="position: absolute; top: 25px; right: 40px; font-size: 10px;">P (lon, lat, h)</div>
        </div>
    </div>
    <div style="width: 50%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff; text-align: left;">
        <strong style="color: #282A35; font-size: 12px;">Height reference</strong>
        <div style="margin-top: 10px; font-size: 11px; line-height: 1.5;">
            <div><strong>h</strong> = ellipsoidal height (WGS 84)</div>
            <div><strong>H</strong> = height above sea level (geoid)</div>
            <div><strong>N</strong> = geoid gap</div>
            <div style="margin-top: 5px; font-weight: bold; color: #d9534f;">h = H + N</div>
        </div>
        <div style="margin-top: 10px; background: #f9f9f9; padding: 5px; border-radius: 4px; font-size: 11px;">
            <div>EPSG:4979 (WGS 84 + ellipsoidal height)</div>
            <div>EPSG:4978 (Earth-centred X, Y, Z)</div>
        </div>
    </div>
</div>

<p>
    The diagram shows the three values of a 3D coordinate and the relationship between ellipsoidal height, orthometric height, and the geoid gap.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What are the three values?</strong> (x, y, z), or (longitude, latitude, height).</li>
    <li><strong>What is ellipsoidal height (h)?</strong> Height measured from the WGS 84 ellipsoid, which GPS uses.</li>
    <li><strong>What is orthometric height (H)?</strong> Height measured from mean sea level (the geoid), which maps and levelling use.</li>
    <li><strong>What is the geoid gap (N)?</strong> The difference between the two, so h = H + N. Mixing them without conversion places objects in the air or underground.</li>
    <li><strong>What are common 3D systems?</strong> EPSG:4979 (WGS 84 with ellipsoidal height) and EPSG:4978 (Earth-centred X, Y, Z). Always record the vertical datum and unit.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Check the height reference of every dataset first. Differences of many metres usually come from mixed datums.</p>
</div>