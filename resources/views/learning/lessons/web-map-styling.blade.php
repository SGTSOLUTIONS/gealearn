{{-- resources/views/learning/lessons/10-16-web-map-styling.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Styling uses colour, size, and labels to show differences between features.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Style by attribute</li>
    <li>Highlight on hover</li>
    <li>Choose colours and add a legend</li>
</ul>

<h2>Visual Guide: Ways to Style</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">style.js</span><br><br>
        <span style="color: #569cd6;">function</span> <span style="color: #dcdcaa;">style</span>(f) {<br>
        &nbsp;&nbsp;<span style="color: #569cd6;">const</span> p = f.properties.pop;<br>
        &nbsp;&nbsp;<span style="color: #569cd6;">return</span> {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;fillColor: p &gt; <span style="color: #b5cea8;">5000</span><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;? <span style="color: #ce9178;">'#08519c'</span> : <span style="color: #ce9178;">'#9ecae1'</span>,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;weight: <span style="color: #b5cea8;">1</span>, fillOpacity: <span style="color: #b5cea8;">0.7</span><br>
        &nbsp;&nbsp;};<br>
        }<br>
        L.geoJSON(data, {style: style});
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px;">Ways to style</div>
        <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px;">
                <strong style="color: #005a70;">Colour by value</strong><br><span style="color: #666;">choropleth map</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px;">
                <strong style="color: #005a70;">Size by value</strong><br><span style="color: #666;">proportional symbols</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px;">
                <strong style="color: #005a70;">Labels</strong><br><span style="color: #666;">tooltips and text</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px;">
                <strong style="color: #005a70;">Legend</strong><br><span style="color: #666;">explains the colours</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">style should answer a question</div>
    </div>
</div>

<p>
    The diagram shows the ways to style. Pass a style function that reads feature.properties to style by attribute. Use mouseover and mouseout events and layer.setStyle() to highlight on hover. Create a custom control (L.control) with the classes and colours to add a legend. Use few classes (4 to 6) so the map stays easy to read.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do I style by attribute?</strong> Pass a style function that reads feature.properties.</li>
    <li><strong>Which style options exist?</strong> color, weight, fillColor, and fillOpacity.</li>
    <li><strong>How do I highlight on hover?</strong> Use mouseover and mouseout events and layer.setStyle().</li>
    <li><strong>How do I choose colours?</strong> Use a sequential palette for numbers; ColorBrewer is a good source.</li>
    <li><strong>How do I add a legend?</strong> Create a custom control (L.control) with the classes and colours.</li>
    <li><strong>What about colour-blind users?</strong> Pick colour-blind-safe palettes and do not rely on colour alone.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use few classes (4 to 6) so the map stays easy to read.</p>
</div>