{{-- resources/views/learning/lessons/16-15-property-tax-system.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The system measures every property, applies the tax rate and shows what is due and what has been paid.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Calculate taxable area and tax due</li>
    <li>Link payments to properties</li>
    <li>Map arrears and missing records</li>
</ul>

<h2>Visual Guide: From parcel to tax bill</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 20px 10px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 15px; font-size: 14px;">From parcel to tax bill</div>
        
        <svg viewBox="0 0 650 320" style="width: 100%;">
            
            <!-- Left Section: Parcels + Buildings -->
            <rect x="20" y="40" width="160" height="220" fill="#fff" stroke="#005a70" stroke-width="2" />
            <text x="100" y="30" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">parcels + buildings</text>
            
            <!-- Top Left -->
            <rect x="30" y="50" width="70" height="90" fill="#f4b4b4" stroke="#333" stroke-width="1" />
            <rect x="50" y="70" width="30" height="30" fill="#999" stroke="#333" stroke-width="1" />
            
            <!-- Top Right -->
            <rect x="100" y="50" width="70" height="90" fill="#f4b4b4" stroke="#333" stroke-width="1" />
            <rect x="120" y="70" width="30" height="30" fill="#999" stroke="#333" stroke-width="1" />

            <!-- Bottom Left -->
            <rect x="30" y="150" width="70" height="90" fill="#fdf0e0" stroke="#333" stroke-width="1" />
            <rect x="50" y="170" width="30" height="30" fill="#999" stroke="#333" stroke-width="1" />

            <!-- Bottom Right -->
            <rect x="100" y="150" width="70" height="90" fill="#d5f4d5" stroke="#333" stroke-width="1" />
            <rect x="120" y="170" width="30" height="30" fill="#999" stroke="#333" stroke-width="1" />

            <!-- Arrow 1 -->
            <path d="M 180 160 L 220 160" stroke="#f07b24" stroke-width="2" />
            <polygon points="220,160 210,155 210,165" fill="#f07b24" />

            <!-- Middle Section: Tax Calculation -->
            <rect x="230" y="50" width="160" height="200" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <rect x="230" y="50" width="160" height="35" fill="#005a70" rx="6" />
            <text x="310" y="73" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">Tax calculation</text>

            <text x="245" y="115" font-size="13" fill="#333">Area</text>
            <text x="375" y="115" font-size="14" fill="#005a70" font-weight="bold" text-anchor="end">450 m2</text>
            <line x1="240" y1="130" x2="380" y2="130" stroke="#eee" stroke-width="2" />

            <text x="245" y="155" font-size="13" fill="#333">x Zone rate</text>
            <text x="375" y="155" font-size="14" fill="#005a70" font-weight="bold" text-anchor="end">10</text>
            <line x1="240" y1="170" x2="380" y2="170" stroke="#eee" stroke-width="2" />

            <text x="245" y="200" font-size="13" fill="#333">= Tax due</text>
            <text x="375" y="200" font-size="16" fill="#d9534f" font-weight="bold" text-anchor="end">4,500</text>
            <line x1="240" y1="215" x2="380" y2="215" stroke="#eee" stroke-width="2" />

            <!-- Arrow 2 -->
            <path d="M 390 160 L 430 160" stroke="#f07b24" stroke-width="2" />
            <polygon points="430,160 420,155 420,165" fill="#f07b24" />

            <!-- Right Section: Tax Bill -->
            <rect x="440" y="30" width="180" height="240" fill="#fff" stroke="#333" stroke-width="1.5" />
            <rect x="440" y="30" width="180" height="40" fill="#f07b24" />
            <text x="530" y="55" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">Tax bill</text>

            <line x1="460" y1="100" x2="600" y2="100" stroke="#ccc" stroke-width="2" />
            <line x1="460" y1="125" x2="600" y2="125" stroke="#ccc" stroke-width="2" />
            <line x1="460" y1="150" x2="600" y2="150" stroke="#ccc" stroke-width="2" />
            <line x1="460" y1="175" x2="600" y2="175" stroke="#ccc" stroke-width="2" />

            <!-- DUE Stamp -->
            <rect x="485" y="200" width="100" height="40" fill="#fff" stroke="#d9534f" stroke-width="3" rx="4" transform="rotate(-10 535 220)" />
            <text x="535" y="227" font-size="18" fill="#d9534f" font-weight="bold" text-anchor="middle" transform="rotate(-10 535 220)">DUE</text>

            <!-- Bottom Text -->
            <text x="325" y="305" font-size="12" fill="#d9534f" font-weight="bold" text-anchor="middle">area x rate = tax due</text>
        </svg>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Prepare parcels, building footprints, zones and a rate table.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Join buildings to parcels and parcels to zones with spatial joins.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Calculate the taxable area and the tax due (area x zone rate, following the local rules).</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Link payments by property ID to get paid and arrears.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Map the arrears by ward and list the buildings that have no tax record.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Produce a bill for each property and a summary for each ward.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Check the calculation by hand on a few properties before running the whole city.</p>
</div>