{{-- resources/views/learning/lessons/8-11-exceptions.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Exception handling lets a script react to errors instead of stopping.
    It is essential for writing robust scripts that process many files.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Use try/except blocks</li>
    <li>Understand else and finally</li>
    <li>Catch specific errors</li>
</ul>

<h2>Visual Guide: Try/Except Flow</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">errors.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            try:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;gdf = gpd.read_file(path)<br>
            except FileNotFoundError:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;print("File missing")<br>
            else:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;print(len(gdf))<br>
            finally:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;print("done")
        </div>
    </div>
    <div style="width: 45%; display: flex; flex-direction: column; align-items: center; justify-content: center; font-size: 11px;">
        <div style="width: 100px; background: #282A35; color: #fff; padding: 6px; border-radius: 4px; text-align: center; font-weight: bold; margin-bottom: 10px;">try</div>
        <div style="display: flex; justify-content: space-between; width: 100%;">
            <div style="width: 45%; border: 2px solid #04AA6D; padding: 6px; border-radius: 4px; background: #e8f5e9; text-align: center;">
                <strong>else</strong><br><span style="font-size: 10px;">no error</span>
            </div>
            <div style="width: 45%; border: 2px solid #d9534f; padding: 6px; border-radius: 4px; background: #ffcdd2; text-align: center;">
                <strong>except</strong><br><span style="font-size: 10px;">error</span>
            </div>
        </div>
        <div style="display: flex; justify-content: center; width: 100%; margin-top: 10px;">
            <div style="width: 80%; border: 2px solid #2196F3; padding: 6px; border-radius: 4px; background: #e3f2fd; text-align: center;">
                <strong>finally</strong><br><span style="font-size: 10px;">always runs</span>
            </div>
        </div>
    </div>
</div>

<p>
    The diagram shows the flow of a try/except block: if the code in try succeeds, else runs; if it fails, except runs; finally always runs.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Why handle exceptions?</strong> So a script deals with errors gracefully instead of crashing.</li>
    <li><strong>How does try/except work?</strong> Risky code goes in try; if it fails, except runs.</li>
    <li><strong>What are else and finally?</strong> else runs when there was no error; finally always runs (clean-up).</li>
    <li><strong>Should I catch all errors?</strong> No. Catch specific ones such as FileNotFoundError.</li>
    <li><strong>What GIS errors are common?</strong> Missing file, wrong CRS, empty layer, invalid geometry.</li>
    <li><strong>How do I raise my own error?</strong> <code>raise ValueError("CRS missing")</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Print or log a clear message that says what failed and for which file.</p>
</div>