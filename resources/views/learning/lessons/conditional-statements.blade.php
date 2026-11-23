
{{-- resources/views/learning/lessons/conditional-statements.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Conditional statements allow a program to make decisions based on specific conditions.
    They control which instructions are executed depending on whether a condition is True or False.
    In Python, <strong>if</strong>, <strong>elif</strong> and <strong>else</strong>
    are used to control the flow of a program.
</p>

<h2>Learning goals</h2>

<ul>
    <li>Understand how conditional statements work</li>
    <li>Write if, elif and else statements in Python</li>
    <li>Combine multiple conditions using logical operators</li>
    <li>Apply conditions to practical GIS tasks</li>
</ul>

<h2>Understanding Conditional Statements</h2>

<p>
    A conditional statement checks whether a given condition is satisfied.
    If the condition is True, the corresponding block of code runs.
    Otherwise, Python checks another condition or executes an alternative block.
</p>

<h3>1. The if statement</h3>

<p>
    The <strong>if</strong> statement executes a block of code only when its
    condition is True.
</p>

<div style="background: #202938; border-radius: 8px; overflow: hidden; margin: 15px 0;">

    <div style="background: #293548; color: #fff; padding: 9px 15px; font-size: 13px;">
        if_example.py
    </div>

    <pre style="color: #f1f5f9; padding: 15px; margin: 0; overflow-x: auto; font-size: 13px; line-height: 1.8;"><code>population = 6000

if population > 5000:
    print("Large population")</code></pre>

</div>

<p>
    <strong>Explanation:</strong> Python checks whether the population is greater
    than 5,000. Since the condition is True, it displays "Large population".
</p>

<h3>2. The elif statement</h3>

<p>
    The <strong>elif</strong> statement checks another condition when the
    previous if or elif condition is False. You can use multiple elif
    statements when several possibilities need to be checked.
</p>

<div style="background: #202938; border-radius: 8px; overflow: hidden; margin: 15px 0;">

    <div style="background: #293548; color: #fff; padding: 9px 15px; font-size: 13px;">
        elif_example.py
    </div>

    <pre style="color: #f1f5f9; padding: 15px; margin: 0; overflow-x: auto; font-size: 13px; line-height: 1.8;"><code>population = 3500

if population > 5000:
    print("Large population")
elif population > 2000:
    print("Medium population")</code></pre>

</div>

<p>
    <strong>Explanation:</strong> The first condition is False, so Python
    checks the elif condition. Since 3,500 is greater than 2,000,
    it displays "Medium population".
</p>

<h3>3. The else statement</h3>

<p>
    The <strong>else</strong> statement executes when all preceding if and
    elif conditions are False. It provides a default action when none of
    the specified conditions is satisfied.
</p>

<div style="background: #202938; border-radius: 8px; overflow: hidden; margin: 15px 0;">

    <div style="background: #293548; color: #fff; padding: 9px 15px; font-size: 13px;">
        else_example.py
    </div>

    <pre style="color: #f1f5f9; padding: 15px; margin: 0; overflow-x: auto; font-size: 13px; line-height: 1.8;"><code>population = 1200

if population > 5000:
    print("Large population")
elif population > 2000:
    print("Medium population")
else:
    print("Small population")</code></pre>

</div>

<p>
    <strong>Explanation:</strong> Both conditions are False, so Python
    executes the else block and displays "Small population".
</p>

<h2>Visual Guide: If / Elif / Else Decision Flow</h2>

<div style="display: flex; justify-content: center; margin: 20px 0;">

    <div style="width: 100%; max-width: 500px; font-family: Arial, sans-serif;">

        <svg viewBox="0 0 620 450"
             width="100%"
             xmlns="http://www.w3.org/2000/svg"
             role="img"
             aria-label="Flowchart showing how Python evaluates if, elif and else conditions">

            <defs>
                <marker id="arrowConditional"
                        markerWidth="7"
                        markerHeight="7"
                        refX="5"
                        refY="3"
                        orient="auto">
                    <path d="M0 0 L6 3 L0 6"
                          fill="none"
                          stroke="#64748b"
                          stroke-width="1"/>
                </marker>
            </defs>

            <!-- Background -->
            <rect width="620" height="450" rx="8" fill="#f4f7fa"/>

            <!-- Start -->
            <rect x="235" y="15" width="150" height="38" rx="19"
                  fill="#dcecf8" stroke="#3182ce" stroke-width="1.5"/>
            <text x="310" y="39" text-anchor="middle"
                  font-size="14" font-weight="bold" fill="#24577b">Start</text>

            <path d="M310 53 V78" stroke="#64748b" stroke-width="1.8"
                  fill="none" marker-end="url(#arrowConditional)"/>

            <!-- First condition -->
            <path d="M310 78 L400 115 L310 152 L220 115 Z"
                  fill="#fff0ce" stroke="#e5a12c" stroke-width="1.5"/>
            <text x="310" y="119" text-anchor="middle"
                  font-size="12" font-weight="bold" fill="#73501a">pop &gt; 5000?</text>

            <!-- First yes -->
            <path d="M400 115 H465 V169"
                  fill="none" stroke="#16a36a" stroke-width="1.8"
                  marker-end="url(#arrowConditional)"/>
            <text x="420" y="105" font-size="11"
                  fill="#15945d" font-weight="bold">Yes</text>

            <!-- Large -->
            <rect x="405" y="170" width="120" height="40" rx="6"
                  fill="#dff4e5" stroke="#25a45b"/>
            <text x="465" y="195" text-anchor="middle"
                  font-size="13" fill="#176b3b" font-weight="bold">Large</text>

            <!-- First no -->
            <path d="M220 115 H150 V231 H220"
                  fill="none" stroke="#e07835" stroke-width="1.8"
                  marker-end="url(#arrowConditional)"/>
            <text x="166" y="106" font-size="11"
                  fill="#d66c30" font-weight="bold">No</text>

            <!-- Second condition -->
            <path d="M310 194 L400 231 L310 268 L220 231 Z"
                  fill="#fff0ce" stroke="#e5a12c" stroke-width="1.5"/>
            <text x="310" y="235" text-anchor="middle"
                  font-size="12" font-weight="bold" fill="#73501a">pop &gt; 2000?</text>

            <!-- Second yes -->
            <path d="M400 231 H465 V284"
                  fill="none" stroke="#16a36a" stroke-width="1.8"
                  marker-end="url(#arrowConditional)"/>
            <text x="420" y="221" font-size="11"
                  fill="#15945d" font-weight="bold">Yes</text>

            <!-- Medium -->
            <rect x="405" y="285" width="120" height="40" rx="6"
                  fill="#e1efff" stroke="#3182ce"/>
            <text x="465" y="310" text-anchor="middle"
                  font-size="13" fill="#245b96" font-weight="bold">Medium</text>

            <!-- Second no -->
            <path d="M220 231 H150 V346 H220"
                  fill="none" stroke="#e07835" stroke-width="1.8"
                  marker-end="url(#arrowConditional)"/>
            <text x="166" y="221" font-size="11"
                  fill="#d66c30" font-weight="bold">No</text>

            <!-- Else -->
            <rect x="220" y="346" width="180" height="42" rx="6"
                  fill="#fff0cf" stroke="#e5a12c"/>
            <text x="310" y="372" text-anchor="middle"
                  font-size="13" fill="#805b18" font-weight="bold">Small (else)</text>

            <!-- Outputs join -->
            <path d="M465 210 V410 H310"
                  fill="none" stroke="#64748b" stroke-width="1.4"/>
            <path d="M465 325 V410"
                  fill="none" stroke="#64748b" stroke-width="1.4"/>
            <path d="M310 388 V410"
                  fill="none" stroke="#64748b" stroke-width="1.4"/>

            <path d="M310 410 V421"
                  fill="none" stroke="#64748b" stroke-width="1.5"
                  marker-end="url(#arrowConditional)"/>

            <!-- End -->
            <rect x="250" y="422" width="120" height="24" rx="12"
                  fill="#e5e7eb" stroke="#64748b"/>
            <text x="310" y="439" text-anchor="middle"
                  font-size="11" fill="#374151" font-weight="bold">End</text>

        </svg>

    </div>
</div>

<p style="font-size: 13px; color: #64748b; text-align: center;">
    Each condition is checked in order. The first True condition determines which block executes.
</p>

<h2>Combining Multiple Conditions</h2>

<p>
    Python provides logical operators to combine conditions or reverse
    their results. They are useful when a decision depends on more than
    one requirement.
</p>

<ul>
    <li><strong>and:</strong> Both conditions must be True.</li>
    <li><strong>or:</strong> At least one condition must be True.</li>
    <li><strong>not:</strong> Reverses the result of a condition.</li>
</ul>

<div style="background: #202938; border-radius: 8px; overflow: hidden; margin: 15px 0;">

    <div style="background: #293548; color: #fff; padding: 9px 15px; font-size: 13px;">
        logical_operators.py
    </div>

    <pre style="color: #f1f5f9; padding: 15px; margin: 0; overflow-x: auto; font-size: 13px; line-height: 1.8;"><code>population = 6000
area = 25

if population > 5000 and area > 20:
    print("Large settlement")

if population > 5000 or area > 30:
    print("At least one condition is satisfied")

if not population < 5000:
    print("Population is 5000 or more")</code></pre>

</div>

<h2>Applying Conditions in GIS</h2>

<p>
    Conditional statements are useful in GIS workflows because they
    allow scripts to check spatial data, identify missing information,
    and apply different operations depending on data values.
</p>

<h3>Example: Checking a Coordinate Reference System</h3>

<p>
    Before performing distance-based spatial analysis, a GIS script
    can check whether a dataset uses the expected coordinate reference system.
</p>

<div style="background: #202938; border-radius: 8px; overflow: hidden; margin: 15px 0;">

    <div style="background: #293548; color: #fff; padding: 9px 15px; font-size: 13px;">
        crs_check.py
    </div>

    <pre style="color: #f1f5f9; padding: 15px; margin: 0; overflow-x: auto; font-size: 13px; line-height: 1.8;"><code>if gdf.crs is None:
    print("CRS information is missing")

elif gdf.crs.to_epsg() != 32643:
    gdf = gdf.to_crs(32643)
    print("Dataset reprojected")

else:
    print("Dataset already uses the expected CRS")</code></pre>

</div>

<p>
    <strong>Explanation:</strong>
    The script first checks whether CRS information exists.
    If it is missing, a message is displayed.
    Otherwise, it checks the EPSG code and reprojects the dataset
    when it does not match EPSG:32643. If the CRS already matches,
    no reprojection is needed.
</p>

<h2>Indentation in Python</h2>

<p>
    Indentation defines which statements belong to a conditional block.
    Python uses indentation instead of curly brackets to group instructions.
    Statements inside the same block must use consistent indentation.
</p>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 12px; margin: 15px 0;">

    <div style="border: 1px solid #b8dfc5; border-radius: 7px; overflow: hidden;">

        <div style="background: #e5f5e9; padding: 9px; color: #216b3b; font-weight: bold; font-size: 13px;">
            Correct indentation
        </div>

        <pre style="background: #202938; color: #f1f5f9; padding: 12px; margin: 0; font-size: 12px; line-height: 1.7;"><code>if pop > 5000:
    print("Large")
    print("Population")</code></pre>

    </div>

    <div style="border: 1px solid #edc2c2; border-radius: 7px; overflow: hidden;">

        <div style="background: #fff0f0; padding: 9px; color: #b33c3c; font-weight: bold; font-size: 13px;">
            Incorrect indentation
        </div>

        <pre style="background: #202938; color: #f1f5f9; padding: 12px; margin: 0; font-size: 12px; line-height: 1.7;"><code>if pop > 5000:
print("Large")
    print("Population")</code></pre>

    </div>

</div>

<p>
    Incorrect indentation can cause an <strong>IndentationError</strong>
    or change which statements are executed as part of a condition.
</p>


<div class="tip">
    <p style="margin: 0;">
        <strong>Practical tip:</strong>
        Test your conditions with different input values, including values
        at the boundary of each condition. This helps ensure that your
        program handles every possible case correctly.
    </p>
</div>
