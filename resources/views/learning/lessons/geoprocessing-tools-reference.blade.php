{{-- resources/views/learning/lessons/19-6-geoprocessing-tools-reference.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The tools used most often, grouped by what they do.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know the main geoprocessing operations</li>
    <li>Understand overlay operations</li>
    <li>Choose the right tool for the question</li>
</ul>

<h2>Visual Guide: Overlay operations</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">Overlay operations</div>
        
        <svg viewBox="0 0 650 300" style="width: 100%; font-family: sans-serif;">
            <!-- Intersection -->
            <rect x="10" y="20" width="150" height="250" fill="#fff" stroke="#ccc" stroke-width="1" rx="6" />
            <text x="85" y="45" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Intersection</text>
            
            <circle cx="60" cy="120" r="35" fill="none" stroke="#005a70" stroke-width="2" />
            <circle cx="110" cy="120" r="35" fill="none" stroke="#005a70" stroke-width="2" />
            <path d="M 85 90 A 35 35 0 0 1 85 150 A 35 35 0 0 1 85 90" fill="#d35400" />
            
            <text x="45" y="180" font-size="12" fill="#005a70" font-weight="bold">A</text>
            <text x="115" y="180" font-size="12" fill="#005a70" font-weight="bold">B</text>
            <text x="85" y="240" font-size="12" fill="#666" font-style="italic" text-anchor="middle">A and B</text>

            <!-- Union -->
            <rect x="170" y="20" width="150" height="250" fill="#fff" stroke="#ccc" stroke-width="1" rx="6" />
            <text x="245" y="45" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Union</text>
            
            <circle cx="220" cy="120" r="35" fill="#d35400" stroke="#005a70" stroke-width="2" />
            <circle cx="270" cy="120" r="35" fill="#d35400" stroke="#005a70" stroke-width="2" opacity="0.8" />
            
            <text x="205" y="180" font-size="12" fill="#005a70" font-weight="bold">A</text>
            <text x="275" y="180" font-size="12" fill="#005a70" font-weight="bold">B</text>
            <text x="245" y="240" font-size="12" fill="#666" font-style="italic" text-anchor="middle">A or B</text>

            <!-- Difference -->
            <rect x="330" y="20" width="150" height="250" fill="#fff" stroke="#ccc" stroke-width="1" rx="6" />
            <text x="405" y="45" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Difference</text>
            
            <circle cx="380" cy="120" r="35" fill="#d35400" stroke="#005a70" stroke-width="2" />
            <circle cx="430" cy="120" r="35" fill="#fff" stroke="#005a70" stroke-width="2" />
            <path d="M 405 90 A 35 35 0 0 1 405 150 A 35 35 0 0 1 405 90" fill="#fff" />
            
            <text x="365" y="180" font-size="12" fill="#005a70" font-weight="bold">A</text>
            <text x="435" y="180" font-size="12" fill="#005a70" font-weight="bold">B</text>
            <text x="405" y="240" font-size="12" fill="#666" font-style="italic" text-anchor="middle">A not B</text>

            <!-- Symmetrical -->
            <rect x="490" y="20" width="150" height="250" fill="#fff" stroke="#ccc" stroke-width="1" rx="6" />
            <text x="565" y="45" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Symmetrical</text>
            
            <circle cx="540" cy="120" r="35" fill="#d35400" stroke="#005a70" stroke-width="2" />
            <circle cx="590" cy="120" r="35" fill="#d35400" stroke="#005a70" stroke-width="2" />
            <path d="M 565 90 A 35 35 0 0 1 565 150 A 35 35 0 0 1 565 90" fill="#fff" />
            
            <text x="525" y="180" font-size="12" fill="#005a70" font-weight="bold">A</text>
            <text x="595" y="180" font-size="12" fill="#005a70" font-weight="bold">B</text>
            <text x="565" y="240" font-size="12" fill="#666" font-style="italic" text-anchor="middle">A or B, not both</text>
        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">what is kept from layers A and B</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>Extract</strong> – Clip, Select by Location, Extract by Attribute.</li>
    <li><strong>Overlay</strong> – Intersection, Union, Difference, Symmetrical Difference.</li>
    <li><strong>Proximity</strong> – Buffer, Nearest Neighbour, Distance Matrix, Service Area.</li>
    <li><strong>Generalise</strong> – Dissolve, Merge, Simplify, Aggregate.</li>
    <li><strong>Management</strong> – Reproject, Fix Geometries, Join Attributes by Location, Add Field.</li>
    <li><strong>Raster</strong> – Raster Calculator, Reclassify, Zonal Statistics, Slope and Aspect.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Name the question first (what is inside, near, or common to both?), then choose the tool.</p>
</div>