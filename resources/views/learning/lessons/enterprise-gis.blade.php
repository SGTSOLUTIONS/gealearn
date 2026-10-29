{{-- resources/views/learning/lessons/7-21-enterprise-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Enterprise GIS shares one managed GIS across many users, departments and applications.
    It provides a single source of truth with controlled access and versioning.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the central geodatabase</li>
    <li>Define user roles</li>
    <li>Recognise the need for versioning and backups</li>
</ul>

<h2>Visual Guide: Enterprise GIS Model</h2>
<div style="border: 1px solid #ccc; border-radius: 6px; padding: 15px; background: #fff; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="display: flex; justify-content: space-between; align-items: center; gap: 20px;">
        <div style="width: 25%; display: flex; flex-direction: column; gap: 15px;">
            <div style="border: 2px solid #282A35; border-radius: 6px; padding: 8px; background: #f9f9f9;">
                <strong>Editors</strong><br>read + write
            </div>
            <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 8px; background: #f9f9f9;">
                <strong>Field staff</strong><br>mobile read + write
            </div>
        </div>
        
        <div style="width: 40%; display: flex; justify-content: center;">
            <div style="width: 100px; height: 80px; background: #e3f2fd; border: 2px solid #2196F3; border-radius: 10px; border-top-left-radius: 50px; border-top-right-radius: 50px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 12px; color: #282A35; box-shadow: 0 5px 0 #90caf9;">
                Central<br>geodatabase
            </div>
        </div>
        
        <div style="width: 25%; display: flex; flex-direction: column; gap: 15px;">
            <div style="border: 2px solid #FF9800; border-radius: 6px; padding: 8px; background: #f9f9f9;">
                <strong>Analysts</strong><br>read + analyse
            </div>
            <div style="border: 2px solid #9C27B0; border-radius: 6px; padding: 8px; background: #f9f9f9;">
                <strong>Public viewers</strong><br>read only
            </div>
        </div>
    </div>
    <div style="margin-top: 20px; background: #f1f1f1; padding: 8px; border-radius: 4px; font-weight: bold; color: #282A35;">
        roles &bull; versioning &bull; backups &bull; security
    </div>
</div>

<p>
    The diagram shows the central geodatabase at the heart of Enterprise GIS, with different user roles (editors, field staff, analysts, public viewers) connecting to it with different permissions.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is enterprise GIS?</strong> A GIS shared across an organisation with central data, many users and managed security.</li>
    <li><strong>What is the central geodatabase?</strong> One spatial database (e.g. PostGIS) that is the single source of truth.</li>
    <li><strong>What are user roles?</strong> Editors write, analysts query, viewers read only; access follows the role.</li>
    <li><strong>What does versioning do?</strong> It lets several editors work at once without overwriting each other.</li>
    <li><strong>What else is needed?</strong> Backups, naming and metadata standards, and monitoring.</li>
    <li><strong>Why share through web services?</strong> Users get live data without keeping local copies.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Agree naming, metadata and editing rules before adding users.</p>
</div>