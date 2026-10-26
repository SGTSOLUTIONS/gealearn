{{-- resources/views/learning/lessons/map-projections.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A map projection is a method of showing the Earth's curved surface on a flat map.
    Every projection distorts at least one property: area, shape, distance, or direction.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what a map projection is and why it is needed</li>
    <li>Recognise the three main projection families</li>
    <li>Learn how to choose the right projection for a map</li>
</ul>

<div class="note">
    <p style="margin:0"><strong>Note:</strong> A flat map can never show the whole Earth without some distortion.</p>
</div>

<h2>Visualizing Projections</h2>

<!-- Pure CSS Diagram Recreating the PDF Image -->
<div style="background: #f1f5f9; padding: 30px 20px; border-radius: 8px; margin-bottom: 24px; text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; overflow-x: auto;">
    
    <!-- The Diagrams Row -->
    <div style="display: flex; align-items: flex-end; justify-content: center; gap: 20px; min-width: 650px; margin-bottom: 25px; padding-bottom: 10px;">
        
        <!-- 1. GLOBE -->
        <div style="text-align: center; width: 110px;">
            <div style="width: 80px; height: 80px; border-radius: 50%; border: 1.5px solid #2563eb; margin: 0 auto 12px; background: #dbeafe; position: relative; overflow: hidden;">
                <!-- Globe Grid Lines -->
                <div style="position: absolute; top: 0; bottom: 0; left: 50%; width: 1px; background: #2563eb;"></div>
                <div style="position: absolute; left: 0; right: 0; top: 50%; height: 1px; background: #2563eb;"></div>
                <div style="position: absolute; top: 0; bottom: 0; left: 25%; width: 1px; background: #2563eb; opacity: 0.4;"></div>
                <div style="position: absolute; top: 0; bottom: 0; right: 25%; width: 1px; background: #2563eb; opacity: 0.4;"></div>
                <div style="position: absolute; left: 0; right: 0; top: 25%; height: 1px; background: #2563eb; opacity: 0.4;"></div>
                <div style="position: absolute; left: 0; right: 0; bottom: 25%; height: 1px; background: #2563eb; opacity: 0.4;"></div>
            </div>
            <div style="font-size: 14px; font-weight: 700; color: #1e293b;">Globe (3D)</div>
        </div>

        <!-- Arrow -->
        <div style="color: #64748b; font-size: 13px; font-weight: 600; display: flex; flex-direction: column; align-items: center; margin-bottom: 30px;">
            <span>project</span>
            <span style="font-size: 24px; line-height: 1;">&rarr;</span>
        </div>

        <!-- 2. CYLINDRICAL -->
        <div style="text-align: center; width: 130px;">
            <div style="position: relative; width: 100px; height: 110px; margin: 0 auto 12px;">
                <!-- Cylinder Outline -->
                <div style="position: absolute; top: 15px; left: 0; width: 100px; height: 80px; border-left: 1.5px solid #f59e0b; border-right: 1.5px solid #f59e0b;"></div>
                <div style="position: absolute; top: 15px; left: 0; width: 100px; height: 16px; border: 1.5px solid #f59e0b; border-radius: 50%; background: #fff;"></div>
                <div style="position: absolute; bottom: 15px; left: 0; width: 100px; height: 16px; border: 1.5px solid #f59e0b; border-radius: 50%; background: #fff; border-top: none;"></div>
                <!-- Projected Globe (Inside) -->
                <div style="position: absolute; top: 25px; left: 15px; width: 70px; height: 60px; border-radius: 50%; border: 1px solid #2563eb; background: #dbeafe; overflow: hidden;">
                     <div style="position: absolute; top: 0; bottom: 0; left: 50%; width: 1px; background: #2563eb;"></div>
                     <div style="position: absolute; left: 0; right: 0; top: 50%; height: 1px; background: #2563eb;"></div>
                     <div style="position: absolute; top: 0; bottom: 0; left: 25%; width: 1px; background: #2563eb; opacity: 0.4;"></div>
                     <div style="position: absolute; top: 0; bottom: 0; right: 25%; width: 1px; background: #2563eb; opacity: 0.4;"></div>
                </div>
            </div>
            <div style="font-size: 14px; font-weight: 700; color: #1e293b;">Cylindrical</div>
            <div style="font-size: 12px; color: #64748b; margin-top: 2px;">e.g. Mercator</div>
        </div>

        <!-- 3. CONIC -->
        <div style="text-align: center; width: 130px;">
            <div style="position: relative; width: 100px; height: 110px; margin: 0 auto 12px;">
                <!-- Cone Outline -->
                <div style="position: absolute; top: 5px; left: 50%; transform: translateX(-50%); width: 0; height: 0; border-left: 50px solid transparent; border-right: 50px solid transparent; border-bottom: 100px solid transparent; border-bottom-color: #f59e0b; clip-path: polygon(50% 0%, 0% 100%, 100% 100%, 99% 100%, 50% 2%, 1% 100%);"></div>
                <!-- Base Oval -->
                <div style="position: absolute; bottom: 5px; left: 0; width: 100px; height: 20px; border: 1.5px solid rgba(245, 159, 11, 0); border-radius: 50%; background: transparent;"></div>
                <!-- Projected Globe (Inside) -->
                <div style="position: absolute; top: 25px; left: 15px; width: 70px; height: 70px; border-radius: 50%; border: 1px solid #2563eb; background: #dbeafe; overflow: hidden;">
                     <div style="position: absolute; top: 0; bottom: 0; left: 50%; width: 1px; background: #2563eb;"></div>
                     <div style="position: absolute; left: 0; right: 0; top: 50%; height: 1px; background: #2563eb;"></div>
                </div>
            </div>
            <div style="font-size: 14px; font-weight: 700; color: #1e293b;">Conic</div>
            <div style="font-size: 12px; color: #64748b; margin-top: 2px;">e.g. Lambert Conformal Conic</div>
        </div>

        <!-- 4. AZIMUTHAL -->
        <div style="text-align: center; width: 130px;">
            <div style="position: relative; width: 100px; height: 110px; margin: 0 auto 12px; display: flex; flex-direction: column; align-items: center;">
                <!-- Flat Plane Line -->
                <div style="width: 100px; height: 2px; background: #f59e0b; margin-top: 10px; position: relative;">
                    <!-- Contact Point -->
                    <div style="position: absolute; top: -3px; left: 47px; width: 6px; height: 6px; background: #f59e0b; border-radius: 50%;"></div>
                </div>
                <!-- Projected Globe (Touching the line) -->
                <div style="position: relative; width: 70px; height: 70px; border-radius: 50%; border: 1px solid #2563eb; background: #dbeafe; overflow: hidden; margin-top: 0;">
                     <div style="position: absolute; top: 0; bottom: 0; left: 50%; width: 1px; background: #2563eb;"></div>
                     <div style="position: absolute; left: 0; right: 0; top: 50%; height: 1px; background: #2563eb;"></div>
                </div>
            </div>
            <div style="font-size: 14px; font-weight: 700; color: #1e293b;">Azimuthal</div>
            <div style="font-size: 12px; color: #64748b; margin-top: 2px;">e.g. polar maps</div>
        </div>
    </div>

    <!-- Distortion Badges Row -->
    <div style="display: flex; justify-content: center; align-items: center; gap: 10px; flex-wrap: wrap; border-top: 1px solid #cbd5e1; padding-top: 20px;">
        <span style="font-size: 13px; font-weight: 600; color: #475569; margin-right: 10px;">Every projection distorts at least one:</span>
        <span style="background: #fff; color: #92400e; border: 1px solid #f59e0b; padding: 5px 15px; border-radius: 20px; font-size: 13px; font-weight: 700;">Area</span>
        <span style="background: #fff; color: #92400e; border: 1px solid #f59e0b; padding: 5px 15px; border-radius: 20px; font-size: 13px; font-weight: 700;">Shape</span>
        <span style="background: #fff; color: #92400e; border: 1px solid #f59e0b; padding: 5px 15px; border-radius: 20px; font-size: 13px; font-weight: 700;">Distance</span>
        <span style="background: #fff; color: #92400e; border: 1px solid #f59e0b; padding: 5px 15px; border-radius: 20px; font-size: 13px; font-weight: 700;">Direction</span>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li><strong>Cylindrical projections</strong> suit world and navigation maps (e.g., Mercator).</li>
    <li><strong>Conic projections</strong> suit regions that extend east to west (e.g., Lambert Conformal Conic).</li>
    <li><strong>Azimuthal projections</strong> suit polar regions and maps centred on one point.</li>
    <li><strong>Equal-area projections</strong> keep sizes correct.</li>
    <li><strong>Conformal projections</strong> keep local shapes correct.</li>
    <li>Choose the projection by the map's purpose and area, not by habit.</li>
</ul>

<h2>Common Projections</h2>
<ul>
    <li><strong>Mercator:</strong> Preserves local angles and shape. Used for navigation.</li>
    <li><strong>Transverse Mercator / UTM:</strong> Preserves local shape. Used for surveying and regional maps.</li>
    <li><strong>Albers Equal-Area Conic:</strong> Preserves area. Used for thematic and statistical maps.</li>
    <li><strong>Robinson:</strong> Balanced distortion. Used for general world maps.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> To measure areas, use an equal-area projection. To measure distances in meters, use a projected CRS that fits your area, such as the local UTM zone.</p>
</div>