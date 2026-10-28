{{-- resources/views/learning/lessons/7-14-3d-buildings.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    3D building models are made by lifting footprints to a height, then adding roof shapes and details as needed.
    This is called extrusion.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the Levels of Detail (LOD)</li>
    <li>Extrude a footprint to a height</li>
    <li>Document the LOD and height source</li>
</ul>

<h2>Visual Guide: Levels of Detail (LOD)</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <div style="height: 60px; display: flex; align-items: flex-end; justify-content: center;">
            <div style="width: 50px; height: 15px; background: #90a4ae; border: 1px solid #546e7a; transform: skewY(-10deg);"></div>
        </div>
        <strong style="color: #282A35;">LOD0</strong><br><span style="color: #666; font-size: 10px;">footprint</span>
    </div>
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <div style="height: 60px; display: flex; align-items: flex-end; justify-content: center;">
            <div style="width: 40px; height: 40px; background: #b0bec5; border: 1px solid #78909c; transform: skewY(-10deg);"></div>
        </div>
        <strong style="color: #282A35;">LOD1</strong><br><span style="color: #666; font-size: 10px;">block with height</span>
    </div>
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <div style="height: 60px; display: flex; align-items: flex-end; justify-content: center;">
            <div style="width: 40px; height: 30px; background: #b0bec5; border: 1px solid #78909c; transform: skewY(-10deg); position: relative;">
                <div style="position: absolute; top: -15px; left: 0; width: 0; height: 0; border-left: 20px solid transparent; border-right: 20px solid transparent; border-bottom: 15px solid #d9534f;"></div>
            </div>
        </div>
        <strong style="color: #282A35;">LOD2</strong><br><span style="color: #666; font-size: 10px;">roof shape</span>
    </div>
    <div style="width: 23%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <div style="height: 60px; display: flex; align-items: flex-end; justify-content: center;">
            <div style="width: 40px; height: 30px; background: #b0bec5; border: 1px solid #78909c; transform: skewY(-10deg); position: relative;">
                <div style="position: absolute; top: -15px; left: 0; width: 0; height: 0; border-left: 20px solid transparent; border-right: 20px solid transparent; border-bottom: 15px solid #d9534f;"></div>
                <div style="position: absolute; bottom: 5px; left: 10px; width: 8px; height: 10px; background: #64b5f6;"></div>
                <div style="position: absolute; bottom: 5px; right: 10px; width: 8px; height: 10px; background: #64b5f6;"></div>
            </div>
        </div>
        <strong style="color: #282A35;">LOD3</strong><br><span style="color: #666; font-size: 10px;">windows, doors</span>
    </div>
</div>
<div style="text-align: center; font-size: 11px; color: #666; margin-bottom: 20px;">
    Height comes from an attribute field, LiDAR, photogrammetry or OSM building levels
</div>

<p>
    The diagram shows the four Levels of Detail (LOD0 to LOD3) for 3D buildings, progressing from a simple flat footprint to a detailed model with windows and doors.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How are 3D buildings made from footprints?</strong> By extrusion: each polygon is lifted to a height taken from an attribute.</li>
    <li><strong>What is LOD?</strong> Level of Detail: LOD0 footprint, LOD1 block, LOD2 roof shapes, LOD3 openings and details.</li>
    <li><strong>Where do heights come from?</strong> LiDAR, photogrammetry, survey data, OpenStreetMap levels, or estimated floors &times; storey height.</li>
    <li><strong>How do I extrude in QGIS?</strong> In the 3D view settings of the polygon layer set the Extrusion / Height field or expression.</li>
    <li><strong>Which exchange formats exist?</strong> CityGML for city models; 3D Tiles for the web (Module 12).</li>
    <li><strong>What should I document?</strong> The LOD and the source of the heights.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use the lowest LOD that answers the question; higher LOD means more data and slower maps.</p>
</div>