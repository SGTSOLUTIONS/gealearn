{{-- resources/views/learning/lessons/7-16-spatiotemporal.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Spatiotemporal analysis studies how patterns move and change across space and time together.
    It moves beyond static snapshots to understand dynamic processes.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the space-time cube</li>
    <li>Analyse trajectories</li>
    <li>Identify emerging hot spots</li>
</ul>

<h2>Visual Guide: Space-Time Analysis</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff; position: relative;">
        <strong style="color: #282A35;">Space-time cube</strong>
        <div style="height: 120px; position: relative; margin-top: 10px; perspective: 200px;">
            <div style="position: absolute; bottom: 10px; left: 10px; width: 100px; height: 30px; background: #bbdefb; transform: skewX(30deg); border: 1px solid #2196f3;"></div>
            <div style="position: absolute; bottom: 30px; left: 10px; width: 100px; height: 30px; background: #c8e6c9; transform: skewX(30deg); border: 1px solid #4caf50;"></div>
            <div style="position: absolute; bottom: 50px; left: 10px; width: 100px; height: 30px; background: #ffe0b2; transform: skewX(30deg); border: 1px solid #ff9800;"></div>
            <div style="position: absolute; bottom: 70px; left: 10px; width: 100px; height: 30px; background: #ffcdd2; transform: skewX(30deg); border: 1px solid #f44336;"></div>
            <div style="position: absolute; bottom: 10px; left: 20px; width: 2px; height: 90px; border-left: 2px dotted #d9534f;"></div>
            <div style="position: absolute; top: 5px; left: 0; font-size: 10px; font-weight: bold;">t4</div>
            <div style="position: absolute; top: 25px; left: 0; font-size: 10px; font-weight: bold;">t3</div>
            <div style="position: absolute; top: 45px; left: 0; font-size: 10px; font-weight: bold;">t2</div>
            <div style="position: absolute; top: 65px; left: 0; font-size: 10px; font-weight: bold;">t1</div>
        </div>
    </div>
    <div style="width: 45%; display: flex; flex-direction: column; gap: 8px; text-align: left; font-size: 11px;">
        <div style="border: 2px solid #282A35; border-radius: 6px; padding: 8px; background: #fff;">
            <strong>Trajectories</strong><br>GPS tracks with timestamps
        </div>
        <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 8px; background: #fff;">
            <strong>Space-time cube</strong><br>one area stacked by time step
        </div>
        <div style="border: 2px solid #FF9800; border-radius: 6px; padding: 8px; background: #fff;">
            <strong>Emerging hot spots</strong><br>clusters that appear or fade
        </div>
    </div>
</div>

<p>
    The diagram shows a space-time cube where each layer is the same area at a different time step. A trajectory (dotted line) traces movement across these layers.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is spatiotemporal analysis?</strong> Analysis of patterns across space and time together.</li>
    <li><strong>What is a space-time cube?</strong> Layers of the same area stacked by time step, so each cell holds a time series.</li>
    <li><strong>What are trajectories?</strong> Movement paths with timestamps, e.g. animals, vehicles, people.</li>
    <li><strong>Give examples.</strong> Disease spread, traffic peaks, migration, monthly crime hot spots.</li>
    <li><strong>What patterns are sought?</strong> Trends, emerging hot spots and clusters that exist in both place and time.</li>
    <li><strong>Which tools help?</strong> QGIS Temporal Controller and trajectory plugins, Python (MovingPandas), ArcGIS Space Time Pattern Mining.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Decide the time step (hour, day, month) before building a space-time cube.</p>
</div>