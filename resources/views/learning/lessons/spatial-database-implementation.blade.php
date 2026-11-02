{{-- resources/views/learning/lessons/14-5-spatial-database-implementation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Implementation turns the schema into a working spatial database.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Set up PostgreSQL with PostGIS</li>
    <li>Create tables with constraints and indexes</li>
    <li>Load and verify data</li>
</ul>

<h2>Visual Guide: Spatial database set-up</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 20px 10px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 30px; font-size: 14px;">Spatial database set-up</div>
        
        <svg viewBox="0 0 650 320" style="width: 100%;">
            
            <!-- Database Cylinder -->
            <path d="M 80 50 C 80 35, 220 35, 220 50 L 220 230 C 220 245, 80 245, 80 230 Z" fill="#e0f2f1" stroke="#005a70" stroke-width="1.5" />
            <ellipse cx="150" cy="50" rx="70" ry="15" fill="#e0f2f1" stroke="#005a70" stroke-width="1.5" />
            
            <!-- Database Name -->
            <text x="150" y="100" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle">gisdb</text>
            
            <!-- Inner Tables -->
            <rect x="100" y="120" width="100" height="25" fill="#fff" stroke="#005a70" stroke-width="1" />
            <text x="150" y="137" font-size="12" fill="#333" text-anchor="middle">parcels</text>

            <rect x="100" y="160" width="100" height="25" fill="#fff" stroke="#005a70" stroke-width="1" />
            <text x="150" y="177" font-size="12" fill="#333" text-anchor="middle">owners</text>

            <rect x="100" y="200" width="100" height="25" fill="#fff" stroke="#005a70" stroke-width="1" />
            <text x="150" y="217" font-size="12" fill="#333" text-anchor="middle">tax</text>

            <!-- Bottom Label -->
            <text x="150" y="280" font-size="13" fill="#666" font-weight="bold" text-anchor="middle">PostgreSQL + PostGIS</text>

            <!-- Steps List -->
            <g transform="translate(280, 55)">
                <!-- Step 1 -->
                <circle cx="10" cy="10" r="10" fill="#2ecc71" />
                <path d="M 6 10 L 9 13 L 14 6" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <text x="30" y="15" font-size="13" fill="#333">Create the database</text>

                <!-- Step 2 -->
                <circle cx="10" cy="55" r="10" fill="#2ecc71" />
                <path d="M 6 55 L 9 58 L 14 51" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <text x="30" y="60" font-size="13" fill="#333">Enable PostGIS</text>

                <!-- Step 3 -->
                <circle cx="10" cy="100" r="10" fill="#2ecc71" />
                <path d="M 6 100 L 9 103 L 14 96" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <text x="30" y="105" font-size="13" fill="#333">Create tables, keys, SRID</text>

                <!-- Step 4 -->
                <circle cx="10" cy="145" r="10" fill="#2ecc71" />
                <path d="M 6 145 L 9 148 L 14 141" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <text x="30" y="150" font-size="13" fill="#333">Add GiST spatial indexes</text>

                <!-- Step 5 -->
                <circle cx="10" cy="190" r="10" fill="#2ecc71" />
                <path d="M 6 190 L 9 193 L 14 186" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <text x="30" y="195" font-size="13" fill="#333">Load and check the data</text>
            </g>
        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 10px;">script it, rebuild anywhere</div>
    </div>
</div>

<p>
    The diagram shows the spatial database set-up. PostgreSQL + PostGIS is the standard open-source choice for spatial data. Create the database, then enable the PostGIS extension. Create tables with constraints: primary keys, NOT NULL and foreign keys. Add a spatial index (GiST) on every geometry column. Load sample data and check counts, SRIDs and geometry validity. Create database roles for admins, editors and read-only users.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the standard open-source choice?</strong> PostgreSQL + PostGIS.</li>
    <li><strong>What is the first step?</strong> Create the database, then enable the PostGIS extension.</li>
    <li><strong>What constraints are needed?</strong> Primary keys, NOT NULL and foreign keys.</li>
    <li><strong>What index is added?</strong> A spatial index (GiST) on every geometry column.</li>
    <li><strong>How do I verify the data?</strong> Load sample data and check counts, SRIDs and geometry validity.</li>
    <li><strong>How do I manage access?</strong> Create database roles for admins, editors and read-only users.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Script the database set-up so you can rebuild it on any server in minutes.</p>
</div>