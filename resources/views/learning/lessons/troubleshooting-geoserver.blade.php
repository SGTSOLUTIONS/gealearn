{{-- resources/views/learning/lessons/11-18-troubleshooting.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Most GeoServer problems come from names, CRS, connections or CORS; test in a fixed order to find them quickly.
    A systematic approach saves time and frustration.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Follow a troubleshooting checklist</li>
    <li>Diagnose common issues</li>
    <li>Read logs effectively</li>
</ul>

<h2>Visual Guide: Troubleshooting Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Symptom</div>
        <div style="padding: 8px; background: #fff;">what do you see?</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Layer Preview</div>
        <div style="padding: 8px; background: #fff;">does it work?</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Check URL</div>
        <div style="padding: 8px; background: #fff;">names, CRS, bbox</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Read logs</div>
        <div style="padding: 8px; background: #fff;">geoserver.log</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">checklist.txt</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            blank map &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; check CRS, bbox, style scale<br>
            layer 404 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; use workspace:layer name<br>
            CORS error &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; enable CORS on server / proxy<br>
            DB error &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; host, port, user, pg_hba.conf<br>
            wrong place &nbsp;&nbsp;&nbsp;&nbsp;-&gt; declared CRS and axis order<br>
            no style &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; default style, SLD errors<br>
            slow map &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; index, cache, scale, memory
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Quick checks</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Does Layer Preview work?</li>
            <li>Does GetCapabilities list the layer?</li>
            <li>What does the log say?</li>
            <li>What does the Network tab show?</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the four-step troubleshooting workflow and the quick checks to perform for common symptoms.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>The layer shows blank.</strong> Check CRS, bounding box and the scale ranges in the style.</li>
    <li><strong>Error 404 or layer not found.</strong> Check the <code>workspace:layer</code> name and the workspace in the URL.</li>
    <li><strong>The browser shows a CORS error.</strong> Enable CORS on GeoServer or the reverse proxy.</li>
    <li><strong>Cannot connect to PostGIS.</strong> Check host, port, credentials, pg_hba.conf and the firewall.</li>
    <li><strong>Features appear in the wrong place.</strong> Check the declared CRS and the axis order.</li>
    <li><strong>The style is not applied.</strong> Check the default style, SLD validation errors and attribute names.</li>
    <li><strong>The map is slow.</strong> Check indexes, scale rules, caching and JVM memory.</li>
    <li><strong>Where are the logs?</strong> <code>logs/geoserver.log</code> in the data directory, or About &gt; Status &gt; GeoServer Logs.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Read the log first: the error message usually names the exact layer, store or file.</p>
</div>