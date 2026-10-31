{{-- resources/views/learning/lessons/14-8-api-development.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The API is the set of web addresses through which the frontend reads and changes data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Design RESTful endpoints</li>
    <li>Use HTTP methods and status codes</li>
    <li>Document API requests and responses</li>
</ul>

<h2>Visual Guide: Request and response</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Request and response</div>
        
        <svg viewBox="0 0 550 250" style="width: 100%; font-family: sans-serif;">
            <!-- App -->
            <rect x="10" y="80" width="80" height="60" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="50" y="105" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">App</text>
            <text x="50" y="125" font-size="11" fill="#666" text-anchor="middle">web map</text>
            
            <!-- Request Arrow -->
            <path d="M 90 100 L 140 100" stroke="#f07b24" stroke-width="2" />
            <polygon points="140,100 130,95 130,105" fill="#f07b24" />
            <text x="115" y="95" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="middle">request</text>

            <!-- API Endpoints -->
            <rect x="150" y="20" width="200" height="190" fill="#f9f9f9" stroke="#005a70" stroke-width="2" rx="8" />
            <text x="250" y="45" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">API endpoints</text>

            <rect x="170" y="60" width="50" height="20" fill="#4caf50" rx="4" />
            <text x="195" y="74" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">GET</text>
            <text x="230" y="74" font-size="12" fill="#333">/parcels</text>

            <rect x="170" y="90" width="50" height="20" fill="#4caf50" rx="4" />
            <text x="195" y="104" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">GET</text>
            <text x="230" y="104" font-size="12" fill="#333">/parcels/5</text>

            <rect x="170" y="120" width="50" height="20" fill="#2980b9" rx="4" />
            <text x="195" y="134" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">POST</text>
            <text x="230" y="134" font-size="12" fill="#333">/parcels</text>

            <rect x="170" y="150" width="50" height="20" fill="#f07b24" rx="4" />
            <text x="195" y="164" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">PUT</text>
            <text x="230" y="164" font-size="12" fill="#333">/parcels/5</text>

            <rect x="170" y="180" width="50" height="20" fill="#d9534f" rx="4" />
            <text x="195" y="194" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">DELETE</text>
            <text x="230" y="194" font-size="12" fill="#333">/parcels/5</text>

            <!-- Response Arrow -->
            <path d="M 150 160 L 90 160" stroke="#2ecc71" stroke-width="2" />
            <polygon points="90,160 100,155 100,165" fill="#2ecc71" />
            <text x="115" y="175" font-size="11" fill="#2ecc71" font-weight="bold" text-anchor="middle">200 OK</text>
            <text x="115" y="188" font-size="11" fill="#2ecc71" font-weight="bold" text-anchor="middle">GeoJSON</text>

            <!-- DB -->
            <path d="M 420 80 C 420 70, 490 70, 490 80 L 490 190 C 490 200, 420 200, 420 190 Z" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <ellipse cx="455" cy="80" rx="35" ry="10" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="455" y="140" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">DB</text>

            <path d="M 350 120 L 420 120" stroke="#f07b24" stroke-width="2" />
            <polygon points="420,120 410,115 410,125" fill="#f07b24" />
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">JSON or GeoJSON in, status code out</div>
    </div>
</div>

<p>
    The diagram shows a request and response cycle. Endpoints are one address per resource, e.g. parcels, owners, wards. Methods include GET for reading, POST for creating, PUT for updating, and DELETE for removing. Responses are JSON, with GeoJSON for map features. Status codes include 200 OK, 201 Created, 400 Bad Request, 401 and 403 for access, and 404 Not Found. Put a version in the address (v1) so later changes do not break users.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What are endpoints?</strong> One address per resource, e.g. parcels, owners, wards.</li>
    <li><strong>Which HTTP methods are used?</strong> GET reads, POST creates, PUT updates, DELETE removes.</li>
    <li><strong>What format are responses?</strong> JSON, with GeoJSON for map features.</li>
    <li><strong>Which status codes are common?</strong> 200 OK, 201 Created, 400 Bad Request, 401 and 403 for access, 404 Not Found.</li>
    <li><strong>What about filtering and paging?</strong> Return only what the map needs.</li>
    <li><strong>Why version the API?</strong> Put a version in the address (v1) so later changes do not break users.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Document each endpoint with an example request and response.</p>
</div>