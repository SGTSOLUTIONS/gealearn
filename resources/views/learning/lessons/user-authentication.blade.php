{{-- resources/views/learning/lessons/10-19-user-authentication.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Authentication proves who the user is, usually with a username and password.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand login steps</li>
    <li>Store passwords safely</li>
    <li>Use sessions or tokens</li>
</ul>

<h2>Visual Guide: Login Step by Step</h2>
<div style="display: flex; justify-content: space-between; align-items: stretch; margin: 20px 0; font-size: 11px;">
    <!-- Left side: Code block -->
    <div style="width: 48%; background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px; font-family: monospace; font-size: 11px; line-height: 1.8; text-align: left; overflow-x: auto;">
        <span style="color: #4fc1e9;">login.php</span><br><br>
        <span style="color: #9cdcfe;">$ok</span> = <span style="color: #dcdcaa;">password_verify</span>(<span style="color: #9cdcfe;">$pass</span>, <span style="color: #9cdcfe;">$hash</span>);<br><br>
        <span style="color: #569cd6;">if</span> (<span style="color: #9cdcfe;">$ok</span>) {<br>
        &nbsp;&nbsp;<span style="color: #dcdcaa;">session_start</span>();<br>
        &nbsp;&nbsp;<span style="color: #9cdcfe;">$_SESSION</span>[<span style="color: #ce9178;">'user'</span>] = <span style="color: #9cdcfe;">$id</span>;<br>
        } <span style="color: #569cd6;">else</span> {<br>
        &nbsp;&nbsp;<span style="color: #dcdcaa;">http_response_code</span>(<span style="color: #b5cea8;">401</span>);<br>
        }
    </div>

    <!-- Right side: Visual Boxes -->
    <div style="width: 48%; display: flex; flex-direction: column; justify-content: center; align-items: center; background: #f4f7f6; padding: 10px; border-radius: 6px;">
        <div style="text-align: center; font-weight: bold; margin-bottom: 8px; color: #005a70; font-size: 13px;">Login step by step</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Login form</strong><br><span style="color: #666;">username and password</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Server check</strong><br><span style="color: #666;">compare with the stored hash</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #005a70; padding: 10px; margin-bottom: 4px; text-align: center;">
            <strong style="color: #005a70;">Session or token</strong><br><span style="color: #666;">issued if correct</span>
        </div>
        <div style="color: #f07b24; font-size: 16px; line-height: 1;">&darr;</div>
        <div style="width: 90%; background: #fff; border: 1px solid #ccc; border-left: 4px solid #f07b24; padding: 10px; text-align: center;">
            <strong style="color: #005a70;">Later requests</strong><br><span style="color: #666;">carry the session</span>
        </div>
        <div style="text-align: center; font-size: 11px; color: #d9534f; margin-top: 10px;">over HTTPS only</div>
    </div>
</div>

<p>
    The diagram shows the login steps. Always store passwords as salted hashes, e.g. password_hash() in PHP; never as plain text. Use HTTPS to encrypt passwords and sessions on the network. Never build your own encryption; use the framework's tested functions. Rate limits, strong password rules, and optional two-factor login also help.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is authentication?</strong> Checking that a user is who they claim to be.</li>
    <li><strong>How should passwords be stored?</strong> Only as salted hashes, e.g. password_hash() in PHP; never as plain text.</li>
    <li><strong>What is a session?</strong> Server-side data linked to the user by a cookie.</li>
    <li><strong>What is a token?</strong> A signed string, such as a JWT, sent with each API request.</li>
    <li><strong>Why use HTTPS?</strong> It encrypts passwords and sessions on the network.</li>
    <li><strong>What else helps?</strong> Rate limits, strong password rules, and optional two-factor login.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Never build your own encryption; use the framework's tested functions.</p>
</div>