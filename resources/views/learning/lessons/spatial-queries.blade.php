{{-- resources/views/learning/lessons/5-3-spatial-queries.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A spatial query selects features by where they are in relation to another layer.
    It answers questions like "Which schools are inside this flood zone?"
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the five spatial relationships</li>
    <li>Choose between Within and Intersect</li>
    <li>Combine spatial and attribute queries</li>
</ul>

<h2>Visual Guide: Spatial Relationships</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 50px; position: relative; background: #eef; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 10px; width: 40px; height: 30px; background: rgba(33, 150, 243, 0.3); border: 1px solid #2196F3;"></div>
            <div style="position: absolute; top: 20px; left: 30px; width: 30px; height: 20px; background: rgba(255, 152, 0, 0.5); border: 1px solid #FF9800;"></div>
        </div>
        <div style="font-weight: bold; margin-top: 5px; color: #282A35;">Intersects</div>
        <div style="color: #666;">shares any space</div>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 50px; position: relative; background: #eef; border-radius: 4px;">
            <div style="position: absolute; top: 5px; left: 5px; width: 60px; height: 40px; background: rgba(33, 150, 243, 0.3); border: 1px solid #2196F3;"></div>
            <div style="position: absolute; top: 15px; left: 20px; width: 20px; height: 15px; background: rgba(255, 152, 0, 0.5); border: 1px solid #FF9800;"></div>
        </div>
        <div style="font-weight: bold; margin-top: 5px; color: #282A35;">Within</div>
        <div style="color: #666;">fully inside</div>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 50px; position: relative; background: #eef; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 15px; width: 30px; height: 20px; background: rgba(33, 150, 243, 0.3); border: 1px solid #2196F3;"></div>
            <div style="position: absolute; top: 5px; left: 5px; width: 60px; height: 40px; background: rgba(255, 152, 0, 0.5); border: 1px solid #FF9800;"></div>
        </div>
        <div style="font-weight: bold; margin-top: 5px; color: #282A35;">Contains</div>
        <div style="color: #666;">fully surrounds</div>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 50px; position: relative; background: #eef; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 10px; width: 30px; height: 30px; background: rgba(33, 150, 243, 0.3); border: 1px solid #2196F3;"></div>
            <div style="position: absolute; top: 10px; left: 40px; width: 30px; height: 30px; background: rgba(255, 152, 0, 0.5); border: 1px solid #FF9800;"></div>
        </div>
        <div style="font-weight: bold; margin-top: 5px; color: #282A35;">Touches</div>
        <div style="color: #666;">edges meet only</div>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 50px; position: relative; background: #eef; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 5px; width: 30px; height: 30px; background: rgba(33, 150, 243, 0.3); border: 1px solid #2196F3;"></div>
            <div style="position: absolute; top: 10px; left: 60px; width: 30px; height: 30px; background: rgba(255, 152, 0, 0.5); border: 1px solid #FF9800;"></div>
        </div>
        <div style="font-weight: bold; margin-top: 5px; color: #282A35;">Disjoint</div>
        <div style="color: #666;">no shared space</div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Tool:</strong> Vector &gt; Research Tools &gt; Select by Location
</div>

<p>
    The diagram illustrates the five spatial relationships. The choice depends on the question: do you want features that share any space (Intersects), are completely inside (Within), or are completely separate (Disjoint)?
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a spatial query?</strong> Selecting features by where they are in relation to another layer.</li>
    <li><strong>Which tool does it?</strong> Vector &gt; Research Tools &gt; Select by Location.</li>
    <li><strong>Which relations can I use?</strong> Intersect, within, contain, touch and disjoint.</li>
    <li><strong>Within or intersect: what is the difference?</strong> Within needs the whole feature inside; intersect needs only a touch of overlap.</li>
    <li><strong>How can the selection be applied?</strong> New selection, add to, remove from, or select within the current selection.</li>
    <li><strong>How do I combine it with attribute queries?</strong> Select by attribute first, then narrow the result by location.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Within needs the whole feature inside; intersect needs only a touch of overlap.</p>
</div>  