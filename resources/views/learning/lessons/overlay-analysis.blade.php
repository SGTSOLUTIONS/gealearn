{{-- resources/views/learning/lessons/5-11-overlay.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Overlay analysis stacks two layers and combines their geometry and attributes into a new layer.
    It is the foundation of many spatial analysis workflows.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the five core overlay tools</li>
    <li>Choose the right tool for the question</li>
    <li>Validate geometry before overlaying</li>
</ul>

<h2>Visual Guide: The Five Overlay Tools</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #fff;">
        <div style="height: 50px; position: relative; background: #f9f9f9; margin-bottom: 5px;">
            <div style="position: absolute; top: 5px; left: 5px; width: 30px; height: 30px; border: 2px solid #04AA6D;"></div>
            <div style="position: absolute; top: 15px; left: 15px; width: 30px; height: 30px; border: 2px dashed #FF9800;"></div>
        </div>
        <strong style="color: #282A35;">Clip</strong><br><span style="color: #666;">A cut by B</span>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #fff;">
        <div style="height: 50px; position: relative; background: #f9f9f9; margin-bottom: 5px;">
            <div style="position: absolute; top: 5px; left: 5px; width: 30px; height: 30px; border: 2px solid #04AA6D;"></div>
            <div style="position: absolute; top: 15px; left: 15px; width: 30px; height: 30px; border: 2px solid #FF9800;"></div>
        </div>
        <strong style="color: #282A35;">Intersection</strong><br><span style="color: #666;">overlap only</span>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #fff;">
        <div style="height: 50px; position: relative; background: #f9f9f9; margin-bottom: 5px;">
            <div style="position: absolute; top: 5px; left: 5px; width: 30px; height: 30px; border: 2px solid #04AA6D; background: rgba(4, 170, 109, 0.2);"></div>
            <div style="position: absolute; top: 15px; left: 15px; width: 30px; height: 30px; border: 2px solid #FF9800; background: rgba(255, 152, 0, 0.2);"></div>
        </div>
        <strong style="color: #282A35;">Union</strong><br><span style="color: #666;">A and B together</span>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #fff;">
        <div style="height: 50px; position: relative; background: #f9f9f9; margin-bottom: 5px;">
            <div style="position: absolute; top: 5px; left: 5px; width: 30px; height: 30px; border: 2px solid #04AA6D; background: rgba(4, 170, 109, 0.2);"></div>
            <div style="position: absolute; top: 15px; left: 15px; width: 30px; height: 30px; border: 2px solid #FF9800; background: transparent;"></div>
        </div>
        <strong style="color: #282A35;">Difference</strong><br><span style="color: #666;">A minus B</span>
    </div>
    <div style="width: 18%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #fff;">
        <div style="height: 50px; position: relative; background: #f9f9f9; margin-bottom: 5px;">
            <div style="position: absolute; top: 5px; left: 5px; width: 30px; height: 30px; border: 2px solid #04AA6D; background: rgba(4, 170, 109, 0.2);"></div>
            <div style="position: absolute; top: 15px; left: 15px; width: 30px; height: 30px; border: 2px solid #FF9800; background: rgba(255, 152, 0, 0.2);"></div>
        </div>
        <strong style="color: #282A35;">Sym. difference</strong><br><span style="color: #666;">non-overlapping parts</span>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Tools:</strong> Vector &gt; Geoprocessing Tools
</div>

<p>
    The diagram shows the five core overlay tools. Each one treats the two layers differently: Clip cuts, Intersection keeps only the overlap, Union keeps everything, and Difference removes the overlap.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is overlay analysis?</strong> It stacks two layers and combines their geometry and attributes into a new layer.</li>
    <li><strong>Which are the five core tools?</strong> Clip, Intersection, Union, Difference and Symmetrical Difference.</li>
    <li><strong>What does Difference do?</strong> Keeps the part of A outside B (an erase).</li>
    <li><strong>What does Symmetrical Difference do?</strong> Keeps the parts of A and B that do not overlap.</li>
    <li><strong>How do I choose a tool?</strong> By the question: keep inside, keep all, or remove.</li>
    <li><strong>What do the inputs need?</strong> The same CRS and valid geometry. Run Check Validity first.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Run Check Validity (Module 4) first — invalid geometry is the main cause of failed overlays.</p>
</div>