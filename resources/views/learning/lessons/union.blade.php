{{-- resources/views/learning/lessons/5-7-union.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Union combines two layers into one, keeping all areas and splitting features where they overlap.
    It is the opposite of Intersection: nothing is discarded.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what Union keeps</li>
    <li>Identify the three types of output features</li>
    <li>Compare Union with Merge and Dissolve</li>
</ul>

<h2>Visual Guide: Union Operation</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Layer A + Layer B</strong>
        <div style="height: 100px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 10px; width: 60px; height: 60px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="position: absolute; top: 30px; left: 50px; width: 60px; height: 60px; background: #ffe0b2; border: 1px solid #FF9800;"></div>
        </div>
    </div>
    <div style="width: 15%; text-align: center; font-size: 14px; color: #FF9800; font-weight: bold;">Union<br><span style="font-size: 20px;">&rarr;</span></div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Output: every area, split at the overlap</strong>
        <div style="height: 100px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 10px; width: 40px; height: 40px; background: #c8e6c9; border: 1px solid #04AA6D; display: flex; align-items: center; justify-content: center; font-size: 10px;">A only</div>
            <div style="position: absolute; top: 30px; left: 50px; width: 40px; height: 40px; background: #ffe0b2; border: 1px solid #FF9800; display: flex; align-items: center; justify-content: center; font-size: 10px;">B only</div>
            <div style="position: absolute; top: 30px; left: 30px; width: 40px; height: 40px; background: #dcedc8; border: 1px solid #4caf50; display: flex; align-items: center; justify-content: center; font-size: 10px;">A + B</div>
        </div>
        <div style="font-size: 11px; color: #d9534f; margin-top: 5px;">3 kinds of piece, attributes from both layers</div>
    </div>
</div>

<p>
    The diagram shows that Union keeps everything: areas that belong only to A, areas that belong only to B, and the overlapping area (A + B). The output contains all three types of pieces with attributes from both layers.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does Union do?</strong> It combines two layers into one, keeping all areas and splitting features where they overlap.</li>
    <li><strong>What pieces does the output contain?</strong> A only, B only and A + B.</li>
    <li><strong>What attributes do A-only pieces have for layer B?</strong> NULL, because layer B has nothing there.</li>
    <li><strong>Which inputs are allowed?</strong> Both must have the same geometry type (polygon with polygon).</li>
    <li><strong>How do I find overlaps inside one layer?</strong> Leave the overlay layer empty.</li>
    <li><strong>Union, Merge or Dissolve?</strong> Merge stacks layers, Dissolve joins by attribute value, Union splits at overlaps.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Union is not Merge (stacks layers) and not Dissolve (joins by attribute value).</p>
</div>