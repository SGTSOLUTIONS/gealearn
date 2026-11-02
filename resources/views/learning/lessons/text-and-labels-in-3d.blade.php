{{-- resources/views/learning/lessons/12-11-labels.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Labels and billboards make a 3D scene readable: they show names, values and icons that always face the camera.
    Without labels, a 3D scene is hard to interpret.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Add text labels to a scene</li>
    <li>Use billboards for icons</li>
    <li>Control visibility by distance</li>
</ul>

<h2>Visual Guide: Labels and Billboards</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">labels.js</div>
        <div style="padding: 10px; font-family: Consolas, monospace; font-size: 12px; text-align: left;">
            viewer.entities.add({<br>
            &nbsp;&nbsp;position: Cesium.Cartesian3<br>
            &nbsp;&nbsp;&nbsp;&nbsp;.fromDegrees(80.27, 13.08, 50),<br>
            &nbsp;&nbsp;label: {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;text: 'Ward A',<br>
            &nbsp;&nbsp;&nbsp;&nbsp;font: '14px sans-serif',<br>
            &nbsp;&nbsp;&nbsp;&nbsp;scale: 1.0<br>
            &nbsp;&nbsp;}<br>
            });
        </div>
    </div>
    <div style="width: 45%; display: flex; flex-direction: column; gap: 8px; font-size: 11px;">
        <div style="border: 2px solid #282A35; border-radius: 6px; padding: 6px; background: #fff; text-align: center;">
            <strong>Label</strong><br><span style="font-size: 10px; color: #666;">text that faces the camera</span>
        </div>
        <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 6px; background: #fff; text-align: center;">
            <strong>Billboard</strong><br><span style="font-size: 10px; color: #666;">icon or marker image</span>
        </div>
        <div style="border: 2px solid #FF9800; border-radius: 6px; padding: 6px; background: #fff; text-align: center;">
            <strong>distanceDisplayCondition</strong><br><span style="font-size: 10px; color: #666;">show only at set distances</span>
        </div>
    </div>
</div>

<p>
    The diagram shows the code to add a label and the three label-related options in CesiumJS.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a label?</strong> Text drawn at a 3D position that always faces the camera.</li>
    <li><strong>What is a billboard?</strong> An image or icon that always faces the camera.</li>
    <li><strong>How do I add a label?</strong> <code>viewer.entities.add({ position, label: { text } })</code>.</li>
    <li><strong>How do I control clutter?</strong> Use <code>distanceDisplayCondition</code> so labels show only in a range.</li>
    <li><strong>How do I avoid overlap?</strong> Reduce label count at low zoom levels and use decluttering tools.</li>
    <li><strong>Can labels show values?</strong> Yes. Build the text from a feature attribute at load time.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Turn labels off for far zoom levels. Hundreds of labels make a scene unreadable.</p>
</div>