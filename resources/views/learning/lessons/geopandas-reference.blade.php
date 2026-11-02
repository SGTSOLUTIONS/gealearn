{{-- resources/views/learning/lessons/15-5-geopandas.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoPandas adds geometry to pandas tables, so you can analyse spatial data in Python with a few readable lines.
    A GeoDataFrame is a pandas table with a special geometry column.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Read, reproject and filter spatial data in Python</li>
    <li>Run spatial joins and overlays</li>
    <li>Save results and make quick maps</li>
</ul>

<h2>Visual Guide: A GeoPandas Workflow</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 31%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Read</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            gdf = gpd.read_file("parcels.shp")<br><br>
            gdf = gdf.to_crs(epsg=32644)
        </div>
    </div>
    <div style="width: 31%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Analyse</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            gdf["area_sqm"] = gdf.area<br><br>
            joined = gpd.sjoin(gdf, wards, predicate="within")
        </div>
    </div>
    <div style="width: 31%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Save</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            big.to_file("big.gpkg", driver="GPKG")<br><br>
            gdf.explore()
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Check:</strong> print <code>gdf.crs</code> and <code>gdf.head()</code> right after reading a file<br>
    <strong>Rule of thumb:</strong> reproject to a projected CRS before measuring area or distance.
</div>

<p>
    The diagram shows the three stages of a GeoPandas job: read the file, analyse the geometry, then save or plot the result.
</p>

<h2>Key Points (Q&amp;A)</h2>
<ul>
    <li><strong>What is a GeoDataFrame?</strong> A pandas table with a special geometry column.</li>
    <li><strong>How do I install it?</strong> <code>pip install geopandas</code> (or conda); it uses Shapely, Fiona/pyogrio and PyProj.</li>
    <li><strong>Do normal pandas tools still work?</strong> Yes: filtering, grouping, merging and exporting to Excel all work.</li>
    <li><strong>What should I check before analysis?</strong> Check <code>gdf.crs</code> and reproject to a projected CRS for area and distance.</li>
    <li><strong>How do I make a quick map?</strong> Use <code>gdf.explore()</code> for a quick interactive map in a notebook.</li>
    <li><strong>Is it good for batch jobs?</strong> Yes: loops over many files with the same steps work well.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Always print <code>gdf.crs</code> and <code>gdf.head()</code> right after reading a file.</p>
</div>  