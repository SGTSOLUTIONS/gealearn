{{-- resources/views/learning/lessons/14-9-authentication-and-authorization.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Authentication proves who the user is; authorization decides what that user may do.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand authentication and authorization</li>
    <li>Store passwords securely</li>
    <li>Use roles and permissions</li>
</ul>

<h2>Visual Guide: Who are you, and what may you do?</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 20px 10px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 25px; font-size: 14px;">Who are you, and what may you do?</div>
        
        <svg viewBox="0 0 650 340" style="width: 100%;">
            
            <!-- Sign In Form -->
            <rect x="30" y="60" width="130" height="200" fill="#fff" stroke="#005a70" stroke-width="2" rx="8" />
            <rect x="30" y="60" width="130" height="35" fill="#005a70" rx="8" />
            <text x="95" y="82" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">Sign in</text>

            <!-- Input Fields -->
            <rect x="45" y="115" width="100" height="25" fill="#eef4f0" stroke="#ccc" />
            <text x="55" y="132" font-size="13" fill="#333">ravi</text>

            <rect x="45" y="155" width="100" height="25" fill="#eef4f0" stroke="#ccc" />
            <text x="55" y="172" font-size="13" fill="#333">••••••</text>

            <!-- Login Button -->
            <rect x="45" y="205" width="100" height="30" fill="#f07b24" rx="6" />
            <text x="95" y="225" font-size="13" fill="#fff" font-weight="bold" text-anchor="middle">Login</text>

            <!-- Arrow 1 -->
            <path d="M 160 160 L 210 160" stroke="#f07b24" stroke-width="2" />
            <polygon points="210,160 200,155 200,165" fill="#f07b24" />

            <!-- Authentication Shield -->
            <polygon points="250,130 280,130 280,190 250,220 220,190 220,130" fill="#005a70" />
            <path d="M 242 160 L 250 168 L 262 152" fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            
            <text x="250" y="245" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Authentication</text>
            <text x="250" y="265" font-size="12" fill="#666" font-style="italic" text-anchor="middle">who are you?</text>

            <!-- Arrow 2 -->
            <path d="M 290 160 L 340 160" stroke="#f07b24" stroke-width="2" />
            <polygon points="340,160 330,155 330,165" fill="#f07b24" />

            <!-- Token -->
            <rect x="350" y="135" width="60" height="45" fill="#fdf0e0" stroke="#f07b24" stroke-width="2" rx="4" />
            <text x="380" y="155" font-size="12" fill="#f07b24" font-weight="bold" text-anchor="middle">token</text>
            <text x="380" y="170" font-size="10" fill="#666" text-anchor="middle">session</text>

            <!-- Arrow 3 -->
            <path d="M 410 160 L 440 160" stroke="#f07b24" stroke-width="2" />
            <polygon points="440,160 430,155 430,165" fill="#f07b24" />

            <!-- ================= AUTHORIZATION PANEL ================= -->
            <!-- The Panel Border -->
            <rect x="450" y="40" width="150" height="240" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            
            <!-- Column Headers -->
            <text x="520" y="80" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">view</text>
            <text x="575" y="80" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">edit</text>

            <!-- Viewer Row -->
            <text x="465" y="115" font-size="12" fill="#005a70" font-weight="bold">viewer</text>
            <!-- View Check -->
            <circle cx="520" cy="110" r="9" fill="#2ecc71" />
            <path d="M 516 110 L 519 113 L 524 106" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <!-- Edit Cross -->
            <path d="M 570 105 L 580 115 M 580 105 L 570 115" stroke="#d9534f" stroke-width="2.5" stroke-linecap="round" />

            <!-- Editor Row -->
            <text x="465" y="165" font-size="12" fill="#005a70" font-weight="bold">editor</text>
            <!-- View Check -->
            <circle cx="520" cy="160" r="9" fill="#2ecc71" />
            <path d="M 516 160 L 519 163 L 524 156" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <!-- Edit Check -->
            <circle cx="575" cy="160" r="9" fill="#2ecc71" />
            <path d="M 571 160 L 574 163 L 579 156" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />

            <!-- Admin Row -->
            <text x="465" y="215" font-size="12" fill="#005a70" font-weight="bold">admin</text>
            <!-- View Check -->
            <circle cx="520" cy="210" r="9" fill="#2ecc71" />
            <path d="M 516 210 L 519 213 L 524 206" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <!-- Edit Check -->
            <circle cx="575" cy="210" r="9" fill="#2ecc71" />
            <path d="M 571 210 L 574 213 L 579 206" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />

            <!-- Bottom Labels -->
            <text x="525" y="300" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Authorization</text>
            <text x="525" y="320" font-size="12" fill="#666" font-style="italic" text-anchor="middle">what may you do?</text>

        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 15px;">check roles on the server</div>
    </div>
</div>

<p>
    The diagram shows authentication and authorization. Authentication is a username and password checked by the server. Store only salted password hashes, never plain text. A session or token proves the user on every later request. Authorization uses roles such as viewer, editor and admin. Check permissions on the server for every request. Use HTTPS and consider two-factor login for admins.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is authentication?</strong> A username and password checked by the server.</li>
    <li><strong>How are passwords stored?</strong> Store only salted password hashes, never plain text.</li>
    <li><strong>What proves the user on later requests?</strong> A session or token.</li>
    <li><strong>What is authorization?</strong> Roles such as viewer, editor and admin.</li>
    <li><strong>Where are permissions checked?</strong> Check permissions on the server for every request.</li>
    <li><strong>What security measure should I use?</strong> Use HTTPS and consider two-factor login for admins.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> 401 means not logged in; 403 means logged in but not allowed.</p>
</div>