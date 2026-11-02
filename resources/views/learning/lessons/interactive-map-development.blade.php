{{-- resources/views/learning/lessons/10-13-interactive-map-development.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Interactive maps react to the user: clicks, hovering, zooming, and choosing options.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand event handlers</li>
    <li>Know common map events</li>
    <li>Get clicked locations and show information</li>
</ul>

<h2>Visual Guide: How an Interaction Works</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">interact.js</span><br><br>
        map.on(<span style="color: #ce9178;">'click'</span>, e =&gt; {<br>
        &nbsp;&nbsp;L.marker(e.latlng).addTo(map)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;.bindPopup(<span style="color: #ce9178;">'Clicked here'</span>)<br>
        &nbsp;&nbsp;&nbsp;&nbsp;.openPopup();<br>
        });<br><br>
        map.on(<span style="color: #ce9178;">'zoomend'</span>, () =&gt; {<br>
        &nbsp;&nbsp;console.log(map.getZoom());<br>
        });
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center; align-items: center; background: #f4f7f6; padding: 10px; border-radius: 6px;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px;">How an interaction works</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">User action</strong><br><span style="color: #666;">click, hover, zoom</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Event handler</strong><br><span style="color: #666;">your function runs</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; text-align: center;">
            <strong style="color: #005a70;">Map updates</strong><br><span style="color: #666;">marker, popup, new layer</span>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">listen, then change the map</div>
    </div>
</div>

<p>
    The diagram shows how an interaction works. The user acts, an event handler runs, and the map updates. Keep interactions simple: one clear action per click. Use map.flyTo(...) or map.fitBounds(...) to move the view by code. Use built-in controls (zoom, scale) or build your own buttons.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is an event handler?</strong> A function that runs when something happens, such as map.on("click", fn).</li>
    <li><strong>Which events are common?</strong> click, mouseover, zoomend, moveend, and layer events.</li>
    <li><strong>How do I get the clicked location?</strong> e.latlng in Leaflet; e.coordinate in OpenLayers.</li>
    <li><strong>How do I show information?</strong> With popups or tooltips bound to a layer.</li>
    <li><strong>How do I move the view by code?</strong> map.flyTo(...) or map.fitBounds(...).</li>
    <li><strong>How do I add controls?</strong> Use built-in controls (zoom, scale) or build your own buttons.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep interactions simple: one clear action per click.</p>
</div>