{{-- resources/views/learning/lessons/16-12-display-gis-layers-openlayers.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    OpenLayers can draw tile layers, GeoServer map services and vector features together in one map.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Add an OSM base layer</li>
    <li>Add a WMS layer from GeoServer</li>
    <li>Add a vector layer for interactivity</li>
</ul>

<h2>Visual Guide: Three layers, one map</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 20px 10px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 15px; font-size: 14px;">Three layers, one map</div>
        
        <svg viewBox="0 0 650 320" style="width: 100%;">
            <!-- Stacked Layers -->
            
            <!-- Top Layer: Vector -->
            <polygon points="100,80 350,50 300,110 50,140" fill="#f4d03f" stroke="#005a70" stroke-width="2" stroke-linejoin="round" />
            <text x="200" y="100" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Vector: selected parcel</text>

            <!-- Middle Layer: WMS -->
            <polygon points="80,130 330,100 280,160 30,190" fill="#d5f4d5" stroke="#005a70" stroke-width="2" stroke-linejoin="round" />
            <text x="180" y="150" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">WMS parcels (GeoServer)</text>

            <!-- Bottom Layer: OSM -->
            <polygon points="60,180 310,150 260,210 10,240" fill="#fdf0e0" stroke="#005a70" stroke-width="2" stroke-linejoin="round" />
            <text x="160" y="200" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">OSM tiles (base)</text>

            <!-- Arrow -->
            <path d="M 320 160 L 360 160" stroke="#f07b24" stroke-width="2" />
            <polygon points="360,160 350,155 350,165" fill="#f07b24" />
            <text x="340" y="150" font-size="12" fill="#f07b24" font-weight="bold" text-anchor="middle">stack</text>

            <!-- Final Map Grid -->
            <rect x="380" y="50" width="230" height="220" fill="#fdf8f4" stroke="#005a70" stroke-width="2" />
            
            <!-- Row 1 -->
            <rect x="395" y="65" width="60" height="60" fill="#e3f2fd" stroke="#005a70" stroke-width="1" />
            <rect x="465" y="65" width="60" height="60" fill="#d5f4d5" stroke="#005a70" stroke-width="1" />
            <rect x="535" y="65" width="60" height="60" fill="#fdf0e0" stroke="#005a70" stroke-width="1" />

            <!-- Row 2 -->
            <rect x="395" y="135" width="60" height="60" fill="#fdf0e0" stroke="#005a70" stroke-width="1" />
            <!-- Selected Parcel -->
            <rect x="465" y="135" width="60" height="60" fill="#f4d03f" stroke="#f07b24" stroke-width="3" />
            <rect x="535" y="135" width="60" height="60" fill="#d5f4d5" stroke="#005a70" stroke-width="1" />

            <!-- Row 3 -->
            <rect x="395" y="205" width="60" height="60" fill="#d5f4d5" stroke="#005a70" stroke-width="1" />
            <rect x="465" y="205" width="60" height="60" fill="#fdf0e0" stroke="#005a70" stroke-width="1" />
            <rect x="535" y="205" width="60" height="60" fill="#e3f2fd" stroke="#005a70" stroke-width="1" />

            <!-- Popup -->
            <rect x="490" y="90" width="60" height="25" fill="#fff" stroke="#005a70" stroke-width="1.5" rx="4" />
            <text x="520" y="107" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">P101</text>

            <!-- Bottom Text -->
            <text x="495" y="295" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">one map in the browser</text>
        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 15px;">tiles + WMS + vector</div>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Create the page with a map container and load the OpenLayers library.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Add an <strong>OSM tile layer</strong> as the base map.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Add the GeoServer layer as a <strong>WMS image layer</strong> using workspace:layer.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Add a <strong>vector layer</strong> from the WFS or GeoJSON address for clicking and selecting.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Set the view centre and zoom; OpenLayers uses <strong>EPSG:3857</strong> by default.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Add click handling to show the attributes of the selected feature.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> If the WMS layer does not appear, check the layer name, the CRS and the browser console.</p>
</div>