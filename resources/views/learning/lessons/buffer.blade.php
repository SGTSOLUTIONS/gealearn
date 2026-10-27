{{-- resources/views/learning/lessons/5-4-buffer.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A buffer creates a zone of a set distance around points, lines or polygons.
    It is one of the most common tools for proximity analysis.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a buffer around different geometry types</li>
    <li>Understand buffer distance units</li>
    <li>Use the Segment and Dissolve options</li>
</ul>

<h2>Visual Guide: Buffer Types</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center;">
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">Point buffer</strong>
        <div style="height: 70px; position: relative; margin-top: 8px; background: #f9f9f9;">
            <div style="width: 50px; height: 50px; border: 2px dashed #2196F3; background: rgba(33, 150, 243, 0.1); border-radius: 50%; position: absolute; top: 10px; left: 30px;"></div>
            <div style="width: 8px; height: 8px; background: #282A35; border-radius: 50%; position: absolute; top: 31px; left: 51px;"></div>
            <div style="position: absolute; top: 35px; left: 65px; font-size: 10px; color: #d9534f; font-weight: bold;">500 m</div>
        </div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">Line buffer</strong>
        <div style="height: 70px; position: relative; margin-top: 8px; background: #f9f9f9;">
            <div style="position: absolute; top: 15px; left: 20px; width: 80px; height: 8px; background: rgba(33, 150, 243, 0.3); border-radius: 4px;"></div>
            <div style="position: absolute; top: 25px; left: 20px; width: 20px; height: 30px; background: rgba(33, 150, 243, 0.3); border-radius: 4px; transform: rotate(45deg);"></div>
        </div>
        <div style="font-size: 10px; color: #666; margin-top: 5px;">buffer distance on both sides</div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="font-size: 12px; color: #282A35;">Polygon buffer</strong>
        <div style="height: 70px; position: relative; margin-top: 8px; background: #f9f9f9;">
            <div style="position: absolute; top: 15px; left: 30px; width: 50px; height: 40px; border: 2px solid #282A35; background: #e8f5e9; border-radius: 4px;"></div>
            <div style="position: absolute; top: 10px; left: 25px; width: 60px; height: 50px; border: 2px dashed #2196F3; border-radius: 4px;"></div>
        </div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 12px;">
    <div style="width: 48%; border: 2px solid #282A35; border-radius: 6px; padding: 8px; text-align: center; background: #fff;">
        <strong>Tool:</strong> Vector &gt; Geoprocessing Tools &gt; Buffer
    </div>
    <div style="width: 48%; border: 2px solid #FF9800; border-radius: 6px; padding: 8px; text-align: center; background: #fff3cd;">
        <strong>Distance is in CRS units:</strong> use a metre-based CRS
    </div>
</div>

<p>
    The diagram shows how a buffer creates a zone around a point, a line, or a polygon. The distance is always measured in the units of the Coordinate Reference System (CRS), so you must use a projected CRS (metres) for accurate results.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a buffer?</strong> A zone of a set distance around points, lines or polygons.</li>
    <li><strong>Which tool creates it?</strong> Vector &gt; Geoprocessing Tools &gt; Buffer.</li>
    <li><strong>In which units is the distance?</strong> CRS units, so use a projected CRS (metres), not degrees.</li>
    <li><strong>What do Segments and Dissolve result do?</strong> Segments set how smooth rounded corners are; Dissolve result merges overlapping buffers.</li>
    <li><strong>Can the distance vary?</strong> Yes, use a field or expression, e.g. road width by road type.</li>
    <li><strong>What are typical uses?</strong> Sites within 500 m of a river, noise zones, safety distances.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Buffering in lat/long gives distorted shapes — reproject to a metre-based CRS first.</p>
</div>