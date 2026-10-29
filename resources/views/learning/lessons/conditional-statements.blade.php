{{-- resources/views/learning/lessons/8-6-conditionals.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Conditional statements let a script choose what to do depending on the data.
    They are the decision-making core of any program.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Write if, elif, and else blocks</li>
    <li>Understand the importance of indentation</li>
    <li>Combine conditions</li>
</ul>

<h2>Visual Guide: If/Elif/Else Flow</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">if_else.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            if pop &gt; 5000:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;size = "large"<br>
            elif pop &gt; 2000:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;size = "medium"<br>
            else:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;size = "small"
        </div>
    </div>
    <div style="width: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; font-size: 11px;">
        <div style="width: 120px; background: #f9f9f9; border: 2px solid #282A35; padding: 4px; border-radius: 20px; text-align: center; margin-bottom: 5px;">pop &gt; 5000 ?</div>
        <div style="display: flex; justify-content: space-between; width: 100%;">
            <div style="width: 45%; text-align: right; color: #04AA6D; font-weight: bold;">yes &rarr;</div>
            <div style="width: 45%; text-align: left; color: #d9534f; font-weight: bold;">no &darr;</div>
        </div>
        <div style="display: flex; justify-content: flex-end; width: 100%; margin-top: 5px;">
            <div style="width: 45%; background: #e8f5e9; border: 1px solid #04AA6D; padding: 4px; border-radius: 4px; text-align: center;">large</div>
        </div>
        <div style="width: 120px; background: #f9f9f9; border: 2px solid #282A35; padding: 4px; border-radius: 20px; text-align: center; margin: 10px 0 5px 0;">pop &gt; 2000 ?</div>
        <div style="display: flex; justify-content: space-between; width: 100%;">
            <div style="width: 45%; text-align: left; color: #04AA6D; font-weight: bold;">yes &larr;</div>
            <div style="width: 45%; text-align: right; color: #d9534f; font-weight: bold;">no &darr;</div>
        </div>
        <div style="display: flex; justify-content: space-between; width: 100%; margin-top: 5px;">
            <div style="width: 45%; background: #e3f2fd; border: 1px solid #2196F3; padding: 4px; border-radius: 4px; text-align: center;">medium</div>
            <div style="width: 45%; background: #fff3cd; border: 1px solid #FF9800; padding: 4px; border-radius: 4px; text-align: center;">small</div>
        </div>
    </div>
</div>

<p>
    The diagram shows the logical flow of an if/elif/else statement, where each condition is tested in order until one is true.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does if do?</strong> It runs a block only when the condition is True.</li>
    <li><strong>What are elif and else?</strong> elif tests another condition; else handles everything left.</li>
    <li><strong>Why does indentation matter?</strong> It defines which lines belong to the block.</li>
    <li><strong>How do I combine conditions?</strong> With and, or and not.</li>
    <li><strong>What is a GIS example?</strong> <code>if gdf.crs != 4326: gdf = gdf.to_crs(4326)</code>.</li>
    <li><strong>How do I test for missing values?</strong> <code>if x is None</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Check inputs first: if the CRS or file is wrong, stop early with a clear message.</p>
</div>