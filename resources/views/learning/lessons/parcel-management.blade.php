{{-- resources/views/learning/lessons/13-4-parcel-management.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Parcels change over time: they are split, merged or transferred. Parcel management keeps the map and the history correct.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand subdivision, merger and transfer</li>
    <li>Keep history of old parcels</li>
    <li>Link parent and child parcels</li>
</ul>

<h2>Visual Guide: Subdivision and merger</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Subdivision and merger</div>
        
        <svg viewBox="0 0 400 250" style="width: 100%; font-family: sans-serif;">
            <text x="200" y="20" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">SPLIT</text>
            <rect x="20" y="40" width="120" height="60" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="80" y="75" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">P3</text>
            
            <path d="M 160 70 L 190 70" stroke="#f07b24" stroke-width="2" />
            <polygon points="190,70 180,65 180,75" fill="#f07b24" />
            
            <rect x="210" y="40" width="60" height="60" fill="#e8f5e9" stroke="#005a70" stroke-width="2" />
            <text x="240" y="75" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">P3-A</text>
            <rect x="270" y="40" width="60" height="60" fill="#e3f2fd" stroke="#005a70" stroke-width="2" />
            <text x="300" y="75" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">P3-B</text>
            <line x1="270" y1="40" x2="270" y2="100" stroke="#d9534f" stroke-width="2" stroke-dasharray="4,2" />

            <text x="200" y="140" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">MERGE</text>
            <rect x="20" y="160" width="60" height="60" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="50" y="195" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">P1</text>
            <rect x="80" y="160" width="60" height="60" fill="#e8f5e9" stroke="#005a70" stroke-width="2" />
            <text x="110" y="195" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">P2</text>

            <path d="M 160 190 L 190 190" stroke="#f07b24" stroke-width="2" />
            <polygon points="190,190 180,185 180,195" fill="#f07b24" />

            <rect x="210" y="160" width="120" height="60" fill="#e3f2fd" stroke="#005a70" stroke-width="2" />
            <text x="270" y="195" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">P12</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">keep the old parcels as history</div>
    </div>
</div>

<p>
    The diagram shows subdivision and merger. Subdivision is when one parcel is split into two or more new parcels. Merger is when adjacent parcels are joined into one. Transfer is when ownership changes but the shape stays the same. Keep the old parcel as history with an end date and links to its children. A parent-child link records which new parcels came from which old one.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is subdivision?</strong> One parcel is split into two or more new parcels.</li>
    <li><strong>What is a merger?</strong> Adjacent parcels are joined into one.</li>
    <li><strong>What is a transfer?</strong> Ownership changes but the shape stays the same.</li>
    <li><strong>How do I keep history?</strong> Keep the old parcel with an end date and links to its children.</li>
    <li><strong>What is a parent-child link?</strong> It records which new parcels came from which old one.</li>
    <li><strong>What should I check after a split?</strong> The new areas should add up to the old area.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> After a split, the new areas should add up to the old area.</p>
</div>