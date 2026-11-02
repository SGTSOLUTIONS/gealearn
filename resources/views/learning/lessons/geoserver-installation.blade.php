{{-- resources/views/learning/lessons/11-2-install.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    GeoServer needs a Java runtime and can be installed from a zip, an installer, a WAR file or a Docker image.
    Choosing the right installation method depends on your environment and needs.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the installation prerequisites</li>
    <li>Choose an installation method</li>
    <li>Start and stop GeoServer</li>
</ul>

<h2>Visual Guide: Installation Options</h2>
<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 20%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">1 Install Java</div>
        <div style="padding: 8px; background: #fff;">supported version</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">2 Download</div>
        <div style="padding: 8px; background: #fff;">zip, WAR or Docker</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 2px solid #2196F3; border-radius: 6px; overflow: hidden;">
        <div style="background: #2196F3; color: #fff; padding: 6px; font-weight: bold;">3 Start</div>
        <div style="padding: 8px; background: #fff;">startup script</div>
    </div>
    <div style="font-size: 20px; color: #FF9800;">&rarr;</div>
    <div style="width: 20%; border: 2px solid #FF9800; border-radius: 6px; overflow: hidden;">
        <div style="background: #FF9800; color: #fff; padding: 6px; font-weight: bold;">4 Open</div>
        <div style="padding: 8px; background: #fff;">/geoserver in browser</div>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin: 20px 0; font-size: 11px;">
    <div style="width: 55%; border-radius: 6px; overflow: hidden; background: #282A35; color: #fff;">
        <div style="padding: 6px 12px; background: #1e2b3c; font-size: 11px;">install.sh</div>
        <div style="padding: 10px; font-family: Consolas, monospace; text-align: left;">
            # Option 1: Docker<br>
            docker run -d -p 8080:8080 \<br>
            &nbsp;&nbsp;docker.osgeo.org/geoserver:latest<br><br>
            # Option 2: Zip<br>
            cd geoserver/bin<br>
            ./startup.sh &nbsp; # startup.bat on Windows
        </div>
    </div>
    <div style="width: 40%; border: 2px solid #04AA6D; border-radius: 6px; padding: 10px; background: #fff;">
        <strong style="color: #04AA6D; font-size: 12px;">Ways to install</strong>
        <ul style="font-size: 11px; margin: 5px 0 0 15px; padding: 0; text-align: left;">
            <li>Windows installer</li>
            <li>Platform-independent zip</li>
            <li>WAR file inside Tomcat</li>
            <li>Docker image</li>
        </ul>
    </div>
</div>

<p>
    The diagram shows the four-step installation process and the different installation methods available.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What do I need before installing?</strong> A supported Java runtime. Check the release notes for the exact version.</li>
    <li><strong>Which install options exist?</strong> Windows installer, zip, WAR file for Tomcat or a Docker image.</li>
    <li><strong>Which is quickest to try?</strong> Docker, or the zip started with startup.sh / startup.bat.</li>
    <li><strong>How do I start and stop it?</strong> <code>bin/startup.sh</code> and <code>bin/shutdown.sh</code> (.bat files on Windows).</li>
    <li><strong>What is the data directory?</strong> The folder holding configuration, styles and file-based data.</li>
    <li><strong>How do I change the password?</strong> Security &gt; Users, Groups, Roles. Also change the master password.</li>
    <li><strong>What if port 8080 is in use?</strong> Change the Jetty port, or map another host port in Docker, e.g. <code>-p 8081:8080</code>.</li>
    <li><strong>Best choice for production?</strong> WAR on Tomcat or Docker, behind a reverse proxy with HTTPS.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Keep the data directory outside the install folder so upgrades are safe.</p>
</div>