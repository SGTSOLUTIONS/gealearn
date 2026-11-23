
{{-- resources/views/learning/lessons/8-10-file-handling.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    File handling allows Python programs to read information from files,
    create new files and save processed results. In GIS programming,
    it is used to access geographic datasets, read attribute information,
    store analysis results and manage project data.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand how Python reads and writes files</li>
    <li>Use different file modes to manage files</li>
    <li>Read and write CSV and JSON data</li>
    <li>Access GIS datasets using GeoPandas</li>
    <li>Handle common file-related errors</li>
</ul>

<h2>File Handling in Python</h2>

<p>
    Python provides built-in functions to work with files stored on a
    computer. The <code>open()</code> function is used to access a file,
    while methods such as <code>read()</code>, <code>write()</code>
    and <code>readlines()</code> perform different file operations.
</p>

<p>
    The <code>with</code> statement is recommended when working with
    files because it automatically closes the file after the operation
    is completed, even if an error occurs.
</p>

<h3>Common File Modes</h3>

<div style="overflow-x:auto; margin:18px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:13px;">
        <thead>
            <tr style="background:#293548; color:white;">
                <th style="padding:11px; text-align:left;">Mode</th>
                <th style="padding:11px; text-align:left;">Purpose</th>
                <th style="padding:11px; text-align:left;">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background:#f1f5f9;">
                <td style="padding:10px;"><code>r</code></td>
                <td style="padding:10px;">Read</td>
                <td style="padding:10px;">Opens an existing file for reading.</td>
            </tr>
            <tr>
                <td style="padding:10px;"><code>w</code></td>
                <td style="padding:10px;">Write</td>
                <td style="padding:10px;">Creates a file or overwrites existing content.</td>
            </tr>
            <tr style="background:#f1f5f9;">
                <td style="padding:10px;"><code>a</code></td>
                <td style="padding:10px;">Append</td>
                <td style="padding:10px;">Adds new content to the end of a file.</td>
            </tr>
            <tr>
                <td style="padding:10px;"><code>rb</code></td>
                <td style="padding:10px;">Binary read</td>
                <td style="padding:10px;">Reads a file as binary data.</td>
            </tr>
            <tr style="background:#f1f5f9;">
                <td style="padding:10px;"><code>wb</code></td>
                <td style="padding:10px;">Binary write</td>
                <td style="padding:10px;">Writes binary data to a file.</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>1. Reading Files in Python</h2>

<p>
    Reading a file allows Python to access information that has already
    been stored on a computer. The <code>open()</code> function opens
    the file, and <code>read()</code> retrieves its contents.
</p>

<p>
    In GIS, text files can contain information such as project notes,
    location descriptions, processing details and dataset information.
</p>

<h3>Example: Reading a GIS Project Information File</h3>

<p>
    Assume a text file named <code>project_info.txt</code> contains
    information about a GIS project.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        project_info.txt
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; font-size:13px; line-height:1.5;"><code>Project Name: Urban Land Use Mapping
Study Area: Chennai
Data Type: Polygon
Coordinate System: EPSG:4326</code></pre>
</div>

<p>Use the following Python program to read the file.</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        read_file.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code># Open the project information file
with open("project_info.txt", "r") as file:

    # Read the complete file
    content = file.read()

    # Display the contents
    print(content)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The program opens the text file
    in read mode and retrieves all its contents using
    <code>read()</code>. The information is then displayed
    using <code>print()</code>.
</p>

<h3>Reading a File Line by Line</h3>

<p>
    When a file contains multiple records, it is often useful to
    process one line at a time instead of reading the entire file
    at once. Python allows this using a <code>for</code> loop.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        read_lines.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>with open("project_info.txt", "r") as file:

    for line in file:
        print(line.strip())</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The loop reads each line
    individually. The <code>strip()</code> method removes
    unnecessary spaces and newline characters from the beginning
    and end of each line.
</p>

<h2>2. Writing Data to Files</h2>

<p>
    Writing allows Python to save new information into a file.
    The <code>write()</code> method is used to store text.
    When a file is opened in write mode, its existing contents
    are replaced. If the file does not exist, Python creates it.
</p>

<h3>Example: Creating a GIS Processing Report</h3>

<p>
    After performing a GIS analysis, a program can save important
    information such as the study area, number of processed features
    and analysis results in a text file.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        write_report.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code># GIS analysis information
report = """GIS Processing Report
Study Area: Chennai
Features Processed: 150
Analysis: Land Use Classification
Status: Completed
"""

# Write the report into a file
with open("gis_report.txt", "w") as file:
    file.write(report)

print("GIS report saved successfully.")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The program stores GIS processing
    information in a variable and writes it into
    <code>gis_report.txt</code>. If the file already exists,
    the previous content is overwritten.
</p>

<h2>3. Appending Data to Files</h2>

<p>
    Sometimes, new information needs to be added without removing
    the existing content. Python provides append mode
    (<code>a</code>) for this purpose.
</p>

<h3>Example: Adding New Processing Records</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        append_records.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code># New GIS processing record
new_record = "Road Buffer Analysis: Completed\n"

# Append the record to the existing file
with open("gis_report.txt", "a") as file:
    file.write(new_record)

print("New record added successfully.")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The program opens the report
    in append mode and adds a new processing record at the end.
    The existing report content remains unchanged.
</p>

<h2>4. Working with CSV Files</h2>

<p>
    CSV (Comma-Separated Values) files store tabular information
    in rows and columns. They are commonly used in GIS to store
    attribute data such as road names, population, land-use
    categories and administrative details.
</p>

<p>
    Python provides the built-in <code>csv</code> module to read
    and write CSV files. The <code>DictReader()</code> method
    allows each row to be accessed using its column names.
</p>

<h3>Example: Reading Land Use Attribute Data</h3>

<p>
    Consider a CSV file containing information about different
    land-use features.
</p>

<div style="overflow-x:auto; margin:15px 0;">
    <table style="width:100%; border-collapse:collapse; font-size:13px;">
        <thead>
            <tr style="background:#293548; color:white;">
                <th style="padding:10px;">Parcel_ID</th>
                <th style="padding:10px;">Land_Use</th>
                <th style="padding:10px;">Area_ha</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background:#f1f5f9;">
                <td style="padding:10px;">P001</td>
                <td style="padding:10px;">Residential</td>
                <td style="padding:10px;">2.5</td>
            </tr>
            <tr>
                <td style="padding:10px;">P002</td>
                <td style="padding:10px;">Agriculture</td>
                <td style="padding:10px;">4.2</td>
            </tr>
            <tr style="background:#f1f5f9;">
                <td style="padding:10px;">P003</td>
                <td style="padding:10px;">Commercial</td>
                <td style="padding:10px;">1.8</td>
            </tr>
        </tbody>
    </table>
</div>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        read_csv.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>import csv

# Open the CSV file
with open("land_use.csv", "r", newline="") as file:

    reader = csv.DictReader(file)

    # Process each row
    for row in reader:
        print("Parcel ID:", row["Parcel_ID"])
        print("Land Use:", row["Land_Use"])
        print("Area:", row["Area_ha"], "hectares")
        print("----------------------")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The program reads the CSV file
    using <code>DictReader()</code>. Each row is treated as a
    dictionary, allowing attribute values to be accessed using
    column names. The loop processes and displays every parcel.
</p>

<h3>Writing GIS Results into a CSV File</h3>

<p>
    Python can also create CSV files to store the results of
    GIS processing. The <code>csv.writer()</code> method
    writes rows of data into a new CSV file.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        write_csv.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>import csv

# GIS processing results
parcels = [
    ["P001", "Residential", 2.5],
    ["P002", "Agriculture", 4.2],
    ["P003", "Commercial", 1.8]
]

# Create and write the CSV file
with open("parcel_results.csv", "w", newline="") as file:

    writer = csv.writer(file)

    # Write column headings
    writer.writerow(["Parcel_ID", "Land_Use", "Area_ha"])

    # Write parcel records
    writer.writerows(parcels)

print("Parcel results saved successfully.")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The program creates a CSV file,
    writes the column headings and stores the parcel records
    row by row. The resulting file can be opened in spreadsheet
    software or imported into a GIS application.
</p>

<h2>5. Working with JSON Files</h2>

<p>
    JSON (JavaScript Object Notation) is a data format used to
    store and exchange structured information. It supports
    key-value pairs and nested data, making it useful for
    storing GIS project settings, feature properties and
    geographic information.
</p>

<p>
    Python provides the built-in <code>json</code> module.
    The <code>load()</code> method reads JSON data from a file,
    while <code>dump()</code> writes Python data into a JSON file.
</p>

<h3>Example: Saving GIS Location Information</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        gis_json.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>import json

# Store GIS location information
location = {
    "name": "Chennai",
    "coordinates": {
        "longitude": 80.2707,
        "latitude": 13.0827
    },
    "data_type": "Point",
    "crs": "EPSG:4326"
}

# Save information into a JSON file
with open("location.json", "w") as file:
    json.dump(location, file, indent=4)

print("Location data saved successfully.")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The program creates a dictionary
    containing location details and coordinate information.
    The <code>json.dump()</code> method saves the data in
    JSON format with indentation for better readability.
</p>

<h2>6. Working with GIS Datasets Using GeoPandas</h2>

<p>
    GIS datasets such as Shapefiles and GeoPackages contain
    geographic features along with their attribute information.
    These formats require GIS-aware libraries to read and
    write their spatial data correctly.
</p>

<p>
    GeoPandas provides the <code>read_file()</code> function
    to load vector datasets and the <code>to_file()</code>
    method to save processed spatial data.
</p>

<h3>Example: Reading and Saving a Shapefile</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        geopandas_file.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>import geopandas as gpd

# Read the road dataset
roads = gpd.read_file("data/roads.shp")

# Display the first five records
print(roads.head())

# Display the coordinate reference system
print("CRS:", roads.crs)

# Save the dataset as a GeoPackage
roads.to_file(
    "output/roads.gpkg",
    driver="GPKG"
)

print("GIS dataset saved successfully.")</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The program loads a road
    Shapefile into a GeoDataFrame using <code>read_file()</code>.
    It displays the first five records and checks the CRS.
    Finally, the dataset is saved in GeoPackage format using
    <code>to_file()</code>.
</p>

<h3>Example: Saving Selected GIS Features</h3>

<p>
    File handling can also be combined with spatial data processing.
    For example, a program can select roads based on their length
    and save the selected features into a separate GIS file.
</p>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        filter_roads.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>import geopandas as gpd

# Read the road dataset
roads = gpd.read_file("data/roads.shp")

# Select roads longer than 5 km
selected_roads = roads[
    roads["Length_km"] > 5
]

# Save the selected features
selected_roads.to_file(
    "output/long_roads.gpkg",
    driver="GPKG"
)

print("Selected road features saved.")
print("Number of selected roads:", len(selected_roads))</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The program reads the road dataset,
    selects features whose <code>Length_km</code> value is greater
    than 5 and saves the selected features as a new GeoPackage.
    The original dataset remains unchanged.
</p>

<h2>7. Handling File Errors</h2>

<p>
    File operations may fail when a file does not exist, the
    specified path is incorrect or the program does not have
    permission to access it. Python provides exception handling
    to manage these situations without abruptly stopping the program.
</p>

<h3>Example: Handling a Missing GIS File</h3>

<div style="background:#202938; border-radius:8px; overflow:hidden; margin:15px 0;">
    <div style="background:#293548; color:white; padding:10px 15px; font-size:13px;">
        file_errors.py
    </div>
    <pre style="color:#f1f5f9; padding:18px; margin:0; overflow-x:auto; font-size:13px; line-height:1.5;"><code>try:

    # Attempt to open the GIS project file
    with open("project_info.txt", "r") as file:
        content = file.read()

    print(content)

except FileNotFoundError:
    print("Error: The project file was not found.")

except PermissionError:
    print("Error: Permission denied.")

except OSError as error:
    print("File operation failed:", error)</code></pre>
</div>

<p>
    <strong>Explanation:</strong> The <code>try</code> block
    attempts to open and read the file. If the file is missing,
    Python executes the <code>FileNotFoundError</code> block.
    The other exception blocks handle permission and general
    operating-system file errors.
</p>

<h2>File Handling in a GIS Workflow</h2>

<p>
    File handling is an important part of GIS automation because
    geographic datasets often need to be loaded, processed and
    saved repeatedly. Python makes these tasks easier by combining
    file operations with libraries such as GeoPandas.
</p>

<div style="border:1px solid #cbd5e1; border-radius:8px; padding:16px; margin:20px 0; background:#f8fafc;">

    <div style="text-align:center; font-weight:bold; color:#293548; margin-bottom:15px;">
        GIS File Processing Workflow
    </div>

    <div style="display:flex; flex-direction:column; align-items:center; gap:8px; font-size:13px;">

        <div style="background:#dbeafe; border:1px solid #3182ce; border-radius:6px; padding:12px; width:85%; text-align:center;">
            <strong>1. Input Files</strong><br>
            <span>Shapefile, CSV and JSON</span>
        </div>

        <div style="font-size:20px; color:#64748b;">↓</div>

        <div style="background:#e0f2fe; border:1px solid #0284c7; border-radius:6px; padding:12px; width:85%; text-align:center;">
            <strong>2. Read Data</strong><br>
            <span>open(), read(), read_file()</span>
        </div>

        <div style="font-size:20px; color:#64748b;">↓</div>

        <div style="background:#fef3c7; border:1px solid #d97706; border-radius:6px; padding:12px; width:85%; text-align:center;">
            <strong>3. Process Data</strong><br>
            <span>Filter features and analyse attributes</span>
        </div>

        <div style="font-size:20px; color:#64748b;">↓</div>

        <div style="background:#dcfce7; border:1px solid #16a34a; border-radius:6px; padding:12px; width:85%; text-align:center;">
            <strong>4. Save Results</strong><br>
            <span>write(), to_file(), csv.writer()</span>
        </div>

        <div style="font-size:20px; color:#64748b;">↓</div>

        <div style="background:#ede9fe; border:1px solid #7c3aed; border-radius:6px; padding:12px; width:85%; text-align:center;">
            <strong>5. Output Files</strong><br>
            <span>Processed GIS datasets and reports</span>
        </div>

    </div>
</div>

<p>
    This workflow demonstrates how Python reads input files,
    processes geographic information and saves the results
    for further analysis or use in GIS applications.
</p>


<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong>
        Always verify the input file path, coordinate reference system
        and output location before running a GIS processing script.
        Keep a backup of important source datasets.
    </p>
</div>
