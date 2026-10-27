<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remote Sensing Introduction</title>
    <style>
        /* Page Setup */
        body {
            background-color: #ffffff;
            color: #222;
            line-height: 1.6;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }

        .lesson-container {
            max-width: 900px;
            width: 100%;
        }

        .content-text {
            margin-bottom: 25px;
            color: #111;
        }

        /* =========================================
           EXACT DIAGRAM STYLING
           ========================================= */
        .diagram-box {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            margin: 30px 0;
            box-sizing: border-box;
            position: relative;
            width: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        /* Top Sky Area */
        .diagram-sky {
            position: relative;
            width: 100%;
            height: 280px;
            padding: 20px 30px;
            box-sizing: border-box;
        }

        /* SVG Arrows */
        .diagram-svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        /* Sun */
        .sun-box {
            position: absolute;
            top: 40px;
            left: 95px;
            text-align: center;
            z-index: 2;
        }
        .sun-graphic {
            width: 55px;
            height: 55px;
            background: #e67e22;
            border-radius: 50%;
            box-shadow: 0 0 20px #f39c12;
            margin: 0 auto;
        }
        .sun-label {
            color: #d35400;
            font-weight: bold;
            margin-top: 5px;
        }

        /* Satellite */
        .sat-box {
            position: absolute;
            top: 30px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            z-index: 2;
        }
        .sat-label {
            color: #64748b;
            margin-bottom: 5px;
            white-space: nowrap;
        }
        .sat-graphic {
            width: 75px;
            height: 18px;
            background: #0f172a;
            border-radius: 3px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 3px;
        }
        .sat-panel { width: 15px; height: 8px; background: #0d9488; }
        .sat-body { width: 8px; height: 8px; background: #1e293b; }

        /* Info Box */
        .info-box {
            position: absolute;
            top: -10px;
            right: -55px;
            background: transparent;
            padding: 15px;
            border-radius: 6px;
            width: 210px;
            z-index: 2;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .info-passive { color: #0f766e; font-weight: bold; margin-bottom: 4px; }
        .info-active { color: #d97706; font-weight: bold; margin-bottom: 4px; margin-top: 10px; }

        /* Arrow Labels */
        .label-sunlight {
            position: absolute;
            top: 150px;
            left: 110px;
            color: #d35400;
            font-weight: bold;
            z-index: 2;
        }
        .label-reflected {
            position: absolute;
            top: 190px;
            left: 42%;
            color: #1e3a5f;
            font-weight: bold;
            z-index: 2;
            background: #fff; /* Blocks line crossing */
            padding: 0 5px;
        }
        .label-data {
            position: absolute;
            top: 120px;
            right: 18%; /* Positioned exactly like the first image */
            color: #1bba85;
            font-weight: bold;
            text-align: left;
            line-height: 1.2;
            z-index: 2;
        }
        .label-data span {
            font-weight: normal;
        }

        /* Ground Layer */
        .diagram-ground {
            background: #dbeccb;
            border-top: 1px solid #cbd5e1;
            height: 90px;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            padding: 0 50px 20px 50px;
            box-sizing: border-box;
            z-index: 2;
        }
        .ground-features {
            display: flex;
            align-items: flex-end;
            gap: 30px;
            margin-left: 30px;
        }
        .f-blue { width: 70px; height: 30px; background: #d4ebf2; }
        .f-gray { width: 50px; height: 40px; background: #94a3b8; }
        .f-green { width: 80px; height: 45px; background: #1e5c32; }

        .ground-station {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 50px;
            margin-bottom: 50px;
        }
        .gs-triangle {
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 30px solid #1e3a5f;
        }
        .gs-label {
            font-weight: bold;
            color: #111;
            margin-top: 4px;
        }

        /* Q&A and Tip */
        .qa-section h3 {
            font-weight: 500;
            margin-top: 40px;
            margin-bottom: 15px;
            color: #111;
        }
        .qa-list {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }
        .qa-list li {
            margin-bottom: 20px;
            color: #222;
            line-height: 1.5;
        }
        .qa-list .question {
            font-weight: 600;
            color: #000;
            display: block;
            margin-bottom: 4px;
        }
        .qa-list .answer {
            font-weight: 400;
            display: block;
        }
        .tip-box {
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px 24px;
            margin-top: 40px;
            color: #222;
            border-left: 6px solid #6b7280;
        }
    </style>
</head>
<body>

<div class="lesson-container">

    <div class="content-text">
        Remote sensing collects information about the Earth's surface from a distance, using sensors on satellites, aircraft or drones, without touching the ground.
    </div>

    
    <div class="diagram-box">
        <div class="diagram-sky">
            <svg class="diagram-svg" viewBox="0 0 850 280" preserveAspectRatio="none">
                <defs>
                    <marker id="arrow-orange" markerWidth="8" markerHeight="8" refX="7" refY="3" orient="auto">
                        <path d="M0,0 L0,6 L9,3 z" fill="#e67e22" />
                    </marker>
                    <marker id="arrow-blue" markerWidth="8" markerHeight="8" refX="7" refY="3" orient="auto">
                        <path d="M0,0 L0,6 L9,3 z" fill="#1e3a5f" />
                    </marker>
                    <marker id="arrow-green" markerWidth="8" markerHeight="8" refX="7" refY="3" orient="auto">
                        <path d="M0,0 L0,6 L9,3 z" fill="#1bba85" />
                    </marker>
                </defs>
                <!-- 1 Sunlight -->
                <line x1="150" y1="110" x2="270" y2="240" stroke="#e67e22" stroke-width="2" marker-end="url(#arrow-orange)" />
                <!-- 2 Reflected -->
                <line x1="290" y1="240" x2="410" y2="80" stroke="#1e3a5f" stroke-width="2" marker-end="url(#arrow-blue)" />
                <!-- 3 Data sent -->
                <line x1="460" y1="80" x2="680" y2="240" stroke="#1bba85" stroke-width="2" marker-end="url(#arrow-green)" />
            </svg>

            <div class="sun-box">
                <div class="sun-graphic"></div>
                <div class="sun-label">Sun</div>
            </div>

            <div class="sat-box">
                <div class="sat-label">Sensor on satellite</div>
                <div class="sat-graphic">
                    <div class="sat-panel"></div>
                    <div class="sat-body"></div>
                    <div class="sat-panel"></div>
                </div>
            </div>

            <div class="info-box">
                <div class="info-passive">Passive sensor:</div>
                <div>records sunlight (optical)</div>
                <div class="info-active">Active sensor:</div>
                <div>sends own signal (radar, LiDAR)</div>
            </div>

            <div class="label-sunlight">1 Sunlight</div>
            <div class="label-reflected">2 Reflected energy</div>
            <div class="label-data">
                3 Data sent<br><span>to ground station</span>
            </div>
        </div>

        <div class="diagram-ground">
            <div class="ground-features">
                <div class="f-blue"></div>
                <div class="f-gray"></div>
                <div class="f-green"></div>
            </div>
            <div class="ground-station">
                <div class="gs-triangle"></div>
                <div class="gs-label">Ground station</div>
            </div>
        </div>
    </div>

    <!-- QUICK Q&A -->
    <div class="qa-section">
        <h3>Quick Q&A</h3>
        <ul class="qa-list">
            <li>
                <span class="question">Q. What is remote sensing?</span>
                <span class="answer">A. Gathering information about the Earth from a distance with sensors that record reflected or emitted energy.</span>
            </li>
            <li>
                <span class="question">Q. Passive or active sensors?</span>
                <span class="answer">A. Passive sensors record natural energy such as sunlight (optical imagery). Active sensors send their own signal (radar, LiDAR).</span>
            </li>
            <li>
                <span class="question">Q. What are the main platforms?</span>
                <span class="answer">A. Satellites, aircraft and drones (UAVs). Ground instruments are used for field checks.</span>
            </li>
            <li>
                <span class="question">Q. What does a sensor record?</span>
                <span class="answer">A. Energy reflected or emitted by surfaces, stored as numbers in the pixels of an image.</span>
            </li>
            <li>
                <span class="question">Q. Why is it useful?</span>
                <span class="answer">A. It covers large areas, repeats over time and reaches places that are hard to visit.</span>
            </li>
            <li>
                <span class="question">Q. How does it connect to GIS?</span>
                <span class="answer">A. Images are rasters, so they can be classified, measured and combined with vector layers.</span>
            </li>
        </ul>
    </div>

    <!-- QUICK TIP -->
    <div class="tip-box">
        <strong>Quick tip:</strong> Always ask what energy the sensor measures and at what resolution; that decides what you can map.
    </div>

</div>

</body>
</html>