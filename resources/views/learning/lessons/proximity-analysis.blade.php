{{-- resources/views/learning/lessons/5-12-proximity.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Proximity analysis measures how near features are to each other.
    It is useful for finding the closest facility or creating distance zones.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Find the nearest facility</li>
    <li>Create multiple ring buffers</li>
    <li>Understand the difference between straight-line and travel distance</li>
</ul>

<h2>Visual Guide: Proximity Tools</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Nearest facility</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 10px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 50px; left: 20px; width: 8px; height: 8px; background: #2196F3; border-radius: 50%;"></div>
            <div style="position: absolute; top: 30px; left: 50px; width: 15px; height: 15px; background: #d9534f; border-radius: 3px; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; font-size: 10px;">+</div>
            <div style="position: absolute; top: 15px; left: 18px; width: 30px; height: 1px; border-top: 1px dashed #d9534f; transform: rotate(45deg);"></div>
            <div style="position: absolute; top: 40px; left: 25px; width: 25px; height: 1px; border-top: 1px dashed #d9534f;"></div>
        </div>
        <div style="color: #666; margin-top: 5px;">Join attributes by nearest</div>
    </div>
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Multiple ring buffer</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 25px; left: 30px; width: 40px; height: 40px; border: 1px solid #2196F3; border-radius: 50%; background: rgba(33, 150, 243, 0.05);"></div>
            <div style="position: absolute; top: 15px; left: 20px; width: 60px; height: 60px; border: 1px solid #2196F3; border-radius: 50%; background: rgba(33, 150, 243, 0.05);"></div>
            <div style="position: absolute; top: 5px; left: 10px; width: 80px; height: 80px; border: 1px solid #2196F3; border-radius: 50%; background: rgba(33, 150, 243, 0.05);"></div>
            <div style="position: absolute; top: 30px; left: 40px; font-size: 10px; font-weight: bold;">500m</div>
            <div style="position: absolute; top: 45px; left: 20px; font-size: 10px; font-weight: bold;">1km</div>
        </div>
        <div style="color: #666; margin-top: 5px;">Multiple ring buffer (constant distance)</div>
    </div>
</div>

<p>
    The diagram shows two proximity tools: finding the nearest facility (left) and creating multiple ring buffers (right). The left diagram connects points to their closest facility. The right diagram creates concentric zones at set distances.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does proximity analysis measure?</strong> How near features are to each other.</li>
    <li><strong>What is Multiple Ring Buffer?</strong> Zones at set distances, e.g. 500 m, 1 km and 2 km.</li>
    <li><strong>What does Join Attributes by Nearest do?</strong> Finds the closest feature and its distance.</li>
    <li><strong>What does Distance Matrix do?</strong> Lists distances between points and their nearest neighbours.</li>
    <li><strong>What does Nearest Neighbour Analysis show?</strong> Whether points are clustered or spread out.</li>
    <li><strong>Is straight-line distance travel distance?</strong> No. Use network analysis for roads.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Straight-line distance is not travel distance — use network analysis for roads.</p>
</div>