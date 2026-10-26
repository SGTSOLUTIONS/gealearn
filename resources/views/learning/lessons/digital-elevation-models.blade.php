{{-- resources/views/learning/lessons/4-8-dem.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A Digital Elevation Model (DEM) is a raster in which each cell stores the height of the ground above sea level.
    It is the foundation for terrain analysis, hydrology, and 3D visualisation.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the difference between DEM, DTM, and DSM</li>
    <li>Learn about common free sources of elevation data</li>
    <li>Recognise the use of DEMs for terrain analysis</li>
</ul>

<h2>Visual Guide: DTM vs. DSM</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0;">
    <div style="width: 60%; border: 1px solid #ccc; padding: 15px; position: relative; background: linear-gradient(to bottom, #e3f2fd 0%, #c8e6c9 100%); border-radius: 6px;">
        <div style="position: absolute; top: 10px; left: 10px; font-size: 11px; font-weight: bold; color: #282A35;">Cross-section of the same land</div>
        <div style="position: absolute; top: 40px; left: 50px; width: 10px; height: 30px; background: #6d4c41; border-radius: 2px;"></div>
        <div style="position: absolute; top: 30px; left: 35px; width: 40px; height: 40px; background: rgba(76, 175, 80, 0.4); border-radius: 50%; border: 1px dashed #4caf50;"></div>
        <div style="position: absolute; top: 50px; left: 150px; width: 30px; height: 40px; background: rgba(33, 150, 243, 0.3); border: 1px dashed #2196f3;"></div>
        <div style="position: absolute; bottom: 20px; left: 0; width: 100%; height: 30px; background: #a1887f; clip-path: polygon(0 100%, 0 50%, 25% 20%, 50% 60%, 75% 30%, 100% 50%, 100% 100%);"></div>
        <div style="position: absolute; bottom: 50px; left: 0; width: 100%; height: 40px; border-bottom: 2px dashed #d9534f; clip-path: polygon(0 100%, 0 30%, 25% 0%, 50% 40%, 75% 10%, 100% 30%, 100% 100%);"></div>
        <div style="position: absolute; bottom: 5px; left: 10px; font-size: 10px; color: #d9534f;"><strong>DSM</strong> = surface (buildings, trees)</div>
        <div style="position: absolute; bottom: 5px; right: 10px; font-size: 10px; color: #282A35;"><strong>DTM</strong> = bare ground (usually called DEM)</div>
    </div>
    <div style="width: 35%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; text-align: center; font-weight: bold; font-size: 12px;">Common sources</div>
        <div style="padding: 8px; font-size: 11px; line-height: 1.6;">
            SRTM (30 m)<br>
            Copernicus DEM (30 m)<br>
            ALOS &bull; ASTER<br>
            LiDAR (about 1 m)
        </div>
    </div>
</div>
<div style="text-align: center; font-weight: bold; color: #d9534f; margin-bottom: 20px; font-size: 13px;">
    each DEM cell stores one height value
</div>

<p>
    The diagram contrasts a DTM (bare ground) with a DSM (which includes buildings and trees). This distinction is crucial: for flood modelling you need a DTM, but for urban visibility analysis you need a DSM.
</p>

<h2>Key Points</h2>
<ul>
    <li><strong>DTM</strong> – bare ground only (the usual meaning of DEM). <strong>DSM</strong> – includes buildings and trees.</li>
    <li>Free sources: <strong>SRTM (30 m), Copernicus DEM (30 m), ALOS, ASTER GDEM</strong>.</li>
    <li><strong>LiDAR</strong> gives far finer detail, about 1 m.</li>
    <li>From a DEM you can derive slope, aspect, hillshade and contours (Module 5).</li>
    <li>Check the vertical unit (metres) and the CRS before analysing.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Show a DEM with hillshade to see the terrain shape clearly.</p>
</div>