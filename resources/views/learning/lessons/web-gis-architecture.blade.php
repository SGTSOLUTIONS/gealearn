{{-- resources/views/learning/lessons/7-20-web-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Web GIS publishes maps and data through a chain of layers, from a database to the user's browser.
    Understanding this architecture is essential for building and maintaining web maps.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify the four tiers of Web GIS</li>
    <li>Understand the request/response flow</li>
    <li>Recognise the role of each server</li>
</ul>

<h2>Visual Guide: Web GIS Architecture</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-weight: bold;">Client</div>
        <div style="padding: 8px; background: #fff;">
            Browser / app<br>Leaflet<br>OpenLayers
        </div>
    </div>
    <div style="width: 5%; display: flex; flex-direction: column; justify-content: center; align-items: center; font-size: 10px;">
        <span style="color: #FF9800;">HTTP &rarr;</span>
        <span style="color: #04AA6D; margin-top: 5px;">&larr; data</span>
    </div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-weight: bold;">Web server</div>
        <div style="padding: 8px; background: #fff;">
            Nginx &bull; Node<br>Django &bull; PHP<br>APIs, security
        </div>
    </div>
    <div style="width: 5%; display: flex; flex-direction: column; justify-content: center; align-items: center; font-size: 10px;">
        <span style="color: #FF9800;">WMS/WFS &rarr;</span>
        <span style="color: #04AA6D; margin-top: 5px;">&larr; data</span>
    </div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 8px; font-weight: bold;">Map server</div>
        <div style="padding: 8px; background: #fff;">
            GeoServer<br>MapServer<br>WMS &bull; WFS &bull; WMTS
        </div>
    </div>
    <div style="width: 5%; display: flex; flex-direction: column; justify-content: center; align-items: center; font-size: 10px;">
        <span style="color: #FF9800;">SQL &rarr;</span>
        <span style="color: #04AA6D; margin-top: 5px;">&larr; data</span>
    </div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 8px; font-weight: bold;">Database</div>
        <div style="padding: 8px; background: #fff;">
            PostGIS<br>stores layers<br>spatial queries
        </div>
    </div>
</div>
<div style="text-align: center; font-size: 11px; color: #666; margin-bottom: 20px;">
    request goes right (top arrow); data comes back left (bottom arrow)
</div>

<div style="display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9; width: 30%;">1. Browser asks for a map tile</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9; width: 30%;">2. Server fetches it from GeoServer</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9; width: 30%;">3. GeoServer queries PostGIS</div>
</div>

<p>
    The diagram shows the four-tier architecture of Web GIS: the client (browser), web server (application logic), map server (publishing geographic data), and spatial database (storage). Requests flow right, data flows left.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is Web GIS architecture?</strong> The layers of software that deliver maps and data from a database to a browser.</li>
    <li><strong>What are the main tiers?</strong> Client, web/application server, map server and spatial database.</li>
    <li><strong>What does the client do?</strong> Displays maps in a browser or app, e.g. Leaflet or OpenLayers.</li>
    <li><strong>What does the map server do?</strong> GeoServer or MapServer publish data as WMS, WFS and WMTS services.</li>
    <li><strong>What does the spatial database do?</strong> PostGIS stores the layers and answers spatial queries.</li>
    <li><strong>Why use tiers and tile caching?</strong> Tiers let you scale, secure and replace each part; cached tiles make maps load fast.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep the database off the public internet; expose only the web and map servers.</p>
</div>