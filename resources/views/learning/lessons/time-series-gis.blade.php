{{-- resources/views/learning/lessons/7-15-time-series.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A time-series GIS holds the same features or rasters for several dates so change can be measured.
    It turns static maps into dynamic animations.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how time is stored in GIS</li>
    <li>Use the Temporal Controller</li>
    <li>Keep data consistent across dates</li>
</ul>

<h2>Visual Guide: Time-Series Change</h2>
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">2018</strong>
        <div style="height: 40px; background: #c8e6c9; margin-top: 8px; border-radius: 4px;"></div>
        <div style="color: #666; margin-top: 5px;">built-up cells: 0</div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #999;">&rarr;</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">2020</strong>
        <div style="height: 40px; background: #c8e6c9; margin-top: 8px; border-radius: 4px; display: flex; align-items: center; justify-content: center;">
            <div style="width: 15px; height: 15px; background: #d9534f;"></div>
        </div>
        <div style="color: #666; margin-top: 5px;">built-up cells: 4</div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #999;">&rarr;</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">2022</strong>
        <div style="height: 40px; background: #c8e6c9; margin-top: 8px; border-radius: 4px; display: flex; align-items: center; justify-content: center; gap: 2px;">
            <div style="width: 15px; height: 15px; background: #d9534f;"></div>
            <div style="width: 15px; height: 15px; background: #d9534f;"></div>
        </div>
        <div style="color: #666; margin-top: 5px;">built-up cells: 12</div>
    </div>
    <div style="width: 2%; display: flex; align-items: center; justify-content: center; font-size: 16px; color: #999;">&rarr;</div>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 6px; padding: 8px; background: #fff;">
        <strong style="color: #282A35;">2024</strong>
        <div style="height: 40px; background: #c8e6c9; margin-top: 8px; border-radius: 4px; display: flex; align-items: center; justify-content: center; gap: 2px;">
            <div style="width: 15px; height: 15px; background: #d9534f;"></div>
            <div style="width: 15px; height: 15px; background: #d9534f;"></div>
            <div style="width: 15px; height: 15px; background: #d9534f;"></div>
        </div>
        <div style="color: #666; margin-top: 5px;">built-up cells: 20</div>
    </div>
</div>

<div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin-bottom: 20px; font-size: 12px;">
    <div style="background: #f1f1f1; padding: 6px 12px; border-radius: 4px;">Tool: <strong>View &gt; Panels &gt; Temporal Controller</strong></div>
</div>

<p>
    The diagram shows the growth of built-up cells from 2018 to 2024. The Temporal Controller lets you step through these dates to animate the change.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a time-series GIS dataset?</strong> The same places or features recorded at several dates.</li>
    <li><strong>How is time stored?</strong> In a date/time field, or as one layer or raster per date.</li>
    <li><strong>Where is the QGIS tool?</strong> The Temporal Controller panel; set temporal properties on each layer.</li>
    <li><strong>Give examples.</strong> Monthly rainfall, yearly land cover, daily satellite images.</li>
    <li><strong>What can I analyse?</strong> Trends, change between dates and seasonal cycles.</li>
    <li><strong>What must stay consistent?</strong> CRS, extent and resolution across all dates.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep a consistent CRS, extent and resolution so dates can be compared fairly.</p>
</div>