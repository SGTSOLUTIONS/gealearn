{{-- resources/views/learning/lessons/16-7-perform-spatial-joins.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Join attributes by location copies attributes from one layer to another using their position.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Join point attributes to polygons</li>
    <li>Count features per polygon</li>
    <li>Check results after the join</li>
</ul>

<h2>Visual Guide: Schools counted per ward</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">Schools counted per ward</div>
        
        <svg viewBox="0 0 600 300" style="width: 100%;">
            <!-- Wards -->
            <rect x="20" y="20" width="160" height="240" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="100" y="50" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle">W1</text>
            
            <rect x="180" y="20" width="160" height="240" fill="#e8f5e9" stroke="#005a70" stroke-width="2" />
            <text x="260" y="50" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle">W2</text>

            <!-- Schools (Points) -->
            <circle cx="60" cy="100" r="5" fill="#d9534f" />
            <circle cx="120" cy="160" r="5" fill="#d9534f" />
            <circle cx="80" cy="220" r="5" fill="#d9534f" />

            <circle cx="240" cy="120" r="5" fill="#d9534f" />
            <circle cx="290" cy="200" r="5" fill="#d9534f" />

            <!-- Arrow -->
            <path d="M 360 140 L 400 140" stroke="#f07b24" stroke-width="3" />
            <polygon points="400,140 390,135 390,145" fill="#f07b24" />
            <text x="380" y="130" font-size="12" fill="#f07b24" font-weight="bold" text-anchor="middle">join</text>

            <!-- Table Result -->
            <rect x="420" y="60" width="160" height="140" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <rect x="420" y="60" width="160" height="35" fill="#005a70" rx="4" />
            <text x="460" y="82" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">ward</text>
            <text x="540" y="82" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">schools</text>

            <text x="460" y="125" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">W1</text>
            <text x="540" y="125" font-size="14" fill="#d9534f" font-weight="bold" text-anchor="middle">3</text>
            <line x1="420" y1="140" x2="580" y2="140" stroke="#eee" />

            <text x="460" y="175" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">W2</text>
            <text x="540" y="175" font-size="14" fill="#d9534f" font-weight="bold" text-anchor="middle">2</text>
            
            <text x="500" y="230" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">schools per ward</text>
        </svg>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Load the points (schools) and the polygons (wards) in the same CRS.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Open <strong>Vector > Data Management Tools > Join Attributes by Location</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Base layer = <strong>schools</strong>, join layer = <strong>wards</strong>, geometric predicate = <strong>intersect</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Choose the ward fields to copy, then run the tool.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Open the result's attribute table: every school now carries its ward name.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>To count schools per ward, run <strong>Join Attributes by Location (Summary)</strong> on the wards layer.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Compare feature counts before and after the join: a lost or doubled feature means a problem.</p>
</div>