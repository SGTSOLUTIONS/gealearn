{{-- resources/views/learning/lessons/10-3-web-mapping-fundamentals.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Web maps are built from small square image tiles or from vector data that the browser draws.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand tiles and zoom levels</li>
    <li>Know the Web Mercator CRS</li>
    <li>Understand raster vs vector tiles</li>
</ul>

<h2>Visual Guide: Building Blocks of a Web Map</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 12px; border-radius: 6px; font-family: monospace; font-size: 10px; line-height: 1.5; text-align: left; overflow-x: auto;">
        <span style="color: #569cd6;">tiles.txt</span><br><br>
        <span style="color: #6a9955;">// a tile is one small square image</span><br>
        <span style="color: #6a9955;">// z = zoom, x = column, y = row</span><br>
        /{z}/{x}/{y}.png<br><br>
        <span style="color: #6a9955;">// zoom 0: one tile for the world</span><br>
        <span style="color: #6a9955;">// each zoom level: 4x more tiles</span><br>
        <span style="color: #6a9955;">// Web Mercator = EPSG:3857</span>
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70;">Building blocks of a web map</div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">Tiles</strong><br><span style="color: #666;">small images, cached for speed</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">Zoom levels</strong><br><span style="color: #666;">0 (world) to about 20</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px;">
                <strong style="color: #005a70;">Web Mercator</strong><br><span style="color: #666;">EPSG:3857, the web standard</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px;">
                <strong style="color: #005a70;">Raster / vector</strong><br><span style="color: #666;">images or drawn shapes</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 8px;">most web maps = tiles + vector overlay</div>
    </div>
</div>

<p>
    The diagram shows the building blocks of a web map. A tile is one small square image (often 256 px) that covers part of the map at one zoom level. Web maps use Web Mercator (EPSG:3857); data usually arrives in EPSG:4326. Always show the attribution text of every tile provider.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a tile?</strong> A small square image (often 256 px) that covers part of the map at one zoom level.</li>
    <li><strong>What do z, x, and y mean?</strong> Zoom level, tile column, and tile row.</li>
    <li><strong>Which CRS do web maps use?</strong> Web Mercator, EPSG:3857; data usually arrives in EPSG:4326.</li>
    <li><strong>Raster or vector tiles?</strong> Raster tiles are images; vector tiles carry shapes that the browser styles.</li>
    <li><strong>What is a base map?</strong> The background map, such as OpenStreetMap, under your own layers.</li>
    <li><strong>Do I need to credit the data?</strong> Yes. Show the attribution text of every tile provider.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Follow each tile provider's usage policy; heavy use of free servers can get you blocked.</p>
</div>