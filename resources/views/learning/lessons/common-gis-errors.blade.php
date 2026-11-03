{{-- resources/views/learning/lessons/19-11-common-gis-errors.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Frequent errors, their usual cause and the fix.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Identify common GIS errors</li>
    <li>Understand their causes</li>
    <li>Apply the correct fixes</li>
</ul>

<h2>Visual Guide: Two frequent errors and their fixes</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 25px; font-size: 14px;">Two frequent errors and their fixes</div>
        
        <svg viewBox="0 0 650 360" style="width: 100%;">
            
            <!-- ================= TOP ROW (CRS ERROR) ================= -->
            
            <!-- Error Box -->
            <rect x="40" y="20" width="220" height="130" fill="#fff" stroke="#bce2e2" stroke-width="2" rx="6" />
            
            <!-- Yellow Polygon -->
            <polygon points="70,90 150,70 170,140 90,150" fill="#f4d03f" stroke="#333" stroke-width="2" />
            
            <!-- Red Dashed Polygon (Offset) -->
            <polygon points="110,50 190,80 160,150 80,120" fill="none" stroke="#d9534f" stroke-width="3" stroke-dasharray="6,4" />
            
            <text x="150" y="175" font-size="11" fill="#d9534f" text-anchor="middle">layers offset</text>

            <!-- Arrow -->
            <path d="M 270 85 L 320 85" stroke="#f07b24" stroke-width="2" />
            <polygon points="320,85 310,80 310,90" fill="#f07b24" />
            <text x="295" y="75" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="middle">reproject to one CRS</text>

            <!-- Fix Box -->
            <rect x="340" y="20" width="220" height="130" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="6" />
            
            <!-- Aligned Polygon -->
            <polygon points="380,90 460,60 480,130 400,150" fill="#f4d03f" stroke="#333" stroke-width="2" />
            <polygon points="380,90 460,60 480,130 400,150" fill="none" stroke="#2ecc71" stroke-width="3" />
            
            <text x="450" y="175" font-size="11" fill="#2ecc71" text-anchor="middle">aligned</text>


            <!-- ================= BOTTOM ROW (GEOMETRY ERROR) ================= -->
            
            <!-- Error Box -->
            <rect x="40" y="190" width="220" height="130" fill="#fff" stroke="#bce2e2" stroke-width="2" rx="6" />
            
            <!-- Self-Crossing Polygon (Perfect Bowtie) -->
            <!-- The points create two triangles touching at the center (130, 255) -->
            <polygon points="90,215 170,215 130,255 170,295 90,295 130,255" 
                     fill="#b0c4de" stroke="#d9534f" stroke-width="3" stroke-linejoin="round" />
            
            <!-- Center Intersection Dot -->
            <circle cx="130" cy="255" r="5" fill="#d9534f" />
            
            <text x="150" y="345" font-size="11" fill="#d9534f" text-anchor="middle">self-crossing</text>

            <!-- Arrow -->
            <path d="M 270 255 L 320 255" stroke="#f07b24" stroke-width="2" />
            <polygon points="320,255 310,250 310,260" fill="#f07b24" />
            <text x="295" y="245" font-size="11" fill="#f07b24" font-weight="bold" text-anchor="middle">Fix geometries</text>

            <!-- Fix Box -->
            <rect x="340" y="190" width="220" height="130" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="6" />
            
            <!-- Valid Polygon (Waist shape) -->
            <polygon points="360,220 440,220 410,255 440,290 360,290 390,255" fill="#d5f4d5" stroke="#2ecc71" stroke-width="3" />
            
            <text x="450" y="345" font-size="11" fill="#2ecc71" text-anchor="middle">valid</text>

        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 15px; font-weight: bold;">cause first, fix second</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>Layers do not line up</strong> – different or missing CRS; reproject, or set the correct CRS.</li>
    <li><strong>Area or distance looks wrong</strong> – measured in a geographic CRS (degrees); use a projected CRS.</li>
    <li><strong>Invalid geometry</strong> – self-crossing or unclosed shapes; run Fix Geometries (ST_MakeValid in PostGIS).</li>
    <li><strong>Join returns no matches</strong> – key types or spelling differ (text and number, extra spaces); clean the key.</li>
    <li><strong>Points in the wrong place</strong> – longitude and latitude swapped, or the wrong CRS.</li>
    <li><strong>Shapefile will not open</strong> – a part file (.shx, .dbf or .prj) is missing.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Most errors are CRS errors: check the CRS first.</p>
</div>