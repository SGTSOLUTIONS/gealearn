{{-- resources/views/learning/lessons/8-8-functions.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A function packages steps under a name so you can reuse them with different inputs.
    Good functions make your code readable, testable, and reusable.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Define and call a function</li>
    <li>Understand parameters and return values</li>
    <li>Write clear docstrings</li>
</ul>

<h2>Visual Guide: Function Input and Return</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">functions.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            def area_ha(area_m2):<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"""Convert m2 to hectares."""<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return area_m2 / 10000<br><br>
            print(area_ha(25000)) <span style="color: #999;"># 2.5</span>
        </div>
    </div>
    <div style="width: 45%; display: flex; align-items: center; justify-content: center; font-size: 11px;">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 10px;">
            <div style="font-weight: bold; color: #282A35;">input</div>
            <div style="border: 1px solid #ccc; padding: 6px 12px; border-radius: 4px; background: #e3f2fd; font-weight: bold;">25000</div>
            <div style="font-size: 20px; color: #FF9800;">&darr;</div>
            <div style="border: 2px solid #04AA6D; padding: 10px; border-radius: 4px; background: #e8f5e9; text-align: center;">
                <strong>area_ha()</strong><br>
                <span style="font-size: 10px;">m2 / 10000</span>
            </div>
            <div style="font-size: 20px; color: #FF9800;">&darr;</div>
            <div style="font-weight: bold; color: #282A35;">return</div>
            <div style="border: 1px solid #ccc; padding: 6px 12px; border-radius: 4px; background: #c8e6c9; font-weight: bold;">2.5</div>
        </div>
    </div>
</div>

<p>
    The diagram shows how a function takes an input (argument), processes it, and returns a result.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a function?</strong> A named, reusable block: <code>def name(inputs): return result</code>.</li>
    <li><strong>Why use functions?</strong> Reuse, easier testing and clearer scripts.</li>
    <li><strong>Parameter or argument?</strong> Parameters are names in the def line; arguments are the values you pass in.</li>
    <li><strong>return or print?</strong> return gives a value back; print only shows it.</li>
    <li><strong>Can parameters have defaults?</strong> Yes: <code>def buffer(dist=100)</code>.</li>
    <li><strong>What is a docstring?</strong> Text in triple quotes that describes what the function does.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> One function, one job: keep functions short.</p>
</div>