{{-- resources/views/learning/lessons/8-7-loops.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Loops repeat steps without rewriting them: once per feature, layer or file.
    They are the engine of automation.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand for and while loops</li>
    <li>Loop over files and features</li>
    <li>Use break and continue</li>
</ul>

<h2>Visual Guide: For and While Loops</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">loops.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            wards = ["A", "B", "C"]<br>
            for w in wards:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;print("Ward", w)<br><br>
            n = 0<br>
            while n &lt; 3:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;n += 1
        </div>
    </div>
    <div style="width: 50%; display: flex; flex-direction: column; justify-content: center; align-items: center; font-size: 11px;">
        <div style="font-weight: bold; color: #282A35; margin-bottom: 5px;">for: one item at a time</div>
        <div style="display: flex; align-items: center; gap: 5px; margin-bottom: 15px;">
            <div style="width: 30px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D; border-radius: 4px; display: flex; align-items: center; justify-content: center;">A</div>
            <div style="width: 10px; border-top: 1px solid #FF9800;"></div>
            <div style="width: 30px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D; border-radius: 4px; display: flex; align-items: center; justify-content: center;">B</div>
            <div style="width: 10px; border-top: 1px solid #FF9800;"></div>
            <div style="width: 30px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D; border-radius: 4px; display: flex; align-items: center; justify-content: center;">C</div>
        </div>
        <div style="font-weight: bold; color: #282A35; margin-bottom: 5px;">while: repeat until False</div>
        <div style="border: 1px solid #ccc; padding: 4px 8px; border-radius: 20px; background: #f9f9f9;">n &lt; 3 ?</div>
        <div style="color: #04AA6D; font-weight: bold; margin: 2px 0;">&darr; True</div>
        <div style="border: 1px solid #ccc; padding: 4px 8px; border-radius: 4px; background: #fff3cd;">n += 1</div>
    </div>
</div>

<p>
    The diagram shows the difference between a for loop (which iterates over a sequence) and a while loop (which repeats until a condition is false).
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does a for loop do?</strong> It repeats a block once for each item in a sequence.</li>
    <li><strong>What does a while loop do?</strong> It repeats while a condition is True. Make sure it can end.</li>
    <li><strong>How do I loop over files?</strong> <code>for p in Path("data").glob("*.shp"):</code>.</li>
    <li><strong>What does range() do?</strong> It makes numbers: <code>range(3)</code> gives 0, 1, 2.</li>
    <li><strong>What are break and continue?</strong> break stops the loop; continue skips to the next item.</li>
    <li><strong>What is the GIS use?</strong> Apply the same steps to every feature, layer or file.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Test a loop on two items before running it on thousands.</p>
</div>