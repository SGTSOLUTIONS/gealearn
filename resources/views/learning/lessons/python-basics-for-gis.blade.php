
{{-- resources/views/learning/lessons/8-3-python-basics.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Python is a simple programming language used in GIS to automate tasks, process geographic data and create custom tools using libraries like GeoPandas, Rasterio and PyQGIS.
</p>

<h2>Learning Goals</h2>
<ul>
    <li>Understand Python and its role in GIS</li>
    <li>Learn Python syntax, indentation, and comments</li>
    <li>Write and execute simple Python scripts using the print() function</li>
</ul>

<h2>Introduction to Python</h2>

<p>
    Python allows users to write instructions that a computer can
    execute. In GIS, these instructions can be used to perform
    calculations, manage map layers, process spatial datasets and
    automate repetitive tasks.
</p>

<p>
    For example, instead of manually checking every geographic feature,
    a Python script can read the features and display their information
    automatically.
</p>

<h2>Where to Run Python</h2>

<p>
    Python code can be written and executed in different environments.
    The choice depends on the type of work you want to perform.
</p>

<div style="display: flex; flex-wrap: wrap; gap: 15px; margin: 20px 0;">

    <div style="flex: 1 1 220px; border: 1px solid #dbe2ea; border-radius: 7px; overflow: hidden;">
        <div style="background: #79a7db; padding: 12px 15px; color: #1e40af; font-weight: bold;">
            QGIS Python Console
        </div>
        <div style="padding: 14px; font-size: 14px;">
            Run Python commands directly inside QGIS to access projects,
            layers and geographic features.
            <p style="margin-bottom: 0;"><strong>Shortcut:</strong> Ctrl + Alt + P</p>
        </div>
    </div>

    <div style="flex: 1 1 220px; border: 1px solid #dbe2ea; border-radius: 7px; overflow: hidden;">
        <div style="background: #68c96f; padding: 12px 15px; color: #166534; font-weight: bold;">
            VS Code / IDLE
        </div>
        <div style="padding: 14px; font-size: 14px;">
            Write, edit and run Python scripts in a code editor.
            Suitable for developing and organising larger programs.
        </div>
    </div>

    <div style="flex: 1 1 220px; border: 1px solid #dbe2ea; border-radius: 7px; overflow: hidden;">
        <div style="background: #e3ca95; padding: 12px 15px; color: #92400e; font-weight: bold;">
            Jupyter Notebook
        </div>
        <div style="padding: 14px; font-size: 14px;">
            Write and execute code in separate cells. Useful for
            experiments, data analysis and visualising results.
        </div>
    </div>

    <div style="flex: 1 1 220px; border: 1px solid #dbe2ea; border-radius: 7px; overflow: hidden;">
        <div style="background: #9f8ebe; padding: 12px 15px; color: #6b21a8; font-weight: bold;">
            Command Line
        </div>
        <div style="padding: 14px; font-size: 14px;">
            Execute Python scripts through a terminal or command prompt.
            Useful for running scripts and automating tasks.
        </div>
    </div>

</div>

<h2>Writing Your First Python Program</h2>

<p>
    A Python program contains instructions that are executed by the
    Python interpreter. You can start with a simple message using
    the built-in <code>print()</code> function.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        First Python Program
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>print("Hello, GIS!")

layer_count = 3

print("Number of layers:", layer_count)</code></pre>
</div>

<p><strong>Output:</strong></p>

<div style="border-radius: 6px; overflow: hidden; border: 1px solid #dbe2ea; margin: 15px 0;">
    <div style="padding: 9px 14px; background: #e9eef5; color: #334155; font-size: 13px; font-weight: bold;">
        Python Output
    </div>
    <pre style="margin: 0; padding: 16px; background: #f8fafc; color: #334155; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5;"><code>Hello, GIS!
Number of layers: 3</code></pre>
</div>

<p>
    The <code>print()</code> function displays information in the
    output. The variable <code>layer_count</code> stores the number
    of layers, which is then displayed using the same function.
</p>

<h2>Python Syntax</h2>

<p>
    Syntax refers to the rules used to write Python instructions.
    Following these rules helps Python understand and execute your code
    correctly.
</p>

<h3>1. Indentation</h3>

<p>
    Indentation means adding spaces at the beginning of a line.
    Python uses indentation to identify a group of statements that
    belong together. Four spaces are commonly used for each indentation
    level.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Example: Indentation
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>population = 5400

if population > 5000:
    print("High population area")
    print("Further analysis required")</code></pre>
</div>

<p>
    Both print statements are indented, so they belong to the
    <code>if</code> block. They execute when the condition is True.
</p>

<h3>2. Comments</h3>

<p>
    Comments are notes written inside code to explain what a program
    does. Python ignores comments during execution. A single-line
    comment begins with the <code>#</code> symbol.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Example: Comments
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code># Store ward information
ward_name = "Ward A"

# Display the ward name
print(ward_name)</code></pre>
</div>

<h3>3. Case Sensitivity</h3>

<p>
    Python is case-sensitive, which means uppercase and lowercase
    letters are treated differently. Variable names must be written
    consistently throughout the program.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 18px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>population = 5400
Population = 3000

print(population)
print(Population)</code></pre>
</div>

<p>
    Here, <code>population</code> and <code>Population</code>
    are treated as two separate variables.
</p>

<h3>4. Line-by-Line Execution</h3>

<p>
    Python normally executes statements in a script from top to bottom.
    Each instruction is processed in sequence unless the program uses
    conditions, loops or functions to control the execution flow.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 15px 0;">
    <pre style="margin: 0; padding: 18px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>print("Step 1: Load data")
print("Step 2: Process data")
print("Step 3: Display results")</code></pre>
</div>

<h2>Working with Python Scripts</h2>

<p>
    A Python script is a file containing Python instructions. It is
    usually saved with the <code>.py</code> extension and can be executed
    whenever needed.
</p>

<p>Follow these steps to create a basic script:</p>

<ol>
    <li>Open a Python editor such as VS Code or IDLE.</li>
    <li>Create a new file and write your Python code.</li>
    <li>Save the file with a <code>.py</code> extension.</li>
    <li>Run the script using the editor or terminal.</li>
    <li>Check the output for the expected result.</li>
</ol>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Running a Python Script
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>python script.py</code></pre>
</div>

<p>
    This command runs the file named <code>script.py</code> using
    the Python interpreter. Make sure Python is installed and available
    in your terminal.
</p>

<h2>Using Python for GIS Tasks</h2>

<p>
    Python is especially useful in GIS because it can work with
    geographic data through specialised libraries. These libraries
    provide tools for reading, analysing and visualising spatial
    information.
</p>

<ul>
    <li><strong>GeoPandas:</strong> Read, manage and analyse vector datasets.</li>
    <li><strong>Rasterio:</strong> Read and process raster datasets.</li>
    <li><strong>PyQGIS:</strong> Access QGIS projects, layers and features.</li>
    <li><strong>NumPy:</strong> Perform numerical calculations on raster arrays.</li>
    <li><strong>Matplotlib:</strong> Create charts and visual representations of GIS data.</li>
</ul>

<h2>Simple GIS-Related Python Example</h2>

<p>
    The following example uses basic Python syntax to store information
    about a geographic area and display it. It demonstrates how Python
    can organise simple GIS-related information before using specialised
    GIS libraries.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        GIS Example: Ward Information
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>ward_name = "Ward A"
population = 5400
area_sq_km = 12.5

density = population / area_sq_km

print("Ward Name:", ward_name)
print("Population:", population)
print("Area:", area_sq_km)
print("Population Density:", density)</code></pre>
</div>

<p>
    This program stores ward information, calculates population density
    and displays the result. It introduces the same basic programming
    concepts that are used in larger GIS automation workflows.
</p>

<h2>Why Python Is Useful in GIS</h2>

<p>
    Python helps GIS users move beyond manual operations by making
    geographic workflows repeatable and easier to manage.
</p>

<ul>
    <li><strong>Automation:</strong> Repeat common GIS operations through scripts.</li>
    <li><strong>Data processing:</strong> Read, organise and transform geographic datasets.</li>
    <li><strong>Spatial analysis:</strong> Perform calculations and analyse geographic features.</li>
    <li><strong>Custom tools:</strong> Build scripts and applications for specific GIS requirements.</li>
    <li><strong>Productivity:</strong> Reduce repetitive manual work when handling large datasets.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Tip:</strong> Start with small Python programs and practise
        using <code>print()</code>, variables, comments and indentation.
        Once you understand the basics, move on to Python libraries used
        in GIS.
    </p>
</div>
