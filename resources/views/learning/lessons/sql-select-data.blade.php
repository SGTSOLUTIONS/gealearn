{{-- resources/views/learning/lessons/9-10-sql-select-data.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    SELECT reads data from one or more tables and returns the result as rows.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Choose columns and limit rows</li>
    <li>Sort results</li>
    <li>Use aggregate functions and grouping</li>
</ul>

<h2>Visual Guide: The Order the Database Reads a Query</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">FROM</div>
        <div style="padding: 6px; background: #fff;">which table</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">WHERE</div>
        <div style="padding: 6px; background: #fff;">which rows</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">GROUP BY</div>
        <div style="padding: 6px; background: #fff;">which groups</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">SELECT</div>
        <div style="padding: 6px; background: #fff;">which columns</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">ORDER BY / LIMIT</div>
        <div style="padding: 6px; background: #fff;">sort and trim</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Source &rarr; Filter &rarr; Group &rarr; Project &rarr; Sort &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">SELECT name, pop</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ORDER BY pop DESC</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">LIMIT 10</div>
</div>

<p>
    The diagram shows the order the database reads a query, which is not the order you write it. Select only the columns you need; geometry columns are heavy. Use aggregates like COUNT, SUM, AVG, MIN, and MAX with GROUP BY.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do I choose columns?</strong> SELECT name, pop. A star means all columns; avoid it on big tables.</li>
    <li><strong>How do I sort?</strong> ORDER BY pop DESC</li>
    <li><strong>How do I limit rows?</strong> LIMIT 10</li>
    <li><strong>Which aggregates exist?</strong> COUNT, SUM, AVG, MIN, and MAX.</li>
    <li><strong>How do I group?</strong> GROUP BY type together with an aggregate.</li>
    <li><strong>How do I rename a column?</strong> With AS: SELECT pop AS population.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Select only the columns you need; geometry columns are heavy.</p>
</div>