<p>
    A data format is the file type used to store spatial data. It decides what can be stored and which software can open it.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Recognise the four main families of spatial data</li>
    <li>Know the common file extensions</li>
    <li>Choose a format for a given purpose</li>
    <li>Tell open formats from vendor-controlled ones</li>
</ul>

<h3>Spatial data families</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Vector</div>
        <div style="padding:15px; text-align:center;">
            <p><code>.shp, .geojson, .gpkg, .kml / .kmz</code><br>Points, lines and polygons.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Raster</div>
        <div style="padding:15px; text-align:center;">
            <p><code>.tif (GeoTIFF), DEM, imagery</code><br>A grid of cells.</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Tabular</div>
        <div style="padding:15px; text-align:center;">
            <p><code>.csv, .xlsx</code><br>Rows and columns; x and y columns make points.</p>
        </div>
    </div>
    <div style="border:1px solid #6d28d9; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#6d28d9; color:white; padding:12px; font-weight:bold; text-align:center;">CAD</div>
        <div style="padding:15px; text-align:center;">
            <p><code>.dxf, .dwg</code><br>Drawing layers; needs a CRS.</p>
        </div>
    </div>
</div>

<h3>Choosing a format</h3>
<div style="border-radius:8px; overflow:hidden; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:14px;">
        <tr style="background:#eef3f8;">
            <th style="padding:10px; text-align:left;">Format</th>
            <th style="padding:10px; text-align:left;">Type</th>
            <th style="padding:10px; text-align:left;">Best for</th>
        </tr>
        <tr><td style="padding:10px;">Shapefile</td><td style="padding:10px;">Vector</td><td style="padding:10px;">Exchange with older software</td></tr>
        <tr><td style="padding:10px;">GeoJSON</td><td style="padding:10px;">Vector</td><td style="padding:10px;">Web maps</td></tr>
        <tr><td style="padding:10px;">KML / KMZ</td><td style="padding:10px;">Vector</td><td style="padding:10px;">Viewing in Google Earth</td></tr>
        <tr><td style="padding:10px;">GeoPackage</td><td style="padding:10px;">Vector + raster</td><td style="padding:10px;">Everyday storage and analysis</td></tr>
        <tr><td style="padding:10px;">GeoTIFF</td><td style="padding:10px;">Raster</td><td style="padding:10px;">Imagery and elevation</td></tr>
    </table>
</div>

<h3>Open and vendor-controlled formats</h3>
<ul>
    <li><strong>Open</strong> – GeoPackage, GeoJSON and GeoTIFF are documented standards that any software can read.</li>
    <li><strong>Vendor-controlled</strong> – Shapefile and DWG come with more limits and fewer guarantees.</li>
    <li>Prefer open formats for sharing and long-term storage.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Pick by purpose – analysis: GeoPackage; web maps: GeoJSON; imagery: GeoTIFF.
    </p>
</div>