{{-- resources/views/learning/lessons/11-19-recap.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The 18 topics go from installing GeoServer to publishing data, serving it through OGC services, tuning and securing it, and connecting web clients.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Review the complete GeoServer workflow</li>
    <li>Check your understanding with the practice checklist</li>
</ul>

<h2>Visual Guide: The GeoServer Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; text-align: center; margin: 30px 0; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Set up</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            11.1 Introduction<br>11.2 Installation
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Publish</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            11.3 Workspaces<br>11.4 Vector layers<br>11.5 Raster layers<br>11.6 PostGIS<br>11.7 CRS<br>11.8 SLD styling
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Services</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            11.9 WMS<br>11.10 WFS<br>11.11 WCS<br>11.12 WMTS
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Tune</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            11.13 Tile caching<br>11.14 Security<br>11.15 Performance
        </div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">5 Connect</div>
        <div style="padding: 6px; text-align: left; background: #fff; line-height: 1.4;">
            11.16 OpenLayers<br>11.17 CesiumJS<br>11.18 Troubleshooting
        </div>
    </div>
</div>
<div style="text-align: center; font-weight: bold; font-size: 14px; color: #04AA6D; margin-bottom: 20px;">
    Set up &gt; Publish &gt; Serve &gt; Tune &gt; Connect
</div>

<p>
    The diagram summarises the entire module as a five-stage pipeline, from installation to connecting web clients.
</p>

<h2>Key Points (Practice Checklist)</h2>
<ul>
    <li>Install GeoServer, log in and change the default admin password.</li>
    <li>Create a workspace and publish a shapefile or GeoPackage as a layer.</li>
    <li>Connect a PostGIS store and publish a table with a spatial index.</li>
    <li>Write an SLD that colours wards by population using rules and filters.</li>
    <li>Request the same layer through WMS GetMap and WFS GetFeature (GeoJSON).</li>
    <li>Seed a tile cache for zoom levels 0 to 8 and view it through WMTS.</li>
    <li>Show your layer in an OpenLayers map and fix any CORS error.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Next:</strong> Module 12 &mdash; 3D GIS Development (3D data formats, 3D Tiles, CesiumJS, terrain and building visualization).</p>
</div>