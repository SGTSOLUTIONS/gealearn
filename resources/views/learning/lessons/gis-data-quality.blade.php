{{-- resources/views/learning/lessons/4-16-data-quality.blade.php --}}
{{-- CONTENT ONLY --}}

<p>
    Data quality describes how well data fits its purpose. Good decisions need data you can trust.
    Quality is not just about accuracy; it also covers completeness, consistency, and currency.
</p>

<h2>Learning goals</h2>
<ul>
    <li>Understand accuracy vs. precision</li>
    <li>Identify the six dimensions of data quality</li>
    <li>Record quality information in metadata</li>
</ul>

<h2>Visual Guide: Accuracy vs. Precision</h2>
<div style="display: flex; justify-content: space-between; margin: 20px 0; text-align: center; font-size: 12px;">
    <div style="width: 24%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <div style="height: 60px; position: relative; background: #f9f9f9; border-radius: 50%; width: 60px; margin: 0 auto; border: 1px solid #ccc; display: flex; align-items: center; justify-content: center;">
            <div style="width: 4px; height: 4px; background: #d9534f; border-radius: 50%; position: absolute; top: 28px; left: 28px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 24px; left: 24px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 30px; left: 26px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 26px; left: 32px;"></div>
        </div>
        <div style="font-weight: bold; margin-top: 5px; color: #04AA6D;">Accurate + precise</div>
    </div>
    <div style="width: 24%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <div style="height: 60px; position: relative; background: #f9f9f9; border-radius: 50%; width: 60px; margin: 0 auto; border: 1px solid #ccc; display: flex; align-items: center; justify-content: center;">
            <div style="width: 4px; height: 4px; background: #d9534f; border-radius: 50%; position: absolute; top: 28px; left: 28px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 10px; left: 10px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 12px; left: 14px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 8px; left: 16px;"></div>
        </div>
        <div style="font-weight: bold; margin-top: 5px; color: #d9534f;">Precise, not accurate</div>
    </div>
    <div style="width: 24%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <div style="height: 60px; position: relative; background: #f9f9f9; border-radius: 50%; width: 60px; margin: 0 auto; border: 1px solid #ccc; display: flex; align-items: center; justify-content: center;">
            <div style="width: 4px; height: 4px; background: #d9534f; border-radius: 50%; position: absolute; top: 28px; left: 28px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 14px; left: 34px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 40px; left: 14px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 36px; left: 42px;"></div>
        </div>
        <div style="font-weight: bold; margin-top: 5px; color: #FF9800;">Accurate, not precise</div>
    </div>
    <div style="width: 24%; border: 1px solid #ccc; border-radius: 6px; padding: 10px; background: #fff;">
        <div style="height: 60px; position: relative; background: #f9f9f9; border-radius: 50%; width: 60px; margin: 0 auto; border: 1px solid #ccc; display: flex; align-items: center; justify-content: center;">
            <div style="width: 4px; height: 4px; background: #d9534f; border-radius: 50%; position: absolute; top: 28px; left: 28px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 8px; left: 8px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 48px; left: 12px;"></div>
            <div style="width: 6px; height: 6px; background: #FF9800; border-radius: 50%; position: absolute; top: 42px; left: 48px;"></div>
        </div>
        <div style="font-weight: bold; margin-top: 5px; color: #999;">Neither</div>
    </div>
</div>

<div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 8px; margin-bottom: 20px; font-size: 11px;">
    <div style="width: 32%; border: 2px solid #282A35; border-radius: 6px; padding: 8px; background: #fff;">
        <strong>Positional accuracy</strong><br>In the right place?
    </div>
    <div style="width: 32%; border: 2px solid #04AA6D; border-radius: 6px; padding: 8px; background: #fff;">
        <strong>Attribute accuracy</strong><br>Are the values correct?
    </div>
    <div style="width: 32%; border: 2px solid #2196F3; border-radius: 6px; padding: 8px; background: #fff;">
        <strong>Completeness</strong><br>Is anything missing?
    </div>
    <div style="width: 32%; border: 2px solid #FF9800; border-radius: 6px; padding: 8px; background: #fff;">
        <strong>Logical consistency</strong><br>Do rules and formats agree?
    </div>
    <div style="width: 32%; border: 2px solid #9C27B0; border-radius: 6px; padding: 8px; background: #fff;">
        <strong>Currency</strong><br>Is it up to date?
    </div>
    <div style="width: 32%; border: 2px solid #999; border-radius: 6px; padding: 8px; background: #fff;">
        <strong>Lineage</strong><br>Where did it come from?
    </div>
</div>

<p>
    The diagram illustrates the difference between accuracy (closeness to the true value) and precision (how close repeated values are to each other). It also lists the six dimensions of data quality that every GIS professional should consider.
</p>

<h2>Key Points</h2>
<ul>
    <li><strong>Accuracy</strong> – closeness to the true value; <strong>precision</strong> – how close repeated values are to each other.</li>
    <li><strong>Positional accuracy</strong> is where; <strong>attribute accuracy</strong> is what.</li>
    <li><strong>Completeness</strong> – nothing missing; <strong>consistency</strong> – no rule is broken.</li>
    <li><strong>Currency</strong> – how recent; <strong>lineage</strong> – source and history of the data.</li>
    <li>Record quality in metadata (<strong>Layer Properties &gt; Metadata</strong>) for future users.</li>
</ul>

<div class="tip">
    <p style="margin:0"><strong>Tip:</strong> Before using any dataset ask: who made it, when, and at what scale?</p>
</div>