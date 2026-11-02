{{-- resources/views/learning/lessons/10-11-leaflet-introduction.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Leaflet is a small, easy JavaScript library for interactive web maps.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a basic Leaflet map</li>
    <li>Add a base map and markers</li>
    <li>Understand why teams choose Leaflet</li>
</ul>

<h2>Visual Guide: Why Teams Choose Leaflet</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 12px; border-radius: 6px; font-family: monospace; font-size: 10px; line-height: 1.5; text-align: left; overflow-x: auto;">
        <span style="color: #569cd6;">leaflet_map.js</span><br><br>
        <span style="color: #569cd6;">const</span> map = L.map(<span style="color: #ce9178;">'map'</span>)<br>
        &nbsp;&nbsp;.setView([<span style="color: #b5cea8;">13.08</span>, <span style="color: #b5cea8;">80.27</span>], <span style="color: #b5cea8;">11</span>);<br><br>
        <span style="color: #569cd6;">const</span> base = <span style="color: #ce9178;">'https://tile.openstreetmap.org'</span>;<br>
        L.tileLayer(base + <span style="color: #ce9178;">'/{z}/{x}/{y}.png'</span>, {<br>
        &nbsp;&nbsp;attribution: <span style="color: #ce9178;">'&copy; OpenStreetMap contributors'</span><br>
        }).addTo(map);
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70;">Why teams choose Leaflet</div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">Small and simple</strong><br><span style="color: #666;">quick to learn</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">Built in</strong><br><span style="color: #666;">markers, popups, GeoJSON</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px;">
                <strong style="color: #005a70;">Plugins</strong><br><span style="color: #666;">draw, cluster, heat maps</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px;">
                <strong style="color: #005a70;">Coordinates</strong><br><span style="color: #666;">[lat, lng] order</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 8px;">the easiest way to a web map</div>
    </div>
</div>

<p>
    The diagram shows why teams choose Leaflet. It is lightweight and easy to learn, with markers, popups, and GeoJSON built in. It uses the [lat, lng] coordinate order. Extend it with plugins for drawing, clustering, and heat maps.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is Leaflet?</strong> A lightweight open-source library for mobile-friendly interactive maps.</li>
    <li><strong>How do I create a map?</strong> L.map('map').setView([lat, lng], zoom).</li>
    <li><strong>How do I add a base map?</strong> L.tileLayer(urlTemplate, options).addTo(map).</li>
    <li><strong>How do I add a marker?</strong> L.marker([lat, lng]).addTo(map).</li>
    <li><strong>How do I show a popup?</strong> marker.bindPopup('text').</li>
    <li><strong>How do I extend it?</strong> With plugins, for example Leaflet.draw, markercluster, and heat layers.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Leaflet takes [lat, lng]; every GeoJSON file uses [lon, lat].</p>
</div>