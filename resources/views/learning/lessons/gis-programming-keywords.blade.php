{{-- resources/views/learning/lessons/19-9-gis-programming-keywords.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Library objects and functions that appear most often in Python GIS scripts.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know the Python GIS stack</li>
    <li>Understand GeoPandas and Shapely</li>
    <li>Read and write spatial data</li>
</ul>

<h2>Visual Guide: How the Python GIS libraries fit together</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">How the Python GIS libraries fit together</div>
        
        <svg viewBox="0 0 650 320" style="width: 100%; font-family: sans-serif;">
            
            <text x="325" y="25" font-size="13" fill="#005a70" font-weight="bold" text-anchor="middle">Python GIS stack</text>

            <!-- Top Layer -->
            <rect x="150" y="50" width="470" height="60" fill="#fff" stroke="#005a70" stroke-width="2" rx="6" />
            <text x="385" y="75" font-size="16" fill="#005a70" font-weight="bold" text-anchor="middle">GeoPandas</text>
            <text x="385" y="95" font-size="11" fill="#666" text-anchor="middle">GeoDataFrame = pandas table + geometry</text>

            <rect x="10" y="50" width="120" height="60" fill="#fff" stroke="#666" stroke-width="2" rx="6" />
            <text x="70" y="75" font-size="13" fill="#666" font-weight="bold" text-anchor="middle">NumPy</text>
            <text x="70" y="95" font-size="11" fill="#666" text-anchor="middle">arrays</text>

            <!-- Arrows Up -->
            <line x1="70" y1="110" x2="70" y2="130" stroke="#f07b24" stroke-width="2" />
            <polygon points="70,130 65,120 75,120" fill="#f07b24" />

            <line x1="250" y1="110" x2="250" y2="130" stroke="#f07b24" stroke-width="2" />
            <polygon points="250,130 245,120 255,120" fill="#f07b24" />

            <line x1="385" y1="110" x2="385" y2="130" stroke="#f07b24" stroke-width="2" />
            <polygon points="385,130 380,120 390,120" fill="#f07b24" />

            <line x1="520" y1="110" x2="520" y2="130" stroke="#f07b24" stroke-width="2" />
            <polygon points="520,130 515,120 525,120" fill="#f07b24" />

            <!-- Bottom Layer -->
            <rect x="10" y="140" width="120" height="60" fill="#fff" stroke="#8e44ad" stroke-width="2" rx="6" />
            <text x="70" y="165" font-size="13" fill="#8e44ad" font-weight="bold" text-anchor="middle">Rasterio</text>
            <text x="70" y="185" font-size="11" fill="#666" text-anchor="middle">rasters</text>

            <rect x="150" y="140" width="170" height="60" fill="#fff" stroke="#2980b9" stroke-width="2" rx="6" />
            <text x="235" y="165" font-size="13" fill="#2980b9" font-weight="bold" text-anchor="middle">Fiona / Pyogrio</text>
            <text x="235" y="185" font-size="11" fill="#666" text-anchor="middle">vector I/O</text>

            <rect x="340" y="140" width="140" height="60" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="6" />
            <text x="410" y="165" font-size="13" fill="#2ecc71" font-weight="bold" text-anchor="middle">PyProj</text>
            <text x="410" y="185" font-size="11" fill="#666" text-anchor="middle">coordinate systems</text>

            <rect x="500" y="140" width="140" height="60" fill="#fff" stroke="#f07b24" stroke-width="2" rx="6" />
            <text x="570" y="165" font-size="13" fill="#f07b24" font-weight="bold" text-anchor="middle">Shapely</text>
            <text x="570" y="185" font-size="11" fill="#666" text-anchor="middle">geometries</text>

            <!-- Arrows Up from Bottom layer to Top layer -->
            <line x1="410" y1="140" x2="410" y2="110" stroke="#f07b24" stroke-width="2" />
            <polygon points="410,110 405,120 415,120" fill="#f07b24" />

            <!-- GDAL Base -->
            <rect x="10" y="230" width="630" height="50" fill="#005a70" rx="6" />
            <text x="325" y="260" font-size="14" fill="#fff" font-weight="bold" text-anchor="middle">GDAL / OGR / PROJ (C/C++ engines)</text>

            <!-- Arrows Up from GDAL to Bottom Layer -->
            <line x1="70" y1="230" x2="70" y2="210" stroke="#f07b24" stroke-width="2" />
            <polygon points="70,210 65,220 75,220" fill="#f07b24" />
            
            <line x1="235" y1="230" x2="235" y2="210" stroke="#f07b24" stroke-width="2" />
            <polygon points="235,210 230,220 240,220" fill="#f07b24" />
            
            <line x1="410" y1="230" x2="410" y2="210" stroke="#f07b24" stroke-width="2" />
            <polygon points="410,210 405,220 415,220" fill="#f07b24" />
            
            <line x1="570" y1="230" x2="570" y2="210" stroke="#f07b24" stroke-width="2" />
            <polygon points="570,210 565,220 575,220" fill="#f07b24" />

        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">engines at the bottom, convenience on top</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>GeoDataFrame</strong> – a pandas table with a geometry column (GeoPandas).</li>
    <li><strong>read_file / to_file</strong> – read and write vector data in GeoPandas.</li>
    <li><strong>to_crs</strong> – reproject the data; set_crs only labels a layer whose CRS is missing.</li>
    <li><strong>sjoin, overlay, dissolve</strong> – spatial join, overlay and merge-by-attribute in GeoPandas.</li>
    <li><strong>Shapely geometries</strong> – Point, LineString and Polygon with buffer, intersection and union.</li>
    <li><strong>rasterio.open</strong> – opens a raster; read(1) returns band 1 as an array.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Print the CRS and the feature count after every step of a script.</p>
</div>