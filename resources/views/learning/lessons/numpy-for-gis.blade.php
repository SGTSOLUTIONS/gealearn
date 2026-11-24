
{{-- resources/views/learning/lessons/8-19-numpy.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    NumPy is a Python library used for fast calculations. In GIS, it helps process raster data by performing calculations on many cells at once.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand NumPy arrays and their role in raster processing</li>
    <li>Perform calculations using array operations</li>
    <li>Create Boolean masks to identify specific raster cells</li>
    <li>Use <code>np.where()</code> to apply conditions to raster values</li>
    <li>Understand how NumPy supports GIS analysis</li>
</ul>

<h2>NumPy Arrays</h2>

<p>
    A NumPy array stores numerical values in rows and columns.
    Since raster datasets also contain rows and columns of cell values,
    they can be easily represented and processed using NumPy arrays.
</p>

<div style="display: flex; flex-wrap: wrap; gap: 15px; margin: 20px 0;">

    <div style="flex: 1 1 220px; border: 1px solid #ddd; border-radius: 8px; padding: 15px; background: #f8fbff;">
        <h3 style="margin-top: 0;">NumPy Array</h3>
        <p>A numerical array:</p>
        <pre style="background: #eaf2fa; padding: 12px; border-radius: 5px; overflow-x: auto;">[[5, 12, 18],
 [8, 16, 22]]</pre>
    </div>

    <div style="flex: 1 1 220px; border: 1px solid #ddd; border-radius: 8px; padding: 15px; background: #f8fbff;">
        <h3 style="margin-top: 0;">Raster Data</h3>
        <p>A raster stores values in a grid of cells.</p>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 3px; text-align: center;">
            <div style="background: #d9eaf7; padding: 10px;">5</div>
            <div style="background: #d9eaf7; padding: 10px;">12</div>
            <div style="background: #d9eaf7; padding: 10px;">18</div>
            <div style="background: #d9eaf7; padding: 10px;">8</div>
            <div style="background: #d9eaf7; padding: 10px;">16</div>
            <div style="background: #d9eaf7; padding: 10px;">22</div>
        </div>
    </div>

</div>

<p>
    Each array element represents a raster cell value. This makes NumPy
    useful for calculations involving elevation, temperature, rainfall,
    slope and other raster measurements.
</p>

<h2>Creating and Performing Array Operations</h2>

<p>
    NumPy provides functions to create arrays and perform calculations
    on them. Operations such as addition, multiplication and comparison
    can be applied to every element at once.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        NumPy Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>import numpy as np

# Create an array of elevation values
elevation = np.array([
    [120, 150, 180],
    [100, 170, 200]
])

# Add 10 to every cell
updated = elevation + 10

print(updated)</code></pre>
</div>

<p><strong>Output:</strong></p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 15px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>[[130 160 190]
 [110 180 210]]</code></pre>
</div>

<p>
    Instead of writing a loop for every cell, NumPy performs the
    calculation across the entire array. This is called a vectorized
    operation.
</p>

<h2>Working with Boolean Masks</h2>

<p>
    A Boolean mask is an array containing <code>True</code> or
    <code>False</code> values. It is created by applying a condition
    to an array.
</p>

<p>
    For example, a GIS analyst may want to identify raster cells where
    the slope value is greater than 15 degrees.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        NumPy Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>import numpy as np

slope = np.array([
    [5, 12, 18],
    [8, 16, 22]
])

# Identify cells with slope greater than 15
steep = slope > 15

print(steep)</code></pre>
</div>

<p><strong>Output:</strong></p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 15px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>[[False False  True]
 [False  True  True]]</code></pre>
</div>

<p>
    The mask identifies three cells where the slope is greater than
    15 degrees. These cells can be selected for further terrain analysis.
</p>

<h2>Using np.where() for Conditional Analysis</h2>

<p>
    The <code>np.where()</code> function assigns values based on a
    condition. It is useful for classifying raster cells into categories.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        NumPy Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>import numpy as np

slope = np.array([
    [5, 12, 18],
    [8, 16, 22]
])

# Classify steep cells as 1 and other cells as 0
steep_class = np.where(slope > 15, 1, 0)

print(steep_class)</code></pre>
</div>

<p><strong>Output:</strong></p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 15px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>[[0 0 1]
 [0 1 1]]</code></pre>
</div>

<p>
    Here, cells with slope values greater than 15 are assigned
    <code>1</code>, while the remaining cells are assigned
    <code>0</code>. This creates a simple raster classification.
</p>

<h2>Common NumPy Functions Used in GIS</h2>

<div style="overflow-x: auto;">
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background: #eef3f8;">
                <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Function</th>
                <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Purpose</th>
                <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">GIS Use</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>np.array()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Creates an array</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Stores raster cell values</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>np.mean()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Calculates the average</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Finds average elevation or temperature</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>np.max()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Finds the maximum value</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Identifies the highest raster value</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>np.min()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Finds the minimum value</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Identifies the lowest raster value</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>np.where()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Applies conditional logic</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Classifies raster cells</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>np.sum()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Calculates the total</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Totals selected values</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Applications of NumPy in GIS</h2>

<ul>
    <li><strong>Terrain analysis:</strong> Performs calculations on elevation and slope raster data.</li>
    <li><strong>Raster classification:</strong> Groups cells based on their numerical values.</li>
    <li><strong>Environmental analysis:</strong> Calculates statistics from temperature and rainfall datasets.</li>
    <li><strong>Satellite image processing:</strong> Performs numerical operations on image bands.</li>
    <li><strong>Spatial analysis:</strong> Identifies cells that satisfy specific geographic conditions.</li>
</ul>

<h2>Working with NumPy and Other GIS Libraries</h2>

<p>
    NumPy is often used together with other Python GIS libraries.
    Libraries such as Rasterio and GDAL can read raster files, while
    NumPy can process the cell values returned by these libraries.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Python GIS Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>import rasterio
import numpy as np

# Open a raster dataset
with rasterio.open("elevation.tif") as src:
    elevation = src.read(1)

    # Calculate the average elevation
    average = np.mean(elevation)

    print("Average elevation:", average)</code></pre>
</div>

<p>
    In this example, Rasterio reads the raster data and NumPy calculates
    its average cell value. This combination is commonly used in
    Python-based raster analysis.
</p>

<div class="tip">
    <p style="margin: 0;">
        <strong>Tip:</strong> Use NumPy array operations for raster calculations
        instead of writing individual loops for every cell. When working with
        real raster datasets, account for NoData values so they do not affect
        your calculations.
    </p>
</div>
