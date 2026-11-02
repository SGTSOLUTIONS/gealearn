{{-- resources/views/learning/lessons/14-15-testing-and-debugging.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Testing finds problems before users do; debugging finds and fixes their cause.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand the test pyramid</li>
    <li>Apply the debug loop</li>
    <li>Use logs and query plans</li>
</ul>

<h2>Visual Guide: Test pyramid and debug loop</h2>

<div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">

    <div style="
        width: 60%;
        max-width: 900px;
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #eef4f0;
        padding: 20px 10px;
        border-radius: 6px;
        font-family: sans-serif;
        box-sizing: border-box;
    ">

        <div style="
            font-weight: bold;
            color: #005a70;
            margin-bottom: 25px;
            font-size: 14px;
        ">
            Test pyramid and debug loop
        </div>

        <svg
            viewBox="0 0 700 340"
            xmlns="http://www.w3.org/2000/svg"
            style="width: 100%; height: auto; display: block;"
            preserveAspectRatio="xMidYMid meet"
        >

            <!-- ================= LEFT SIDE: SMALL TEST PYRAMID ================= -->

            <!-- Reduce entire pyramid size -->
            <g transform="translate(60, 30) scale(0.7)">

                <!-- Top: User -->
                <polygon
                    points="130,30 190,130 70,130"
                    fill="#dcd0e8"
                    stroke="#b09cc7"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                />

                <text
                    x="130" y="110"
                    font-size="11"
                    fill="#333"
                    font-weight="bold"
                    text-anchor="middle"
                >User</text>


                <!-- Middle: Integration -->
                <polygon
                    points="70,130 190,130 250,210 10,210"
                    fill="#2980b9"
                    stroke="#1a5b85"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                />

                <text
                    x="130" y="165"
                    font-size="13"
                    fill="#fff"
                    font-weight="bold"
                    text-anchor="middle"
                >Integration</text>

                <text
                    x="130" y="180"
                    font-size="10"
                    fill="#fff"
                    text-anchor="middle"
                >parts together</text>


                <!-- Bottom: Unit Tests -->
                <polygon
                    points="10,210 250,210 330,320 -60,320"
                    fill="#005a70"
                    stroke="#003a4a"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                />

                <text
                    x="165" y="275"
                    font-size="15"
                    fill="#fff"
                    font-weight="bold"
                    text-anchor="middle"
                >Unit tests</text>

                <text
                    x="165" y="295"
                    font-size="11"
                    fill="#fff"
                    text-anchor="middle"
                >many · fast · cheap</text>

            </g>


            <!-- ================= RIGHT SIDE: DEBUG LOOP ================= -->

            <!-- 1 Reproduce -->
            <rect
                x="370" y="40"
                width="110" height="45"
                fill="#fff"
                stroke="#f07b24"
                stroke-width="2"
                rx="4"
            />

            <text
                x="425" y="67"
                font-size="13"
                fill="#f07b24"
                font-weight="bold"
                text-anchor="middle"
            >1 Reproduce</text>


            <!-- 2 Locate -->
            <rect
                x="510" y="40"
                width="110" height="45"
                fill="#fff"
                stroke="#f07b24"
                stroke-width="2"
                rx="4"
            />

            <text
                x="565" y="67"
                font-size="13"
                fill="#f07b24"
                font-weight="bold"
                text-anchor="middle"
            >2 Locate</text>


            <!-- 3 Fix -->
            <rect
                x="510" y="180"
                width="110" height="45"
                fill="#fff"
                stroke="#f07b24"
                stroke-width="2"
                rx="4"
            />

            <text
                x="565" y="207"
                font-size="13"
                fill="#f07b24"
                font-weight="bold"
                text-anchor="middle"
            >3 Fix</text>


            <!-- 4 Retest -->
            <rect
                x="370" y="180"
                width="110" height="45"
                fill="#fff"
                stroke="#f07b24"
                stroke-width="2"
                rx="4"
            />

            <text
                x="425" y="207"
                font-size="13"
                fill="#f07b24"
                font-weight="bold"
                text-anchor="middle"
            >4 Retest</text>


            <!-- ================= ARROWS ================= -->

            <g stroke="#f07b24" stroke-width="2">

                <!-- 1 to 2 -->
                <line x1="480" y1="62" x2="510" y2="62" />

                <polygon
                    points="510,62 500,57 500,67"
                    fill="#f07b24"
                />


                <!-- 2 to 3 -->
                <line x1="565" y1="85" x2="565" y2="180" />

                <polygon
                    points="565,180 560,170 570,170"
                    fill="#f07b24"
                />


                <!-- 3 to 4 -->
                <line x1="510" y1="202" x2="480" y2="202" />

                <polygon
                    points="480,202 490,197 490,207"
                    fill="#f07b24"
                />


                <!-- 4 to 1 -->
                <line x1="425" y1="180" x2="425" y2="85" />

                <polygon
                    points="425,85 420,95 430,95"
                    fill="#f07b24"
                />

            </g>


            <!-- ================= BUG ICON ================= -->

            <g transform="translate(480, 115)">

                <!-- Body -->
                <circle cx="0" cy="0" r="12" fill="#d9534f" />

                <!-- Legs -->
                <g fill="#d9534f">
                    <circle cx="-10" cy="-8" r="3" />
                    <circle cx="10" cy="-8" r="3" />
                    <circle cx="-10" cy="8" r="3" />
                    <circle cx="10" cy="8" r="3" />
                </g>

                <!-- Eyes -->
                <g fill="#fff">
                    <circle cx="-4" cy="-4" r="2" />
                    <circle cx="4" cy="-4" r="2" />
                </g>

                <!-- Pupils -->
                <g fill="#333">
                    <circle cx="-4" cy="-4" r="1" />
                    <circle cx="4" cy="-4" r="1" />
                </g>

                <!-- Antennae -->
                <g
                    stroke="#d9534f"
                    stroke-width="2"
                >
                    <line x1="-4" y1="-12" x2="-8" y2="-18" />
                    <line x1="4" y1="-12" x2="8" y2="-18" />
                </g>

            </g>


            <!-- Description -->
            <text
                x="345" y="95"
                font-size="11"
                fill="#666"
                font-style="italic"
            >few · slow</text>

        </svg>


        <!-- Bottom description -->
        <div style="
            text-align: center;
            font-size: 12px;
            color: #d9534f;
            margin-top: 15px;
        ">
            test small, then together
        </div>

    </div>

</div>


<p>
    The diagram shows the test pyramid and debug loop. Unit tests check small pieces such as an area calculation. Integration tests check that frontend, API and database work together. User acceptance tests have real users try real tasks. Test data should include normal, empty and bad input. The debug loop is reproduce, locate, fix, retest. Use logs, the browser console and the database query plan to find causes.
</p>


<h2>Key Points (Q&A)</h2>

<ul>
    <li><strong>What are unit tests?</strong> Check small pieces such as an area calculation.</li>

    <li><strong>What are integration tests?</strong> Check that frontend, API and database work together.</li>

    <li><strong>What are user acceptance tests?</strong> Real users try real tasks.</li>

    <li><strong>What test data is needed?</strong> Include normal, empty and bad input.</li>

    <li><strong>What is the debug loop?</strong> Reproduce, locate, fix, retest.</li>

    <li><strong>How do I find causes?</strong> Use logs, the browser console and the database query plan.</li>
</ul>


<div class="tip">
    <p style="margin: 0">
        <strong>Tip:</strong> Write a test for every bug you fix so it cannot return unnoticed.
    </p>
</div>