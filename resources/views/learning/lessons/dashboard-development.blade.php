{{-- resources/views/learning/lessons/14-14-dashboard-development.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A dashboard shows key numbers, charts and a map together so users see the situation at a glance.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Build KPI cards, charts and maps</li>
    <li>Link filters to all dashboard parts</li>
    <li>Summarize data on the server</li>
</ul>

<h2>Visual Guide: Dashboard layout</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Dashboard layout</div>
        
        <svg viewBox="0 0 550 300" style="width: 100%; font-family: sans-serif;">
            <!-- KPI Cards -->
            <rect x="10" y="10" width="125" height="60" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="72" y="40" font-size="20" fill="#005a70" font-weight="bold" text-anchor="middle">12,480</text>
            <text x="72" y="60" font-size="11" fill="#666" text-anchor="middle">properties</text>

            <rect x="145" y="10" width="125" height="60" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="207" y="40" font-size="20" fill="#005a70" font-weight="bold" text-anchor="middle">4.2 M</text>
            <text x="207" y="60" font-size="11" fill="#666" text-anchor="middle">tax due</text>

            <rect x="280" y="10" width="125" height="60" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="4" />
            <text x="342" y="40" font-size="20" fill="#2ecc71" font-weight="bold" text-anchor="middle">78%</text>
            <text x="342" y="60" font-size="11" fill="#666" text-anchor="middle">collected</text>

            <rect x="415" y="10" width="125" height="60" fill="#fff" stroke="#d9534f" stroke-width="2" rx="4" />
            <text x="477" y="40" font-size="20" fill="#d9534f" font-weight="bold" text-anchor="middle">22%</text>
            <text x="477" y="60" font-size="11" fill="#666" text-anchor="middle">arrears</text>

            <!-- Arrears by Ward Chart -->
            <rect x="10" y="90" width="180" height="200" fill="#fff" stroke="#ccc" stroke-width="1" rx="4" />
            <text x="100" y="110" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">Arrears by ward</text>
            
            <rect x="30" y="190" width="20" height="60" fill="#005a70" />
            <text x="40" y="265" font-size="10" fill="#666" text-anchor="middle">W1</text>
            
            <rect x="60" y="150" width="20" height="100" fill="#005a70" />
            <text x="70" y="265" font-size="10" fill="#666" text-anchor="middle">W2</text>
            
            <rect x="90" y="220" width="20" height="30" fill="#005a70" />
            <text x="100" y="265" font-size="10" fill="#666" text-anchor="middle">W3</text>
            
            <rect x="120" y="130" width="20" height="120" fill="#f07b24" />
            <text x="130" y="265" font-size="10" fill="#666" text-anchor="middle">W4</text>
            
            <rect x="150" y="180" width="20" height="70" fill="#005a70" />
            <text x="160" y="265" font-size="10" fill="#666" text-anchor="middle">W5</text>

            <!-- Map -->
            <rect x="200" y="90" width="160" height="200" fill="#fff" stroke="#ccc" stroke-width="1" rx="4" />
            <text x="280" y="110" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">Map</text>
            
            <rect x="220" y="130" width="70" height="60" fill="#f5b041" stroke="#333" stroke-width="1" />
            <rect x="300" y="130" width="40" height="60" fill="#d35400" stroke="#333" stroke-width="1" />
            <rect x="220" y="200" width="70" height="60" fill="#fdf0e0" stroke="#333" stroke-width="1" />
            <rect x="300" y="200" width="40" height="60" fill="#fdf0e0" stroke="#333" stroke-width="1" />

            <!-- Collection Donut Chart -->
            <rect x="370" y="90" width="170" height="200" fill="#fff" stroke="#ccc" stroke-width="1" rx="4" />
            <text x="455" y="110" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">Collection</text>
            
            <circle cx="455" cy="190" r="50" fill="#2ecc71" />
            <circle cx="455" cy="190" r="50" fill="none" stroke="#e0e0e0" stroke-width="20" />
            <path d="M 455 140 A 50 50 0 0 1 505 190 L 455 190 Z" fill="#e0e0e0" />
            <text x="455" y="195" font-size="16" fill="#333" font-weight="bold" text-anchor="middle">78%</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">one question per widget</div>
    </div>
</div>

<p>
    The diagram shows a dashboard layout. KPI cards show a few key numbers such as total properties or arrears. Charts use bars, lines and donuts for comparison and trend. The map shows where; clicking it can filter the charts. Filters for ward, date range and category update every part. Summarise data on the server to keep it fast. Each item should answer a real question; remove the rest.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What are KPI cards?</strong> A few key numbers such as total properties or arrears.</li>
    <li><strong>What charts should I use?</strong> Bars, lines and donuts for comparison and trend.</li>
    <li><strong>How does the map link to charts?</strong> Clicking the map can filter the charts.</li>
    <li><strong>What do filters do?</strong> Ward, date range and category update every part.</li>
    <li><strong>How do I keep it fast?</strong> Summarise data on the server.</li>
    <li><strong>What should I remove?</strong> Each item should answer a real question; remove the rest.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Put the most important number at the top left, where the eye starts.</p>
</div>