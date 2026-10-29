{{-- resources/views/learning/lessons/8-2-languages.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Several languages are used in GIS; each is strong in a different area.
    Knowing which language to use for which task is a core skill.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify the main languages used in GIS</li>
    <li>Understand the strengths of each language</li>
    <li>Choose the right language for your task</li>
</ul>

<h2>Visual Guide: GIS Languages and Their Strengths</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 31%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-weight: bold;">Python</div>
        <div style="padding: 8px; background: #fff;">analysis, automation<br><strong>GeoPandas &bull; PyQGIS &bull; ArcPy</strong></div>
    </div>
    <div style="width: 31%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-weight: bold;">SQL</div>
        <div style="padding: 8px; background: #fff;">databases, queries<br><strong>PostGIS &bull; MySQL</strong></div>
    </div>
    <div style="width: 31%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 8px; font-weight: bold;">JavaScript</div>
        <div style="padding: 8px; background: #fff;">web maps<br><strong>Leaflet &bull; OpenLayers &bull; Cesium</strong></div>
    </div>
    <div style="width: 31%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 8px; font-weight: bold;">R</div>
        <div style="padding: 8px; background: #fff;">statistics, modelling<br><strong>sf &bull; terra</strong></div>
    </div>
    <div style="width: 31%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 8px; font-weight: bold;">Java</div>
        <div style="padding: 8px; background: #fff;">enterprise GIS tools<br><strong>GeoServer &bull; GeoTools</strong></div>
    </div>
    <div style="width: 31%; border: 2px solid #607D8B; border-radius: 6px; overflow: hidden;">
        <div style="background: #607D8B; color: #fff; padding: 8px; font-weight: bold;">C / C++</div>
        <div style="padding: 8px; background: #fff;">GIS engines<br><strong>GDAL &bull; QGIS core</strong></div>
    </div>
</div>

<p>
    The diagram shows the six main programming languages used in GIS and their primary strengths, from Python's dominance in analysis to C++ powering the underlying engines.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Which language is used most in GIS?</strong> Python: analysis and automation (GeoPandas, PyQGIS, ArcPy).</li>
    <li><strong>What is SQL used for?</strong> Querying and managing spatial databases such as PostGIS.</li>
    <li><strong>Which language builds web maps?</strong> JavaScript (Leaflet, OpenLayers, CesiumJS).</li>
    <li><strong>Where is R used?</strong> Statistics and modelling (packages sf and terra).</li>
    <li><strong>Which languages power GIS software itself?</strong> C/C++ (GDAL, QGIS core) and Java (GeoServer, GeoTools).</li>
    <li><strong>Which should I learn first?</strong> Python, then SQL, then JavaScript.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Python plus SQL covers most day-to-day GIS programming.</p>
</div>