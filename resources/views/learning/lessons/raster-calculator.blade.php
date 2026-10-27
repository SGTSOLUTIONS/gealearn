{{-- resources/views/learning/lessons/5-16-raster-calculator.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The Raster Calculator applies maths and logic to cells (map algebra) and writes a new raster.
    It is useful for creating suitability masks and combining multiple rasters.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Write expressions with layer names and bands</li>
    <li>Use comparison and logical operators</li>
    <li>Understand how NoData affects the output</li>
</ul>

<h2>Visual Guide: Raster Calculator Operation</h2>
<div style="border: 2px solid #282A35; border-radius: 6px; padding: 10px; background: #282A35; color: #fff; font-family: Consolas, monospace; font-size: 14px; text-align: center; margin-bottom: 20px;">
    <span style="color: #FF9800;">"dem@1"</span> &gt; 100 <span style="color: #04AA6D;">AND</span> <span style="color: #2196F3;">"slope@1"</span> &lt; 15
</div>

<div style="display: flex; justify-content: space-between; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">dem@1 (height, m)</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #c8e6c9; padding: 4px;">120</div>
            <div style="background: #c8e6c9; padding: 4px;">95</div>
            <div style="background: #c8e6c9; padding: 4px;">130</div>
            <div style="background: #c8e6c9; padding: 4px;">110</div>
            <div style="background: #ffcdd2; padding: 4px;">140</div>
            <div style="background: #c8e6c9; padding: 4px;">90</div>
            <div style="background: #c8e6c9; padding: 4px;">105</div>
            <div style="background: #c8e6c9; padding: 4px;">125</div>
            <div style="background: #c8e6c9; padding: 4px;">98</div>
        </div>
    </div>
    <div style="width: 10%; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: bold; color: #FF9800;">AND</div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">slope@1 (degrees)</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #bbdefb; padding: 4px;">10</div>
            <div style="background: #bbdefb; padding: 4px;">20</div>
            <div style="background: #bbdefb; padding: 4px;">12</div>
            <div style="background: #bbdefb; padding: 4px;">8</div>
            <div style="background: #ffcdd2; padding: 4px;">30</div>
            <div style="background: #bbdefb; padding: 4px;">14</div>
            <div style="background: #ffcdd2; padding: 4px;">18</div>
            <div style="background: #bbdefb; padding: 4px;">9</div>
            <div style="background: #bbdefb; padding: 4px;">11</div>
        </div>
    </div>
    <div style="width: 10%; display: flex; align-items: center; justify-content: center; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">result</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #c8e6c9; padding: 4px;">1</div>
            <div style="background: #e0e0e0; padding: 4px;">0</div>
            <div style="background: #c8e6c9; padding: 4px;">1</div>
            <div style="background: #c8e6c9; padding: 4px;">1</div>
            <div style="background: #e0e0e0; padding: 4px;">0</div>
            <div style="background: #e0e0e0; padding: 4px;">0</div>
            <div style="background: #e0e0e0; padding: 4px;">0</div>
            <div style="background: #c8e6c9; padding: 4px;">1</div>
            <div style="background: #e0e0e0; padding: 4px;">0</div>
        </div>
        <div style="margin-top: 8px; text-align: left; font-size: 10px; color: #d9534f;">1 = true<br>0 = false</div>
    </div>
</div>

<p>
    The diagram shows how the Raster Calculator evaluates each cell against the expression. A cell that meets both conditions returns 1 (true), and a cell that fails returns 0 (false). The result is a suitability mask.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the Raster Calculator?</strong> A tool that applies maths and logic to cells (map algebra) and writes a new raster.</li>
    <li><strong>Where is it?</strong> Raster &gt; Raster Calculator.</li>
    <li><strong>How are layers written?</strong> As <code>name @ band</code>, e.g. <code>"dem@1"</code>.</li>
    <li><strong>Which operators exist?</strong> + - * /, comparisons (&gt; = &lt;) and logic (AND, OR).</li>
    <li><strong>What does a comparison return?</strong> 1 (true) or 0 (false) – ideal for suitability masks.</li>
    <li><strong>What happens to NoData?</strong> NoData in any input gives NoData in the output.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Build the expression in small steps and check each result before combining.</p>
</div>