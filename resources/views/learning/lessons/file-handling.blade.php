{{-- resources/views/learning/lessons/8-10-file-handling.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    File handling reads data from files and writes results back.
    It is the bridge between your script and the data on disk.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Open and close files safely</li>
    <li>Read text line by line</li>
    <li>Write results to a file</li>
</ul>

<h2>Visual Guide: Reading and Writing</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 12px;">
    <div style="width: 55%; border: 1px solid #ccc; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">files.py</div>
        <div style="padding: 15px; font-family: Consolas, monospace; font-size: 13px; text-align: left;">
            with open("wards.csv") as f:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;for line in f:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(line.strip())<br><br>
            with open("out.txt", "w") as f:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;f.write("done")
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #282A35; font-size: 12px;">File modes</strong>
        <table style="width: 100%; font-size: 11px; border-collapse: collapse; margin-top: 8px;">
            <thead>
                <tr style="background: #e0e0e0;">
                    <th style="padding: 4px; border: 1px solid #ccc;">mode</th>
                    <th style="padding: 4px; border: 1px solid #ccc;">meaning</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 4px; border: 1px solid #ccc; text-align: center;">"r"</td><td style="padding: 4px; border: 1px solid #ccc;">read (default)</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ccc; text-align: center;">"w"</td><td style="padding: 4px; border: 1px solid #ccc;">write, overwrites</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ccc; text-align: center;">"a"</td><td style="padding: 4px; border: 1px solid #ccc;">append to end</td></tr>
                <tr><td style="padding: 4px; border: 1px solid #ccc; text-align: center;">"rb" / "wb"</td><td style="padding: 4px; border: 1px solid #ccc;">binary read / write</td></tr>
            </tbody>
        </table>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <code>with ...</code> closes the file automatically
</div>

<p>
    The diagram shows how to read from and write to files using the <code>with</code> statement, and the most common file modes.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>How do I open a file safely?</strong> <code>with open(path) as f:</code> closes the file automatically.</li>
    <li><strong>What are the file modes?</strong> r read, w write (overwrites), a append, b binary.</li>
    <li><strong>How do I read text?</strong> <code>f.read()</code> for everything, or loop line by line.</li>
    <li><strong>Which modules read CSV and JSON?</strong> csv (reader, DictReader) and json (load, dump).</li>
    <li><strong>How should I write file paths?</strong> Use <code>pathlib.Path</code>; on Windows use raw strings like <code>r"C:\data"</code>.</li>
    <li><strong>What does FileNotFoundError mean?</strong> The path is wrong or the working folder is not what you expect.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Print the working folder with <code>os.getcwd()</code> when a path will not open.</p>
</div>