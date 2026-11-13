{{-- resources/views/learning/lessons/16-4-create-edit-polygons.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Digitising draws new polygons and edits existing ones in a layer.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Create a new polygon layer</li>
    <li>Digitise and edit polygons</li>
    <li>Use snapping and save edits</li>
</ul>

<h2>Visual Guide: Step-by-Step Digitising and Editing</h2>
<div style="display: flex; flex-direction: column; align-items: center; margin: 20px 0; font-family: sans-serif;">

    <!-- STEP 1: Image First -->
    <div style="width: 100%; max-width: 800px; border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin-bottom: 15px;">
        <img src="{{ asset('images/original_with_cursor.png') }}" alt="Step 1: Open the drawing tools" style="width: 100%; display: block;">
    </div>
    <!-- STEP 1: Content Next -->
    <div style="width: 100%; max-width: 800px; margin-bottom: 40px; padding: 0 10px;">
        <h3 style="margin-top: 0; color: #005a70;"> Open the Drawing and Editing Tools</h3>
        <ul style="padding-left: 20px; line-height: 1.6; color: #333; font-size: 14px;">
            <li>Click the pencil icon on the right side of the map.</li>
            <li>The drawing and editing menu will open.</li>
            <li>This menu provides tools to create, modify, and delete polygon features.</li>
            <li>Make sure the correct polygon layer is selected.</li>
        </ul>
    </div>

    <!-- STEP 2: Image First -->
    <div style="width: 100%; max-width: 800px; border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin-bottom: 15px;">
        <img src="{{ asset('images/cursor_on_dot.png') }}" alt="Step 2: Draw the polygon vertices" style="width: 100%; display: block;">
    </div>
    <!-- STEP 2: Content Next -->
    <div style="width: 100%; max-width: 800px; margin-bottom: 40px; padding: 0 10px;">
        <h3 style="margin-top: 0; color: #005a70;"> Draw a Polygon</h3>
        <ul style="padding-left: 20px; line-height: 1.6; color: #333; font-size: 14px;">
            <li>Select <strong>Draw Polygon</strong> from the editing menu.</li>
            <li>Click on the map to mark the boundary points.</li>
            <li>Continue clicking to add vertices and define the required shape.</li>
            <li>Ensure the polygon follows the correct area boundary.</li>
        </ul>
    </div>

    <!-- STEP 3: Image First -->
    <div style="width: 100%; max-width: 800px; border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin-bottom: 15px;">
        <img src="{{ asset('images/save_buliding.png') }}" alt="Step 3: Save the building" style="width: 100%; display: block;">
    </div>
    <!-- STEP 3: Content Next -->
    <div style="width: 100%; max-width: 800px; margin-bottom: 40px; padding: 0 10px;">
        <h3 style="margin-top: 0; color: #005a70;"> Save the Polygon</h3>
        <ul style="padding-left: 20px; line-height: 1.6; color: #333; font-size: 14px;">
            <li>Finish drawing the polygon by completing the boundary.</li>
            <li>Save the changes made to the layer.</li>
            <li>The newly created polygon will appear on the map.</li>
            <li>A unique GIS ID will be assigned to the new feature.</li>
        </ul>
    </div>

    <!-- STEP 4: Image First -->
    <div style="width: 100%; max-width: 800px; border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin-bottom: 15px;">
        <img src="{{ asset('images/cursor_on_delete_feature.png') }}" alt="Step 4: Select Delete Feature" style="width: 100%; display: block;">
    </div>
    <!-- STEP 4: Content Next -->
    <div style="width: 100%; max-width: 800px; margin-bottom: 40px; padding: 0 10px;">
        <h3 style="margin-top: 0; color: #005a70;"> Select a Polygon to Delete</h3>
        <ul style="padding-left: 20px; line-height: 1.6; color: #333; font-size: 14px;">
            <li>Click on the existing polygon you want to remove.</li>
            <li>Open the drawing and editing menu.</li>
            <li>Verify that the correct polygon is selected before proceeding.</li>
        </ul>
    </div>

    <!-- STEP 5: Image First -->
    <div style="width: 100%; max-width: 800px; border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin-bottom: 15px;">
        <img src="{{ asset('images/cursor_on_delete_button.png') }}" alt="Step 5: Confirm Delete" style="width: 100%; display: block;">
    </div>
    <!-- STEP 5: Content Next -->
    <div style="width: 100%; max-width: 800px; margin-bottom: 20px; padding: 0 10px;">
        <h3 style="margin-top: 0; color: #005a70;"> Confirm Polygon Deletion</h3>
        <ul style="padding-left: 20px; line-height: 1.6; color: #333; font-size: 14px;">
            <li>A confirmation window will appear.</li>
            <li>Check the GIS ID of the selected polygon.</li>
            <li>Click the red <strong>Delete</strong> button to confirm.</li>
            <li>The selected polygon will be permanently removed from the layer.</li>
        </ul>
    </div>

</div>

