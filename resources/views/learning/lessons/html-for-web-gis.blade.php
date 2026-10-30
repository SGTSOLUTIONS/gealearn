{{-- resources/views/learning/lessons/10-4-html-for-web-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    HTML is the page structure: it holds the map container, the controls, and the links to your scripts.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Structure a basic HTML page for a map</li>
    <li>Know the key tags for Web GIS</li>
    <li>Load scripts and styles correctly</li>
</ul>

<h2>Visual Guide: Key Tags</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 12px; border-radius: 6px; font-family: monospace; font-size: 10px; line-height: 1.5; text-align: left; overflow-x: auto;">
        <span style="color: #569cd6;">index.html</span><br><br>
        &lt;!<span style="color: #569cd6;">DOCTYPE</span> html&gt;<br>
        &lt;<span style="color: #569cd6;">html</span>&gt;&lt;<span style="color: #569cd6;">head</span>&gt;<br>
        &nbsp;&nbsp;&lt;<span style="color: #569cd6;">meta</span> <span style="color: #9cdcfe;">charset</span>=<span style="color: #ce9178;">"utf-8"</span>&gt;<br>
        &nbsp;&nbsp;&lt;<span style="color: #569cd6;">link</span> <span style="color: #9cdcfe;">rel</span>=<span style="color: #ce9178;">"stylesheet"</span> <span style="color: #9cdcfe;">href</span>=<span style="color: #ce9178;">"map.css"</span>&gt;<br>
        &lt;/<span style="color: #569cd6;">head</span>&gt;&lt;<span style="color: #569cd6;">body</span>&gt;<br>
        &nbsp;&nbsp;&lt;<span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">id</span>=<span style="color: #ce9178;">"map"</span>&gt;&lt;/<span style="color: #569cd6;">div</span>&gt;<br>
        &nbsp;&nbsp;&lt;<span style="color: #569cd6;">script</span> <span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"map.js"</span>&gt;&lt;/<span style="color: #569cd6;">script</span>&gt;<br>
        &lt;/<span style="color: #569cd6;">body</span>&gt;&lt;/<span style="color: #569cd6;">html</span>&gt;
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70;">Key tags</div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">&lt;div id="map"&gt;</strong><br><span style="color: #666;">the map container</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">&lt;script&gt;</strong><br><span style="color: #666;">loads JavaScript</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px;">
                <strong style="color: #005a70;">&lt;link&gt;</strong><br><span style="color: #666;">loads CSS</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px;">
                <strong style="color: #005a70;">&lt;input&gt; &lt;select&gt;</strong><br><span style="color: #666;">search and filter controls</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 8px;">structure here, style in CSS</div>
    </div>
</div>

<p>
    The diagram shows the key tags. The map goes in an empty <code>&lt;div id="map"&gt;</code> that your script fills. Load scripts at the end of the body, or use defer, so the map div exists first. An id is a unique name for one element, used to find it from CSS or JavaScript.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does HTML do?</strong> It defines the structure and content of the page.</li>
    <li><strong>Where does the map go?</strong> In an empty <code>&lt;div id="map"&gt;</code> that your script fills.</li>
    <li><strong>How do I load a library?</strong> With a <code>&lt;script src="..."&gt;</code> tag; load CSS with <code>&lt;link&gt;</code>.</li>
    <li><strong>Where do scripts go?</strong> At the end of the body, or use defer, so the map div exists first.</li>
    <li><strong>Which controls are useful?</strong> Text inputs, dropdowns, checkboxes, and buttons.</li>
    <li><strong>What is an id?</strong> A unique name for one element, used to find it from CSS or JavaScript.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Give the map div an id and load the library CSS before your own CSS.</p>
</div>