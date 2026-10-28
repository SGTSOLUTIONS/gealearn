{{-- resources/views/learning/lessons/7-10-suitability.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Suitability analysis ranks locations for a purpose by combining several factor layers and excluding unsuitable land.
    It is widely used for site selection in planning, agriculture, and conservation.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the suitability workflow</li>
    <li>Reclassify factors to a common scale</li>
    <li>Apply constraints and weights</li>
</ul>

<h2>Visual Guide: Suitability Analysis Steps</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Slope score</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #c8e6c9; padding: 4px;">3</div><div style="background: #c8e6c9; padding: 4px;">3</div><div style="background: #fff9c4; padding: 4px;">2</div>
            <div style="background: #c8e6c9; padding: 4px;">3</div><div style="background: #fff9c4; padding: 4px;">2</div><div style="background: #fff9c4; padding: 4px;">2</div>
            <div style="background: #fff9c4; padding: 4px;">2</div><div style="background: #fff9c4; padding: 4px;">2</div><div style="background: #ffcdd2; padding: 4px;">1</div>
        </div>
    </div>
    <div style="width: 5%; font-size: 20px; color: #FF9800; font-weight: bold;">+</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Road-distance score</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #fff9c4; padding: 4px;">1</div><div style="background: #c8e6c9; padding: 4px;">2</div><div style="background: #c8e6c9; padding: 4px;">3</div>
            <div style="background: #ffcdd2; padding: 4px;">1</div><div style="background: #c8e6c9; padding: 4px;">2</div><div style="background: #c8e6c9; padding: 4px;">3</div>
            <div style="background: #fff9c4; padding: 4px;">2</div><div style="background: #c8e6c9; padding: 4px;">2</div><div style="background: #c8e6c9; padding: 4px;">3</div>
        </div>
    </div>
    <div style="width: 5%; font-size: 20px; color: #FF9800; font-weight: bold;">+</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Land-use score</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #c8e6c9; padding: 4px;">3</div><div style="background: #c8e6c9; padding: 4px;">3</div><div style="background: #c8e6c9; padding: 4px;">3</div>
            <div style="background: #c8e6c9; padding: 4px;">3</div><div style="background: #c8e6c9; padding: 4px;">2</div><div style="background: #c8e6c9; padding: 4px;">3</div>
            <div style="background: #c8e6c9; padding: 4px;">3</div><div style="background: #c8e6c9; padding: 4px;">3</div><div style="background: #ffcdd2; padding: 4px;">1</div>
        </div>
    </div>
    <div style="width: 5%; font-size: 20px; color: #FF9800; font-weight: bold;">=</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Suitability</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #c8e6c9; padding: 4px;">7</div><div style="background: #c8e6c9; padding: 4px;">7</div><div style="background: #c8e6c9; padding: 4px;">7</div>
            <div style="background: #c8e6c9; padding: 4px;">7</div><div style="background: #fff9c4; padding: 4px;">6</div><div style="background: #c8e6c9; padding: 4px;">7</div>
            <div style="background: #c8e6c9; padding: 4px;">7</div><div style="background: #c8e6c9; padding: 4px;">7</div><div style="background: #d9534f; color: #fff; padding: 4px;">x</div>
        </div>
    </div>
</div>

<div style="display: flex; justify-content: center; gap: 15px; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div><span style="color: #04AA6D;">&#9632;</span> high (8-9)</div>
    <div><span style="color: #c8e6c9;">&#9632;</span> medium (6-7)</div>
    <div><span style="color: #ffcdd2;">&#9632;</span> low (3-5)</div>
    <div><span style="color: #d9534f;">&#9632;</span> excluded (water, protected)</div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    Criteria &gt; reclassify to scores &gt; add or weight &gt; mask exclusions &gt; rank the sites
</div>

<p>
    The diagram shows how different factor layers (slope, road distance, land use) are reclassified to a common scale, then combined (summed) to produce a final suitability map, with certain areas excluded.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is suitability analysis?</strong> Finding the best locations for a purpose by comparing several criteria.</li>
    <li><strong>What are the steps?</strong> Define criteria, prepare layers, reclassify to scores, weight, combine, mask exclusions, rank.</li>
    <li><strong>Why reclassify?</strong> It puts different units (slope %, distance m) on a common scale such as 1&ndash;3.</li>
    <li><strong>Constraints or factors?</strong> Constraints exclude areas (water, protected land); factors rank the remaining areas by score.</li>
    <li><strong>How do I combine layers?</strong> A weighted sum in the Raster Calculator, multiplied by the constraint mask.</li>
    <li><strong>How do I check the result?</strong> Review the top sites visually and test how sensitive they are to the weights.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Write down the criteria and scores first; they are your assumptions and others must be able to challenge them.</p>
</div>