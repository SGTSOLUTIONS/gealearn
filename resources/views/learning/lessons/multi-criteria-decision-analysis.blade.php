{{-- resources/views/learning/lessons/7-11-mcda.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    MCDA gives each criterion a weight so that a decision reflects what matters most.
    It turns subjective priorities into transparent, repeatable calculations.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand pairwise comparison (AHP)</li>
    <li>Calculate weights from a matrix</li>
    <li>Check consistency with the CR</li>
</ul>

<h2>Visual Guide: AHP and Weighted Sum</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Pairwise comparison (AHP)</strong>
        <table style="width: 100%; font-size: 11px; border-collapse: collapse; margin-top: 8px;">
            <thead>
                <tr style="background: #282A35; color: #fff;">
                    <th style="padding: 4px; border: 1px solid #ddd;"></th>
                    <th style="padding: 4px; border: 1px solid #ddd;">Slope</th>
                    <th style="padding: 4px; border: 1px solid #ddd;">Road</th>
                    <th style="padding: 4px; border: 1px solid #ddd;">Land use</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">Slope</td><td style="padding: 4px; border: 1px solid #ddd;">1</td><td style="padding: 4px; border: 1px solid #ddd;">3</td><td style="padding: 4px; border: 1px solid #ddd;">5</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">Road</td><td style="padding: 4px; border: 1px solid #ddd;">1/3</td><td style="padding: 4px; border: 1px solid #ddd;">1</td><td style="padding: 4px; border: 1px solid #ddd;">2</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">Land use</td><td style="padding: 4px; border: 1px solid #ddd;">1/5</td><td style="padding: 4px; border: 1px solid #ddd;">1/2</td><td style="padding: 4px; border: 1px solid #ddd;">1</td></tr>
            </tbody>
        </table>
        <div style="font-size: 10px; color: #666; margin-top: 5px;">Scale: 1 equal, 3 moderate, 5 strong, 9 extreme</div>
        <div style="font-size: 10px; color: #d9534f; font-weight: bold; margin-top: 2px;">Consistency ratio must be below 0.1</div>
    </div>
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff; display: flex; flex-direction: column; justify-content: center;">
        <strong style="color: #282A35; margin-bottom: 8px;">Weights from the matrix</strong>
        <div style="background: #282A35; color: #fff; padding: 6px; border-radius: 4px; text-align: left; font-size: 11px; margin-bottom: 4px; width: 65%;">Slope 65%</div>
        <div style="background: #04AA6D; color: #fff; padding: 6px; border-radius: 4px; text-align: left; font-size: 11px; margin-bottom: 4px; width: 23%;">Road 23%</div>
        <div style="background: #FF9800; color: #fff; padding: 6px; border-radius: 4px; text-align: left; font-size: 11px; width: 12%;">Land use 12%</div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px; font-family: Consolas, monospace;">
    score = 0.65 * slope + 0.23 * road + 0.12 * landuse
</div>

<p>
    The diagram shows how pairwise comparisons on a 1–9 scale are used to derive weights (e.g., 65%, 23%, 12%) that sum to 100%, and how these weights are used in a weighted linear combination.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is MCDA?</strong> Multi-Criteria Decision Analysis: a way to decide using several criteria of different importance.</li>
    <li><strong>What are weights?</strong> Numbers showing the importance of each criterion; together they equal 1 (100%).</li>
    <li><strong>What is AHP?</strong> The Analytic Hierarchy Process: pairwise comparisons on a 1&ndash;9 scale produce the weights.</li>
    <li><strong>How do I check AHP?</strong> The Consistency Ratio should be below 0.1.</li>
    <li><strong>What is a weighted linear combination?</strong> Suitability = sum of (weight &times; score) for all criteria.</li>
    <li><strong>What is sensitivity analysis?</strong> Change the weights slightly: if the best sites stay the same, the result is trustworthy.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Show the weights next to every map — the result depends on them.</p>
</div>