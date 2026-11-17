{{-- resources/views/learning/lessons/16-14-create-gis-dashboard.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A dashboard combines a map, charts and key numbers so users can see the status of a project quickly.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Design KPI cards and charts</li>
    <li>Link filters to all widgets</li>
    <li>Use real data for testing</li>
</ul>

<h2>Visual Guide: Dashboard layout</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 20px 10px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 15px; font-size: 14px;">Dashboard layout</div>
        
        <svg viewBox="0 0 650 340" style="width: 100%;">
            <!-- KPI Cards Row -->
            <rect x="20" y="20" width="130" height="70" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="85" y="55" font-size="22" fill="#005a70" font-weight="bold" text-anchor="middle">12,480</text>
            <text x="85" y="75" font-size="12" fill="#666" text-anchor="middle">properties</text>

            <rect x="170" y="20" width="130" height="70" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="235" y="55" font-size="22" fill="#005a70" font-weight="bold" text-anchor="middle">4.2 M</text>
            <text x="235" y="75" font-size="12" fill="#666" text-anchor="middle">tax due</text>

            <rect x="320" y="20" width="130" height="70" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="385" y="55" font-size="22" fill="#2ecc71" font-weight="bold" text-anchor="middle">78%</text>
            <text x="385" y="75" font-size="12" fill="#666" text-anchor="middle">collected</text>

            <rect x="470" y="20" width="130" height="70" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="535" y="55" font-size="22" fill="#d9534f" font-weight="bold" text-anchor="middle">22%</text>
            <text x="535" y="75" font-size="12" fill="#666" text-anchor="middle">arrears</text>

            <!-- Arrears by Ward Chart -->
            <rect x="20" y="110" width="200" height="210" fill="#fff" stroke="#005a70" stroke-width="1" rx="6" />
            <text x="120" y="135" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Arrears by ward</text>
            
            <!-- Bars -->
            <rect x="40" y="240" width="20" height="60" fill="#005a70" />
            <text x="50" y="315" font-size="10" fill="#666" text-anchor="middle">W1</text>
            
            <rect x="70" y="200" width="20" height="100" fill="#005a70" />
            <text x="80" y="315" font-size="10" fill="#666" text-anchor="middle">W2</text>
            
            <rect x="100" y="260" width="20" height="40" fill="#005a70" />
            <text x="110" y="315" font-size="10" fill="#666" text-anchor="middle">W3</text>
            
            <rect x="130" y="170" width="20" height="130" fill="#f07b24" />
            <text x="140" y="315" font-size="10" fill="#666" text-anchor="middle">W4</text>
            
            <rect x="160" y="220" width="20" height="80" fill="#005a70" />
            <text x="170" y="315" font-size="10" fill="#666" text-anchor="middle">W5</text>

            <!-- Map -->
            <rect x="240" y="110" width="200" height="210" fill="#fff" stroke="#005a70" stroke-width="1" rx="6" />
            <text x="340" y="135" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Map</text>
            
            <!-- Map Grid -->
            <rect x="260" y="150" width="70" height="60" fill="#f5b041" stroke="#333" stroke-width="1" />
            <rect x="340" y="150" width="40" height="60" fill="#d35400" stroke="#333" stroke-width="1" />
            <rect x="260" y="220" width="70" height="60" fill="#fdf0e0" stroke="#333" stroke-width="1" />
            <rect x="340" y="220" width="40" height="60" fill="#fdf0e0" stroke="#333" stroke-width="1" />
            <rect x="390" y="150" width="40" height="60" fill="#e3f2fd" stroke="#333" stroke-width="1" />
            <rect x="390" y="220" width="40" height="60" fill="#e3f2fd" stroke="#333" stroke-width="1" />

            <!-- Collection Donut -->
            <rect x="460" y="110" width="140" height="210" fill="#fff" stroke="#005a70" stroke-width="1" rx="6" />
            <text x="530" y="135" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Collection</text>
            
            <!-- Donut Chart -->
            <circle cx="530" cy="210" r="50" fill="#2ecc71" />
            <circle cx="530" cy="210" r="50" fill="none" stroke="#e0e0e0" stroke-width="20" />
            <path d="M 530 160 A 50 50 0 0 1 580 210 L 530 210 Z" fill="#e0e0e0" />
            <text x="530" y="216" font-size="16" fill="#333" font-weight="bold" text-anchor="middle">78%</text>
        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 15px;">one question per widget</div>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>List the questions the users must answer, e.g. how many properties, how much is due.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Prepare the summary data (per ward) in the database or a CSV file.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Place <strong>KPI cards</strong> across the top.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Add a bar chart and a map that use the same data.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Add filters (ward, date) that update every part together.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Test on different screen sizes and with real data.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Fewer, clearer widgets beat a crowded screen.</p>
</div>