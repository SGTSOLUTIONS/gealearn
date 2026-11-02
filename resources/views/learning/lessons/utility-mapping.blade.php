{{-- resources/views/learning/lessons/13-15-utility-mapping.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Utility mapping records pipes, cables, poles and valves so that they can be found, maintained and planned.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Map utility networks</li>
    <li>Record asset attributes</li>
    <li>Use buffers to find clashes</li>
</ul>

<h2>Visual Guide: Utility networks along roads</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Utility networks along roads</div>
        
        <svg viewBox="0 0 400 220" style="width: 100%; font-family: sans-serif;">
            <rect x="150" y="10" width="40" height="200" fill="#e0e0e0" />
            <rect x="10" y="90" width="380" height="40" fill="#e0e0e0" />
            <line x1="170" y1="10" x2="170" y2="210" stroke="#fff" stroke-width="2" stroke-dasharray="6,4" />
            <line x1="10" y1="110" x2="390" y2="110" stroke="#fff" stroke-width="2" stroke-dasharray="6,4" />

            <line x1="10" y1="80" x2="390" y2="80" stroke="#d9534f" stroke-width="3" />
            <circle cx="30" cy="80" r="3" fill="#d9534f" />
            <circle cx="80" cy="80" r="3" fill="#d9534f" />
            <rect x="100" y="74" width="10" height="12" fill="#d9534f" />
            <circle cx="150" cy="80" r="3" fill="#d9534f" />
            <circle cx="200" cy="80" r="3" fill="#d9534f" />
            <circle cx="250" cy="80" r="3" fill="#d9534f" />
            <circle cx="300" cy="80" r="3" fill="#d9534f" />
            <circle cx="350" cy="80" r="3" fill="#d9534f" />

            <line x1="10" y1="120" x2="390" y2="120" stroke="#3b8dbd" stroke-width="6" />
            <circle cx="60" cy="120" r="5" fill="#fff" stroke="#3b8dbd" stroke-width="2" />
            <circle cx="250" cy="120" r="5" fill="#fff" stroke="#3b8dbd" stroke-width="2" />
            <circle cx="350" cy="120" r="5" fill="#fff" stroke="#3b8dbd" stroke-width="2" />

            <line x1="190" y1="10" x2="190" y2="210" stroke="#3b8dbd" stroke-width="6" />
            <circle cx="190" cy="50" r="5" fill="#fff" stroke="#3b8dbd" stroke-width="2" />
            <circle cx="190" cy="170" r="5" fill="#fff" stroke="#3b8dbd" stroke-width="2" />

            <line x1="210" y1="10" x2="210" y2="210" stroke="#a57c5a" stroke-width="3" stroke-dasharray="6,4" />
            <circle cx="210" cy="40" r="4" fill="#a57c5a" />
            <circle cx="210" cy="150" r="4" fill="#a57c5a" />

            <line x1="10" y1="130" x2="390" y2="130" stroke="#a57c5a" stroke-width="3" stroke-dasharray="6,4" />
            <circle cx="120" cy="130" r="4" fill="#a57c5a" />
            <circle cx="320" cy="130" r="4" fill="#a57c5a" />
            
            <rect x="20" y="190" width="30" height="4" fill="#3b8dbd" />
            <text x="60" y="195" font-size="10" fill="#333">water</text>
            
            <rect x="120" y="190" width="30" height="4" fill="#a57c5a" />
            <text x="160" y="195" font-size="10" fill="#333">sewer</text>
            
            <rect x="220" y="190" width="30" height="4" fill="#d9534f" />
            <text x="260" y="195" font-size="10" fill="#333">power</text>
            
            <circle cx="320" cy="192" r="4" fill="#fff" stroke="#3b8dbd" stroke-width="2" />
            <text x="335" y="195" font-size="10" fill="#333">valve</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">lines carry data, points mark assets</div>
    </div>
</div>

<p>
    The diagram shows utility networks along roads. Utility mapping records pipes, cables, poles, valves and manholes. Lines carry the network; points mark the assets. Attributes include type, material, diameter, depth, year installed and condition. Capture with GNSS or total station surveys, as-built drawings and locating tools. Use nearest-feature and buffer tools to find assets and check clashes.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does utility mapping record?</strong> Pipes, cables, poles, valves and manholes.</li>
    <li><strong>What carry the network?</strong> Lines carry the network; points mark the assets.</li>
    <li><strong>What attributes are recorded?</strong> Type, material, diameter, depth, year installed and condition.</li>
    <li><strong>How is it captured?</strong> With GNSS or total station surveys, as-built drawings and locating tools.</li>
    <li><strong>How do I check clashes?</strong> Use nearest-feature and buffer tools.</li>
    <li><strong>Why does depth matter?</strong> Excavation needs to know what lies below.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Survey utilities before back-filling a trench: it is cheap then and costly later.</p>
</div>