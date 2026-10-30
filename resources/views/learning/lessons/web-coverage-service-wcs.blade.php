{{-- resources/views/learning/lessons/11-11-wcs.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    WCS returns raster data values (coverages), so clients can analyse cells instead of only viewing a picture.
    It is used when you need the actual numbers, not just the image.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand WCS capabilities</li>
    <li>Build a GetCoverage request</li>
    <li>Subset raster data</li>
</ul>

<h2>Visual Guide: WCS Request Flow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-weight: bold;">Client</div>
        <div style="padding: 8px; background: #fff;">sends GetCoverage</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-weight: bold;">GeoServer</div>
        <div style="padding: 8px; background: #fff;">cuts the raster</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 8px; font-weight: bold;">Raster</div>
        <div style="padding: 8px; background: #fff;">GeoTIFF with values</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">getcoverage.txt</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            http://localhost:8080/geoserver/ows<br>
            ?service=WCS&version=2.0.1<br>
            &request=GetCoverage<br>
            &coverageId=city__dem<br>
            &format=image/tiff<br>
            &subset=Long(78,79)<br>
            &subset=Lat(20,21)
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Main WCS requests</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>GetCapabilities</li>
            <li>DescribeCoverage: bands, CRS</li>
            <li>GetCoverage: download cells</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the WCS request flow, the main operations, and an example GetCoverage request with spatial subsetting.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is WCS?</strong> Web Coverage Service: returns raster data values, not just pictures.</li>
    <li><strong>What are the main requests?</strong> GetCapabilities, DescribeCoverage and GetCoverage.</li>
    <li><strong>How is a coverage named?</strong> <code>workspace__layer</code> with a double underscore in WCS 2.0.</li>
    <li><strong>How do I cut a subset?</strong> With <code>subset=Lat(20,21)</code> and <code>subset=Long(78,79)</code>.</li>
    <li><strong>Which formats?</strong> GeoTIFF (image/tiff), PNG, JPEG, ArcGrid and more.</li>
    <li><strong>WMS or WCS?</strong> WMS for display; WCS for analysis on real cell values.</li>
    <li><strong>Can I change resolution?</strong> Yes, WCS 2.0 extensions allow scaling and reprojection.</li>
    <li><strong>Which clients use WCS?</strong> QGIS, GDAL and other analysis tools.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use WCS when you need the numbers; use WMS when you need the picture.</p>
</div>