<p>
    Selecting picks features for inspection, analysis or export. Selected features turn yellow on the map.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Select by click or area</li>
    <li>Select by expression</li>
    <li>Select by location</li>
    <li>Process only the selected features</li>
</ul>

<h3>Selection methods</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">By click or area</div>
        <div style="padding:15px; text-align:center;">
            <p>Select Features tool: rectangle, polygon, freehand or radius.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">By expression</div>
        <div style="padding:15px; text-align:center;">
            <p><code>Ctrl+F3</code>. Write a condition on field values.</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">By location</div>
        <div style="padding:15px; text-align:center;">
            <p>Vector &gt; Research Tools &gt; Select by Location, e.g. points inside a polygon.</p>
        </div>
    </div>
</div>

<h3>Expression examples</h3>
<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Select by Expression (Ctrl+F3)</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code>"population" &gt; 5000
-- selects Ward A (5400), Ward C (7800), Ward E (6100)
"population" &gt; 5000 AND "area_ha" &lt; 130
"ward" IN ('Ward A', 'Ward C')
"ward" LIKE 'Ward%'</code></pre>
</div>

<h3>Spatial relationships in Select by Location</h3>
<ul>
    <li>Intersect – touch or overlap the reference layer.</li>
    <li>Are within – lie completely inside the reference.</li>
    <li>Contain – fully contain the reference.</li>
    <li>Touch – share a boundary only.</li>
    <li>Disjoint – do not touch the reference at all.</li>
</ul>

<ul>
    <li>Deselect all with <code>Ctrl+Alt+A</code>.</li>
    <li>Many tools have Selected features only: tick it to process just your selection.</li>
    <li>After selecting: zoom to the selection, open the table, export it or run tools on it.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> A selection belongs to one layer; make sure the correct layer is active before selecting.
    </p>
</div>