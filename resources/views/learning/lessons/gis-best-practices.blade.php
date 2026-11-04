{{-- resources/views/learning/lessons/19-13-gis-best-practices.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Habits that keep GIS work accurate, repeatable and easy to share.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Organise projects cleanly</li>
    <li>Document and validate work</li>
    <li>Protect originals and back up</li>
</ul>

<h2>Visual Guide: A clean project structure</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px; font-family: sans-serif;">
        
        <div style="font-weight: bold; color: #005a70; margin-bottom: 20px; font-size: 14px;">A clean project structure</div>
        
        <svg viewBox="0 0 650 300" style="width: 100%;">
            
            <!-- Folder Tree -->
            <g font-size="12" fill="#333">
                <!-- project/ -->
                <rect x="20" y="20" width="20" height="15" fill="#f4d03f" stroke="#d4ac0d" stroke-width="1" rx="2" />
                <text x="50" y="32" font-weight="bold">project/</text>
                
                <!-- data/ -->
                <line x1="30" y1="35" x2="30" y2="80" stroke="#ccc" stroke-width="2" />
                <line x1="30" y1="50" x2="50" y2="50" stroke="#ccc" stroke-width="2" />
                <rect x="55" y="42" width="20" height="15" fill="#f4d03f" stroke="#d4ac0d" stroke-width="1" rx="2" />
                <text x="85" y="54" font-weight="bold">data/</text>

                <!-- raw/ -->
                <line x1="65" y1="57" x2="65" y2="90" stroke="#ccc" stroke-width="2" />
                <line x1="65" y1="75" x2="85" y2="75" stroke="#ccc" stroke-width="2" />
                <rect x="90" y="67" width="20" height="15" fill="#f4d03f" stroke="#d4ac0d" stroke-width="1" rx="2" />
                <text x="120" y="79">raw/ (never edited)</text>

                <!-- processed/ -->
                <line x1="65" y1="90" x2="65" y2="110" stroke="#ccc" stroke-width="2" />
                <line x1="65" y1="100" x2="85" y2="100" stroke="#ccc" stroke-width="2" />
                <rect x="90" y="92" width="20" height="15" fill="#f4d03f" stroke="#d4ac0d" stroke-width="1" rx="2" />
                <text x="120" y="104">processed/</text>

                <!-- outputs/ -->
                <line x1="30" y1="80" x2="30" y2="150" stroke="#ccc" stroke-width="2" />
                <line x1="30" y1="130" x2="50" y2="130" stroke="#ccc" stroke-width="2" />
                <rect x="55" y="122" width="20" height="15" fill="#f4d03f" stroke="#d4ac0d" stroke-width="1" rx="2" />
                <text x="85" y="134" font-weight="bold">outputs/</text>

                <!-- docs/ -->
                <line x1="30" y1="150" x2="30" y2="180" stroke="#ccc" stroke-width="2" />
                <line x1="30" y1="165" x2="50" y2="165" stroke="#ccc" stroke-width="2" />
                <rect x="55" y="157" width="20" height="15" fill="#f4d03f" stroke="#d4ac0d" stroke-width="1" rx="2" />
                <text x="85" y="169" font-weight="bold">docs/ (metadata, notes)</text>

                <!-- project.qgz -->
                <line x1="30" y1="180" x2="30" y2="210" stroke="#ccc" stroke-width="2" />
                <line x1="30" y1="200" x2="50" y2="200" stroke="#ccc" stroke-width="2" />
                <rect x="55" y="192" width="20" height="15" fill="#fff" stroke="#005a70" stroke-width="2" rx="2" />
                <text x="85" y="204" font-weight="bold">project.qgz</text>
            </g>

            <!-- Right Side Checkboxes -->
            <g transform="translate(280, 20)">
                <rect x="0" y="0" width="350" height="40" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="6" />
                <circle cx="20" cy="20" r="10" fill="#2ecc71" />
                <path d="M 15 20 L 18 23 L 25 16" fill="none" stroke="#fff" stroke-width="2" />
                <text x="40" y="25" font-size="13" fill="#333" font-weight="bold">Originals untouched</text>

                <rect x="0" y="55" width="350" height="40" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="6" />
                <circle cx="20" cy="75" r="10" fill="#2ecc71" />
                <path d="M 15 75 L 18 78 L 25 71" fill="none" stroke="#fff" stroke-width="2" />
                <text x="40" y="80" font-size="13" fill="#333" font-weight="bold">Clear, consistent names</text>

                <rect x="0" y="110" width="350" height="40" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="6" />
                <circle cx="20" cy="130" r="10" fill="#2ecc71" />
                <path d="M 15 130 L 18 133 L 25 126" fill="none" stroke="#fff" stroke-width="2" />
                <text x="40" y="135" font-size="13" fill="#333" font-weight="bold">Documented steps</text>

                <rect x="0" y="165" width="350" height="40" fill="#fff" stroke="#2ecc71" stroke-width="2" rx="6" />
                <circle cx="20" cy="185" r="10" fill="#2ecc71" />
                <path d="M 15 185 L 18 188 L 25 181" fill="none" stroke="#fff" stroke-width="2" />
                <text x="40" y="190" font-size="13" fill="#333" font-weight="bold">Tested backups</text>
            </g>
        </svg>
        
        <div style="text-align: center; font-size: 12px; color: #d9534f; margin-top: 15px; font-weight: bold;">A clean project structure</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>Plan the CRS</strong> – choose a projected CRS for the study area and use it consistently.</li>
    <li><strong>Keep originals untouched</strong> – work on copies and write results to new files.</li>
    <li><strong>Name and organise</strong> – clear names, one folder per project, a version in file names.</li>
    <li><strong>Document</strong> – metadata, a data dictionary and the steps of each analysis.</li>
    <li><strong>Validate</strong> – check geometry, topology and attributes after every edit.</li>
    <li><strong>Back up</strong> – regular, tested backups of data and projects.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Treat a project as something another person must be able to open and understand.</p>
</div>