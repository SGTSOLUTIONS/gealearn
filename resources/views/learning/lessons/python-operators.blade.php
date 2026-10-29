{{-- resources/views/learning/lessons/8-5-operators.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Operators calculate, compare and combine values.
    Understanding the difference between arithmetic, comparison, logical, and membership operators is key to writing correct scripts.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Use arithmetic and comparison operators</li>
    <li>Combine conditions with logical operators</li>
    <li>Understand the difference between = and ==</li>
</ul>

<h2>Visual Guide: Operator Types</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 55%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">operators.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            density = population / area_ha <span style="color: #999; float: right;"># 432.0</span><br>
            big = population &gt; 5000 <span style="color: #999; float: right;"># True</span><br>
            ok = big and is_urban <span style="color: #999; float: right;"># True</span><br>
            print("Ward" in name) <span style="color: #999; float: right;"># True</span><br>
            half = population // 2 <span style="color: #999; float: right;"># 2700</span>
        </div>
    </div>
    <div style="width: 40%; display: flex; flex-direction: column; gap: 8px;">
        <div style="border: 2px solid #282A35; border-radius: 6px; padding: 6px; background: #fff; text-align: center; font-size: 11px;">
            <strong>Arithmetic</strong><br>+ - * / // % **
        </div>
        <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 6px; background: #fff; text-align: center; font-size: 11px;">
            <strong>Comparison</strong><br>== != &gt; &lt; &gt;= &lt;=
        </div>
        <div style="border: 2px solid #FF9800; border-radius: 6px; padding: 6px; background: #fff; text-align: center; font-size: 11px;">
            <strong>Logical</strong><br>and &nbsp; or &nbsp; not
        </div>
        <div style="border: 2px solid #2196F3; border-radius: 6px; padding: 6px; background: #fff; text-align: center; font-size: 11px;">
            <strong>Membership</strong><br>in &nbsp; not in
        </div>
    </div>
</div>
<div style="text-align: center; font-size: 12px; color: #d9534f; font-weight: bold; margin-bottom: 20px;">
    = assigns a value &nbsp;|&nbsp; == compares two values
</div>

<p>
    The diagram shows examples of each operator type and the key distinction between assignment (=) and comparison (==).
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Which arithmetic operators exist?</strong> + - * / // % ** (// whole-number division, % remainder, ** power).</li>
    <li><strong>What are comparison operators?</strong> == != &gt; &gt;= &lt; &lt;=, the result is True or False.</li>
    <li><strong>What are logical operators?</strong> and, or, not.</li>
    <li><strong>What is the difference between = and ==?</strong> = assigns a value; == compares two values.</li>
    <li><strong>What do in / not in test?</strong> Whether a value is inside a text or a collection.</li>
    <li><strong>Why does 5400 / 12.5 give a decimal?</strong> / always returns a float; use // for whole-number division.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Mixing up = and == is the most common beginner mistake.</p>
</div>