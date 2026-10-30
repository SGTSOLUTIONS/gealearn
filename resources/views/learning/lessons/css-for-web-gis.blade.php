{{-- resources/views/learning/lessons/10-5-css-for-web-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    CSS controls how the page looks: sizes, colours, and the position of the map, legend, and panels.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Size and position a map correctly</li>
    <li>Use CSS classes and z-index</li>
    <li>Understand media queries</li>
</ul>

<h2>Visual Guide: CSS Jobs in a Web GIS</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 12px; border-radius: 6px; font-family: monospace; font-size: 10px; line-height: 1.5; text-align: left; overflow-x: auto;">
        <span style="color: #569cd6;">map.css</span><br><br>
        html, body { <span style="color: #9cdcfe;">height</span>: <span style="color: #b5cea8;">100%</span>; <span style="color: #9cdcfe;">margin</span>: <span style="color: #b5cea8;">0</span>; }<br><br>
        <span style="color: #d7ba7d;">#map</span> { <span style="color: #9cdcfe;">height</span>: <span style="color: #b5cea8;">100vh</span>; <span style="color: #9cdcfe;">width</span>: <span style="color: #b5cea8;">100%</span>; }<br><br>
        <span style="color: #d7ba7d;">#legend</span> {<br>
        &nbsp;&nbsp;<span style="color: #9cdcfe;">position</span>: <span style="color: #ce9178;">absolute</span>;<br>
        &nbsp;&nbsp;<span style="color: #9cdcfe;">background</span>: <span style="color: #ce9178;">white</span>;<br>
        &nbsp;&nbsp;<span style="color: #9cdcfe;">padding</span>: <span style="color: #b5cea8;">6px</span> <span style="color: #b5cea8;">8px</span>;<br>
        }
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70;">CSS jobs in a Web GIS</div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">Map size</strong><br><span style="color: #666;">a map needs a height</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">Position</strong><br><span style="color: #666;">legends and panels on top</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px;">
                <strong style="color: #005a70;">Colours</strong><br><span style="color: #666;">clear, readable palette</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px;">
                <strong style="color: #005a70;">Media queries</strong><br><span style="color: #666;">adapt to small screens</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 8px;">no height = invisible map</div>
    </div>
</div>

<p>
    The diagram shows the CSS jobs. If a map does not show, check the div height first: no height = invisible map. Set height: 100vh on the map, with margin 0 on the body. Use position: absolute with top, right, or bottom values to place a legend.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Why is my map blank?</strong> Usually the map div has no height. Set height in CSS.</li>
    <li><strong>How do I fill the screen?</strong> height: 100vh on the map, with margin 0 on the body.</li>
    <li><strong>How do I place a legend?</strong> position: absolute with top, right, or bottom values.</li>
    <li><strong>What is a class?</strong> A reusable style name, written .legend in CSS.</li>
    <li><strong>What is z-index?</strong> It decides which element is drawn on top.</li>
    <li><strong>What are media queries?</strong> Rules that apply only on certain screen sizes (see 10.22).</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> If a map does not show, check the div height first.</p>
</div>