{{-- resources/views/learning/lessons/13-20-module-recap.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The 19 topics of this module follow one working flow, from survey measurements to parcels, records, tax and a complete property management system.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Summarize the land and property workflow</li>
    <li>Connect survey, parcels, records, mapping, and revenue</li>
    <li>Complete the practice checklist to reinforce learning</li>
</ul>

<h2>Visual Guide: Module 13 Structure</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    
    <!-- Box 1: Survey -->
    <div style="width: 18%; display: flex; flex-direction: column;">
        <div style="background: #2c3e50; color: white; padding: 6px; text-align: center; font-weight: bold; border-radius: 4px 4px 0 0;">1 Survey</div>
        <div style="border: 2px solid #2c3e50; border-top: none; padding: 8px; flex-grow: 1; background: #fff; border-radius: 0 0 4px 4px;">
            13.1 Fundamentals<br><br>
            13.6 Processing<br><br>
            13.7 GNSS<br><br>
            13.8 Total station<br><br>
            13.9 Drone data
        </div>
    </div>

    <div style="display: flex; align-items: center; color: #f39c12; font-size: 18px; margin: 0 5px;">&rarr;</div>

    <!-- Box 2: Parcels -->
    <div style="width: 18%; display: flex; flex-direction: column;">
        <div style="background: #27ae60; color: white; padding: 6px; text-align: center; font-weight: bold; border-radius: 4px 4px 0 0;">2 Parcels</div>
        <div style="border: 2px solid #27ae60; border-top: none; padding: 8px; flex-grow: 1; background: #fff; border-radius: 0 0 4px 4px;">
            13.2 Cadastral GIS<br><br>
            13.3 Boundaries<br><br>
            13.4 Parcels<br><br>
            13.10 Area<br><br>
            13.11 Property ID
        </div>
    </div>

    <div style="display: flex; align-items: center; color: #f39c12; font-size: 18px; margin: 0 5px;">&rarr;</div>

    <!-- Box 3: Records -->
    <div style="width: 18%; display: flex; flex-direction: column;">
        <div style="background: #2980b9; color: white; padding: 6px; text-align: center; font-weight: bold; border-radius: 4px 4px 0 0;">3 Records</div>
        <div style="border: 2px solid #2980b9; border-top: none; padding: 8px; flex-grow: 1; background: #fff; border-radius: 0 0 4px 4px;">
            13.5 Land records<br><br><br>
            13.18 Validation
        </div>
    </div>

    <div style="display: flex; align-items: center; color: #f39c12; font-size: 18px; margin: 0 5px;">&rarr;</div>

    <!-- Box 4: Mapping -->
    <div style="width: 18%; display: flex; flex-direction: column;">
        <div style="background: #8e44ad; color: white; padding: 6px; text-align: center; font-weight: bold; border-radius: 4px 4px 0 0;">4 Mapping</div>
        <div style="border: 2px solid #8e44ad; border-top: none; padding: 8px; flex-grow: 1; background: #fff; border-radius: 0 0 4px 4px;">
            13.12 Land use<br><br>
            13.13 Footprints<br><br>
            13.15 Utilities<br><br>
            13.16 Wards, zones
        </div>
    </div>

    <div style="display: flex; align-items: center; color: #f39c12; font-size: 18px; margin: 0 5px;">&rarr;</div>

    <!-- Box 5: Revenue -->
    <div style="width: 18%; display: flex; flex-direction: column;">
        <div style="background: #d35400; color: white; padding: 6px; text-align: center; font-weight: bold; border-radius: 4px 4px 0 0;">5 Revenue</div>
        <div style="border: 2px solid #d35400; border-top: none; padding: 8px; flex-grow: 1; background: #fff; border-radius: 0 0 4px 4px;">
            13.14 Property tax<br><br>
            13.17 Revenue GIS<br><br>
            13.19 Property system
        </div>
    </div>

</div>

<div style="text-align: center; font-size: 11px; color: #d9534f; margin-bottom: 20px;">
    &larr; Survey &rarr; Map parcels &rarr; Link records &rarr; Validate &rarr; Manage and collect &rarr;
</div>

<p>
    The diagram shows the structure of Module 13. The topics follow one working flow, from survey measurements to parcels, records, tax and a complete property management system. The practice checklist below helps reinforce learning. Next up is Module 14 - GIS Project Development (planning, architecture, backend, frontend, testing and deployment).
</p>

<h2>Practice checklist</h2>
<ul>
    <li>Load survey points from a CSV as delimited text and build a parcel polygon.</li>
    <li>Digitise parcels and check them with the Topology Checker.</li>
    <li>Calculate each parcel's area in hectares with the Field Calculator and compare it with the recorded area.</li>
    <li>Join parcels to a tax table and style the arrears by ward with graduated colours.</li>
    <li>Link building footprints to parcels and list the properties that have no tax record.</li>
    <li>Build a print layout of the property map and export it as PDF.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Complete the practice checklist to reinforce the land and property concepts.</p>
</div>