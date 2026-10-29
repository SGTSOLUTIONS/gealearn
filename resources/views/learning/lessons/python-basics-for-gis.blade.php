{{-- resources/views/learning/lessons/8-3-python-basics.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Python is the most popular GIS language: simple to read, and almost every GIS tool has a Python interface.
    This page covers where to run it and basic syntax rules.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know where to run Python code</li>
    <li>Understand basic syntax and indentation</li>
    <li>Use the print function</li>
</ul>

<h2>Visual Guide: Script and Output</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">script.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px;">
            print("Hello, GIS!")<br>
            layer_count = 3<br>
            print("Layers:", layer_count)
        </div>
    </div>
    <div style="width: 10%; text-align: center; font-size: 20px; color: #FF9800; align-self: center;">&rarr;</div>
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #f9f9f9;">
        <div style="padding: 6px 12px; background: #e0e0e0; font-size: 11px; color: #282A35;">Output</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            Hello, GIS!<br><br>
            Layers: 3
        </div>
    </div>
</div>

<h2>Where to Run Python</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="width: 23%; border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9;"><strong>QGIS Python Console</strong><br>Ctrl+Alt+P</div>
    <div style="width: 23%; border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9;"><strong>VS Code or IDLE</strong><br>Full editor</div>
    <div style="width: 23%; border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9;"><strong>Jupyter Notebook</strong><br>Interactive</div>
    <div style="width: 23%; border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9;"><strong>Command line</strong><br>python script.py</div>
</div>

<p>
    The diagram shows a simple script and its output, along with the four main environments where you can run Python code.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is Python?</strong> A readable, general-purpose language with a huge set of GIS libraries.</li>
    <li><strong>How does Python run a script?</strong> The interpreter reads the .py file line by line and executes it.</li>
    <li><strong>Where can I run Python in QGIS?</strong> Plugins &gt; Python Console (Ctrl+Alt+P) or the Processing script editor.</li>
    <li><strong>Which other tools can I use?</strong> VS Code, IDLE, Jupyter Notebook or the command line.</li>
    <li><strong>What does print() do?</strong> It shows a value in the output.</li>
    <li><strong>How are code blocks marked?</strong> By indentation (4 spaces), not braces. Comments start with #.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Run small snippets in the QGIS Python Console to learn quickly.</p>
</div>