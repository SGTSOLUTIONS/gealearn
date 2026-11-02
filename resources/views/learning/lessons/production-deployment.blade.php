{{-- resources/views/learning/lessons/14-18-production-deployment.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Deployment moves the finished system from the development computer to a server where real users can use it.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the three environments</li>
    <li>Set up the server securely</li>
    <li>Monitor and roll back if needed</li>
</ul>

<h2>Visual Guide: From development to production</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 60%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 25px 15px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 25px; font-size: 14px;">From development to production</div>
        
        <svg viewBox="0 0 650 340" style="width: 100%;">
            
            <!-- ================= TOP ROW (ENVIRONMENTS) ================= -->
            
            <!-- 1. Development -->
            <rect x="20" y="20" width="130" height="130" fill="#fff" stroke="#005a70" stroke-width="2" rx="8" />
            <!-- Laptop Icon -->
            <rect x="45" y="45" width="80" height="45" fill="#e0f2f1" stroke="#005a70" stroke-width="2" />
            <rect x="40" y="90" width="90" height="10" fill="#005a70" rx="2" />
            <!-- Text -->
            <text x="85" y="125" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Development</text>
            <text x="85" y="142" font-size="11" fill="#666" text-anchor="middle">your computer</text>

            <!-- Arrow 1 -->
            <path d="M 160 85 L 190 85" stroke="#f07b24" stroke-width="2" />
            <polygon points="190,85 180,80 180,90" fill="#f07b24" />
            <text x="175" y="75" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="middle">test</text>

            <!-- 2. Staging -->
            <rect x="200" y="20" width="130" height="130" fill="#fff" stroke="#f07b24" stroke-width="2" rx="8" />
            <!-- Desktop Icon -->
            <rect x="225" y="45" width="80" height="45" fill="#fdf0e0" stroke="#f07b24" stroke-width="2" />
            <rect x="220" y="90" width="90" height="10" fill="#f07b24" rx="2" />
            <!-- Text -->
            <text x="265" y="125" font-size="13" fill="#f07b24" font-weight="bold" text-anchor="middle">Staging</text>
            <text x="265" y="142" font-size="11" fill="#666" text-anchor="middle">test copy</text>

            <!-- Arrow 2 -->
            <path d="M 340 85 L 370 85" stroke="#f07b24" stroke-width="2" />
            <polygon points="370,85 360,80 360,90" fill="#f07b24" />
            <text x="355" y="75" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="middle">release</text>

            <!-- 3. Production -->
            <rect x="380" y="20" width="130" height="130" fill="#fff" stroke="#005a70" stroke-width="2" rx="8" />
            <!-- Server Icon -->
            <rect x="400" y="45" width="90" height="20" fill="#666" rx="2" />
            <circle cx="480" cy="55" r="3" fill="#2ecc71" />
            <rect x="400" y="70" width="90" height="20" fill="#666" rx="2" />
            <rect x="400" y="95" width="90" height="20" fill="#666" rx="2" />
            <circle cx="480" cy="105" r="3" fill="#2ecc71" />
            <!-- Text -->
            <text x="445" y="125" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Production</text>
            <text x="445" y="142" font-size="11" fill="#666" text-anchor="middle">live users</text>

            <!-- ================= BOTTOM ROW (TASKS) ================= -->
            
            <!-- 1. HTTPS Box -->
            <rect x="20" y="180" width="150" height="80" fill="#fff" stroke="#cce5e5" stroke-width="1.5" rx="6" />
            <!-- Lock Icon -->
            <rect x="75" y="200" width="25" height="20" fill="#005a70" rx="3" />
            <path d="M 80 200 V 192 C 80 185, 95 185, 95 192 V 200" fill="none" stroke="#005a70" stroke-width="3" />
            <circle cx="87.5" cy="210" r="2.5" fill="#fff" />
            <!-- Text -->
            <text x="95" y="245" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">HTTPS</text>

            <!-- 2. Backup Box -->
            <rect x="190" y="180" width="150" height="80" fill="#fff" stroke="#cce5e5" stroke-width="1.5" rx="6" />
            <!-- Database Cylinder -->
            <ellipse cx="265" cy="200" rx="20" ry="6" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <path d="M 245 200 L 245 225 C 245 235, 285 235, 285 225 L 285 200" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <!-- Text -->
            <text x="265" y="245" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Backup</text>

            <!-- 3. Monitor Box -->
            <rect x="360" y="180" width="200" height="80" fill="#fff" stroke="#cce5e5" stroke-width="1.5" rx="6" />
            <!-- Line Chart -->
            <polyline points="390,235 420,210 450,225 480,195 510,220 540,195" fill="none" stroke="#d35400" stroke-width="2" />
            <!-- Text -->
            <text x="460" y="245" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Monitor</text>

        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: -15px; font-weight: bold;">test on staging first</div>
    </div>
</div>

<p>
    The diagram shows the three environments and post-deployment tasks. Three environments are development, staging (a test copy) and production (live). Server set-up includes web server, database, firewall and HTTPS certificate. Configuration keeps passwords and settings outside the code. Backup before release and have a rollback plan. Monitoring watches errors, load and disk space. Train users and announce the release with its known limits.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What are the three environments?</strong> Development, staging (a test copy) and production (live).</li>
    <li><strong>What does server set-up include?</strong> Web server, database, firewall and HTTPS certificate.</li>
    <li><strong>Where do passwords and settings go?</strong> Outside the code, in environment variables or config files.</li>
    <li><strong>What should happen before release?</strong> Backup before release and have a rollback plan.</li>
    <li><strong>What does monitoring watch?</strong> Errors, load and disk space.</li>
    <li><strong>What should I do with users?</strong> Train users and announce the release with its known limits.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Deploy first to staging and test with real data before touching production.</p>
</div>