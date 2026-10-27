{{-- resources/views/learning/lessons/5-6-intersection.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Intersection keeps only the areas where two layers overlap and combines the attributes of both.
    It is useful when you need to know the characteristics of one layer inside another.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what Intersection keeps</li>
    <li>Compare Intersection with Clip</li>
    <li>Recalculate area fields after intersection</li>
</ul>

<h2>Visual Guide: Intersection Operation</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Layer A (two zones) + layer B</strong>
        <div style="height: 100px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 10px; width: 40px; height: 80px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="position: absolute; top: 10px; left: 50px; width: 40px; height: 80px; background: #ffe0b2; border: 1px solid #FF9800;"></div>
            <div style="position: absolute; top: 20px; left: 30px; width: 60px; height: 60px; border: 3px dashed #2196F3;"></div>
        </div>
    </div>
    <div style="width: 15%; text-align: center; font-size: 14px; color: #FF9800; font-weight: bold;">Intersect<br><span style="font-size: 20px;">&rarr;</span></div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Output: overlap only</strong>
        <div style="height: 100px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 20px; left: 20px; width: 40px; height: 60px; background: #c8e6c9; border: 1px solid #04AA6D; display: flex; align-items: center; justify-content: center; font-size: 10px;">A1 + B</div>
            <div style="position: absolute; top: 20px; left: 60px; width: 30px; height: 60px; background: #ffe0b2; border: 1px solid #FF9800; display: flex; align-items: center; justify-content: center; font-size: 10px;">A2 + B</div>
        </div>
        <div style="font-size: 11px; color: #d9534f; margin-top: 5px;">each piece carries attributes of both layers</div>
    </div>
</div>

<p>
    The diagram shows that Intersection keeps only the overlapping area and splits it into new features that carry attributes from both layers. This is different from Clip, which keeps only the input's attributes.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does Intersection keep?</strong> Only the areas where two layers overlap.</li>
    <li><strong>Whose attributes does the output have?</strong> Attributes from both layers (unlike Clip).</li>
    <li><strong>What happens outside the overlap?</strong> It is discarded.</li>
    <li><strong>What geometry type does the output have?</strong> The simpler input type: line with polygon gives lines.</li>
    <li><strong>Give an example.</strong> Land use and a flood zone give the land use inside the flood zone.</li>
    <li><strong>What should I do afterwards?</strong> Recalculate area fields; the copied values describe the old shapes.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> After an intersection recalculate area fields — the copied values still describe the old shapes.</p>
</div>