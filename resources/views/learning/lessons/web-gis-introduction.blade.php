{{-- resources/views/learning/lessons/10-1-web-gis-introduction.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Web GIS puts maps and spatial analysis in a web browser, so many people can use shared data without installing GIS software.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what Web GIS is and why it is useful</li>
    <li>Compare desktop GIS with Web GIS</li>
    <li>Identify the main parts of a Web GIS system</li>
</ul>

<h2>Visual Guide: Desktop GIS vs Web GIS</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <!-- Left side: Code block -->
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 12px; border-radius: 6px; font-family: monospace; font-size: 10px; line-height: 1.5; text-align: left; overflow-x: auto;">
        <span style="color: #569cd6;">index.html</span><br><br>
        &lt;<span style="color: #569cd6;">div</span> <span style="color: #9cdcfe;">id</span>=<span style="color: #ce9178;">"map"</span>&gt;&lt;/<span style="color: #569cd6;">div</span>&gt;<br>
        &lt;<span style="color: #569cd6;">script</span>&gt;<br>
        &nbsp;&nbsp;<span style="color: #569cd6;">const</span> map = L.map(<span style="color: #ce9178;">'map'</span>);<br>
        &nbsp;&nbsp;map.setView([<span style="color: #b5cea8;">13.08</span>, <span style="color: #b5cea8;">80.27</span>], <span style="color: #b5cea8;">11</span>);<br>
        &lt;/<span style="color: #569cd6;">script</span>&gt;
    </div>

    <!-- Right side: The Table -->
    <div style="width: 35%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: left; font-weight: bold; margin-bottom: 8px; color: #005a70;">Desktop GIS vs Web GIS</div>
        <table style="width: 100%; border-collapse: collapse; text-align: center; font-family: sans-serif;">
            <thead>
                <tr>
                    <th style="background: #005a70; color: white; padding: 8px; border: 1px solid #e0e0e0; font-weight: normal;"></th>
                    <th style="background: #005a70; color: white; padding: 8px; border: 1px solid #e0e0e0;">Desktop GIS</th>
                    <th style="background: #f07b24; color: white; padding: 8px; border: 1px solid #e0e0e0;">Web GIS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">Users</td>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">one</td>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #fdf0e0; font-weight: bold;">many</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">Install</td>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">needed</td>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #fdf0e0; font-weight: bold;">none</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">Data</td>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">local files</td>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #fdf0e0; font-weight: bold;">shared server</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">Updates</td>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">manual</td>
                    <td style="padding: 8px; border: 1px solid #e0e0e0; background: #fdf0e0; font-weight: bold;">live</td>
                </tr>
            </tbody>
        </table>
        <div style="text-align: left; font-size: 10px; color: #d9534f; margin-top: 8px;">the browser is the GIS client</div>
    </div>
</div>

<div style="display: flex; justify-content: space-around; margin-bottom: 20px; font-size: 11px; text-align: center;">
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Browser client</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Web server</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Spatial database (PostGIS)</div>
    <div style="border: 1px solid #ccc; padding: 5px 10px; border-radius: 4px; background: #f9f9f9;">Map server (optional)</div>
</div>

<p>
    The diagram shows the difference between desktop GIS and Web GIS. Web GIS is best for sharing and simple tools; desktop GIS stays best for heavy analysis. Data lives in a spatial database such as PostGIS, served to the browser as GeoJSON or map services.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is Web GIS?</strong> GIS delivered through the web: maps, data, and tools used in a browser.</li>
    <li><strong>Why use Web GIS?</strong> Easy sharing, no installation, one up-to-date copy of the data.</li>
    <li><strong>Is it replacing desktop GIS?</strong> No. Desktop GIS stays best for heavy analysis; Web GIS is best for sharing and simple tools.</li>
    <li><strong>What are its main parts?</strong> A browser client, a web server, a spatial database, and often a map server.</li>
    <li><strong>Which skills do I need?</strong> HTML, CSS, JavaScript, a server language such as PHP, and SQL.</li>
    <li><strong>Where does the data live?</strong> In a spatial database such as PostGIS, served to the browser as GeoJSON or map services.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Start with a small web map that shows one layer, then add features step by step.</p>
</div>