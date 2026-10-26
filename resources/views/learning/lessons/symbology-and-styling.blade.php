{{-- resources/views/learning/lessons/3-13-symbology.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Symbology controls how features look. Good styling makes patterns easy to read and highlights the most important information.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Apply single, categorized, and graduated symbols</li>
    <li>Create rule-based styles</li>
    <li>Save and reuse style files</li>
</ul>

<h2>Visual Guide: Types of Symbology</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">Single Symbol</strong>
        <div style="border: 1px solid #ddd; height: 60px; margin-top: 8px; background: #a8e6cf; border-radius: 4px;"></div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">All features alike</div>
        <div style="font-size: 10px; color: #d9534f; margin-top: 2px;">One style for every feature</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">Categorized</strong>
        <div style="border: 1px solid #ddd; height: 60px; margin-top: 8px; display: flex;">
            <div style="flex: 1; background: #ff9800;"></div>
            <div style="flex: 1; background: #e91e63;"></div>
            <div style="flex: 1; background: #4caf50;"></div>
        </div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">By text value (land use)</div>
        <div style="font-size: 10px; color: #d9534f; margin-top: 2px;">Residential | Commercial | Park</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">Graduated</strong>
        <div style="border: 1px solid #ddd; height: 60px; margin-top: 8px; display: flex; flex-direction: column;">
            <div style="flex: 1; background: #bbdefb;"></div>
            <div style="flex: 1; background: #2196f3;"></div>
            <div style="flex: 1; background: #0d47a1;"></div>
        </div>
        <div style="font-size: 11px; color: #666; margin-top: 5px;">By number range (population)</div>
        <div style="font-size: 10px; color: #d9534f; margin-top: 2px;">Low &rarr; High</div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li>Open <strong>Layer Properties > Symbology</strong> or the <strong>Layer Styling panel (F7)</strong>.</li>
    <li><strong>Single Symbol</strong> – every feature looks the same.</li>
    <li><strong>Categorized</strong> – one style per text value (land use, type).</li>
    <li><strong>Graduated</strong> – colour ramp for number ranges (population, area).</li>
    <li><strong>Rule-based</strong> – styles driven by conditions you write.</li>
    <li>Save a look as a <strong>.qml style file</strong> to reuse it on other layers.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Rule of thumb: text categories use Categorized; numbers use Graduated.</p>
</div>