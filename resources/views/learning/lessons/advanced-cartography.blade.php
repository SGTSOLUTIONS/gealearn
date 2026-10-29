{{-- resources/views/learning/lessons/7-19-cartography.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Advanced cartography is the craft of designing maps that communicate clearly: colour, symbols, hierarchy and layout.
    It turns data into a message.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Choose the right colour scheme</li>
    <li>Select the right map type</li>
    <li>Design for accessibility</li>
</ul>

<h2>Visual Guide: Colour Schemes and Map Types</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Sequential</strong>
        <div style="height: 20px; background: linear-gradient(to right, #e3f2fd, #2196f3, #0d47a1); margin-top: 8px; border-radius: 2px;"></div>
        <div style="color: #666; margin-top: 5px;">low to high values</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Diverging</strong>
        <div style="height: 20px; background: linear-gradient(to right, #d9534f, #f9f9f9, #2196f3); margin-top: 8px; border-radius: 2px;"></div>
        <div style="color: #666; margin-top: 5px;">above / below a midpoint</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Qualitative</strong>
        <div style="height: 20px; display: flex; margin-top: 8px; border-radius: 2px; overflow: hidden;">
            <div style="flex: 1; background: #2196f3;"></div>
            <div style="flex: 1; background: #ff9800;"></div>
            <div style="flex: 1; background: #4caf50;"></div>
            <div style="flex: 1; background: #e91e63;"></div>
        </div>
        <div style="color: #666; margin-top: 5px;">categories, no order</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Choropleth</strong>
        <div style="height: 40px; background: #e3f2fd; margin-top: 5px; display: flex;">
            <div style="flex: 1; background: #bbdefb; border: 1px solid #fff;"></div>
            <div style="flex: 1; background: #2196f3; border: 1px solid #fff;"></div>
            <div style="flex: 1; background: #0d47a1; border: 1px solid #fff;"></div>
        </div>
    </div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Proportional</strong>
        <div style="height: 40px; margin-top: 5px; display: flex; align-items: center; justify-content: center; gap: 5px;">
            <div style="width: 10px; height: 10px; background: #d9534f; border-radius: 50%;"></div>
            <div style="width: 20px; height: 20px; background: #d9534f; border-radius: 50%;"></div>
            <div style="width: 30px; height: 30px; background: #d9534f; border-radius: 50%;"></div>
        </div>
    </div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Dot density</strong>
        <div style="height: 40px; margin-top: 5px; background: #f9f9f9; position: relative;">
            <div style="position: absolute; top: 5px; left: 5px; width: 4px; height: 4px; background: #282A35; border-radius: 50%;"></div>
            <div style="position: absolute; top: 15px; left: 15px; width: 4px; height: 4px; background: #282A35; border-radius: 50%;"></div>
            <div style="position: absolute; top: 10px; left: 25px; width: 4px; height: 4px; background: #282A35; border-radius: 50%;"></div>
            <div style="position: absolute; top: 25px; left: 10px; width: 4px; height: 4px; background: #282A35; border-radius: 50%;"></div>
        </div>
    </div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">Heat map</strong>
        <div style="height: 40px; margin-top: 5px; background: radial-gradient(circle at 50% 50%, #ffeb3b, #f44336, transparent);"></div>
    </div>
</div>

<p>
    The diagram shows the three colour schemes (sequential, diverging, qualitative) and four common map types (choropleth, proportional symbols, dot density, heat map).
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is visual hierarchy?</strong> The most important information looks strongest (contrast, size, position); the background stays quiet.</li>
    <li><strong>What are the three colour schemes?</strong> Sequential (low to high), diverging (two extremes around a midpoint), qualitative (unordered categories).</li>
    <li><strong>What is a choropleth map?</strong> Areas shaded by a rate or density value, not by raw counts.</li>
    <li><strong>What are proportional symbols?</strong> Symbols whose size shows a count or magnitude.</li>
    <li><strong>Dot density or heat map?</strong> Dot density: one dot = a quantity. Heat map: concentration of points.</li>
    <li><strong>How do I make maps accessible?</strong> Use colour-blind-safe palettes (e.g. ColorBrewer), strong contrast and readable fonts.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Show rates or density on choropleths; use proportional symbols for raw counts.</p>
</div>