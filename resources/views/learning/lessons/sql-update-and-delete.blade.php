{{-- resources/views/learning/lessons/9-13-sql-update-delete.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    UPDATE changes existing rows; DELETE removes them. Always limit them with WHERE.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Write UPDATE and DELETE statements safely</li>
    <li>Understand the role of transactions (BEGIN/COMMIT)</li>
    <li>Change a geometry's SRID</li>
</ul>

<h2>Visual Guide: Change Data Safely</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">BEGIN</div>
        <div style="padding: 6px; background: #fff;">start a transaction</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">UPDATE / DELETE</div>
        <div style="padding: 6px; background: #fff;">always with WHERE</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Check</div>
        <div style="padding: 6px; background: #fff;">SELECT the result</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">COMMIT or ROLLBACK</div>
        <div style="padding: 6px; background: #fff;">keep or undo</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Start &rarr; Modify &rarr; Verify &rarr; Save/Undo &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">UPDATE t SET col = value WHERE ...;</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">DELETE FROM t WHERE ...;</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ROLLBACK undoes everything since BEGIN</div>
</div>

<p>
    The diagram shows the safe way to change data. Run the WHERE as a SELECT first to see which rows will change. If you forget WHERE, every row in the table is changed. ROLLBACK before COMMIT undoes the changes; afterwards restore a backup.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the UPDATE syntax?</strong> UPDATE t SET col = value WHERE ...;</li>
    <li><strong>What if I forget WHERE?</strong> Every row in the table is changed.</li>
    <li><strong>What is the DELETE syntax?</strong> DELETE FROM t WHERE ...;</li>
    <li><strong>How do I empty a table fast?</strong> TRUNCATE TABLE t; removes all rows at once.</li>
    <li><strong>How do I undo a mistake?</strong> ROLLBACK before COMMIT; afterwards restore a backup.</li>
    <li><strong>How do I change a geometry's SRID?</strong> ALTER TABLE ... ALTER COLUMN geom TYPE geometry(Polygon, 32644) USING ST_Transform(geom, 32644);</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Run the WHERE as a SELECT first to see which rows will change.</p>
</div>