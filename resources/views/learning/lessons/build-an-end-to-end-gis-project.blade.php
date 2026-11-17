{{-- resources/views/learning/lessons/16-16-build-end-to-end-gis-project.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    An end-to-end project goes from raw data to a published, documented system.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the six project stages</li>
    <li>Collect, store, and analyse data</li>
    <li>Publish, display, and maintain the system</li>
</ul>

<h2>Visual Guide: Six stages of a complete project</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 20px 10px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 15px; font-size: 14px;">Six stages of a complete project</div>
        
        <svg viewBox="0 0 650 250" style="width: 100%;">
            
            <!-- Top Row -->
            <!-- Box 1 -->
            <rect x="20" y="20" width="180" height="80" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <circle cx="45" cy="45" r="12" fill="#f07b24" />
            <text x="45" y="50" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">1</text>
            <text x="70" y="50" font-size="14" fill="#005a70" font-weight="bold">Collect</text>
            <text x="30" y="80" font-size="12" fill="#666">survey, drone, records</text>

            <path d="M 200 60 L 230 60" stroke="#f07b24" stroke-width="2" />
            <polygon points="230,60 220,55 220,65" fill="#f07b24" />

            <!-- Box 2 -->
            <rect x="240" y="20" width="180" height="80" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <circle cx="265" cy="45" r="12" fill="#f07b24" />
            <text x="265" y="50" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">2</text>
            <text x="290" y="50" font-size="14" fill="#005a70" font-weight="bold">Store</text>
            <text x="250" y="80" font-size="12" fill="#666">PostGIS, keys, indexes</text>

            <path d="M 420 60 L 450 60" stroke="#f07b24" stroke-width="2" />
            <polygon points="450,60 440,55 440,65" fill="#f07b24" />

            <!-- Box 3 -->
            <rect x="460" y="20" width="170" height="80" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <circle cx="485" cy="45" r="12" fill="#f07b24" />
            <text x="485" y="50" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">3</text>
            <text x="510" y="50" font-size="14" fill="#005a70" font-weight="bold">Analyse</text>
            <text x="470" y="80" font-size="12" fill="#666">QGIS and spatial SQL</text>

            <!-- Arrow Down -->
            <path d="M 545 100 L 545 130" stroke="#f07b24" stroke-width="2" />
            <polygon points="545,130 540,120 550,120" fill="#f07b24" />

            <!-- Bottom Row -->
            <!-- Box 6 -->
            <rect x="20" y="140" width="180" height="80" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <circle cx="45" cy="165" r="12" fill="#f07b24" />
            <text x="45" y="170" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">6</text>
            <text x="70" y="170" font-size="14" fill="#005a70" font-weight="bold">Maintain</text>
            <text x="30" y="200" font-size="12" fill="#666">backup, update, docs</text>

            <path d="M 200 180 L 230 180" stroke="#f07b24" stroke-width="2" />
            <polygon points="200,180 210,175 210,185" fill="#f07b24" /> <!-- Arrow pointing left -->

            <!-- Box 5 -->
            <rect x="240" y="140" width="180" height="80" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <circle cx="265" cy="165" r="12" fill="#f07b24" />
            <text x="265" y="170" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">5</text>
            <text x="290" y="170" font-size="14" fill="#005a70" font-weight="bold">Display</text>
            <text x="250" y="200" font-size="12" fill="#666">web map, dashboard</text>

            <path d="M 420 180 L 450 180" stroke="#f07b24" stroke-width="2" />
            <polygon points="420,180 430,175 430,185" fill="#f07b24" /> <!-- Arrow pointing left -->

            <!-- Box 4 -->
            <rect x="460" y="140" width="170" height="80" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <circle cx="485" cy="165" r="12" fill="#f07b24" />
            <text x="485" y="170" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">4</text>
            <text x="510" y="170" font-size="14" fill="#005a70" font-weight="bold">Publish</text>
            <text x="470" y="200" font-size="12" fill="#666">GeoServer WMS / WFS</text>

        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 15px;">finish one thin slice end-to-end first</div>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div><strong>Collect</strong> - survey, drone and existing records; check their quality.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div><strong>Store</strong> - load the data into PostGIS with keys, SRIDs and indexes.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div><strong>Analyse</strong> - clean, join, measure and summarise with QGIS and spatial SQL.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div><strong>Publish</strong> - serve the layers with GeoServer as WMS and WFS.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div><strong>Display</strong> - a web map and dashboard for users, with login and roles.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div><strong>Maintain</strong> - backups, updates, documentation and user training.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Finish one thin slice end-to-end first, then widen it.</p>
</div>