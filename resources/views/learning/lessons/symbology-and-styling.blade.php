<p>
    Symbology controls how features look. Good styling makes patterns easy to read.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Choose the right renderer</li>
    <li>Style by category and by number</li>
    <li>Reuse styles</li>
</ul>

<h3>Main renderers</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Single Symbol</div>
        <div style="padding:15px; text-align:center;">
            <p>Every feature looks the same.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Categorized</div>
        <div style="padding:15px; text-align:center;">
            <p>One style per text value, e.g. land use or type.</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Graduated</div>
        <div style="padding:15px; text-align:center;">
            <p>A colour ramp for number ranges, e.g. population or area.</p>
        </div>
    </div>
    <div style="border:1px solid #6d28d9; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#6d28d9; color:white; padding:12px; font-weight:bold; text-align:center;">Rule-based</div>
        <div style="padding:15px; text-align:center;">
            <p>Styles driven by conditions you write.</p>
        </div>
    </div>
</div>

<ul>
    <li>Open Layer Properties, Symbology, or the Layer Styling panel (F7).</li>
    <li>Save a look as a .qml style file to reuse it on other layers.</li>
</ul>

<h3>Classification modes for Graduated</h3>
<ul>
    <li><strong>Equal Interval</strong> – same-size ranges; good for evenly spread data.</li>
    <li><strong>Quantile</strong> – the same number of features per class; good for comparing ranks.</li>
    <li><strong>Natural Breaks (Jenks)</strong> – groups similar values; good for most real-world data.</li>
    <li><strong>Standard Deviation</strong> – distance from the mean; good for spotting outliers.</li>
</ul>

<h3>Styling tips</h3>
<ul>
    <li>Use light-to-dark colour ramps for low-to-high values.</li>
    <li>Keep categories to a manageable number so colours stay distinct.</li>
    <li>Choose colour-blind-friendly palettes.</li>
    <li>Check that the legend still makes sense after styling.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Rule of thumb: text categories use Categorized; numbers use Graduated.
    </p>
</div>