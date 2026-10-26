{{-- resources/views/learning/lessons/3-12-navigation.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Navigation tools move around the map and change the visible area (extent).
    Mastering these shortcuts makes working in QGIS much faster.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Learn pan and zoom shortcuts</li>
    <li>Jump to layers and selections</li>
    <li>Set an exact scale</li>
</ul>

<h2>Visual Guide: Navigation Tools</h2>
<div style="border: 1px solid #ccc; border-radius: 6px; margin: 20px 0; overflow: hidden;">
    <table style="width: 100%; font-size: 13px; margin: 0; border-collapse: collapse;">
        <thead>
            <tr style="background: #282A35; color: #fff;">
                <th style="padding: 8px; text-align: left;">Tool</th>
                <th style="padding: 8px; text-align: left;">Shortcut</th>
                <th style="padding: 8px; text-align: left;">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr><td style="padding: 8px; border-bottom: 1px solid #eee;"><strong>Pan</strong></td><td style="padding: 8px; border-bottom: 1px solid #eee;">Space / Middle Mouse</td><td style="padding: 8px; border-bottom: 1px solid #eee;">Drag the map to move around.</td></tr>
            <tr><td style="padding: 8px; border-bottom: 1px solid #eee;"><strong>Zoom In / Out</strong></td><td style="padding: 8px; border-bottom: 1px solid #eee;">Mouse Scroll Wheel</td><td style="padding: 8px; border-bottom: 1px solid #eee;">Scroll to zoom in and out.</td></tr>
            <tr><td style="padding: 8px; border-bottom: 1px solid #eee;"><strong>Zoom Full</strong></td><td style="padding: 8px; border-bottom: 1px solid #eee;">Ctrl+Shift+F</td><td style="padding: 8px; border-bottom: 1px solid #eee;">Shows all layers at once.</td></tr>
            <tr><td style="padding: 8px; border-bottom: 1px solid #eee;"><strong>Zoom to Selection</strong></td><td style="padding: 8px; border-bottom: 1px solid #eee;">Ctrl+J</td><td style="padding: 8px; border-bottom: 1px solid #eee;">Jumps to the selected features.</td></tr>
            <tr><td style="padding: 8px; border-bottom: 1px solid #eee;"><strong>Zoom Last / Next</strong></td><td style="padding: 8px; border-bottom: 1px solid #eee;">Toolbar buttons</td><td style="padding: 8px; border-bottom: 1px solid #eee;">Steps through previous views.</td></tr>
            <tr><td style="padding: 8px;"><strong>Scale Box</strong></td><td style="padding: 8px;">Type in status bar</td><td style="padding: 8px;">Enter e.g., <code>1:5000</code> for an exact scale.</td></tr>
        </tbody>
    </table>
</div>

<h2>Key Points</h2>
<ul>
    <li><strong>Pan</strong> – hold Space, drag with the Pan tool, or drag with the middle mouse button.</li>
    <li><strong>Zoom</strong> – scroll the mouse wheel; the Zoom tools also allow a drag box.</li>
    <li><strong>Zoom Full (Ctrl+Shift+F)</strong> shows all layers at once.</li>
    <li><strong>Zoom to Layer / Selection (Ctrl+J)</strong> jumps to your data.</li>
    <li><strong>Zoom Last / Next</strong> steps through previous views.</li>
    <li>Type a value such as <code>1:5000</code> in the status-bar <strong>Scale box</strong> for an exact scale.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Lost on a blank canvas? Press Zoom Full or right-click the layer > Zoom to Layer(s).</p>
</div>