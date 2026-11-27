<p>
    Data quality measures how well your data represents the real world and whether it is fit for your specific purpose. Good quality data is accurate, complete, consistent and current, which ensures your maps and analysis can be trusted.
</p>

<h3>Learning goals</h3>
<ul>
    <li>Identify the six dimensions of data quality</li>
    <li>Recognise common sources of error</li>
    <li>Evaluate whether data is fit for purpose</li>
    <li>Document data lineage and checks</li>
</ul>

<h3>The dimensions of data quality</h3>
<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; margin:20px 0;">
    <div style="border:1px solid #245b83; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#245b83; color:white; padding:12px; font-weight:bold; text-align:center;">Positional accuracy</div>
        <div style="padding:15px; text-align:center;">
            <p>How close a feature is to its true location on the ground.</p>
        </div>
    </div>
    <div style="border:1px solid #198754; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#198754; color:white; padding:12px; font-weight:bold; text-align:center;">Attribute accuracy</div>
        <div style="padding:15px; text-align:center;">
            <p>Whether the values in the table are correct and truthful.</p>
        </div>
    </div>
    <div style="border:1px solid #b45309; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#b45309; color:white; padding:12px; font-weight:bold; text-align:center;">Completeness</div>
        <div style="padding:15px; text-align:center;">
            <p>Whether all required features and attributes are present.</p>
        </div>
    </div>
    <div style="border:1px solid #6d28d9; border-radius:8px; overflow:hidden; background:#f5f8fc;">
        <div style="background:#6d28d9; color:white; padding:12px; font-weight:bold; text-align:center;">Consistency</div>
        <div style="padding:15px; text-align:center;">
            <p>Whether the data follows the same rules without contradictions.</p>
        </div>
    </div>
</div>

<h3>Common sources of error</h3>
<ul>
    <li><strong>Human error</strong> – typos during data entry, mislabelled fields, or misclassified features.</li>
    <li><strong>Measurement error</strong> – limitations of GPS accuracy, digitising mistakes, or poor satellite resolution.</li>
    <li><strong>Conversion errors</strong> – loss of precision or fields when moving between formats like Shapefile to GeoPackage.</li>
    <li><strong>Outdated data</strong> – using old imagery or boundaries that have since changed on the ground.</li>
</ul>

<div class="tip">
    <p style="margin:0">
        <strong>Practical tip:</strong> Always check the metadata (date, source, accuracy) before using a new dataset. If it lacks metadata, treat it with caution.
    </p>
</div>