{{-- resources/views/learning/lessons/10-17-search-and-filter-features.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Search and filter tools help users find places and show only the features they need.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Filter features on the client</li>
    <li>Search by name and addresses</li>
    <li>Handle results and empty states</li>
</ul>

<h2>Visual Guide: A Search Box in Four Steps</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">search.js</span><br><br>
        <span style="color: #569cd6;">const</span> q = box.value.toLowerCase();<br>
        <span style="color: #569cd6;">const</span> hits = data.features.filter(f =&gt;<br>
        &nbsp;&nbsp;f.properties.name.toLowerCase()<br>
        &nbsp;&nbsp;&nbsp;&nbsp;.includes(q));<br><br>
        layer.clearLayers();<br>
        layer.addData(hits);<br>
        map.fitBounds(layer.getBounds());
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center; align-items: center; background: #f4f7f6; padding: 10px; border-radius: 6px;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px;">A search box in four steps</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Type</strong><br><span style="color: #666;">text in the search box</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Filter</strong><br><span style="color: #666;">keep matching features</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Redraw</strong><br><span style="color: #666;">update the layer</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px; text-align: center;">
            <strong style="color: #005a70;">Zoom</strong><br><span style="color: #666;">fitBounds to the result</span>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">the same idea works for dropdown filters</div>
    </div>
</div>

<p>
    The diagram shows a search box in four steps. Use array.filter() on the features, or a filter option in L.geoJSON. Compare lower-case text with includes(). Send parameters, e.g. ?type=Urban, and use WHERE in SQL to filter on the server for big datasets. Show a clear message and keep the map unchanged if nothing matches.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do I filter features?</strong> Use array.filter() on the features, or a filter option in L.geoJSON.</li>
    <li><strong>How do I search by name?</strong> Compare lower-case text with includes().</li>
    <li><strong>How do I search addresses?</strong> With a geocoding service; respect its usage policy.</li>
    <li><strong>How do I filter on the server?</strong> Send parameters, e.g. ?type=Urban, and use WHERE in SQL.</li>
    <li><strong>How do I show the result?</strong> Redraw the layer and call fitBounds.</li>
    <li><strong>What if nothing matches?</strong> Show a clear message and keep the map unchanged.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Filter on the server for big datasets: send only what the user needs.</p>
</div>