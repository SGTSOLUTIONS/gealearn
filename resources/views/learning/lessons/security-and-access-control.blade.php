{{-- resources/views/learning/lessons/14-16-security-and-access-control.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Security protects the data and the system from misuse, loss and attack.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand layers of defence</li>
    <li>Apply HTTPS, login and role checks</li>
    <li>Protect backups and audit logs</li>
</ul>

<h2>Visual Guide: Layers of defence</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Layers of defence</div>
        
        <svg viewBox="0 0 550 300" style="width: 100%; font-family: sans-serif;">
            <!-- Concentric Circles -->
            <circle cx="200" cy="150" r="130" fill="none" stroke="#a5d6f4" stroke-width="2" />
            <circle cx="200" cy="150" r="100" fill="none" stroke="#80cbc4" stroke-width="4" />
            <circle cx="200" cy="150" r="70" fill="none" stroke="#4db6ac" stroke-width="6" />
            <circle cx="200" cy="150" r="40" fill="#005a70" />

            <!-- Lock Icon -->
            <rect x="185" y="140" width="30" height="25" fill="#fff" rx="4" />
            <path d="M 190 140 V 130 C 190 115, 210 115, 210 130 V 140" fill="none" stroke="#fff" stroke-width="3" />
            <circle cx="200" cy="152" r="3" fill="#005a70" />
            <rect x="198" y="152" width="4" height="8" fill="#005a70" />

            <!-- Legend -->
            <rect x="350" y="40" width="20" height="20" fill="#fff" stroke="#a5d6f4" stroke-width="2" />
            <text x="380" y="55" font-size="12" fill="#333" font-weight="bold">Network</text>
            <text x="380" y="70" font-size="10" fill="#666">HTTPS everywhere</text>

            <rect x="350" y="90" width="20" height="20" fill="#a5d6f4" stroke="#80cbc4" stroke-width="2" />
            <text x="380" y="105" font-size="12" fill="#333" font-weight="bold">Login</text>
            <text x="380" y="120" font-size="10" fill="#666">who are you?</text>

            <rect x="350" y="140" width="20" height="20" fill="#80cbc4" stroke="#4db6ac" stroke-width="2" />
            <text x="380" y="155" font-size="12" fill="#333" font-weight="bold">Roles</text>
            <text x="380" y="170" font-size="10" fill="#666">what may you do?</text>

            <rect x="350" y="190" width="20" height="20" fill="#4db6ac" stroke="#4db6ac" stroke-width="2" />
            <text x="380" y="205" font-size="12" fill="#333" font-weight="bold">Input checks</text>
            <text x="380" y="220" font-size="10" fill="#666">stop SQL injection</text>

            <rect x="350" y="240" width="20" height="20" fill="#005a70" />
            <text x="380" y="255" font-size="12" fill="#333" font-weight="bold">Data</text>
            <text x="380" y="270" font-size="10" fill="#666">backups, encryption</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">each layer stops different attacks</div>
    </div>
</div>

<p>
    The diagram shows layers of defence. HTTPS encrypts traffic between browser and server. Login and roles ensure only the right people reach the right data. Input checks block SQL injection and bad uploads. Least privilege gives each user and database account only what it needs. Backups should be regular, tested and stored away from the server. Updates and audit logs patch software and record who changed what.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does HTTPS do?</strong> Encrypts traffic between browser and server.</li>
    <li><strong>What do login and roles do?</strong> Only the right people reach the right data.</li>
    <li><strong>What do input checks do?</strong> Block SQL injection and bad uploads.</li>
    <li><strong>What is least privilege?</strong> Each user and database account gets only what it needs.</li>
    <li><strong>How should backups be handled?</strong> Regular, tested and stored away from the server.</li>
    <li><strong>Why keep audit logs?</strong> Patch software and record who changed what.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Never keep passwords or keys inside the code or the web folder.</p>
</div>