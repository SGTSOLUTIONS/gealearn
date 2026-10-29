{{-- resources/views/learning/lessons/9-4-database-design.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Design means deciding the tables, columns, and links before you create anything.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the four steps from idea to tables</li>
    <li>Know what an entity and an ER diagram are</li>
    <li>Name things consistently</li>
</ul>

<h2>Visual Guide: From Idea to Tables</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Requirements</div>
        <div style="padding: 6px; background: #fff;">What must the system answer?</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Entities & Columns</div>
        <div style="padding: 6px; background: #fff;">wards, schools, roads</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Relationships</div>
        <div style="padding: 6px; background: #fff;">keys that link the tables</div>
    </div>
    <div style="font-size: 16px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">4 Create and Test</div>
        <div style="padding: 6px; background: #fff;">load sample data</div>
    </div>
</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Plan &rarr; Sketch &rarr; Link &rarr; Build &rarr;
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Design first, build second</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">GIS needs geometry type, SRID, attributes</div>
</div>

<p>
    The diagram shows the four steps of database design. Sketch the tables on paper first. GIS design needs extra info: the geometry type, the SRID (CRS), and the attributes. Changing a design later is costly.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is database design?</strong> Planning the tables, columns, types, and links before building.</li>
    <li><strong>What is an entity?</strong> A thing you store, such as a ward, a school, or a road.</li>
    <li><strong>What is an ER diagram?</strong> A drawing of entities and the relationships between them.</li>
    <li><strong>What extra info does GIS need?</strong> The geometry type, the SRID (CRS), and the attributes.</li>
    <li><strong>How should I name things?</strong> Lower case, snake_case, no spaces; stay consistent.</li>
    <li><strong>When should I design?</strong> Before data entry; changing a design later is costly.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Sketch the tables on paper first; fixing a design later costs much more.</p>
</div>