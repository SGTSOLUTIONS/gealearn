{{-- resources/views/learning/lessons/13-17-revenue-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Revenue GIS maps taxes and fees due, paid and overdue, so that collection can be planned and tracked.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Map arrears by ward</li>
    <li>Find defaulters</li>
    <li>Protect payment data</li>
</ul>

<h2>Visual Guide: Arrears by ward</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Arrears by ward</div>
        
        <svg viewBox="0 0 400 220" style="width: 100%; font-family: sans-serif;">
            <polygon points="10,10 190,10 200,100 10,100" fill="#fdebd0" stroke="#005a70" stroke-width="2" />
            <text x="100" y="50" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">W3</text>
            <text x="100" y="70" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">6%</text>

            <polygon points="190,10 390,10 390,100 200,100" fill="#d35400" stroke="#005a70" stroke-width="2" />
            <text x="290" y="50" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">W4</text>
            <text x="290" y="70" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">44%</text>

            <polygon points="10,100 200,100 190,190 10,190" fill="#f5b041" stroke="#005a70" stroke-width="2" />
            <text x="100" y="140" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">W1</text>
            <text x="100" y="160" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">12%</text>

            <polygon points="200,100 390,100 390,190 190,190" fill="#e67e22" stroke="#005a70" stroke-width="2" />
            <text x="290" y="140" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">W2</text>
            <text x="290" y="160" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">31%</text>
            
            <rect x="60" y="205" width="20" height="10" fill="#fdebd0" />
            <rect x="80" y="205" width="20" height="10" fill="#f5b041" />
            <rect x="100" y="205" width="20" height="10" fill="#e67e22" />
            <rect x="120" y="205" width="20" height="10" fill="#d35400" />
            <text x="150" y="215" font-size="11" fill="#666">high arrears</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">map the money to act on it</div>
    </div>
</div>

<p>
    The diagram shows arrears by ward. Revenue GIS maps taxes and fees due, paid and overdue. Data includes parcels, tax records, payments and ward or zone layers. Find defaulters by joining payments to parcels and listing arrears. Field staff use a mobile map with property details and a collection route. Reports include due, paid and arrears by ward, and collection efficiency over time. Protect data with roles, an audit log and secure connections.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does revenue GIS map?</strong> Taxes and fees due, paid and overdue.</li>
    <li><strong>What data is needed?</strong> Parcels, tax records, payments and ward or zone layers.</li>
    <li><strong>How do I find defaulters?</strong> Join payments to parcels and list arrears.</li>
    <li><strong>How do field staff use it?</strong> With a mobile map with property details and a collection route.</li>
    <li><strong>What reports can I make?</strong> Due, paid and arrears by ward; collection efficiency over time.</li>
    <li><strong>How do I protect data?</strong> With roles, an audit log and secure connections.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Update payment data regularly: a revenue map is only as good as its latest payment.</p>
</div>