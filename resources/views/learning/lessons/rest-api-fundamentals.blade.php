{{-- resources/views/learning/lessons/10-8-rest-api-fundamentals.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    A REST API lets the browser work with data through simple web addresses and standard methods.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand REST principles and HTTP methods</li>
    <li>Know common status codes</li>
    <li>Understand query parameters and CORS</li>
</ul>

<h2>Visual Guide: Common API Methods and Status Codes</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px; padding: 15px;">
    <!-- Left side: Code block -->
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">api.txt</span><br><br>
        GET &nbsp;&nbsp;&nbsp;&nbsp;/api/wards &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list<br>
        GET &nbsp;&nbsp;&nbsp;&nbsp;/api/wards/5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;one ward<br>
        POST &nbsp;&nbsp;&nbsp;/api/wards &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;create<br>
        PUT &nbsp;&nbsp;&nbsp;&nbsp;/api/wards/5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;update<br>
        DELETE /api/wards/5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remove
    </div>

    <!-- Right side: The Table -->
    <div style="width: 30%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px; padding-right: 20%;">Common status codes</div>
        
        <!-- Centered wrapper for the table to keep it compact -->
        <div style="display: flex; justify-content: center; width: 100%;">
            <table style=" border-collapse: collapse; text-align: center; font-family: sans-serif; font-size: 12px;">
                <thead>
                    <tr>
                        <th style="background: #f07b24; color: white; padding: 8px 20px; border: 1px solid #e0e0e0; font-weight: bold;">code</th>
                        <th style="background: #005a70; color: white; padding: 8px 30px; border: 1px solid #e0e0e0; font-weight: bold;">meaning</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #fdebd0;">200</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">OK</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #fdebd0;">201</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">Created</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #fdebd0;">400</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">Bad request</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #fdebd0;">401</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">Not logged in</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #fdebd0;">404</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">Not found</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #fdebd0;">500</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">Server error</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px; padding-right: 20%;">the browser checks the code first</div>
    </div>
</div>

<p>
    The diagram shows the API methods and status codes. A REST API uses URLs for things and HTTP methods for actions. GET reads, POST creates, PUT or PATCH updates, DELETE removes. Design clear URLs first: nouns for data, methods for actions. Query parameters, such as ?type=Urban, are used for filtering.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is an API?</strong> A set of addresses and rules that programs use to exchange data.</li>
    <li><strong>Which methods are used?</strong> GET reads, POST creates, PUT or PATCH updates, DELETE removes.</li>
    <li><strong>What are query parameters?</strong> Extras in the URL such as ?type=Urban, used for filtering.</li>
    <li><strong>What is REST?</strong> A style of API that uses URLs for things and HTTP methods for actions.</li>
    <li><strong>What format is used?</strong> Mostly JSON, and GeoJSON for features.</li>
    <li><strong>What is CORS?</strong> A browser rule that blocks calls to another domain unless the server allows it.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Design clear URLs first: nouns for data, methods for actions.</p>
</div>