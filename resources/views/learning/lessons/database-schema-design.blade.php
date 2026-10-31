{{-- resources/views/learning/lessons/14-4-database-schema-design.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Schema design defines the tables, columns, keys and relationships that hold the project's data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand entities, primary keys and foreign keys</li>
    <li>Map relationships between tables</li>
    <li>Define geometry columns correctly</li>
</ul>

<h2>Visual Guide: Entity-relationship diagram</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 20px 10px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 15px; font-size: 13px;">Entity-relationship diagram</div>
        
        <svg viewBox="0 0 650 300" style="width: 100%; font-family: sans-serif;">
            
            <!-- WARDS TABLE -->
            <rect x="10" y="30" width="150" height="80" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <rect x="10" y="30" width="150" height="25" fill="#005a70" rx="4" />
            <text x="85" y="47" font-size="13" fill="#fff" font-weight="bold" text-anchor="middle">wards</text>
            
            <text x="20" y="70" font-size="11" fill="#333">ward_id</text>
            <text x="145" y="70" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="end">PK</text>
            <text x="20" y="85" font-size="11" fill="#333">name</text>
            <text x="20" y="100" font-size="11" fill="#333">geom</text>

            <!-- Relationship Line 1 -->
            <line x1="160" y1="57" x2="250" y2="57" stroke="#333" stroke-width="2" />
            <text x="175" y="50" font-size="12" fill="#f07b24" font-weight="bold">1</text>
            <text x="230" y="50" font-size="12" fill="#f07b24" font-weight="bold">N</text>
            
            <text x="160" y="120" font-size="11" fill="#666" font-style="italic">one ward,</text>
            <text x="160" y="135" font-size="11" fill="#666" font-style="italic">many parcels</text>

            <!-- PARCELS TABLE -->
            <rect x="250" y="30" width="150" height="130" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <rect x="250" y="30" width="150" height="25" fill="#005a70" rx="4" />
            <text x="325" y="47" font-size="13" fill="#fff" font-weight="bold" text-anchor="middle">parcels</text>
            
            <text x="260" y="70" font-size="11" fill="#333">parcel_id</text>
            <text x="385" y="70" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="end">PK</text>
            
            <text x="260" y="85" font-size="11" fill="#333">ward_id</text>
            <text x="385" y="85" font-size="11" fill="#2980b9" font-weight="bold" text-anchor="end">FK</text>
            
            <text x="260" y="100" font-size="11" fill="#333">owner_id</text>
            <text x="385" y="100" font-size="11" fill="#2980b9" font-weight="bold" text-anchor="end">FK</text>
            
            <text x="260" y="115" font-size="11" fill="#333">area</text>
            <text x="260" y="130" font-size="11" fill="#333">geom</text>

            <!-- Relationship Line 2 -->
            <line x1="400" y1="57" x2="490" y2="57" stroke="#333" stroke-width="2" />
            <text x="415" y="50" font-size="12" fill="#f07b24" font-weight="bold">N</text>
            <text x="470" y="50" font-size="12" fill="#f07b24" font-weight="bold">1</text>
            
            <text x="430" y="120" font-size="11" fill="#666" font-style="italic">one owner, many parcels</text>

            <!-- OWNERS TABLE -->
            <rect x="490" y="30" width="150" height="80" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <rect x="490" y="30" width="150" height="25" fill="#005a70" rx="4" />
            <text x="565" y="47" font-size="13" fill="#fff" font-weight="bold" text-anchor="middle">owners</text>
            
            <text x="500" y="70" font-size="11" fill="#333">owner_id</text>
            <text x="625" y="70" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="end">PK</text>
            <text x="500" y="85" font-size="11" fill="#333">name</text>
            <text x="500" y="100" font-size="11" fill="#333">phone</text>

            <!-- Relationship Line 3 (Down to Tax) -->
            <line x1="325" y1="160" x2="325" y2="200" stroke="#333" stroke-width="2" />
            <text x="335" y="175" font-size="12" fill="#f07b24" font-weight="bold">1</text>
            <text x="335" y="195" font-size="12" fill="#f07b24" font-weight="bold">N</text>

            <!-- TAX TABLE -->
            <rect x="250" y="200" width="150" height="80" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <rect x="250" y="200" width="150" height="25" fill="#005a70" rx="4" />
            <text x="325" y="217" font-size="13" fill="#fff" font-weight="bold" text-anchor="middle">tax</text>
            
            <text x="260" y="240" font-size="11" fill="#333">tax_id</text>
            <text x="385" y="240" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="end">PK</text>
            <text x="260" y="255" font-size="11" fill="#333">parcel_id</text>
            <text x="385" y="255" font-size="11" fill="#2980b9" font-weight="bold" text-anchor="end">FK</text>

            <!-- Center Bottom Text -->
            <text x="325" y="300" font-size="11" fill="#d9534f" font-weight="bold" text-anchor="middle">keys link the tables</text>

        </svg>
    </div>
</div>

<p>
    The diagram shows an entity-relationship diagram. Entities are one table per thing: wards, parcels, owners, tax records. A primary key (PK) is a unique ID in every table. A foreign key (FK) is a column that points to another table's key. Relationships define how tables connect, e.g., one ward has many parcels; one parcel has many tax records. Geometry columns need a type and an SRID, e.g. polygon in EPSG:32644. Use lower case, no spaces, and the same naming style everywhere.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What are entities?</strong> One table per thing: wards, parcels, owners, tax records.</li>
    <li><strong>What is a primary key (PK)?</strong> A unique ID in every table.</li>
    <li><strong>What is a foreign key (FK)?</strong> A column that points to another table's key.</li>
    <li><strong>What are relationships?</strong> One ward has many parcels; one parcel has many tax records.</li>
    <li><strong>What do geometry columns need?</strong> A type and an SRID, e.g. polygon in EPSG:32644.</li>
    <li><strong>How should I name things?</strong> Lower case, no spaces, the same style everywhere.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Draw the ER diagram on paper first and review it with the users.</p>
</div>