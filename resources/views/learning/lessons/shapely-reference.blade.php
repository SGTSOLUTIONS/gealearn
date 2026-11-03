{{-- resources/views/learning/lessons/15-6-shapely.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Shapely creates and tests geometries such as points, lines and polygons. It does flat (planar) geometry and does not know about coordinate systems,
    and it is the geometry engine behind GeoPandas.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create points, lines and polygons</li>
    <li>Buffer, intersect and measure geometries</li>
    <li>Know why Shapely has no CRS</li>
</ul>

<h2>Visual Guide: Shapely Operations</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 31%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Create</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            p = Point(5, 5)<br><br>
            poly = Polygon([(0,0),(10,0),(10,10),(0,10)])
        </div>
    </div>
    <div style="width: 31%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Test</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            poly.contains(p)      # True<br><br>
            zone.intersects(poly) # True
        </div>
    </div>
    <div style="width: 31%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Measure</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            poly.area   # 100.0<br><br>
            poly.length # 40.0<br><br>
            p.distance(Point(8, 9)) # 5.0
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Coordinates:</strong> x, y (longitude, latitude); units are whatever the data uses<br>
    <strong>Rule of thumb:</strong> Shapely has no CRS: if you need metres, reproject with PyProj or GeoPandas first.
</div>

<p>
    The diagram groups Shapely into three jobs: create geometry, test relations between geometries, and measure them.
</p>

<h2>Key Points (Q&amp;A)</h2>
<ul>
    <li><strong>What is Shapely?</strong> The geometry engine behind GeoPandas; it creates and tests points, lines and polygons.</li>
    <li><strong>What are the coordinates?</strong> x, y (longitude, latitude); units are whatever the data uses.</li>
    <li><strong>Can I buffer in degrees?</strong> Buffers on lat/long degrees are not metres; project the data first.</li>
    <li><strong>How do I check a shape?</strong> Use <code>.is_valid</code> to test a shape and <code>make_valid()</code> to repair it.</li>
    <li><strong>How do I convert to text?</strong> Use <code>.wkt</code> or <code>shapely.geometry.mapping()</code> to get GeoJSON-like output.</li>
    <li><strong>Where do I import from?</strong> <code>shapely.geometry</code>; newer versions also offer vectorised functions on arrays.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Shapely has no CRS: if you need metres, reproject with PyProj or GeoPandas first.</p>
</div>