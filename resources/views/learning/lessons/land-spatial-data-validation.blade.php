{{-- resources/views/learning/lessons/13-18-spatial-data-validation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Validation finds errors in geometry and attributes before the data is used or published.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify typical spatial errors</li>
    <li>Use QGIS validation tools</li>
    <li>Automate validation</li>
</ul>

<h2>Visual Guide: Typical spatial errors</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Typical spatial errors</div>
        
        <svg viewBox="0 0 450 220" style="width: 100%; font-family: sans-serif;">
            <rect x="10" y="10" width="130" height="160" fill="#fff" stroke="#ccc" stroke-width="1" rx="4" />
            <text x="75" y="35" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">overlap</text>
            <rect x="25" y="55" width="60" height="60" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <rect x="55" y="85" width="60" height="60" fill="#e8f5e9" stroke="#005a70" stroke-width="2" />
            <rect x="55" y="85" width="30" height="30" fill="#d9534f" opacity="0.6" />
            <text x="75" y="190" font-size="11" fill="#d9534f" font-weight="bold" text-anchor="middle">shared area</text>

            <rect x="160" y="10" width="130" height="160" fill="#fff" stroke="#ccc" stroke-width="1" rx="4" />
            <text x="225" y="35" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">gap</text>
            <rect x="175" y="70" width="40" height="60" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <rect x="215" y="70" width="10" height="60" fill="#f4d03f" stroke="#f4d03f" stroke-width="1" />
            <rect x="225" y="70" width="40" height="60" fill="#e8f5e9" stroke="#005a70" stroke-width="2" />
            <text x="225" y="190" font-size="11" fill="#d9534f" font-weight="bold" text-anchor="middle">sliver</text>

            <rect x="310" y="10" width="130" height="160" fill="#fff" stroke="#ccc" stroke-width="1" rx="4" />
            <text x="375" y="35" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">self-crossing</text>
            <polygon points="315,70 365,130 415,70 365,130 315,130 415,70" fill="#e3f2fd" stroke="#005a70" stroke-width="2" />
            <circle cx="365" cy="100" r="4" fill="#d9534f" />
            <text x="375" y="190" font-size="11" fill="#d9534f" font-weight="bold" text-anchor="middle">ST_IsValid = false</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">errors to find and fix before publishing</div>
    </div>
</div>

<p>
    The diagram shows typical spatial errors. Geometry checks find invalid shapes such as self-crossing rings. Topology checks find overlaps and gaps between neighbouring parcels. Attribute checks include unique IDs, no blank owners, and allowed land-use codes. Area check: calculated area close to the recorded area. In QGIS use Check validity and Fix geometries, then the Topology Checker.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What do geometry checks find?</strong> Invalid shapes such as self-crossing rings.</li>
    <li><strong>What do topology checks find?</strong> Overlaps and gaps between neighbouring parcels.</li>
    <li><strong>What do attribute checks find?</strong> Unique IDs, no blank owners, and allowed land-use codes.</li>
    <li><strong>What is an area check?</strong> Calculated area close to the recorded area.</li>
    <li><strong>Which QGIS tools help?</strong> Check validity, Fix geometries, and Topology Checker.</li>
    <li><strong>When should I validate?</strong> On entry, after editing and before every release.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Automate the checks in a script and run them after every edit.</p>
</div>