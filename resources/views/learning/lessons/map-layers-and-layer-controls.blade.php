{{-- resources/views/learning/lessons/10-14-map-layers-controls.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A web map stacks layers: one base map plus overlays that users can switch on and off.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand base layers vs overlays</li>
    <li>Add a layer switcher</li>
    <li>Control layer order and opacity</li>
</ul>

<h2>Visual Guide: Layer Basics</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">layers.js</span><br><br>
        <span style="color: #569cd6;">const</span> base = {<br>
        &nbsp;&nbsp;<span style="color: #ce9178;">'OSM'</span>: osm, <span style="color: #ce9178;">'Satellite'</span>: sat };<br><br>
        <span style="color: #569cd6;">const</span> over = {<br>
        &nbsp;&nbsp;<span style="color: #ce9178;">'Wards'</span>: wardsLayer,<br>
        &nbsp;&nbsp;<span style="color: #ce9178;">'Schools'</span>: schoolsLayer };<br><br>
        L.control.layers(base, over).addTo(map);
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px;">Layer basics</div>
        <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px;">
                <strong style="color: #005a70;">Base layers</strong><br><span style="color: #666;">only one at a time</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px;">
                <strong style="color: #005a70;">Overlays</strong><br><span style="color: #666;">switch on and off</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px;">
                <strong style="color: #005a70;">Draw order</strong><br><span style="color: #666;">last added is on top</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px;">
                <strong style="color: #005a70;">Opacity</strong><br><span style="color: #666;">setOpacity(0.6)</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">users choose what they see</div>
    </div>
</div>

<p>
    The diagram shows the layer basics. Base layers are background maps (only one visible at a time); overlays sit on top and can be switched on and off. Name layers clearly and switch the most important ones on by default. Layers are drawn in the order added; use panes or z-index to change it.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a base layer?</strong> The background map; only one is visible at a time.</li>
    <li><strong>What is an overlay?</strong> A layer on top of the base map, such as wards or schools.</li>
    <li><strong>How do I add a layer switcher?</strong> L.control.layers(baseLayers, overlays).addTo(map).</li>
    <li><strong>How do I control the order?</strong> Layers are drawn in the order added; use panes or z-index to change it.</li>
    <li><strong>How do I show or hide a layer in code?</strong> map.addLayer(l) and map.removeLayer(l).</li>
    <li><strong>Where do overlays come from?</strong> GeoJSON, WMS or WMTS services, or vector tiles.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Name layers clearly and switch the most important ones on by default.</p>
</div>