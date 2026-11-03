{{-- resources/views/learning/lessons/15-12-openlayers.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    OpenLayers is a powerful JavaScript library for web maps. It suits projects that need many data sources, projections and GIS functions.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a map with layers and a view</li>
    <li>Add WMS and GeoJSON data</li>
    <li>Handle projections correctly</li>
</ul>

<h2>Visual Guide: OpenLayers Map Example</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 48%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Base map</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            const map = new ol.Map({<br>
              target: "map",<br>
              layers: [new ol.layer.Tile({<br>
                source: new ol.source.OSM() })],<br>
              view: new ol.View({<br>
                center: ol.proj.fromLonLat([78, 20]),<br>
                zoom: 5 })<br>
            });
        </div>
    </div>
    <div style="width: 48%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Add a WMS layer</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            new ol.layer.Tile({<br>
              source: new ol.source.TileWMS({<br>
                url: "/geoserver/wms",<br>
                params: {LAYERS: "city:wards"} })<br>
            })
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Projection:</strong> default is EPSG:3857; convert lon/lat with <code>fromLonLat</code><br>
    <strong>Rule of thumb:</strong> remember OpenLayers coordinates are [longitude, latitude] (x, y).
</div>

<p>
    The diagram shows the two essentials: building a map with a base layer and view, and adding a WMS layer from GeoServer.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the default projection?</strong> EPSG:3857; convert lon/lat values with <code>fromLonLat</code>.</li>
    <li><strong>Which formats does it support?</strong> WMS, WFS, WMTS, GeoJSON, vector tiles and more.</li>
    <li><strong>How do I add other coordinate systems?</strong> Use proj4 to add other coordinate systems.</li>
    <li><strong>How do I add interaction?</strong> Add interaction (draw, modify, select) with <code>ol.interaction</code>.</li>
    <li><strong>How do I install it?</strong> Install with npm (<code>npm install ol</code>) or load from a CDN.</li>
    <li><strong>What works well with it?</strong> It works well with GeoServer, which also has built-in OpenLayers previews.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Remember OpenLayers coordinates are [longitude, latitude] (x, y).</p>
</div>