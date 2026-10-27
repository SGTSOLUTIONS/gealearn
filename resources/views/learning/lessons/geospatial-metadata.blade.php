

<p>
    Metadata is "data about data". Geospatial metadata describes a dataset: what it contains, who made it, when, how, and how reliable it is.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the purpose of metadata and why it is essential in GIS</li>
    <li>Learn the common elements that make up a standard metadata record</li>
    <li>Recognise the different types of metadata and relevant industry standards</li>
</ul>

<div class="note">
    <p style="margin:0"><strong>Note:</strong> Metadata lets others (and your future self) find, understand, and trust a dataset. Fill it in when you create the data, not months later.</p>
</div>

<!-- CSS Design Diagram -->
<div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 40px 30px; margin: 30px 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; display: flex; align-items: center; justify-content: center; gap: 30px; flex-wrap: wrap; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
    
    <!-- 1. Dataset Box -->
    <div style="text-align: center;">
        <div style="width: 100px; height: 100px; background: white; border: 2px solid #cbd5e1; display: flex; flex-direction: column; padding: 10px; box-sizing: border-box; justify-content: space-between; margin-bottom: 10px;">
            <!-- Mini squares representing data -->
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 35px; height: 35px; background: #1bba85;"></div>
                <div style="width: 35px; height: 35px; background: #17a2b8;"></div>
            </div>
            <div style="display: flex; justify-content: flex-start;">
                <div style="width: 35px; height: 35px; background: #fd7e14;"></div>
            </div>
        </div>
        <div style="font-weight: 700; font-size: 14px; color: #111;">wards.gpkg</div>
        <div style="font-size: 12px; color: #64748b;">Dataset</div>
    </div>

    <!-- 2. Arrow -->
    <div style="text-align: center; color: #64748b;">
        <div style="font-size: 13px; margin-bottom: 5px;">described</div>
        <div style="font-size: 13px; margin-bottom: 10px;">by</div>
        <div style="width: 60px; height: 2px; background: #64748b; position: relative;">
            <div style="position: absolute; right: -5px; top: -5px; width: 0; height: 0; border-top: 6px solid transparent; border-bottom: 6px solid transparent; border-left: 8px solid #64748b;"></div>
        </div>
    </div>

    <!-- 3. Metadata Record Card -->
    <div style="background: #1e3a5f; border-radius: 8px; width: 280px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);">
        <div style="background: #152b47; color: white; text-align: center; padding: 12px; font-weight: bold; font-size: 15px;">
            Metadata record
        </div>
        <div style="padding: 15px; font-size: 13px; color: white; display: flex; flex-direction: column; gap: 12px;">
            <div style="display: flex; align-items: center;">
                <span style="color: #93c5fd; font-weight: bold; width: 70px;">Title</span>
                <div style="background: #2a4b75; flex-grow: 1; padding: 4px 8px; border-radius: 4px;">Ward boundaries 2026</div>
            </div>
            <div style="display: flex; align-items: center;">
                <span style="color: #93c5fd; font-weight: bold; width: 70px;">Author</span>
                <div style="background: #2a4b75; flex-grow: 1; padding: 4px 8px; border-radius: 4px;">Planning Dept.</div>
            </div>
            <div style="display: flex; align-items: center;">
                <span style="color: #93c5fd; font-weight: bold; width: 70px;">Date</span>
                <div style="background: #2a4b75; flex-grow: 1; padding: 4px 8px; border-radius: 4px;">Updated 2026-10-01</div>
            </div>
            <div style="display: flex; align-items: center;">
                <span style="color: #93c5fd; font-weight: bold; width: 70px;">CRS</span>
                <div style="background: #2a4b75; flex-grow: 1; padding: 4px 8px; border-radius: 4px;">EPSG:4326</div>
            </div>
            <div style="display: flex; align-items: center;">
                <span style="color: #93c5fd; font-weight: bold; width: 70px;">Extent</span>
                <div style="background: #2a4b75; flex-grow: 1; padding: 4px 8px; border-radius: 4px;">80.10E - 80.30E</div>
            </div>
            <div style="display: flex; align-items: center;">
                <span style="color: #93c5fd; font-weight: bold; width: 70px;">Quality</span>
                <div style="background: #2a4b75; flex-grow: 1; padding: 4px 8px; border-radius: 4px;">Accuracy +/- 5 m</div>
            </div>
        </div>
    </div>

    <!-- 4. Types of Metadata -->
    <div style="display: flex; flex-direction: column; gap: 8px; margin-left: 10px;">
        <div style="font-weight: bold; font-size: 13px; color: #111; margin-bottom: 5px;">Types of metadata</div>
        
        <div style="display: flex; align-items: center; background: white; border-radius: 6px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1); width: 190px;">
            <div style="width: 6px; height: 40px; background: #1bba85;"></div>
            <div style="padding: 6px 12px;">
                <div style="font-weight: bold; font-size: 12px; color: #111;">Descriptive</div>
                <div style="font-size: 11px; color: #64748b;">what the data is</div>
            </div>
        </div>

        <div style="display: flex; align-items: center; background: white; border-radius: 6px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1); width: 190px;">
            <div style="width: 6px; height: 40px; background: #17a2b8;"></div>
            <div style="padding: 6px 12px;">
                <div style="font-weight: bold; font-size: 12px; color: #111;">Technical</div>
                <div style="font-size: 11px; color: #64748b;">how it is stored</div>
            </div>
        </div>

        <div style="display: flex; align-items: center; background: white; border-radius: 6px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1); width: 190px;">
            <div style="width: 6px; height: 40px; background: #fd7e14;"></div>
            <div style="padding: 6px 12px;">
                <div style="font-weight: bold; font-size: 12px; color: #111;">Administrative</div>
                <div style="font-size: 11px; color: #64748b;">who owns it</div>
            </div>
        </div>

        <div style="display: flex; align-items: center; background: white; border-radius: 6px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1); width: 190px;">
            <div style="width: 6px; height: 40px; background: #dc3545;"></div>
            <div style="padding: 6px 12px;">
                <div style="font-weight: bold; font-size: 12px; color: #111;">Quality</div>
                <div style="font-size: 11px; color: #64748b;">how good it is</div>
            </div>
        </div>
    </div>
</div>

<h3>Key points</h3>
<ul>
    <li>Metadata lets others (and your future self) find, understand and trust a dataset.</li>
    <li>Common elements: title, description, creator, date, CRS, spatial extent, scale or resolution, attribute descriptions, quality and licence.</li>
    <li>Lineage records where the data came from and how it was processed. Data quality covers accuracy, completeness and consistency.</li>
    <li>Standards include ISO 19115 (international) and FGDC CSDGM (US). Catalogues use them to share data.</li>
    <li>Metadata can be stored in an XML file next to the data, inside the file (GeoPackage) or in a catalogue.</li>
    <li>In QGIS, open Layer Properties and the Metadata tab to read and edit it.</li>
</ul>

<table>
    <thead>
        <tr>
            <th>Metadata type</th>
            <th>Describes</th>
            <th>Example</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Descriptive</td>
            <td>What the data is</td>
            <td>Title, keywords</td>
        </tr>
        <tr>
            <td>Technical</td>
            <td>How it is stored</td>
            <td>CRS, format, resolution</td>
        </tr>
        <tr>
            <td>Administrative</td>
            <td>Who owns it</td>
            <td>Licence, contact</td>
        </tr>
        <tr>
            <td>Quality</td>
            <td>How good it is</td>
            <td>Accuracy, lineage</td>
        </tr>
    </tbody>
</table>

<div class="tip">
    <p style="margin:0"><strong>Quick tip:</strong> Fill in metadata when you create the data, not months later. Even a short description and the source date save a lot of time.</p>
</div>