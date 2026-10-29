{{-- resources/views/learning/lessons/11-1-intro.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoServer is an open-source Java server that publishes spatial data as web services using open OGC standards.
    It acts as a translator between your data and the web, allowing one central copy of data to serve many clients.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what GeoServer is</li>
    <li>Identify the OGC standards it supports</li>
    <li>Know the default address and login</li>
</ul>

<h2>Visual Guide: GeoServer Data Flow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-weight: bold;">Data</div>
        <div style="padding: 8px; background: #fff;">PostGIS, GPKG, GeoTIFF</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-weight: bold;">GeoServer</div>
        <div style="padding: 8px; background: #fff;">stores, layers, styles</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 8px; font-weight: bold;">Services</div>
        <div style="padding: 8px; background: #fff;">WMS, WFS, WCS, WMTS</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 8px; font-weight: bold;">Clients</div>
        <div style="padding: 8px; background: #fff;">OpenLayers, QGIS</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">urls.txt</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            # Web admin page<br>
            http://localhost:8080/geoserver/web<br><br>
            # Default login<br>
            admin / geoserver<br><br>
            # WMS Capabilities<br>
            http://localhost:8080/geoserver/wms?service=WMS&request=GetCapabilities
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">What GeoServer offers</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Reads many vector and raster formats</li>
            <li>Publishes OGC web services</li>
            <li>Styles maps with SLD</li>
            <li>Web admin page and REST API</li>
            <li>Free and open source</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows how GeoServer connects data sources to web services and clients, along with the default URLs and features.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is GeoServer?</strong> An open-source Java server that publishes spatial data as web services.</li>
    <li><strong>Which standards does it support?</strong> OGC services: WMS, WFS, WCS and WMTS (tiles via GeoWebCache).</li>
    <li><strong>Which data can it publish?</strong> Shapefile, GeoPackage, PostGIS, GeoTIFF and many more formats.</li>
    <li><strong>Why use a map server?</strong> One central copy of the data serves many web and desktop clients.</li>
    <li><strong>What is the default address?</strong> <code>http://localhost:8080/geoserver</code>; the admin page is under <code>/web</code>.</li>
    <li><strong>What is the default login?</strong> <code>admin / geoserver</code>. Change it right after installing.</li>
    <li><strong>Who can use the services?</strong> Any OGC-aware client: OpenLayers, Leaflet, QGIS, ArcGIS Pro, CesiumJS.</li>
    <li><strong>Is GeoServer a database?</strong> No. It reads data from stores and publishes it; the data stays at its source.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Think of GeoServer as a translator between your data and the web.</p>
</div>