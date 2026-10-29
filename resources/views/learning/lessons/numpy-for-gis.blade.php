{{-- resources/views/learning/lessons/8-19-numpy.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    NumPy makes fast calculations on arrays, which is how rasters are processed in Python.
    Replacing loops with array operations is the key to performance.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand arrays and masks</li>
    <li>Use array operations instead of loops</li>
    <li>Use np.where for conditional logic</li>
</ul>

<h2>Visual Guide: Array Operations</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; font-size: 12px;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">slope</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #e3f2fd; padding: 6px; text-align: center;">5</div>
            <div style="background: #e3f2fd; padding: 6px; text-align: center;">12</div>
            <div style="background: #e3f2fd; padding: 6px; text-align: center;">18</div>
            <div style="background: #e3f2fd; padding: 6px; text-align: center;">8</div>
            <div style="background: #e3f2fd; padding: 6px; text-align: center;">16</div>
            <div style="background: #e3f2fd; padding: 6px; text-align: center;">22</div>
        </div>
    </div>
    <div style="width: 15%; text-align: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">steep = slope &gt; 15</strong>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 8px;">
            <div style="background: #e0e0e0; padding: 6px; text-align: center;">0</div>
            <div style="background: #e0e0e0; padding: 6px; text-align: center;">0</div>
            <div style="background: #d9534f; color: #fff; padding: 6px; text-align: center;">1</div>
            <div style="background: #e0e0e0; padding: 6px; text-align: center;">0</div>
            <div style="background: #d9534f; color: #fff; padding: 6px; text-align: center;">1</div>
            <div style="background: #d9534f; color: #fff; padding: 6px; text-align: center;">1</div>
        </div>
    </div>
</div>
<div style="text-align: center; font-weight: bold; color: #d9534f; margin-bottom: 20px; font-size: 12px;">
    True / False array: 3 steep cells
</div>

<div style="border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff; margin-bottom: 20px;">
    <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">numpy.py</div>
    <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
        import numpy as np<br>
        slope = band.astype("float32")<br>
        steep = slope &gt; 15<br>
        print(steep.sum()) &nbsp; # 3<br>
        print(slope.mean())
    </div>
</div>

<p>
    The diagram shows how a comparison operation on an array creates a True/False mask, which can then be counted or used for further calculations.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is NumPy?</strong> A library of fast arrays for numbers. A raster is a 2D array.</li>
    <li><strong>What is a mask?</strong> A comparison such as <code>slope &gt; 15</code> gives an array of True/False.</li>
    <li><strong>What does np.where do?</strong> It picks values by condition: <code>np.where(slope &gt; 15, 1, 0)</code>.</li>
    <li><strong>Why is NumPy fast?</strong> It works on whole arrays at once, without Python loops.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Replace loops over cells with array operations.</p>
</div>