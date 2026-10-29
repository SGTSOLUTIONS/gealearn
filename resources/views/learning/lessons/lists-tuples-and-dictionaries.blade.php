{{-- resources/views/learning/lessons/8-9-collections.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Collections hold many values in one variable. The three main kinds suit different jobs.
    Choosing the right collection type makes your code clearer and more efficient.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand list, tuple, and dictionary</li>
    <li>Choose the right type for the data</li>
    <li>Access and modify elements</li>
</ul>

<h2>Visual Guide: The Three Collection Types</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 32%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden; background: #fff;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold; text-align: center;">list [ ]</div>
        <div style="padding: 8px; font-family: Consolas, monospace;">
            wards = ['A', 'B']<br>
            wards.append('C')<br>
            wards[0] &nbsp; # 'A'
        </div>
        <div style="padding: 5px; text-align: center; font-size: 10px; color: #666;">ordered, changeable</div>
        <div style="padding: 5px; text-align: center; font-weight: bold; color: #282A35;">many similar items</div>
    </div>
    <div style="width: 32%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden; background: #fff;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold; text-align: center;">tuple ( )</div>
        <div style="padding: 8px; font-family: Consolas, monospace;">
            xy = (78.0, 20.5)<br>
            xy[0] &nbsp; # 78.0
        </div>
        <div style="padding: 5px; text-align: center; font-size: 10px; color: #666;">ordered, fixed</div>
        <div style="padding: 5px; text-align: center; font-weight: bold; color: #04AA6D;">fixed values, e.g. coordinates</div>
    </div>
    <div style="width: 32%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden; background: #fff;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold; text-align: center;">dict { }</div>
        <div style="padding: 8px; font-family: Consolas, monospace;">
            ward = {<br>
            &nbsp;&nbsp;'name': 'Ward A',<br>
            &nbsp;&nbsp;'pop': 5400}<br>
            ward['pop'] # 5400
        </div>
        <div style="padding: 5px; text-align: center; font-size: 10px; color: #666;">key and value</div>
        <div style="padding: 5px; text-align: center; font-weight: bold; color: #FF9800;">labelled data, e.g. attributes</div>
    </div>
</div>

<p>
    The diagram shows the syntax and key characteristics of the three main collection types.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a list?</strong> An ordered, changeable collection: ["A", "B"]; indexes start at 0.</li>
    <li><strong>What is a tuple?</strong> An ordered, fixed collection: (78.0, 20.5); good for coordinates.</li>
    <li><strong>What is a dictionary?</strong> Key-value pairs: {"name": "Ward A", "pop": 5400}; like a feature's attributes.</li>
    <li><strong>How do I add to a list?</strong> append() to add at the end, insert() at a position.</li>
    <li><strong>What is slicing?</strong> <code>wards[0:2]</code> returns the first two items.</li>
    <li><strong>Which one should I use?</strong> List for many similar items, tuple for fixed values, dict for labelled data.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> A feature's attributes are a dictionary; a coordinate pair is a tuple.</p>
</div>