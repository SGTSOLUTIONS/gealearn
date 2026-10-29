{{-- resources/views/learning/lessons/8-20-pandas.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Pandas handles the attribute tables of GIS data: filtering, grouping and joining.
    It is the workhorse for tabular data manipulation.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Read and write CSV files</li>
    <li>Filter and group rows</li>
    <li>Join tables</li>
</ul>

<h2>Visual Guide: Pandas GroupBy</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; font-size: 12px;">
    <div style="width: 55%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">pandas.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            import pandas as pd<br>
            df = pd.read_csv("wards.csv")<br>
            big = df[df["pop"] &gt; 5000]<br>
            by_type = df.groupby("type")["pop"].sum()<br>
            df.merge(rates, on="ward_id")
        </div>
    </div>
    <div style="width: 40%; display: flex; flex-direction: column; align-items: center; font-size: 11px;">
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 10px;">
            <thead>
                <tr style="background: #282A35; color: #fff;">
                    <th style="padding: 3px; border: 1px solid #ccc;">ward</th>
                    <th style="padding: 3px; border: 1px solid #ccc;">type</th>
                    <th style="padding: 3px; border: 1px solid #ccc;">pop</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 3px; border: 1px solid #ccc;">A</td><td style="padding: 3px; border: 1px solid #ccc;">Urban</td><td style="padding: 3px; border: 1px solid #ccc;">5400</td></tr>
                <tr><td style="padding: 3px; border: 1px solid #ccc;">B</td><td style="padding: 3px; border: 1px solid #ccc;">Rural</td><td style="padding: 3px; border: 1px solid #ccc;">4100</td></tr>
                <tr><td style="padding: 3px; border: 1px solid #ccc;">C</td><td style="padding: 3px; border: 1px solid #ccc;">Urban</td><td style="padding: 3px; border: 1px solid #ccc;">7800</td></tr>
            </tbody>
        </table>
        <div style="font-size: 18px; color: #FF9800;">&darr;</div>
        <div style="font-weight: bold; color: #d9534f; margin: 5px 0;">groupby</div>
        <table style="width: 80%; border-collapse: collapse;">
            <thead>
                <tr style="background: #04AA6D; color: #fff;">
                    <th style="padding: 3px; border: 1px solid #ccc;">type</th>
                    <th style="padding: 3px; border: 1px solid #ccc;">pop</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 3px; border: 1px solid #ccc;">Urban</td><td style="padding: 3px; border: 1px solid #ccc;">13200</td></tr>
                <tr><td style="padding: 3px; border: 1px solid #ccc;">Rural</td><td style="padding: 3px; border: 1px solid #ccc;">7300</td></tr>
            </tbody>
        </table>
    </div>
</div>

<p>
    The diagram shows how a groupby operation summarises rows by a category, summing the values in another column.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is Pandas?</strong> A library for tables (DataFrames), ideal for attribute data.</li>
    <li><strong>How do I read a CSV?</strong> <code>pd.read_csv("file.csv")</code>.</li>
    <li><strong>How do I filter rows?</strong> <code>df[df["pop"] &gt; 5000]</code>.</li>
    <li><strong>How do I summarise?</strong> <code>df.groupby("type")["pop"].sum()</code>.</li>
    <li><strong>How do I join tables?</strong> <code>df.merge(other, on="ward_id")</code>.</li>
    <li><strong>How does GeoPandas relate?</strong> A GeoDataFrame inherits all pandas methods.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Do attribute work in Pandas, spatial work in GeoPandas.</p>
</div>