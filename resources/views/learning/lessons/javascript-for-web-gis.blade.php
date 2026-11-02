{{-- resources/views/learning/lessons/10-6-javascript-for-web-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    JavaScript makes the page interactive: it builds the map, loads data, and reacts to the user.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know the JavaScript basics needed for Web GIS</li>
    <li>Understand events and asynchronous code</li>
    <li>Use the browser console for debugging</li>
</ul>

<h2>Visual Guide: JavaScript You Will Use Most</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 12px; border-radius: 6px; font-family: monospace; font-size: 10px; line-height: 1.5; text-align: left; overflow-x: auto;">
        <span style="color: #569cd6;">map.js</span><br><br>
        <span style="color: #569cd6;">const</span> wards = [{name: <span style="color: #ce9178;">'A'</span>, pop:<span style="color: #b5cea8;">5400</span>}];<br>
        <span style="color: #569cd6;">const</span> big = wards.<span style="color: #dcdcaa;">filter</span>(<br>
        &nbsp;&nbsp;w =&gt; w.pop &gt; <span style="color: #b5cea8;">5000</span>);<br><br>
        document.<span style="color: #dcdcaa;">getElementById</span>(<span style="color: #ce9178;">'n'</span>)<br>
        &nbsp;&nbsp;.textContent = big.length;<br><br>
        <span style="color: #dcdcaa;">fetch</span>(url).<span style="color: #dcdcaa;">then</span>(r =&gt; r.<span style="color: #dcdcaa;">json</span>());
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70;">JavaScript you will use most</div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">const / let</strong><br><span style="color: #666;">variables</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px; margin-bottom: 8px;">
                <strong style="color: #005a70;">filter / map</strong><br><span style="color: #666;">work on arrays</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px;">
                <strong style="color: #005a70;">getElementById</strong><br><span style="color: #666;">find page elements</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px;">
                <strong style="color: #005a70;">fetch / then</strong><br><span style="color: #666;">load data asynchronously</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 8px;">data in, map out</div>
    </div>
</div>

<p>
    The diagram shows the JavaScript you will use most. const is for values that never change; let is for values that do. An event is something that happens, such as a click. Asynchronous code waits for data (fetch) without freezing the page. Keep the browser console open (F12) while you develop.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does JavaScript do in Web GIS?</strong> It creates the map, loads layers, and handles clicks, searches, and filters.</li>
    <li><strong>const or let?</strong> const for values that never change; let for values that do.</li>
    <li><strong>What is an array?</strong> An ordered list such as a list of features.</li>
    <li><strong>What is an event?</strong> Something that happens, such as a click; map.on("click", fn) reacts to it.</li>
    <li><strong>What is asynchronous code?</strong> Code that waits for data (fetch) without freezing the page.</li>
    <li><strong>Where can I see errors?</strong> In the browser's developer tools console (F12).</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep the browser console open (F12) while you develop.</p>
</div>