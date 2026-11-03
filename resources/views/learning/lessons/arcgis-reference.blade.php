{{-- resources/views/learning/lessons/15-2-arcgis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    ArcGIS Pro is Esri's commercial desktop GIS and the replacement for the older ArcMap.
    This page matches common tasks between QGIS and ArcGIS Pro so you can move between them.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Map common tasks from QGIS to ArcGIS Pro</li>
    <li>Know where ArcGIS Pro stores data and tools</li>
    <li>Understand sharing and automation options</li>
</ul>

<h2>Visual Guide: QGIS vs ArcGIS Pro</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 23%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Buffer</div>
        <div style="padding: 8px; background: #fff;">
            QGIS: Vector &rarr; Geoprocessing<br><br>
            Pro: Analysis &rarr; Tools
        </div>
    </div>
    <div style="width: 23%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Select</div>
        <div style="padding: 8px; background: #fff;">
            QGIS: Select by Expression<br><br>
            Pro: Map &rarr; Select By Attributes
        </div>
    </div>
    <div style="width: 23%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Scripting</div>
        <div style="padding: 8px; background: #fff;">
            QGIS: PyQGIS<br><br>
            Pro: ArcPy
        </div>
    </div>
    <div style="width: 23%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Project</div>
        <div style="padding: 8px; background: #fff;">
            QGIS: <code>.qgz</code><br><br>
            Pro: <code>.aprx</code>
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Layout:</strong> QGIS Print Layout vs Pro Insert &rarr; New Layout<br>
    <strong>Rule of thumb:</strong> learn the concepts in QGIS once; they carry over to ArcGIS Pro almost one-to-one.
</div>

<p>
    The diagram compares four everyday tasks side by side so you can translate your QGIS habits into ArcGIS Pro.
</p>

<h2>Key Points (Q&amp;A)</h2>
<ul>
    <li><strong>What is ArcGIS Pro?</strong> Esri's Windows desktop GIS; it replaces the older ArcMap.</li>
    <li><strong>Where does data live?</strong> In a file geodatabase (<code>.gdb</code>) or shapefiles; geoprocessing tools are on the Analysis tab.</li>
    <li><strong>What are ArcGIS Online and Enterprise?</strong> ArcGIS Online hosts and shares maps; ArcGIS Enterprise runs on your own servers.</li>
    <li><strong>How do I share results?</strong> Share finished layers from the Share tab as web layers or packages.</li>
    <li><strong>How do I automate work?</strong> Use ArcPy or ModelBuilder.</li>
    <li><strong>Why can't I find a ribbon command?</strong> Ribbon names can change between Pro versions; use the search box on the ribbon.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Learn the concepts in QGIS once; they carry over to ArcGIS Pro almost one-to-one.</p>
</div>