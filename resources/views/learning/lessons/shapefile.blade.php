{{-- resources/views/learning/lessons/intro.blade.php (lesson slug must be "intro") --}}
{{-- CONTENT ONLY. Wrap code samples in @verbatim if they contain {{ }} --}}

<p>
    A <strong>shapefile</strong> is one of the most common formats for storing
    geographic vector data. Despite its name, a "shapefile" is actually a
    collection of several files that work together to describe the geometry,
    attributes and spatial reference of a dataset. This lesson introduces the
    shapefile format and how it is used in GIS.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what a shapefile is and what it stores</li>
    <li>Recognise the required files that make up a shapefile</li>
    <li>Learn the difference between point, line and polygon shapefiles</li>
</ul>

<div class="note">
    <p style="margin:0"><strong>Note:</strong> A shapefile is never a single file — it is a set of files that must be kept together.</p>
</div>

<h2>Shapefile Example</h2>
<p>Every shapefile is made up of at least three required files that share the same base name:</p>

<div class="example">
    <h2>Example</h2>
    <div class="code">
        <script type="text/plain">
rivers.shp   -> stores the geometry (points, lines or polygons)
rivers.shx   -> stores the index of the geometry
rivers.dbf   -> stores the attribute table (tabular data)
        </script>
    </div>
    <a class="tryit" href="#">Try it Yourself &raquo;</a>
</div>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> The <code>.prj</code> file is optional but highly recommended — it defines the coordinate reference system (CRS) of your data.</p>
</div>
