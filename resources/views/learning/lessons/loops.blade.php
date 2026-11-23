
{{-- resources/views/learning/lessons/loops.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Loops allow a program to execute the same block of code repeatedly
    without writing the instructions again. They are useful for processing
    multiple files, features and records in GIS workflows.
</p>

<h2>Learning goals</h2>

<ul>
    <li>Understand how for and while loops work</li>
    <li>Use loops to process sequences and collections</li>
    <li>Apply the range() function in repetitive tasks</li>
    <li>Control loops using break and continue</li>
    <li>Use loops in practical GIS operations</li>
</ul>

<h2>Understanding Loops in Python</h2>

<p>
    A loop repeats a block of code based on a sequence or condition.
    Python provides two main types of loops: <strong>for</strong> and
    <strong>while</strong>.
</p>

<p>
    A <strong>for loop</strong> processes each item in a sequence,
    while a <strong>while loop</strong> continues executing as long
    as its condition remains True.
</p>

<h3>Example: Using for and while loops</h3>

<div style="background: #202938; border-radius: 8px; overflow: hidden; margin: 15px 0;">

    <div style="background: #293548; color: #fff; padding: 10px 15px; font-size: 13px;">
        loops.py
    </div>

    <pre style="color: #f1f5f9; padding: 18px; margin: 0; overflow-x: auto; font-size: 13px; line-height: 1.5;"><code># For loop
wards = ["North", "South", "East"]

for ward in wards:
    print("Ward:", ward)


# While loop
count = 0

while count < 3:
    print("Count:", count)
    count += 1</code></pre>

</div>

<h3>How it works</h3>

<ul>
    <li><strong>For loop:</strong> Python takes each ward from the list and prints its name. It repeats until all items are processed.</li>
    <li><strong>While loop:</strong> Python checks whether count is less than 3. It repeats the instructions and increases the count by 1 each time.</li>
</ul>

<p>
    Both loops reduce repetitive coding, but they are used in different
    situations depending on the task.
</p>

<h2>Visual Guide: For and While Loops</h2>

<div style="display: flex; justify-content: center; margin: 20px 0;">

    <div style="width: 100%; max-width: 650px; font-family: Arial, sans-serif;">

        <svg viewBox="0 0 620 360"
             width="100%"
             xmlns="http://www.w3.org/2000/svg"
             role="img"
             aria-label="Comparison of for and while loops">

            <rect width="620" height="360" rx="8" fill="#f1f5f9"/>

            <!-- For Loop Panel -->
            <rect x="15" y="15" width="280" height="325"
                  rx="8" fill="#ffffff" stroke="#cbd5e1"/>

            <text x="155" y="43" text-anchor="middle"
                  font-size="17" font-weight="bold" fill="#245b78">
                For Loop
            </text>

            <text x="155" y="68" text-anchor="middle"
                  font-size="12" fill="#64748b">
                One item at a time
            </text>

            <!-- Sequence -->
            <rect x="45" y="95" width="52" height="38" rx="5"
                  fill="#d9f1df" stroke="#31945a"/>
            <rect x="119" y="95" width="52" height="38" rx="5"
                  fill="#d9f1df" stroke="#31945a"/>
            <rect x="193" y="95" width="52" height="38" rx="5"
                  fill="#d9f1df" stroke="#31945a"/>

            <text x="71" y="119" text-anchor="middle" font-size="13">A</text>
            <text x="145" y="119" text-anchor="middle" font-size="13">B</text>
            <text x="219" y="119" text-anchor="middle" font-size="13">C</text>

            <path d="M97 114 H116 M171 114 H190"
                  stroke="#e07835" stroke-width="2"/>

            <path d="M155 145 V181"
                  stroke="#64748b" stroke-width="1.8"
                  fill="none"/>

            <rect x="55" y="183" width="200" height="52"
                  rx="6" fill="#e1efff" stroke="#3182ce"/>

            <text x="155" y="205" text-anchor="middle"
                  font-size="12" font-weight="bold" fill="#245b96">
                Process each item
            </text>

            <text x="155" y="222" text-anchor="middle"
                  font-size="11" fill="#245b96">
                A → B → C
            </text>

            <path d="M155 235 V265"
                  stroke="#64748b" stroke-width="1.8"
                  fill="none"/>

            <rect x="55" y="267" width="200" height="42"
                  rx="6" fill="#dff4e5" stroke="#25a45b"/>

            <text x="155" y="293" text-anchor="middle"
                  font-size="12" font-weight="bold" fill="#176b3b">
                Loop completed
            </text>

            <!-- While Loop Panel -->
            <rect x="325" y="15" width="280" height="325"
                  rx="8" fill="#ffffff" stroke="#cbd5e1"/>

            <text x="465" y="43" text-anchor="middle"
                  font-size="17" font-weight="bold" fill="#245b78">
                While Loop
            </text>

            <text x="465" y="68" text-anchor="middle"
                  font-size="12" fill="#64748b">
                Repeat until False
            </text>

            <!-- Condition -->
            <rect x="385" y="95" width="160" height="42"
                  rx="20" fill="#fff0ce" stroke="#e5a12c"/>

            <text x="465" y="121" text-anchor="middle"
                  font-size="13" font-weight="bold" fill="#73501a">
                count &lt; 3?
            </text>

            <text x="465" y="157" text-anchor="middle"
                  font-size="11" fill="#15945d" font-weight="bold">
                True ↓
            </text>

            <path d="M465 138 V173"
                  stroke="#16a36a" stroke-width="1.8"/>

            <!-- Action -->
            <rect x="385" y="175" width="160" height="42"
                  rx="6" fill="#e1efff" stroke="#3182ce"/>

            <text x="465" y="201" text-anchor="middle"
                  font-size="13" fill="#245b96">
                count += 1
            </text>

            <!-- Repeat arrow -->
            <path d="M385 196 H350 V116 H382"
                  fill="none" stroke="#3182ce" stroke-width="1.8"/>

            <text x="342" y="155" font-size="10"
                  fill="#3182ce" transform="rotate(-90 342 155)">
                Repeat
            </text>

            <!-- False -->
            <path d="M545 116 H570 V275 H545"
                  fill="none" stroke="#e07835" stroke-width="1.8"/>

            <text x="553" y="150" font-size="11"
                  fill="#d66c30" font-weight="bold">
                False
            </text>

            <!-- End -->
            <rect x="385" y="277" width="160" height="32"
                  rx="6" fill="#dff4e5" stroke="#25a45b"/>

            <text x="465" y="298" text-anchor="middle"
                  font-size="12" font-weight="bold" fill="#176b3b">
                Loop completed
            </text>

        </svg>

    </div>
</div>

<p style="font-size: 13px; color: #64748b; text-align: center;">
    A for loop processes each item in a sequence, while a while loop repeats as long as its condition is True.
</p>

<h2>Using the range() Function</h2>

<p>
    The <strong>range()</strong> function generates a sequence of numbers.
    It is commonly used with for loops when a task needs to be repeated
    a specific number of times.
</p>

<div style="background: #202938; border-radius: 8px; overflow: hidden; margin: 15px 0;">

    <div style="background: #293548; color: #fff; padding: 10px 15px; font-size: 13px;">
        range_example.py
    </div>

    <pre style="color: #f1f5f9; padding: 18px; margin: 0; overflow-x: auto; font-size: 13px; line-height: 1.9;"><code>for number in range(5):
    print(number)</code></pre>

</div>

<p>
    <strong>Output:</strong>
</p>

<div style="background: #eef2f7; border-radius: 6px; padding: 12px 16px; font-family: monospace; color: #26374b;">
    0<br/>
    1<br/>
    2<br/>
    3<br/>
    4
</div>

<p>
    The range(5) function generates numbers from 0 to 4.
    The ending value (5) is not included.
</p>

<h2>Controlling Loops with break and continue</h2>

<p>
    Python provides <strong>break</strong> and <strong>continue</strong>
    statements to control how loops execute.
</p>

<ul>
    <li><strong>break:</strong> Stops the loop immediately when a specified condition is met.</li>
    <li><strong>continue:</strong> Skips the remaining instructions in the current iteration and moves to the next item.</li>
</ul>

<h3>Example: Using break and continue</h3>

<div style="background: #202938; border-radius: 8px; overflow: hidden; margin: 15px 0;">

    <div style="background: #293548; color: #fff; padding: 10px 15px; font-size: 13px;">
        loop_control.py
    </div>

    <pre style="color: #f1f5f9; padding: 18px; margin: 0; overflow-x: auto; font-size: 13px; line-height: 1.5;"><code>wards = ["North", "South", "East", "West"]

for ward in wards:

    if ward == "East":
        continue

    if ward == "West":
        break

    print(ward)</code></pre>

</div>

<p>
    <strong>Explanation:</strong> The loop processes the ward names one by one.
    It skips East using continue and stops completely when it reaches West
    using break. Therefore, only North and South are printed.
</p>

<h2>Looping Through Files and GIS Features</h2>

<p>
    Loops are particularly useful in GIS because projects often contain
    multiple datasets and geographic features. Instead of processing
    each item manually, a loop can perform the same operation on every item.
</p>

<h3>1. Processing Multiple GIS Files</h3>

<p>
    A for loop can be used to identify and process multiple shapefiles
    stored in a folder.
</p>

<div style="background: #202938; border-radius: 8px; overflow: hidden; margin: 15px 0;">

    <div style="background: #293548; color: #fff; padding: 10px 15px; font-size: 13px;">
        process_files.py
    </div>

    <pre style="color: #f1f5f9; padding: 18px; margin: 0; overflow-x: auto; font-size: 13px; line-height: 1.9;"><code>from pathlib import Path

folder = Path("data")

for file in folder.glob("*.shp"):
    print("Processing:", file.name)</code></pre>

</div>

<p>
    This example searches the data folder for shapefiles and prints
    the name of each matching file.
</p>

<h3>2. Processing GIS Features</h3>

<p>
    Loops can also process individual geographic features.
    For example, a GeoDataFrame can be traversed to calculate
    or inspect the area of each polygon.
</p>

<div style="background: #202938; border-radius: 8px; overflow: hidden; margin: 15px 0;">

    <div style="background: #293548; color: #fff; padding: 10px 15px; font-size: 13px;">
        process_features.py
    </div>

    <pre style="color: #f1f5f9; padding: 18px; margin: 0; overflow-x: auto; font-size: 13px; line-height: 1.9;"><code>for index, feature in gdf.iterrows():

    area = feature.geometry.area

    print("Feature:", index)
    print("Area:", area)</code></pre>

</div>

<p>
    The loop visits each row in the GeoDataFrame, accesses its geometry,
    calculates its area and displays the result.
    Use an appropriate projected CRS when calculating area in square metres.
</p>


<div class="tip">
    <p style="margin: 0;">
        <strong>Practical tip:</strong>
        Test your loop with a small number of files or features first.
        Check the output before running it on a large GIS dataset.
    </p>
</div>
