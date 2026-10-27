{{-- resources/views/learning/lessons/5-14-area-distance.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GIS can calculate lengths, areas and perimeters for every feature and store them as attributes.
    This is done using the Field Calculator.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Calculate area and length with Field Calculator</li>
    <li>Convert units (hectares, kilometres)</li>
    <li>Add geometry attributes without editing the source</li>
</ul>

<h2>Visual Guide: Area and Distance Calculation</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Calculated fields</strong>
        <table style="width: 100%; font-size: 11px; border-collapse: collapse; margin-top: 8px;">
            <thead>
                <tr style="background: #282A35; color: #fff;">
                    <th style="padding: 4px; border: 1px solid #ddd;">id</th>
                    <th style="padding: 4px; border: 1px solid #ddd;">name</th>
                    <th style="padding: 4px; border: 1px solid #ddd;">area_ha</th>
                    <th style="padding: 4px; border: 1px solid #ddd;">perim_km</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">1</td><td style="padding: 4px; border: 1px solid #ddd;">Plot A</td><td style="padding: 4px; border: 1px solid #ddd;">8.5</td><td style="padding: 4px; border: 1px solid #ddd;">1.2</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">2</td><td style="padding: 4px; border: 1px solid #ddd;">Plot B</td><td style="padding: 4px; border: 1px solid #ddd;">12.3</td><td style="padding: 4px; border: 1px solid #ddd;">1.6</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">3</td><td style="padding: 4px; border: 1px solid #ddd;">Plot C</td><td style="padding: 4px; border: 1px solid #ddd;">5.1</td><td style="padding: 4px; border: 1px solid #ddd;">0.9</td></tr>
            </tbody>
        </table>
    </div>
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Field Calculator expressions</strong>
        <div style="background: #282A35; color: #fff; padding: 10px; border-radius: 4px; font-family: Consolas, monospace; font-size: 12px; margin-top: 8px; text-align: left;">
            $area / 10000<br>
            $perimeter / 1000
        </div>
        <div style="margin-top: 8px; color: #666; text-align: left; font-size: 11px;">
            <strong>$area</strong> follows the project ellipsoid<br>
            <strong>$length</strong> gives the line length<br>
            <strong>$perimeter</strong> gives the boundary length
        </div>
    </div>
</div>

<p>
    The diagram shows how calculated fields are stored in the attribute table. The Field Calculator expressions convert square metres to hectares and metres to kilometres.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do I calculate area and length?</strong> Field Calculator: <code>$area</code>, <code>$length</code> and <code>$perimeter</code>.</li>
    <li><strong>How do I get hectares or kilometres?</strong> <code>$area / 10000</code> gives hectares; <code>$length / 1000</code> gives kilometres.</li>
    <li><strong>$area or area($geometry)?</strong> <code>$area</code> follows the project ellipsoid; <code>area($geometry)</code> is flat, in CRS units.</li>
    <li><strong>Where are ellipsoid and units set?</strong> Project &gt; Properties &gt; General.</li>
    <li><strong>How do I add values without editing the source?</strong> Add Geometry Attributes writes them into a new layer.</li>
    <li><strong>How should the fields be named?</strong> With their unit, e.g. <code>area_ha</code> or <code>length_km</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Name fields with their unit, for example <code>area_ha</code> or <code>length_km</code>.</p>
</div>