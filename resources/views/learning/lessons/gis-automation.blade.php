{{-- resources/views/learning/lessons/7-17-automation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GIS automation lets scripts and models do repetitive work so it is faster, repeatable and less error-prone.
    It is essential for processing large datasets and maintaining consistency.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand why automation is useful</li>
    <li>Identify the main automation tools</li>
    <li>Apply best practices for automation</li>
</ul>

<h2>Visual Guide: Automation Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 20%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">50 input files</strong>
        <div style="height: 40px; margin-top: 8px; background: #f9f9f9; border: 1px dashed #999; border-radius: 4px; position: relative;">
            <div style="position: absolute; top: 5px; left: 5px; width: 20px; height: 25px; background: #fff; border: 1px solid #ccc;"></div>
            <div style="position: absolute; top: 5px; left: 15px; width: 20px; height: 25px; background: #fff; border: 1px solid #ccc;"></div>
            <div style="position: absolute; top: 5px; left: 25px; width: 20px; height: 25px; background: #fff; border: 1px solid #ccc;"></div>
        </div>
    </div>
    <div style="width: 10%; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 2px solid #282A35; border-radius: 6px; padding: 10px; background: #282A35; color: #fff;">
        <strong>script / model</strong>
        <div style="margin-top: 8px; font-size: 20px;">&#9881;</div>
    </div>
    <div style="width: 10%; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">50 results</strong>
        <div style="height: 40px; margin-top: 8px; background: #e8f5e9; border: 1px solid #4caf50; border-radius: 4px; position: relative;">
            <div style="position: absolute; top: 5px; left: 5px; width: 20px; height: 25px; background: #c8e6c9; border: 1px solid #4caf50;"></div>
            <div style="position: absolute; top: 5px; left: 15px; width: 20px; height: 25px; background: #c8e6c9; border: 1px solid #4caf50;"></div>
            <div style="position: absolute; top: 5px; left: 25px; width: 20px; height: 25px; background: #c8e6c9; border: 1px solid #4caf50;"></div>
        </div>
    </div>
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Model Builder<br>drag-and-drop workflow</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Batch process<br>one tool, many inputs</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Python<br>PyQGIS &bull; ArcPy</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Scheduler<br>runs automatically</div>
</div>

<p>
    The diagram shows how automation transforms many input files into many results through a single script or model, without manual steps.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is GIS automation?</strong> Letting scripts or models repeat GIS tasks without manual steps.</li>
    <li><strong>Why automate?</strong> It saves time, avoids mistakes and makes work repeatable.</li>
    <li><strong>Which options exist?</strong> Model Builder, batch processing, Python (PyQGIS, ArcPy) and scheduled scripts.</li>
    <li><strong>Which tasks should I automate first?</strong> Repetitive ones: the same steps on many files, or monthly updates.</li>
    <li><strong>What is good practice?</strong> Parameterise inputs, keep originals untouched and log errors.</li>
    <li><strong>How do I batch in QGIS?</strong> Right-click a Processing tool &gt; Execute as Batch Process.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Automate a task only after you have done it correctly by hand once.</p>
</div>