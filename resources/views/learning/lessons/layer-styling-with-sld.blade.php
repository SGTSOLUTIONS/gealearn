{{-- resources/views/learning/lessons/11-8-sld.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    SLD (Styled Layer Descriptor) is the XML standard GeoServer uses to say how each layer is drawn.
    It controls colours, symbols, labels, and scale-dependent visibility.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the SLD structure</li>
    <li>Use symbolizers for different geometry types</li>
    <li>Add labels and scale rules</li>
</ul>

<h2>Visual Guide: SLD Structure</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Style</div>
        <div style="padding: 8px; background: #fff;">one SLD file</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">FeatureTypeStyle</div>
        <div style="padding: 8px; background: #fff;">groups rules</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Rule</div>
        <div style="padding: 8px; background: #fff;">filter + scale</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Symbolizer</div>
        <div style="padding: 8px; background: #fff;">fill, line, text</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">wards.sld</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left; font-size: 10px;">
            &lt;PolygonSymbolizer&gt;<br>
            &nbsp;&nbsp;&lt;Fill&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;CssParameter name="fill"&gt;#3C8DAD&lt;/CssParameter&gt;<br>
            &nbsp;&nbsp;&lt;/Fill&gt;<br>
            &nbsp;&nbsp;&lt;Stroke&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;CssParameter name="stroke"&gt;#FFFFFF&lt;/CssParameter&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;CssParameter name="stroke-width"&gt;1&lt;/CssParameter&gt;<br>
            &nbsp;&nbsp;&lt;/Stroke&gt;<br>
            &lt;/PolygonSymbolizer&gt;
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Symbolizers</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>PointSymbolizer</li>
            <li>LineSymbolizer</li>
            <li>PolygonSymbolizer</li>
            <li>TextSymbolizer (labels)</li>
            <li>RasterSymbolizer</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the hierarchical structure of an SLD file and the five main symbolizer types.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is SLD?</strong> Styled Layer Descriptor: an XML standard for map styles.</li>
    <li><strong>How is an SLD organised?</strong> Style &gt; FeatureTypeStyle &gt; Rule &gt; Symbolizer.</li>
    <li><strong>What does a rule do?</strong> Applies symbols to features matching a filter and scale range.</li>
    <li><strong>Which symbolizers exist?</strong> Point, Line, Polygon, Text and Raster.</li>
    <li><strong>How do I add labels?</strong> Use a TextSymbolizer with a PropertyName for the attribute.</li>
    <li><strong>How do I upload a style?</strong> Data &gt; Styles &gt; Add a new style, then attach it to a layer.</li>
    <li><strong>Are there other style formats?</strong> GeoServer also supports CSS, YSLD and MBStyle (some need extensions).</li>
    <li><strong>Can styles depend on scale?</strong> Yes, with MinScaleDenominator and MaxScaleDenominator.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Start from a built-in style, change one thing at a time and re-check the preview.</p>
</div>