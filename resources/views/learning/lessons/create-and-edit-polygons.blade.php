{{-- resources/views/learning/lessons/16-4-create-edit-polygons.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Digitising draws new polygons and edits existing ones in a layer.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a new polygon layer</li>
    <li>Digitise and edit polygons</li>
    <li>Use snapping and save edits</li>
</ul>

<h2>Visual Guide: Digitising and vertex editing</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">Digitising and vertex editing</div>
        
        <svg viewBox="0 0 600 300" style="width: 100%;">
            <!-- Toolbox -->
            <rect x="20" y="20" width="80" height="220" fill="#fff" stroke="#ccc" stroke-width="1" rx="4" />
            
            <!-- Edit Tool -->
            <rect x="30" y="30" width="60" height="40" fill="#f07b24" rx="4" />
            <path d="M 50 50 L 60 40 L 70 50 L 60 60 Z" fill="#fff" />
            <text x="60" y="80" font-size="10" fill="#f07b24" font-weight="bold" text-anchor="middle">Edit</text>
            
            <!-- Add Tool -->
            <rect x="30" y="90" width="60" height="40" fill="#fff" stroke="#005a70" stroke-width="1" rx="4" />
            <polygon points="60,100 70,120 50,120" fill="#005a70" />
            <text x="60" y="140" font-size="10" fill="#005a70" font-weight="bold" text-anchor="middle">Add</text>

            <!-- Vertex Tool -->
            <rect x="30" y="150" width="60" height="40" fill="#fff" stroke="#005a70" stroke-width="1" rx="4" />
            <circle cx="60" cy="165" r="3" fill="#005a70" />
            <line x1="60" y1="165" x2="70" y2="175" stroke="#005a70" stroke-width="2" />
            <text x="60" y="200" font-size="10" fill="#005a70" font-weight="bold" text-anchor="middle">Vertex</text>

            <!-- Save Tool -->
            <rect x="30" y="210" width="60" height="20" fill="#f0f0f0" stroke="#005a70" stroke-width="1" rx="4" />
            <rect x="45" y="215" width="30" height="10" fill="#005a70" />
            <text x="60" y="245" font-size="10" fill="#005a70" font-weight="bold" text-anchor="middle">Save</text>

            <!-- Main Map Area -->
            <rect x="120" y="20" width="460" height="240" fill="#eef4f0" stroke="#ccc" stroke-width="1" />
            
            <!-- Polygon -->
            <polygon points="200,80 350,40 450,100 480,200 320,240 160,180" fill="#fdf0e0" stroke="#005a70" stroke-width="3" />
            
            <!-- Vertices -->
            <rect x="195" y="75" width="10" height="10" fill="#005a70" />
            <rect x="345" y="35" width="10" height="10" fill="#005a70" />
            <rect x="445" y="95" width="10" height="10" fill="#005a70" />
            <rect x="475" y="195" width="10" height="10" fill="#005a70" />
            <rect x="315" y="235" width="10" height="10" fill="#005a70" />
            <rect x="155" y="175" width="10" height="10" fill="#005a70" />

            <!-- Add Vertex Icon -->
            <circle cx="280" cy="100" r="8" fill="#fff" stroke="#f07b24" stroke-width="2" />
            <line x1="280" y1="95" x2="280" y2="105" stroke="#f07b24" stroke-width="2" />
            <line x1="275" y1="100" x2="285" y2="100" stroke="#f07b24" stroke-width="2" />

            <circle cx="410" cy="70" r="8" fill="#fff" stroke="#f07b24" stroke-width="2" />
            <line x1="410" y1="65" x2="410" y2="75" stroke="#f07b24" stroke-width="2" />
            <line x1="405" y1="70" x2="415" y2="70" stroke="#f07b24" stroke-width="2" />

            <!-- Drag Vertex Arrow -->
            <line x1="480" y1="200" x2="520" y2="220" stroke="#d9534f" stroke-width="2" />
            <polygon points="520,220 510,215 515,210" fill="#d9534f" />
            <text x="500" y="245" font-size="12" fill="#d9534f" font-weight="bold" text-anchor="middle">drag a vertex</text>

            <!-- Text -->
            <text x="320" y="160" font-size="14" fill="#005a70" font-weight="bold" text-anchor="middle">edited polygon</text>
        </svg>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">edit, add, move, save</div>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Create a layer: <strong>Layer > Create Layer > New GeoPackage Layer</strong>, geometry type Polygon, with your CRS and fields.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Click <strong>Toggle Editing</strong> (the pencil) for that layer.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Use <strong>Add Polygon Feature</strong>: left-click the corners, right-click to finish, then fill in the attribute form.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Use the <strong>Vertex Tool</strong> to move, add or delete the corners of existing polygons.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Turn on snapping (<strong>Project > Snapping Options</strong>) so neighbours share exact corners.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Click <strong>Save Layer Edits</strong>, then switch editing off.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Save often; Ctrl+Z undoes a wrong click.</p>
</div>