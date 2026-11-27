
{{-- resources/views/learning/lessons/8-20-pandas.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Pandas is a Python library used to work with tables.
    In GIS, it helps manage attribute data, filter records,
    calculate summaries and combine tables.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Read and write CSV files</li>
    <li>Understand Pandas DataFrames</li>
    <li>Filter and group table records</li>
    <li>Join tables using common columns</li>
    <li>Use Pandas for GIS attribute data</li>
</ul>

<h2>Pandas DataFrames</h2>

<p>
    Pandas stores tabular data in a structure called a DataFrame.
    A DataFrame contains rows and columns, similar to an attribute
    table in GIS.
</p>

<p>
    For example, a ward dataset may contain ward names, population
    values and settlement types.
</p>

<div style="overflow-x: auto; margin: 20px 0;">
    <table style="width: 100%; border-collapse: collapse; min-width: 400px;">
        <thead>
            <tr style="background: #29384d; color: #fff;">
                <th style="padding: 10px; border: 1px solid #ddd;">Ward ID</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Ward</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Type</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Population</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">W01</td>
                <td style="padding: 10px; border: 1px solid #ddd;">A</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Urban</td>
                <td style="padding: 10px; border: 1px solid #ddd;">5400</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">W02</td>
                <td style="padding: 10px; border: 1px solid #ddd;">B</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Rural</td>
                <td style="padding: 10px; border: 1px solid #ddd;">4100</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">W03</td>
                <td style="padding: 10px; border: 1px solid #ddd;">C</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Urban</td>
                <td style="padding: 10px; border: 1px solid #ddd;">7800</td>
            </tr>
        </tbody>
    </table>
</div>

<p>
    Each row represents a ward, while each column stores information
    about that ward. Pandas makes it easy to analyse and manage this data.
</p>

<h2>Reading and Writing CSV Files</h2>

<p>
    CSV files are commonly used to store GIS attribute data.
    Pandas can read these files into a DataFrame and save modified
    data back to a CSV file.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Pandas Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>import pandas as pd

# Read a CSV file
df = pd.read_csv("wards.csv")

# Display the table
print(df.head())

# Save the table
df.to_csv("updated_wards.csv", index=False)</code></pre>
</div>

<p>
    The <code>read_csv()</code> function loads the CSV file into a
    DataFrame. The <code>to_csv()</code> function saves the data
    into a new CSV file.
</p>

<h2>Filtering Records</h2>

<p>
    Filtering selects only the rows that satisfy a condition.
    For example, you can find wards with a population greater
    than 5,000.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Pandas Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>import pandas as pd

df = pd.read_csv("wards.csv")

# Select wards with population above 5000
large_wards = df[df["Population"] > 5000]

print(large_wards)</code></pre>
</div>

<p>
    The result contains only the wards that meet the condition.
    Filtering is useful when analysing specific areas or selecting
    records for further GIS processing.
</p>

<h2>Grouping and Summarising Data</h2>

<p>
    The <code>groupby()</code> function groups records based on a
    common category. You can then calculate totals, averages and
    other statistics for each group.
</p>

<p>
    For example, population values can be grouped by settlement type
    to calculate the total population in urban and rural wards.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Pandas Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>import pandas as pd

df = pd.read_csv("wards.csv")

# Calculate total population by type
result = df.groupby("Type")["Population"].sum()

print(result)</code></pre>
</div>

<p><strong>Output:</strong></p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 15px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>Type
Rural     4100
Urban    13200</code></pre>
</div>

<p>
    The result shows the total population for each settlement type.
    This helps compare population distribution across different areas.
</p>

<h2>Joining Tables</h2>

<p>
    The <code>merge()</code> function combines two tables using a
    common column. In GIS, this is useful when joining an external
    CSV table with an attribute table using a unique ID.
</p>

<p>
    For example, a ward table and a population-rate table can be
    combined using their common <code>ward_id</code> column.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Pandas Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>import pandas as pd

wards = pd.read_csv("wards.csv")
rates = pd.read_csv("rates.csv")

# Join tables using ward_id
combined = wards.merge(rates, on="ward_id")

print(combined.head())</code></pre>
</div>

<p>
    The merged table contains columns from both datasets.
    The common ID connects the matching records.
</p>

<h2>Common Pandas Functions Used in GIS</h2>

<div style="overflow-x: auto;">
    <table style="width: 100%; border-collapse: collapse; min-width: 450px;">
        <thead>
            <tr style="background: #29384d; color: #fff;">
                <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Function</th>
                <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">Purpose</th>
                <th style="padding: 10px; border: 1px solid #ddd; text-align: left;">GIS Use</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>pd.read_csv()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Reads CSV files</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Loads attribute data</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>df.head()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Displays the first rows</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Checks table records</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>df.groupby()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Groups records</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Summarises area statistics</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>df.merge()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Combines tables</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Joins external data</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;"><code>df.to_csv()</code></td>
                <td style="padding: 10px; border: 1px solid #ddd;">Writes CSV files</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Exports processed data</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Applications of Pandas in GIS</h2>

<ul>
    <li><strong>Attribute management:</strong> Organises and updates GIS table records.</li>
    <li><strong>Population analysis:</strong> Filters and summarises population data by area.</li>
    <li><strong>Data cleaning:</strong> Identifies missing values and duplicate records.</li>
    <li><strong>Table joining:</strong> Combines survey data with geographic attribute tables.</li>
    <li><strong>Statistical analysis:</strong> Calculates totals, averages and other statistics for geographic areas.</li>
</ul>

<h2>Working with Pandas and GeoPandas</h2>

<p>
    Pandas is mainly used for tabular data, while GeoPandas extends
    Pandas to work with geographic data. A GeoDataFrame stores both
    attribute information and spatial geometries.
</p>

<p>
    This allows you to filter attribute records using Pandas methods
    and perform spatial operations using GeoPandas.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Python GIS Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.8; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>import geopandas as gpd

# Read a geographic dataset
gdf = gpd.read_file("wards.shp")

# Filter wards by population
large_wards = gdf[gdf["Population"] > 5000]

# Save the selected features
large_wards.to_file("large_wards.gpkg", driver="GPKG")</code></pre>
</div>

<p>
    In this example, GeoPandas reads a shapefile, uses a Pandas-style
    condition to select wards with a population above 5,000, and saves
    the selected geographic features as a GeoPackage.
</p>

<div class="tip">
    <p style="margin: 0;">
        <strong>Tip:</strong> Use Pandas to manage and analyse attribute
        tables. Use GeoPandas when your work also involves geographic
        features and spatial operations.
    </p>
</div>
