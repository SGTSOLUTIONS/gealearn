{{-- resources/views/learning/lessons/7-18-model-builder.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Model Builder links Processing tools into a single visual workflow that you can reuse and share.
    It is a powerful way to automate multi-step analyses without writing code.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the parts of a model</li>
    <li>Build a simple model</li>
    <li>Use parameters and batch processing</li>
</ul>

<h2>Visual Guide: Model Builder Workflow</h2>
<div style="border: 1px solid #ccc; border-radius: 6px; padding: 15px; background: #fff; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="display: flex; justify-content: center; gap: 20px; margin-bottom: 10px;">
        <div style="display: flex; align-items: center; gap: 5px;"><div style="width: 12px; height: 12px; background: #2196f3;"></div> input</div>
        <div style="display: flex; align-items: center; gap: 5px;"><div style="width: 12px; height: 12px; background: #04AA6D;"></div> algorithm</div>
        <div style="display: flex; align-items: center; gap: 5px;"><div style="width: 12px; height: 12px; background: #FF9800;"></div> output</div>
    </div>
    
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div style="width: 25%; display: flex; flex-direction: column; gap: 10px;">
            <div style="border: 2px solid #2196f3; border-radius: 6px; padding: 8px; background: #e3f2fd;"><strong>Rivers</strong><br>(vector layer)</div>
            <div style="border: 2px solid #2196f3; border-radius: 6px; padding: 8px; background: #e3f2fd;"><strong>Distance</strong><br>(number)</div>
        </div>
        <div style="width: 10%; font-size: 16px; color: #999;">&rarr;</div>
        <div style="width: 20%; border: 2px solid #04AA6D; border-radius: 6px; padding: 15px; background: #e8f5e9;"><strong>Buffer</strong></div>
        <div style="width: 10%; font-size: 16px; color: #999;">&rarr;</div>
        <div style="width: 20%; border: 2px solid #04AA6D; border-radius: 6px; padding: 15px; background: #e8f5e9;"><strong>Clip</strong></div>
        <div style="width: 10%; font-size: 16px; color: #999;">&rarr;</div>
        <div style="width: 20%; border: 2px solid #04AA6D; border-radius: 6px; padding: 15px; background: #e8f5e9;"><strong>Dissolve</strong></div>
    </div>
    
    <div style="display: flex; justify-content: flex-end; margin-top: 10px; gap: 10px;">
        <div style="border: 2px solid #2196f3; border-radius: 6px; padding: 8px; background: #e3f2fd; width: 20%;"><strong>Study area</strong><br>(polygon layer)</div>
        <div style="font-size: 16px; color: #999;">&uarr;</div>
        <div style="border: 2px solid #FF9800; border-radius: 6px; padding: 8px; background: #fff3cd; width: 20%;"><strong>Flood zone</strong><br>(output)</div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Tool:</strong> Processing &gt; Graphical Modeler &nbsp;|&nbsp; <strong>Saved as:</strong> .model3 file
</div>

<p>
    The diagram shows a model that takes rivers and a distance, buffers them, clips the result to a study area, and dissolves the output into a flood zone.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is Model Builder?</strong> A drag-and-drop tool that chains Processing tools into one reusable workflow (the Graphical Modeler).</li>
    <li><strong>What are the parts of a model?</strong> Inputs (layers, numbers), algorithms and outputs.</li>
    <li><strong>Where is it in QGIS?</strong> Processing &gt; Graphical Modeler.</li>
    <li><strong>How is a model saved?</strong> As a .model3 file; it then appears in the Processing Toolbox under Models.</li>
    <li><strong>Why use parameters?</strong> So the same model works with different layers or distances.</li>
    <li><strong>Can a model run in batch?</strong> Yes: right-click it &gt; Execute as Batch Process.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Name inputs clearly and test the model on a small dataset first.</p>
</div>