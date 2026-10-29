{{-- resources/views/learning/lessons/9-14-database-normalization.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Normalization organises tables so that each fact is stored only once.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the normal forms (1NF, 2NF, 3NF)</li>
    <li>Recognize repeated data</li>
    <li>Know when to denormalise</li>
</ul>

<h2>Visual Guide: Before and After Normalization</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 45%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Before</div>
        <div style="padding: 6px; background: #fff;">One wide table: schools(name, ward, ward_pop)</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 45%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">After</div>
        <div style="padding: 6px; background: #fff;">Two tables: wards(ward_id, name, pop), schools(school_id, name, ward_id)</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Data repeated &rarr; Data stored once &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">1NF: One value per cell</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">2NF: Depends on whole key</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">3NF: No non-key dependencies</div>
</div>

<p>
    The diagram shows the before and after of normalization. Before, ward data repeats in every row. After, the ward data is stored once in the wards table. This reduces duplication, update errors, and database size. Aim for third normal form, then denormalise only where speed needs it.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is normalization?</strong> Organising tables to remove repeated data.</li>
    <li><strong>Why do it?</strong> Less duplication, fewer update errors, and a smaller database.</li>
    <li><strong>What is 1NF?</strong> One value per cell and no repeating groups.</li>
    <li><strong>What is 2NF?</strong> Every column depends on the whole primary key.</li>
    <li><strong>What is 3NF?</strong> Columns depend only on the key, not on other non-key columns.</li>
    <li><strong>Should I always normalise?</strong> Mostly. Denormalise on purpose for speed, for example in reporting tables.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Aim for third normal form, then denormalise only where speed needs it.</p>
</div>