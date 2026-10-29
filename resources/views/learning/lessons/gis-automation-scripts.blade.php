{{-- resources/views/learning/lessons/8-24-automation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    An automation script wraps a whole workflow so it runs with one command.
    It is the bridge between writing small snippets and building production tools.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Structure a script with a main function</li>
    <li>Use parameters and logging</li>
    <li>Run scripts automatically</li>
</ul>

<h2>Visual Guide: Script Structure and Flow</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 55%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">auto_buffer.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            def main(in_path, out_path, dist):<br>
            &nbsp;&nbsp;&nbsp;&nbsp;gdf = gpd.read_file(in_path)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;gdf["geometry"] = gdf.buffer(dist)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;gdf.to_file(out_path)<br><br>
            if __name__ == "__main__":<br>
            &nbsp;&nbsp;&nbsp;&nbsp;main("roads.gpkg", "roads_buf.gpkg", 50)
        </div>
    </div>
    <div style="width: 40%; display: flex; flex-direction: column; align-items: center; justify-content: center; font-size: 11px;">
        <div style="border: 1px solid #ccc; padding: 6px 12px; border-radius: 4px; background: #e3f2fd; margin-bottom: 5px; width: 80%; text-align: center;"><strong>Inputs</strong><br>roads.gpkg, 50</div>
        <div style="font-size: 20px; color: #FF9800;">&darr;</div>
        <div style="background: #282A35; color: #fff; padding: 8px; border-radius: 4px; margin-bottom: 5px; width: 80%; text-align: center;"><strong>main()</strong><br>buffer</div>
        <div style="font-size: 20px; color: #FF9800;">&darr;</div>
        <div style="border: 1px solid #04AA6D; padding: 6px 12px; border-radius: 4px; background: #e8f5e9; width: 80%; text-align: center; margin-bottom: 5px;"><strong>Output file</strong></div>
        <div style="border: 1px solid #FF9800; padding: 6px 12px; border-radius: 4px; background: #fff3cd; width: 80%; text-align: center;"><strong>Log file</strong></div>
    </div>
</div>
<div style="display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="width: 30%; border: 1px solid #ccc; padding: 5px; border-radius: 4px; background: #f9f9f9;">parameters</div>
    <div style="width: 30%; border: 1px solid #ccc; padding: 5px; border-radius: 4px; background: #f9f9f9;">read</div>
    <div style="width: 30%; border: 1px solid #ccc; padding: 5px; border-radius: 4px; background: #f9f9f9;">process</div>
    <div style="width: 30%; border: 1px solid #ccc; padding: 5px; border-radius: 4px; background: #f9f9f9;">write</div>
    <div style="width: 30%; border: 1px solid #ccc; padding: 5px; border-radius: 4px; background: #f9f9f9;">log</div>
</div>

<p>
    The diagram shows a well-structured automation script with a main function, parameters, input, processing, output, and logging.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How is an automation script structured?</strong> Parameters, read, process, write and log.</li>
    <li><strong>Why put code in main()?</strong> It keeps the script organised and reusable.</li>
    <li><strong>What does <code>__name__ == "__main__"</code> do?</strong> It runs the code only when the file is executed directly, not when imported.</li>
    <li><strong>How should inputs be given?</strong> As function arguments or with argparse; avoid hard-coded paths.</li>
    <li><strong>Why log?</strong> The logging module records progress and errors for later checking.</li>
    <li><strong>How do I run it automatically?</strong> Windows Task Scheduler or cron.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep original data untouched: always write to a new output.</p>
</div>