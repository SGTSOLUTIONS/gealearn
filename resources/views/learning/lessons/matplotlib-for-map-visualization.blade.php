
{{-- resources/views/learning/lessons/8-21-matplotlib.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Matplotlib is a Python library used to create charts and maps.
    In GIS, it helps visualise geographic data and create maps
    that can be saved as images.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how Matplotlib is used in GIS</li>
    <li>Create choropleth maps</li>
    <li>Add titles, colours and legends</li>
    <li>Customise map appearance</li>
    <li>Save maps as image files</li>
</ul>

<h2>Understanding Matplotlib in GIS</h2>

<p>
    Matplotlib provides tools to display data visually.
    It works with libraries such as GeoPandas to create maps
    from geographic datasets.
</p>

<p>
    For example, a population dataset can be displayed as a
    choropleth map, where different colours represent different
    population values across geographic areas.
</p>

<h2>Creating a Choropleth Map</h2>

<p>
    A choropleth map uses different colours to represent
    numerical values across geographic areas. In GIS, it can
    be used to show population, rainfall, land use or other
    statistical information.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Python GIS Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>import geopandas as gpd
import matplotlib.pyplot as plt

# Read the ward dataset
wards = gpd.read_file("wards.shp")

# Create a map
fig, ax = plt.subplots(figsize=(8, 6))

# Display population values
wards.plot(
    column="pop",
    cmap="Blues",
    legend=True,
    ax=ax
)

plt.show()</code></pre>
</div>

<p>
    In this example, GeoPandas reads the ward dataset and Matplotlib
    displays population values using a blue colour scheme.
    Areas with different population values appear in different shades.
</p>

<h2>Customising Map Appearance</h2>

<p>
    Matplotlib allows you to customise the appearance of a map
    by adding a title, adjusting its size and hiding unnecessary
    axis lines. These changes make the map easier to understand.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Python GIS Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>import matplotlib.pyplot as plt

fig, ax = plt.subplots(figsize=(8, 6))

wards.plot(
    column="pop",
    cmap="Blues",
    legend=True,
    edgecolor="black",
    ax=ax
)

# Add a map title
ax.set_title("Population by Ward")

# Hide axis lines
ax.set_axis_off()

plt.show()</code></pre>
</div>

<p>
    The <code>set_title()</code> function adds a heading to the map.
    The <code>set_axis_off()</code> function hides the coordinate
    axes, giving the map a cleaner appearance.
</p>

<h2>Understanding Common Map Settings</h2>

<div style="overflow-x: auto;">
    <table style="width: 100%; border-collapse: collapse; min-width: 450px;">
        <thead>
            <tr style="background: #29384d; color: #fff;">
                <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Function or Setting</th>
                <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Purpose</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>plt.subplots()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Creates a figure and drawing area.</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>figsize</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Controls the figure size.</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>column</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Selects the attribute used to colour the map.</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>cmap</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Sets the colour scheme.</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>legend=True</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Displays the map legend.</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>ax.set_title()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Adds a map title.</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>ax.set_axis_off()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Hides the coordinate axes.</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Choosing Colours for Maps</h2>

<p>
    Colours help communicate information clearly on a map.
    Matplotlib provides different colour schemes, known as
    colour maps, for displaying numerical values.
</p>

<ul>
    <li><strong>Blues:</strong> Uses different shades of blue to represent values.</li>
    <li><strong>Greens:</strong> Useful for displaying vegetation and environmental data.</li>
    <li><strong>Reds:</strong> Can highlight areas with higher values.</li>
    <li><strong>YlOrRd:</strong> Uses yellow, orange and red shades to represent increasing values.</li>
</ul>

<p>
    Choosing an appropriate colour scheme makes it easier to
    compare geographic areas and understand spatial patterns.
</p>

<h2>Saving Maps as Images</h2>

<p>
    After creating a map, Matplotlib can save it as an image file.
    This is useful when adding maps to reports, presentations
    and GIS project documentation.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Python GIS Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code># Save the map as a PNG image
plt.savefig(
    "population_map.png",
    dpi=300,
    bbox_inches="tight"
)

# Display the map
plt.show()</code></pre>
</div>

<p>
    The <code>savefig()</code> function exports the map as an image.
    The <code>dpi</code> setting controls image resolution, while
    <code>bbox_inches="tight"</code> helps remove unnecessary
    surrounding whitespace.
</p>

<h2>Applications of Matplotlib in GIS</h2>

<ul>
    <li><strong>Population mapping:</strong> Displays population distribution across geographic areas.</li>
    <li><strong>Environmental mapping:</strong> Visualises rainfall, temperature and vegetation data.</li>
    <li><strong>Land-use mapping:</strong> Displays different land-use categories.</li>
    <li><strong>Statistical charts:</strong> Creates bar charts, line graphs and histograms from GIS data.</li>
    <li><strong>Map reporting:</strong> Exports maps for reports, research and presentations.</li>
</ul>

<h2>Working with GeoPandas and Matplotlib</h2>

<p>
    GeoPandas handles geographic data, while Matplotlib controls
    how that data is displayed. Together, they make it possible
    to create customised maps directly from vector datasets.
</p>

<p>
    GeoPandas provides the <code>plot()</code> method for drawing
    geographic features, and Matplotlib provides the tools to
    customise the figure, title, legend and overall appearance.
</p>

<div class="tip">
    <p style="margin: 0;">
        <strong>Tip:</strong> Use clear titles, suitable colour schemes
        and readable legends to make your GIS maps easier to understand.
        Use <code>dpi=300</code> when exporting maps for high-quality printing.
    </p>
</div>
