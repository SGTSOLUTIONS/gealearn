{{-- resources/views/learning/lessons/14-12-map-layer-management.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Layer management lets administrators and users control which layers exist, how they look and who may see them.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Manage layer order and visibility</li>
    <li>Apply styling and permissions</li>
    <li>Use opacity and legends</li>
</ul>

<h2>Visual Guide: Layer panel and draw order</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 550px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Layer panel and draw order</div>
        
        <svg viewBox="0 0 550 280" style="width: 100%; font-family: sans-serif;">
            <!-- Layer Panel -->
            <rect x="10" y="10" width="180" height="250" fill="#fff" stroke="#ccc" stroke-width="1" rx="6" />
            <rect x="10" y="10" width="180" height="35" fill="#005a70" rx="6" />
            <text x="100" y="32" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">Layers</text>

            <!-- Layer Group -->
            <text x="20" y="70" font-size="12" fill="#666" font-weight="bold">v Base data (group)</text>

            <!-- Hospitals -->
            <circle cx="35" cy="95" r="6" fill="#fff" stroke="#005a70" stroke-width="2" />
            <circle cx="35" cy="95" r="2" fill="#005a70" />
            <text x="55" y="99" font-size="12" fill="#333">Hospitals</text>
            <line x1="160" y1="95" x2="170" y2="95" stroke="#666" stroke-width="2" />
            <line x1="160" y1="90" x2="170" y2="90" stroke="#666" stroke-width="2" />
            <line x1="160" y1="100" x2="170" y2="100" stroke="#666" stroke-width="2" />

            <!-- Roads (Selected) -->
            <rect x="10" y="110" width="180" height="25" fill="#e8f5e9" />
            <circle cx="35" cy="123" r="6" fill="#fff" stroke="#005a70" stroke-width="2" />
            <circle cx="35" cy="123" r="2" fill="#005a70" />
            <text x="55" y="127" font-size="12" fill="#333" font-weight="bold">Roads</text>
            <line x1="160" y1="123" x2="170" y2="123" stroke="#666" stroke-width="2" />
            <line x1="160" y1="118" x2="170" y2="118" stroke="#666" stroke-width="2" />
            <line x1="160" y1="128" x2="170" y2="128" stroke="#666" stroke-width="2" />

            <!-- Wards -->
            <circle cx="35" cy="153" r="6" fill="#fff" stroke="#005a70" stroke-width="2" />
            <circle cx="35" cy="153" r="2" fill="#005a70" />
            <text x="55" y="157" font-size="12" fill="#333">Wards</text>
            <line x1="160" y1="153" x2="170" y2="153" stroke="#666" stroke-width="2" />
            <line x1="160" y1="148" x2="170" y2="148" stroke="#666" stroke-width="2" />
            <line x1="160" y1="158" x2="170" y2="158" stroke="#666" stroke-width="2" />

            <!-- Satellite -->
            <circle cx="35" cy="183" r="6" fill="#fff" stroke="#005a70" stroke-width="2" />
            <circle cx="35" cy="183" r="2" fill="#005a70" />
            <text x="55" y="187" font-size="12" fill="#333">Satellite</text>
            <rect x="160" y="176" width="12" height="12" fill="#666" />
            <line x1="180" y1="183" x2="170" y2="183" stroke="#666" stroke-width="2" />

            <!-- Opacity Slider -->
            <text x="25" y="220" font-size="11" fill="#666">Opacity</text>
            <line x1="80" y1="217" x2="170" y2="217" stroke="#ccc" stroke-width="4" stroke-linecap="round" />
            <line x1="80" y1="217" x2="150" y2="217" stroke="#f07b24" stroke-width="4" stroke-linecap="round" />
            <circle cx="150" cy="217" r="6" fill="#f07b24" />
            <text x="155" y="240" font-size="11" fill="#f07b24" font-weight="bold">70%</text>

            <!-- Map Layers Stack -->
            <text x="400" y="30" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">Hospitals</text>
            <polygon points="300,50 500,50 520,70 320,70" fill="#f9f9f9" stroke="#005a70" stroke-width="2" />
            <circle cx="370" cy="60" r="4" fill="#d9534f" />
            <circle cx="420" cy="60" r="4" fill="#d9534f" />
            <circle cx="460" cy="60" r="4" fill="#d9534f" />

            <polygon points="300,80 500,80 520,100 320,100" fill="#e0e0e0" stroke="#005a70" stroke-width="2" />
            <text x="410" y="95" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Roads</text>

            <polygon points="300,110 500,110 520,130 320,130" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="410" y="125" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Wards</text>

            <polygon points="300,140 500,140 520,160 320,160" fill="#e8f5e9" stroke="#005a70" stroke-width="2" />
            <text x="410" y="155" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Satellite</text>

            <text x="410" y="190" font-size="10" fill="#666" font-style="italic" text-anchor="middle">drag rows to reorder</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">top row is drawn on top</div>
    </div>
</div>

<p>
    The diagram shows a layer panel and draw order. A layer register records name, source, type, CRS, style and owner for every layer. Order and groups place base data at the bottom and points on top. Visibility controls default on/off and scale ranges. Styling uses saved styles (SLD or QML) reused across layers. Permissions decide which roles see which layers. Opacity and legends help users read stacked layers.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does a layer register do?</strong> Records name, source, type, CRS, style and owner for every layer.</li>
    <li><strong>How are layers ordered?</strong> Base data at the bottom, points on top.</li>
    <li><strong>What does visibility control?</strong> Default on/off and scale ranges.</li>
    <li><strong>How are styles reused?</strong> Saved styles (SLD or QML) reused across layers.</li>
    <li><strong>What do permissions decide?</strong> Which roles see which layers.</li>
    <li><strong>Why use opacity and legends?</strong> They help users read stacked layers.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep layer names and styles consistent so users learn the map once.</p>
</div>