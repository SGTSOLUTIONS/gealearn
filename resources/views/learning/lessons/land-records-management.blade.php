{{-- resources/views/learning/lessons/13-5-land-records-management.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Land records hold the non-spatial facts about each parcel: owner, area, use, rights and transfers. GIS links them to the map.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand non-spatial land records</li>
    <li>Link records to parcels</li>
    <li>Protect privacy and keep history</li>
</ul>

<h2>Visual Guide: A parcel linked to its land record</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">A parcel linked to its land record</div>
        
        <svg viewBox="0 0 400 200" style="width: 100%; font-family: sans-serif;">
            <rect x="20" y="20" width="120" height="120" fill="#fdf0e0" stroke="#005a70" stroke-width="2" transform="rotate(-5 80 80)" />
            <text x="80" y="90" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle" transform="rotate(-5 80 80)">P101</text>
            
            <line x1="150" y1="90" x2="230" y2="90" stroke="#f07b24" stroke-width="2" stroke-dasharray="6,4" />
            <circle cx="230" cy="90" r="4" fill="#f07b24" />
            <text x="160" y="80" font-size="12" fill="#f07b24">parcel_id</text>

            <rect x="250" y="20" width="130" height="140" fill="#fff" stroke="#ccc" stroke-width="1" />
            <rect x="250" y="20" width="130" height="25" fill="#005a70" />
            <text x="315" y="37" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">LAND RECORD</text>
            
            <text x="260" y="65" font-size="10" fill="#333">Parcel: <tspan font-weight="bold">P101</tspan></text>
            <text x="260" y="85" font-size="10" fill="#333">Owner: <tspan font-weight="bold">R. Kumar</tspan></text>
            <text x="260" y="105" font-size="10" fill="#333">Area: <tspan font-weight="bold">450 m&sup2;</tspan></text>
            <text x="260" y="125" font-size="10" fill="#333">Use: <tspan font-weight="bold">Residential</tspan></text>
            <text x="260" y="145" font-size="10" fill="#333">Valid: <tspan font-weight="bold">2024-01-10</tspan></text>
        </svg>
    </div>
</div>

<p>
    The diagram shows a parcel linked to its land record. Land records are tables of owner, area, use, rights and transfer history. The parcel ID joins each record to its polygon on the map. A mutation is the official update when ownership changes. An encumbrance is a claim on the land, such as a mortgage. Keep history with valid-from and valid-to dates instead of overwriting. Protect privacy: limit who sees owner details and log every change.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What are land records?</strong> Tables of owner, area, use, rights and transfer history.</li>
    <li><strong>How are they linked to the map?</strong> The parcel ID joins each record to its polygon on the map.</li>
    <li><strong>What is a mutation?</strong> The official update when ownership changes (the term varies by region).</li>
    <li><strong>What is an encumbrance?</strong> A claim on the land, such as a mortgage.</li>
    <li><strong>How do I keep history?</strong> Use valid-from and valid-to dates instead of overwriting.</li>
    <li><strong>How do I protect privacy?</strong> Limit who sees owner details and log every change.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep an audit log: who changed which record, and when.</p>
</div>