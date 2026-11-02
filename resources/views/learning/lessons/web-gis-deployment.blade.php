{{-- resources/views/learning/lessons/10-23-web-gis-deployment.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Deployment puts your Web GIS on a server so real users can reach it safely.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the deployment steps</li>
    <li>Secure secrets and use HTTPS</li>
    <li>Monitor and optimize</li>
</ul>

<h2>Visual Guide: From Laptop to Live Site</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px; border: 1px solid #cce5e5; border-radius: 8px; background-color: #f7fbfb; padding: 15px;">
    <!-- Left side: Code block -->
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">terminal</span><br><br>
        <span style="color: #6a9955;"># upload the files, then restart</span><br>
        sudo systemctl restart nginx<br><br>
        <span style="color: #6a9955;"># check the site and its headers</span><br>
        curl -I https://example.com
    </div>

    <!-- Right side: Visual Boxes -->
    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px;">From laptop to live site</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Develop</strong><br><span style="color: #666;">test locally</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Upload</strong><br><span style="color: #666;">copy files to the server</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Configure</strong><br><span style="color: #666;">web server, HTTPS, CORS</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px; text-align: center;">
            <strong style="color: #005a70;">Monitor</strong><br><span style="color: #666;">logs, backups, updates</span>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">repeat for every release</div>
    </div>
</div>

<p>
    The diagram shows the steps from laptop to live site. You need a server or hosting, a domain name, a web server, the database, and HTTPS. Put passwords and keys in environment variables or config files outside the web folder. Keep it fast by caching tiles, compressing responses, using a CDN, and indexing the database. Monitor errors, load, disk space, and regular database backups.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What do I need?</strong> A server or hosting, a domain name, a web server, the database, and HTTPS.</li>
    <li><strong>Which web servers are common?</strong> Nginx and Apache.</li>
    <li><strong>How do I get HTTPS?</strong> A free certificate, for example from Let's Encrypt.</li>
    <li><strong>How do I keep secrets safe?</strong> Put passwords and keys in environment variables or config files outside the web folder.</li>
    <li><strong>How do I keep it fast?</strong> Cache tiles, compress responses, use a CDN, and index the database.</li>
    <li><strong>What should I monitor?</strong> Errors, load, disk space, and regular database backups.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Test the live site from another device before telling your users.</p>
</div>