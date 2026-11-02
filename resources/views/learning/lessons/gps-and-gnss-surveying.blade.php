{{-- resources/views/learning/lessons/13-7-gps-and-gnss-surveying.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GNSS receivers use satellites to find positions. Survey-grade methods reach centimetre accuracy.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand GNSS and RTK</li>
    <li>Know the difference between FIXED and FLOAT</li>
    <li>Understand HDOP</li>
</ul>

<h2>Visual Guide: RTK - base, rover and satellites</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">RTK: base, rover and satellites</div>
        
        <svg viewBox="0 0 450 250" style="width: 100%; font-family: sans-serif;">
            <!-- Top Satellite -->
            <rect x="170" y="20" width="30" height="15" fill="#005a70" />
            <rect x="150" y="30" width="70" height="10" fill="#3b8dbd" />
            <text x="185" y="65" font-size="11" fill="#666" text-anchor="middle" font-style="italic">GNSS satellites</text>
            
            <!-- Left Satellite -->
            <rect x="40" y="60" width="30" height="15" fill="#005a70" />
            <rect x="20" y="70" width="70" height="10" fill="#3b8dbd" />
            
            <!-- Right Satellite -->
            <rect x="340" y="60" width="30" height="15" fill="#005a70" />
            <rect x="320" y="70" width="70" height="10" fill="#3b8dbd" />
            
            <!-- Signal Lines -->
            <line x1="185" y1="40" x2="80" y2="170" stroke="#999" stroke-width="1" stroke-dasharray="4,4" />
            <line x1="185" y1="40" x2="380" y2="170" stroke="#999" stroke-width="1" stroke-dasharray="4,4" />
            
            <!-- RTK Correction Arc -->
            <path d="M 80 170 Q 230 100 380 170" fill="none" stroke="#f07b24" stroke-width="3" stroke-dasharray="6,4" />
            <text x="230" y="120" font-size="12" fill="#f07b24" font-weight="bold" text-anchor="middle">RTK correction</text>
            <text x="405" y="160" font-size="12" fill="#005a70" font-weight="bold">1 to 3 cm</text>
            
            <!-- Base Station -->
            <line x1="80" y1="170" x2="80" y2="210" stroke="#333" stroke-width="4" />
            <circle cx="80" cy="170" r="7" fill="#005a70" />
            
            <!-- Rover -->
            <line x1="380" y1="170" x2="380" y2="210" stroke="#333" stroke-width="4" />
            <rect x="370" y="163" width="20" height="14" fill="#005a70" />
            
            <!-- Ground Labels -->
            <rect x="10" y="210" width="420" height="30" fill="#e8f5e9" />
            <text x="80" y="230" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Base / CORS</text>
            <text x="380" y="230" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Rover</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">use RTK or PPK for boundaries</div>
    </div>
</div>

<p>
    The diagram shows RTK surveying. GNSS includes GPS, GLONASS, Galileo, BeiDou and NavIC satellite systems. RTK uses real-time corrections from a base or CORS to give 1 to 3 cm accuracy. CORS is a network of permanent reference stations that broadcast corrections. FIXED is the best solution; FLOAT is less accurate. HDOP is satellite geometry; lower is better and below 2 is good. A phone or handheld GPS is only accurate to a few metres: not for boundaries.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is GNSS?</strong> GPS, GLONASS, Galileo, BeiDou and NavIC satellite systems.</li>
    <li><strong>What is RTK?</strong> Real-time corrections from a base or CORS give 1 to 3 cm accuracy.</li>
    <li><strong>What is CORS?</strong> A network of permanent reference stations that broadcast corrections.</li>
    <li><strong>FIXED vs FLOAT?</strong> Fixed is the best solution; float is less accurate.</li>
    <li><strong>What is HDOP?</strong> Satellite geometry; lower is better and below 2 is good.</li>
    <li><strong>Can I use a phone?</strong> A phone or handheld GPS is only accurate to a few metres: not for boundaries.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Only accept FIXED solutions with good HDOP for boundary points.</p>
</div>