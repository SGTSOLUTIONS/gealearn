{{-- resources/views/learning/lessons/4-13-attribute-editing.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Attribute editing changes the values and the structure of an attribute table.
    It is a common task when updating records, adding new fields, or correcting errors.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Toggle editing mode and save changes</li>
    <li>Edit single cells or multiple rows</li>
    <li>Add and delete fields</li>
</ul>

<h2>Visual Guide: Attribute Editing Toolbar</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="display: flex; flex-direction: column; align-items: center; gap: 5px;">
        <div style="width: 40px; height: 40px; background: #FF9800; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; font-size: 18px;">E</div>
        <span>Toggle Editing</span>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center; gap: 5px;">
        <div style="width: 40px; height: 40px; background: #04AA6D; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; font-size: 18px;">S</div>
        <span>Save Edits</span>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center; gap: 5px;">
        <div style="width: 40px; height: 40px; background: #282A35; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; font-size: 18px;">M</div>
        <span>Multi Edit</span>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center; gap: 5px;">
        <div style="width: 40px; height: 40px; background: #2196F3; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; font-size: 18px;">U</div>
        <span>Undo</span>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center; gap: 5px;">
        <div style="width: 40px; height: 40px; background: #04AA6D; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; font-size: 18px;">+</div>
        <span>New Field</span>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center; gap: 5px;">
        <div style="width: 40px; height: 40px; background: #FF9800; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; font-size: 18px;">x</div>
        <span>Delete Field</span>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center; gap: 5px;">
        <div style="width: 40px; height: 40px; background: #282A35; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; font-size: 18px;">F</div>
        <span>Field Calc.</span>
    </div>
</div>

<div style="display: flex; flex-direction: column; align-items: center; margin-bottom: 20px;">
    <div style="border: 1px solid #ccc; padding: 8px 15px; border-radius: 20px; width: 60%; text-align: center; font-size: 12px; background: #f9f9f9; margin-bottom: 5px;">1. Toggle Editing (pencil)</div>
    <div style="color: #FF9800; font-size: 16px; font-weight: bold; line-height: 1;">&darr;</div>
    <div style="border: 1px solid #ccc; padding: 8px 15px; border-radius: 20px; width: 60%; text-align: center; font-size: 12px; background: #f9f9f9; margin-bottom: 5px;">2. Edit cells or add a field</div>
    <div style="color: #FF9800; font-size: 16px; font-weight: bold; line-height: 1;">&darr;</div>
    <div style="border: 1px solid #ccc; padding: 8px 15px; border-radius: 20px; width: 60%; text-align: center; font-size: 12px; background: #f9f9f9; margin-bottom: 5px;">3. Save Edits</div>
    <div style="color: #FF9800; font-size: 16px; font-weight: bold; line-height: 1;">&darr;</div>
    <div style="border: 1px solid #ccc; padding: 8px 15px; border-radius: 20px; width: 60%; text-align: center; font-size: 12px; background: #f9f9f9;">4. Toggle Editing off</div>
</div>

<p>
    The diagram shows the toolbar buttons used in attribute editing and the correct sequence of operations. You must always start by toggling editing on, and finish by saving your edits.
</p>

<h2>Key Points</h2>
<ul>
    <li>Click <strong>Toggle Editing (pencil)</strong> before changing anything, then <strong>Save Edits</strong>.</li>
    <li>Edit a cell directly, or use <strong>Multi Edit</strong> to change many rows at once.</li>
    <li>Add or delete columns with <strong>New Field / Delete Field</strong> (choose type and length).</li>
    <li><strong>Field Calculator (Ctrl+1)</strong> updates a whole column with an expression.</li>
    <li>Press <strong>Ctrl+Z</strong> to undo before saving; switch editing off when finished.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Plan field types first: numbers stored as text cannot be summed or sorted correctly.</p>
</div>