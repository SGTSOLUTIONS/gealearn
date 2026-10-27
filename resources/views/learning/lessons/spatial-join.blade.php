{{-- resources/views/learning/lessons/5-10-spatial-join.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A spatial join copies attributes from one layer to another based on location, not on a shared ID.
    It is useful when your datasets do not have a common field to join on.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how a spatial join works</li>
    <li>Join points to polygons</li>
    <li>Use one-to-one and one-to-many joins</li>
</ul>

<h2>Visual Guide: Spatial Join Operation</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Points + polygons</strong>
        <div style="height: 100px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 10px; left: 10px; width: 40px; height: 80px; background: #ffe0b2; border: 1px solid #FF9800;"></div>
            <div style="position: absolute; top: 10px; left: 50px; width: 40px; height: 80px; background: #dcedc8; border: 1px solid #4caf50;"></div>
            <div style="position: absolute; top: 20px; left: 25px; width: 8px; height: 8px; background: #d9534f; border-radius: 50%;"></div>
            <div style="position: absolute; top: 30px; left: 60px; width: 8px; height: 8px; background: #d9534f; border-radius: 50%;"></div>
            <div style="position: absolute; top: 60px; left: 35px; width: 8px; height: 8px; background: #d9534f; border-radius: 50%;"></div>
        </div>
    </div>
    <div style="width: 10%; text-align: center; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 45%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Result: points with ward name</strong>
        <table style="width: 100%; font-size: 11px; border-collapse: collapse; margin-top: 8px;">
            <thead>
                <tr style="background: #282A35; color: #fff;">
                    <th style="padding: 4px; border: 1px solid #ddd;">id</th>
                    <th style="padding: 4px; border: 1px solid #ddd;">school</th>
                    <th style="padding: 4px; border: 1px solid #ddd;">ward</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">S1</td><td style="padding: 4px; border: 1px solid #ddd;">School 1</td><td style="padding: 4px; border: 1px solid #ddd; background: #fff3cd;">Ward A</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">S2</td><td style="padding: 4px; border: 1px solid #ddd;">School 2</td><td style="padding: 4px; border: 1px solid #ddd; background: #fff3cd;">Ward B</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ddd;">S3</td><td style="padding: 4px; border: 1px solid #ddd;">School 3</td><td style="padding: 4px; border: 1px solid #ddd; background: #fff3cd;">Ward C</td></tr>
            </tbody>
        </table>
        <div style="font-size: 11px; color: #d9534f; margin-top: 5px;">ward is copied from the polygon each point falls in</div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Tool:</strong> Vector &gt; Data Management Tools &gt; Join Attributes by Location
</div>

<p>
    The diagram shows a spatial join where points (schools) receive the attributes of the polygons (wards) they fall inside. The result is a point layer that now includes the ward name.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a spatial join?</strong> It copies attributes from one layer to another based on location, not a shared ID.</li>
    <li><strong>Which tool?</strong> Vector &gt; Data Management Tools &gt; Join Attributes by Location.</li>
    <li><strong>Give an example.</strong> Schools (points) receive the name of the ward (polygon) they fall in.</li>
    <li><strong>One-to-one or one-to-many?</strong> One-to-one takes the first match; one-to-many makes a row per match.</li>
    <li><strong>What if a shared ID exists?</strong> Use Join Attributes by Field Value instead.</li>
    <li><strong>How do I get counts per polygon?</strong> Join by Location (Summary) or Count Points in Polygon.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Need counts per polygon (schools per ward)? Use Join by Location (Summary) or Count Points in Polygon.</p>
</div>