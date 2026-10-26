{{-- resources/views/learning/lessons/4-7-geotiff.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoTIFF is a TIFF image with location information stored inside. It is the standard raster format for imagery and elevation.
    It combines pixel data with the metadata needed to place it correctly on a map.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the structure of a GeoTIFF</li>
    <li>Learn about bands and pixel size</li>
    <li>Recognise the importance of NoData values</li>
</ul>

<h2>Visual Guide: GeoTIFF Structure</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0;">
    <div style="width: 30%; border: 1px solid #ccc; padding: 10px; text-align: center; background: #fff;">
        <strong style="font-size: 12px;">Cells (pixels)</strong>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2px; margin-top: 8px; font-size: 10px;">
            <div style="background: #c8e6c9; padding: 4px;">112</div>
            <div style="background: #c8e6c9; padding: 4px;">115</div>
            <div style="background: #c8e6c9; padding: 4px;">121</div>
            <div style="background: #c8e6c9; padding: 4px;">130</div>
            <div style="background: #c8e6c9; padding: 4px;">108</div>
            <div style="background: #c8e6c9; padding: 4px;">111</div>
            <div style="background: #c8e6c9; padding: 4px;">118</div>
            <div style="background: #c8e6c9; padding: 4px;">126</div>
        </div>
        <div style="margin-top: 8px; font-size: 11px; color: #d9534f;"><strong>pixel size = 30 m</strong><br><span style="font-size: 9px;">(each cell covers 30 m x 30 m)</span></div>
    </div>
    <div style="width: 30%; border: 1px solid #ccc; padding: 10px; text-align: center; background: #fff;">
        <strong style="font-size: 12px;">Bands (layers)</strong>
        <div style="display: flex; flex-direction: column; gap: 5px; margin-top: 8px;">
            <div style="background: #ffcdd2; border: 1px solid #e57373; padding: 6px; font-size: 11px; border-radius: 3px;">Band 1 - Red</div>
            <div style="background: #c8e6c9; border: 1px solid #81c784; padding: 6px; font-size: 11px; border-radius: 3px;">Band 2 - Green</div>
            <div style="background: #bbdefb; border: 1px solid #64b5f6; padding: 6px; font-size: 11px; border-radius: 3px;">Band 3 - Blue</div>
        </div>
        <div style="margin-top: 8px; font-size: 10px; color: #666;">1 band = elevation<br>3 bands = colour image</div>
    </div>
    <div style="width: 35%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; text-align: center; font-weight: bold; font-size: 12px;">File metadata</div>
        <div style="padding: 8px; font-size: 11px; line-height: 1.5;">
            CRS<br>Extent<br>Pixel size<br>NoData value<br>Number of bands<br>Compression
        </div>
    </div>
</div>

<p>
    The diagram breaks down the three key parts of a GeoTIFF: the grid of cells (pixels) storing values, the bands that represent different measurements (e.g., red, green, blue, or elevation), and the metadata that tells GIS where the image belongs on the Earth.
</p>

<h2>Key Points</h2>
<ul>
    <li>A raster is a grid of cells (pixels); each cell stores a value.</li>
    <li><strong>Bands:</strong> 1 for elevation, 3 for a colour image, many for satellite data.</li>
    <li>The file holds its own <strong>CRS, extent, pixel size and NoData value</strong>.</li>
    <li>Pixel size sets the detail: a 10 m pixel covers 10 m by 10 m on the ground.</li>
    <li>Compression (LZW, Deflate) reduces size; COG (Cloud Optimized GeoTIFF) suits web use.</li>
    <li>Add in QGIS with <strong>Layer &gt; Add Layer &gt; Add Raster Layer</strong>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Unexpected black areas? Check the NoData value in Layer Properties &gt; Transparency.</p>
</div>