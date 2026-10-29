{{-- resources/views/learning/lessons/8-16-rasterio.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Rasterio opens rasters and gives you the cell values as NumPy arrays.
    It is the standard library for raster processing in Python.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Read a band as an array</li>
    <li>Access metadata</li>
    <li>Clip by polygon</li>
</ul>

<h2>Visual Guide: Rasterio Structure</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 50%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">rasterio.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            import rasterio<br>
            with rasterio.open("dem.tif") as src:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;band = src.read(1)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;print(src.crs, src.res)<br>
            print(band.mean())
        </div>
    </div>
    <div style="width: 45%; display: flex; flex-direction: column; align-items: center; justify-content: center; font-size: 11px;">
        <div style="font-weight: bold; color: #282A35; margin-bottom: 5px;">Raster = array + metadata</div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px; width: 80%; margin-bottom: 10px;">
            <div style="background: #c8e6c9; padding: 6px; text-align: center;">112</div>
            <div style="background: #c8e6c9; padding: 6px; text-align: center;">115</div>
            <div style="background: #c8e6c9; padding: 6px; text-align: center;">121</div>
            <div style="background: #c8e6c9; padding: 6px; text-align: center;">108</div>
            <div style="background: #c8e6c9; padding: 6px; text-align: center;">111</div>
            <div style="background: #c8e6c9; padding: 6px; text-align: center;">118</div>
            <div style="background: #c8e6c9; padding: 6px; text-align: center;">104</div>
            <div style="background: #c8e6c9; padding: 6px; text-align: center;">107</div>
            <div style="background: #c8e6c9; padding: 6px; text-align: center;">113</div>
        </div>
        <div style="border: 2px solid #04AA6D; border-radius: 6px; padding: 8px; background: #fff; width: 80%; text-align: left;">
            <strong style="color: #04AA6D;">Metadata</strong><br>
            crs<br>transform<br>res<br>nodata<br>count
        </div>
    </div>
</div>

<p>
    The diagram shows the two parts of a raster in Rasterio: the data array (the grid of values) and the metadata (CRS, transform, resolution).
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is Rasterio?</strong> A library that reads and writes rasters (e.g. GeoTIFF) as NumPy arrays.</li>
    <li><strong>How do I read a band?</strong> <code>src.read(1)</code> returns band 1 as an array.</li>
    <li><strong>Which metadata is available?</strong> crs, transform, res, nodata, count.</li>
    <li><strong>How do I write a raster?</strong> <code>rasterio.open(out, "w", **profile)</code> then <code>dst.write(array, 1)</code>.</li>
    <li><strong>How do I clip by polygon?</strong> <code>rasterio.mask.mask()</code>.</li>
    <li><strong>What about NoData?</strong> Mask it before calculating statistics.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Always read the nodata value before doing statistics.</p>
</div>