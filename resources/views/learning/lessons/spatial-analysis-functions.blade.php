{{-- resources/views/learning/lessons/19-7-spatial-analysis-functions.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The main spatial relationships and measurements, with the PostGIS function that tests each one.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand spatial relationships</li>
    <li>Know the matching PostGIS functions</li>
    <li>Use the right function for the test</li>
</ul>

<h2>Visual Guide: Spatial relationships</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">Spatial relationships</div>
        
        <svg viewBox="0 0 650 340" style="width: 100%; font-family: sans-serif;">
            <!-- Intersects -->
            <rect x="10" y="10" width="200" height="150" fill="#fff" stroke="#ccc" stroke-width="1" rx="6" />
            <text x="110" y="35" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Intersects</text>
            <rect x="40" y="60" width="60" height="60" fill="#f4d03f" stroke="#333" stroke-width="1" />
            <rect x="70" y="80" width="60" height="60" fill="#a5d6f7" stroke="#333" stroke-width="1" opacity="0.8" />
            <text x="110" y="155" font-size="12" fill="#666" text-anchor="middle">ST_Intersects</text>

            <!-- Contains -->
            <rect x="225" y="10" width="200" height="150" fill="#fff" stroke="#ccc" stroke-width="1" rx="6" />
            <text x="325" y="35" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Contains</text>
            <rect x="255" y="60" width="140" height="60" fill="#a5d6f7" stroke="#333" stroke-width="1" />
            <rect x="300" y="75" width="40" height="30" fill="#f4d03f" stroke="#333" stroke-width="1" />
            <text x="325" y="140" font-size="12" fill="#666" text-anchor="middle">ST_Contains</text>

            <!-- Touches -->
            <rect x="440" y="10" width="200" height="150" fill="#fff" stroke="#ccc" stroke-width="1" rx="6" />
            <text x="540" y="35" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Touches</text>
            <rect x="470" y="60" width="60" height="60" fill="#f4d03f" stroke="#333" stroke-width="1" />
            <rect x="530" y="60" width="60" height="60" fill="#a5d6f7" stroke="#333" stroke-width="1" />
            <text x="540" y="140" font-size="12" fill="#666" text-anchor="middle">ST_Touches</text>

            <!-- Overlaps -->
            <rect x="10" y="175" width="200" height="150" fill="#fff" stroke="#ccc" stroke-width="1" rx="6" />
            <text x="110" y="200" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Overlaps</text>
            <rect x="40" y="225" width="70" height="60" fill="#f4d03f" stroke="#333" stroke-width="1" />
            <rect x="80" y="245" width="70" height="60" fill="#a5d6f7" stroke="#333" stroke-width="1" opacity="0.8" />
            <text x="110" y="320" font-size="12" fill="#666" text-anchor="middle">ST_Overlaps</text>

            <!-- Within -->
            <rect x="225" y="175" width="200" height="150" fill="#fff" stroke="#ccc" stroke-width="1" rx="6" />
            <text x="325" y="200" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Within</text>
            <rect x="255" y="235" width="140" height="70" fill="#a5d6f7" stroke="#333" stroke-width="1" />
            <rect x="300" y="255" width="40" height="30" fill="#f4d03f" stroke="#333" stroke-width="1" />
            <text x="325" y="320" font-size="12" fill="#666" text-anchor="middle">ST_Within</text>

            <!-- Disjoint -->
            <rect x="440" y="175" width="200" height="150" fill="#fff" stroke="#ccc" stroke-width="1" rx="6" />
            <text x="540" y="200" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">Disjoint</text>
            <rect x="470" y="235" width="50" height="50" fill="#f4d03f" stroke="#333" stroke-width="1" />
            <rect x="550" y="235" width="50" height="50" fill="#a5d6f7" stroke="#333" stroke-width="1" />
            <text x="540" y="310" font-size="12" fill="#666" text-anchor="middle">ST_Disjoint</text>
        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">each has a matching PostGIS function</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>Intersects</strong> – share any space (ST_Intersects).</li>
    <li><strong>Contains / Within</strong> – one geometry lies completely inside the other (ST_Contains, ST_Within).</li>
    <li><strong>Touches</strong> – share a boundary but no interior (ST_Touches).</li>
    <li><strong>Overlaps</strong> – share part, but not all, of their interior (ST_Overlaps).</li>
    <li><strong>Distance</strong> – ST_Distance, and ST_DWithin to test within a distance using the index.</li>
    <li><strong>Measure</strong> – ST_Area, ST_Length and ST_Perimeter.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Use ST_DWithin instead of ST_Distance in a WHERE clause: it can use the spatial index.</p>
</div>