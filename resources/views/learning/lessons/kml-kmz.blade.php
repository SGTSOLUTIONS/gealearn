<p>
    KML is an XML format made for Google Earth. KMZ is the same content compressed together with its images and icons.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Explain the difference between KML and KMZ</li>
    <li>Know what a Placemark stores</li>
    <li>Know which software opens them</li>
    <li>Export a layer to KML</li>
</ul>

<h3>KML and KMZ compared</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">KML (XML text)</div>
        <div style="padding:15px; text-align:center;">
            <p>Document, Folder, Placemark with a name, point coordinates and a style.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">KMZ (zipped)</div>
        <div style="padding:15px; text-align:center;">
            <p>doc.kml plus icons and photos in one zip file.</p>
        </div>
    </div>
</div>

<h3>Opens in</h3>
<ul>
    <li>Google Earth and Google My Maps.</li>
    <li>QGIS and ArcGIS.</li>
</ul>

<h3>Key points</h3>
<ul>
    <li>Always uses WGS 84 latitude and longitude.</li>
    <li>Good for viewing and sharing; weak for analysis because attributes are limited.</li>
    <li>In QGIS: right-click the layer &gt; Export &gt; Save Features As &gt; KML.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Sending a Google Earth map with its pictures? Send a KMZ, not a KML.
    </p>
</div>