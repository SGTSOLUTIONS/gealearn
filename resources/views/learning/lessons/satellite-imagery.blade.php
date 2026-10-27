<p>
   Satellite imagery is a picture of the Earth recorded by sensors on orbiting satellites. Each image is a raster of pixels with one or more bands.
</p>

<div style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 8px; margin: 30px 0; padding: 40px 30px; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 40px;">
    
    <!-- Left Side: Orbit Diagram -->
    <div style="position: relative; width: 250px; height: 200px; display: flex; align-items: center; justify-content: center;">
        
        <!-- Dashed Orbit -->
        <div style="position: absolute; width: 180px; height: 160px; border: 2px dashed #94a3b8; border-radius: 50%; transform: rotate(-15deg);"></div>
        
        <!-- Earth -->
        <div style="position: absolute; width: 130px; height: 130px; background: #d6eaf8; border-radius: 50%; border: 1px solid #1e3a5f; display: flex; align-items: center; justify-content: center;">
            <!-- Landmass 1 -->
            <div style="width: 25px; height: 25px; background: #a9dfbf; border-radius: 50%; position: absolute; top: 25px; left: 30px;"></div>
            <!-- Landmass 2 -->
            <div style="width: 20px; height: 20px; background: #a9dfbf; border-radius: 50%; position: absolute; bottom: 30px; right: 25px;"></div>
        </div>

        <!-- Satellite Label -->
        <div style="position: absolute; top: 10px; right: 35px; font-weight: bold; color: #1e3a5f;">Satellite</div>
        
        <!-- Satellite Graphic (Angled) -->
        <div style="position: absolute; top: 35px; right: 50px; display: flex;">
            <div style="width: 25px; height: 12px; background: #1e3a5f; border-radius: 2px; transform: rotate(35deg);"></div>
            <div style="width: 15px; height: 8px; background: #1e3a5f; margin-left: -5px; margin-top: 10px; transform: rotate(35deg);"></div>
        </div>

        <!-- Orbit Label -->
        <div style="position: absolute; top: 45px; left: 0px; color: #64748b;">orbit</div>
        
    </div>

    <!-- Right Side: Common Sources -->
    <div style="display: flex; flex-direction: column; align-items: flex-start; flex-grow: 1; max-width: 500px;">
        <div style="font-weight: bold; color: #1e3a5f; margin-bottom: 15px;">Common sources (pixel size and revisit time)</div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; width: 100%;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 15px;">
                <div style="font-weight: bold; color: #1e3a5f; margin-bottom: 5px;">Landsat 8/9</div>
                <div style="color: #333;">30 m pixels</div>
                <div style="color: #333; margin-bottom: 8px;">revisit 16 days</div>
                <span style="background: #1bba85; color: white; padding: 2px 10px; border-radius: 12px; font-weight: bold;">Free</span>
            </div>
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 15px;">
                <div style="font-weight: bold; color: #1e3a5f; margin-bottom: 5px;">Sentinel-2</div>
                <div style="color: #333;">10 m pixels</div>
                <div style="color: #333; margin-bottom: 8px;">revisit about 5 days</div>
                <span style="background: #1bba85; color: white; padding: 2px 10px; border-radius: 12px; font-weight: bold;">Free</span>
            </div>
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 15px;">
                <div style="font-weight: bold; color: #1e3a5f; margin-bottom: 5px;">MODIS</div>
                <div style="color: #333;">250 m - 1 km pixels</div>
                <div style="color: #333; margin-bottom: 8px;">revisit daily</div>
                <span style="background: #1bba85; color: white; padding: 2px 10px; border-radius: 12px; font-weight: bold;">Free</span>
            </div>
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 15px;">
                <div style="font-weight: bold; color: #1e3a5f; margin-bottom: 5px;">Commercial</div>
                <div style="color: #333;">0.3 - 3 m pixels</div>
                <div style="color: #333; margin-bottom: 8px;">on request (tasking)</div>
                <span style="background: #f39c12; color: white; padding: 2px 10px; border-radius: 12px; font-weight: bold;">Paid</span>
            </div>
        </div>
    </div>

</div>

<h3>Quick Q&A</h3>
<ul style="list-style: none; padding-left: 0; margin: 0;">
    <li style="margin-bottom: 20px; line-height: 1.5;"><span style="font-weight: 600; display: block; margin-bottom: 4px;">Q. What is satellite imagery?</span><span style="font-weight: 400; display: block;">A. Raster images of the Earth recorded by sensors on orbiting satellites.</span></li>
    <li style="margin-bottom: 20px; line-height: 1.5;"><span style="font-weight: 600; display: block; margin-bottom: 4px;">Q. Where can I get free imagery?</span><span style="font-weight: 400; display: block;">A. USGS EarthExplorer (Landsat), the Copernicus browser (Sentinel) and NASA Earthdata (MODIS).</span></li>
    <li style="margin-bottom: 20px; line-height: 1.5;"><span style="font-weight: 600; display: block; margin-bottom: 4px;">Q. What orbit types exist?</span><span style="font-weight: 400; display: block;">A. Polar sun-synchronous orbits pass at the same local time each day. Geostationary orbits stay over one spot (weather satellites).</span></li>
    <li style="margin-bottom: 20px; line-height: 1.5;"><span style="font-weight: 600; display: block; margin-bottom: 4px;">Q. Which satellites are common?</span><span style="font-weight: 400; display: block;">A. Landsat (30 m), Sentinel-2 (10 m) and MODIS (250 m to 1 km). Commercial satellites reach about 0.3 to 3 m.</span></li>
    <li style="margin-bottom: 20px; line-height: 1.5;"><span style="font-weight: 600; display: block; margin-bottom: 4px;">Q. What is a swath?</span><span style="font-weight: 400; display: block;">A. The strip of ground a satellite records on one pass of its orbit.</span></li>
    <li style="margin-bottom: 20px; line-height: 1.5;"><span style="font-weight: 600; display: block; margin-bottom: 4px;">Q. What should I check first?</span><span style="font-weight: 400; display: block;">A. Date, cloud cover, resolution and processing level before you download.</span></li>
</ul>

<div style="background-color: #f9fafb; border: 1px solid #e5e7eb; border-radius: 8px; padding: 20px 24px; margin-top: 40px; border-left: 6px solid #6b7280;">
    <strong>Quick tip:</strong> Filter by cloud cover below 10% when searching, then check the preview before downloading.
</div>