{{-- resources/views/learning/lessons/7-5-kriging-idw.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    IDW and kriging are the two most used interpolation methods. Both are weighted averages of nearby samples, but the weights differ.
    Choosing between them depends on your need for accuracy and error estimation.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the IDW weight formula</li>
    <li>Compare IDW with Kriging</li>
    <li>Recognise the strengths and weaknesses of each</li>
</ul>

<h2>Visual Guide: IDW vs. Kriging</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">IDW example (power = 2)</strong>
        <div style="margin-top: 10px; text-align: left; font-size: 11px;">
            <div>Point A: value 10 at d=1 &rarr; weight 0.73</div>
            <div>Point B: value 20 at d=2 &rarr; weight 0.18</div>
            <div>Point C: value 30 at d=3 &rarr; weight 0.08</div>
            <div style="margin-top: 5px; font-weight: bold; color: #d9534f;">estimate = 0.73 &times; 10 + 0.18 &times; 20 + 0.08 &times; 30 = 13.5</div>
            <div style="font-size: 10px; color: #666; margin-top: 5px;">weight = (1 / d&sup2;) / sum of all 1 / d&sup2;</div>
        </div>
    </div>
    <div style="width: 50%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">IDW or Kriging?</strong>
        <table style="width: 100%; font-size: 11px; border-collapse: collapse; margin-top: 8px;">
            <thead>
                <tr style="background: #282A35; color: #fff;">
                    <th style="padding: 4px; border: 1px solid #ddd;"></th>
                    <th style="padding: 4px; border: 1px solid #ddd;">IDW</th>
                    <th style="padding: 4px; border: 1px solid #ddd;">Kriging</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">Weights from</td><td style="padding: 4px; border: 1px solid #ddd;">distance only</td><td style="padding: 4px; border: 1px solid #ddd;">distance + variogram</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">Error map</td><td style="padding: 4px; border: 1px solid #ddd;">no</td><td style="padding: 4px; border: 1px solid #ddd;">yes</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">Extra step</td><td style="padding: 4px; border: 1px solid #ddd;">none</td><td style="padding: 4px; border: 1px solid #ddd;">fit a variogram</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">Best for</td><td style="padding: 4px; border: 1px solid #ddd;">quick results</td><td style="padding: 4px; border: 1px solid #ddd;">accuracy, clustered data</td></tr>
            </tbody>
        </table>
    </div>
</div>

<p>
    The diagram shows an IDW calculation with three points, and a comparison table highlighting the differences between IDW and Kriging.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How does IDW calculate a value?</strong> As a weighted average of nearby points, where weight = 1 / distance^power.</li>
    <li><strong>What does the power setting do?</strong> A higher power gives nearby points more influence and a more local surface (2 is common).</li>
    <li><strong>Can you show an example?</strong> Values 10, 20, 30 at distances 1, 2, 3 get weights 0.73, 0.18, 0.08, giving an estimate of about 13.5.</li>
    <li><strong>How is Kriging different?</strong> Its weights come from a fitted variogram, so spatial structure and clustering are considered.</li>
    <li><strong>What extra does Kriging give?</strong> A prediction-error (variance) map.</li>
    <li><strong>What are IDW's weaknesses?</strong> It creates bull's-eye patterns around points and can never predict beyond the sample minimum and maximum.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Always inspect the surface: check it against sample values and look for bull's-eyes.</p>
</div>