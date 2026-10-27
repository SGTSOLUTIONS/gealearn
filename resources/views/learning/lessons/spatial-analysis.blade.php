{{-- resources/views/learning/lessons/5-1-spatial-analysis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Spatial analysis uses the location of features to answer questions and reveal patterns that a plain table cannot show.
    It moves you from simply viewing a map to understanding what the data means geographically.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the workflow of spatial analysis</li>
    <li>Identify the main tool groups covered in this module</li>
    <li>Choose the right questions to ask of your data</li>
</ul>

<h2>Visual Guide: Analysis Workflow & Tool Groups</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Ask</div>
        <div style="padding: 8px; background: #fff;">Which schools are near a river?</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Prepare</div>
        <div style="padding: 8px; background: #fff;">same CRS, clean data</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Analyse</div>
        <div style="padding: 8px; background: #fff;">buffer, overlay, query, measure</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">4 Present</div>
        <div style="padding: 8px; background: #fff;">map, table, report</div>
    </div>
</div>

<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #f9f9f9;"><strong>Queries</strong><br>5.2 – 5.3</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #f9f9f9;"><strong>Buffer / proximity</strong><br>5.4, 5.12</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #f9f9f9;"><strong>Overlay & editing</strong><br>5.5 – 5.11</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #f9f9f9;"><strong>Network</strong><br>5.13</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #f9f9f9;"><strong>Measure</strong><br>5.14</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #f9f9f9;"><strong>Raster</strong><br>5.15 – 5.16</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #f9f9f9;"><strong>Terrain</strong><br>5.17 – 5.20</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 6px; background: #f9f9f9;"><strong>Locate and field</strong><br>5.21 – 5.25</div>
</div>

<p>
    The diagram shows the four-step spatial analysis workflow and the tool groups you will use throughout this module. Every analysis starts with a clear question and ends with a presentable result.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does spatial analysis do?</strong> It uses the location of features to answer questions and reveal patterns that a plain table cannot show.</li>
    <li><strong>What questions does it answer?</strong> Where is it? What is near it? What overlaps it? How far or how long?</li>
    <li><strong>What is the basic workflow?</strong> Ask a clear question, prepare the data, choose a tool, check the result.</li>
    <li><strong>Which CRS should I use for measuring?</strong> A projected CRS (metres).</li>
    <li><strong>Where are the analysis tools?</strong> In the Processing Toolbox (Ctrl+Alt+T) and the Vector and Raster menus.</li>
    <li><strong>What are the main tool groups?</strong> Queries, buffers, overlays, proximity, network, raster and terrain analysis.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Write the question in one sentence first — it tells you which tool to use.</p>
</div>