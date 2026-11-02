{{-- resources/views/learning/lessons/10-24-module-recap.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The 23 topics go from Web GIS concepts to front-end and back-end basics, map libraries, interactive features, and secure deployment.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Summarize the Web GIS workflow from concepts to deployment</li>
    <li>Connect front-end, back-end, and map libraries</li>
    <li>Complete the practice checklist to reinforce learning</li>
</ul>

<h2>Visual Guide: Web GIS Development Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-family: sans-serif; font-size: 11px;">
    
    <!-- Box 1: Concepts -->
    <div style="width: 18%; display: flex; flex-direction: column;">
        <div style="background: #2c3e50; color: white; padding: 6px; text-align: center; font-weight: bold; border-radius: 4px 4px 0 0;">1 Concepts</div>
        <div style="border: 2px solid #2c3e50; border-top: none; padding: 8px; flex-grow: 1; background: #fff; border-radius: 0 0 4px 4px;">
            10.1 Introduction<br>
            10.2 Client-server<br>
            10.3 Web mapping
        </div>
    </div>

    <div style="display: flex; align-items: center; color: #f39c12; font-size: 18px; margin: 0 5px;">&rarr;</div>

    <!-- Box 2: Front end -->
    <div style="width: 18%; display: flex; flex-direction: column;">
        <div style="background: #27ae60; color: white; padding: 6px; text-align: center; font-weight: bold; border-radius: 4px 4px 0 0;">2 Front end</div>
        <div style="border: 2px solid #27ae60; border-top: none; padding: 8px; flex-grow: 1; background: #fff; border-radius: 0 0 4px 4px;">
            10.4 HTML<br>
            10.5 CSS<br>
            10.6 JavaScript
        </div>
    </div>

    <div style="display: flex; align-items: center; color: #f39c12; font-size: 18px; margin: 0 5px;">&rarr;</div>

    <!-- Box 3: Back end -->
    <div style="width: 18%; display: flex; flex-direction: column;">
        <div style="background: #2980b9; color: white; padding: 6px; text-align: center; font-weight: bold; border-radius: 4px 4px 0 0;">3 Back end</div>
        <div style="border: 2px solid #2980b9; border-top: none; padding: 8px; flex-grow: 1; background: #fff; border-radius: 0 0 4px 4px;">
            10.7 PHP<br>
            10.8 REST API<br>
            10.9 JSON, GeoJSON
        </div>
    </div>

    <div style="display: flex; align-items: center; color: #f39c12; font-size: 18px; margin: 0 5px;">&rarr;</div>

    <!-- Box 4: Libraries -->
    <div style="width: 18%; display: flex; flex-direction: column;">
        <div style="background: #8e44ad; color: white; padding: 6px; text-align: center; font-weight: bold; border-radius: 4px 4px 0 0;">4 Libraries</div>
        <div style="border: 2px solid #8e44ad; border-top: none; padding: 8px; flex-grow: 1; background: #fff; border-radius: 0 0 4px 4px;">
            10.10 OpenLayers<br>
            10.11 Leaflet<br>
            10.12 CesiumJS
        </div>
    </div>

    <div style="display: flex; align-items: center; color: #f39c12; font-size: 18px; margin: 0 5px;">&rarr;</div>

    <!-- Box 5: Features & Ship -->
    <div style="width: 18%; display: flex; flex-direction: column;">
        <div style="background: #d35400; color: white; padding: 6px; text-align: center; font-weight: bold; border-radius: 4px 4px 0 0;">5 Features &amp; Ship</div>
        <div style="border: 2px solid #d35400; border-top: none; padding: 8px; flex-grow: 1; background: #fff; border-radius: 0 0 4px 4px;">
            10.13 Interactive<br>
            10.14 Layers<br>
            10.15 GeoJSON<br>
            10.16 Styling<br>
            10.17 Search<br>
            10.18 Editing<br>
            10.19 Authentication<br>
            10.20 Roles<br>
            10.21 Dashboard<br>
            10.22 Responsive<br>
            10.23 Deployment
        </div>
    </div>

</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Learn the web &rarr; Serve data &rarr; Draw the map &rarr; Add tools &rarr; Secure and deploy &rarr;
</div>

<p>
    The diagram shows the structure of Module 10. The topics go from Web GIS concepts to front-end and back-end basics, map libraries, interactive features, and secure deployment. The practice checklist below helps reinforce learning. Next up is Module 11 - GeoServer and Map Services.
</p>

<h2>Practice checklist</h2>
<ul>
    <li>Build an HTML page with a Leaflet map centred on your city and an OpenStreetMap base layer.</li>
    <li>Write a PHP script that returns a PostGIS table as GeoJSON.</li>
    <li>Load that GeoJSON with fetch() and style the polygons by population.</li>
    <li>Add a layer control and a search box that filters features by name.</li>
    <li>Add a login page and limit editing to the editor role.</li>
    <li>Show the map and a chart together in a responsive dashboard and deploy it over HTTPS.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Complete the practice checklist to reinforce the Web GIS concepts.</p>
</div>