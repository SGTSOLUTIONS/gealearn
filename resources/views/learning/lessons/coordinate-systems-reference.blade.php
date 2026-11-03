{{-- resources/views/learning/lessons/15-18-coordinate-systems.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Coordinate reference systems (CRS) are identified by EPSG codes. Pick the right one for the job and always check it before combining layers.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Recognise the main EPSG codes</li>
    <li>Choose geographic vs projected CRS</li>
    <li>Reproject data with the right tool</li>
</ul>

<h2>Visual Guide: Common EPSG Codes</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 31%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">4326 — WGS 84</div>
        <div style="padding: 8px; background: #fff;">GPS data, GeoJSON, data exchange</div>
    </div>
    <div style="width: 31%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">3857 — Pseudo-Mercator</div>
        <div style="padding: 8px; background: #fff;">Web map tiles (OSM, Google); not for measuring</div>
    </div>
    <div style="width: 31%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">32644 — UTM 44N</div>
        <div style="padding: 8px; background: #fff;">Metre-based work, about 78°E to 84°E (e.g. Chennai)</div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Others:</strong> 32643 UTM 43N (72°E–78°E) · 4269 NAD83 (North America) · 27700 British National Grid<br>
    <strong>Rule of thumb:</strong> choose the UTM zone (or national grid) that covers your study area before measuring.
</div>

<p>
    The diagram highlights three codes you will meet most: 4326 for exchange, 3857 for web display, and 32644 for metre-based work around Chennai.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the difference between geographic and projected CRS?</strong> Geographic CRS (e.g. 4326) uses degrees; projected CRS (e.g. UTM) uses metres.</li>
    <li><strong>When do I measure distance and area?</strong> Measure distance and area in a projected CRS that suits your area.</li>
    <li><strong>When do I use 4326 vs 3857?</strong> Use EPSG:4326 for storage and exchange, and EPSG:3857 only for web display.</li>
    <li><strong>How do I reproject?</strong> Reproject with QGIS Export, <code>ogr2ogr -t_srs</code>, GeoPandas <code>to_crs</code> or <code>ST_Transform</code>.</li>
    <li><strong>Where can I look up a code?</strong> Search any code at epsg.io to see its area of use and parameters.</li>
    <li><strong>What is the most common error?</strong> Mixed CRS in one analysis is the most common cause of layers not lining up.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Choose the UTM zone (or national grid) that covers your study area before measuring.</p>
</div>