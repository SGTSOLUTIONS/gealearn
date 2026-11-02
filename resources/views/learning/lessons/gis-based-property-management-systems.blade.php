{{-- resources/views/learning/lessons/13-19-gis-based-property-management-systems.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A property management system joins the map, the records, tax and utilities in one application with logins and reports.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the system architecture</li>
    <li>Know the modules and roles</li>
    <li>Keep the system reliable</li>
</ul>

<h2>Visual Guide: Property management system</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Property management system</div>
        
        <svg viewBox="0 0 550 230" style="width: 100%; font-family: sans-serif;">
            <!-- Users -->
            <circle cx="30" cy="50" r="8" fill="#005a70" />
            <circle cx="60" cy="50" r="8" fill="#f07b24" />
            <circle cx="90" cy="50" r="8" fill="#005a70" />
            <text x="60" y="80" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Users</text>
            <text x="60" y="95" font-size="10" fill="#666" text-anchor="middle">viewer · editor · admin</text>

            <!-- Arrow -->
            <path d="M 110 50 L 140 50" stroke="#f07b24" stroke-width="2" />
            <polygon points="140,50 130,45 130,55" fill="#f07b24" />

            <!-- Web map -->
            <rect x="150" y="30" width="70" height="50" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <rect x="150" y="30" width="70" height="12" fill="#005a70" rx="4" />
            <text x="185" y="65" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Web map</text>
            <text x="185" y="80" font-size="10" fill="#666" text-anchor="middle">Leaflet / forms</text>

            <!-- Arrow -->
            <path d="M 220 50 L 250 50" stroke="#f07b24" stroke-width="2" />
            <polygon points="250,50 240,45 240,55" fill="#f07b24" />

            <!-- Server API -->
            <rect x="260" y="30" width="70" height="50" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="295" y="60" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Server API</text>
            <text x="295" y="75" font-size="10" fill="#666" text-anchor="middle">login · rules</text>

            <!-- Arrow -->
            <path d="M 330 50 L 360 50" stroke="#f07b24" stroke-width="2" />
            <polygon points="360,50 350,45 350,55" fill="#f07b24" />

            <!-- Database -->
            <path d="M 370 35 C 370 25, 420 25, 420 35 L 420 70 C 420 80, 370 80, 370 70 Z" fill="#e8f5e9" stroke="#005a70" stroke-width="2" />
            <path d="M 370 35 C 370 45, 420 45, 420 35" fill="none" stroke="#005a70" stroke-width="2" />
            <text x="395" y="60" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">PostGIS</text>
            <text x="395" y="100" font-size="10" fill="#666" text-anchor="middle">parcels · tax</text>

            <text x="275" y="140" font-size="12" fill="#666" font-style="italic" text-anchor="middle">modules</text>

            <!-- Modules -->
            <rect x="20" y="160" width="80" height="30" fill="#005a70" rx="15" />
            <text x="60" y="180" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">Parcels</text>

            <rect x="120" y="160" width="80" height="30" fill="#005a70" rx="15" />
            <text x="160" y="180" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">Owners</text>

            <rect x="220" y="160" width="80" height="30" fill="#005a70" rx="15" />
            <text x="260" y="180" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">Tax</text>

            <rect x="320" y="160" width="80" height="30" fill="#005a70" rx="15" />
            <text x="360" y="180" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">Utilities</text>

            <rect x="420" y="160" width="80" height="30" fill="#005a70" rx="15" />
            <text x="460" y="180" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">Reports</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">modules grow release by release</div>
    </div>
</div>

<p>
    The diagram shows a property management system. It joins map, records, tax and utilities in one application. Modules include parcels, owners, tax and billing, utilities, reports and users. Roles (viewer, editor and admin) control who can see and change data. Typical parts: a web map, a server API and a spatial database. Keep it reliable with backups, validation checks, an audit log and testing.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a property management system?</strong> A system that joins map, records, tax and utilities in one application.</li>
    <li><strong>What are the modules?</strong> Parcels, owners, tax and billing, utilities, reports and users.</li>
    <li><strong>What are the roles?</strong> Viewer, editor and admin control who can see and change data.</li>
    <li><strong>What are the typical parts?</strong> A web map, a server API and a spatial database (see Module 10).</li>
    <li><strong>What reports can it make?</strong> Property lists, arrears by ward and printable maps.</li>
    <li><strong>How do I keep it reliable?</strong> With backups, validation checks, an audit log and testing.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Start with parcels and records, then add tax and utilities in later releases.</p>
</div>