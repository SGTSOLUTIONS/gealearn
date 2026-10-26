{{-- resources/views/learning/lessons/4-17-recap.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    The 16 topics follow one data workflow – know the formats, bring data in, convert it, clean it and verify its quality.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Review the complete data management workflow</li>
    <li>Check your understanding with the practice checklist</li>
</ul>

<h2>Visual Guide: The Data Management Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; text-align: center; margin: 30px 0; font-size: 13px;">
    <div style="width: 18%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-weight: bold;">1 Formats</div>
        <div style="padding: 8px; text-align: left; font-size: 11px; line-height: 1.4;">
            4.1 Data formats<br>4.2 Shapefile<br>4.3 GeoJSON<br>4.4 KML / KMZ<br>4.5 GeoPackage
        </div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-weight: bold;">2 Sources</div>
        <div style="padding: 8px; text-align: left; font-size: 11px; line-height: 1.4;">
            4.6 CSV / Excel<br>4.7 GeoTIFF<br>4.8 DEM<br>4.9 CAD data
        </div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 8px; font-weight: bold;">3 Move</div>
        <div style="padding: 8px; text-align: left; font-size: 11px; line-height: 1.4;">
            4.10 Import / Export<br>4.11 Conversion
        </div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #9C27B0; border-radius: 6px; overflow: hidden;">
        <div style="background: #9C27B0; color: #fff; padding: 8px; font-weight: bold;">4 Fix</div>
        <div style="padding: 8px; text-align: left; font-size: 11px; line-height: 1.4;">
            4.12 Cleaning<br>4.13 Attribute editing
        </div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 18%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 8px; font-weight: bold;">5 Verify</div>
        <div style="padding: 8px; text-align: left; font-size: 11px; line-height: 1.4;">
            4.14 Validation<br>4.15 Topology<br>4.16 Data quality
        </div>
    </div>
</div>
<div style="text-align: center; font-weight: bold; font-size: 14px; color: #04AA6D; margin-bottom: 20px;">
    Choose format &gt; Bring in &gt; Convert &gt; Clean &gt; Verify
</div>

<p>
    The diagram summarises the entire module as a five-stage pipeline. You start by choosing the right format, then bring data in from various sources, convert it as needed, clean up errors, and finally verify its quality before analysis.
</p>

<h2>Key Points (Practice Checklist)</h2>
<ul>
    <li>Name the format of five different files and say what each one stores.</li>
    <li>Convert a shapefile to GeoPackage and reproject it to another CRS.</li>
    <li>Load a CSV with coordinates and export it as spatial data.</li>
    <li>Clean duplicates and extra spaces, then edit and save attribute values.</li>
    <li>Run Check Validity and fix the errors; find one gap and one overlap.</li>
    <li>Write metadata that states the source, date and scale of a dataset.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Next:</strong> Module 5 – GIS Intermediate Level (spatial analysis: queries, buffer, overlay, network, raster and terrain analysis).</p>
</div>