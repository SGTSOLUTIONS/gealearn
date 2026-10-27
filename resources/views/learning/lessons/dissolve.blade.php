{{-- resources/views/learning/lessons/5-8-dissolve.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Dissolve merges features that share the same attribute value into one feature and removes the borders between them.
    It is useful for simplifying data and grouping features by category.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how Dissolve groups features</li>
    <li>Choose the dissolve field</li>
    <li>Keep disjoint features separate</li>
</ul>

<h2>Visual Guide: Dissolve Operation</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Before: 24 polygons</strong>
        <div style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #ff9800; height: 20px; border-radius: 2px;"></div>
            <div style="background: #ff9800; height: 20px; border-radius: 2px;"></div>
            <div style="background: #e91e63; height: 20px; border-radius: 2px;"></div>
            <div style="background: #e91e63; height: 20px; border-radius: 2px;"></div>
            <div style="background: #4caf50; height: 20px; border-radius: 2px;"></div>
            <div style="background: #4caf50; height: 20px; border-radius: 2px;"></div>
            <div style="background: #ff9800; height: 20px; border-radius: 2px;"></div>
            <div style="background: #ff9800; height: 20px; border-radius: 2px;"></div>
            <div style="background: #e91e63; height: 20px; border-radius: 2px;"></div>
            <div style="background: #e91e63; height: 20px; border-radius: 2px;"></div>
            <div style="background: #4caf50; height: 20px; border-radius: 2px;"></div>
            <div style="background: #4caf50; height: 20px; border-radius: 2px;"></div>
            <div style="background: #ff9800; height: 20px; border-radius: 2px;"></div>
            <div style="background: #ff9800; height: 20px; border-radius: 2px;"></div>
            <div style="background: #e91e63; height: 20px; border-radius: 2px;"></div>
            <div style="background: #e91e63; height: 20px; border-radius: 2px;"></div>
            <div style="background: #4caf50; height: 20px; border-radius: 2px;"></div>
            <div style="background: #4caf50; height: 20px; border-radius: 2px;"></div>
        </div>
    </div>
    <div style="width: 15%; text-align: center; font-size: 14px; color: #FF9800; font-weight: bold;">Dissolve<br><span style="font-size: 20px;">&rarr;</span></div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">After: 3 features (one per class)</strong>
        <div style="height: 80px; position: relative; margin-top: 8px; border-radius: 4px; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 40%; height: 100%; background: #ff9800;"></div>
            <div style="position: absolute; top: 0; left: 40%; width: 30%; height: 100%; background: #e91e63;"></div>
            <div style="position: absolute; top: 0; left: 70%; width: 30%; height: 100%; background: #4caf50;"></div>
        </div>
    </div>
</div>

<div style="display: flex; justify-content: center; gap: 20px; margin-bottom: 20px; font-size: 12px;">
    <span style="color: #ff9800;">&#9632; Residential</span>
    <span style="color: #e91e63;">&#9632; Commercial</span>
    <span style="color: #4caf50;">&#9632; Park</span>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Tool:</strong> Vector &gt; Geoprocessing Tools &gt; Dissolve &nbsp;|&nbsp; <strong>Dissolve field:</strong> land_use
</div>

<p>
    The diagram shows how Dissolve groups many adjacent polygons that share the same attribute value into a single, larger polygon. The borders between them are removed, simplifying the data.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does Dissolve do?</strong> It merges features with the same attribute value into one and removes the borders between them.</li>
    <li><strong>Which tool?</strong> Vector &gt; Geoprocessing Tools &gt; Dissolve.</li>
    <li><strong>What is the dissolve field?</strong> The attribute that groups features, e.g. land-use class. Empty merges everything.</li>
    <li><strong>How many rows does the output have?</strong> One per unique value.</li>
    <li><strong>What does Keep disjoint features separate do?</strong> It creates separate parts instead of one multipart feature.</li>
    <li><strong>How do I add up a number while dissolving?</strong> Use the Aggregate tool, e.g. to sum population.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> To add up a number (such as population) while dissolving, use the Aggregate tool.</p>
</div>