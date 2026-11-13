
{{-- resources/views/learning/lessons/16-6-perform-buffer-analysis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A buffer creates a zone at a specified distance around features.
    It helps identify nearby features, such as buildings within 50 metres of a road.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a buffer around features</li>
    <li>Use a projected CRS for measurements in metres</li>
    <li>Select features inside the buffer</li>
</ul>

<h2>Visual Guide: A 50 m buffer around a road</h2>

<div style="display: flex; justify-content: center; margin: 20px 0;">

    <div style="width: 100%; max-width: 650px; font-family: Arial, sans-serif;">

        <svg viewBox="0 0 637 350"
             width="100%"
             xmlns="http://www.w3.org/2000/svg"
             role="img"
             aria-label="A 50 metre buffer around a road showing buildings inside and outside the buffer">

            <!-- Background -->
            <rect width="637" height="350" fill="#eef5f4"/>

            <!-- Main Heading -->
            <text x="318" y="15"
                  text-anchor="middle"
                  font-size="12"
                  font-weight="bold"
                  fill="#176477">
                A 50 m buffer around a road
            </text>

            <!-- Study Area -->
            <rect x="100" y="39"
                  width="435" height="256"
                  fill="#edf5ed"
                  stroke="#9bc5c5"
                  stroke-width="1.5"/>

            <!-- Buffer Zone -->
            <path d="
                M 100 187
                L 198 139
                L 311 103
                L 480 39
                L 535 39
                L 535 133
                L 455 176
                L 329 210
                L 230 239
                L 120 295
                L 100 295
                Z"
                fill="#e9cdb5"
                opacity="0.95"/>

            <!-- Road -->
            <path d="
                M 110 241
                L 225 190
                L 327 155
                L 430 127
                L 529 75"
                fill="none"
                stroke="#292929"
                stroke-width="7"/>

            <!-- Road Centre Line -->
            <path d="
                M 110 241
                L 225 190
                L 327 155
                L 430 127
                L 529 75"
                fill="none"
                stroke="#eeeeee"
                stroke-width="1.8"
                stroke-dasharray="9 6"/>

            <!-- Legend -->
            <text x="157" y="58"
                  font-size="11"
                  font-style="italic"
                  fill="#687b7d">
                highlighted = inside the buffer
            </text>

            <!-- 50 m Measurement Line -->
            <line x1="311" y1="103"
                  x2="327" y2="155"
                  stroke="#ed5415"
                  stroke-width="2.5"/>

            <!-- Measurement Points -->
            <circle cx="311" cy="103"
                    r="3.5"
                    fill="#ed5415"/>

            <circle cx="327" cy="155"
                    r="3.5"
                    fill="#ed5415"/>

            <!-- Distance Label -->
            <text x="265" y="115"
                  font-size="13"
                  font-weight="bold"
                  fill="#ed5415">
                50 m
            </text>

            <!-- Buildings Outside Buffer -->
            <g fill="#ffffff"
               stroke="#17677c"
               stroke-width="1.5">

                <rect x="177" y="95" width="18" height="18"/>
                <rect x="242" y="85" width="18" height="18"/>
                <rect x="299" y="70" width="18" height="18"/>
                <rect x="353" y="63" width="18" height="18"/>

                <rect x="126" y="142" width="18" height="18"/>

                <rect x="400" y="204" width="18" height="18"/>
                <rect x="465" y="189" width="18" height="18"/>

                <rect x="256" y="236" width="18" height="18"/>
                <rect x="335" y="236" width="18" height="18"/>
                <rect x="454" y="246" width="18" height="18"/>

            </g>

            <!-- Buildings Inside Buffer -->
            <g fill="#ffc46b"
               stroke="#f07816"
               stroke-width="1.7">

                <rect x="386" y="74" width="18" height="18"/>
                <rect x="425" y="67" width="18" height="18"/>
                <rect x="263" y="131" width="18" height="18"/>
                <rect x="494" y="117" width="18" height="18"/>
                <rect x="126" y="204" width="18" height="18"/>
                <rect x="166" y="258" width="18" height="18"/>

            </g>

            <!-- Bottom Caption -->
            <text x="318" y="326"
                  text-anchor="middle"
                  font-size="11"
                  font-weight="bold"
                  fill="#e65d19">
                what lies inside the zone?
            </text>

        </svg>

    </div>
</div>

<h2>Steps</h2>

<div>

    <!-- Step 1 -->
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 24px; height: 24px; border-radius: 50%; text-align: center; line-height: 24px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">1</div>
        <div>Use a layer in a projected CRS so the buffer distance is measured in metres.</div>
    </div>

    <!-- Step 2 -->
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 24px; height: 24px; border-radius: 50%; text-align: center; line-height: 24px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">2</div>
        <div>Open <strong>Vector &gt; Geoprocessing Tools &gt; Buffer</strong>.</div>
    </div>

    <!-- Step 3 -->
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 24px; height: 24px; border-radius: 50%; text-align: center; line-height: 24px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">3</div>
        <div>Select the input layer (such as roads) and enter a buffer distance of <strong>50 metres</strong>.</div>
    </div>

    <!-- Step 4 -->
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 24px; height: 24px; border-radius: 50%; text-align: center; line-height: 24px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">4</div>
        <div>Enable <strong>Dissolve result</strong> to combine overlapping buffer areas into one zone, then run the tool.</div>
    </div>

    <!-- Step 5 -->
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 24px; height: 24px; border-radius: 50%; text-align: center; line-height: 24px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">5</div>
        <div>Use <strong>Select by Location</strong> to select buildings that intersect the buffer.</div>
    </div>

    <!-- Step 6 -->
    <div style="display: flex; margin-bottom: 12px; align-items: flex-start;">
        <div style="background: #f07b24; color: #fff; width: 24px; height: 24px; border-radius: 50%; text-align: center; line-height: 24px; font-weight: bold; margin-right: 10px; flex-shrink: 0;">6</div>
        <div>Count the selected buildings or export them using <strong>Export &gt; Save Selected Features As</strong>.</div>
    </div>

</div>

<!-- Quick Tip -->
<div class="tip">
    <p style="margin: 0;">
        <strong>Quick tip:</strong> A geographic CRS uses degrees rather than metres.
        Reproject the layer to a suitable projected CRS before creating a distance-based buffer.
    </p>
</div>
