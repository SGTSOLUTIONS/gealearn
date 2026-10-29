{{-- resources/views/learning/lessons/8-22-pyqgis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PyQGIS is the Python interface to QGIS itself: layers, projects and the user interface.
    It lets you automate QGIS workflows directly from the Python Console.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Access the QGIS interface</li>
    <li>Load and inspect layers</li>
    <li>Loop over features</li>
</ul>

<h2>Visual Guide: PyQGIS Object Hierarchy</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">PyQGIS console</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            layer = iface.activeLayer()<br>
            print(layer.name(), layer.featureCount())<br>
            for f in layer.getFeatures():<br>
            &nbsp;&nbsp;&nbsp;&nbsp;print(f["name"], f.geometry().area())
        </div>
    </div>
    <div style="width: 45%; display: flex; flex-direction: column; align-items: center; font-size: 11px; gap: 5px;">
        <div style="width: 90%; border: 2px solid #282A35; border-radius: 6px; padding: 6px; background: #f9f9f9; text-align: center;"><strong>iface</strong><br><span style="font-size: 10px; color: #666;">the QGIS window</span></div>
        <div style="font-size: 16px; color: #FF9800;">&darr;</div>
        <div style="width: 90%; border: 2px solid #04AA6D; border-radius: 6px; padding: 6px; background: #e8f5e9; text-align: center;"><strong>QgsProject</strong><br><span style="font-size: 10px; color: #666;">layers and settings</span></div>
        <div style="font-size: 16px; color: #FF9800;">&darr;</div>
        <div style="width: 90%; border: 2px solid #2196F3; border-radius: 6px; padding: 6px; background: #e3f2fd; text-align: center;"><strong>QgsVectorLayer</strong><br><span style="font-size: 10px; color: #666;">one layer</span></div>
        <div style="font-size: 16px; color: #FF9800;">&darr;</div>
        <div style="width: 90%; border: 2px solid #FF9800; border-radius: 6px; padding: 6px; background: #fff3cd; text-align: center;"><strong>QgsFeature</strong><br><span style="font-size: 10px; color: #666;">one feature</span></div>
    </div>
</div>

<p>
    The diagram shows the hierarchy of PyQGIS objects, from the interface down to individual features.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is PyQGIS?</strong> The Python API of QGIS: control projects, layers and the interface.</li>
    <li><strong>Where do I run it?</strong> Plugins &gt; Python Console (Ctrl+Alt+P).</li>
    <li><strong>What is iface?</strong> The object that talks to the QGIS window, e.g. <code>iface.activeLayer()</code>.</li>
    <li><strong>How do I load a layer?</strong> <code>QgsVectorLayer(path, "name", "ogr")</code> then <code>QgsProject.instance().addMapLayer(layer)</code>.</li>
    <li><strong>How do I loop over features?</strong> <code>for f in layer.getFeatures():</code>.</li>
    <li><strong>Where is the documentation?</strong> The QGIS Python API docs and the PyQGIS Developer Cookbook.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use the console's auto-complete to discover methods.</p>
</div>