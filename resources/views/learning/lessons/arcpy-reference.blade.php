{{-- resources/views/learning/lessons/15-8-arcpy.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    ArcPy is the Python package of ArcGIS Pro. It runs geoprocessing tools, reads and edits data and automates maps and layouts.
    It needs ArcGIS Pro (and a licence) and does not run on its own.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Set the workspace and run geoprocessing tools</li>
    <li>Read rows fast with <code>arcpy.da</code> cursors</li>
    <li>Find the right toolbox for a tool</li>
</ul>

<h2>Visual Guide: ArcPy Python Window Example</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 48%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Settings and tools</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            import arcpy<br><br>
            arcpy.env.workspace = "C:/gis/data.gdb"<br>
            arcpy.env.overwriteOutput = True<br><br>
            arcpy.analysis.Buffer("roads", "roads_buf", "50 Meters")
        </div>
    </div>
    <div style="width: 48%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Read rows</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            fields = ["name", "SHAPE@AREA"]<br><br>
            with arcpy.da.SearchCursor("parcels", fields) as cur:<br>
            &nbsp;&nbsp;for name, area in cur:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;print(name, area)
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Toolboxes:</strong> <code>arcpy.analysis</code>, <code>arcpy.management</code>, <code>arcpy.da</code>, <code>arcpy.mp</code><br>
    <strong>Rule of thumb:</strong> run a tool from the Geoprocessing pane first, then copy it as a Python snippet from History.
</div>

<p>
    The diagram separates two common ArcPy jobs: setting the workspace and running tools, and reading rows quickly with cursors.
</p>

<h2>Key Points (Q&amp;A)</h2>
<ul>
    <li><strong>What is ArcPy?</strong> The Python package of ArcGIS Pro; it does not run without ArcGIS Pro (and a licence).</li>
    <li><strong>How are tools grouped?</strong> By toolbox: <code>arcpy.analysis</code>, <code>arcpy.management</code> and so on.</li>
    <li><strong>Why set the workspace?</strong> Set <code>arcpy.env.workspace</code> once so you can use short layer names.</li>
    <li><strong>Why use <code>arcpy.da</code> cursors?</strong> They are much faster than the old <code>arcpy.SearchCursor</code> and support tokens like <code>SHAPE@AREA</code>, <code>SHAPE@XY</code> and <code>OID@</code>.</li>
    <li><strong>How do I find the right toolbox for a tool?</strong> Run the tool once in the Geoprocessing pane, open <strong>History</strong>, right-click the result and choose <em>Copy Python Command</em> — that gives you the exact <code>arcpy.&lt;toolbox&gt;.&lt;tool&gt;</code> call.</li>
    <li><strong>How do I make scripts repeatable?</strong> Set <code>arcpy.env.overwriteOutput = True</code> and wrap work in <code>try/except</code> with <code>arcpy.GetMessages()</code> for error details.</li>
    <li><strong>Can I automate maps and layouts?</strong> Yes — use the <code>arcpy.mp</code> module to open an <code>.aprx</code>, change layers, and export layouts to PDF or PNG.</li>
</ul>

<h2>Code Example: Buffer and Read Results</h2>
<pre style="background: #f7f7f7; border-left: 4px solid #04AA6D; padding: 10px; overflow-x: auto; font-size: 12px;"><code>import arcpy

# 1. Set environment
arcpy.env.workspace = "C:/gis/data.gdb"
arcpy.env.overwriteOutput = True

try:
    # 2. Run a geoprocessing tool (from the analysis toolbox)
    arcpy.analysis.Buffer(
        in_features="roads",
        out_feature_class="roads_buf",
        buffer_distance_or_field="50 Meters"
    )

    # 3. Read the output fast with a da cursor
    fields = ["name", "SHAPE@AREA"]
    with arcpy.da.SearchCursor("roads_buf", fields) as cur:
        for name, area in cur:
            print(name, area)

except arcpy.ExecuteError:
    print(arcpy.GetMessages(2))
except Exception as e:
    print(e)
</code></pre>

<h2>Quick Reference</h2>
<table style="width: 100%; border-collapse: collapse; font-size: 12px; margin-bottom: 20px;">
    <thead>
        <tr style="background: #282A35; color: #fff;">
            <th style="padding: 6px; text-align: left;">Toolbox</th>
            <th style="padding: 6px; text-align: left;">Use for</th>
            <th style="padding: 6px; text-align: left;">Example</th>
        </tr>
    </thead>
    <tbody>
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 6px;"><code>arcpy.analysis</code></td>
            <td style="padding: 6px;">Overlay &amp; proximity</td>
            <td style="padding: 6px;"><code>arcpy.analysis.Buffer(...)</code></td>
        </tr>
        <tr style="border-bottom: 1px solid #ddd; background: #fafafa;">
            <td style="padding: 6px;"><code>arcpy.management</code></td>
            <td style="padding: 6px;">Data management</td>
            <td style="padding: 6px;"><code>arcpy.management.Project(...)</code></td>
        </tr>
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 6px;"><code>arcpy.da</code></td>
            <td style="padding: 6px;">Fast cursors</td>
            <td style="padding: 6px;"><code>arcpy.da.UpdateCursor(...)</code></td>
        </tr>
        <tr style="background: #fafafa;">
            <td style="padding: 6px;"><code>arcpy.mp</code></td>
            <td style="padding: 6px;">Maps &amp; layouts</td>
            <td style="padding: 6px;"><code>arcpy.mp.ArcGISProject(...)</code></td>
        </tr>
    </tbody>
</table>

<div style="background: #fff8e1; border-left: 4px solid #ffb300; padding: 10px; border-radius: 4px; font-size: 12px;">
    <strong>⚠️ Note:</strong> ArcPy is bundled with ArcGIS Pro's Python environment (typically <code>arcgispro-py3</code>). Run scripts from the ArcGIS Pro <em>Python window</em>, a <em>notebook</em>, or the <em>Python Command Prompt</em> — not from a plain system Python install.
</div>

<h2>Exercise</h2>
<ol>
    <li>Set the workspace to a file geodatabase and turn on <code>overwriteOutput</code>.</li>
    <li>Buffer a roads layer by 100 meters.</li>
    <li>Use <code>arcpy.da.SearchCursor</code> to print the name and area of each buffered feature.</li>
    <li>Bonus: open an <code>.aprx</code> with <code>arcpy.mp</code> and export its first layout to PDF.</li>
</ol>