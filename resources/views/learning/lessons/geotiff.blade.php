<p>
    GeoTIFF is a TIFF image with location information stored inside. It is the standard raster format for imagery and elevation.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Describe cells, bands and metadata</li>
    <li>Relate pixel size to detail</li>
    <li>Know why compression helps</li>
    <li>Add a raster in QGIS</li>
</ul>

<h3>Parts of a raster</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Cells (pixels)</div>
        <div style="padding:15px; text-align:center;">
            <p>Each cell stores one value. A 30 m pixel covers 30 m by 30 m.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Bands (layers)</div>
        <div style="padding:15px; text-align:center;">
            <p>1 band = elevation; 3 bands = colour image; many for satellite data.</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">File metadata</div>
        <div style="padding:15px; text-align:center;">
            <p>CRS, extent, pixel size, NoData value, bands and compression.</p>
        </div>
    </div>
</div>

<h3>Elevation values in a small raster (metres)</h3>
<div style="border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px; text-align:center;">
        <tr><td style="padding:10px; border:1px solid #cbd5e1;">112</td><td style="padding:10px; border:1px solid #cbd5e1;">115</td><td style="padding:10px; border:1px solid #cbd5e1;">121</td><td style="padding:10px; border:1px solid #cbd5e1;">130</td><td style="padding:10px; border:1px solid #cbd5e1;">138</td></tr>
        <tr><td style="padding:10px; border:1px solid #cbd5e1;">108</td><td style="padding:10px; border:1px solid #cbd5e1;">111</td><td style="padding:10px; border:1px solid #cbd5e1;">118</td><td style="padding:10px; border:1px solid #cbd5e1;">126</td><td style="padding:10px; border:1px solid #cbd5e1;">133</td></tr>
        <tr><td style="padding:10px; border:1px solid #cbd5e1;">104</td><td style="padding:10px; border:1px solid #cbd5e1;">107</td><td style="padding:10px; border:1px solid #cbd5e1;">113</td><td style="padding:10px; border:1px solid #cbd5e1;">120</td><td style="padding:10px; border:1px solid #cbd5e1;">127</td></tr>
        <tr><td style="padding:10px; border:1px solid #cbd5e1;">101</td><td style="padding:10px; border:1px solid #cbd5e1;">103</td><td style="padding:10px; border:1px solid #cbd5e1;">108</td><td style="padding:10px; border:1px solid #cbd5e1;">114</td><td style="padding:10px; border:1px solid #cbd5e1;">121</td></tr>
        <tr><td style="padding:10px; border:1px solid #cbd5e1;">98</td><td style="padding:10px; border:1px solid #cbd5e1;">100</td><td style="padding:10px; border:1px solid #cbd5e1;">104</td><td style="padding:10px; border:1px solid #cbd5e1;">109</td><td style="padding:10px; border:1px solid #cbd5e1;">115</td></tr>
    </table>
</div>

<h3>Key points</h3>
<ul>
    <li>Pixel size sets the detail: a 10 m pixel covers 10 m by 10 m on the ground.</li>
    <li>Compression (LZW, Deflate) reduces size; COG (Cloud Optimized GeoTIFF) suits web use.</li>
    <li>Add in QGIS with Layer &gt; Add Layer &gt; Add Raster Layer.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Unexpected black areas? Check the NoData value in Layer Properties &gt; Transparency.
    </p>
</div>