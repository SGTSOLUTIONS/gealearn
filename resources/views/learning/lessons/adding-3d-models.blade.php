{{-- resources/views/learning/lessons/12-8-models.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    3D models such as buildings, trees and vehicles are added to a Cesium scene as glTF or GLB files, either as entities or primitives.
    Models bring realism and recognisable objects to the 3D scene.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Add a model to the scene</li>
    <li>Position and orient a model</li>
    <li>Choose between entities and primitives</li>
</ul>

<h2>Visual Guide: Adding a Model</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">model.js</div>
        <div style="padding: 10px; font-family: Consolas, monospace; font-size: 12px; text-align: left;">
            const position = Cesium.Cartesian3<br>
            &nbsp;&nbsp;.fromDegrees(80.27, 13.08, 10);<br><br>
            viewer.entities.add({<br>
            &nbsp;&nbsp;position: position,<br>
            &nbsp;&nbsp;model: {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;uri: 'models/building.glb',<br>
            &nbsp;&nbsp;&nbsp;&nbsp;scale: 1.0<br>
            &nbsp;&nbsp;}<br>
            });
        </div>
    </div>
    <div style="width: 45%; display: flex; flex-direction: column; gap: 8px; font-size: 11px;">
        <div style="border: 2px solid #282A35; border-radius: 6px; padding: 6px; background: #fff; text-align: center;">
            <strong>Entity</strong><br><span style="font-size: 10px; color: #666;">easy, high-level</span>
        </div>
        <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 6px; background: #fff; text-align: center;">
            <strong>Primitive</strong><br><span style="font-size: 10px; color: #666;">fast, low-level</span>
        </div>
        <div style="border: 2px solid #2196F3; border-radius: 6px; padding: 6px; background: #fff; text-align: center;">
            <strong>3D Tiles</strong><br><span style="font-size: 10px; color: #666;">many models</span>
        </div>
    </div>
</div>

<p>
    The diagram shows the code to add a model as an entity, and the three ways to add models to a scene.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Which format do models use?</strong> glTF or GLB. Both work directly in Cesium.</li>
    <li><strong>How do I add one model?</strong> <code>viewer.entities.add({ position, model: { uri } })</code>.</li>
    <li><strong>How do I place it?</strong> Give its position with <code>Cartesian3.fromDegrees(lon, lat, height)</code>.</li>
    <li><strong>How do I rotate it?</strong> Use <code>orientation</code> with a heading, pitch and roll quaternion.</li>
    <li><strong>Entity or primitive?</strong> Entities are simpler; primitives are faster for many models.</li>
    <li><strong>How do I add hundreds of buildings?</strong> Use 3D Tiles, not one entity per building.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep model files small. Reduce polygons and textures before loading them in the browser.</p>
</div>