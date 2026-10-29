{{-- resources/views/learning/lessons/11-12-wmts.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    WMTS serves small pre-cut map tiles from a fixed grid, which makes busy web maps fast.
    It is the standard for background layers in web mapping.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand tile grids and zoom levels</li>
    <li>Build a GetTile request</li>
    <li>Know when to use WMTS vs WMS</li>
</ul>

<h2>Visual Guide: WMTS Tile Flow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Zoom level</div>
        <div style="padding: 8px; background: #fff;">tilematrix</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Tile grid</div>
        <div style="padding: 8px; background: #fff;">row and column</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Cache</div>
        <div style="padding: 8px; background: #fff;">stored tile</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Browser</div>
        <div style="padding: 8px; background: #fff;">assembles map</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">gettile.txt</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            http://localhost:8080/geoserver/gwc/service/wmts<br>
            ?service=WMTS&version=1.0.0<br>
            &request=GetTile<br>
            &layer=city:wards<br>
            &tilematrixset=EPSG:900913<br>
            &tilematrix=EPSG:900913:12<br>
            &tilerow=1800&tilecol=2900<br>
            &format=image/png
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Key ideas</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Fixed zoom levels and grid</li>
            <li>Tiles are cached</li>
            <li>GetCapabilities lists gridsets</li>
            <li>Endpoint: /gwc/service/wmts</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the WMTS tile flow and the key concepts behind tile-based map serving.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is WMTS?</strong> Web Map Tile Service: serves pre-cut map tiles from a fixed grid.</li>
    <li><strong>What is a tile matrix set?</strong> A grid definition: zoom levels, tile size and origin.</li>
    <li><strong>What does GetTile need?</strong> layer, tilematrixset, tilematrix, tilerow, tilecol and format.</li>
    <li><strong>Why is it fast?</strong> Tiles are cached, so repeat requests need no new drawing.</li>
    <li><strong>Which grids come by default?</strong> EPSG:4326 and EPSG:900913 (web Mercator).</li>
    <li><strong>Where is the endpoint?</strong> <code>/geoserver/gwc/service/wmts</code>.</li>
    <li><strong>WMS or WMTS?</strong> WMTS for busy public maps; WMS for custom extents, sizes and styles.</li>
    <li><strong>Is a tile cache always fresh?</strong> No. Truncate or reseed it after data or style changes.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use WMTS for background layers and WMS when you need a custom view.</p>
</div>