{{-- resources/views/learning/lessons/9-3-sql-introduction.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    SQL (Structured Query Language) is the standard language to create, read, change, and delete data in a database.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what SQL is used for</li>
    <li>Know the main commands for CRUD and DDL operations</li>
    <li>Write readable SQL queries</li>
</ul>

<h2>Visual Guide: CRUD - The Four Everyday Jobs</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Create</div>
        <div style="padding: 6px; background: #fff;">INSERT</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Read</div>
        <div style="padding: 6px; background: #fff;">SELECT</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Update</div>
        <div style="padding: 6px; background: #fff;">UPDATE</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Delete</div>
        <div style="padding: 6px; background: #fff;">DELETE</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Structure</div>
        <div style="padding: 6px; background: #fff;">CREATE / ALTER / DROP</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; DML (Rows) &rarr; DDL (Structure) &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Semicolon ends statement</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Keywords are not case sensitive</div>
</div>

<p>
    The diagram shows the four everyday jobs of SQL (CRUD) plus the structure commands. DML works with rows (INSERT, SELECT, UPDATE, DELETE). DDL defines structure (CREATE, ALTER, DROP). Write keywords in capitals and one clause per line to keep queries readable.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is SQL?</strong> The standard language for talking to relational databases.</li>
    <li><strong>Which are the main commands?</strong> SELECT, INSERT, UPDATE, and DELETE for rows; CREATE, ALTER, and DROP for structure.</li>
    <li><strong>DDL or DML?</strong> DDL defines structure (CREATE, ALTER, DROP); DML works with rows (INSERT, SELECT, UPDATE, DELETE).</li>
    <li><strong>Is SQL case sensitive?</strong> Keywords are not. Text values can be; PostgreSQL folds unquoted names to lower case.</li>
    <li><strong>How does a statement end?</strong> With a semicolon.</li>
    <li><strong>How do I add comments?</strong> -- one line or /* block */.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Write keywords in capitals and one clause per line to keep queries readable.</p>
</div>