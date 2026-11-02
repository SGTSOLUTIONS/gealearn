{{-- resources/views/learning/lessons/12-4-formats.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    3D data comes in several formats, each built for a different job: single models, city and building models, point clouds and web streaming.
    Choosing the right format is key to a smooth 3D workflow.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify the main 3D data formats</li>
    <li>Match formats to their purposes</li>
    <li>Understand the rule of thumb for web delivery</li>
</ul>

<h2>Visual Guide: 3D Data Formats</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 23%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Models</div>
        <div style="padding: 8px; background: #fff;">
            <strong>glTF / GLB</strong><br>web standard<br><br>
            <strong>OBJ, FBX</strong><br>design exchange
        </div>
    </div>
    <div style="width: 23%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">City and BIM</div>
        <div style="padding: 8px; background: #fff;">
            <strong>CityGML</strong><br>city models, LODs<br><br>
            <strong>IFC</strong><br>building design (BIM)
        </div>
    </div>
    <div style="width: 23%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Point clouds</div>
        <div style="padding: 8px; background: #fff;">
            <strong>LAS / LAZ</strong><br>LiDAR, photogrammetry<br><br>
            <strong>E57</strong><br>scanner data
        </div>
    </div>
    <div style="width: 23%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Streaming</div>
        <div style="padding: 8px; background: #fff;">
            <strong>3D Tiles</strong><br>tiled, web streaming<br><br>
            <strong>I3S</strong><br>Esri scene layers
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Terrain:</strong> DEM rasters (GeoTIFF) or quantized-mesh tiles for streaming<br>
    <strong>Rule of thumb:</strong> author in glTF or CityGML, then convert to 3D Tiles for the web.
</div>

<p>
    The diagram shows the four main categories of 3D data formats and their typical uses.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What are the model formats?</strong> glTF and GLB are the modern web standard. OBJ and FBX are widely used by design software.</li>
    <li><strong>What are CityGML and IFC?</strong> CityGML stores city objects with levels of detail. IFC comes from BIM and holds rooms, walls and equipment.</li>
    <li><strong>What are the point cloud formats?</strong> LAS and LAZ store LiDAR and photogrammetry points. E57 is common for terrestrial scanners.</li>
    <li><strong>What are the streaming formats?</strong> 3D Tiles and I3S split large scenes into tiles for the web.</li>
    <li><strong>What about terrain?</strong> DEM rasters such as GeoTIFF, or quantized-mesh tiles that Cesium can stream.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use glTF for single models and 3D Tiles for whole cities. Convert once and keep the source files safe.</p>
</div>