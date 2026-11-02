{{-- resources/views/learning/lessons/11-15-performance.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Most slowness comes from the data, the styles or the memory settings; fix those before buying hardware.
    Performance tuning is about finding the bottleneck and applying the right fix.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify performance bottlenecks</li>
    <li>Apply caching and indexing</li>
    <li>Tune JVM memory</li>
</ul>

<h2>Visual Guide: Performance Tuning Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Measure</div>
        <div style="padding: 8px; background: #fff;">find slow layer</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Cache</div>
        <div style="padding: 8px; background: #fff;">GeoWebCache</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Index</div>
        <div style="padding: 8px; background: #fff;">database + rasters</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Tune</div>
        <div style="padding: 8px; background: #fff;">JVM memory</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">tuning.sh</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            # Give the JVM enough memory (before startup)<br>
            export JAVA_OPTS="-Xms1g -Xmx4g"<br><br>
            # Keep database statistics current<br>
            VACUUM ANALYZE wards;<br><br>
            # Limit heavy WFS requests<br>
            &count=1000
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Speed-up checklist</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Cache with GeoWebCache</li>
            <li>Spatial indexes</li>
            <li>Scale ranges in styles</li>
            <li>Tiled GeoTIFF with overviews</li>
            <li>Limit WFS and WMS requests</li>
            <li>Disable unused services</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the four-step performance tuning workflow and the speed-up checklist.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the first thing to do?</strong> Measure: find which layer or request is slow.</li>
    <li><strong>How can the database help?</strong> Add GiST spatial indexes and keep statistics current.</li>
    <li><strong>How can styles help?</strong> Use scale ranges so heavy layers draw only at useful zoom levels.</li>
    <li><strong>How should rasters be prepared?</strong> Tiled GeoTIFF or COG with overviews.</li>
    <li><strong>How do I set memory?</strong> Use <code>-Xms</code> and <code>-Xmx</code> in <code>JAVA_OPTS</code>.</li>
    <li><strong>How do I limit heavy requests?</strong> Use the control-flow extension, WFS limits and WMS limits.</li>
    <li><strong>What should I cache?</strong> Static layers with GeoWebCache; add a CDN for public tiles.</li>
    <li><strong>What about unused services?</strong> Disable any service you do not publish.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Change one setting at a time and measure again, or you will not know what helped.</p>
</div>