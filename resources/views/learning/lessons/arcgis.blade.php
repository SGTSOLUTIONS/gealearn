{{-- resources/views/learning/lessons/3-3-arcgis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    ArcGIS is Esri's commercial GIS platform, made of three connected products. It is widely used in professional environments for mapping, analysis, and data sharing.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the three main ArcGIS products</li>
    <li>Compare ArcGIS Pro with QGIS</li>
    <li>Recognise when a commercial licence is required</li>
</ul>

<h2>Visual Guide: ArcGIS Platform</h2>
<div style="display: flex; align-items: center; justify-content: center; margin: 20px 0;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; text-align: center;">
        <div style="background: #282A35; color: #fff; padding: 10px; font-weight: bold;">ArcGIS Pro</div>
        <div style="padding: 12px; font-size: 12px;">Desktop app (Windows)<br>Edit &bull; Analyse &bull; Map<br>Author maps & data</div>
    </div>
    <div style="width: 15%; text-align: center; font-size: 12px; color: #FF9800; font-weight: bold; line-height: 1.2;">
        publish / share<br><span style="font-size: 20px;">&rarr;</span>
    </div>
    <div style="width: 35%; display: flex; flex-direction: column; gap: 10px;">
        <div style="border: 2px solid #04AA6D; border-radius: 6px; text-align: center;">
            <div style="background: #04AA6D; color: #fff; padding: 6px; font-size: 13px; font-weight: bold;">ArcGIS Online</div>
            <div style="padding: 8px; font-size: 12px;">Cloud platform<br>Host & share maps/apps</div>
        </div>
        <div style="border: 2px solid #2196F3; border-radius: 6px; text-align: center;">
            <div style="background: #2196F3; color: #fff; padding: 6px; font-size: 13px; font-weight: bold;">ArcGIS Enterprise</div>
            <div style="padding: 8px; font-size: 12px;">Your own servers<br>Same tools, private</div>
        </div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li><strong>ArcGIS Pro</strong> – Windows desktop app for editing, analysis and map layouts (replaces legacy ArcMap).</li>
    <li><strong>ArcGIS Online</strong> – cloud platform to host and share maps, layers and web apps.</li>
    <li><strong>ArcGIS Enterprise</strong> – the same capabilities running on your organisation's servers.</li>
    <li>A licence or Esri account is required (trial available).</li>
    <li>Concepts are the same as QGIS: layers, attribute tables, symbology, layouts.</li>
</ul>

<h2>QGIS vs. ArcGIS Pro</h2>
<table>
    <thead>
        <tr><th>Feature</th><th>QGIS</th><th>ArcGIS Pro</th></tr>
    </thead>
    <tbody>
        <tr><td>Cost</td><td>Free, open source</td><td>Paid licence</td></tr>
        <tr><td>Platform</td><td>Windows, macOS, Linux</td><td>Windows only</td></tr>
        <tr><td>Scripting</td><td>Python (PyQGIS)</td><td>Python (ArcPy)</td></tr>
    </tbody>
</table>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Learn the concepts once in QGIS – they transfer directly to ArcGIS.</p>
</div>