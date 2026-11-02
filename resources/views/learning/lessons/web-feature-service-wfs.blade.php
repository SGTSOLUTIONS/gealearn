{{-- resources/views/learning/lessons/11-10-wfs.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    WFS returns the real vector features, with geometry and attributes, and can also edit them.
    It is used when the client needs the data, not just a picture.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand WFS capabilities</li>
    <li>Build a GetFeature request</li>
    <li>Filter results and use WFS-T</li>
</ul>

<h2>Visual Guide: WFS Request Flow</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 30%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 8px; font-weight: bold;">Client</div>
        <div style="padding: 8px; background: #fff;">sends GetFeature</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 8px; font-weight: bold;">GeoServer</div>
        <div style="padding: 8px; background: #fff;">queries the store</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 30%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 8px; font-weight: bold;">Features</div>
        <div style="padding: 8px; background: #fff;">GeoJSON or GML</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">getfeature.txt</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            http://localhost:8080/geoserver/city/ows<br>
            ?service=WFS&version=2.0.0<br>
            &request=GetFeature<br>
            &typeNames=city:wards<br>
            &outputFormat=application/json<br>
            &count=10<br>
            &cql_filter=pop%3E5000
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Main WFS requests</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>GetCapabilities</li>
            <li>DescribeFeatureType: fields</li>
            <li>GetFeature: read features</li>
            <li>Transaction: edit (WFS-T)</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the WFS request flow, the main operations, and an example GetFeature request with a CQL filter.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is WFS?</strong> Web Feature Service: returns the actual vector features and attributes.</li>
    <li><strong>What are the main requests?</strong> GetCapabilities, DescribeFeatureType, GetFeature and Transaction.</li>
    <li><strong>Which output formats?</strong> GML, GeoJSON, CSV and zipped shapefile.</li>
    <li><strong>How do I filter?</strong> Use <code>cql_filter=pop&gt;5000</code> or an OGC Filter in XML.</li>
    <li><strong>How do I limit results?</strong> <code>count=10</code> in WFS 2.0, or <code>maxFeatures=10</code> in WFS 1.x.</li>
    <li><strong>What is WFS-T?</strong> Transactional WFS: insert, update and delete features through the service.</li>
    <li><strong>WMS or WFS?</strong> WMS for pictures; WFS when the client needs geometry and attributes.</li>
    <li><strong>Any URL tip?</strong> URL-encode special characters, e.g. <code>&gt;</code> as <code>%3E</code> and a space as <code>%20</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use count while testing so a huge layer does not freeze your browser.</p>
</div>