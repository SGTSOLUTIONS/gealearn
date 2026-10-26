{{-- resources/views/learning/lessons/4-4-kml-kmz.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    KML is an XML format made for Google Earth. KMZ is the same content compressed together with its images and icons.
    They are ideal for visualisation and sharing, but not for heavy spatial analysis.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the relationship between KML and KMZ</li>
    <li>Learn what KML is best used for</li>
    <li>Recognise the limitations for analysis</li>
</ul>

<h2>Visual Guide: KML to KMZ Workflow</h2>
<div style="display: flex; align-items: center; justify-content: space-between; margin: 20px 0;">
    <div style="width: 25%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 8px; text-align: center; font-size: 13px; font-weight: bold;">KMZ (zipped)</div>
        <div style="padding: 8px; font-size: 11px; line-height: 1.5;">
            doc.kml<br>icons/pin.png<br>images/photo.jpg
        </div>
        <div style="background: #fff3cd; padding: 4px; text-align: center; font-size: 10px; color: #d9534f;">zip = KML + pictures</div>
    </div>
    <div style="width: 10%; text-align: center; font-size: 12px; color: #FF9800; font-weight: bold;">unzip<br><span style="font-size: 20px;">&rarr;</span></div>
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; text-align: center; font-size: 13px; font-weight: bold;">KML (XML text)</div>
        <div style="padding: 8px; font-size: 11px; line-height: 1.5;">
            Document<br>&nbsp;Folder<br>&nbsp;&nbsp;Placemark<br>&nbsp;&nbsp;&nbsp;name<br>&nbsp;&nbsp;&nbsp;Point &bull; coordinates<br>&nbsp;&nbsp;&nbsp;Style
        </div>
    </div>
    <div style="width: 10%; text-align: center; font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; text-align: center; font-size: 13px; font-weight: bold;">Opens in</div>
        <div style="padding: 8px; font-size: 11px; line-height: 1.6;">
            Google Earth<br>Google Maps<br>QGIS<br>ArcGIS
        </div>
    </div>
</div>
<div style="text-align: center; background: #E7E9EB; padding: 10px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>KMZ = KML + its images in one zip file</strong> | always WGS 84 latitude / longitude
</div>

<p>
    The diagram shows how a KMZ file is simply a zipped version of a KML file along with its assets. KML uses an XML structure to define placemarks, folders, and styles. Both formats are always in WGS 84 latitude/longitude.
</p>

<h2>Key Points</h2>
<ul>
    <li><strong>KML</strong> stores Placemarks (points, lines, polygons) with names, descriptions and styles.</li>
    <li><strong>KMZ</strong> is a zip file: doc.kml plus icons and photos in one file.</li>
    <li>Always uses <strong>WGS 84 latitude / longitude</strong>.</li>
    <li>Good for viewing and sharing; weak for analysis because attributes are limited.</li>
    <li>QGIS opens both; export with <strong>Save Features As &gt; KML</strong>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Sending a Google Earth map with its pictures? Send a KMZ, not a KML.</p>
</div>