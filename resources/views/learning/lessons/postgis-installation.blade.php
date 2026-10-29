{{-- resources/views/learning/lessons/9-17-postgis-installation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PostGIS is the extension that adds spatial types, functions, and indexes to PostgreSQL.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Install PostGIS on Windows and Linux</li>
    <li>Enable it in a database</li>
    <li>Verify the installation</li>
</ul>

<h2>Visual Guide: Four Steps to a Spatial Database</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Install PostgreSQL</div>
        <div style="padding: 6px; background: #fff;">installer or package manager</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Install PostGIS</div>
        <div style="padding: 6px; background: #fff;">Stack Builder or apt</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 CREATE EXTENSION</div>
        <div style="padding: 6px; background: #fff;">once per database</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Test</div>
        <div style="padding: 6px; background: #fff;">PostGIS_Version()</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Base &rarr; Extension &rarr; Enable &rarr; Verify &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">CREATE EXTENSION postgis;</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">SELECT PostGIS_Version();</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">postgis_raster, postgis_topology</div>
</div>

<p>
    The diagram shows the four steps. Run CREATE EXTENSION in every new database; it does not carry over. On Windows, use Stack Builder. On Linux, install the postgis package that matches your PostgreSQL version. Test with SELECT PostGIS_Version().
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is PostGIS?</strong> An extension that adds geometry types, spatial functions, and indexes to PostgreSQL.</li>
    <li><strong>How do I install it on Windows?</strong> Run the PostgreSQL installer, then add PostGIS through Stack Builder.</li>
    <li><strong>How do I install it on Linux?</strong> Install the postgis package that matches your PostgreSQL version.</li>
    <li><strong>How do I enable it?</strong> CREATE EXTENSION postgis; once in each database.</li>
    <li><strong>How do I check it works?</strong> SELECT PostGIS_Version();</li>
    <li><strong>Are there other extensions?</strong> postgis_raster and postgis_topology add raster and topology.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Run CREATE EXTENSION in every new database; it does not carry over.</p>
</div>