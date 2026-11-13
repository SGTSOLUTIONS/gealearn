{{-- resources/views/learning/lessons/16-9-build-property-mapping-system.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A property mapping system links parcel polygons to owner and tax records so one click shows everything about a property.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Join tables to spatial data</li>
    <li>Style parcels by land use</li>
    <li>Show attributes with map tips</li>
</ul>

<h2>Visual Guide: A parcel linked to its record</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 600px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">A parcel linked to its record</div>
        
        <svg viewBox="0 0 600 250" style="width: 100%;">
            <!-- Parcel Polygon -->
            <polygon points="50,50 220,30 240,200 70,220" fill="#fdf0e0" stroke="#005a70" stroke-width="3" />
            <text x="145" y="125" font-size="18" fill="#005a70" font-weight="bold" text-anchor="middle">P101</text>
            
            <!-- Link Line -->
            <line x1="240" y1="125" x2="290" y2="125" stroke="#f07b24" stroke-width="3" stroke-dasharray="6,4" />
            <circle cx="290" cy="125" r="5" fill="#f07b24" />
            <text x="260" y="115" font-size="12" fill="#f07b24" text-anchor="middle">parcel_id</text>

            <!-- Record Table -->
            <rect x="310" y="40" width="260" height="170" fill="#fff" stroke="#005a70" stroke-width="2" rx="4" />
            <rect x="310" y="40" width="260" height="25" fill="#005a70" rx="4" />
            <text x="440" y="57" font-size="12" fill="#fff" font-weight="bold" text-anchor="middle">LAND RECORD</text>

            <text x="325" y="85" font-size="11" fill="#333" font-weight="bold">Parcel</text>
            <text x="450" y="85" font-size="11" fill="#333">P101</text>

            <text x="325" y="105" font-size="11" fill="#333" font-weight="bold">Owner</text>
            <text x="450" y="105" font-size="11" fill="#333">R. Kumar</text>

            <text x="325" y="125" font-size="11" fill="#333" font-weight="bold">Survey no</text>
            <text x="450" y="125" font-size="11" fill="#333">45/2</text>

            <text x="325" y="145" font-size="11" fill="#333" font-weight="bold">Area</text>
            <text x="450" y="145" font-size="11" fill="#333">450 m&sup2;</text>

            <text x="325" y="165" font-size="11" fill="#333" font-weight="bold">Use</text>
            <text x="450" y="165" font-size="11" fill="#333">Residential</text>

            <text x="325" y="185" font-size="11" fill="#333" font-weight="bold">Valid from</text>
            <text x="450" y="185" font-size="11" fill="#333">2024-01-10</text>
        </svg>
    </div>
</div>

<h2>Steps</h2>
<div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Create the parcels layer with a unique <strong>parcel ID</strong> field.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Load the owner or tax table (CSV or database) as a table <strong>without geometry</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Use <strong>Layer Properties > Joins</strong> to join the table to the parcels by <strong>parcel ID</strong>.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Style the parcels by land use and label them with the parcel ID.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Set up <strong>Map Tips</strong> or the Identify tool to show owner, area and status on click.</div>
    </div>
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 22px; height: 22px; border-radius: 50%; text-align: center; line-height: 22px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Save the project and share it as a layout, a GeoPackage or a web map.</div>
    </div>
</div>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> A unique, permanent parcel ID is the key to the whole system: settle it first.</p>
</div>