{{-- resources/views/learning/lessons/11-4-vector-layers.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Publishing turns a vector dataset in a store into a layer that clients can request through the web services.
    This is the most common task in GeoServer administration.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Follow the publishing workflow</li>
    <li>Configure layer settings</li>
    <li>Preview and verify the layer</li>
</ul>

<h2>Visual Guide: Publishing Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Add store</div>
        <div style="padding: 8px; background: #fff;">file or database</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Publish</div>
        <div style="padding: 8px; background: #fff;">choose the layer</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Check</div>
        <div style="padding: 8px; background: #fff;">CRS, bounds, style</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Preview</div>
        <div style="padding: 8px; background: #fff;">Layer Preview</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">upload.sh</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            # Upload a zipped shapefile<br>
            GS=http://localhost:8080/geoserver/rest<br>
            curl -u admin:geoserver -XPUT \<br>
            &nbsp;&nbsp;-H "Content-type: application/zip" \<br>
            &nbsp;&nbsp;--data-binary @wards.zip \<br>
            &nbsp;&nbsp;$GS/workspaces/city/datastores/wards/file.shp
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Layer settings</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Name and title</li>
            <li>Native and declared CRS</li>
            <li>Bounding boxes</li>
            <li>Default style</li>
            <li>Attributes and filters</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the four-step publishing workflow and the settings you need to configure for each layer.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What are the steps?</strong> Create a store, pick a layer to publish, check its settings and save.</li>
    <li><strong>Where do I do it?</strong> Data &gt; Layers &gt; Add a new layer, or through the REST API.</li>
    <li><strong>Native or declared CRS?</strong> Native is how data is stored; declared is what GeoServer tells clients.</li>
    <li><strong>What are bounding boxes?</strong> The layer extent. Use the "Compute from data" button.</li>
    <li><strong>How do I check the result?</strong> Data &gt; Layer Preview opens the layer with WMS and WFS links.</li>
    <li><strong>How do I upload a shapefile?</strong> Zip it and send a REST PUT to <code>.../datastores/&lt;name&gt;/file.shp</code>.</li>
    <li><strong>Can I limit attributes?</strong> Yes. Edit the feature type details and keep only the fields you need.</li>
    <li><strong>Which format is best?</strong> GeoPackage or PostGIS; they handle large and edited data well.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Always open Layer Preview first; if it works there, the layer itself is fine.</p>
</div>