{{-- resources/views/learning/lessons/13-11-property-identification.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Every property needs one unique, permanent ID so that the map, the tax roll and the field staff all refer to the same thing.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how to build a property ID</li>
    <li>Use QR codes for field links</li>
    <li>Handle IDs when parcels split</li>
</ul>

<h2>Visual Guide: One ID on the map and on site</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">One ID on the map and on site</div>
        
        <svg viewBox="0 0 400 220" style="width: 100%; font-family: sans-serif;">
            <!-- Building -->
            <rect x="20" y="20" width="160" height="160" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <polygon points="50,80 100,40 150,80" fill="#e8a5a5" stroke="#333" stroke-width="1" />
            <rect x="60" y="80" width="80" height="100" fill="#fff" stroke="#333" stroke-width="1" />
            <rect x="90" y="130" width="20" height="50" fill="#a57c5a" />
            
            <!-- QR Code -->
            <rect x="130" y="80" width="40" height="40" fill="#fff" stroke="#333" stroke-width="2" />
            <rect x="135" y="85" width="5" height="5" fill="#333" />
            <rect x="145" y="85" width="5" height="5" fill="#333" />
            <rect x="155" y="85" width="5" height="5" fill="#333" />
            <rect x="135" y="95" width="5" height="5" fill="#333" />
            <rect x="155" y="95" width="5" height="5" fill="#333" />
            <rect x="135" y="105" width="5" height="5" fill="#333" />
            <rect x="145" y="105" width="5" height="5" fill="#333" />
            <rect x="155" y="105" width="5" height="5" fill="#333" />

            <!-- ID Text -->
            <text x="100" y="205" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">12-03-0045</text>

            <!-- Fields -->
            <rect x="250" y="20" width="130" height="35" fill="#fff" stroke="#ccc" stroke-width="1" rx="4" />
            <text x="260" y="42" font-size="12" fill="#666">Ward</text>
            <text x="370" y="42" font-size="14" fill="#005a70" font-weight="bold" text-anchor="end">12</text>

            <rect x="250" y="65" width="130" height="35" fill="#fff" stroke="#ccc" stroke-width="1" rx="4" />
            <text x="260" y="87" font-size="12" fill="#666">Block</text>
            <text x="370" y="87" font-size="14" fill="#005a70" font-weight="bold" text-anchor="end">03</text>

            <rect x="250" y="110" width="130" height="35" fill="#fff" stroke="#ccc" stroke-width="1" rx="4" />
            <text x="260" y="132" font-size="12" fill="#666">Sequence</text>
            <text x="370" y="132" font-size="14" fill="#005a70" font-weight="bold" text-anchor="end">0045</text>

            <!-- Arrow down -->
            <line x1="315" y1="155" x2="315" y2="175" stroke="#f07b24" stroke-width="2" />
            <polygon points="315,175 310,165 320,165" fill="#f07b24" />

            <!-- Final ID -->
            <rect x="250" y="180" width="130" height="35" fill="#005a70" rx="4" />
            <text x="315" y="203" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">12-03-0045</text>
        </svg>
    </div>
</div>

<p>
    The diagram shows one ID on the map and on site. A property ID is a unique, permanent code for one property. Build it from ward, block and sequence, e.g. 12-03-0045. Do not base it on the owner's name: ownership changes, the ID should not. Also use door number, address and GPS location to find a property. A QR plate on the building links the field to its record. If a parcel is split, create new IDs and keep the old one in the history.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a property ID?</strong> A unique, permanent code for one property.</li>
    <li><strong>How do I build it?</strong> Build it from ward, block and sequence, e.g. 12-03-0045.</li>
    <li><strong>Should I use the owner's name?</strong> No. Ownership changes, the ID should not.</li>
    <li><strong>What else helps find a property?</strong> Door number, address and GPS location.</li>
    <li><strong>What is a QR plate?</strong> A QR plate on the building links the field to its record.</li>
    <li><strong>What if a parcel splits?</strong> Create new IDs and keep the old one in the history.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Never reuse a retired ID.</p>
</div>