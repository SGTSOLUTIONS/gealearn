{{-- resources/views/learning/lessons/12-2-2d-vs-3d.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    2D GIS describes features by their x, y position on a flat map. 3D GIS adds height (z), which gives volume, depth and a realistic view.
    Choosing between them depends on the question you need to answer.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the strengths of 2D</li>
    <li>Recognise what 3D adds</li>
    <li>Know the costs of 3D</li>
</ul>

<h2>Visual Guide: 2D vs 3D</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">2D map</strong>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 5px; margin: 10px 0;">
            <div style="width: 30px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="width: 30px; height: 30px; background: #e1bee7; border: 1px solid #9C27B0;"></div>
            <div style="width: 30px; height: 30px; background: #fff9c4; border: 1px solid #FF9800;"></div>
            <div style="width: 30px; height: 30px; background: #bbdefb; border: 1px solid #2196F3;"></div>
            <div style="width: 30px; height: 30px; background: #fff9c4; border: 1px solid #FF9800;"></div>
            <div style="width: 30px; height: 30px; background: #ffcdd2; border: 1px solid #d9534f;"></div>
        </div>
        <div style="font-size: 11px; color: #666;">footprints: x, y</div>
    </div>
    <div style="width: 10%; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">3D scene</strong>
        <div style="display: flex; align-items: flex-end; justify-content: center; gap: 5px; height: 60px; margin: 10px 0; background: #e3f2fd; border-radius: 4px;">
            <div style="width: 20px; height: 20px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="width: 20px; height: 40px; background: #e1bee7; border: 1px solid #9C27B0;"></div>
            <div style="width: 20px; height: 30px; background: #fff9c4; border: 1px solid #FF9800;"></div>
            <div style="width: 20px; height: 50px; background: #bbdefb; border: 1px solid #2196F3;"></div>
        </div>
        <div style="font-size: 11px; color: #666;">footprints + height: x, y, z</div>
    </div>
</div>

<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>2D:</strong> area, length, position &nbsp;|&nbsp; <strong>3D:</strong> volume, height, line of sight, shadow
</div>

<p>
    The diagram shows how a 2D map represents features as flat shapes, while a 3D scene gives them height and volume.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does 2D do well?</strong> Area, length, density and thematic maps. Most everyday tasks are best kept in 2D.</li>
    <li><strong>What does 3D add?</strong> Height differences, building volume, slopes, and what hides behind what. Visibility, shadow and clearance analysis need the Z value.</li>
    <li><strong>What are the costs of 3D?</strong> Larger data, harder collection, more computing power, and careful display.</li>
    <li><strong>How do I choose?</strong> Use 2D when position and area are enough; use 3D when height changes the answer. Keep 2D data as the master and generate 3D from it.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep the 2D layer as the source of truth and add height as an attribute. You can always create 3D from it.</p>
</div>