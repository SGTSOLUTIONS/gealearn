{{-- resources/views/learning/lessons/3-15-layout.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The Print Layout turns your map into a finished page with all the elements a reader needs.
    It is where you assemble the title, legend, scale bar, and map frame into a professional document.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a new Print Layout</li>
    <li>Add essential map elements</li>
    <li>Set page size and orientation</li>
</ul>

<h2>Visual Guide: Map Layout Elements</h2>
<div style="border: 2px solid #ccc; border-radius: 6px; padding: 15px; margin: 20px 0; background: #fff;">
    <div style="border: 1px solid #282A35; padding: 10px; text-align: center; font-weight: bold; background: #f1f1f1; margin-bottom: 10px;">
        1. Title: Ward Map of the Study Area
    </div>
    <div style="display: flex; gap: 10px;">
        <div style="flex: 2; border: 1px solid #282A35; height: 150px; display: flex; align-items: center; justify-content: center; background: #eef; position: relative;">
            <span style="font-size: 11px; color: #666;">2. Map Frame</span>
            <div style="position: absolute; top: 10px; right: 10px; border: 1px solid #ccc; background: #fff; padding: 5px; font-size: 9px; text-align: left;">
                <strong>3. Legend</strong><br>
                <span style="color: #ff9800;">&#9632;</span> Residential<br>
                <span style="color: #e91e63;">&#9632;</span> Commercial<br>
                <span style="color: #4caf50;">&#9632;</span> Park
            </div>
            <div style="position: absolute; bottom: 10px; right: 10px; text-align: center; font-size: 10px;">
                <strong>N</strong><br>&uarr;<br><span style="font-size: 8px;">4. North Arrow</span>
            </div>
            <div style="position: absolute; bottom: 10px; left: 10px; border: 1px solid #000; width: 80px; height: 8px; display: flex; align-items: flex-end;">
                <div style="width: 50%; height: 8px; background: #000;"></div>
                <div style="width: 50%; height: 8px; background: #fff; border-left: 1px solid #000;"></div>
            </div>
            <div style="position: absolute; bottom: 0; left: 10px; font-size: 8px;">0 &nbsp;&nbsp; 5 &nbsp;&nbsp; 10 &nbsp;&nbsp; 15 km</div>
        </div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li>Open with <strong>Project > New Print Layout (Ctrl+P)</strong> and give it a name.</li>
    <li>Add items from the <strong>Add Item</strong> menu: Map, Label, Legend, Scale Bar, North Arrow.</li>
    <li>Set page size and orientation in <strong>Page Properties</strong> (right-click the page).</li>
    <li>Move and resize items by dragging; fine-tune in <strong>Item Properties</strong>.</li>
    <li>A project can store many layouts (<strong>Project > Layout Manager</strong>).</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Every map needs: title, map, legend, scale bar and north arrow.</p>
</div>