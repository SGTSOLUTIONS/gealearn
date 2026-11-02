{{-- resources/views/learning/lessons/11-3-workspaces.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A workspace groups layers under one name, a store connects to a data source, and a layer is one published dataset.
    Understanding this hierarchy is essential for organising GeoServer.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand workspaces, stores, and layers</li>
    <li>Identify store types</li>
    <li>Name layers correctly</li>
</ul>

<h2>Visual Guide: GeoServer Hierarchy</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Workspace</div>
        <div style="padding: 8px; background: #fff;">namespace: city</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Store</div>
        <div style="padding: 8px; background: #fff;">connection: city_db</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Layer</div>
        <div style="padding: 8px; background: #fff;">dataset: wards</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Style</div>
        <div style="padding: 8px; background: #fff;">how it looks</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">hierarchy.txt</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            workspace : city<br>
            &nbsp;&nbsp;store : city_db (PostGIS)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;layer : wards<br>
            &nbsp;&nbsp;&nbsp;&nbsp;layer : schools<br>
            &nbsp;&nbsp;store : terrain (GeoTIFF)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;layer : dem<br><br>
            full layer names:<br>
            city:wards &nbsp; city:schools &nbsp; city:dem
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Store types</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Data stores: vector</li>
            <li>Coverage stores: raster</li>
            <li>Cascaded stores: other servers</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the hierarchy from workspace to store to layer to style, along with the different store types.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a workspace?</strong> A container that groups related layers and stores under one name (namespace).</li>
    <li><strong>What is a store?</strong> A connection to a data source such as a PostGIS database, shapefile or GeoTIFF.</li>
    <li><strong>What is a layer?</strong> One published dataset from a store, with its CRS, bounds and style.</li>
    <li><strong>How is a layer named?</strong> <code>workspace:layer</code>, for example <code>city:wards</code>.</li>
    <li><strong>Which store types exist?</strong> Data stores (vector), coverage stores (raster) and cascaded stores.</li>
    <li><strong>Why use several workspaces?</strong> To separate projects or teams and to set security rules per workspace.</li>
    <li><strong>Can one store hold many layers?</strong> Yes. A PostGIS store can publish every table in a schema.</li>
    <li><strong>What is the default workspace?</strong> The one used when a request names a layer without a prefix.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Plan workspace names first: short, lowercase and without spaces.</p>
</div>