{{-- resources/views/learning/lessons/10-18-spatial-data-editing.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Editing tools let users draw or change features in the browser and save them to the database.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Draw and send features</li>
    <li>Validate geometry on the server</li>
    <li>Understand WFS-T</li>
</ul>

<h2>Visual Guide: Saving a Drawn Feature</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <!-- Left side: Code block -->
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">edit.js</span><br><br>
        map.on(<span style="color: #ce9178;">'draw:created'</span>, e =&gt; {<br>
        &nbsp;&nbsp;<span style="color: #569cd6;">const</span> gj = e.layer.toGeoJSON();<br>
        &nbsp;&nbsp;<span style="color: #dcdcaa;">fetch</span>(<span style="color: #ce9178;">'/api/wards'</span>, {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;method: <span style="color: #ce9178;">'POST'</span>,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;body: JSON.stringify(gj)<br>
        &nbsp;&nbsp;});<br>
        });
    </div>

    <!-- Right side: Visual Boxes -->
    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center; align-items: center; background: #f4f7f6; padding: 10px; border-radius: 6px;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px;">Saving a drawn feature</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Draw</strong><br><span style="color: #666;">user draws a shape</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Convert</strong><br><span style="color: #666;">layer.toGeoJSON()</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">POST</strong><br><span style="color: #666;">send to the API</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px; text-align: center;">
            <strong style="color: #005a70;">Validate and save</strong><br><span style="color: #666;">ST_IsValid, INSERT</span>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">the server has the last word</div>
    </div>
</div>

<p>
    The diagram shows the workflow to save a drawn feature. Use Leaflet.draw or Leaflet-Geoman, or OpenLayers Draw and Modify interactions to draw on the map. The shape is sent as GeoJSON in a POST or PUT request. Always validate geometry and permissions on the server, not only in the browser. Use ST_IsValid(geom) before saving; repair with ST_MakeValid.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Which tools draw on a map?</strong> Leaflet.draw or Leaflet-Geoman; OpenLayers Draw and Modify interactions.</li>
    <li><strong>How is the shape sent?</strong> As GeoJSON in a POST or PUT request.</li>
    <li><strong>How is it stored?</strong> The server converts it with ST_GeomFromGeoJSON and inserts it.</li>
    <li><strong>How do I check validity?</strong> ST_IsValid(geom) before saving; repair with ST_MakeValid.</li>
    <li><strong>Who may edit?</strong> Only logged-in users with the right role (see 10.19 and 10.20).</li>
    <li><strong>What is WFS-T?</strong> A standard way to edit features through a map server such as GeoServer.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Always validate geometry and permissions on the server, not only in the browser.</p>
</div>