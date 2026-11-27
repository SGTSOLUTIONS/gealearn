<p>
    Intersection keeps only the areas where two layers overlap and combines the attributes of both.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Explain what Intersection keeps</li>
    <li>Know the attributes of the output</li>
    <li>Predict the output geometry type</li>
    <li>Update area fields afterwards</li>
</ul>

<h3>Layers and output</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Layer A</div>
        <div style="padding:15px; text-align:center;">
            <p>Two zones, A1 and A2.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Layer B</div>
        <div style="padding:15px; text-align:center;">
            <p>The layer it overlaps.</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Output</div>
        <div style="padding:15px; text-align:center;">
            <p>Overlap only; each piece carries attributes of both layers.</p>
        </div>
    </div>
</div>

<h3>What Intersection does</h3>
<div style="border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">Question</th>
            <th style="padding:10px; text-align:left;">Answer</th>
        </tr>
        <tr><td style="padding:10px;">What is kept?</td><td style="padding:10px;">Only the areas where two layers overlap</td></tr>
        <tr><td style="padding:10px;">Outside the overlap?</td><td style="padding:10px;">Discarded</td></tr>
        <tr><td style="padding:10px;">Output attributes?</td><td style="padding:10px;">From both layers (unlike Clip)</td></tr>
        <tr><td style="padding:10px;">Output geometry type?</td><td style="padding:10px;">The simpler input type: line with polygon gives lines</td></tr>
        <tr><td style="padding:10px;">Example</td><td style="padding:10px;">Land use and a flood zone give the land use inside the flood zone</td></tr>
    </table>
</div>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> After an intersection recalculate area fields – the copied values still describe the old shapes.
    </p>
</div>