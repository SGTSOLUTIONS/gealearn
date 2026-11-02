{{-- resources/views/learning/lessons/11-7-crs.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoServer stores a CRS for each layer and reprojects on the fly to whatever CRS a client requests.
    Correct CRS configuration is critical for map alignment.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand native vs declared CRS</li>
    <li>Use on-the-fly reprojection</li>
    <li>Avoid axis-order errors</li>
</ul>

<h2>Visual Guide: CRS Handling</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 20%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Native CRS</div>
        <div style="padding: 8px; background: #fff;">as stored: 32644</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Declared CRS</div>
        <div style="padding: 8px; background: #fff;">reported to clients</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Request CRS</div>
        <div style="padding: 8px; background: #fff;">e.g. EPSG:3857</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Reproject</div>
        <div style="padding: 8px; background: #fff;">on the fly</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">axis_order.txt</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            # WMS 1.1.x (lon, lat order)<br>
            srs=EPSG:4326<br>
            bbox=minx,miny,maxx,maxy<br><br>
            # WMS 1.3.0 (lat, lon order)<br>
            crs=EPSG:4326<br>
            bbox=miny,minx,maxy,maxx
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Common codes</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>EPSG:4326 WGS 84 (lon/lat)</li>
            <li>EPSG:3857 Web Mercator</li>
            <li>EPSG:32644 UTM zone 44N</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows how GeoServer handles CRS from native storage to client request, and the critical axis-order difference between WMS versions.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Why does CRS matter?</strong> It controls where data appears and whether layers line up.</li>
    <li><strong>What is on-the-fly reprojection?</strong> GeoServer converts layers to the CRS a client asks for.</li>
    <li><strong>What does the declared SRS do?</strong> It is the CRS GeoServer reports for the layer.</li>
    <li><strong>What are the SRS handling options?</strong> Force declared, reproject native to declared, or keep native.</li>
    <li><strong>What if the CRS is unknown?</strong> Set it from an EPSG code and use "Force declared" to fix the label.</li>
    <li><strong>Which CRS do web maps use?</strong> EPSG:3857 for the map view; EPSG:4326 for lon/lat data.</li>
    <li><strong>What is the axis-order trap?</strong> WMS 1.3.0 with EPSG:4326 expects lat, lon; WMS 1.1.x expects lon, lat.</li>
    <li><strong>Where do I look up codes?</strong> Demos &gt; SRS List in the admin page.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> If a layer appears in the wrong place, suspect the CRS or the axis order first.</p>
</div>