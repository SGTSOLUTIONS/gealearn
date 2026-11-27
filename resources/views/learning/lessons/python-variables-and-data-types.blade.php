
{{-- resources/views/learning/lessons/8-4-variables.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Variables are names used to store data in Python. They allow you to
    reuse information, perform calculations and manage geographic data.
    Python automatically determines the data type when a value is assigned
    to a variable.
</p>

<h2>Learning Goals</h2>
<ul>
    <li>Understand variables and common Python data types</li>
    <li>Create, assign, and convert values using variables</li>
    <li>Apply variables in GIS-related calculations</li>
</ul>

<h2>Variables</h2>

<p>
    A variable is a named reference to a value stored in a Python program.
    Instead of repeatedly writing the same value, you can store it in a
    variable and use it whenever needed.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Creating Variables
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>ward_name = "Ward A"
population = 5400
area = 12.5

print(ward_name)
print(population)
print(area)</code></pre>
</div>

<p>
    In this example, three variables store information about a geographic
    area. The variable names describe the information, while the assigned
    values represent the actual data.
</p>

<h2>Python Data Types</h2>

<p>
    Every value in Python has a data type. The data type determines what
    kind of information a variable contains and which operations can be
    performed on it.
</p>

<h3>1. String (str)</h3>
<p>
    A string stores text, such as place names, road names and land-use
    categories. Text values are written inside quotation marks.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 18px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>location = "Chennai"
print(location)
print(type(location))</code></pre>
</div>

<h3>2. Integer (int)</h3>
<p>
    An integer stores whole numbers without decimal values. It is useful
    for storing population counts, feature IDs and the number of geographic
    objects.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 18px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>population = 5400
print(population)
print(type(population))</code></pre>
</div>

<h3>3. Float (float)</h3>
<p>
    A float stores numbers containing decimal points. In GIS, it is commonly
    used for area, distance, elevation and coordinate values.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 18px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>area_sq_km = 12.5
print(area_sq_km)
print(type(area_sq_km))</code></pre>
</div>

<h3>4. Boolean (bool)</h3>
<p>
    A Boolean stores one of two values: <code>True</code> or
    <code>False</code>. It is useful for checking conditions, such as
    whether a geographic feature meets a requirement.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 18px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>is_urban = True
print(is_urban)
print(type(is_urban))</code></pre>
</div>

<h3>5. List (list)</h3>
<p>
    A list stores multiple values in a single variable. Lists are useful
    for maintaining collections of place names, layer names or categories.
    Their contents can be changed after creation.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 18px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>wards = ["Ward A", "Ward B", "Ward C"]

print(wards)
print(wards[0])</code></pre>
</div>

<h3>6. Tuple (tuple)</h3>
<p>
    A tuple stores multiple values in an ordered collection that cannot
    be changed after creation. It can be useful for keeping a fixed pair
    of coordinate values.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 18px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>coordinates = (80.2707, 13.0827)

print(coordinates)
print(type(coordinates))</code></pre>
</div>

<h3>7. Dictionary (dict)</h3>
<p>
    A dictionary stores information as key-value pairs. It is useful
    for organising related geographic attributes under meaningful names.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 18px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>ward = {
    "name": "Ward A",
    "population": 5400,
    "area": 12.5
}

print(ward["name"])
print(ward["population"])</code></pre>
</div>

<h2>Comparing Python Data Types</h2>

<p>
    The following table summarises the common data types and their
    uses in GIS applications.
</p>

<div style="overflow-x: auto; margin: 20px 0;">
    <table style="width: 100%; border-collapse: collapse; font-size: 14px; min-width: 480px;">
        <thead>
            <tr style="background: #1e293b; color: #ffffff;">
                <th style="padding: 12px; text-align: left;">Data Type</th>
                <th style="padding: 12px; text-align: left;">Example</th>
                <th style="padding: 12px; text-align: left;">GIS Usage</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background: #f8fafc;">
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">str</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">"Chennai"</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Place names</td>
            </tr>
            <tr>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">int</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">5400</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Population counts</td>
            </tr>
            <tr style="background: #f8fafc;">
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">float</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">12.5</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Area and distance</td>
            </tr>
            <tr>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">bool</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">True</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Condition checking</td>
            </tr>
            <tr style="background: #f8fafc;">
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">list</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">["A", "B"]</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Multiple layer names</td>
            </tr>
            <tr>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">tuple</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">(80.2, 13.0)</td>
                <td style="padding: 11px; border-bottom: 1px solid #e2e8f0;">Coordinate pairs</td>
            </tr>
            <tr style="background: #f8fafc;">
                <td style="padding: 11px;">dict</td>
                <td style="padding: 11px;">{"pop": 5400}</td>
                <td style="padding: 11px;">Feature attributes</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>Checking Variable Data Types</h2>

<p>
    Python provides the built-in <code>type()</code> function to identify
    the data type stored in a variable. This is useful when inspecting
    values loaded from different GIS data sources.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Checking Data Types
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>population = 5400
area = 12.5
location = "Chennai"

print(type(population))
print(type(area))
print(type(location))</code></pre>
</div>

<h2>Converting Data Types</h2>

<p>
    Sometimes, data is stored in a format that is not suitable for
    calculations. Python provides conversion functions to change values
    from one data type to another.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Type Conversion
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>population = "5400"
area = "12.5"

population = int(population)
area = float(area)

density = population / area

print(density)</code></pre>
</div>

<p><strong>Common conversion functions:</strong></p>
<ul>
    <li><code>int()</code> converts a suitable value into an integer.</li>
    <li><code>float()</code> converts a suitable value into a decimal number.</li>
    <li><code>str()</code> converts a value into text.</li>
    <li><code>bool()</code> converts a value into a Boolean.</li>
</ul>

<p>
    Type conversion is especially useful when working with attribute data
    imported from CSV files, spreadsheets and other external sources.
    Always check that the original value can be converted successfully.
</p>

<h2>Variable Naming Rules</h2>

<p>
    Meaningful variable names make Python programs easier to read,
    understand and maintain. Follow these rules when creating variables:
</p>

<ul>
    <li>Use letters, numbers and underscores.</li>
    <li>Do not start a variable name with a number.</li>
    <li>Do not use spaces in variable names.</li>
    <li>Python variable names are case-sensitive.</li>
    <li>Choose descriptive names such as <code>population</code> and <code>area_sq_km</code>.</li>
</ul>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Good and Poor Variable Names
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code># Good variable names
ward_name = "Ward A"
population_count = 5400
area_sq_km = 12.5

# Avoid unclear or invalid names
# 2population = 5400
# ward name = "Ward A"</code></pre>
</div>

<h2>Using Variables in GIS Calculations</h2>

<p>
    Variables make it easier to perform calculations using geographic
    information. For example, population and area can be stored separately
    and used to calculate population density for a ward.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        GIS Example: Population Density
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>ward_name = "Ward A"
population = 5400
area_sq_km = 12.5

density = population / area_sq_km

print("Ward:", ward_name)
print("Population:", population)
print("Area:", area_sq_km, "sq km")
print("Population Density:", density)</code></pre>
</div>

<p>
    The program stores the ward name, population and area in separate
    variables. It then calculates population density and displays the
    results. This is a simple example of how variables support GIS data
    analysis.
</p>

<h2>Why Variables Are Important in GIS</h2>

<p>
    GIS workflows often involve large amounts of geographic and attribute
    information. Variables help organise this information and make
    processing tasks easier to manage.
</p>

<ul>
    <li><strong>Data organisation:</strong> Store coordinates, feature names and attribute values.</li>
    <li><strong>Spatial calculations:</strong> Store area, distance and elevation values.</li>
    <li><strong>Data processing:</strong> Reuse values across multiple processing steps.</li>
    <li><strong>Attribute analysis:</strong> Work with population, land-use and other attribute information.</li>
    <li><strong>Automation:</strong> Use stored values in scripts that process multiple geographic datasets.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Tip:</strong> Choose descriptive variable names that explain
        what the stored value represents. For example, use
        <code>area_sq_km</code> instead of <code>a</code>. This makes GIS
        scripts easier to understand and maintain.
    </p>
</div>
