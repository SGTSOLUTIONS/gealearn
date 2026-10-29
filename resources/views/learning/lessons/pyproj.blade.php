{{-- resources/views/learning/lessons/8-17-pyproj.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PyProj converts coordinates between coordinate systems and measures on the ellipsoid.
    It is the Python interface to the PROJ library.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Transform coordinates between CRSs</li>
    <li>Use the always_xy flag</li>
    <li>Measure true distances</li>
</ul>

<h2>Visual Guide: Coordinate Transformation</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 25%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #e3f2fd;">
        <strong style="color: #282A35;">EPSG:4326</strong>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">lon, lat (degrees)</div>
    </div>
    <div style="width: 10%; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; padding: 10px; background: #282A35; color: #fff;">
        <strong>Transformer</strong>
        <div style="font-size: 10px; margin-top: 5px;">always_xy=True keeps lon, lat order</div>
    </div>
    <div style="width: 10%; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 25%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #e8f5e9;">
        <strong style="color: #282A35;">EPSG:32644</strong>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">x, y (metres)</div>
    </div>
</div>

<div style="border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff; margin-bottom: 20px;">
    <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">pyproj.py</div>
    <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
        from pyproj import Transformer<br>
        t = Transformer.from_crs(4326, 32644, always_xy=True)<br>
        x, y = t.transform(78.5, 20.5)<br>
        print(x, y) &nbsp; # metres
    </div>
</div>

<p>
    The diagram shows how PyProj transforms coordinates from a geographic CRS to a projected CRS, using the Transformer.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is PyProj?</strong> The Python interface to PROJ for coordinate transformations.</li>
    <li><strong>How do I transform coordinates?</strong> <code>Transformer.from_crs(4326, 32644, always_xy=True)</code> then <code>t.transform(x, y)</code>.</li>
    <li><strong>What does always_xy do?</strong> It keeps the order longitude, latitude (x, y).</li>
    <li><strong>How do I describe a CRS?</strong> <code>CRS.from_epsg(4326)</code>.</li>
    <li><strong>How do I get true distances?</strong> <code>Geod(ellps='WGS84').inv(...)</code> returns metres on the ellipsoid.</li>
    <li><strong>Who uses PyProj?</strong> GeoPandas and Rasterio call it for CRS work.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Build the Transformer once and reuse it for many points.</p>
</div>