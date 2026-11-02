{{-- resources/views/learning/lessons/13-6-survey-data-processing.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Raw survey points are cleaned, checked and converted into GIS layers.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Import survey CSV files</li>
    <li>Clean and check survey data</li>
    <li>Convert points to lines and polygons</li>
</ul>

<h2>Visual Guide: Survey CSV to polygon</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 20px 10px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 25px; font-size: 13px;">Survey CSV to polygon</div>
        
        <svg viewBox="0 0 650 270" style="width: 100%;">
            
            <!-- Table Background -->
            <rect x="20" y="10" width="240" height="200" fill="#ffffff" stroke="#005a70" stroke-width="2" />
            
            <!-- Table Header Background -->
            <rect x="20" y="10" width="240" height="30" fill="#005a70" />
            
            <!-- Vertical Column Lines -->
            <line x1="80" y1="10" x2="80" y2="210" stroke="#e0e0e0" stroke-width="1" />
            <line x1="140" y1="10" x2="140" y2="210" stroke="#e0e0e0" stroke-width="1" />
            <line x1="195" y1="10" x2="195" y2="210" stroke="#e0e0e0" stroke-width="1" />

            <!-- Horizontal Row Lines -->
            <line x1="20" y1="40" x2="260" y2="40" stroke="#005a70" stroke-width="1" />
            <line x1="20" y1="72" x2="260" y2="72" stroke="#e0e0e0" stroke-width="1" />
            <line x1="20" y1="104" x2="260" y2="104" stroke="#e0e0e0" stroke-width="1" />
            <line x1="20" y1="136" x2="260" y2="136" stroke="#e0e0e0" stroke-width="1" />
            <line x1="20" y1="168" x2="260" y2="168" stroke="#e0e0e0" stroke-width="1" />
            <line x1="20" y1="210" x2="260" y2="210" stroke="#005a70" stroke-width="2" />

            <!-- Header Text -->
            <text x="50" y="30" font-size="12" fill="#ffffff" font-weight="bold" text-anchor="middle">id</text>
            <text x="110" y="30" font-size="12" fill="#ffffff" font-weight="bold" text-anchor="middle">x</text>
            <text x="167" y="30" font-size="12" fill="#ffffff" font-weight="bold" text-anchor="middle">y</text>
            <text x="227" y="30" font-size="12" fill="#ffffff" font-weight="bold" text-anchor="middle">code</text>
            
            <!-- Row 1 -->
            <text x="50" y="61" font-size="12" fill="#333" text-anchor="middle">1</text>
            <text x="110" y="61" font-size="12" fill="#333" text-anchor="middle">1000</text>
            <text x="167" y="61" font-size="12" fill="#333" text-anchor="middle">2000</text>
            <text x="227" y="61" font-size="12" fill="#333" text-anchor="middle">CORNER</text>
            
            <!-- Row 2 -->
            <text x="50" y="93" font-size="12" fill="#333" text-anchor="middle">2</text>
            <text x="110" y="93" font-size="12" fill="#333" text-anchor="middle">1042</text>
            <text x="167" y="93" font-size="12" fill="#333" text-anchor="middle">2003</text>
            <text x="227" y="93" font-size="12" fill="#333" text-anchor="middle">CORNER</text>
            
            <!-- Row 3 -->
            <text x="50" y="125" font-size="12" fill="#333" text-anchor="middle">3</text>
            <text x="110" y="125" font-size="12" fill="#333" text-anchor="middle">1040</text>
            <text x="167" y="125" font-size="12" fill="#333" text-anchor="middle">2038</text>
            <text x="227" y="125" font-size="12" fill="#333" text-anchor="middle">CORNER</text>
            
            <!-- Row 4 -->
            <text x="50" y="157" font-size="12" fill="#333" text-anchor="middle">4</text>
            <text x="110" y="157" font-size="12" fill="#333" text-anchor="middle">1001</text>
            <text x="167" y="157" font-size="12" fill="#333" text-anchor="middle">2035</text>
            <text x="227" y="157" font-size="12" fill="#333" text-anchor="middle">CORNER</text>
            
            <!-- Row 5 -->
            <text x="50" y="193" font-size="12" fill="#333" text-anchor="middle">5</text>
            <text x="110" y="193" font-size="12" fill="#333" text-anchor="middle">1020</text>
            <text x="167" y="193" font-size="12" fill="#333" text-anchor="middle">2018</text>
            <text x="227" y="193" font-size="12" fill="#333" text-anchor="middle">TREE</text>

            <!-- Table Label -->
            <text x="140" y="240" font-size="12" fill="#666" font-family="monospace" text-anchor="middle">survey.csv</text>

            <!-- Arrow -->
            <path d="M 290 110 L 330 110" stroke="#f07b24" stroke-width="3" />
            <polygon points="330,110 320,104 320,116" fill="#f07b24" />

            <!-- Polygon Section -->
            <text x="500" y="30" font-size="14" fill="#f07b24" font-weight="bold" text-anchor="middle">points to polygon</text>
            
            <!-- Polygon shape -->
            <polygon points="410,80 540,60 560,190 420,210" fill="#eef4f0" stroke="#005a70" stroke-width="3" />
            
            <!-- Corner Nodes -->
            <circle cx="410" cy="80" r="6" fill="#005a70" />
            <circle cx="540" cy="60" r="6" fill="#005a70" />
            <circle cx="560" cy="190" r="6" fill="#005a70" />
            <circle cx="420" cy="210" r="6" fill="#005a70" />
            
            <!-- Node Labels -->
            <text x="395" y="75" font-size="12" fill="#005a70" font-weight="bold">4</text>
            <text x="550" y="55" font-size="12" fill="#005a70" font-weight="bold">3</text>
            <text x="570" y="205" font-size="12" fill="#005a70" font-weight="bold">2</text>
            <text x="400" y="225" font-size="12" fill="#005a70" font-weight="bold">1</text>

            <!-- Tree Marker -->
            <circle cx="485" cy="135" r="5" fill="#4caf50" />
            <text x="495" y="140" font-size="12" fill="#4caf50" text-anchor="start">tree</text>
        </svg>
        
    </div>
</div>

<p>
    The diagram shows survey data processing. Survey files hold point id, x, y, height and a feature code (e.g. CORNER, ROAD). Import the CSV as delimited text and choose the correct CRS. Clean duplicate ids, missing heights, wrong codes and gross errors. Feature codes decide which points join into lines or polygons. Check quality with closure error, repeat measurements and known points.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What do survey files hold?</strong> Point id, x, y, height and a feature code (e.g. CORNER, ROAD).</li>
    <li><strong>How do I import?</strong> Import the CSV as delimited text and choose the correct CRS.</li>
    <li><strong>What do I need to clean?</strong> Duplicate ids, missing heights, wrong codes and gross errors.</li>
    <li><strong>How do feature codes help?</strong> They decide which points join into lines or polygons.</li>
    <li><strong>How do I check quality?</strong> With closure error, repeat measurements and known points.</li>
    <li><strong>What is the golden rule?</strong> Keep the raw file untouched and work on a copy.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep the raw file untouched and work on a copy.</p>
</div>