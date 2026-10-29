{{-- resources/views/learning/lessons/11-13-tile-caching.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoWebCache is built into GeoServer; it stores rendered tiles so repeat requests skip the drawing step.
    Proper cache management is key to fast map performance.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how GeoWebCache works</li>
    <li>Seed and truncate tiles</li>
    <li>Manage disk quota</li>
</ul>

<h2>Visual Guide: Tile Caching Flow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Tile request</div>
        <div style="padding: 8px; background: #fff;">from a client</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">In cache?</div>
        <div style="padding: 8px; background: #fff;">check the disk</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Yes</div>
        <div style="padding: 8px; background: #fff;">send stored tile</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">No</div>
        <div style="padding: 8px; background: #fff;">render and save</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">seed_settings.txt</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            # Tile Caching > Tile Layers > Seed/Truncate<br>
            Type &nbsp;&nbsp;&nbsp;&nbsp; Seed<br>
            Gridset &nbsp;&nbsp; EPSG:900913<br>
            Format &nbsp;&nbsp; image/png<br>
            Zoom start 0<br>
            Zoom stop 12<br>
            Threads &nbsp;&nbsp; 2<br><br>
            # Use the cache from WMS<br>
            &tiled=true
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Cache tasks</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Seed: pre-build tiles</li>
            <li>Reseed: refresh tiles</li>
            <li>Truncate: delete tiles</li>
            <li>Disk quota: limit space</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the tile caching decision flow and the main cache management tasks.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is GeoWebCache?</strong> The tile cache built into GeoServer.</li>
    <li><strong>Where do I set it up?</strong> Tile Caching &gt; Tile Layers; each layer can be cached.</li>
    <li><strong>What is seeding?</strong> Pre-generating tiles for chosen zoom levels and areas.</li>
    <li><strong>What is truncating?</strong> Deleting cached tiles so they are rebuilt from fresh data.</li>
    <li><strong>Which gridsets and formats?</strong> EPSG:4326 and EPSG:900913; PNG and JPEG.</li>
    <li><strong>How do WMS requests use it?</strong> Add <code>tiled=true</code> and use the cache's tile grid and size.</li>
    <li><strong>How do I limit disk use?</strong> Set a limit under Tile Caching &gt; Disk Quota.</li>
    <li><strong>Which layers to cache?</strong> Stable background layers, not fast-changing data.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Seed low zoom levels only; high zoom levels create huge numbers of tiles.</p>
</div>