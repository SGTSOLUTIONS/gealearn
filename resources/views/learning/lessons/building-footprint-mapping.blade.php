{{-- resources/views/learning/lessons/13-13-building-footprint-mapping.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Building footprints are the outlines of buildings. They show what is built on each parcel and how large it is.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand building footprints</li>
    <li>Capture building attributes</li>
    <li>Link buildings to parcels</li>
</ul>

<h2>Visual Guide: Buildings inside parcels</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 500px; display: flex; flex-direction: column; align-items: center; background: #f4f7f6; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px; font-size: 13px;">Buildings inside parcels</div>
        
        <svg viewBox="0 0 450 220" style="width: 100%; font-family: sans-serif;">
            <rect x="20" y="20" width="120" height="90" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <rect x="40" y="35" width="80" height="60" fill="#999" stroke="#333" stroke-width="1" />
            <rect x="35" y="30" width="90" height="70" fill="none" stroke="#f07b24" stroke-width="2" />
            <text x="80" y="70" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">2 fl</text>

            <rect x="160" y="20" width="120" height="90" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <rect x="185" y="35" width="70" height="60" fill="#999" stroke="#333" stroke-width="1" />
            <rect x="180" y="30" width="80" height="70" fill="none" stroke="#f07b24" stroke-width="2" />
            <text x="220" y="70" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">1 fl</text>

            <rect x="300" y="20" width="120" height="90" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <rect x="330" y="40" width="60" height="50" fill="#999" stroke="#333" stroke-width="1" />
            <rect x="325" y="35" width="70" height="60" fill="none" stroke="#f07b24" stroke-width="2" />

            <rect x="20" y="130" width="170" height="80" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <rect x="50" y="145" width="110" height="50" fill="#999" stroke="#333" stroke-width="1" />
            <rect x="45" y="140" width="120" height="60" fill="none" stroke="#f07b24" stroke-width="2" />

            <rect x="210" y="130" width="210" height="80" fill="#fdf0e0" stroke="#005a70" stroke-width="2" />
            <rect x="230" y="145" width="120" height="50" fill="#999" stroke="#333" stroke-width="1" />
            <rect x="225" y="140" width="130" height="60" fill="none" stroke="#f07b24" stroke-width="2" />

            <rect x="370" y="135" width="15" height="15" fill="none" stroke="#f07b24" stroke-width="2" />
            <text x="390" y="145" font-size="10" fill="#f07b24">roof outline</text>

            <rect x="370" y="160" width="15" height="15" fill="#999" stroke="#333" stroke-width="1" />
            <text x="390" y="170" font-size="10" fill="#333">wall line</text>
        </svg>
        <div style="text-align: center; font-size: 10px; color: #d9534f; margin-top: 5px;">roof outline is not the wall line</div>
    </div>
</div>

<p>
    The diagram shows buildings inside parcels. A footprint is the outline of a building on the ground. Capture by tracing a drone or satellite image, or with an automatic detection tool. Useful attributes: number of floors, use, height, construction type and year. Link a building to its parcel with Join attributes by location. Floor area = footprint area x number of floors. A roof outline is larger than the wall line: note which one you map.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a footprint?</strong> The outline of a building on the ground.</li>
    <li><strong>How do I capture it?</strong> By tracing a drone or satellite image, or with an automatic detection tool.</li>
    <li><strong>What attributes are useful?</strong> Number of floors, use, height, construction type and year.</li>
    <li><strong>How do I link buildings to parcels?</strong> Use Join attributes by location.</li>
    <li><strong>How is floor area calculated?</strong> Floor area = footprint area x number of floors.</li>
    <li><strong>Roof or wall?</strong> A roof outline is larger than the wall line: note which one you map.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Roof outlines are larger than walls: note which one you map.</p>
</div>