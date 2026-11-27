<p>
    Layers are drawn in stacked order: the top layer in the Layers panel appears on
    top of the map. The checkbox hides a layer without deleting it, and dragging
    layers up or down changes what is covered.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Understand drawing order</li>
    <li>Reorder and hide layers</li>
    <li>Inspect features with Identify</li>
</ul>

<h3>Common layer order, top to bottom</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #cbd5e1; border-radius:8px; padding:15px; background:#f5f8fc; text-align:center;">
        <strong>Top – Points</strong><p>Hospitals</p>
    </div>
    <div style="border:1px solid #cbd5e1; border-radius:8px; padding:15px; background:#f5f8fc; text-align:center;">
        <strong>2nd – Lines</strong><p>Roads</p>
    </div>
    <div style="border:1px solid #cbd5e1; border-radius:8px; padding:15px; background:#f5f8fc; text-align:center;">
        <strong>3rd – Polygons</strong><p>Wards</p>
    </div>
    <div style="border:1px solid #cbd5e1; border-radius:8px; padding:15px; background:#f5f8fc; text-align:center;">
        <strong>Bottom – Raster</strong><p>Satellite image</p>
    </div>
</div>

<ul>
    <li>The checkbox hides a layer without deleting it.</li>
    <li>Drag layers up or down to change what is covered.</li>
    <li>Opaque polygons hide the layers below: lower the Opacity in Symbology.</li>
    <li>Layers in different CRS still line up because QGIS reprojects on the fly.</li>
</ul>

<h3>Useful shortcuts</h3>
<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Keyboard shortcuts</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code>Ctrl+Shift+I  Identify: click a feature to read its attributes
F7            Layer Styling panel: restyle while watching the map</code></pre>
</div>

<h3>If a layer does not appear</h3>
<ul>
    <li>The checkbox is off: tick the layer in the Layers panel.</li>
    <li>It is covered by an opaque polygon: move it up or reduce the opacity.</li>
    <li>Scale-dependent visibility: zoom in or out, or change the visibility range.</li>
    <li>The data is far away: right-click &gt; Zoom to Layer(s).</li>
    <li>The layer has the wrong CRS: right-click &gt; Layer CRS and set the correct one.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> The Layer Styling panel (<code>F7</code>) lets you
        restyle a layer while watching the map, so you can judge the result instantly.
    </p>
</div>