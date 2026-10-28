{{-- resources/views/learning/lessons/7-13-3d-terrain.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    3D terrain visualisation drapes imagery or maps over a DEM to show relief realistically.
    It helps communicate the shape of the land and the impact of new developments.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how terrain is drawn in 3D</li>
    <li>Use vertical exaggeration</li>
    <li>Configure terrain in QGIS</li>
</ul>

<h2>Visual Guide: Vertical Exaggeration</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Vertical exaggeration 1x</strong>
        <div style="height: 100px; position: relative; margin-top: 8px; background: #f9f9f9;">
            <div style="position: absolute; bottom: 10px; left: 10%; width: 80%; height: 40px; background: #a5d6a7; clip-path: polygon(0 100%, 30% 0, 70% 0, 100% 100%); border: 1px solid #4caf50;"></div>
        </div>
    </div>
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Vertical exaggeration 3x</strong>
        <div style="height: 100px; position: relative; margin-top: 8px; background: #f9f9f9;">
            <div style="position: absolute; bottom: 10px; left: 10%; width: 80%; height: 80px; background: #a5d6a7; clip-path: polygon(0 100%, 30% 0, 70% 0, 100% 100%); border: 1px solid #4caf50;"></div>
        </div>
        <div style="color: #d9534f; font-size: 10px; margin-top: 5px;">Exaggeration distorts slopes: state it on the map</div>
    </div>
</div>

<p>
    The diagram shows how vertical exaggeration multiplies the height of the terrain, making relief easier to see but distorting the real slopes.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How is terrain drawn in 3D?</strong> A DEM gives the surface and an image or map is draped over it as a texture.</li>
    <li><strong>What is vertical exaggeration?</strong> A multiplier on heights (e.g. 2x) that makes relief easier to see.</li>
    <li><strong>What is the downside?</strong> It distorts real slopes, so state the exaggeration on the map.</li>
    <li><strong>How do I set terrain in QGIS?</strong> In the 3D view open Configure and set the terrain to your DEM.</li>
    <li><strong>Which layers can be draped?</strong> Aerial imagery, topographic maps and vector lines.</li>
    <li><strong>How do I keep navigation smooth?</strong> Lower the terrain resolution or tile size.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> A small exaggeration (1.5&ndash;2x) usually reads better than a large one.</p>
</div>  