{{-- resources/views/learning/lessons/8-22-pyqgis.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PyQGIS is the Python API of QGIS. It allows you to work with map layers,
    features and projects using Python. You can use it to automate GIS tasks
    that would otherwise require repeated manual work in QGIS.
</p>

<h2>Learning Goals</h2>
<ul>
    <li>Understand how PyQGIS works with QGIS objects</li>
    <li>Access the active map layer and inspect its details</li>
    <li>Load vector layers into a QGIS project</li>
    <li>Access and process individual features</li>
    <li>Automate simple GIS operations using Python</li>
</ul>

<h2>PyQGIS</h2>

<p>
    PyQGIS connects Python code with the QGIS application. It provides classes
    and methods for accessing project information, managing layers and working
    with geographic features.
</p>

<p>Some important PyQGIS objects are:</p>

<ul>
    <li><strong>iface:</strong> Provides access to the current QGIS interface, such as the active layer.</li>
    <li><strong>QgsProject:</strong> Manages the current QGIS project, including its layers and settings.</li>
    <li><strong>QgsVectorLayer:</strong> Represents a vector dataset containing point, line or polygon features.</li>
    <li><strong>QgsFeature:</strong> Represents an individual geographic feature and its attribute values.</li>
    <li><strong>QgsGeometry:</strong> Provides access to the spatial shape and geometric operations of a feature.</li>
</ul>

<h2>Working with the PyQGIS Console</h2>

<p>
    The Python Console allows you to execute PyQGIS commands directly inside
    QGIS. It is useful for testing code, inspecting layers and automating
    common tasks.
</p>

<ol>
    <li>Open QGIS.</li>
    <li>Go to <strong>Plugins → Python Console</strong>.</li>
    <li>Enter Python commands in the console.</li>
    <li>Press Enter to execute the commands.</li>
</ol>

<h2>Accessing the Active Layer</h2>

<p>
    The active layer is the layer currently selected in the QGIS Layers panel.
    PyQGIS can access it through <code>iface.activeLayer()</code>.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        PyQGIS Example
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>layer = iface.activeLayer()

if layer:
    print("Layer Name:", layer.name())
    print("Feature Count:", layer.featureCount())
    print("Layer Type:", layer.type())
else:
    print("No layer selected")</code></pre>
</div>

<p><strong>Explanation:</strong></p>
<ul>
    <li><code>iface.activeLayer()</code> gets the currently selected layer.</li>
    <li><code>layer.name()</code> returns the layer name.</li>
    <li><code>layer.featureCount()</code> returns the number of features.</li>
    <li><code>layer.type()</code> identifies the layer type.</li>
</ul>

<h2>Loading a Vector Layer</h2>

<p>
    PyQGIS can load vector datasets such as Shapefiles into a QGIS project.
    The <code>QgsVectorLayer</code> class creates the layer, while
    <code>QgsProject</code> adds it to the current project.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Loading a Shapefile
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>from qgis.core import QgsVectorLayer, QgsProject

path = "C:/GIS/data/wards.shp"

layer = QgsVectorLayer(path, "Ward Boundaries", "ogr")

if layer.isValid():
    QgsProject.instance().addMapLayer(layer)
    print("Layer loaded successfully")
else:
    print("Unable to load layer")</code></pre>
</div>

<p>
    Replace the example path with the actual location of your Shapefile.
    The <code>isValid()</code> method checks whether the layer was loaded
    successfully.
</p>

<h2>Accessing Features and Attributes</h2>

<p>
    A vector layer contains individual features. Each feature has a geometry
    and attribute values. PyQGIS allows you to loop through these features
    and retrieve information from their attribute tables.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Reading Feature Attributes
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>layer = iface.activeLayer()

if layer:
    for feature in layer.getFeatures():
        print("Feature ID:", feature.id())
        print("Attributes:", feature.attributes())</code></pre>
</div>

<p><strong>How it works:</strong></p>
<ul>
    <li><code>layer.getFeatures()</code> retrieves the features in the layer.</li>
    <li><code>feature.id()</code> returns the feature's ID.</li>
    <li><code>feature.attributes()</code> returns the feature's attribute values.</li>
</ul>

<h2>Working with Feature Geometry</h2>

<p>
    PyQGIS can also access the geometry of each feature. Geometry operations
    help calculate spatial measurements such as area and length.
</p>

<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">
    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Calculating Polygon Area
    </div>
    <pre style="margin: 0; padding: 20px; font-family: Consolas, monospace; font-size: 14px; line-height: 1.5; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>layer = iface.activeLayer()

if layer and layer.isValid():
    for feature in layer.getFeatures():
        geometry = feature.geometry()

        if not geometry.isNull():
            print("Feature ID:", feature.id())
            print("Area:", geometry.area())</code></pre>
</div>

<p>
    The <code>geometry()</code> method retrieves a feature's geometry, and
    <code>area()</code> calculates its area in the layer's coordinate units.
    For meaningful area measurements, use an appropriate projected coordinate
    reference system.
</p>

<h2>Automating GIS Tasks with PyQGIS</h2>

<p>
    PyQGIS is useful when the same GIS operation needs to be performed on
    multiple layers or features. Instead of repeating each operation manually,
    you can write a Python script and run it inside QGIS.
</p>

<p>Common applications include:</p>

<ul>
    <li><strong>Layer management:</strong> Load, rename and organise map layers.</li>
    <li><strong>Attribute inspection:</strong> Read and examine feature information.</li>
    <li><strong>Spatial measurements:</strong> Calculate feature areas and lengths.</li>
    <li><strong>Data processing:</strong> Automate repetitive operations on geographic datasets.</li>
    <li><strong>Project management:</strong> Access and manage layers within a QGIS project.</li>
</ul>


<h2>PyQGIS Object Hierarchy</h2>

<p>
    PyQGIS uses different objects to access the QGIS application,
    projects, layers and individual geographic features.
</p>

<!-- Python Code First -->
<div style="border-radius: 6px; overflow: hidden; background: #1e293b; color: #f1f5f9; margin: 20px 0;">

    <div style="padding: 10px 15px; background: #29384d; color: #e2e8f0; font-size: 13px;">
        Example: Accessing GIS Data
    </div>

    <pre style="margin: 0; padding: 15px; font-family: Consolas, monospace; font-size: 13px; line-height: 1.6; white-space: pre; overflow-x: auto; background: #1e293b; color: #f1f5f9;"><code>layer = iface.activeLayer()

for feature in layer.getFeatures():
    print(feature.id())
    print(feature.attributes())</code></pre>
</div>

<!-- Flowchart Next -->
<div style="display: flex; flex-direction: column; align-items: center; gap: 5px; margin: 20px 0;">

    <div style="width: 60%; max-width: 250px; border: 2px solid #64748b; border-radius: 6px; padding: 4px; background: #f1f5f9; color: #1e293b; text-align: center;">
        <strong>QGIS Interface</strong>
        <div style="font-size: 12px; color: #64748b;">iface</div>
    </div>

    <div style="font-size: 22px; color: #64748b;">↓</div>

    <div style="width: 60%; max-width: 250px; border: 2px solid #16a34a; border-radius: 6px; padding: 4px; background: #f0fdf4; color: #166534; text-align: center;">
        <strong>QGIS Project</strong>
        <div style="font-size: 12px;">QgsProject</div>
    </div>

    <div style="font-size: 22px; color: #64748b;">↓</div>

    <div style="width: 60%; max-width: 250px; border: 2px solid #2563eb; border-radius: 6px; padding: 4px; background: #eff6ff; color: #1e40af; text-align: center;">
        <strong>Vector Layer</strong>
        <div style="font-size: 12px;">QgsVectorLayer</div>
    </div>

    <div style="font-size: 22px; color: #64748b;">↓</div>

    <div style="width: 60%; max-width: 250px; border: 2px solid #d97706; border-radius: 6px; padding: 4px; background: #fffbeb; color: #92400e; text-align: center;">
        <strong>Feature</strong>
        <div style="font-size: 12px;">QgsFeature</div>
    </div>

</div>

<p>
    This relationship helps you understand how PyQGIS moves from accessing
    the QGIS application to working with individual geographic features.
</p>

<div class="tip">
    <p style="margin:0">
        <strong>Tip:</strong> Start with the active layer and practise reading
        its name, feature count and attributes before moving on to more
        advanced PyQGIS operations.
    </p>
</div>