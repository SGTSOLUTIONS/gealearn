{{-- resources/views/learning/lessons/11-5-raster-layers.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Rasters such as DEMs and imagery are published through coverage stores; overviews keep them fast.
    Raster publishing requires slightly different steps than vector data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand coverage stores</li>
    <li>Publish a raster layer</li>
    <li>Optimise raster performance</li>
</ul>

<h2>Visual Guide: Raster Publishing Workflow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Prepare</div>
        <div style="padding: 8px; background: #fff;">tiles + overviews</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Coverage store</div>
        <div style="padding: 8px; background: #fff;">GeoTIFF file</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Publish</div>
        <div style="padding: 8px; background: #fff;">coverage layer</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Style</div>
        <div style="padding: 8px; background: #fff;">ColorMap or RGB</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">raster.sh</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            # Make a COG<br>
            gdal_translate -of COG dem.tif dem_cog.tif<br><br>
            # Upload and publish<br>
            GS=http://localhost:8080/geoserver/rest<br>
            curl -u admin:geoserver -XPUT \<br>
            &nbsp;&nbsp;-H "Content-type: image/tiff" \<br>
            &nbsp;&nbsp;--data-binary @dem_cog.tif \<br>
            &nbsp;&nbsp;$GS/workspaces/city/coveragestores/dem/file.geotiff
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Raster tips</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Use tiled GeoTIFF or COG</li>
            <li>Build overviews (pyramids)</li>
            <li>Set the NoData value</li>
            <li>ImageMosaic for many tiles</li>
            <li>Style with RasterSymbolizer</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the raster publishing workflow and key tips for optimising raster performance.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>Which raster formats work?</strong> GeoTIFF is the usual choice; other formats need extensions.</li>
    <li><strong>What is a coverage store?</strong> The raster equivalent of a data store.</li>
    <li><strong>How do I publish one?</strong> Add a coverage store, then publish its coverage layer.</li>
    <li><strong>Why add overviews?</strong> They make zoomed-out views fast. Build them with <code>gdaladdo</code> or use a COG.</li>
    <li><strong>What is a COG?</strong> A Cloud Optimized GeoTIFF: tiled, with overviews inside one file.</li>
    <li><strong>What is an ImageMosaic?</strong> Many tiles or dated images published together as one layer.</li>
    <li><strong>How is a raster styled?</strong> With a RasterSymbolizer: a ColorMap for DEMs, or RGB bands for imagery.</li>
    <li><strong>What about NoData?</strong> Set the NoData value so empty cells show as transparent.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> A raster without overviews will be slow at small scales, however fast the server.</p>
</div>