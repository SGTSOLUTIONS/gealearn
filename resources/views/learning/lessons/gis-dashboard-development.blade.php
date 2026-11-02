{{-- resources/views/learning/lessons/10-21-gis-dashboard-development.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A dashboard shows a map together with charts, tables, and key numbers, all linked to the same data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand dashboard components</li>
    <li>Link map and charts</li>
    <li>Keep the dashboard fast and relevant</li>
</ul>

<h2>Visual Guide: Parts of a Dashboard</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <!-- Left side: Code block -->
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">dashboard.js</span><br><br>
        <span style="color: #569cd6;">new</span> <span style="color: #4ec9b0;">Chart</span>(ctx, {<br>
        &nbsp;&nbsp;type: <span style="color: #ce9178;">'bar'</span>,<br>
        &nbsp;&nbsp;data: {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;labels: names,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;datasets: [{<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label: <span style="color: #ce9178;">'Population'</span>,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data: pops }]<br>
        &nbsp;&nbsp;}<br>
        });
    </div>

    <!-- Right side: Visual Boxes -->
    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px;">Parts of a dashboard</div>
        <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px;">
                <strong style="color: #005a70;">Map</strong><br><span style="color: #666;">shows where</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px;">
                <strong style="color: #005a70;">Chart</strong><br><span style="color: #666;">shows how much</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px;">
                <strong style="color: #005a70;">Table</strong><br><span style="color: #666;">shows details</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px;">
                <strong style="color: #005a70;">KPI cards</strong><br><span style="color: #666;">key numbers</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">one filter updates all parts</div>
    </div>
</div>

<p>
    The diagram shows the parts of a dashboard. Use the same data and update both map and chart when a filter or selection changes. Chart libraries include Chart.js, D3, or Plotly. Summarise on the server and send only the numbers you need to keep it fast. A dashboard answers questions: remove any chart that does not.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is a GIS dashboard?</strong> A page that combines a map with charts and summary numbers.</li>
    <li><strong>Which chart libraries can I use?</strong> Chart.js, D3, or Plotly.</li>
    <li><strong>How do I link map and chart?</strong> Use the same data and update both when a filter or selection changes.</li>
    <li><strong>What are KPI cards?</strong> Boxes with key figures such as total population or number of schools.</li>
    <li><strong>How do I keep it fast?</strong> Summarise on the server and send only the numbers you need.</li>
    <li><strong>How do I choose what to show?</strong> Start from the questions the users must answer.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> A dashboard answers questions: remove any chart that does not.</p>
</div>