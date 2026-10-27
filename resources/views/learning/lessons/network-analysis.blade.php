{{-- resources/views/learning/lessons/5-13-network-analysis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Network analysis finds routes and reachable areas along connected lines such as roads.
    It uses the structure of the network (edges and nodes) to calculate real travel distances.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what a network is</li>
    <li>Find a shortest path</li>
    <li>Create a service area</li>
</ul>

<h2>Visual Guide: Network Analysis</h2>
<div style="border: 1px solid #ccc; border-radius: 6px; padding: 15px; background: #fff; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="display: flex; justify-content: center; align-items: center; gap: 5px; margin-bottom: 15px;">
        <div style="width: 30px; height: 30px; background: #04AA6D; border-radius: 50%; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: bold;">A</div>
        <div style="width: 40px; height: 2px; background: #04AA6D; position: relative;"><span style="position: absolute; top: -15px; left: 15px; font-size: 10px; color: #666;">2</span></div>
        <div style="width: 30px; height: 30px; background: #282A35; border-radius: 50%; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: bold;">C</div>
        <div style="width: 40px; height: 2px; background: #04AA6D; position: relative;"><span style="position: absolute; top: -15px; left: 15px; font-size: 10px; color: #666;">1</span></div>
        <div style="width: 30px; height: 30px; background: #282A35; border-radius: 50%; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: bold;">B</div>
        <div style="width: 40px; height: 2px; background: #04AA6D; position: relative;"><span style="position: absolute; top: -15px; left: 15px; font-size: 10px; color: #666;">5</span></div>
        <div style="width: 30px; height: 30px; background: #282A35; border-radius: 50%; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: bold;">D</div>
        <div style="width: 40px; height: 2px; background: #04AA6D; position: relative;"><span style="position: absolute; top: -15px; left: 15px; font-size: 10px; color: #666;">2</span></div>
        <div style="width: 30px; height: 30px; background: #282A35; border-radius: 50%; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: bold;">E</div>
        <div style="width: 40px; height: 2px; background: #04AA6D; position: relative;"><span style="position: absolute; top: -15px; left: 15px; font-size: 10px; color: #666;">3</span></div>
        <div style="width: 30px; height: 30px; background: #04AA6D; border-radius: 50%; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: bold;">F</div>
    </div>
    <div style="color: #d9534f; font-weight: bold;">Shortest path A to F = 13 km (A &rarr; C &rarr; B &rarr; D &rarr; E &rarr; F)</div>
    <div style="margin-top: 5px; color: #666;">Service area = all places reachable within a set cost</div>
</div>

<p>
    The diagram shows a simple network with edge numbers representing costs (e.g., distance in km). The shortest path from A to F is highlighted in orange. The tool calculates the lowest-cost route based on the network structure.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a network?</strong> Lines (edges) joined at nodes. The lines must connect properly.</li>
    <li><strong>What is a shortest path?</strong> The lowest-cost route between two points (cost = distance or time).</li>
    <li><strong>What is a service area?</strong> Everything reachable within a distance or time limit.</li>
    <li><strong>Where are the tools?</strong> Processing Toolbox &gt; Network analysis.</li>
    <li><strong>Which settings matter?</strong> Strategy (shortest or fastest), one-way field and speed field.</li>
    <li><strong>What if no route is found?</strong> Look for a gap or dangle in the road layer.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> No route found? Look for a gap or dangle in the road layer (Module 4 topology).</p>
</div>