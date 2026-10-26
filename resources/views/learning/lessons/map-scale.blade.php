{{-- resources/views/learning/lessons/map-scale.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Map scale is the ratio between a distance on the map and the same distance on the ground.
    A scale of 1:50,000 means 1 unit on the map equals 50,000 of the same units on the ground.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand what map scale is</li>
    <li>Learn the three ways to express scale</li>
    <li>Recognise the difference between large-scale and small-scale maps</li>
</ul>

<div class="note">
    <p style="margin:0"><strong>Note:</strong> A bigger scale denominator means a smaller scale.</p>
</div>

<h2>Visualizing Scale</h2>

<!-- Pure CSS Diagram Recreating the PDF Image -->
<div style="background: #f1f5f9; padding: 30px 20px; border-radius: 8px; margin-bottom: 24px; text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; overflow-x: auto;">
    
    <!-- Top Row: Ratio -->
    <div style="display: flex; align-items: center; justify-content: center; gap: 15px; margin-bottom: 30px; min-width: 500px;">
        <div style="text-align: left;">
            <div style="font-size: 14px; font-weight: 700; color: #1e293b; margin-bottom: 5px;">Map</div>
            <div style="width: 120px; height: 20px; background: #0f766e; border-radius: 3px;"></div>
            <div style="font-size: 12px; color: #475569; margin-top: 5px;">1 cm</div>
        </div>
        
        <div style="font-size: 20px; font-weight: 700; color: #475569; margin: 0 15px;">=</div>

        <div style="text-align: left;">
            <div style="font-size: 14px; font-weight: 700; color: #1e293b; margin-bottom: 5px;">Ground</div>
            <div style="width: 250px; height: 20px; background: #16a34a; border-radius: 3px;"></div>
            <div style="font-size: 12px; color: #475569; margin-top: 5px;">500 m</div>
        </div>

        <div style="background: #fff; border: 1px solid #cbd5e1; padding: 5px 15px; border-radius: 20px; font-size: 13px; font-weight: 700; color: #1e293b; margin-left: 20px;">
            Ratio 1:50,000
        </div>
    </div>

    <!-- Middle Row: Graphic Scale Bar -->
    <div style="text-align: left; max-width: 400px; margin: 0 auto 30px auto; min-width: 300px;">
        <div style="font-size: 14px; font-weight: 700; color: #1e293b; margin-bottom: 10px;">Graphic scale bar</div>
        
        <!-- The Bar -->
        <div style="display: flex; height: 16px; border: 1px solid #1e293b;">
            <div style="flex: 1; background: #1e293b;"></div>
            <div style="flex: 1; background: #fff;"></div>
            <div style="flex: 1; background: #1e293b;"></div>
            <div style="flex: 1; background: #fff;"></div>
        </div>
        
        <!-- Labels -->
        <div style="display: flex; justify-content: space-between; margin-top: 5px; font-size: 12px; font-weight: 600; color: #1e293b;">
            <span>0</span>
            <span>1</span>
            <div style="display: flex; gap: 25px;">
                <span>2 km</span>
            </div>
        </div>
        
        <div style="font-size: 11px; color: #64748b; margin-top: 10px; text-align: center;">
            Only the bar stays correct when a map is resized.
        </div>
    </div>

    <!-- Bottom Row: Large vs Small Scale -->
    <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; border-top: 1px solid #cbd5e1; padding-top: 25px;">
        
        <!-- Large Scale -->
        <div style="text-align: center; flex: 1; min-width: 250px; max-width: 300px;">
            <div style="background: #e8f5e9; border: 2px solid #2e7d32; border-radius: 8px; padding: 15px; height: 140px; display: flex; flex-direction: column; justify-content: center;">
                <!-- Grid of large blocks (simulating buildings) -->
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 4px; padding: 0 10px;">
                    <div style="background: #f59e0b; height: 30px; border-radius: 2px; border: 1px solid #b45309;"></div>
                    <div style="background: #f59e0b; height: 30px; border-radius: 2px; border: 1px solid #b45309;"></div>
                    <div style="background: #f59e0b; height: 30px; border-radius: 2px; border: 1px solid #b45309;"></div>
                    <div style="background: #f59e0b; height: 30px; border-radius: 2px; border: 1px solid #b45309;"></div>
                    <div style="background: #f59e0b; height: 30px; border-radius: 2px; border: 1px solid #b45309;"></div>
                    <div style="background: #f59e0b; height: 30px; border-radius: 2px; border: 1px solid #b45309;"></div>
                </div>
            </div>
            <div style="font-size: 13px; font-weight: 700; color: #2e7d32; margin-top: 12px;">
                Large scale 1:5,000:<br><span style="font-weight: 400; color: #475569;">Small area, more detail</span>
            </div>
        </div>

        <!-- Small Scale -->
        <div style="text-align: center; flex: 1; min-width: 250px; max-width: 300px;">
            <div style="background: #e0f2fe; border: 2px solid #0284c7; border-radius: 8px; padding: 15px; height: 140px; display: flex; align-items: center; justify-content: center;">
                <!-- Generalized shape with points (simulating an area) -->
                <div style="width: 80%; height: 70%; background: #bbf7d0; border: 1px solid #0284c7; border-radius: 4px; position: relative; clip-path: polygon(10% 20%, 90% 0%, 100% 80%, 0% 100%);">
                    <!-- Point markers -->
                    <div style="position: absolute; top: 40%; left: 30%; width: 6px; height: 6px; background: #ef4444; border-radius: 50%;"></div>
                    <div style="position: absolute; top: 50%; left: 60%; width: 6px; height: 6px; background: #ef4444; border-radius: 50%;"></div>
                    <div style="position: absolute; top: 30%; left: 70%; width: 6px; height: 6px; background: #ef4444; border-radius: 50%;"></div>
                </div>
            </div>
            <div style="font-size: 13px; font-weight: 700; color: #0284c7; margin-top: 12px;">
                Small scale 1:1,000,000:<br><span style="font-weight: 400; color: #475569;">Large area, less detail</span>
            </div>
        </div>
    </div>
</div>

<h2>Key Points</h2>
<ul>
    <li><strong>Three ways to show scale:</strong> ratio (1:50,000), verbal ("1 cm = 500 m"), and a graphic scale bar.</li>
    <li><strong>Large scale</strong> means a small area with more detail (1:5,000).</li>
    <li><strong>Small scale</strong> means a large area with less detail (1:1,000,000).</li>
    <li>Only the scale bar stays correct when a map is enlarged or reduced. A ratio is no longer true after resizing.</li>
    <li>In GIS, you can zoom to any scale, but data is only accurate to the scale it was collected at.</li>
</ul>

<h2>Scale Types and Typical Use</h2>
<ul>
    <li><strong>Large (1:1,000 to 1:5,000):</strong> Site plans, city blocks.</li>
    <li><strong>Medium (1:25,000 to 1:100,000):</strong> Topographic maps.</li>
    <li><strong>Small (1:1,000,000 and smaller):</strong> Country and world maps.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Think of it as a fraction. 1/5,000 is bigger than 1/1,000,000, so 1:5,000 is the larger scale.</p>
</div>