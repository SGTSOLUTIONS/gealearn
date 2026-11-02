{{-- resources/views/learning/lessons/14-13-report-generation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Reports turn project data into printable summaries with maps, tables and charts.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create report templates</li>
    <li>Use parameters for ward, date or property</li>
    <li>Export to PDF, Excel, or CSV</li>
</ul>

<h2>Visual Guide: From data to a printable report</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 20px 10px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 20px; font-size: 14px;">From data to a printable report</div>
        
        <svg viewBox="0 0 650 320" style="width: 100%;">
            
            <!-- ================= LEFT SIDE: INPUTS ================= -->
            
            <!-- Query Box -->
            <rect x="20" y="50" width="120" height="40" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="80" y="75" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Query</text>
            <!-- Arrow -->
            <path d="M 140 70 L 190 70" stroke="#f07b24" stroke-width="2" />
            <polygon points="190,70 180,65 180,75" fill="#f07b24" />

            <!-- Map Image Box -->
            <rect x="20" y="125" width="120" height="40" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="80" y="150" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Map image</text>
            <!-- Arrow -->
            <path d="M 140 145 L 190 145" stroke="#f07b24" stroke-width="2" />
            <polygon points="190,145 180,140 180,150" fill="#f07b24" />

            <!-- Template Box -->
            <rect x="20" y="200" width="120" height="40" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="80" y="225" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Template</text>
            <!-- Arrow -->
            <path d="M 140 220 L 190 220" stroke="#f07b24" stroke-width="2" />
            <polygon points="190,220 180,215 180,225" fill="#f07b24" />

            <!-- ================= RIGHT SIDE: REPORT LAYOUT ================= -->
            
            <!-- Main Report Frame -->
            <rect x="200" y="20" width="420" height="250" fill="#fff" stroke="#666" stroke-width="1.5" />
            
            <!-- Header -->
            <rect x="200" y="20" width="420" height="35" fill="#005a70" />
            <text x="410" y="43" font-size="15" fill="#fff" font-weight="bold" text-anchor="middle">Ward report</text>

            <!-- Map Area (Inner Box) -->
            <rect x="215" y="65" width="390" height="75" fill="#fdf8f4" stroke="#005a70" stroke-width="1" />
            
            <!-- Map Sectors -->
            <rect x="225" y="75" width="70" height="55" fill="#f4d03f" stroke="#666" stroke-width="1" />
            <rect x="300" y="75" width="70" height="55" fill="#d5f4d5" stroke="#666" stroke-width="1" />
            <rect x="375" y="75" width="70" height="55" fill="#e3f2fd" stroke="#666" stroke-width="1" />

            <!-- Table Grid -->
            <g stroke="#a5c9d6" stroke-width="1">
                <!-- Horizontal lines -->
                <line x1="215" y1="155" x2="605" y2="155" />
                <line x1="215" y1="170" x2="605" y2="170" />
                <line x1="215" y1="185" x2="605" y2="185" />
                <line x1="215" y1="200" x2="605" y2="200" />
                <!-- Vertical lines -->
                <line x1="280" y1="155" x2="280" y2="200" />
                <line x1="360" y1="155" x2="360" y2="200" />
                <line x1="440" y1="155" x2="440" y2="200" />
            </g>

            <!-- Chart Bars -->
            <g>
                <rect x="225" y="235" width="15" height="25" fill="#005a70" />
                <rect x="250" y="220" width="15" height="40" fill="#f07b24" />
                <rect x="275" y="245" width="15" height="15" fill="#005a70" />
                <rect x="300" y="225" width="15" height="35" fill="#f07b24" />
                <rect x="325" y="215" width="15" height="45" fill="#005a70" />
                <rect x="350" y="250" width="15" height="10" fill="#f07b24" />
            </g>

            <!-- PDF Button -->
            <rect x="510" y="230" width="50" height="25" fill="#d9534f" rx="4" />
            <text x="535" y="247" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">PDF</text>

            <!-- Footer Text -->
            <text x="410" y="280" font-size="11" fill="#666" text-anchor="middle">source · date · user</text>
        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 15px;">same template, every ward</div>
    </div>
</div>

<p>
    The diagram shows the path from data to a printable report. Templates are a fixed layout with title, map, table, chart and footer. Parameters like ward, date or property are chosen by the user. Map images can be exported from the layout or from a map server. Formats include PDF for sharing, Excel or CSV for further work. Every number should come from the database, not be typed by hand.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What are templates?</strong> A fixed layout with title, map, table, chart and footer.</li>
    <li><strong>What are parameters?</strong> Ward, date or property chosen by the user.</li>
    <li><strong>Where do map images come from?</strong> Exported from the layout or from the map server.</li>
    <li><strong>What formats are used?</strong> PDF for sharing, Excel or CSV for further work.</li>
    <li><strong>How do I ensure accuracy?</strong> Every number should come from the database, not be typed by hand.</li>
    <li><strong>What should each report include?</strong> Date, user and data source.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Start with the three reports users ask for most and polish those.</p>
</div>