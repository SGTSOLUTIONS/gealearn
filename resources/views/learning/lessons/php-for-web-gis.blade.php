{{-- resources/views/learning/lessons/10-7-php-for-web-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PHP runs on the server: it reads the database and sends data to the map as JSON.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Write a PHP script that queries PostGIS</li>
    <li>Return GeoJSON to the browser</li>
    <li>Prevent SQL injection</li>
</ul>

<h2>Visual Guide: One Request Through PHP</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 12px; border-radius: 6px; font-family: monospace; font-size: 10px; line-height: 1.5; text-align: left; overflow-x: auto;">
        <span style="color: #569cd6;">wards.php</span><br><br>
        <span style="color: #569cd6;">&lt;?php</span><br>
        <span style="color: #9cdcfe;">$pdo</span> = <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">PDO</span>(<span style="color: #ce9178;">'pgsql:dbname=gisdb'</span>, <span style="color: #9cdcfe;">$u</span>, <span style="color: #9cdcfe;">$p</span>);<br>
        <span style="color: #9cdcfe;">$st</span> = <span style="color: #9cdcfe;">$pdo</span>-&gt;<span style="color: #dcdcaa;">query</span>(<br>
        &nbsp;&nbsp;<span style="color: #ce9178;">"SELECT name, ST_AsGeoJSON(geom) AS g</span><br>
        &nbsp;&nbsp;<span style="color: #ce9178;">FROM wards"</span>);<br>
        <span style="color: #dcdcaa;">header</span>(<span style="color: #ce9178;">'Content-Type: application/json'</span>);<br>
        <span style="color: #569cd6;">echo</span> <span style="color: #dcdcaa;">json_encode</span>(<span style="color: #9cdcfe;">$st</span>-&gt;<span style="color: #dcdcaa;">fetchAll</span>());
    </div>

    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center; align-items: center; background: #f4f7f6; padding: 10px; border-radius: 6px;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70;">One request through PHP</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Request</strong><br><span style="color: #666;">/wards.php</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">PHP script</strong><br><span style="color: #666;">connects to the database</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 8px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">PostGIS query</strong><br><span style="color: #666;">ST_AsGeoJSON</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 8px; text-align: center;">
            <strong style="color: #005a70;">JSON response</strong><br><span style="color: #666;">sent to the browser</span>
        </div>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 8px;">PHP never runs in the browser</div>
    </div>
</div>

<p>
    The diagram shows one request through PHP. PHP never runs in the browser; it runs on the server. Use PDO to connect to PostgreSQL. Send the header Content-Type: application/json and call json_encode(). Always use prepared statements when the query uses user input.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is PHP used for here?</strong> A server script that queries the database and returns data.</li>
    <li><strong>How does PHP connect to PostgreSQL?</strong> With PDO: new PDO("pgsql:...").</li>
    <li><strong>How do I return JSON?</strong> Send the header Content-Type: application/json and call json_encode().</li>
    <li><strong>How do I get geometry as GeoJSON?</strong> ST_AsGeoJSON(geom) in the SQL query.</li>
    <li><strong>How do I stop SQL injection?</strong> Use prepared statements with placeholders; never paste user input into SQL.</li>
    <li><strong>Do I need PHP?</strong> No. Node.js, Python, or Java servers do the same job.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Always use prepared statements when the query uses user input.</p>
</div>