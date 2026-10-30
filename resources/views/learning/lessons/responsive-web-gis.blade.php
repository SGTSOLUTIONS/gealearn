{{-- resources/views/learning/lessons/10-22-responsive-web-gis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A responsive Web GIS works well on phones, tablets, and desktops.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Use media queries and viewport tags</li>
    <li>Design for touch screens</li>
    <li>Test on real devices</li>
</ul>

<h2>Visual Guide: One App, Three Screens</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <!-- Left side: Code block -->
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">responsive.css</span><br><br>
        &lt;<span style="color: #569cd6;">meta</span> <span style="color: #9cdcfe;">name</span>=<span style="color: #ce9178;">"viewport"</span><br>
        &nbsp;&nbsp;<span style="color: #9cdcfe;">content</span>=<span style="color: #ce9178;">"width=device-width,</span><br>
        &nbsp;&nbsp;<span style="color: #ce9178;">initial-scale=1"</span>&gt;<br><br>
        <span style="color: #569cd6;">@media</span> (max-width: <span style="color: #b5cea8;">600px</span>) {<br>
        &nbsp;&nbsp;<span style="color: #d7ba7d;">#sidebar</span> { <span style="color: #9cdcfe;">display</span>: <span style="color: #ce9178;">none</span>; }<br>
        &nbsp;&nbsp;<span style="color: #d7ba7d;">#map</span> { <span style="color: #9cdcfe;">height</span>: <span style="color: #b5cea8;">70vh</span>; }<br>
        }
    </div>

    <!-- Right side: Visual Boxes -->
    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px;">One app, three screens</div>
        <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px;">
                <strong style="color: #005a70;">Phone</strong><br><span style="color: #666;">full-width map, panel hidden</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px;">
                <strong style="color: #005a70;">Tablet</strong><br><span style="color: #666;">map with slide-over panel</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px;">
                <strong style="color: #005a70;">Desktop</strong><br><span style="color: #666;">sidebar and map side by side</span>
            </div>
            <div style="width: 48%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px;">
                <strong style="color: #005a70;">Touch</strong><br><span style="color: #666;">large buttons, pinch zoom</span>
            </div>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">design small first</div>
    </div>
</div>

<p>
    The diagram shows how one app adapts to three screens. The viewport meta tag makes phones use the real screen width. A media query is a CSS rule that applies only at certain sizes, e.g. @media (max-width: 600px). Use Flexbox, grid, and relative units (%, vh, rem). Test on a real phone: it is the fastest way to find layout problems.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does responsive mean?</strong> The layout adapts to the screen size.</li>
    <li><strong>What is the viewport tag?</strong> A meta tag that makes phones use the real screen width.</li>
    <li><strong>What is a media query?</strong> A CSS rule that applies only at certain sizes, e.g. @media (max-width: 600px).</li>
    <li><strong>Which CSS tools help?</strong> Flexbox, grid, and relative units (%, vh, rem).</li>
    <li><strong>What matters on touch screens?</strong> Big tap targets and no hover-only features.</li>
    <li><strong>How do I test?</strong> Use the browser's device mode and a real phone.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Test on a real phone: it is the fastest way to find layout problems.</p>
</div>