{{-- resources/views/learning/lessons/notes-cheatsheet.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    This page summarizes core spatial analysis concepts, linking the foundational Coordinate Reference System (CRS) with essential geoprocessing tools and practical field rules.
</p>

<h2>CRS - Coordinate Reference System</h2>
<p>
    A Coordinate Reference System (CRS) is the framework that defines how 2D coordinates (like X and Y, or Latitude and Longitude) relate to actual locations on the Earth's curved surface. 
    Without a correctly defined CRS, your data cannot be accurately placed, measured, or combined with other layers.
</p>

<div class="note">
    <p style="margin:0"><strong>Important Rule:</strong> Before running any overlay tool (Clip, Intersect, Union), every layer involved must use the same CRS. If they don't, you must reproject them first.</p>
</div>

<h2>Geoprocessing Tools</h2>

<h3>Clip</h3>
<p>
    Clip acts like a cookie cutter. It uses a "mask" layer (the cookie cutter) to cut the "input" layer. It keeps only the features that fall inside the mask's boundary and discards everything outside.
</p>

<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Input + Mask</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 0; left: 0; width: 50%; height: 100%; background: #c8e6c9; border-right: 1px solid #ccc;"></div>
            <div style="position: absolute; top: 0; left: 50%; width: 50%; height: 100%; background: #ffe0b2; border-left: 1px solid #ccc;"></div>
            <div style="position: absolute; top: 15px; left: 20px; width: 60%; height: 60%; border: 3px dashed #d9534f;"></div>
        </div>
    </div>
    <div style="width: 15%; font-size: 20px; color: #FF9800; font-weight: bold;">Clip<br>&rarr;</div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Output: Inside Mask Only</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 15px; left: 20px; width: 30%; height: 60%; background: #c8e6c9; border-right: 1px solid #ccc;"></div>
            <div style="position: absolute; top: 15px; left: 50%; width: 30%; height: 60%; background: #ffe0b2; border-left: 1px solid #ccc;"></div>
        </div>
    </div>
</div>

<ul>
    <li><strong>Attributes:</strong> Only the input layer's attributes are kept.</li>
    <li><strong>Example:</strong> Clipping a national road network layer to the boundary of a specific city.</li>
</ul>

<h3>Intersection</h3>
<p>
    Intersection finds the overlapping area between two layers. It keeps only the areas where both layers exist and combines their attributes into the new output.
</p>

<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Layer A + Layer B</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 5px; left: 5px; width: 40px; height: 60px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="position: absolute; top: 20px; left: 30px; width: 40px; height: 60px; background: #ffe0b2; border: 1px solid #FF9800;"></div>
        </div>
    </div>
    <div style="width: 15%; font-size: 20px; color: #FF9800; font-weight: bold;">Intersect<br>&rarr;</div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Output: Overlap Only</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 20px; left: 30px; width: 15px; height: 45px; background: #dcedc8; border: 1px solid #4caf50; display: flex; align-items: center; justify-content: center; font-size: 9px;">A+B</div>
        </div>
    </div>
</div>

<ul>
    <li><strong>Attributes:</strong> Attributes from <em>both</em> layers are kept.</li>
    <li><strong>Example:</strong> Finding only the agricultural land (Layer A) that falls inside a flood zone (Layer B).</li>
</ul>

<h3>Union</h3>
<p>
    Union combines two layers into one single layer. It keeps all areas from both layers and splits the features where they overlap.
</p>

<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Layer A + Layer B</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 5px; left: 5px; width: 40px; height: 60px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="position: absolute; top: 20px; left: 30px; width: 40px; height: 60px; background: #ffe0b2; border: 1px solid #FF9800;"></div>
        </div>
    </div>
    <div style="width: 15%; font-size: 20px; color: #FF9800; font-weight: bold;">Union<br>&rarr;</div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35;">Output: All Areas Split</strong>
        <div style="height: 80px; position: relative; background: #f9f9f9; margin-top: 8px; border-radius: 4px;">
            <div style="position: absolute; top: 5px; left: 5px; width: 25px; height: 30px; background: #c8e6c9; border: 1px solid #04AA6D;"></div>
            <div style="position: absolute; top: 5px; left: 30px; width: 15px; height: 30px; background: #dcedc8; border: 1px solid #4caf50;"></div>
            <div style="position: absolute; top: 35px; left: 20px; width: 15px; height: 30px; background: #dcedc8; border: 1px solid #4caf50;"></div>
            <div style="position: absolute; top: 35px; left: 35px; width: 25px; height: 30px; background: #ffe0b2; border: 1px solid #FF9800;"></div>
        </div>
    </div>
</div>

<ul>
    <li><strong>Output:</strong> Contains pieces that are A only, B only, and A+B (overlap).</li>
    <li><strong>Example:</strong> Combining land parcels and zoning districts to see every possible combination of ownership and zone.</li>
</ul>

<h3>Dissolve</h3>
<p>
    Dissolve merges features that share the same attribute value into one large feature. It removes the borders between them.
</p>
<ul>
    <li><strong>Example:</strong> Merging 50 individual residential polygons into one single "Residential Zone" polygon.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Golden Rule:</strong> "Work on a copy." Never run geoprocessing tools directly on your raw, original data. Always make a duplicate or backup first, as these tools permanently alter the geometry.</p>
</div>

<h2>Distance and Network Analysis</h2>
<p>
    When you ask "How far is it?", you must choose the right method:
</p>
<ul>
    <li><strong>Straight-line distance (Euclidean):</strong> Measures distance "as the crow flies." It is quick but often incorrect for travel because it ignores roads, rivers, and buildings.</li>
    <li><strong>Network Analysis:</strong> Finds the shortest path or service area along actual connected lines (like a road network). It calculates the real travel distance or time based on the cost of the network.</li>
</ul>
<p><strong>Note:</strong> Network analysis is the only correct way to find a true travel distance.</p>

<h2>Locating Data (Geocoding)</h2>
<p>
    Geocoding is the process of converting text descriptions (like an address) into geographic coordinates. 
    <strong>Reverse Geocoding</strong> does the opposite: it takes coordinates and returns the nearest address or place name.
</p>

<div class="example">
    <h2>Example</h2>
    <p>If you enter the coordinates <code>13.0850, 80.2101</code> and the system returns <strong>"Anna Nagar"</strong>, you have used Reverse Geocoding to find a local address.</p>
</div>