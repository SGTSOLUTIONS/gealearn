{{-- resources/views/learning/lessons/10-2-client-server-architecture.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The client (browser) asks for data; the server finds it and sends the answer back.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the three tiers of a Web GIS</li>
    <li>Know what a request and response are</li>
    <li>Understand why the database is separated from the browser</li>
</ul>

<h2>Visual Guide: Three Tiers of a Web GIS</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 12px; border-radius: 6px; font-family: monospace; font-size: 10px; line-height: 1.5; text-align: left; overflow-x: auto;">
        <span style="color: #569cd6;">client.js</span><br><br>
        <span style="color: #6a9955;">// the browser asks, the server answers</span><br>
        <span style="color: #dcdcaa;">fetch</span>(<span style="color: #ce9178;">'/api/wards.php'</span>)<br>
        &nbsp;&nbsp;.<span style="color: #dcdcaa;">then</span>(r =&gt; r.<span style="color: #dcdcaa;">json</span>())<br>
        &nbsp;&nbsp;.<span style="color: #dcdcaa;">then</span>(data =&gt; console.<span style="color: #dcdcaa;">log</span>(data));
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center; align-items: center; background: #f4f7f6; padding: 10px; border-radius: 6px;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70;">Three tiers of a Web GIS</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Client (browser)</strong><br><span style="color: #666;">HTML, CSS, JavaScript</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Web server</strong><br><span style="color: #666;">Apache or Nginx, PHP</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px; text-align: center;">
            <strong style="color: #005a70;">Spatial database</strong><br><span style="color: #666;">PostGIS</span>
        </div>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 8px;">request goes down, response comes back</div>
    </div>
</div>

<p>
    The diagram shows the three tiers. The client asks for data, the web server finds it, and the spatial database holds it. Never put database passwords in browser code; keep them on the server. The browser never talks to the database directly.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a client?</strong> The program that asks for data, here the web browser.</li>
    <li><strong>What is a server?</strong> The computer or program that answers requests and holds the data.</li>
    <li><strong>What is a request?</strong> A message from the client, such as GET /api/wards.</li>
    <li><strong>What is a response?</strong> The server's answer: data plus a status code such as 200.</li>
    <li><strong>Why separate the database?</strong> Security and speed: the browser never talks to the database directly.</li>
    <li><strong>What is a map server?</strong> Software such as GeoServer that publishes map images and features (Module 11).</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Never put database passwords in browser code; keep them on the server.</p>
</div>