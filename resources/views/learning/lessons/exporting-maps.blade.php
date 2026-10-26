{{-- resources/views/learning/lessons/3-16-exporting.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Export saves your finished layout as an image or document you can share or print.
    Choosing the right format depends on whether you need it for a screen or a printer.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Choose the correct export format</li>
    <li>Set the appropriate resolution</li>
    <li>Export data layers separately</li>
</ul>

<h2>Visual Guide: Export Formats</h2>
<div style="display: flex; align-items: center; justify-content: space-between; margin: 20px 0;">
    <div style="width: 25%; border: 2px solid #282A35; border-radius: 6px; text-align: center; background: #282A35; color: #fff; padding: 10px;">
        <strong>Print Layout</strong><br>
        <span style="font-size: 11px;">(finished map)</span>
    </div>
    <div style="width: 10%; text-align: center; font-size: 20px; color: #999;">&rarr;</div>
    <div style="width: 60%; display: flex; flex-direction: column; gap: 8px;">
        <div style="border: 2px solid #04AA6D; border-radius: 6px; display: flex; overflow: hidden;">
            <div style="width: 30%; background: #04AA6D; color: #fff; padding: 8px; font-size: 12px; font-weight: bold; text-align: center; display: flex; align-items: center; justify-content: center;">Image</div>
            <div style="width: 70%; padding: 8px; font-size: 12px; background: #fff;">PNG &bull; JPG &bull; TIFF<br><span style="font-size: 10px; color: #666;">Web, reports, slides</span></div>
        </div>
        <div style="border: 2px solid #FF9800; border-radius: 6px; display: flex; overflow: hidden;">
            <div style="width: 30%; background: #FF9800; color: #fff; padding: 8px; font-size: 12px; font-weight: bold; text-align: center; display: flex; align-items: center; justify-content: center;">PDF</div>
            <div style="width: 70%; padding: 8px; font-size: 12px; background: #fff;">Keeps vector quality<br><span style="font-size: 10px; color: #666;">Best for print & sharing</span></div>
        </div>
        <div style="border: 2px solid #2196F3; border-radius: 6px; display: flex; overflow: hidden;">
            <div style="width: 30%; background: #2196F3; color: #fff; padding: 8px; font-size: 12px; font-weight: bold; text-align: center; display: flex; align-items: center; justify-content: center;">SVG</div>
            <div style="width: 70%; padding: 8px; font-size: 12px; background: #fff;">Fully editable shapes<br><span style="font-size: 10px; color: #666;">Inkscape / Illustrator</span></div>
        </div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li>In the layout window use <strong>Layout > Export as Image / PDF / SVG</strong>.</li>
    <li><strong>Image (PNG, JPG, TIFF)</strong> suits web pages, reports and slides.</li>
    <li><strong>PDF</strong> keeps vector sharpness – best for printing and sharing.</li>
    <li><strong>SVG</strong> keeps shapes editable in Inkscape or Illustrator.</li>
    <li>Use <strong>150 dpi</strong> for screen and <strong>300 dpi</strong> for print.</li>
    <li>To export data instead, right-click the layer > <strong>Export > Save Features As</strong>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Re-open the layout any time – it is saved inside the project.</p>
</div>