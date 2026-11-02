{{-- resources/views/learning/lessons/13-16-ward-and-zone-mapping.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Wards and zones divide a city into administrative and planning areas. Properties are assigned to them with spatial joins.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Assign properties to wards</li>
    <li>Handle parcels crossing boundaries</li>
    <li>Keep one official ward layer</li>
</ul>

<h2>Visual Guide: Wards and the properties inside</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Wards and the properties inside</div>
        
        <svg viewBox="0 0 400 200" style="width: 100%; font-family: sans-serif;">
            <polygon points="10,10 190,10 200,100 10,100" fill="#e3f2fd" stroke="#005a70" stroke-width="2" />
            <text x="100" y="60" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle">W3</text>
            <circle cx="50" cy="30" r="2" fill="#333" />
            <circle cx="90" cy="30" r="2" fill="#333" />
            <circle cx="130" cy="30" r="2" fill="#333" />
            <circle cx="60" cy="70" r="2" fill="#333" />
            <circle cx="100" cy="70" r="2" fill="#333" />
            <circle cx="140" cy="70" r="2" fill="#333" />

            <polygon points="190,10 390,10 390,100 200,100" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="290" y="60" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle">W4</text>
            <circle cx="230" cy="30" r="2" fill="#333" />
            <circle cx="270" cy="30" r="2" fill="#333" />
            <circle cx="310" cy="30" r="2" fill="#333" />
            <circle cx="240" cy="70" r="2" fill="#333" />
            <circle cx="280" cy="70" r="2" fill="#333" />
            <circle cx="320" cy="70" r="2" fill="#333" />

            <polygon points="10,100 200,100 190,190 10,190" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="100" y="150" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle">W1</text>
            <circle cx="50" cy="120" r="2" fill="#333" />
            <circle cx="90" cy="120" r="2" fill="#333" />
            <circle cx="130" cy="120" r="2" fill="#333" />
            <circle cx="60" cy="160" r="2" fill="#333" />
            <circle cx="100" cy="160" r="2" fill="#333" />
            <circle cx="140" cy="160" r="2" fill="#333" />

            <polygon points="200,100 390,100 390,190 190,190" fill="#e8f5e9" stroke="#005a70" stroke-width="2" />
            <text x="290" y="150" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle">W2</text>
            <circle cx="240" cy="120" r="2" fill="#333" />
            <circle cx="280" cy="120" r="2" fill="#333" />
            <circle cx="320" cy="120" r="2" fill="#333" />
            <circle cx="250" cy="160" r="2" fill="#333" />
            <circle cx="290" cy="160" r="2" fill="#333" />
            <circle cx="330" cy="160" r="2" fill="#333" />
        </svg>
    </div>
</div>

<p>
    The diagram shows wards and the properties inside. A ward is an administrative area; a zone has its own planning or tax rules. Assign properties with Join attributes by location. A parcel that crosses a ward line: use its inside point or the largest overlap. Wards must have no overlaps and no gaps and follow the legal boundary. Show results with a graduated map or a summary table per ward.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a ward?</strong> An administrative area.</li>
    <li><strong>What is a zone?</strong> An area with its own planning or tax rules.</li>
    <li><strong>How do I assign properties?</strong> Use Join attributes by location.</li>
    <li><strong>What about parcels crossing a ward line?</strong> Use the inside point or the largest overlap.</li>
    <li><strong>What must wards have?</strong> No overlaps and no gaps, following the legal boundary.</li>
    <li><strong>How do I show results?</strong> With a graduated map or a summary table per ward.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep one official ward layer and make every project use it.</p>
</div>