{{-- resources/views/learning/lessons/8-21-matplotlib.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Matplotlib draws maps and charts from your data and saves them as images.
    It gives you full control over the final appearance of your map.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a choropleth map</li>
    <li>Add a title and legend</li>
    <li>Save the map as an image</li>
</ul>

<h2>Visual Guide: Map and Code</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 55%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">matplotlib.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            import matplotlib.pyplot as plt<br>
            fig, ax = plt.subplots(figsize=(6, 6))<br>
            wards.plot(ax=ax, column="pop",<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmap="Blues", legend=True)<br>
            ax.set_title("Population by ward")<br>
            ax.set_axis_off()<br>
            plt.savefig("map.png", dpi=300)
        </div>
    </div>
    <div style="width: 40%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff; text-align: center;">
        <div style="font-weight: bold; font-size: 12px; color: #282A35; margin-bottom: 5px;">Population by ward</div>
        <div style="height: 80px; background: #e3f2fd; border: 1px solid #ccc; position: relative;">
            <div style="position: absolute; top: 10px; left: 10px; width: 40px; height: 40px; background: #90caf9; border: 1px solid #fff;"></div>
            <div style="position: absolute; top: 10px; right: 10px; width: 40px; height: 40px; background: #2196f3; border: 1px solid #fff;"></div>
            <div style="position: absolute; bottom: 10px; left: 10px; width: 40px; height: 40px; background: #0d47a1; border: 1px solid #fff;"></div>
            <div style="position: absolute; bottom: 10px; right: 10px; width: 40px; height: 40px; background: #64b5f6; border: 1px solid #fff;"></div>
        </div>
        <div style="display: flex; justify-content: flex-end; align-items: center; margin-top: 5px; font-size: 10px;">
            <div style="width: 10px; height: 10px; background: #0d47a1;"></div>
            <div style="width: 10px; height: 10px; background: #2196f3;"></div>
            <div style="width: 10px; height: 10px; background: #90caf9;"></div>
            <div style="width: 10px; height: 10px; background: #e3f2fd;"></div>
            <span style="margin-left: 5px;">pop</span>
        </div>
    </div>
</div>

<p>
    The diagram shows the Matplotlib code for creating a choropleth map and the resulting image with a title, colour scheme, and legend.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is Matplotlib?</strong> Python's main plotting library for charts and maps.</li>
    <li><strong>How do I draw a choropleth?</strong> <code>gdf.plot(column="pop", cmap="Blues", legend=True)</code>.</li>
    <li><strong>What are fig and ax?</strong> fig is the page; ax is the drawing area on it.</li>
    <li><strong>How do I add a title?</strong> <code>ax.set_title("Population by ward")</code>.</li>
    <li><strong>How do I save the map?</strong> <code>plt.savefig("map.png", dpi=300)</code>.</li>
    <li><strong>How do I hide the axes?</strong> <code>ax.set_axis_off()</code>.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Use dpi=300 for print; 96&ndash;150 is enough for screens.</p>
</div>