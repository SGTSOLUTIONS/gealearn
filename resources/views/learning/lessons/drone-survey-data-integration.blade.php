{{-- resources/views/learning/lessons/13-9-drone-survey-data-integration.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Drones capture overlapping photos that are processed into maps, surface models and point clouds for land mapping.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand drone survey products</li>
    <li>Use ground control points (GCPs)</li>
    <li>Digitise boundaries from orthomosaics</li>
</ul>

<h2>Visual Guide: Drone photo grid over a site</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Drone photo grid over a site</div>
        
        <svg viewBox="0 0 500 280" style="width: 100%; font-family: sans-serif;">
            <!-- Background Site Rectangle -->
            <rect x="20" y="20" width="380" height="200" fill="#e8f5e9" stroke="#2ecc71" stroke-width="2" />
            
            <!-- Grid Lines (Horizontal) -->
            <line x1="20" y1="50" x2="400" y2="50" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="20" y1="80" x2="400" y2="80" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="20" y1="110" x2="400" y2="110" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="20" y1="140" x2="400" y2="140" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="20" y1="170" x2="400" y2="170" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="20" y1="200" x2="400" y2="200" stroke="#005a70" stroke-width="1" opacity="0.5" />
            
            <!-- Grid Lines (Vertical) -->
            <line x1="50" y1="20" x2="50" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="80" y1="20" x2="80" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="110" y1="20" x2="110" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="140" y1="20" x2="140" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="170" y1="20" x2="170" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="200" y1="20" x2="200" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="230" y1="20" x2="230" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="260" y1="20" x2="260" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="290" y1="20" x2="290" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="320" y1="20" x2="320" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="350" y1="20" x2="350" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />
            <line x1="380" y1="20" x2="380" y2="220" stroke="#005a70" stroke-width="1" opacity="0.5" />

            <!-- Flight Path (Orange) -->
            <path d="M 40 40 L 360 40 L 360 90 L 40 90 L 40 150 L 360 150 L 360 200 L 40 200" fill="none" stroke="#f07b24" stroke-width="3" />
            
            <!-- Flight Path Arrow -->
            <polygon points="360,200 350,195 350,205" fill="#f07b24" />

            <!-- Ground Control Points (Red Squares) -->
            <rect x="30" y="30" width="12" height="12" fill="#d9534f" />
            <rect x="370" y="30" width="12" height="12" fill="#d9534f" />
            <rect x="30" y="190" width="12" height="12" fill="#d9534f" />
            <rect x="370" y="190" width="12" height="12" fill="#d9534f" />
            
            <!-- Center GCP -->
            <rect x="200" y="110" width="15" height="15" fill="#d9534f" />
            <text x="207" y="140" font-size="12" fill="#d9534f" font-weight="bold" text-anchor="middle">GCP</text>

            <!-- Drone Icon (Top Right) -->
            <g transform="translate(430, 30)">
                <circle cx="20" cy="0" r="5" fill="#005a70" />
                <circle cx="0" cy="20" r="5" fill="#005a70" />
                <circle cx="40" cy="20" r="5" fill="#005a70" />
                <circle cx="20" cy="40" r="5" fill="#005a70" />
                <line x1="20" y1="0" x2="20" y2="40" stroke="#005a70" stroke-width="2" />
                <line x1="0" y1="20" x2="40" y2="20" stroke="#005a70" stroke-width="2" />
                <text x="20" y="65" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">drone</text>
            </g>
        </svg>
        
        <div style="text-align: center; font-size: 11px; color: #666; font-style: italic; margin-top: 10px;">overlapping photos, flight lines and ground control</div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; font-weight: bold; margin-top: 5px;">GCPs decide the final accuracy</div>
    </div>
</div>

<p>
    The diagram shows a drone photo grid over a site. Photos with high overlap are processed into maps and 3D models. Products include an orthomosaic, surface model (DSM), point cloud and contours. GCPs (ground control points) with surveyed coordinates fix the accuracy. GSD is the ground sample distance, the pixel size on the ground (e.g. 3 cm). Digitise parcel boundaries and buildings on the orthomosaic in QGIS.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What do photos create?</strong> Maps and 3D models.</li>
    <li><strong>What are the products?</strong> Orthomosaic, surface model (DSM), point cloud and contours.</li>
    <li><strong>What are GCPs?</strong> Ground control points with surveyed coordinates fix the accuracy.</li>
    <li><strong>What is GSD?</strong> Ground sample distance, the pixel size on the ground (e.g. 3 cm).</li>
    <li><strong>How do I digitise?</strong> Digitise parcel boundaries and buildings on the orthomosaic in QGIS.</li>
    <li><strong>What formats are used?</strong> GeoTIFF for rasters, LAS / LAZ for point clouds.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Place GCPs around the edge and in the middle of the survey area.</p>
</div>