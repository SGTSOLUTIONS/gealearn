{{-- resources/views/learning/lessons/8-13-geopandas.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoPandas reads, analyses and writes vector data using familiar pandas tables.
    It is the go-to library for vector data manipulation in Python.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Read and write vector files</li>
    <li>Filter and reproject data</li>
    <li>Draw a quick map</li>
</ul>

<h2>Visual Guide: GeoDataFrame Structure</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 55%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">geopandas.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            import geopandas as gpd<br>
            wards = gpd.read_file("wards.gpkg")<br>
            wards["area_ha"] = wards.area / 10000<br>
            big = wards[wards["pop"] &gt; 5000]<br>
            big.to_file("big.gpkg")
        </div>
    </div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; background: #fff; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; text-align: center; font-weight: bold; font-size: 11px;">GeoDataFrame = table + geometry</div>
        <table style="width: 100%; font-size: 11px; border-collapse: collapse;">
            <thead>
                <tr style="background: #f1f1f1;">
                    <th style="padding: 4px; border: 1px solid #ccc;">name</th>
                    <th style="padding: 4px; border: 1px solid #ccc;">pop</th>
                    <th style="padding: 4px; border: 1px solid #ccc;">geometry</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 4px; border: 1px solid #ccc;">Ward A</td><td style="padding: 4px; border: 1px solid #ccc;">5400</td><td style="padding: 4px; border: 1px solid #ccc; font-size: 9px;">POLYGON (...)</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ccc;">Ward B</td><td style="padding: 4px; border: 1px solid #ccc;">4100</td><td style="padding: 4px; border: 1px solid #ccc; font-size: 9px;">POLYGON (...)</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ccc;">Ward C</td><td style="padding: 4px; border: 1px solid #ccc;">7800</td><td style="padding: 4px; border: 1px solid #ccc; font-size: 9px;">POLYGON (...)</td></tr>
            </tbody>
        </table>
        <div style="padding: 5px; font-size: 10px; color: #666; text-align: center;">the geometry column holds the shapes</div>
    </div>
</div>

<p>
    The diagram shows the structure of a GeoDataFrame: a standard table of attributes with an additional geometry column that holds the shapes.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is GeoPandas?</strong> Pandas with geometry: a GeoDataFrame is a table plus a geometry column.</li>
    <li><strong>How do I read and write files?</strong> <code>gpd.read_file()</code> and <code>gdf.to_file()</code>.</li>
    <li><strong>How do I reproject?</strong> <code>gdf.to_crs(32644)</code>. Use set_crs only to fix a missing label.</li>
    <li><strong>How do I filter rows?</strong> <code>gdf[gdf["pop"] &gt; 5000]</code>.</li>
    <li><strong>Which spatial operations exist?</strong> sjoin, overlay, dissolve, buffer and clip.</li>
    <li><strong>How do I draw a quick map?</strong> <code>gdf.plot()</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Check gdf.crs before every spatial operation.</p>
</div>