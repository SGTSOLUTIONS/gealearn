{{-- resources/views/learning/lessons/8-23-arcpy.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    ArcPy is the Python package of ArcGIS Pro for running tools and editing data.
    It provides access to all of Esri's geoprocessing tools.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Set the workspace</li>
    <li>Run a geoprocessing tool</li>
    <li>Read and update rows with cursors</li>
</ul>

<h2>Visual Guide: ArcPy Toolboxes</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 55%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">arcpy_script.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            import arcpy<br>
            arcpy.env.workspace = r"C:\data\city.gdb"<br>
            arcpy.analysis.Buffer("roads", "roads_buf", "50 Meters")<br>
            print(arcpy.management.GetCount("roads_buf"))
        </div>
    </div>
    <div style="width: 40%; display: flex; flex-direction: column; gap: 8px; font-size: 11px;">
        <div style="border: 1px solid #ccc; border-radius: 4px; padding: 6px; background: #fff; text-align: center;"><strong>analysis</strong><br>buffer, overlay</div>
        <div style="border: 1px solid #ccc; border-radius: 4px; padding: 6px; background: #fff; text-align: center;"><strong>management</strong><br>tables, projections</div>
        <div style="border: 1px solid #ccc; border-radius: 4px; padding: 6px; background: #fff; text-align: center;"><strong>conversion</strong><br>format changes</div>
        <div style="border: 1px solid #ccc; border-radius: 4px; padding: 6px; background: #fff; text-align: center;"><strong>da cursors</strong><br>read / update rows</div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px; font-weight: bold; color: #d9534f;">
    Needs ArcGIS Pro (licensed) &bull; arcpy ships with it
</div>

<p>
    The diagram shows an ArcPy script and the four main toolboxes available for analysis, management, conversion, and cursor access.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is ArcPy?</strong> Esri's Python package. It needs ArcGIS Pro.</li>
    <li><strong>How do I set the data folder?</strong> <code>arcpy.env.workspace = r"C:\data\city.gdb"</code>.</li>
    <li><strong>How do I run a tool?</strong> <code>arcpy.analysis.Buffer(in, out, "50 Meters")</code>.</li>
    <li><strong>How are tools organised?</strong> In toolboxes such as analysis, management and conversion.</li>
    <li><strong>How do I read rows?</strong> <code>arcpy.da.SearchCursor</code> (read), UpdateCursor (edit), InsertCursor (add).</li>
    <li><strong>How do I allow overwriting?</strong> <code>arcpy.env.overwriteOutput = True</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Check <code>arcpy.GetMessages()</code> after a tool to see warnings.</p>
</div>