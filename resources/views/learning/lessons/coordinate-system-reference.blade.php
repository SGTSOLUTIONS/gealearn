{{-- resources/views/learning/lessons/19-3-coordinate-system-reference.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The coordinate reference systems you meet most often, and the terms needed to choose one.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know common CRS codes</li>
    <li>Understand EPSG and UTM</li>
    <li>Choose a CRS for the task</li>
</ul>

<h2>Visual Guide: Frequently used coordinate systems</h2>
<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
    <div style="width: 100%; max-width: 650px; display: flex; flex-direction: column; align-items: center; background: #eef4f0; padding: 15px; border-radius: 6px;">
        <div style="font-weight: bold; color: #005a70; margin-bottom: 10px;">Frequently used coordinate systems</div>
        
        <div style="width: 100%; display: flex; justify-content: center;">
            <table style="border-collapse: collapse; text-align: center; font-family: sans-serif; font-size: 12px; width: 60%;">
                <thead>
                    <tr>
                        <th style="background: #005a70; color: white; padding: 10px; border: 1px solid #ddd;">EPSG</th>
                        <th style="background: #005a70; color: white; padding: 10px; border: 1px solid #ddd;">Name</th>
                        <th style="background: #005a70; color: white; padding: 10px; border: 1px solid #ddd;">Units</th>
                        <th style="background: #005a70; color: white; padding: 10px; border: 1px solid #ddd;">Typical use</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fff;">4326</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fff;">WGS 84</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fff;">degrees</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fff;">GPS, GeoJSON</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fdf0e0;">3857</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fdf0e0;">Web Mercator</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fdf0e0;">metres</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fdf0e0;">web map tiles</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fff;">32644</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fff;">WGS 84 / UTM 44N</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fff;">metres</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fff;">local measuring</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fdf0e0;">local</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fdf0e0;">national grid</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fdf0e0;">metres</td>
                        <td style="padding: 10px; border: 1px solid #ddd; background: #fdf0e0;">survey, cadastre</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">choose a CRS that fits the task and the area</div>
    </div>
</div>

<h2>Key points</h2>
<ul>
    <li><strong>CRS</strong> – defines how coordinates relate to places on Earth: a datum and a coordinate system, plus a projection if it is projected.</li>
    <li><strong>EPSG:4326</strong> – WGS 84 geographic, longitude and latitude in degrees; used by GPS and GeoJSON.</li>
    <li><strong>EPSG:3857</strong> – Web Mercator, in metres; used by web map tiles, not suitable for measuring area.</li>
    <li><strong>UTM</strong> – projected zones 6 degrees wide, in metres; EPSG:32644 is WGS 84 / UTM zone 44N.</li>
    <li><strong>Datum</strong> – the reference model of the Earth's shape and origin, such as WGS 84.</li>
    <li><strong>Axis order</strong> – some definitions list latitude first; always check which value is x.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Write the CRS of every layer in your project notes.</p>
</div>