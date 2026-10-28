{{-- resources/views/learning/lessons/7-8-watershed.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A watershed is the area that drains to a chosen outlet. It is derived from flow direction and flow accumulation.
    It is a fundamental unit in hydrology and land management.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what a watershed is</li>
    <li>Follow the delineation steps</li>
    <li>Snap the pour point correctly</li>
</ul>

<h2>Visual Guide: Watershed Delineation</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #e3f2fd;">
        <div style="font-size: 11px; color: #666; margin-bottom: 8px;">ridge line = watershed boundary</div>
        <div style="height: 100px; position: relative;">
            <div style="position: absolute; top: 10px; left: 20px; width: 100px; height: 80px; border: 2px dashed #282A35; border-radius: 50%; background: #e3f2fd;"></div>
            <div style="position: absolute; top: 50px; left: 70px; width: 40px; height: 2px; background: #2196f3;"></div>
            <div style="position: absolute; top: 50px; left: 70px; width: 2px; height: 30px; background: #2196f3;"></div>
            <div style="position: absolute; top: 80px; left: 72px; width: 0; height: 0; border-left: 5px solid transparent; border-right: 5px solid transparent; border-top: 10px solid #d9534f;"></div>
            <div style="position: absolute; bottom: 5px; left: 60px; font-size: 10px; color: #d9534f; font-weight: bold;">pour point (outlet)</div>
        </div>
    </div>
    <div style="width: 45%; display: flex; flex-direction: column; gap: 5px; text-align: left; font-size: 11px;">
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 12px;"><strong>1</strong> Fill sinks</div>
        <div style="color: #FF9800; text-align: center; line-height: 1;">&darr;</div>
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 12px;"><strong>2</strong> Flow direction</div>
        <div style="color: #FF9800; text-align: center; line-height: 1;">&darr;</div>
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 12px;"><strong>3</strong> Flow accumulation</div>
        <div style="color: #FF9800; text-align: center; line-height: 1;">&darr;</div>
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 12px;"><strong>4</strong> Set the pour point</div>
        <div style="color: #FF9800; text-align: center; line-height: 1;">&darr;</div>
        <div style="background: #fff; border: 1px solid #ccc; padding: 4px 8px; border-radius: 12px;"><strong>5</strong> Delineate the watershed</div>
    </div>
</div>

<p>
    The diagram shows a watershed as the land area draining to a single outlet (pour point), with the steps to delineate it using a DEM.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a watershed?</strong> The land area where all water drains to one outlet (also called a catchment or basin).</li>
    <li><strong>What is a pour point?</strong> The outlet you choose; the watershed is everything that drains to it.</li>
    <li><strong>What are the steps?</strong> Fill sinks, flow direction, flow accumulation, snap the pour point, delineate.</li>
    <li><strong>Why snap the pour point?</strong> It must sit on the high-accumulation stream cell, otherwise the basin comes out tiny.</li>
    <li><strong>What forms the boundary?</strong> Ridge lines: the highest ground around the basin.</li>
    <li><strong>What is it used for?</strong> Flood studies, water supply, erosion control and planning.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Check the result by overlaying known rivers: the stream should lie inside the basin.</p>
</div>