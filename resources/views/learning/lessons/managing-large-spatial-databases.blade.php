{{-- resources/views/learning/lessons/9-25-managing-large-databases.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Big databases need backups, sensible storage, user control, and monitoring.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Back up and restore databases</li>
    <li>Partition and archive old data</li>
    <li>Control access and monitor performance</li>
</ul>

<h2>Visual Guide: Looking After a Large Database</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Backup</div>
        <div style="padding: 6px; background: #fff;">pg_dump, on a schedule</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Partition</div>
        <div style="padding: 6px; background: #fff;">split huge tables</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Archive</div>
        <div style="padding: 6px; background: #fff;">move old data out</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Monitor</div>
        <div style="padding: 6px; background: #fff;">size and slow queries</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Protect &rarr; Split &rarr; Clean &rarr; Watch &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">pg_dump -Fc gisdb &gt; gisdb.dump</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">pg_size_pretty(pg_total_relation_size())</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">GRANT for user control</div>
</div>

<p>
    The diagram shows the key tasks for managing large databases. Test restoring a backup: an untested backup is not a backup. Partitioning splits a huge table into parts by region or date with PARTITION BY. Keep the original geometry and store simplified copies (ST_Simplify) for display. Replication copies data to a standby server for safety and extra read capacity.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do I back up?</strong> pg_dump for one database, pg_dumpall for all; schedule it.</li>
    <li><strong>What is partitioning?</strong> Splitting a huge table into parts by region or date with PARTITION BY.</li>
    <li><strong>How do I check table size?</strong> pg_size_pretty(pg_total_relation_size('wards'))</li>
    <li><strong>How do I control access?</strong> Create roles and use GRANT; give most users read-only access.</li>
    <li><strong>How do I handle heavy geometry?</strong> Keep the original and store simplified copies (ST_Simplify) for display.</li>
    <li><strong>What is replication?</strong> A standby server copies the data for safety and extra read capacity.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Test restoring a backup: an untested backup is not a backup.</p>
</div>