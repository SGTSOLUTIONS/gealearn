{{-- resources/views/learning/lessons/16-3-convert-csv-to-spatial-data.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A CSV file with longitude and latitude columns can be turned into a point layer.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Prepare a CSV with coordinates</li>
    <li>Add it as a delimited text layer</li>
    <li>Export the result as a spatial layer</li>
</ul>

<h2>Visual Guide: CSV table to point layer</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">CSV table to point layer</div>
        
        <svg viewBox="0 0 600 300" style="width: 100%;">
            <!-- CSV Table -->
            <rect x="20" y="20" width="220" height="150" fill="#fff" stroke="#005a70" stroke-width="2" />
            <rect x="20" y="20" width="220" height="25" fill="#005a70" />
            <text x="45" y="37" font-size="11" fill="#fff" font-weight="bold" text-anchor="middle">name</text>
            <text x="115" y="37" font-size="11" fill="#fff" font-weight="bold" text-anchor="middle">lon</text>
            <text x="185" y="37" font-size="11" fill="#fff" font-weight="bold" text-anchor="middle">lat</text>
            
            <text x="45" y="65" font-size="10" fill="#333" text-anchor="middle">School A</text>
            <text x="115" y="65" font-size="10" fill="#333" text-anchor="middle">80.21</text>
            <text x="185" y="65" font-size="10" fill="#333" text-anchor="middle">13.05</text>
            <line x1="20" y1="75" x2="240" y2="75" stroke="#eee" />
            
            <text x="45" y="90" font-size="10" fill="#333" text-anchor="middle">School B</text>
            <text x="115" y="90" font-size="10" fill="#333" text-anchor="middle">80.24</text>
            <text x="185" y="90" font-size="10" fill="#333" text-anchor="middle">13.09</text>
            <line x1="20" y1="100" x2="240" y2="100" stroke="#eee" />
            
            <text x="45" y="115" font-size="10" fill="#333" text-anchor="middle">Clinic C</text>
            <text x="115" y="115" font-size="10" fill="#333" text-anchor="middle">80.19</text>
            <text x="185" y="115" font-size="10" fill="#333" text-anchor="middle">13.11</text>
            <line x1="20" y1="125" x2="240" y2="125" stroke="#eee" />
            
            <text x="45" y="140" font-size="10" fill="#333" text-anchor="middle">Market D</text>
            <text x="115" y="140" font-size="10" fill="#333" text-anchor="middle">80.27</text>
            <text x="185" y="140" font-size="10" fill="#333" text-anchor="middle">13.03</text>

            <text x="130" y="190" font-size="12" fill="#666" font-weight="bold" text-anchor="middle">places.csv</text>
            <text x="130" y="210" font-size="11" fill="#d9534f" text-anchor="middle">X = longitude, Y = latitude</text>

            <!-- Arrow -->
            <path d="M 260 100 L 310 100" stroke="#f07b24" stroke-width="3" />
            <polygon points="310,100 300,95 300,105" fill="#f07b24" />

            <!-- Point Map -->
            <rect x="320" y="20" width="260" height="220" fill="#fdf8f4" stroke="#ccc" stroke-width="1" />
            
            <!-- Roads -->
            <line x1="320" y1="80" x2="580" y2="100" stroke="#fff" stroke-width="4" />
            <line x1="380" y1="20" x2="400" y2="240" stroke="#fff" stroke-width="4" />
            
            <!-- Points -->
            <!-- Point A -->
            <path d="M 350 80 C 340 80, 340 95, 350 100 C 360 95, 360 80, 350 80 Z" fill="#d9534f" />
            <circle cx="350" cy="85" r="2" fill="#fff" />
            <text x="365" y="90" font-size="14" fill="#005a70" font-weight="bold">A</text>

            <!-- Point B -->
            <path d="M 450 60 C 440 60, 440 75, 450 80 C 460 75, 460 60, 450 60 Z" fill="#d9534f" />
            <circle cx="450" cy="65" r="2" fill="#fff" />
            <text x="465" y="70" font-size="14" fill="#005a70" font-weight="bold">B</text>

            <!-- Point C -->
            <path d="M 390 110 C 380 110, 380 125, 390 130 C 400 125, 400 110, 390 110 Z" fill="#d9534f" />
            <circle cx="390" cy="115" r="2" fill="#fff" />
            <text x="405" y="120" font-size="14" fill="#005a70" font-weight="bold">C</text>

            <!-- Point D -->
            <path d="M 520 160 C 510 160, 510 175, 520 180 C 530 175, 530 160, 520 160 Z" fill="#d9534f" />
            <circle cx="520" cy="165" r="2" fill="#fff" />
            <text x="535" y="170" font-size="14" fill="#005a70" font-weight="bold">D</text>

            <text x="450" y="260" font-size="12" fill="#005a70" font-weight="bold" text-anchor="middle">point layer, EPSG:4326</text>
        </svg>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Prepare the CSV with a header row and numeric longitude and latitude columns (dots as decimals).</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Open <strong>Layer > Add Layer > Add Delimited Text Layer</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Choose CSV as the file format and select <strong>Point coordinates</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Set X field = <strong>longitude</strong>, Y field = <strong>latitude</strong> and Geometry CRS = <strong>EPSG:4326</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Click <strong>Add</strong>: the points appear on the map.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Make it permanent with right-click > <strong>Export > Save Features As</strong> (GeoPackage or shapefile).</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Points in the wrong ocean usually mean X and Y are swapped.</p>
</div>