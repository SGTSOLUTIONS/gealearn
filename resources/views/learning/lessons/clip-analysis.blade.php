<p>
    Clip cuts the input layer to the shape of a mask layer, like a cookie cutter.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Explain input and mask layers</li>
    <li>Know whose attributes are kept</li>
    <li>Clip vector and raster data</li>
    <li>Clip data early for speed</li>
</ul>

<h3>Clip inputs and output</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Input layer</div>
        <div style="padding:15px; text-align:center;">
            <p>The layer you cut.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Clip layer (mask)</div>
        <div style="padding:15px; text-align:center;">
            <p>The cookie-cutter shape.</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Output</div>
        <div style="padding:15px; text-align:center;">
            <p>Only the part inside the mask is kept.</p>
        </div>
    </div>
</div>

<h3>How Clip behaves</h3>
<ul>
    <li>Only the input layer's attributes are kept; the mask's attributes are discarded.</li>
    <li>Features crossing the mask edge are physically cut, not just selected.</li>
    <li>The raster version is Raster &gt; Extraction &gt; Clip Raster by Mask Layer.</li>
    <li>Smaller data makes every later tool run faster.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Clip data to your study area early – every later tool runs faster.
    </p>
</div>