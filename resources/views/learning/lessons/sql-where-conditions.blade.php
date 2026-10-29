{{-- resources/views/learning/lessons/9-11-sql-where-conditions.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    WHERE keeps only the rows that match your conditions.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Filter rows with comparison and logic operators</li>
    <li>Match text patterns and test lists/ranges</li>
    <li>Test for NULL values</li>
</ul>

<h2>Visual Guide: Building Blocks of a Condition</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Compare</div>
        <div style="padding: 6px; background: #fff;">= &lt;&gt; &gt; &lt; &gt;= &lt;=</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Logic</div>
        <div style="padding: 6px; background: #fff;">AND OR NOT</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Match</div>
        <div style="padding: 6px; background: #fff;">LIKE IN BETWEEN</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Missing</div>
        <div style="padding: 6px; background: #fff;">IS NULL IS NOT NULL</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Numbers &rarr; Logic &rarr; Text/List &rarr; Null &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">LIKE 'Ward%' (% is any text)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">= NULL never matches</div>
</div>

<p>
    The diagram shows the building blocks of a WHERE condition. Combine them with brackets when mixing AND with OR; AND is evaluated first. Use LIKE 'Ward%' for text patterns (% is any text, _ is one character). ILIKE ignores case in PostgreSQL.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do I filter rows?</strong> With a WHERE clause after FROM.</li>
    <li><strong>Which comparison operators exist?</strong> = &lt;&gt; &gt; &lt; &gt;= &lt;= (&lt;&gt; means not equal).</li>
    <li><strong>How do I match text patterns?</strong> LIKE 'Ward%' (% is any text, _ is one character). ILIKE ignores case in PostgreSQL.</li>
    <li><strong>How do I test a list or range?</strong> IN ("A", "B") and BETWEEN 1000 AND 5000.</li>
    <li><strong>How do I test for NULL?</strong> IS NULL or IS NOT NULL; = NULL never matches.</li>
    <li><strong>How do I combine conditions?</strong> With AND, OR, and NOT; use brackets to be clear.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Add brackets when mixing AND with OR; AND is evaluated first.</p>
</div>