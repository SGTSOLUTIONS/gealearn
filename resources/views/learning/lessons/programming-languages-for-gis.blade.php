
{{-- resources/views/learning/lessons/8-2-languages.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GIS uses different programming languages to manage geographic data,
    perform spatial analysis, build interactive maps and develop GIS software.
    Each language has its own strengths, so the right choice depends on the task.
</p>

<h2>Learning Goals</h2>
<ul>
    <li>Identify the main programming languages used in GIS</li>
    <li>Understand how each language supports GIS tasks</li>
    <li>Select a suitable language for different GIS applications</li>
</ul>

<h2>Programming Languages Used in GIS</h2>

<p>
    The following languages are commonly used in GIS development.
    Some are used to analyse geographic data, while others manage databases,
    create web maps or build the software that powers GIS applications.
</p>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 16px; margin: 22px 0;">

    <div style="border: 1px solid #dbe2ea; border-radius: 8px; overflow: hidden; background: #fff;">
        <div style="padding: 13px 16px; background: #1e293b; color: #fff;">
            <strong style="font-size: 17px;">Python</strong>
            <div style="font-size: 12px; color: #cbd5e1; margin-top: 4px;">Analysis and automation</div>
        </div>
        <div style="padding: 16px;">
            <p style="margin-top: 0;">Python is widely used to automate GIS tasks, process geographic data and create custom tools.</p>
            <strong>Common libraries</strong>
            <p style="margin-bottom: 0; color: #475569;">GeoPandas, PyQGIS, ArcPy and Rasterio</p>
        </div>
    </div>

    <div style="border: 1px solid #dbe2ea; border-radius: 8px; overflow: hidden; background: #fff;">
        <div style="padding: 13px 16px; background: #047857; color: #fff;">
            <strong style="font-size: 17px;">SQL</strong>
            <div style="font-size: 12px; color: #d1fae5; margin-top: 4px;">Database management</div>
        </div>
        <div style="padding: 16px;">
            <p style="margin-top: 0;">SQL is used to store, retrieve, filter and manage geographic information in spatial databases.</p>
            <strong>Common technologies</strong>
            <p style="margin-bottom: 0; color: #475569;">PostGIS, PostgreSQL and MySQL</p>
        </div>
    </div>

    <div style="border: 1px solid #dbe2ea; border-radius: 8px; overflow: hidden; background: #fff;">
        <div style="padding: 13px 16px; background: #c2410c; color: #fff;">
            <strong style="font-size: 17px;">JavaScript</strong>
            <div style="font-size: 12px; color: #ffedd5; margin-top: 4px;">Interactive web mapping</div>
        </div>
        <div style="padding: 16px;">
            <p style="margin-top: 0;">JavaScript helps create interactive maps that users can explore through a web browser.</p>
            <strong>Common libraries</strong>
            <p style="margin-bottom: 0; color: #475569;">Leaflet, OpenLayers and CesiumJS</p>
        </div>
    </div>

    <div style="border: 1px solid #dbe2ea; border-radius: 8px; overflow: hidden; background: #fff;">
        <div style="padding: 13px 16px; background: #1d4ed8; color: #fff;">
            <strong style="font-size: 17px;">R</strong>
            <div style="font-size: 12px; color: #dbeafe; margin-top: 4px;">Statistics and modelling</div>
        </div>
        <div style="padding: 16px;">
            <p style="margin-top: 0;">R is useful for statistical analysis, spatial modelling and visualising geographic data.</p>
            <strong>Common packages</strong>
            <p style="margin-bottom: 0; color: #475569;">sf, terra and tmap</p>
        </div>
    </div>

    <div style="border: 1px solid #dbe2ea; border-radius: 8px; overflow: hidden; background: #fff;">
        <div style="padding: 13px 16px; background: #7e22ce; color: #fff;">
            <strong style="font-size: 17px;">Java</strong>
            <div style="font-size: 12px; color: #f3e8ff; margin-top: 4px;">GIS application development</div>
        </div>
        <div style="padding: 16px;">
            <p style="margin-top: 0;">Java is used to develop server-side applications and large-scale GIS systems.</p>
            <strong>Common technologies</strong>
            <p style="margin-bottom: 0; color: #475569;">GeoTools and GeoServer</p>
        </div>
    </div>

    <div style="border: 1px solid #dbe2ea; border-radius: 8px; overflow: hidden; background: #fff;">
        <div style="padding: 13px 16px; background: #475569; color: #fff;">
            <strong style="font-size: 17px;">C / C++</strong>
            <div style="font-size: 12px; color: #e2e8f0; margin-top: 4px;">GIS software and performance</div>
        </div>
        <div style="padding: 16px;">
            <p style="margin-top: 0;">C and C++ are used to build high-performance GIS components and process large amounts of spatial data.</p>
            <strong>Common technologies</strong>
            <p style="margin-bottom: 0; color: #475569;">GDAL and QGIS core components</p>
        </div>
    </div>

</div>

<h2>How These Languages Are Used in a GIS Project</h2>

<p>
    Consider a project that creates a web map showing population information
    across different districts. More than one programming language may be
    involved in completing the project.
</p>

<div style="border: 1px solid #dbe2ea; border-radius: 8px; padding: 18px; margin: 18px 0; background: #f8fafc;">

    <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 10px; margin-bottom: 14px;">
        <div style="flex: 1; min-width: 150px; padding: 13px; background: #fff; border: 1px solid #cbd5e1; border-radius: 6px;">
            <strong style="color: #1e293b;">1. Store data</strong>
            <p style="font-size: 13px; margin: 6px 0 0;">SQL stores district boundaries and population records.</p>
        </div>
        <div style="font-size: 20px; color: #64748b;">→</div>
        <div style="flex: 1; min-width: 150px; padding: 13px; background: #fff; border: 1px solid #cbd5e1; border-radius: 6px;">
            <strong style="color: #1e293b;">2. Analyse data</strong>
            <p style="font-size: 13px; margin: 6px 0 0;">Python calculates population density and processes spatial data.</p>
        </div>
    </div>

    <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 10px;">
        <div style="flex: 1; min-width: 150px; padding: 13px; background: #fff; border: 1px solid #cbd5e1; border-radius: 6px;">
            <strong style="color: #1e293b;">3. Display results</strong>
            <p style="font-size: 13px; margin: 6px 0 0;">JavaScript displays the results on an interactive web map.</p>
        </div>
        <div style="font-size: 20px; color: #64748b;">→</div>
        <div style="flex: 1; min-width: 150px; padding: 13px; background: #fff; border: 1px solid #cbd5e1; border-radius: 6px;">
            <strong style="color: #1e293b;">4. Explore results</strong>
            <p style="font-size: 13px; margin: 6px 0 0;">Users view district information and interact with the map.</p>
        </div>
    </div>

</div>

<h2>Choosing the Right Language</h2>

<p>
    The best language depends on what you want to build or accomplish.
    You do not need to learn every language at once. Start with the task
    you want to perform and choose the language that supports it.
</p>

<div style="overflow-x: auto; margin: 18px 0;">
    <table style="width: 100%; border-collapse: collapse; min-width: 520px; font-size: 14px;">
        <thead>
            <tr style="background: #1e293b; color: #fff;">
                <th style="padding: 12px; text-align: left;">GIS Task</th>
                <th style="padding: 12px; text-align: left;">Suitable Language</th>
                <th style="padding: 12px; text-align: left;">Example</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background: #f8fafc;">
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Automating GIS workflows</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Python</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Batch processing layers</td>
            </tr>
            <tr>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Managing spatial databases</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">SQL</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Finding districts by population</td>
            </tr>
            <tr style="background: #f8fafc;">
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Creating web maps</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">JavaScript</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Displaying interactive maps</td>
            </tr>
            <tr>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Statistical analysis</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">R</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Analysing population patterns</td>
            </tr>
            <tr style="background: #f8fafc;">
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Developing GIS services</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Java</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Building mapping services</td>
            </tr>
            <tr>
                <td style="padding: 11px;">Building GIS software components</td>
                <td style="padding: 11px;">C / C++</td>
                <td style="padding: 11px;">High-performance data processing</td>
            </tr>
        </tbody>
    </table>
</div>


