{{-- resources/views/learning/lessons/5-26-recap.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The 25 topics move from asking questions of vector data, through measuring and raster work, to placing data accurately on the Earth.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Review the complete intermediate workflow</li>
    <li>Check your understanding with the practice checklist</li>
</ul>

<h2>Visual Guide: The Intermediate Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; text-align: center; margin: 30px 0; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Query</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            5.1 Spatial analysis<br>5.2 Attribute queries<br>5.3 Spatial queries
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Overlay</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            5.4 Buffer<br>5.5 Clip<br>5.6 Intersection<br>5.7 Union<br>5.8 Dissolve<br>5.9 Merge / split<br>5.10 Spatial join<br>5.11 Overlay
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Measure</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            5.12 Proximity<br>5.13 Network<br>5.14 Area / distance
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Raster</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            5.15 Raster analysis<br>5.16 Raster calc.<br>5.17 Terrain<br>5.18 Slope / aspect<br>5.19 Contours<br>5.20 Elevation
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">5 Locate</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            5.21 Georeferencing<br>5.22 Transformation<br>5.23 Geocoding<br>5.24 GPS data<br>5.25 Field data
        </div>
    </div>
</div>
<div style="text-align: center; font-weight: bold; font-size: 14px; color: #04AA6D; margin-bottom: 20px;">
    Query &gt; Overlay &gt; Measure &gt; Raster &gt; Locate
</div>

<p>
    The diagram summarises the entire module as a five-stage pipeline. It moves from querying data, to overlaying and measuring it, analysing rasters, and finally locating field data accurately on the Earth.
</p>

<h2>Key Points (Practice Checklist)</h2>
<ul>
    <li>Select wards with population over 5000 using an expression.</li>
    <li>Select schools within 500 m of a river (buffer, then select by location).</li>
    <li>Clip, intersect and union two polygon layers and compare the results.</li>
    <li>Dissolve land-use polygons by class and calculate each area in hectares.</li>
    <li>Run a spatial join to add ward names to a point layer.</li>
    <li>From a DEM make a slope map, an aspect map and 20 m contours.</li>
    <li>Georeference a scanned map with at least 4 GCPs and check the RMSE.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Next:</strong> Module 6 &mdash; Remote Sensing (satellite imagery, classification, change detection, NDVI, LiDAR).</p>
</div>