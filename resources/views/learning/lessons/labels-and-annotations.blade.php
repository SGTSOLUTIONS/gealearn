{{-- resources/views/learning/lessons/3-14-labels.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Labels show attribute values on the map. Annotations are manual notes you place yourself.
    Both help communicate information, but they work in different ways.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Turn on labels from a field</li>
    <li>Improve label readability with buffers</li>
    <li>Create manual annotations</li>
</ul>

<h2>Visual Guide: Labels vs. Annotations</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center;">
    <div style="width: 48%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">Labels (from a field)</strong>
        <div style="border: 1px solid #ddd; height: 80px; margin-top: 8px; position: relative; background: #eef;">
            <div style="position: absolute; top: 10px; left: 20px; font-size: 10px; font-weight: bold;">Ward A</div>
            <div style="position: absolute; top: 20px; left: 80px; font-size: 10px; font-weight: bold;">Ward B</div>
            <div style="position: absolute; top: 50px; left: 30px; font-size: 10px; font-weight: bold;">Ward C</div>
        </div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">Automatic &bull; uses an attribute field</div>
        <div style="font-size: 10px; color: #666;">Set in: Layer Styling > Labels</div>
    </div>
    <div style="width: 48%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">Annotation (manual note)</strong>
        <div style="border: 1px solid #ddd; height: 80px; margin-top: 8px; position: relative; background: #eef;">
            <div style="position: absolute; top: 10px; left: 10px; width: 100px; height: 30px; background: #fff3cd; border: 1px solid #ffeb3b; font-size: 9px; padding: 3px; text-align: left;">
                <strong>Flood-prone area</strong><br>check drainage
            </div>
            <div style="position: absolute; top: 45px; left: 20px; width: 6px; height: 6px; background: #d9534f; border-radius: 50%;"></div>
            <div style="position: absolute; top: 30px; left: 25px; width: 20px; height: 15px; border-left: 1px solid #d9534f; border-bottom: 1px solid #d9534f; transform: rotate(-45deg);"></div>
        </div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">Manual &bull; placed by hand</div>
        <div style="font-size: 10px; color: #666;">One-off notes, callouts</div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li><strong>Turn on labels:</strong> Layer Styling > Labels > Single Labels, then choose the field.</li>
    <li>Improve readability with a <strong>text buffer (halo)</strong>, font size and placement.</li>
    <li>Set <strong>scale-dependent visibility</strong> to avoid clutter when zoomed out.</li>
    <li><strong>Annotations</strong> (Annotations toolbar) hold free text and callouts for one-off notes.</li>
    <li>Labels follow the data automatically; annotations stay where you put them.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use labels for names and values, annotations for explanations.</p>
</div>