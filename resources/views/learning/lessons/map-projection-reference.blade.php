{{-- resources/views/learning/lessons/19-4-map-projection-reference.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A projection flattens the curved Earth onto a plane, and every projection distorts something.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know the three projection families</li>
    <li>Understand conformal and equal-area</li>
    <li>Choose a projection for a task</li>
</ul>

<h2>Visual Guide: Three families of projection</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">Three families of projection</div>
        
        <svg viewBox="0 0 650 300" style="width: 100%; font-family: sans-serif;">
            <!-- Cylindrical -->
            <rect x="20" y="20" width="190" height="250" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="115" y="45" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Cylindrical</text>
            
            <rect x="50" y="70" width="130" height="130" fill="none" stroke="#8e44ad" stroke-width="2" />
            <circle cx="115" cy="135" r="50" fill="#d5f4d5" stroke="#005a70" stroke-width="1" />
            <line x1="65" y1="135" x2="165" y2="135" stroke="#005a70" stroke-width="1" />
            
            <text x="115" y="225" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">Mercator</text>
            <text x="115" y="245" font-size="11" fill="#666" font-style="italic" text-anchor="middle">keeps shape, angles</text>

            <!-- Conic -->
            <rect x="230" y="20" width="190" height="250" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="325" y="45" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Conic</text>
            
            <polygon points="325,70 380,180 270,180" fill="none" stroke="#8e44ad" stroke-width="2" />
            <circle cx="325" cy="135" r="50" fill="#d5f4d5" stroke="#005a70" stroke-width="1" />
            <line x1="275" y1="135" x2="375" y2="135" stroke="#005a70" stroke-width="1" />
            
            <text x="325" y="225" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">Albers, Lambert</text>
            <text x="325" y="245" font-size="11" fill="#666" font-style="italic" text-anchor="middle">keeps area or shape</text>

            <!-- Azimuthal -->
            <rect x="440" y="20" width="190" height="250" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="535" y="45" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Azimuthal</text>
            
            <line x1="480" y1="180" x2="590" y2="180" stroke="#8e44ad" stroke-width="2" />
            <circle cx="535" cy="130" r="50" fill="#d5f4d5" stroke="#005a70" stroke-width="1" />
            <line x1="485" y1="130" x2="585" y2="130" stroke="#005a70" stroke-width="1" />
            
            <text x="535" y="225" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">polar, equidistant</text>
            <text x="535" y="245" font-size="11" fill="#666" font-style="italic" text-anchor="middle">true from the centre</text>
        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">every projection distorts shape, area, distance or direction</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>Conformal</strong> – preserves shape and angles, for example Mercator and Lambert Conformal Conic.</li>
    <li><strong>Equal-area</strong> – preserves area, for example Albers and Mollweide.</li>
    <li><strong>Equidistant</strong> – preserves distance from one or more points, for example Azimuthal Equidistant.</li>
    <li><strong>Families</strong> – cylindrical, conic and azimuthal, named after the surface the globe is projected onto.</li>
    <li><strong>Transverse Mercator (UTM)</strong> – accurate within narrow zones; used for large-scale mapping.</li>
    <li><strong>Choosing</strong> – area: equal-area or local projected CRS; local distance: UTM; web display: Web Mercator.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> For a city-scale project use the local UTM zone or the national grid.</p>
</div>