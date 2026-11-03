{{-- resources/views/learning/lessons/19-2-spatial-data-glossary.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Terms that describe how spatial data is structured and measured.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Distinguish vector and raster data</li>
    <li>Understand resolution and topology</li>
    <li>Know metadata and NoData</li>
</ul>

<h2>Visual Guide: Vector and raster</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 700px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 20px 10px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 25px; font-size: 15px;">Vector and raster</div>
        
        <svg viewBox="0 0 700 320" style="width: 100%;">
            
            <!-- ================= VECTOR BOX ================= -->
            <rect x="30" y="30" width="300" height="280" fill="#fff" stroke="#005a70" stroke-width="2" rx="10" />
            <rect x="30" y="20" width="300" height="35" fill="#005a70" rx="10" />
            <!-- This covers the bottom rounded corners of the header -->
            <rect x="30" y="40" width="300" height="15" fill="#005a70" />
            <text x="180" y="43" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">Vector</text>
            
            <!-- Point -->
            <circle cx="85" cy="100" r="8" fill="#d9534f" />
            <text x="115" y="105" font-size="13" fill="#333">point</text>
            
            <!-- Line -->
            <polyline points="85,160 125,135 165,175 205,145" fill="none" stroke="#2980b9" stroke-width="3" />
            <text x="230" y="165" font-size="13" fill="#333">line</text>
            
            <!-- Polygon -->
            <polygon points="95,240 155,210 175,280 115,300" fill="#f4d03f" stroke="#333" stroke-width="2" />
            <text x="205" y="265" font-size="13" fill="#333">polygon</text>

            <!-- ================= RASTER BOX ================= -->
            <rect x="360" y="30" width="310" height="280" fill="#fff" stroke="#8e44ad" stroke-width="2" rx="10" />
            <rect x="360" y="20" width="310" height="35" fill="#8e44ad" rx="10" />
            <!-- This covers the bottom rounded corners of the header -->
            <rect x="360" y="40" width="310" height="15" fill="#8e44ad" />
            <text x="515" y="43" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">Raster</text>
            
            <!-- Inner Grid Box -->
            <rect x="380" y="70" width="270" height="210" fill="#eef4f0" stroke="#005a70" stroke-width="1.5" />
            
            <!-- Grid Cells -->
            <g stroke="#005a70" stroke-width="1">
                <!-- Row 1 -->
                <rect x="390" y="80" width="40" height="40" fill="#a5d6a7" />
                <rect x="430" y="80" width="40" height="40" fill="#a5d6a7" />
                <rect x="470" y="80" width="40" height="40" fill="#81c784" />
                <rect x="510" y="80" width="40" height="40" fill="#81c784" />
                <rect x="550" y="80" width="40" height="40" fill="#66bb6a" />
                <rect x="590" y="80" width="40" height="40" fill="#66bb6a" />
                
                <!-- Row 2 -->
                <rect x="390" y="120" width="40" height="40" fill="#8d6e63" />
                <rect x="430" y="120" width="40" height="40" fill="#8d6e63" />
                <rect x="470" y="120" width="40" height="40" fill="#e0e0e0" /> <!-- ND background -->
                <rect x="510" y="120" width="40" height="40" fill="#81c784" />
                <rect x="550" y="120" width="40" height="40" fill="#81c784" />
                <rect x="590" y="120" width="40" height="40" fill="#66bb6a" />
                
                <!-- Row 3 -->
                <rect x="390" y="160" width="40" height="40" fill="#8d6e63" />
                <rect x="430" y="160" width="40" height="40" fill="#8d6e63" />
                <rect x="470" y="160" width="40" height="40" fill="#a5d6a7" />
                <rect x="510" y="160" width="40" height="40" fill="#81c784" />
                <rect x="550" y="160" width="40" height="40" fill="#81c784" />
                <rect x="590" y="160" width="40" height="40" fill="#66bb6a" />
                
                <!-- Row 4 -->
                <rect x="390" y="200" width="40" height="40" fill="#8d6e63" />
                <rect x="430" y="200" width="40" height="40" fill="#8d6e63" />
                <rect x="470" y="200" width="40" height="40" fill="#a5d6a7" />
                <rect x="510" y="200" width="40" height="40" fill="#a5d6a7" />
                <rect x="550" y="200" width="40" height="40" fill="#81c784" />
                <rect x="590" y="200" width="40" height="40" fill="#81c784" />
                
                <!-- Row 5 -->
                <rect x="390" y="240" width="40" height="40" fill="#8d6e63" />
                <rect x="430" y="240" width="40" height="40" fill="#8d6e63" />
                <rect x="470" y="240" width="40" height="40" fill="#a5d6a7" />
                <rect x="510" y="240" width="40" height="40" fill="#a5d6a7" />
                <rect x="550" y="240" width="40" height="40" fill="#a5d6a7" />
                <rect x="590" y="240" width="40" height="40" fill="#a5d6a7" />
            </g>

            <!-- NoData Cell Outline and Text -->
            <rect x="470" y="120" width="40" height="40" fill="none" stroke="#005a70" stroke-width="1" />
            <text x="490" y="144" font-size="12" fill="#333" font-weight="bold" text-anchor="middle">ND</text>

            <!-- Bottom Labels -->
            <text x="390" y="300" font-size="12" fill="#333" font-weight="bold">cell</text>
            <text x="610" y="300" font-size="12" fill="#333" font-weight="bold" text-anchor="end">NoData cell (ND)</text>
            
        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 15px;">two ways to store the world</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>Vector</strong> – points, lines and polygons with exact coordinates.</li>
    <li><strong>Raster</strong> – a grid of cells, each holding a value, such as elevation or colour.</li>
    <li><strong>Resolution</strong> – the cell size of a raster; smaller cells mean more detail.</li>
    <li><strong>Topology</strong> – spatial relationships between features, such as adjacency and connectivity.</li>
    <li><strong>Metadata</strong> – data about data: source, date, CRS, accuracy and owner.</li>
    <li><strong>NoData</strong> – the value that marks cells without information.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Use vector for boundaries and assets, raster for continuous surfaces and imagery.</p>
</div>