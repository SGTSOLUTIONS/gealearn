{{-- resources/views/learning/lessons/11-14-security.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Security controls who can see, read and edit layers and who can use each service or the admin pages.
    It is the most overlooked aspect of map server administration.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand users, groups, and roles</li>
    <li>Configure data and service security</li>
    <li>Secure the admin account</li>
</ul>

<h2>Visual Guide: Security Layers</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 22%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Request</div>
        <div style="padding: 8px; background: #fff;">from a client</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Authenticate</div>
        <div style="padding: 8px; background: #fff;">who are you?</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">Authorize</div>
        <div style="padding: 8px; background: #fff;">rules and roles</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 22%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">Data</div>
        <div style="padding: 8px; background: #fff;">allowed layers</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">layers.properties</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            # workspace.layer.mode = roles (r=read, w=write)<br>
            city.wards.r=ROLE_VIEWER,ROLE_EDITOR<br>
            city.wards.w=ROLE_EDITOR<br>
            city.*.r=ROLE_STAFF<br>
            *.*.r=*
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Security layers</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Users, groups and roles</li>
            <li>Data security (per layer)</li>
            <li>Service security (WMS, WFS)</li>
            <li>REST and admin security</li>
            <li>HTTPS via reverse proxy</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the four-step security flow and the different security layers you need to configure.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What are users, groups and roles?</strong> Users belong to groups; roles grant permissions.</li>
    <li><strong>What are data security rules?</strong> Rules saying which roles can read or write a layer.</li>
    <li><strong>What is service security?</strong> Rules limiting who can call WMS, WFS, WCS or REST.</li>
    <li><strong>Which authentication methods?</strong> Basic, Digest and key-based; LDAP or OAuth2 via extensions.</li>
    <li><strong>How do I secure traffic?</strong> Serve it over HTTPS, usually through a reverse proxy.</li>
    <li><strong>What about the admin account?</strong> Change the default and master passwords at once.</li>
    <li><strong>Can I hide layers?</strong> Yes. Use data rules and catalog mode so others do not see them.</li>
    <li><strong>How do I secure the REST API?</strong> Restrict <code>/rest</code> to admin roles or trusted addresses.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Default passwords on a public server are the most common GeoServer weakness.</p>
</div>