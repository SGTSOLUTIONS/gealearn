{{-- resources/views/learning/lessons/8-4-variables.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A variable is a named container for a value; its data type decides what you can do with it.
    Python is dynamically typed, so you don't need to declare the type.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the basic data types</li>
    <li>Assign values to variables</li>
    <li>Check and convert types</li>
</ul>

<h2>Visual Guide: Data Types and Assignment</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 60%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">variables.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px;">
            name = "Ward A" <span style="color: #999; float: right;"># str</span><br>
            population = 5400 <span style="color: #999; float: right;"># int</span><br>
            area_ha = 12.5 <span style="color: #999; float: right;"># float</span><br>
            is_urban = True <span style="color: #999; float: right;"># bool</span><br>
            coords = (78.0, 20.5) <span style="color: #999; float: right;"># tuple</span><br>
            wards = ["A", "B"] <span style="color: #999; float: right;"># list</span><br>
            ward = {"pop": 5400} <span style="color: #999; float: right;"># dict</span>
        </div>
    </div>
    <div style="width: 35%; display: flex; flex-direction: column; justify-content: center; gap: 5px; font-size: 11px;">
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 4px;"><strong>str</strong> text</div>
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 4px;"><strong>int</strong> whole number</div>
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 4px;"><strong>float</strong> decimal number</div>
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 4px;"><strong>bool</strong> True / False</div>
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 4px;"><strong>tuple</strong> fixed group</div>
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 4px;"><strong>list</strong> changeable group</div>
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 4px;"><strong>dict</strong> key and value</div>
    </div>
</div>

<p>
    The diagram shows examples of each basic data type and the syntax for assigning them to variables in Python.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a variable?</strong> A name that stores a value, e.g. <code>population = 5400</code>.</li>
    <li><strong>What are the basic data types?</strong> str text, int whole number, float decimal, bool True/False.</li>
    <li><strong>How do I check a type?</strong> <code>type(x)</code>.</li>
    <li><strong>How do I convert types?</strong> <code>int("5400")</code>, <code>float("12.5")</code>, <code>str(5400)</code>.</li>
    <li><strong>What are the naming rules?</strong> Letters, digits and underscores; no spaces; do not start with a digit. Use clear names like area_ha.</li>
    <li><strong>Is Python case sensitive?</strong> Yes: Pop and pop are different names.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use names that say what the value means, e.g. area_ha, not a.</p>
</div>