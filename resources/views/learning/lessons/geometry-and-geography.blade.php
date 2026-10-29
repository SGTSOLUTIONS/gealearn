{{-- resources/views/learning/lessons/9-19-geometry-and-geography.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PostGIS has two spatial column types: geometry (flat plane) and geography (curved earth).
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the difference between geometry and geography</li>
    <li>Choose the right type for your area</li>
    <li>Convert between the two</li>
</ul>

<h2>Visual Guide: Geometry vs Geography</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 45%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Geometry</div>
        <div style="padding: 6px; background: #fff;">Flat plane, very many functions, fast, SRID units</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 45%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Geography</div>
        <div style="padding: 6px; background: #fff;">Curved earth, fewer functions, slower, metres</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; City work &rarr; Worldwide distances &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Distance on 4326 geometry is in degrees</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">geom::geography</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">geog::geometry</div>
</div>

<p>
    The diagram shows the difference. Geometry works on a flat plane; geography works on the earth's curved surface. Geometry uses the SRID's units (degrees for 4326, metres for UTM); geography returns metres. Choose by the size of your area: geometry in a local projected CRS for city work, geography for worldwide distances.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the difference?</strong> Geometry works on a flat plane; geography works on the earth's curved surface.</li>
    <li><strong>Which units are used?</strong> Geometry uses the SRID's units (degrees for 4326, metres for UTM); geography returns metres.</li>
    <li><strong>Which suits city work?</strong> Geometry in a local projected CRS.</li>
    <li><strong>Which suits worldwide distances?</strong> Geography.</li>
    <li><strong>How do I convert?</strong> geom::geography and geog::geometry.</li>
    <li><strong>Which SRID does geography use?</strong> 4326 (lon/lat) by default.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Distance on 4326 geometry is in degrees: transform or cast to geography first.</p>
</div>