{{-- resources/views/learning/lessons/14-19-gis-project-documentation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Documentation records how the system works, so others can use, maintain and extend it.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify the six documents every project needs</li>
    <li>Write documentation as you build</li>
    <li>Keep the documentation updated</li>
</ul>

<h2>Visual Guide: The documentation set</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">The documentation set</div>
        
        <svg viewBox="0 0 550 250" style="width: 100%; font-family: sans-serif;">
            <!-- README -->
            <rect x="20" y="20" width="150" height="90" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <polygon points="160,20 170,30 160,40" fill="#005a70" />
            <rect x="20" y="20" width="150" height="25" fill="#005a70" rx="4" />
            <text x="95" y="37" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">README</text>
            <line x1="35" y1="60" x2="155" y2="60" stroke="#ccc" stroke-width="2" />
            <line x1="35" y1="75" x2="155" y2="75" stroke="#ccc" stroke-width="2" />
            <line x1="35" y1="90" x2="130" y2="90" stroke="#ccc" stroke-width="2" />

            <!-- User guide -->
            <rect x="200" y="20" width="150" height="90" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="4" />
            <polygon points="340,20 350,30 340,40" fill="#2ecc71" />
            <rect x="200" y="20" width="150" height="25" fill="#2ecc71" rx="4" />
            <text x="275" y="37" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">User guide</text>
            <line x1="215" y1="60" x2="335" y2="60" stroke="#ccc" stroke-width="2" />
            <line x1="215" y1="75" x2="335" y2="75" stroke="#ccc" stroke-width="2" />
            <line x1="215" y1="90" x2="310" y2="90" stroke="#ccc" stroke-width="2" />

            <!-- Data dictionary -->
            <rect x="380" y="20" width="150" height="90" fill="#fff" stroke="#2980b9" stroke-width="2" rx="4" />
            <polygon points="520,20 530,30 520,40" fill="#2980b9" />
            <rect x="380" y="20" width="150" height="25" fill="#2980b9" rx="4" />
            <text x="455" y="37" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">Data dictionary</text>
            <line x1="395" y1="60" x2="515" y2="60" stroke="#ccc" stroke-width="2" />
            <line x1="395" y1="75" x2="515" y2="75" stroke="#ccc" stroke-width="2" />
            <line x1="395" y1="90" x2="490" y2="90" stroke="#ccc" stroke-width="2" />

            <!-- API reference -->
            <rect x="20" y="130" width="150" height="90" fill="#fff" stroke="#9b59b6" stroke-width="2" rx="4" />
            <polygon points="160,130 170,140 160,150" fill="#9b59b6" />
            <rect x="20" y="130" width="150" height="25" fill="#9b59b6" rx="4" />
            <text x="95" y="147" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">API reference</text>
            <line x1="35" y1="170" x2="155" y2="170" stroke="#ccc" stroke-width="2" />
            <line x1="35" y1="185" x2="155" y2="185" stroke="#ccc" stroke-width="2" />
            <line x1="35" y1="200" x2="130" y2="200" stroke="#ccc" stroke-width="2" />

            <!-- Admin guide -->
            <rect x="200" y="130" width="150" height="90" fill="#fff" stroke="#f07b24" stroke-width="2" rx="4" />
            <polygon points="340,130 350,140 340,150" fill="#f07b24" />
            <rect x="200" y="130" width="150" height="25" fill="#f07b24" rx="4" />
            <text x="275" y="147" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">Admin guide</text>
            <line x1="215" y1="170" x2="335" y2="170" stroke="#ccc" stroke-width="2" />
            <line x1="215" y1="185" x2="335" y2="185" stroke="#ccc" stroke-width="2" />
            <line x1="215" y1="200" x2="310" y2="200" stroke="#ccc" stroke-width="2" />

            <!-- Change log -->
            <rect x="380" y="130" width="150" height="90" fill="#fff" stroke="#34495e" stroke-width="2" rx="4" />
            <polygon points="520,130 530,140 520,150" fill="#34495e" />
            <rect x="380" y="130" width="150" height="25" fill="#34495e" rx="4" />
            <text x="455" y="147" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">Change log</text>
            <line x1="395" y1="170" x2="515" y2="170" stroke="#ccc" stroke-width="2" />
            <line x1="395" y1="185" x2="515" y2="185" stroke="#ccc" stroke-width="2" />
            <line x1="395" y1="200" x2="490" y2="200" stroke="#ccc" stroke-width="2" />
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">write as you build</div>
    </div>
</div>

<p>
    The diagram shows the documentation set. The README explains what the project is and how to start it. The user guide provides step-by-step help with screenshots. The data dictionary lists every table, field, type, unit and code list. The API reference documents endpoints, parameters and example responses. The admin guide covers install, backup, restore and update. The change log records what changed in each version.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a README?</strong> What the project is and how to start it.</li>
    <li><strong>What is a user guide?</strong> Step-by-step help with screenshots.</li>
    <li><strong>What is a data dictionary?</strong> Every table, field, type, unit and code list.</li>
    <li><strong>What is an API reference?</strong> Endpoints, parameters and example responses.</li>
    <li><strong>What is an admin guide?</strong> Install, backup, restore and update.</li>
    <li><strong>What is a change log?</strong> What changed in each version.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Write documentation as you build; it takes much longer afterwards.</p>
</div>