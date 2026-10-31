{{-- resources/views/learning/lessons/14-2-requirement-analysis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Requirement analysis finds out exactly what the users need the system to do.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify stakeholders</li>
    <li>Distinguish functional and non-functional requirements</li>
    <li>Prioritise requirements using MoSCoW</li>
</ul>

<h2>Visual Guide: From stakeholders to requirements</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Requirements list</div>
        
        <svg viewBox="0 0 550 250" style="width: 100%; font-family: sans-serif;">
            <!-- Stakeholders -->
            <circle cx="40" cy="40" r="10" fill="#005a70" />
            <rect x="20" y="55" width="40" height="20" fill="#005a70" />
            <text x="40" y="90" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Users</text>
            <line x1="70" y1="50" x2="150" y2="50" stroke="#f07b24" stroke-width="2" />
            <polygon points="150,50 140,45 140,55" fill="#f07b24" />

            <circle cx="40" cy="110" r="10" fill="#005a70" />
            <rect x="20" y="125" width="40" height="20" fill="#005a70" />
            <text x="40" y="160" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Managers</text>
            <line x1="70" y1="120" x2="150" y2="120" stroke="#f07b24" stroke-width="2" />
            <polygon points="150,120 140,115 140,125" fill="#f07b24" />

            <circle cx="40" cy="180" r="10" fill="#005a70" />
            <rect x="20" y="195" width="40" height="20" fill="#005a70" />
            <text x="40" y="230" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Field staff</text>
            <line x1="70" y1="190" x2="150" y2="190" stroke="#f07b24" stroke-width="2" />
            <polygon points="150,190 140,185 140,195" fill="#f07b24" />

            <!-- Requirements Table -->
            <rect x="160" y="10" width="370" height="220" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <rect x="160" y="10" width="370" height="30" fill="#005a70" rx="4" />
            <text x="345" y="30" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">Requirements list</text>

            <rect x="180" y="50" width="50" height="20" fill="#d9534f" rx="10" />
            <text x="205" y="64" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">Must</text>
            <text x="245" y="64" font-size="12" fill="#333">Search parcel by ID</text>

            <rect x="180" y="80" width="50" height="20" fill="#d9534f" rx="10" />
            <text x="205" y="94" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">Must</text>
            <text x="245" y="94" font-size="12" fill="#333">Map with layers</text>

            <rect x="180" y="110" width="50" height="20" fill="#d9534f" rx="10" />
            <text x="205" y="124" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">Must</text>
            <text x="245" y="124" font-size="12" fill="#333">Login and roles</text>

            <rect x="180" y="140" width="50" height="20" fill="#f07b24" rx="10" />
            <text x="205" y="154" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">Should</text>
            <text x="245" y="154" font-size="12" fill="#333">PDF reports</text>

            <rect x="180" y="170" width="50" height="20" fill="#f07b24" rx="10" />
            <text x="205" y="184" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">Should</text>
            <text x="245" y="184" font-size="12" fill="#333">Import tool</text>

            <rect x="180" y="200" width="50" height="20" fill="#2980b9" rx="10" />
            <text x="205" y="214" font-size="10" fill="#fff" font-weight="bold" text-anchor="middle">Could</text>
            <text x="245" y="214" font-size="12" fill="#333">Mobile app</text>
        </svg>
    </div>
</div>

<p>
    The diagram shows how stakeholders map to requirements. Stakeholders include users, managers, field staff and IT. Functional requirements define what the system must do. Non-functional requirements cover speed, security, number of users and availability. Data requirements define which layers exist and their quality. Priorities label each need as Must, Should or Could.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Who are stakeholders?</strong> Users, managers, field staff and IT; ask each group.</li>
    <li><strong>What are functional requirements?</strong> What the system must do, e.g. search a parcel by ID.</li>
    <li><strong>What are non-functional requirements?</strong> Speed, security, number of users and availability.</li>
    <li><strong>What are data requirements?</strong> Which layers exist, their quality, format and owner.</li>
    <li><strong>How are priorities set?</strong> Label each need Must, Should or Could.</li>
    <li><strong>When are requirements signed off?</strong> Get them written down and signed off before design starts.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Ask users to show how they work today; the real needs appear there.</p>
</div>