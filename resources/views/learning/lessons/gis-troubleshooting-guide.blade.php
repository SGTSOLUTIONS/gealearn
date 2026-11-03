{{-- resources/views/learning/lessons/19-12-gis-troubleshooting-guide.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A fixed order of checks that finds most problems quickly.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Follow a systematic troubleshooting process</li>
    <li>Check data, CRS, geometry, and tools</li>
    <li>Read error messages effectively</li>
</ul>

<h2>Visual Guide: A fixed order of checks</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 15px; font-size: 14px;">A fixed order of checks</div>
        
        <svg viewBox="0 0 650 300" style="width: 100%;">
            
            <!-- Step 1 -->
            <circle cx="30" cy="25" r="14" fill="#005a70" />
            <text x="30" y="30" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">1</text>
            <rect x="60" y="10" width="440" height="30" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="80" y="30" font-size="13" fill="#005a70" font-weight="bold">Data</text>
            <text x="480" y="30" font-size="11" fill="#666" text-anchor="end">opens? count and fields right?</text>
            
            <path d="M 500 25 L 540 25" stroke="#2ecc71" stroke-width="2" />
            <polygon points="540,25 530,20 530,30" fill="#2ecc71" />
            <rect x="550" y="10" width="80" height="30" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="15" />
            <text x="590" y="30" font-size="11" fill="#2ecc71" font-weight="bold" text-anchor="middle">fixed?</text>

            <!-- Step 2 -->
            <circle cx="30" cy="70" r="14" fill="#2ecc71" />
            <text x="30" y="75" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">2</text>
            <rect x="60" y="55" width="440" height="30" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="4" />
            <text x="80" y="75" font-size="13" fill="#2ecc71" font-weight="bold">CRS</text>
            <text x="480" y="75" font-size="11" fill="#666" text-anchor="end">layers and project correct?</text>
            
            <path d="M 500 70 L 540 70" stroke="#2ecc71" stroke-width="2" />
            <polygon points="540,70 530,65 530,75" fill="#2ecc71" />
            <rect x="550" y="55" width="80" height="30" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="15" />
            <text x="590" y="75" font-size="11" fill="#2ecc71" font-weight="bold" text-anchor="middle">fixed?</text>

            <!-- Step 3 -->
            <circle cx="30" cy="115" r="14" fill="#2980b9" />
            <text x="30" y="120" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">3</text>
            <rect x="60" y="100" width="440" height="30" fill="#fff" stroke="#2980b9" stroke-width="2" rx="4" />
            <text x="80" y="120" font-size="13" fill="#2980b9" font-weight="bold">Geometry</text>
            <text x="480" y="120" font-size="11" fill="#666" text-anchor="end">valid, not empty, right type?</text>
            
            <path d="M 500 115 L 540 115" stroke="#2ecc71" stroke-width="2" />
            <polygon points="540,115 530,110 530,120" fill="#2ecc71" />
            <rect x="550" y="100" width="80" height="30" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="15" />
            <text x="590" y="120" font-size="11" fill="#2ecc71" font-weight="bold" text-anchor="middle">fixed?</text>

            <!-- Step 4 -->
            <circle cx="30" cy="160" r="14" fill="#8e44ad" />
            <text x="30" y="165" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">4</text>
            <rect x="60" y="145" width="440" height="30" fill="#fff" stroke="#8e44ad" stroke-width="2" rx="4" />
            <text x="80" y="165" font-size="13" fill="#8e44ad" font-weight="bold">Tool settings</text>
            <text x="480" y="165" font-size="11" fill="#666" text-anchor="end">inputs, selection, units, output</text>
            
            <path d="M 500 160 L 540 160" stroke="#2ecc71" stroke-width="2" />
            <polygon points="540,160 530,155 530,165" fill="#2ecc71" />
            <rect x="550" y="145" width="80" height="30" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="15" />
            <text x="590" y="165" font-size="11" fill="#2ecc71" font-weight="bold" text-anchor="middle">fixed?</text>

            <!-- Step 5 -->
            <circle cx="30" cy="205" r="14" fill="#f07b24" />
            <text x="30" y="210" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">5</text>
            <rect x="60" y="190" width="440" height="30" fill="#fff" stroke="#f07b24" stroke-width="2" rx="4" />
            <text x="80" y="210" font-size="13" fill="#f07b24" font-weight="bold">Environment</text>
            <text x="480" y="210" font-size="11" fill="#666" text-anchor="end">version, memory, permissions, paths</text>
            
            <path d="M 500 205 L 540 205" stroke="#2ecc71" stroke-width="2" />
            <polygon points="540,205 530,200 530,210" fill="#2ecc71" />
            <rect x="550" y="190" width="80" height="30" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="15" />
            <text x="590" y="210" font-size="11" fill="#2ecc71" font-weight="bold" text-anchor="middle">fixed?</text>

            <!-- Step 6 -->
            <circle cx="30" cy="250" r="14" fill="#34495e" />
            <text x="30" y="255" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">6</text>
            <rect x="60" y="235" width="440" height="30" fill="#fff" stroke="#34495e" stroke-width="2" rx="4" />
            <text x="80" y="255" font-size="13" fill="#34495e" font-weight="bold">Messages</text>
            <text x="480" y="255" font-size="11" fill="#666" text-anchor="end">read the full error and the log</text>
            
            <path d="M 500 250 L 540 250" stroke="#2ecc71" stroke-width="2" />
            <polygon points="540,250 530,245 530,255" fill="#2ecc71" />
            <rect x="550" y="235" width="80" height="30" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="15" />
            <text x="590" y="255" font-size="11" fill="#2ecc71" font-weight="bold" text-anchor="middle">fixed?</text>

        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 15px; font-weight: bold;">stop at the first check that fixes it</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>1 Data</strong> – does the file open, and are the feature count and attributes as expected?</li>
    <li><strong>2 CRS</strong> – does every layer have the right CRS, and does the project CRS suit the task?</li>
    <li><strong>3 Geometry</strong> – are the shapes valid, not empty and of the expected type?</li>
    <li><strong>4 Tool settings</strong> – inputs, selected-features-only, units and output location.</li>
    <li><strong>5 Environment</strong> – software version, memory, permissions, file paths and network access.</li>
    <li><strong>6 Messages</strong> – read the full error text and the log; search for the exact message.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Change one thing at a time, and test after each change.</p>
</div>