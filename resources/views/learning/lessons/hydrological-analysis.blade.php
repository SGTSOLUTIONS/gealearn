{{-- resources/views/learning/lessons/7-7-hydrology.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Hydrological analysis models how water moves across the terrain using only a DEM.
    It is used for watershed management, flood prediction, and erosion control.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the four-step hydrological workflow</li>
    <li>Learn flow direction and flow accumulation</li>
    <li>Identify stream networks from a DEM</li>
</ul>

<h2>Visual Guide: Hydrological Analysis Steps</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">1 DEM</strong>
        <div style="height: 50px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 1px; margin-top: 8px; background: #a1887f;">
            <div style="background: #bcaaa4;"></div><div style="background: #a1887f;"></div><div style="background: #8d6e63;"></div><div style="background: #795548;"></div>
            <div style="background: #bcaaa4;"></div><div style="background: #d7ccc8;"></div><div style="background: #a1887f;"></div><div style="background: #8d6e63;"></div>
            <div style="background: #bcaaa4;"></div><div style="background: #d7ccc8;"></div><div style="background: #a1887f;"></div><div style="background: #8d6e63;"></div>
        </div>
        <div style="color: #666; margin-top: 5px; font-size: 10px;">fill sinks first</div>
    </div>
    <div style="width: 18%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">2 Flow direction</strong>
        <div style="height: 50px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 1px; margin-top: 8px; background: #fff;">
            <div style="text-align: center; font-size: 10px;">&#8595;</div><div style="text-align: center; font-size: 10px;">&#8600;</div><div style="text-align: center; font-size: 10px;">&#8595;</div><div style="text-align: center; font-size: 10px;">&#8600;</div>
            <div style="text-align: center; font-size: 10px;">&#8594;</div><div style="text-align: center; font-size: 10px;">&#8595;</div><div style="text-align: center; font-size: 10px;">&#8600;</div><div style="text-align: center; font-size: 10px;">&#8595;</div>
            <div style="text-align: center; font-size: 10px;">&#8594;</div><div style="text-align: center; font-size: 10px;">&#8594;</div><div style="text-align: center; font-size: 10px;">&#8595;</div><div style="text-align: center; font-size: 10px;">&#8600;</div>
        </div>
        <div style="color: #666; margin-top: 5px; font-size: 10px;">steepest neighbour</div>
    </div>
    <div style="width: 18%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">3 Accumulation</strong>
        <div style="height: 50px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 1px; margin-top: 8px;">
            <div style="background: #e3f2fd;"></div><div style="background: #e3f2fd;"></div><div style="background: #90caf9;"></div><div style="background: #90caf9;"></div>
            <div style="background: #e3f2fd;"></div><div style="background: #90caf9;"></div><div style="background: #2196f3;"></div><div style="background: #2196f3;"></div>
            <div style="background: #e3f2fd;"></div><div style="background: #90caf9;"></div><div style="background: #2196f3;"></div><div style="background: #0d47a1;"></div>
        </div>
        <div style="color: #666; margin-top: 5px; font-size: 10px;">upstream cell count</div>
    </div>
    <div style="width: 18%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">4 Stream network</strong>
        <div style="height: 50px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 1px; margin-top: 8px; background: #fff;">
            <div style="background: #fff;"></div><div style="background: #fff;"></div><div style="background: #fff;"></div><div style="background: #2196f3;"></div>
            <div style="background: #fff;"></div><div style="background: #fff;"></div><div style="background: #fff;"></div><div style="background: #2196f3;"></div>
            <div style="background: #fff;"></div><div style="background: #fff;"></div><div style="background: #2196f3;"></div><div style="background: #2196f3;"></div>
        </div>
        <div style="color: #666; margin-top: 5px; font-size: 10px;">cells above threshold</div>
    </div>
</div>

<p>
    The diagram shows the four steps of hydrological analysis: starting with a DEM, determining flow direction, calculating flow accumulation, and extracting the stream network based on a threshold.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does hydrological analysis model?</strong> How water flows over the terrain, using a DEM.</li>
    <li><strong>Why fill sinks first?</strong> Small pits in a DEM trap water; filling them lets flow continue downhill.</li>
    <li><strong>What is flow direction?</strong> Each cell points to its steepest downhill neighbour (D8: 8 possible directions).</li>
    <li><strong>What is flow accumulation?</strong> The number of upstream cells draining into each cell. High values mark streams.</li>
    <li><strong>How is a stream network made?</strong> Keep cells whose accumulation is above a threshold; a lower threshold gives a denser network.</li>
    <li><strong>Which tools can I use?</strong> QGIS: GRASS r.watershed / r.stream.extract or SAGA tools. ArcGIS Pro: Hydrology toolset.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use a good DEM: errors in the terrain show up as wrong streams.</p>
</div>