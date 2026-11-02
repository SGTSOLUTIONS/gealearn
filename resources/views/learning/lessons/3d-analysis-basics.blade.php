{{-- resources/views/learning/lessons/12-12-analysis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    3D analysis answers questions that need height: shadow, line of sight, visibility and volume.
    These are the reasons to move from 2D to 3D in the first place.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the main 3D analysis types</li>
    <li>Know what each one needs</li>
    <li>Recognise the limits of browser analysis</li>
</ul>

<h2>Visual Guide: 3D Analysis Types</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 31%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Line of sight</div>
        <div style="padding: 8px; background: #fff;">is a target visible from a point?</div>
    </div>
    <div style="width: 31%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Shadow</div>
        <div style="padding: 8px; background: #fff;">where is shade at a given time?</div>
    </div>
    <div style="width: 31%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Volume</div>
        <div style="padding: 8px; background: #fff;">how much cut and fill or flood water?</div>
    </div>
    <div style="width: 31%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Viewshed</div>
        <div style="padding: 8px; background: #fff;">what area is visible from a point?</div>
    </div>
    <div style="width: 31%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 6px; font-weight: bold;">Height</div>
        <div style="padding: 8px; background: #fff;">max building height for a view</div>
    </div>
    <div style="width: 31%; border: 2px solid #607D8B; border-radius: 6px; overflow: hidden;">
        <div style="background: #607D8B; color: #fff; padding: 6px; font-weight: bold;">Sun and sky</div>
        <div style="padding: 8px; background: #fff;">solar exposure over a day</div>
    </div>
</div>

<p>
    The diagram shows the six main types of 3D analysis and the question each one answers.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does 3D analysis need?</strong> A terrain model and, for buildings, 3D models or extrusions.</li>
    <li><strong>What is line of sight?</strong> A check of whether a straight line from a viewer to a target is blocked.</li>
    <li><strong>What is a viewshed?</strong> The area visible from one point, often shown as a coloured map.</li>
    <li><strong>What is shadow analysis?</strong> Calculating shade for a date and time from terrain and buildings.</li>
    <li><strong>What is volume analysis?</strong> Measuring cut and fill or flood water between two surfaces.</li>
    <li><strong>Where is it run?</strong> Mostly on the server or in desktop GIS; browsers can display the results.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Do heavy analysis on the server. Let the browser only display and explore the result.</p>
</div>