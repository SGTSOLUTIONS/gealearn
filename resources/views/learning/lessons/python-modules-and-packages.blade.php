{{-- resources/views/learning/lessons/8-12-modules.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Modules and packages are ready-made code you import instead of writing yourself.
    They are the building blocks of professional Python development.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Import modules and packages</li>
    <li>Install packages with pip</li>
    <li>Organise your own code</li>
</ul>

<h2>Visual Guide: Imports and Project Structure</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">imports.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            import geopandas as gpd<br>
            from shapely.geometry import Point<br>
            import my_tools &nbsp; # your own my_tools.py<br><br>
            # in the terminal:<br>
            pip install geopandas
        </div>
    </div>
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #fff;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold; text-align: center;">Project folder</div>
        <div style="padding: 10px; font-family: Consolas, monospace; font-size: 12px; text-align: left;">
            project/<br>
            &nbsp;&nbsp;main.py<br>
            &nbsp;&nbsp;my_tools.py<br>
            &nbsp;&nbsp;data/<br>
            &nbsp;&nbsp;.venv/ &nbsp; # packages
        </div>
    </div>
</div>
<div style="display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="width: 32%; border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9;"><strong>pip</strong><br>PyPI packages</div>
    <div style="width: 32%; border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9;"><strong>conda-forge</strong><br>easiest for GDAL stack</div>
    <div style="width: 32%; border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9;"><strong>.venv</strong><br>one set per project</div>
</div>

<p>
    The diagram shows how to import libraries, install packages, and organise a project with a virtual environment.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a module?</strong> A .py file whose functions you can import.</li>
    <li><strong>What is a package?</strong> A folder of modules, such as geopandas.</li>
    <li><strong>How do I install one?</strong> <code>pip install geopandas</code> or <code>conda install -c conda-forge geopandas</code>.</li>
    <li><strong>Which import styles exist?</strong> <code>import x</code>, <code>import x as y</code> and <code>from x import y</code>.</li>
    <li><strong>What is a virtual environment?</strong> A separate set of packages per project: <code>python -m venv .venv</code>.</li>
    <li><strong>Can I import my own code?</strong> Yes. Save functions in my_tools.py and <code>import my_tools</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Create one environment per project so versions never clash.</p>
</div>