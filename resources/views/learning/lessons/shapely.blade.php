{{-- resources/views/learning/lessons/8-14-shapely.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Shapely creates and analyses individual geometries: points, lines and polygons.
    It is the geometric engine behind GeoPandas.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create geometric objects</li>
    <li>Perform geometric operations</li>
    <li>Test spatial relationships</li>
</ul>

<h2>Visual Guide: Shapely Intersection</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">shapely.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            from shapely.geometry import box<br>
            a = box(0, 0, 4, 3)<br>
            b = box(2, 1, 6, 5)<br>
            c = a.intersection(b)<br>
            print(c.area) &nbsp; # 4.0<br>
            a.contains(b) &nbsp;&nbsp; # False
        </div>
    </div>
    <div style="width: 45%; display: flex; justify-content: center; align-items: center;">
        <div style="position: relative; width: 120px; height: 90px;">
            <div style="position: absolute; top: 10px; left: 0; width: 80px; height: 60px; border: 2px solid #04AA6D; background: rgba(4,170,109,0.1);"></div>
            <div style="position: absolute; top: 20px; left: 30px; width: 80px; height: 60px; border: 2px solid #FF9800; background: rgba(255,152,0,0.1);"></div>
            <div style="position: absolute; top: 30px; left: 30px; width: 40px; height: 30px; background: rgba(33,150,243,0.3); border: 1px solid #2196F3;"></div>
            <div style="position: absolute; top: 5px; left: 5px; font-size: 10px; color: #04AA6D; font-weight: bold;">a</div>
            <div style="position: absolute; bottom: 5px; right: 5px; font-size: 10px; color: #FF9800; font-weight: bold;">b</div>
            <div style="position: absolute; top: 35px; left: 45px; font-size: 10px; color: #2196F3; font-weight: bold;">c</div>
        </div>
    </div>
</div>
<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">buffer()</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">union()</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">difference()</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">centroid()</div>
</div>

<p>
    The diagram shows two boxes intersecting, with the overlapping area highlighted in blue.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is Shapely?</strong> A library to create and analyse geometries (Point, LineString, Polygon). No CRS, no attributes.</li>
    <li><strong>How do I create a point?</strong> <code>Point(78.0, 20.5)</code>.</li>
    <li><strong>Which operations are available?</strong> buffer, intersection, union, difference, centroid.</li>
    <li><strong>Which relationship tests exist?</strong> contains, within, intersects, touches.</li>
    <li><strong>How do I measure?</strong> .area, .length and .distance(other) in the units of the coordinates.</li>
    <li><strong>Why use a projected CRS?</strong> Shapely works on a flat plane, so metres need projected coordinates.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Shapely knows nothing about CRS: you must keep track of units.</p>
</div>