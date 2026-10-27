{{-- resources/views/learning/lessons/5-22-transformation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Coordinate transformation converts coordinates between coordinate systems, including changes of datum.
    It is essential for aligning data from different sources.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the difference between Reproject and Assign</li>
    <li>Perform a datum transformation</li>
    <li>Verify the transformed result</li>
</ul>

<h2>Visual Guide: Transformation Process</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 25%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #e3f2fd;">
        <strong style="color: #282A35;">Geographic CRS</strong>
        <div style="height: 60px; margin-top: 8px; border-radius: 50%; border: 1px solid #2196F3; background: repeating-linear-gradient(0deg, transparent, transparent 10px, #bbdefb 10px, #bbdefb 11px);"></div>
        <div style="color: #666; margin-top: 5px; font-size: 11px;">lat, long in degrees</div>
    </div>
    <div style="width: 15%; text-align: center; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 25%; border: 2px solid #282A35; border-radius: 6px; padding: 10px; background: #282A35; color: #fff;">
        <strong>Transformation</strong>
        <div style="margin-top: 8px; font-size: 11px;">projection + datum shift</div>
    </div>
    <div style="width: 15%; text-align: center; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 25%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #e8f5e9;">
        <strong style="color: #282A35;">Projected CRS</strong>
        <div style="height: 60px; margin-top: 8px; display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 1px; background: #04AA6D;">
            <div style="background: #fff;"></div><div style="background: #fff;"></div>
            <div style="background: #fff;"></div><div style="background: #fff;"></div>
        </div>
        <div style="color: #666; margin-top: 5px; font-size: 11px;">x, y in metres</div>
    </div>
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 2px solid #04AA6D; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;"><strong>Reproject</strong><br>the numbers change</div>
    <div style="border: 2px solid #FF9800; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;"><strong>Assign CRS</strong><br>only the label changes</div>
    <div style="border: 2px solid #2196F3; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;"><strong>Datum transformation</strong><br>can shift data by metres</div>
</div>

<p>
    The diagram shows the transformation pipeline from a geographic (curved) CRS to a projected (flat) CRS. The key distinction is between reprojecting (changing the numbers) and assigning (changing the label).
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is coordinate transformation?</strong> Converting coordinates between coordinate systems, including changes of datum.</li>
    <li><strong>Which tools do it?</strong> Vector: Reproject Layer; raster: Raster &gt; Projections &gt; Warp.</li>
    <li><strong>Reproject or Assign Projection?</strong> Reproject changes the numbers; Assign Projection only changes the label.</li>
    <li><strong>What is a datum transformation?</strong> A shift between datums, set in Project &gt; Properties &gt; Transformations.</li>
    <li><strong>How do I choose a projection?</strong> By purpose: distance, area or local accuracy (UTM).</li>
    <li><strong>How do I verify the result?</strong> Check it against a known reference layer.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> A layer a few metres off after transformation? Suspect the datum transformation.</p>
</div>