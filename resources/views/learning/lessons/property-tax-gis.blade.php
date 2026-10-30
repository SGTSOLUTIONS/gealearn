{{-- resources/views/learning/lessons/13-14-property-tax-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GIS finds every taxable property, links it to its tax record and shows who has paid.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Link tax records to properties</li>
    <li>Find missed properties</li>
    <li>Report tax due and paid</li>
</ul>

<h2>Visual Guide: Tax zones and a missed building</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Tax zones and a missed building</div>
        
        <svg viewBox="0 0 400 200" style="width: 100%; font-family: sans-serif;">
            <rect x="10" y="10" width="120" height="80" fill="#e8a5a5" stroke="#005a70" stroke-width="2" />
            <text x="20" y="30" font-size="12" fill="#005a70" font-weight="bold">A</text>
            <rect x="50" y="40" width="30" height="30" fill="#999" stroke="#333" stroke-width="1" />
            
            <rect x="140" y="10" width="120" height="80" fill="#e8a5a5" stroke="#005a70" stroke-width="2" />
            <text x="150" y="30" font-size="12" fill="#005a70" font-weight="bold">A</text>
            <rect x="180" y="40" width="30" height="30" fill="#999" stroke="#333" stroke-width="1" />

            <rect x="270" y="10" width="120" height="80" fill="#f4d03f" stroke="#005a70" stroke-width="2" />
            <text x="280" y="30" font-size="12" fill="#005a70" font-weight="bold">B</text>
            <rect x="310" y="40" width="30" height="30" fill="#999" stroke="#333" stroke-width="1" />

            <rect x="10" y="100" width="120" height="80" fill="#f4d03f" stroke="#005a70" stroke-width="2" />
            <text x="20" y="120" font-size="12" fill="#005a70" font-weight="bold">B</text>
            <rect x="50" y="130" width="30" height="30" fill="#999" stroke="#333" stroke-width="1" />

            <rect x="140" y="100" width="120" height="80" fill="#d5f4d5" stroke="#005a70" stroke-width="2" />
            <text x="150" y="120" font-size="12" fill="#005a70" font-weight="bold">C</text>
            <rect x="180" y="130" width="30" height="30" fill="#999" stroke="#333" stroke-width="1" />

            <rect x="270" y="100" width="120" height="80" fill="#d5f4d5" stroke="#005a70" stroke-width="2" />
            <text x="280" y="120" font-size="12" fill="#005a70" font-weight="bold">C</text>
            <rect x="310" y="130" width="30" height="30" fill="#999" stroke="#333" stroke-width="1" />
            
            <rect x="310" y="130" width="30" height="30" fill="none" stroke="#d9534f" stroke-width="3" />
            <text x="345" y="145" font-size="10" fill="#d9534f" font-weight="bold">not on</text>
            <text x="345" y="157" font-size="10" fill="#d9534f" font-weight="bold">tax roll</text>

            <text x="200" y="200" font-size="11" fill="#005a70" font-weight="bold" text-anchor="middle">Zone A = high rate</text>
            <text x="100" y="200" font-size="11" fill="#005a70" font-weight="bold" text-anchor="middle">B = medium</text>
            <text x="330" y="200" font-size="11" fill="#005a70" font-weight="bold" text-anchor="middle">C = low</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">the map finds unbilled properties</div>
    </div>
</div>

<p>
    The diagram shows tax zones and a missed building. GIS finds every taxable property and links it to its tax record. Zone and land use decide the rate, following the local rules. Compare buildings on the map with the tax roll to find missed properties. Data needed: parcels, buildings, land use, zones, rates and tax records. The map supports the tax rules; it does not replace them.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does GIS do for tax?</strong> Finds every taxable property and links it to its tax record.</li>
    <li><strong>What decides the tax rate?</strong> Zone and land use decide the rate, following the local rules.</li>
    <li><strong>How do I find missed properties?</strong> Compare buildings on the map with the tax roll.</li>
    <li><strong>What data is needed?</strong> Parcels, buildings, land use, zones, rates and tax records.</li>
    <li><strong>What reports can I make?</strong> Number of properties, tax due, tax paid and arrears by ward.</li>
    <li><strong>Does GIS replace the tax rules?</strong> The map supports the tax rules; it does not replace them.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Always check against the local tax rules; the map supports them but does not replace them.</p>
</div>