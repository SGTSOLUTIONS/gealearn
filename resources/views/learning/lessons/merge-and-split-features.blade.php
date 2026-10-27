{{-- resources/views/learning/lessons/5-9-merge-split.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Merge joins layers or features together; split cuts one feature into several.
    These are basic editing tools for combining or dividing features.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the difference between Merge Vector Layers and Merge Selected Features</li>
    <li>Split a feature with a line</li>
    <li>Recalculate area and length fields</li>
</ul>

<h2>Visual Guide: Merge and Split Operations</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Merge Vector Layers</strong>
        <div style="display: flex; justify-content: center; align-items: center; gap: 10px; margin-top: 8px;">
            <div style="width: 40px; height: 40px; background: #c8e6c9; border: 1px solid #04AA6D; transform: rotate(10deg);"></div>
            <div style="width: 40px; height: 40px; background: #ffe0b2; border: 1px solid #FF9800; transform: rotate(-15deg);"></div>
            <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
            <div style="width: 70px; height: 70px; background: #f9f9f9; border: 2px solid #04AA6D; border-radius: 4px; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 5px;">
                <div style="width: 30px; height: 20px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
                <div style="width: 30px; height: 20px; background: #ffe0b2; border: 1px solid #FF9800;"></div>
            </div>
        </div>
        <div style="color: #666; margin-top: 5px;">stacks layers into one</div>
    </div>
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Split Features</strong>
        <div style="display: flex; justify-content: center; align-items: center; gap: 10px; margin-top: 8px;">
            <div style="width: 60px; height: 60px; background: #c8e6c9; border: 1px solid #04AA6D; position: relative;">
                <div style="position: absolute; top: 50%; left: -10px; width: 80px; height: 2px; border-top: 2px dashed #d9534f;"></div>
            </div>
            <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
            <div style="display: flex; flex-direction: column; gap: 2px;">
                <div style="width: 60px; height: 28px; background: #bbdefb; border: 1px solid #2196F3;"></div>
                <div style="width: 60px; height: 28px; background: #ffcdd2; border: 1px solid #d9534f;"></div>
            </div>
        </div>
        <div style="color: #666; margin-top: 5px;">draw a line across the feature</div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Edit &gt; Edit Geometry &gt; Merge Selected Features / Split Features</strong>
</div>

<p>
    The diagram shows the difference between merging and splitting. Merge Vector Layers stacks separate layers into one. Split Features cuts a single feature into two or more pieces using a drawn line.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does Merge Vector Layers do?</strong> Vector &gt; Data Management Tools: stacks several layers of the same type into one.</li>
    <li><strong>What does Merge Selected Features do?</strong> Edit &gt; Edit Geometry: joins features inside one layer.</li>
    <li><strong>How do I split a feature?</strong> Edit &gt; Edit Geometry &gt; Split Features: with editing on, draw a line across it.</li>
    <li><strong>Are these edits permanent?</strong> Yes, once saved. Work on a copy.</li>
    <li><strong>How is merge different from dissolve?</strong> Merge uses no attribute rule.</li>
    <li><strong>What should I do afterwards?</strong> Recalculate area and length fields.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Recalculate area and length fields after any merge or split.</p>
</div>