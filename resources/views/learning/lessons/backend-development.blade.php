{{-- resources/views/learning/lessons/14-6-backend-development.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The backend is the server-side application: it receives requests, applies the rules and talks to the database.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the backend components</li>
    <li>Separate business rules from data access</li>
    <li>Secure database queries</li>
</ul>

<h2>Visual Guide: Inside the server application</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Inside the server application</div>
        
        <svg viewBox="0 0 550 250" style="width: 100%; font-family: sans-serif;">
            <!-- Client -->
            <rect x="10" y="80" width="80" height="60" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="50" y="105" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Client</text>
            <text x="50" y="125" font-size="11" fill="#666" text-anchor="middle">web / app</text>
            
            <path d="M 90 110 L 130 110" stroke="#f07b24" stroke-width="2" />
            <polygon points="130,110 120,105 120,115" fill="#f07b24" />

            <!-- Server Application Outline -->
            <rect x="140" y="10" width="230" height="200" fill="#f9f9f9" stroke="#005a70" stroke-width="2" rx="8" />
            <text x="255" y="30" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Server application</text>

            <rect x="160" y="40" width="190" height="40" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="255" y="55" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Routes</text>
            <text x="255" y="70" font-size="10" fill="#666" text-anchor="middle">receive requests</text>

            <path d="M 255 80 L 255 95" stroke="#f07b24" stroke-width="2" />
            <polygon points="255,95 250,85 260,85" fill="#f07b24" />

            <rect x="160" y="100" width="190" height="40" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="255" y="115" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Business rules</text>
            <text x="255" y="130" font-size="10" fill="#666" text-anchor="middle">validate, permissions</text>

            <path d="M 255 140 L 255 155" stroke="#f07b24" stroke-width="2" />
            <polygon points="255,155 250,145 260,145" fill="#f07b24" />

            <rect x="160" y="160" width="190" height="40" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="255" y="175" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Data access</text>
            <text x="255" y="190" font-size="10" fill="#666" text-anchor="middle">queries only</text>

            <!-- Logs -->
            <rect x="410" y="40" width="60" height="40" fill="#fff" stroke="#666" stroke-width="1" rx="4" />
            <text x="440" y="64" font-size="12" fill="#666" text-anchor="middle">logs</text>
            <line x1="350" y1="60" x2="410" y2="60" stroke="#666" stroke-width="1" />

            <!-- DB -->
            <path d="M 420 130 C 420 120, 480 120, 480 130 L 480 190 C 480 200, 420 200, 420 190 Z" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <ellipse cx="450" cy="130" rx="30" ry="8" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="450" y="165" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">DB</text>

            <path d="M 350 180 L 420 180" stroke="#f07b24" stroke-width="2" />
            <polygon points="420,180 410,175 410,185" fill="#f07b24" />
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">rules live on the server</div>
    </div>
</div>

<p>
    The diagram shows the inside of a server application. Routes receive requests from the web map or app. Business rules handle validation, calculations and permission checks. Data access is the only part that talks to the database. Common backend choices include PHP, Python, Node.js or Java. Use prepared statements so user input never becomes raw SQL. Write logs for errors and important actions.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What do routes do?</strong> Receive requests from the web map or app.</li>
    <li><strong>Where do rules live?</strong> Validation, calculations and permission checks live in business rules.</li>
    <li><strong>What talks to the database?</strong> Data access is the only part that talks to the database.</li>
    <li><strong>What are common backend choices?</strong> PHP, Python, Node.js or Java.</li>
    <li><strong>How do I prevent SQL injection?</strong> Use prepared statements so user input never becomes raw SQL.</li>
    <li><strong>Why keep rules on the server?</strong> Users can bypass the browser, so rules must be enforced server-side.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep rules in the backend, not only in the browser; users can bypass the browser.</p>
</div>