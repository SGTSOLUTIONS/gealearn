{{-- resources/views/learning/lessons/14-1-gis-project-planning.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Planning sets the goal, scope, team, schedule and risks of a GIS project before any building starts.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Define a clear goal and scope</li>
    <li>Understand project phases and milestones</li>
    <li>Identify resources and risks</li>
</ul>

<h2>Visual Guide: Project schedule with milestones</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Project schedule with milestones</div>
        
        <svg viewBox="0 0 550 280" style="width: 100%; font-family: sans-serif;">
            <!-- Grid Lines -->
            <line x1="100" y1="20" x2="100" y2="230" stroke="#ccc" stroke-width="1" stroke-dasharray="4,4" />
            <text x="100" y="15" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">W1</text>
            <line x1="250" y1="20" x2="250" y2="230" stroke="#ccc" stroke-width="1" stroke-dasharray="4,4" />
            <text x="250" y="15" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">W5</text>
            <line x1="400" y1="20" x2="400" y2="230" stroke="#ccc" stroke-width="1" stroke-dasharray="4,4" />
            <text x="400" y="15" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">W9</text>
            <line x1="520" y1="20" x2="520" y2="230" stroke="#ccc" stroke-width="1" stroke-dasharray="4,4" />
            <text x="520" y="15" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">W12</text>

            <!-- Rows -->
            <text x="20" y="55" font-size="14" fill="#005a70" font-weight="bold">Plan</text>
            <rect x="100" y="42" width="80" height="18" fill="#005a70" rx="4" />
            
            <text x="20" y="95" font-size="14" fill="#2ecc71" font-weight="bold">Design</text>
            <rect x="180" y="82" width="80" height="18" fill="#2ecc71" rx="4" />
            <polygon points="265,91 275,81 285,91 275,101" fill="#f07b24" />
            <text x="295" y="95" font-size="11" fill="#f07b24" font-weight="bold">design sign-off</text>

            <text x="20" y="135" font-size="14" fill="#2980b9" font-weight="bold">Build</text>
            <rect x="240" y="122" width="160" height="18" fill="#2980b9" rx="4" />

            <text x="20" y="175" font-size="14" fill="#9b59b6" font-weight="bold">Test</text>
            <rect x="370" y="162" width="100" height="18" fill="#9b59b6" rx="4" />
            <polygon points="475,171 485,161 495,171 485,181" fill="#f07b24" />
            <text x="295" y="175" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="end">tests passed</text>

            <text x="20" y="215" font-size="14" fill="#d35400" font-weight="bold">Deploy</text>
            <rect x="460" y="202" width="60" height="18" fill="#d35400" rx="4" />
            <polygon points="525,211 535,201 545,211 535,221" fill="#f07b24" />
            <text x="405" y="215" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="end">go-live</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">small releases reduce risk</div>
    </div>
</div>

<p>
    The diagram shows a project schedule with milestones. A clear goal defines the problem the project solves. Scope defines what is in and what is out. Phases include plan, design, build, test and deploy, each with a deliverable. Milestones are checkpoints such as design sign-off and go-live. Resources include people, data, software, hardware and budget.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a goal?</strong> One clear sentence on the problem the project solves.</li>
    <li><strong>What is scope?</strong> What is in and what is out; changes to scope are agreed, not assumed.</li>
    <li><strong>What are phases?</strong> Plan, design, build, test and deploy, each with a deliverable.</li>
    <li><strong>What are milestones?</strong> Checkpoints such as design sign-off and go-live.</li>
    <li><strong>What resources are needed?</strong> People, data, software, hardware and budget.</li>
    <li><strong>What risks exist?</strong> Missing data, unclear ownership or delays; note each one with a plan.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Plan in small releases: a working first version beats a perfect plan.</p>
</div>