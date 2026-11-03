{{-- resources/views/learning/lessons/15-17-wfs.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A Web Feature Service (WFS) returns the actual vector features and their attributes, and can also edit them (WFS-T).
</p>

<h2>Learning goals</h2>
<ul>
    <li>Know the four WFS request types</li>
    <li>Read a GetFeature request</li>
    <li>Choose WMS vs WFS for a task</li>
</ul>

<h2>Visual Guide: WFS Requests</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 23%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">GetCapabilities</div>
        <div style="padding: 8px; background: #fff;">Lists available feature types</div>
    </div>
    <div style="width: 23%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">DescribeFeatureType</div>
        <div style="padding: 8px; background: #fff;">Fields and data types</div>
    </div>
    <div style="width: 23%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">GetFeature</div>
        <div style="padding: 8px; background: #fff;">Features as GML or GeoJSON</div>
    </div>
    <div style="width: 23%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Transaction</div>
        <div style="padding: 8px; background: #fff;">Insert, update, delete (WFS-T)</div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Example:</strong> <code>http://host/geoserver/city/ows?service=WFS&amp;version=2.0.0&amp;request=GetFeature&amp;typeNames=city:wards&amp;outputFormat=application/json&amp;count=100</code><br>
    <strong>Rule of thumb:</strong> use WMS to look at data and WFS when you need the features themselves.
</div>

<p>
    The diagram shows the four request types: discovery, schema description, feature download, and editing.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What does WFS send?</strong> Vector data, so you can style, query and analyse it on the client.</li>
    <li><strong>How do I get GeoJSON from GeoServer?</strong> Use <code>outputFormat=application/json</code> to receive GeoJSON from GeoServer.</li>
    <li><strong>How do I keep responses small?</strong> Limit results with <code>count</code> and <code>bbox</code> to keep responses small.</li>
    <li><strong>How do I filter features?</strong> GeoServer also supports <code>cql_filter</code> for attribute filters.</li>
    <li><strong>What is WFS-T?</strong> WFS-T (Transaction) lets clients edit data; secure it carefully.</li>
    <li><strong>How do I add a WFS in QGIS?</strong> Layer → Add Layer → Add WFS Layer.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use WMS to look at data and WFS when you need the features themselves.</p>
</div>