{{-- resources/views/learning/lessons/13-12-land-use-mapping.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Land use maps show how land is used: homes, shops, industry, farms, public buildings and open space.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Distinguish land use from land cover</li>
    <li>Know typical land use classes</li>
    <li>Style a land use map</li>
</ul>

<h2>Visual Guide: Land use map</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Land use map</div>
        
        <svg viewBox="0 0 450 220" style="width: 100%; font-family: sans-serif;">
            <rect x="20" y="20" width="80" height="80" fill="#f4d03f" stroke="#333" stroke-width="1" />
            <rect x="100" y="20" width="80" height="80" fill="#e8a5a5" stroke="#333" stroke-width="1" />
            <rect x="180" y="20" width="120" height="80" fill="#a584c5" stroke="#333" stroke-width="1" />
            
            <rect x="20" y="100" width="100" height="100" fill="#7cbe7c" stroke="#333" stroke-width="1" />
            <rect x="120" y="100" width="80" height="100" fill="#f4d03f" stroke="#333" stroke-width="1" />
            <rect x="200" y="100" width="50" height="100" fill="#a5d6f4" stroke="#333" stroke-width="1" />
            <rect x="250" y="100" width="50" height="100" fill="#d5f4d5" stroke="#333" stroke-width="1" />
            
            <rect x="330" y="20" width="20" height="20" fill="#f4d03f" stroke="#333" stroke-width="1" />
            <text x="360" y="35" font-size="12" fill="#333">Residential</text>
            
            <rect x="330" y="50" width="20" height="20" fill="#e8a5a5" stroke="#333" stroke-width="1" />
            <text x="360" y="65" font-size="12" fill="#333">Commercial</text>
            
            <rect x="330" y="80" width="20" height="20" fill="#a584c5" stroke="#333" stroke-width="1" />
            <text x="360" y="95" font-size="12" fill="#333">Industrial</text>
            
            <rect x="330" y="110" width="20" height="20" fill="#7cbe7c" stroke="#333" stroke-width="1" />
            <text x="360" y="125" font-size="12" fill="#333">Agricultural</text>
            
            <rect x="330" y="140" width="20" height="20" fill="#a5d6f4" stroke="#333" stroke-width="1" />
            <text x="360" y="155" font-size="12" fill="#333">Public</text>
            
            <rect x="330" y="170" width="20" height="20" fill="#d5f4d5" stroke="#333" stroke-width="1" />
            <text x="360" y="185" font-size="12" fill="#333">Open space</text>
        </svg>
    </div>
</div>

<p>
    The diagram shows a land use map. Land use is what the land is used for; land cover is the physical surface. Typical classes include residential, commercial, industrial, agricultural, public and open space. Sources include field survey, drone or satellite images and official records. Store it as a code field with a fixed list of values. Style with Categorized symbology: one colour per class, plus a legend.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Land use or land cover?</strong> Land use is what the land is used for; land cover is the physical surface.</li>
    <li><strong>What are typical classes?</strong> Residential, commercial, industrial, agricultural, public and open space.</li>
    <li><strong>What sources are used?</strong> Field survey, drone or satellite images and official records.</li>
    <li><strong>How is it stored?</strong> Store it as a code field with a fixed list of values.</li>
    <li><strong>How is it styled?</strong> Use Categorized symbology: one colour per class, plus a legend.</li>
    <li><strong>What are the uses?</strong> Planning, tax rates, zoning checks and finding change over time.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use a fixed code list so every surveyor enters the same values.</p>
</div>