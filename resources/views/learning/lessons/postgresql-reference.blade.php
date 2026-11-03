{{-- resources/views/learning/lessons/15-10-postgresql.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    PostgreSQL is the open-source database that hosts PostGIS. This page lists the <code>psql</code> commands and backup tools you will use most.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Navigate databases and tables in <code>psql</code></li>
    <li>Manage users and permissions</li>
    <li>Back up and restore a database</li>
</ul>

<h2>Visual Guide: Common psql Commands</h2>
<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; margin: 20px 0; text-align: center; font-size: 11px;">
    <div style="width: 48%; border: 2px solid #282A35; border-radius: 6px; overflow: hidden;">
        <div style="background: #282A35; color: #fff; padding: 6px; font-weight: bold;">Explore</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            psql -U postgres -d gis<br><br>
            \l<br>
            \c dbname<br>
            \dt<br>
            \d tablename
        </div>
    </div>
    <div style="width: 48%; border: 2px solid #04AA6D; border-radius: 6px; overflow: hidden;">
        <div style="background: #04AA6D; color: #fff; padding: 6px; font-weight: bold;">Maintain</div>
        <div style="padding: 8px; background: #fff; text-align: left; font-family: Consolas, monospace; font-size: 10px;">
            \du<br>
            \i script.sql<br><br>
            pg_dump -Fc gis > gis.dump<br>
            pg_restore -d gis gis.dump
        </div>
    </div>
</div>
<div style="text-align: center; background: #f1f1f1; padding: 8px; border-radius: 4px; margin-bottom: 20px; font-size: 12px;">
    <strong>Port:</strong> default 5432 · <strong>GUI:</strong> pgAdmin<br>
    <strong>Rule of thumb:</strong> schedule <code>pg_dump</code> backups automatically and test a restore at least once.
</div>

<p>
    The diagram splits the commands into two groups: exploring the database, and maintaining users and backups.
</p>

<h2>Key Points (Q&A)</h2>
<ul>
    <li><strong>What is the default port?</strong> 5432; pgAdmin gives a graphical way to manage databases.</li>
    <li><strong>How should I set up users?</strong> Create separate roles for admins, the app and read-only users.</li>
    <li><strong>How do I control access?</strong> Use <code>GRANT</code> and <code>REVOKE</code> to control who can read or write tables.</li>
    <li><strong>How do I keep performance good?</strong> Run <code>VACUUM ANALYZE</code> regularly so the planner has good statistics.</li>
    <li><strong>How do I inspect a query?</strong> Use <code>EXPLAIN ANALYZE</code> before a query to see how it runs.</li>
    <li><strong>Where is configuration stored?</strong> In <code>postgresql.conf</code> and <code>pg_hba.conf</code> (who may connect).</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Schedule <code>pg_dump</code> backups automatically and test a restore at least once.</p>
</div>