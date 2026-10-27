<p>
    Georeferencing gives an image or map without coordinates a real location on the Earth. You match points on the image to known coordinates, called ground control points (GCPs), and the software fits the image to them.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the purpose of georeferencing for scanned maps and images</li>
    <li>Learn how to identify and use ground control points (GCPs)</li>
    <li>Recognise the differences between transformation methods and RMS error</li>
</ul>

<div class="note">
    <p style="margin:0"><strong>Note:</strong> A low RMS error alone does not prove the map is correctly georeferenced. Always check it by overlaying it on a trusted basemap.</p>
</div>

<!-- CSS Design Diagram -->
<div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 40px 20px; margin: 30px 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; display: flex; align-items: center; justify-content: center; gap: 20px; flex-wrap: wrap; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">

    <!-- Left Side: Scanned Map -->
    <div style="text-align: center;">
        <div style="width: 180px; height: 140px; background: #fdf6e3; border: 2px solid #cbd5e1; position: relative; transform: rotate(-6deg); box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
            <!-- Faint inner grid -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: grid; grid-template-columns: repeat(4, 1fr); grid-template-rows: repeat(3, 1fr); opacity: 0.3;">
                <div style="border: 1px solid #ccc;"></div><div style="border: 1px solid #ccc;"></div><div style="border: 1px solid #ccc;"></div><div style="border: 1px solid #ccc;"></div>
                <div style="border: 1px solid #ccc;"></div><div style="border: 1px solid #ccc;"></div><div style="border: 1px solid #ccc;"></div><div style="border: 1px solid #ccc;"></div>
                <div style="border: 1px solid #ccc;"></div><div style="border: 1px solid #ccc;"></div><div style="border: 1px solid #ccc;"></div><div style="border: 1px solid #ccc;"></div>
            </div>
            
            <!-- Green Line Feature -->
            <svg width="100%" height="100%" style="position: absolute; top: 0; left: 0;">
                <polyline points="30,100 70,60 130,80" fill="none" stroke="#1bba85" stroke-width="3" />
            </svg>

            <!-- Red GCP Circles -->
            <div style="position: absolute; top: 15px; left: 15px; width: 24px; height: 24px; background: #d9534f; border-radius: 50%; color: white; font-weight: bold; font-size: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.2);">1</div>
            <div style="position: absolute; top: 15px; right: 15px; width: 24px; height: 24px; background: #d9534f; border-radius: 50%; color: white; font-weight: bold; font-size: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.2);">2</div>
            <div style="position: absolute; bottom: 15px; left: 15px; width: 24px; height: 24px; background: #d9534f; border-radius: 50%; color: white; font-weight: bold; font-size: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.2);">3</div>
            <div style="position: absolute; bottom: 15px; right: 15px; width: 24px; height: 24px; background: #d9534f; border-radius: 50%; color: white; font-weight: bold; font-size: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.2);">4</div>
        </div>
        <div style="font-weight: 700; font-size: 13px; color: #111; margin-top: 15px;">Scanned map (no coordinates)</div>
    </div>

    <!-- Middle Arrow -->
    <div style="text-align: center; margin: 0 10px; display: flex; flex-direction: column; align-items: center;">
        <div style="font-weight: bold; font-size: 14px; color: #111; margin-bottom: 2px;">Match</div>
        <div style="font-weight: bold; font-size: 14px; color: #111; margin-bottom: 8px;">GCPs</div>
        <div style="width: 60px; height: 3px; background: #333; position: relative;">
            <div style="position: absolute; right: -6px; top: -4.5px; width: 0; height: 0; border-top: 6px solid transparent; border-bottom: 6px solid transparent; border-left: 10px solid #333;"></div>
        </div>
        <div style="font-size: 11px; color: #64748b; margin-top: 8px;">to known</div>
        <div style="font-size: 11px; color: #64748b;">coordinates</div>
    </div>

    <!-- Right Side: Georeferenced Map -->
    <div style="text-align: center;">
        <div style="width: 200px; height: 140px; background: #fdf6e3; border: 2px solid #94a3b8; position: relative; display: grid; grid-template-columns: repeat(4, 1fr); grid-template-rows: repeat(3, 1fr);">
            <!-- Grid Lines -->
            <div style="border: 1px solid #e2e8f0; position: relative;"></div>
            <div style="border: 1px solid #e2e8f0;"></div>
            <div style="border: 1px solid #e2e8f0;"></div>
            <div style="border: 1px solid #e2e8f0;"></div>
            <div style="border: 1px solid #e2e8f0;"></div>
            <div style="border: 1px solid #e2e8f0;"></div>
            <div style="border: 1px solid #e2e8f0;"></div>
            <div style="border: 1px solid #e2e8f0;"></div>
            <div style="border: 1px solid #e2e8f0;"></div>
            <div style="border: 1px solid #e2e8f0;"></div>
            <div style="border: 1px solid #e2e8f0;"></div>
            <div style="border: 1px solid #e2e8f0;"></div>

            <!-- Green Line Feature -->
            <svg width="100%" height="100%" style="position: absolute; top: 0; left: 0; pointer-events: none;">
                <polyline points="30,100 80,60 150,80" fill="none" stroke="#1bba85" stroke-width="3" />
            </svg>

            <!-- Coordinates Text -->
            <div style="position: absolute; top: -18px; left: 0; font-size: 9px; font-weight: bold; color: #333;">80.10E 13.20N</div>
            <div style="position: absolute; top: -18px; right: 0; font-size: 9px; font-weight: bold; color: #333;">80.30E 13.20N</div>
            <div style="position: absolute; bottom: -18px; left: 0; font-size: 9px; font-weight: bold; color: #333;">80.10E 13.00N</div>
            <div style="position: absolute; bottom: -18px; right: 0; font-size: 9px; font-weight: bold; color: #333;">80.30E 13.00N</div>

            <!-- Red GCP Circles -->
            <div style="position: absolute; top: -12px; left: -12px; width: 24px; height: 24px; background: #d9534f; border-radius: 50%; color: white; font-weight: bold; font-size: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.2); z-index: 10;">1</div>
            <div style="position: absolute; top: -12px; right: -12px; width: 24px; height: 24px; background: #d9534f; border-radius: 50%; color: white; font-weight: bold; font-size: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.2); z-index: 10;">2</div>
            <div style="position: absolute; bottom: -12px; left: -12px; width: 24px; height: 24px; background: #d9534f; border-radius: 50%; color: white; font-weight: bold; font-size: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.2); z-index: 10;">3</div>
            <div style="position: absolute; bottom: -12px; right: -12px; width: 24px; height: 24px; background: #d9534f; border-radius: 50%; color: white; font-weight: bold; font-size: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 1px 3px rgba(0,0,0,0.2); z-index: 10;">4</div>
        </div>
        <div style="font-weight: 700; font-size: 13px; color: #111; margin-top: 25px;">Georeferenced map (real coordinates)</div>
    </div>

</div>

<h3>Key points</h3>
<ul>
    <li>Used for scanned paper maps, old plans, aerial photos and images with no location data.</li>
    <li>Steps: load the image, choose control points, enter their real coordinates, set the CRS, choose a transformation, then run and save.</li>
    <li>Use well-spread control points (corners and edges, plus a few in the middle). Aim for at least 4, and more for better accuracy.</li>
    <li>Control points should be easy to identify, such as road crossings or building corners.</li>
    <li>The RMS error shows how well the points fit. A smaller value is better.</li>
    <li>In QGIS use the Georeferencer (Layer menu). The output is a GeoTIFF.</li>
</ul>

<table>
    <thead>
        <tr>
            <th>Transformation</th>
            <th>Use when</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Linear / Helmert</td>
            <td>The map is only shifted, scaled or rotated</td>
        </tr>
        <tr>
            <td>Polynomial 1</td>
            <td>Simple maps with few distortions</td>
        </tr>
        <tr>
            <td>Thin Plate Spline</td>
            <td>Old or stretched maps</td>
        </tr>
    </tbody>
</table>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Always check the result by overlaying it on a trusted layer, such as roads or a basemap. A low RMS error alone does not prove it is right.</p>
</div>