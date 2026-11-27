<p>
    Layer management keeps a project organised: naming, grouping, ordering and
    exporting. Clear names and groups make a project understandable to others and
    to yourself when you return to it weeks later.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Rename and group layers</li>
    <li>Use the right-click menu</li>
    <li>Export layers to new files</li>
    <li>Know what Remove Layer does</li>
</ul>

<h3>The right-click menu</h3>
<ul>
    <li><strong>Zoom to Layer(s)</strong> – jump to the extent of the layer.</li>
    <li><strong>Open Attribute Table</strong> – view the layer data.</li>
    <li><strong>Filter</strong> – show only some features.</li>
    <li><strong>Rename Layer</strong> – give a clear name (also <code>F2</code>).</li>
    <li><strong>Duplicate Layer / Move to Top</strong> – copy or reorder layers.</li>
    <li><strong>Export &gt; Save Features As</strong> – write a new file to change format or CRS.</li>
    <li><strong>Remove Layer</strong> – takes it out of the project only; the file stays on disk.</li>
    <li><strong>Properties</strong> – Source, Symbology, Labels, Fields.</li>
</ul>

<h3>Example layer organisation</h3>
<div style="background:#1e293b; color:#fff; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#29384d; padding:10px 15px; font-size:13px;">Layers panel</div>
    <pre style="padding:16px; margin:0; white-space:pre-wrap; font-size:13px; line-height:1.9; color:#f1f5f9;"><code>Base data (group)
  Roads
  Rivers
  Wards
Analysis (group)
  Buffer_500m
  Selected_wards
Temp scratch  &lt;- memory layer, save it!</code></pre>
</div>

<ul>
    <li>Group related layers with right-click &gt; Group Selected.</li>
    <li>Temporary scratch layers (memory icon) vanish unless you save them: use Export &gt; Make Permanent or Save Features As.</li>
    <li>Use short, clear names such as <code>Wards_2024</code>, not <code>layer1</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Double-click any layer to open its Properties:
        Source, Symbology, Labels and Fields all live in one place.
    </p>
</div>