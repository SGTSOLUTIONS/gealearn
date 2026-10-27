{{-- resources/views/learning/lessons/5-25-field-data.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Field data integration brings data collected on mobile devices back into the master GIS database.
    It is the final step in the field data collection lifecycle.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the field data integration workflow</li>
    <li>Prepare for mobile data collection</li>
    <li>Merge field data safely into the master database</li>
</ul>

<h2>Visual Guide: Field Data Integration Cycle</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Plan</div>
        <div style="padding: 6px; background: #fff;">Design layers, fields and dropdown lists</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Collect</div>
        <div style="padding: 6px; background: #fff;">Mobile app in the field: points, photos, notes</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Sync</div>
        <div style="padding: 6px; background: #fff;">Upload to cloud or cable to the office</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Review</div>
        <div style="padding: 6px; background: #fff;">Check position, attributes, photos</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">5 Merge</div>
        <div style="padding: 6px; background: #fff;">Add to master dataset; keep raw copy</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; next survey round &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">QField</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Mergin Maps</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ArcGIS Field Maps</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ODK / KoBoToolbox</div>
</div>

<p>
    The diagram shows the cyclical workflow of field data integration. Planning is key to preventing errors later. After data is collected, it must be synced, reviewed, and safely merged into the master database, keeping a raw copy for backup.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is field data integration?</strong> Bringing data collected on mobile devices back into the master GIS database.</li>
    <li><strong>How do I prepare?</strong> Design layers, fields and dropdown lists before going out.</li>
    <li><strong>How do I collect?</strong> With a mobile app (QField, Mergin Maps, ArcGIS Field Maps, ODK), offline with a saved basemap.</li>
    <li><strong>What happens after collection?</strong> Sync to the office, then review positions, attributes and photos.</li>
    <li><strong>How do I merge safely?</strong> Add to the master dataset and keep a copy of the raw field data.</li>
    <li><strong>What should every record contain?</strong> A unique ID, date and collector name.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Make key fields required and use dropdowns &mdash; cleaning later costs far more than designing well.</p>
</div>