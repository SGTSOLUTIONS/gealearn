{{-- resources/views/learning/lessons/8-27-custom-tools.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A custom tool wraps your code in a dialog so people who do not code can use it.
    It turns a script into a shareable, reusable asset.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the structure of a custom tool</li>
    <li>Identify the main tool formats</li>
    <li>Document and test the tool</li>
</ul>

<h2>Visual Guide: Tool Dialog and Code</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; border: 2px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <div style="background: #e0e0e0; padding: 6px; border-radius: 4px 4px 0 0; font-weight: bold; font-size: 11px; margin-bottom: 10px;">Tool dialog: Buffer layer</div>
        <div style="margin-bottom: 8px;">
            <label style="font-size: 11px; font-weight: bold; color: #282A35;">Input layer</label>
            <div style="border: 1px solid #ccc; border-radius: 4px; padding: 4px 8px; font-size: 11px; color: #666;">roads</div>
        </div>
        <div style="margin-bottom: 8px;">
            <label style="font-size: 11px; font-weight: bold; color: #282A35;">Distance</label>
            <div style="border: 1px solid #ccc; border-radius: 4px; padding: 4px 8px; font-size: 11px; color: #666;">50</div>
        </div>
        <div style="margin-bottom: 10px;">
            <label style="font-size: 11px; font-weight: bold; color: #282A35;">Output</label>
            <div style="border: 1px solid #ccc; border-radius: 4px; padding: 4px 8px; font-size: 11px; color: #666;">roads_buf.gpkg</div>
        </div>
        <div style="text-align: right;">
            <div style="background: #04AA6D; color: #fff; padding: 6px 15px; border-radius: 4px; display: inline-block; font-weight: bold; font-size: 12px;">Run</div>
        </div>
    </div>
    <div style="width: 10%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #FF9800; font-weight: bold;">calls<br>&rarr;</div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">your function</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 12px; text-align: left;">
            def buffer_layer(layer, dist):<br>
            &nbsp;&nbsp;&nbsp;&nbsp;... # your code<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return result
        </div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="width: 48%; border: 1px solid #ccc; padding: 6px; border-radius: 4px; background: #f9f9f9;">QGIS script / plugin</div>
    <div style="width: 48%; border: 1px solid #ccc; padding: 6px; border-radius: 4px; background: #f9f9f9;">ArcGIS .pyt toolbox</div>
    <div style="width: 48%; border: 1px solid #ccc; padding: 6px; border-radius: 4px; background: #f9f9f9;">Command line (argparse)</div>
    <div style="width: 48%; border: 1px solid #ccc; padding: 6px; border-radius: 4px; background: #f9f9f9;">Web app (Flask)</div>
</div>

<p>
    The diagram shows a custom tool dialog with inputs and a Run button, and the function it calls behind the scenes.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a custom GIS tool?</strong> A script wrapped with inputs and a dialog so others can use it.</li>
    <li><strong>Which forms can it take?</strong> QGIS Processing script or plugin, ArcGIS Python toolbox (.pyt), command-line tool or web app.</li>
    <li><strong>How do I make a QGIS script?</strong> Processing Toolbox, Create New Script (a QgsProcessingAlgorithm).</li>
    <li><strong>What parameters are typical?</strong> An input layer, a number such as distance, and an output file.</li>
    <li><strong>What should I document?</strong> Help text, default values and units.</li>
    <li><strong>How do I test it?</strong> On small data first, including bad input.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Write the function first; add the dialog last.</p>
</div>