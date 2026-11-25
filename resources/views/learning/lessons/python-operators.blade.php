
{{-- resources/views/learning/lessons/8-5-operators.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Operators are symbols and keywords used to perform calculations,
    compare values and combine conditions in Python. In GIS, they help
    calculate geographic measurements, filter spatial data and make
    decisions based on attribute values.
</p>

<h2>Learning Goals</h2>
<ul>
    <li>Perform calculations using arithmetic operators</li>
    <li>Compare values using comparison operators</li>
    <li>Understand logical, membership, and assignment operators in Python</li>
</ul>

<h2>Python Operators</h2>

<p>
    Python provides different types of operators, each designed for a
    specific task. For example, arithmetic operators calculate population
    density, comparison operators identify areas above a population
    threshold, and logical operators combine multiple conditions.
</p>

<h2>1. Arithmetic Operators</h2>

<p>
    Arithmetic operators perform mathematical calculations such as
    addition, subtraction, multiplication and division. In GIS, they are
    useful for calculating area, distance, population density and other
    measurements.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Arithmetic Operators
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>population = 5400
area = 12.5

density = population / area
total = population + 1000
half = population // 2
remainder = population % 2
square = area ** 2

print(density)
print(total)
print(half)
print(remainder)
print(square)</code></pre>
</div>

<p><strong>Common arithmetic operators:</strong></p>

<ul>
    <li><code>+</code> Addition: adds two values.</li>
    <li><code>-</code> Subtraction: subtracts one value from another.</li>
    <li><code>*</code> Multiplication: multiplies two values.</li>
    <li><code>/</code> Division: divides one value by another.</li>
    <li><code>//</code> Floor division: returns the quotient rounded down.</li>
    <li><code>%</code> Modulus: returns the remainder.</li>
    <li><code>**</code> Exponentiation: raises a value to a power.</li>
</ul>

<p>
    For example, dividing a ward population of 5,400 by an area of
    12.5 square kilometres gives a population density of 432 people
    per square kilometre.
</p>

<h2>2. Comparison Operators</h2>

<p>
    Comparison operators compare two values and return either
    <code>True</code> or <code>False</code>. They are commonly used
    to identify geographic areas that meet particular conditions.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Comparison Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>population = 5400

print(population > 5000)
print(population < 5000)
print(population == 5400)
print(population != 3000)
print(population >= 5000)
print(population <= 6000)</code></pre>
</div>

<p><strong>Common comparison operators:</strong></p>

<ul>
    <li><code>==</code> Equal to</li>
    <li><code>!=</code> Not equal to</li>
    <li><code>&gt;</code> Greater than</li>
    <li><code>&lt;</code> Less than</li>
    <li><code>&gt;=</code> Greater than or equal to</li>
    <li><code>&lt;=</code> Less than or equal to</li>
</ul>

<p>
    For example, a GIS analyst can use <code>population &gt; 5000</code>
    to identify wards with a population greater than 5,000.
</p>

<h2>3. Logical Operators</h2>

<p>
    Logical operators combine or reverse conditions. They are useful
    when a GIS analysis requires multiple conditions to be satisfied.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Logical Operators
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>population = 5400
is_urban = True

high_population = population > 5000

print(high_population and is_urban)
print(high_population or is_urban)
print(not is_urban)</code></pre>
</div>

<p><strong>Three logical operators:</strong></p>

<ul>
    <li><code>and</code> Returns True when both conditions are True.</li>
    <li><code>or</code> Returns True when at least one condition is True.</li>
    <li><code>not</code> Reverses the result of a condition.</li>
</ul>

<p>
    For example, a GIS analyst can identify urban wards with a population
    greater than 5,000 by combining the two conditions using
    <code>and</code>.
</p>

<h2>4. Membership Operators</h2>

<p>
    Membership operators check whether a value exists inside a sequence
    such as a string, list or tuple. They are useful for checking
    category names and selected GIS attributes.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Membership Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>land_use = ["Residential", "Commercial", "Agricultural"]

print("Residential" in land_use)
print("Forest" not in land_use)</code></pre>
</div>

<ul>
    <li><code>in</code> Checks whether a value exists in a collection.</li>
    <li><code>not in</code> Checks whether a value does not exist in a collection.</li>
</ul>

<p>
    In this example, Python checks whether Residential and Forest
    are present in the land-use category list.
</p>

<h2>Understanding = and ==</h2>

<p>
    The assignment operator (<code>=</code>) and equality operator
    (<code>==</code>) look similar but perform different tasks.
    Understanding their difference is important when writing Python conditions.
</p>

<div style="display: flex; flex-wrap: wrap; gap: 15px; margin: 20px 0;">
    <div style="flex: 1 1 220px; border: 1px solid #d1d5db; border-radius: 6px; padding: 15px; background: #f8fafc;">
        <h3 style="margin-top: 0; color: #2563eb;">Assignment (=)</h3>
        <p>Stores a value in a variable.</p>
        <pre style="background: #1e293b; color: #f1f5f9; padding: 12px; border-radius: 4px; overflow-x: auto;"><code>population = 5400</code></pre>
        <p style="margin-bottom: 0;">The value 5400 is assigned to population.</p>
    </div>

    <div style="flex: 1 1 220px; border: 1px solid #d1d5db; border-radius: 6px; padding: 15px; background: #f8fafc;">
        <h3 style="margin-top: 0; color: #16a34a;">Equality (==)</h3>
        <p>Checks whether two values are equal.</p>
        <pre style="background: #1e293b; color: #f1f5f9; padding: 12px; border-radius: 4px; overflow-x: auto;"><code>population == 5400</code></pre>
        <p style="margin-bottom: 0;">Returns True because both values are equal.</p>
    </div>
</div>

<h2>Applying Operators in GIS Analysis</h2>

<p>
    Operators become especially useful when several conditions must be
    applied to geographic data. For example, a GIS analyst may want to
    identify urban wards with a population above 5,000 and calculate
    their population density.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        GIS Analysis Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>population = 5400
area = 12.5
land_use = "Urban"

density = population / area

if population > 5000 and land_use == "Urban":
    print("High population urban ward")

print("Population Density:", density)</code></pre>
</div>

<p>
    This example combines arithmetic, comparison and logical operators
    in one GIS-related task. It calculates population density and checks
    whether the ward meets both conditions.
</p>

<h2>Where Operators Are Used in GIS</h2>

<ul>
    <li><strong>Attribute filtering:</strong> Select features based on population, area or other attribute values.</li>
    <li><strong>Spatial measurements:</strong> Calculate distances, areas and ratios.</li>
    <li><strong>Land-use analysis:</strong> Identify features belonging to selected land-use categories.</li>
    <li><strong>Condition checking:</strong> Find geographic areas that satisfy multiple criteria.</li>
    <li><strong>Data validation:</strong> Check whether attribute values fall within acceptable ranges.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Tip:</strong> Use <code>=</code> to assign values and
        <code>==</code> to compare them. When combining multiple
        conditions, check whether <code>and</code> or <code>or</code>
        matches your analysis requirement.
    </p>
</div>
