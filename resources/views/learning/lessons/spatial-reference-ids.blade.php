{{-- resources/views/learning/lessons/9-20-spatial-reference-ids.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    An SRID is the number that tells PostGIS which coordinate system a geometry uses.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what an SRID is</li>
    <li>Know common SRIDs</li>
    <li>Distinguish SetSRID from Transform</li>
</ul>

<h2>Visual Guide: Common SRIDs</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">4326</div>
        <div style="padding: 6px; background: #fff;">WGS 84, lon/lat degrees</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">3857</div>
        <div style="padding: 6px; background: #fff;">Web Mercator, web maps</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">32644</div>
        <div style="padding: 6px; background: #fff;">UTM zone 44N, metres</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">spatial_ref_sys</div>
        <div style="padding: 6px; background: #fff;">table listing all SRIDs</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Global &rarr; Web &rarr; Local &rarr; Reference &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">SRID usually equals the EPSG code</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ST_SetSRID only labels</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ST_Transform changes coordinates</div>
</div>

<p>
    The diagram shows common SRIDs. SRIDs are stored in the spatial_ref_sys table. Never use SetSRID to reproject: it only relabels the data. ST_Transform changes the coordinates. If SRIDs are mixed, functions raise an error; transform one layer first.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is an SRID?</strong> A number (usually the EPSG code) naming the CRS of a geometry.</li>
    <li><strong>Where are SRIDs stored?</strong> In the spatial_ref_sys table.</li>
    <li><strong>SetSRID or Transform?</strong> ST_SetSRID only changes the label; ST_Transform changes the coordinates.</li>
    <li><strong>How do I check an SRID?</strong> ST_SRID(geom) or the geometry_columns view.</li>
    <li><strong>What if SRIDs are mixed?</strong> Functions raise an error; transform one layer first.</li>
    <li><strong>What does SRID 0 mean?</strong> No SRID is set; fix it with ST_SetSRID.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Never use SetSRID to reproject: it only relabels the data.</p>
</div>