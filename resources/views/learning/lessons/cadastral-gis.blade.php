{{-- resources/views/learning/lessons/13-2-cadastral-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A cadastre is the official record of land parcels: their boundaries, owners and often value. Cadastral GIS stores it as maps and tables.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the cadastre and parcels</li>
    <li>Know the layers involved</li>
    <li>Understand the importance of projected CRS</li>
</ul>

<h2>Visual Guide: Cadastral map</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Cadastral map: block, parcels, road</div>
        
        <svg viewBox="0 0 400 250" style="width: 100%; font-family: sans-serif;">
            <rect x="20" y="20" width="110" height="90" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="75" y="65" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">P101</text>
            
            <rect x="140" y="20" width="110" height="90" fill="#e8f5e9" stroke="#005a70" stroke-width="2" />
            <text x="195" y="65" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">P102</text>
            
            <rect x="260" y="20" width="110" height="90" fill="#e3f2fd" stroke="#005a70" stroke-width="2" />
            <text x="315" y="65" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">P103</text>
            
            <rect x="20" y="120" width="350" height="30" fill="#e0e0e0" stroke="#999" stroke-width="1" />
            <text x="195" y="140" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">ROAD</text>
            
            <rect x="20" y="160" width="110" height="90" fill="#e8f5e9" stroke="#005a70" stroke-width="2" />
            <text x="75" y="205" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">P104</text>
            
            <rect x="140" y="160" width="110" height="90" fill="#e3f2fd" stroke="#005a70" stroke-width="2" />
            <text x="195" y="205" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">P105</text>
            
            <rect x="260" y="160" width="110" height="90" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="315" y="205" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">P106</text>

            <polygon points="15,15 25,15 20,25" fill="#d9534f" />
            <polygon points="365,15 375,15 370,25" fill="#d9534f" />
            <polygon points="15,255 25,255 20,245" fill="#d9534f" />
            <polygon points="365,255 375,255 370,245" fill="#d9534f" />
            <text x="385" y="25" font-size="10" fill="#d9534f" text-anchor="end">control</text>
        </svg>
    </div>
</div>

<p>
    The diagram shows a cadastral map. A cadastre is the official register of parcels (extent, ownership and often value). A parcel is one piece of land with a closed boundary and a single holder. The Survey number / parcel ID is the key that links every map feature to its records. Use one local projected CRS so areas and lengths come out in metres.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a cadastre?</strong> The official register of parcels: extent, ownership and often value.</li>
    <li><strong>What is a parcel?</strong> One piece of land with a closed boundary and a single holder.</li>
    <li><strong>What is a survey number / parcel ID?</strong> The key that links every map feature to its records (names differ by region).</li>
    <li><strong>Which layers are used?</strong> Parcels, blocks, wards or villages, roads, buildings and control points.</li>
    <li><strong>Why use a local projected CRS?</strong> So areas and lengths come out in metres.</li>
    <li><strong>What does GIS offer?</strong> Fast search, area calculation, overlay and one shared copy of the data.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Choose one projected CRS for the whole cadastre and document it.</p>
</div>