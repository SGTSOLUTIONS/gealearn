{{-- resources/views/learning/lessons/15-7-pyqgis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PyQGIS is the Python interface to QGIS. Use it in the Python Console or in scripts and plugins to automate map work.
    The Python Console is ideal for quick tests; save longer code as a script.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Access the QGIS interface from Python</li>
    <li>Loop over features and select by expression</li>
    <li>Run Processing tools from code</li>
</ul>

<h2>Visual Guide: PyQGIS Console Example</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 48%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Work with a layer</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            layer = iface.activeLayer()<br><br>
            for f in layer.getFeatures():<br>
            &nbsp;&nbsp;print(f["name"], f.geometry().area())<br><br>
            layer.selectByExpression("population &gt; 5000")
        </div>
    </div>
    <div style="width: 48%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Add data and run tools</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            vl = QgsVectorLayer("wards.shp", "Wards", "ogr")<br><br>
            QgsProject.instance().addMapLayer(vl)<br><br>
            processing.run("native:buffer", params)
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Console:</strong> Plugins &gt; Python Console (Ctrl+Alt+P)<br>
    <strong>Rule of thumb:</strong> run a tool once from the Toolbox, then copy its Python command from the Processing History.
</div>

<p>
    The diagram shows the two things you do most in PyQGIS: work with the active layer, and add data or run Processing tools from code.
</p>

<h2>Key Points (Q&amp;A)</h2>
<ul>
    <li><strong>What is PyQGIS?</strong> The Python interface to QGIS; it uses the same Python language as the rest of this tutorial.</li>
    <li><strong>Where do I run it?</strong> The Python Console is ideal for quick tests; save longer code as a script.</li>
    <li><strong>How do I run a saved script?</strong> From Processing &gt; Toolbox &gt; Scripts.</li>
    <li><strong>How do I build a plugin?</strong> Build your own plugin when you want a button or panel inside QGIS.</li>
    <li><strong>How do I find tool names and parameters?</strong> Use <code>processing.algorithmHelp("native:buffer")</code>.</li>
    <li><strong>How do I get Python for a tool I already ran?</strong> Right-click a Processing tool run in the History panel to copy it as Python.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Run a tool once from the Toolbox, then copy its Python command from the Processing History.</p>
</div>