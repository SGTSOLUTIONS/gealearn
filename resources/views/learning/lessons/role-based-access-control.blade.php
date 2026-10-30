{{-- resources/views/learning/lessons/10-20-role-based-access-control.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    RBAC gives each user a role, and each role a set of allowed actions.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand roles and permissions</li>
    <li>Enforce rules on the server</li>
    <li>Understand least privilege</li>
</ul>

<h2>Visual Guide: Example Roles</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px; padding: 15px;">
    <!-- Left side: Code block -->
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">rbac.php</span><br><br>
        <span style="color: #9cdcfe;">$role</span> = <span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'role'</span>];<br><br>
        <span style="color: #569cd6;">if</span> (!<span style="color: #dcdcaa;">in_array</span>(<span style="color: #9cdcfe;">$role</span>, [<span style="color: #ce9178;">'editor'</span>, <span style="color: #ce9178;">'admin'</span>])) {<br>
        &nbsp;&nbsp;<span style="color: #dcdcaa;">http_response_code</span>(<span style="color: #b5cea8;">403</span>);<br>
        &nbsp;&nbsp;<span style="color: #dcdcaa;">exit</span>(<span style="color: #ce9178;">'Not allowed'</span>);<br>
        }
    </div>

    <!-- Right side: The Table -->
    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 9px; color: #005a70; font-size: 13px; padding-right: 45%;">Example roles</div>
        
        <!-- Centered wrapper for the table to keep it compact -->
        <div style="display: flex; justify-content: center; width: 100%;">
            <table style="border-collapse: collapse; text-align: center; font-family: sans-serif; font-size: 12px;">
                <thead>
                    <tr>
                        <th style="background: #f9f9f9; color: #005a70; padding: 8px 20px; border: 1px solid #e0e0e0; font-weight: bold; text-align: left;">role</th>
                        <th style="background: #f9f9f9; color: #005a70; padding: 8px 20px; border: 1px solid #e0e0e0; font-weight: bold;">view</th>
                        <th style="background: #f9f9f9; color: #005a70; padding: 8px 20px; border: 1px solid #e0e0e0; font-weight: bold;">edit</th>
                        <th style="background: #f9f9f9; color: #005a70; padding: 8px 20px; border: 1px solid #e0e0e0; font-weight: bold;">users</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff; text-align: left;">viewer</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">yes</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">no</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">no</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff; text-align: left;">editor</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">yes</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">yes</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">no</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff; text-align: left;">admin</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">yes</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">yes</td>
                        <td style="padding: 8px; border: 1px solid #e0e0e0; background: #ffffff;">yes</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 1px; padding-right: 35%;">least privilege: give only what is needed</div>
    </div>
</div>

<p>
    The diagram shows example roles. Access control is based on roles rather than on single users. 401 means not logged in; 403 means logged in but not allowed. Hiding a button is not security: always enforce the rule on the server. Limit data by role by adding a WHERE clause or using database roles and row-level security.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is RBAC?</strong> Access control based on roles rather than on single users.</li>
    <li><strong>What are typical roles?</strong> Viewer, editor, and admin.</li>
    <li><strong>Where do I check permissions?</strong> On the server for every request, and also in the interface to hide buttons.</li>
    <li><strong>What do 401 and 403 mean?</strong> 401: not logged in. 403: logged in but not allowed.</li>
    <li><strong>How do I limit data by role?</strong> Add a WHERE clause or use database roles and row-level security.</li>
    <li><strong>What is least privilege?</strong> Give each user only the access they need.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Hiding a button is not security: always enforce the rule on the server.</p>
</div>