{{-- resources/views/learning/lessons/4-14-validation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Validation checks that geometry, CRS and attributes are correct and usable before analysis.
    Invalid geometry is the most common reason an overlay or buffer tool fails.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify invalid geometry types</li>
    <li>Run the Check Validity tool</li>
    <li>Fix errors with the Fix Geometries tool</li>
</ul>

<h2>Visual Guide: Valid vs. Invalid Geometry</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 60px; background: #e8f5e9; border: 1px solid #04AA6D; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #04AA6D;">Valid Polygon</div>
        <div style="margin-top: 5px; font-weight: bold;">Valid</div>
    </div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 60px; background: #ffcdd2; border: 1px solid #d9534f; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #d9534f;">Bowtie Shape</div>
        <div style="margin-top: 5px; font-weight: bold;">Self-intersection</div>
    </div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 60px; background: #ffcdd2; border: 1px solid #d9534f; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #d9534f;">Square with spike</div>
        <div style="margin-top: 5px; font-weight: bold;">Duplicate point / spike</div>
    </div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <div style="height: 60px; background: #ffcdd2; border: 1px solid #d9534f; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #d9534f;">Square with hole outside</div>
        <div style="margin-top: 5px; font-weight: bold;">Hole outside ring</div>
    </div>
</div>

<div style="display: flex; justify-content: center; align-items: center; gap: 10px; margin-bottom: 20px; font-size: 12px;">
    <div style="border: 2px solid #2196F3; border-radius: 6px; padding: 8px 12px; background: #e3f2fd;">Check Validity<br><span style="font-size: 10px; color: #666;">Vector &gt; Geometry Tools</span></div>
    <div style="color: #FF9800; font-size: 20px;">&rarr;</div>
    <div style="border: 2px solid #FF9800; border-radius: 6px; padding: 8px 12px; background: #fff3cd;">Fix Geometries<br><span style="font-size: 10px; color: #666;">Processing Toolbox</span></div>
    <div style="color: #FF9800; font-size: 20px;">&rarr;</div>
    <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 8px 12px; background: #e8f5e9;">Re-check<br><span style="font-size: 10px; color: #666;">should report 0 errors</span></div>
</div>

<p>
    The diagram shows common types of invalid geometry alongside the workflow for fixing them. Always run Check Validity first, then use Fix Geometries to correct the errors, and finally re-check to confirm the geometry is clean.
</p>

<h2>Key Points</h2>
<ul>
    <li><strong>Geometry:</strong> run <strong>Vector &gt; Geometry Tools &gt; Check Validity</strong>; repair with <strong>Fix Geometries</strong>.</li>
    <li>Common invalid shapes: <strong>self-intersections, duplicate points, spikes, holes outside the ring</strong>.</li>
    <li><strong>CRS:</strong> every layer needs a known CRS – compare layers before combining them.</li>
    <li><strong>Attributes:</strong> values inside valid ranges, no unexpected NULL or text.</li>
    <li>Check the extent too: do the features fall where they should?</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Invalid geometry is the most common reason an overlay or buffer tool fails.</p>
</div>