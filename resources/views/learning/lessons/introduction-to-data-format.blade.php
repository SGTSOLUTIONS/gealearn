{{-- resources/views/learning/lessons/4-1-data-formats.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A data format is the file type used to store spatial data. It decides what can be stored and which software can open it.
    Choosing the right format is essential for sharing, storage, and analysis.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the four main categories of spatial data</li>
    <li>Identify common file extensions for each category</li>
    <li>Learn which formats are best for different tasks</li>
</ul>

<h2>Visual Guide: Spatial Data Categories</h2>
<div style="display: flex; justify-content: space-between; text-align: center; margin: 20px 0;">
    <div style="width: 23%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 10px; font-weight: bold; font-size: 14px;">Vector</div>
        <div style="padding: 12px; font-size: 13px;">.shp &bull; .geojson<br>.gpkg &bull; .kml / .kmz<br><strong>points &bull; lines &bull; polygons</strong></div>
    </div>
    <div style="width: 23%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 10px; font-weight: bold; font-size: 14px;">Raster</div>
        <div style="padding: 12px; font-size: 13px;">.tif (GeoTIFF)<br>DEM &bull; imagery<br><strong>grid of cells</strong></div>
    </div>
    <div style="width: 23%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 10px; font-weight: bold; font-size: 14px;">Tabular</div>
        <div style="padding: 12px; font-size: 13px;">.csv &bull; .xlsx<br>rows and columns<br><strong>x, y make points</strong></div>
    </div>
    <div style="width: 23%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 10px; font-weight: bold; font-size: 14px;">CAD</div>
        <div style="padding: 12px; font-size: 13px;">.dxf &bull; .dwg<br>drawing layers<br><strong>needs a CRS</strong></div>
    </div>
</div>
<div style="text-align: center; background: #E7E9EB; padding: 10px; border-radius: 4px; margin-bottom: 20px; font-size: 13px;">
    <strong>Open:</strong> GeoPackage &bull; GeoJSON &bull; GeoTIFF &nbsp;|&nbsp; <strong>Vendor-controlled:</strong> Shapefile &bull; DWG
</div>

<h2>Key Points</h2>
<ul>
    <li><strong>Vector</strong> stores points, lines and polygons together with attributes.</li>
    <li><strong>Raster</strong> stores a grid of cells, each with a value (imagery, elevation).</li>
    <li><strong>Tabular</strong> files (CSV, Excel) hold attributes and can carry x, y columns.</li>
    <li><strong>CAD</strong> files (DXF, DWG) hold drawings, not complete GIS data.</li>
    <li>Prefer open formats for sharing and long-term storage.</li>
</ul>

<h2>Format Comparison</h2>
<table>
    <thead>
        <tr><th>Format</th><th>Type</th><th>Best For</th></tr>
    </thead>
    <tbody>
        <tr><td>Shapefile</td><td>Vector</td><td>Exchange with older software</td></tr>
        <tr><td>GeoJSON</td><td>Vector</td><td>Web maps</td></tr>
        <tr><td>KML / KMZ</td><td>Vector</td><td>Viewing in Google Earth</td></tr>
        <tr><td>GeoPackage</td><td>Vector + raster</td><td>Everyday storage and analysis</td></tr>
        <tr><td>GeoTIFF</td><td>Raster</td><td>Imagery and elevation</td></tr>
    </tbody>
</table>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Pick by purpose — analysis: GeoPackage &bull; web maps: GeoJSON &bull; imagery: GeoTIFF.</p>
</div>