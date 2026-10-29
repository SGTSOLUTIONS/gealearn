{{-- resources/views/learning/lessons/9-26-database-optimization.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Optimization finds why a query is slow and fixes it, usually with an index or a rewrite.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Use EXPLAIN ANALYZE to diagnose slow queries</li>
    <li>Understand VACUUM and ANALYZE</li>
    <li>Apply good query habits</li>
</ul>

<h2>Visual Guide: The Tuning Loop</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Slow Query</div>
        <div style="padding: 6px; background: #fff;">note the time</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">EXPLAIN ANALYZE</div>
        <div style="padding: 6px; background: #fff;">read the plan</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Fix</div>
        <div style="padding: 6px; background: #fff;">add index or rewrite</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">VACUUM ANALYZE</div>
        <div style="padding: 6px; background: #fff;">refresh statistics</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Re-test</div>
        <div style="padding: 6px; background: #fff;">compare the time</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Measure &rarr; Diagnose &rarr; Fix &rarr; Refresh &rarr; Verify &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Seq Scan on big table = add index</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">VACUUM reclaims space</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ANALYZE updates statistics</div>
</div>

<p>
    The diagram shows the tuning loop. EXPLAIN ANALYZE shows the plan and the real run time. A Seq Scan on a big table means the whole table is read: add an index or fix the query. Measure before you tune: change one thing at a time and time it again. Keep one SRID so rows are not transformed on the fly; simplify heavy geometries.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the first step?</strong> EXPLAIN ANALYZE shows the plan and the real run time.</li>
    <li><strong>What does Seq Scan on a big table mean?</strong> The whole table is read: add an index or fix the query.</li>
    <li><strong>What do VACUUM and ANALYZE do?</strong> VACUUM reclaims space; ANALYZE updates the statistics the planner uses.</li>
    <li><strong>Which query habits help?</strong> Select only needed columns, filter early, avoid functions on indexed columns.</li>
    <li><strong>Which settings matter?</strong> shared_buffers and work_mem in postgresql.conf.</li>
    <li><strong>Which GIS habits help?</strong> Keep one SRID so rows are not transformed on the fly; simplify heavy geometries.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Measure before you tune: change one thing at a time and time it again.</p>
</div>