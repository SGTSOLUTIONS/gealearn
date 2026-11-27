<p>
    A spatial query selects features by where they are in relation to another layer.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Explain the five spatial relations</li>
    <li>Use Select by Location</li>
    <li>Choose how the selection is applied</li>
    <li>Combine spatial and attribute queries</li>
</ul>

<h3>Spatial relations</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Intersects</div>
        <div style="padding:15px; text-align:center;">
            <p>Shares any space.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Within</div>
        <div style="padding:15px; text-align:center;">
            <p>Fully inside the reference layer.</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Contains</div>
        <div style="padding:15px; text-align:center;">
            <p>Fully surrounds the reference.</p>
        </div>
    </div>
</div>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:0 0 20px 0;">
    <div style="border:1px solid #6d28d9; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#6d28d9; color:white; padding:12px; font-weight:bold; text-align:center;">Touches</div>
        <div style="padding:15px; text-align:center;">
            <p>Edges meet only.</p>
        </div>
    </div>
    <div style="border:1px solid #475569; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#475569; color:white; padding:12px; font-weight:bold; text-align:center;">Disjoint</div>
        <div style="padding:15px; text-align:center;">
            <p>No shared space.</p>
        </div>
    </div>
</div>

<h3>Select by Location</h3>
<ul>
    <li>Open Vector &gt; Research Tools &gt; Select by Location.</li>
    <li>Apply the result as a new selection, add to, remove from, or select within the current selection.</li>
    <li>Combine with attribute queries: select by attribute first, then narrow the result by location.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Within needs the whole feature inside; intersect needs only a touch of overlap.
    </p>
</div>