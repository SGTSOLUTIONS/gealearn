{{-- resources/views/learning/lessons/16-11-connect-postgis-geoserver.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoServer reads a PostGIS table and publishes it as a map service that any web map can use.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a workspace and data store</li>
    <li>Publish a PostGIS table as a layer</li>
    <li>Use WMS and WFS services</li>
</ul>

<h2>Visual Guide: From database table to map service</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">From database table to map service</div>
        
        <svg viewBox="0 0 600 280" style="width: 100%;">
            <!-- PostGIS Cylinder -->
            <ellipse cx="60" cy="100" rx="30" ry="10" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <path d="M 30 100 L 30 200 C 30 210, 90 210, 90 200 L 90 100" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <text x="60" y="150" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">PostGIS</text>
            <text x="60" y="240" font-size="11" fill="#666" text-anchor="middle">parcels table</text>

            <!-- Arrow -->
            <path d="M 100 150 L 150 150" stroke="#f07b24" stroke-width="2" />
            <polygon points="150,150 140,145 140,155" fill="#f07b24" />
            <text x="125" y="140" font-size="10" fill="#f07b24" font-weight="bold" text-anchor="middle">connect</text>

            <!-- GeoServer Box -->
            <rect x="160" y="40" width="200" height="220" fill="#f9f9f9" stroke="#005a70" stroke-width="2" rx="8" />
            <text x="260" y="65" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">GeoServer</text>

            <rect x="180" y="80" width="160" height="40" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="260" y="100" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Workspace</text>
            <text x="260" y="114" font-size="10" fill="#666" text-anchor="middle">project name</text>

            <rect x="180" y="140" width="160" height="40" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="260" y="160" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Data store</text>
            <text x="260" y="174" font-size="10" fill="#666" text-anchor="middle">PostGIS connection</text>

            <rect x="180" y="200" width="160" height="40" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="260" y="220" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">Layer</text>
            <text x="260" y="234" font-size="10" fill="#666" text-anchor="middle">published + styled</text>

            <!-- Arrows to WMS/WFS -->
            <path d="M 360 150 L 410 100" stroke="#f07b24" stroke-width="2" />
            <polygon points="410,100 400,105 405,112" fill="#f07b24" />

            <path d="M 360 170 L 410 200" stroke="#f07b24" stroke-width="2" />
            <polygon points="410,200 400,195 405,188" fill="#f07b24" />

            <!-- WMS/WFS Boxes -->
            <rect x="420" y="70" width="140" height="50" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="490" y="95" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">WMS</text>
            <text x="490" y="110" font-size="10" fill="#666" text-anchor="middle">map images</text>

            <rect x="420" y="160" width="140" height="50" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <text x="490" y="185" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">WFS</text>
            <text x="490" y="200" font-size="10" fill="#666" text-anchor="middle">features</text>
        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">connect · publish · serve</div>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Make sure the PostGIS table has a geometry column, an SRID and a spatial index.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>In GeoServer, create a <strong>workspace</strong> for the project.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Add a <strong>PostGIS data store</strong> with host, port, database, user and password.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Publish the table as a <strong>layer</strong>; check the native CRS and compute the bounding boxes.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Set a style (SLD) and use <strong>Layer Preview</strong> to test the layer.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Note the <strong>WMS</strong> and <strong>WFS</strong> addresses for use in web maps.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Use a read-only database account for the GeoServer connection.</p>
</div>