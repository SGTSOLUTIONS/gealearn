{{-- resources/views/learning/lessons/8-1-intro.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GIS programming means writing code to automate, extend and customise GIS work.
    It follows a simple four-step cycle: read, process, analyse, and save.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the benefits of scripting GIS work</li>
    <li>Identify the four steps of a GIS script</li>
    <li>Know where to run your code</li>
</ul>

<h2>Visual Guide: The Four-Step Script Flow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-weight: bold;">1 Read</div>
        <div style="padding: 8px; background: #fff;">open files, databases, APIs</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-weight: bold;">2 Process</div>
        <div style="padding: 8px; background: #fff;">reproject, clean, filter</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 8px; font-weight: bold;">3 Analyse</div>
        <div style="padding: 8px; background: #fff;">buffer, join, summarise</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 8px; font-weight: bold;">4 Save</div>
        <div style="padding: 8px; background: #fff;">files, maps, reports</div>
    </div>
</div>

<h3>Why Script GIS Work?</h3>
<div style="display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9; width: 22%;"><strong>Repeatable</strong></div>
    <div style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9; width: 22%;"><strong>Fast on many files</strong></div>
    <div style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9; width: 22%;"><strong>Fewer manual errors</strong></div>
    <div style="border: 1px solid #ccc; padding: 8px; border-radius: 4px; background: #f9f9f9; width: 22%;"><strong>Easy to share</strong></div>
</div>

<p>
    The diagram shows the repetitive four-step cycle that every GIS script follows, and the four main reasons why scripting saves time and reduces errors compared to clicking through menus.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is GIS programming?</strong> Writing code to automate, extend and customise GIS work.</li>
    <li><strong>Why script instead of clicking?</strong> Scripts are repeatable, fast on many files, less error-prone and easy to share.</li>
    <li><strong>What can scripts do?</strong> Convert data, run analysis, build maps, update databases and create new tools.</li>
    <li><strong>What is a typical script flow?</strong> Read data, process it, analyse it, then save or display the result.</li>
    <li><strong>Do I need to be a programmer?</strong> No. Basic Python is enough to start; grow from small scripts.</li>
    <li><strong>Where does the code run?</strong> QGIS or ArcGIS Python console, an editor such as VS Code, Jupyter notebooks or the command line.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Script any task you will do more than twice.</p>
</div>