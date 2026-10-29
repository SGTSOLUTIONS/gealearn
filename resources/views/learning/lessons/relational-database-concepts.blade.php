{{-- resources/views/learning/lessons/9-2-relational-database-concepts.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A relational database stores data in tables that are linked to each other by shared values.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand relations, relationships, and schemas</li>
    <li>Identify one-to-one, one-to-many, and many-to-many relationships</li>
    <li>Know the ACID principles</li>
</ul>

<h2>Visual Guide: Two Tables, One Link</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">wards</div>
        <div style="padding: 6px; background: #fff;">ward_id - name - pop</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">schools</div>
        <div style="padding: 6px; background: #fff;">school_id - name - ward_id</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">One-to-many Link</div>
        <div style="padding: 6px; background: #fff;">One ward has many schools</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Parent Table &rarr; Child Table &rarr; Relationship &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">JOIN on ward_id</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">ACID properties</div>
</div>

<p>
    The diagram shows two tables linked by a shared column (ward_id). This is a one-to-many relationship. The shared column joins the tables. A relational design avoids repeated data and keeps data consistent.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a relation?</strong> Another word for a table of rows and columns.</li>
    <li><strong>What is a relationship?</strong> A link between tables made with a shared column such as ward_id.</li>
    <li><strong>Which relationship types exist?</strong> One-to-one, one-to-many (one ward, many schools), and many-to-many.</li>
    <li><strong>What is a schema?</strong> The design of tables, columns, and types. In PostgreSQL it is also a folder (namespace) inside a database.</li>
    <li><strong>Why use a relational design?</strong> It avoids repeated data and keeps the data consistent.</li>
    <li><strong>What is ACID?</strong> Atomic, Consistent, Isolated, Durable: rules that keep transactions safe.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Store each fact once and link to it; do not copy it.</p>
</div>