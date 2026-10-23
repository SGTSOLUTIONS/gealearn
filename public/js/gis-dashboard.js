/**
 * GeoLearn GIS — shared dashboard interactions (jQuery)
 * Loaded once in layouts/dashboard.blade.php.
 * Map code only runs on pages that contain #gisMap.
 */
$(function () {

    /* ============================================================
     * 1. SIDEBAR (mobile drawer)
     * ============================================================ */
    const $sidebar  = $('#sidebar');
    const $backdrop = $('#sidebarBackdrop');
    const $menu     = $('#menuButton');

    function toggleSidebar(open) {
        $sidebar.toggleClass('open', open);
        $backdrop.toggleClass('open', open);
        $menu.attr('aria-expanded', open ? 'true' : 'false');
    }

    $menu.on('click', function () {
        toggleSidebar(!$sidebar.hasClass('open'));
    });

    $backdrop.on('click', function () {
        toggleSidebar(false);
    });

    $sidebar.find('a').on('click', function () {
        toggleSidebar(false);
    });


    /* ============================================================
     * 2. TOAST HELPER
     * ============================================================ */
    function toast(msg) {
        const el = document.getElementById('dashboardToast');
        $('#toastMessage').text(msg);
        if (el && window.bootstrap) {
            bootstrap.Toast.getOrCreateInstance(el).show();
        }
    }


    /* ============================================================
     * 3. NON-MAP TOOLS  (bound before the map guard so they
     *    work on every page, not just map pages)
     * ============================================================ */
    $('#analysisTool').on('click', function () {
        toast('Spatial analysis tools will be available when the analysis module is connected.');
    });

    $('#projectTool').on('click', function () {
        toast('Project creation will be available when the projects module is connected.');
    });


    /* ============================================================
     * 4. KEYBOARD SHORTCUT — Ctrl/Cmd + K
     * ============================================================ */
    $(document).on('keydown', function (e) {
        if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k') {
            e.preventDefault();
            $('.top-search input').trigger('focus');
        }
    });


    /* ============================================================
     * 5. OPENLAYERS MAP  — only on pages with #gisMap
     * ============================================================ */
    const $mapEl = $('#gisMap');
    if (!$mapEl.length || typeof ol === 'undefined') return;

    // ---- Base layers ----
    const osm = new ol.layer.Tile({
        source: new ol.source.OSM(),
        visible: true
    });

    const satellite = new ol.layer.Tile({
        source: new ol.source.XYZ({
            url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
            attributions: 'Tiles © Esri and contributors',
            maxZoom: 19
        }),
        visible: false
    });

    // ---- Graticule ----
    const graticule = new ol.layer.Graticule({
        strokeStyle: new ol.style.Stroke({ color: 'rgba(30,90,150,.6)', width: 1 }),
        showLabels: true,
        wrapX: true
    });
    graticule.setMap(null);

    // ---- Uploaded GeoJSON layer ----
    const uploadedSource = new ol.source.Vector();
    const uploadedLayer  = new ol.layer.Vector({
        source: uploadedSource,
        style: new ol.style.Style({
            stroke: new ol.style.Stroke({ color: '#00d47b', width: 3 }),
            fill:   new ol.style.Fill({ color: 'rgba(0,212,123,.18)' }),
            image:  new ol.style.Circle({
                radius: 6,
                fill:   new ol.style.Fill({ color: '#00d47b' }),
                stroke: new ol.style.Stroke({ color: '#fff', width: 2 })
            })
        })
    });

    // ---- Map ----
    const map = new ol.Map({
        target: $mapEl[0],              // jQuery → DOM node
        layers: [osm, satellite, uploadedLayer],
        view: new ol.View({
            center: ol.proj.fromLonLat([20, 16]),
            zoom: 1.7,
            minZoom: 1,
            maxZoom: 19
        })
    });

    // ---- Basemap radios ----
    $('input[name="basemap"]').on('change', function () {
        const value = $(this).val();
        osm.setVisible(value === 'osm');
        satellite.setVisible(value === 'satellite');
    });

    // ---- Graticule toggle ----
    $('#gridToggle').on('change', function () {
        graticule.setMap(this.checked ? map : null);
    });

    // ---- Coordinate readout ----
    map.on('pointermove', function (e) {
        const c = ol.proj.toLonLat(e.coordinate);
        $('#mapCoordinate').text(
            'Lon: ' + c[0].toFixed(4) + ' · Lat: ' + c[1].toFixed(4)
        );
    });

    // ---- Fullscreen ----
    $('#fullMapButton').on('click', function () {
        const el = document.querySelector('.map-wrap');
        if (!document.fullscreenElement) {
            el.requestFullscreen?.();
        } else {
            document.exitFullscreen?.();
        }
    });

    $(document).on('fullscreenchange', function () {
        setTimeout(function () { map.updateSize(); }, 150);
    });

    // ---- GeoJSON upload ----
    $('#uploadTool').on('click', function () {
        $('#geojsonFile').trigger('click');
    });

    $('#geojsonFile').on('change', async function (e) {
        const file = e.target.files?.[0];
        if (!file) return;

        try {
            if (file.size > 10 * 1024 * 1024) {
                throw new Error('File exceeds 10 MB');
            }

            const text = await file.text();
            const data = JSON.parse(text);

            const features = new ol.format.GeoJSON().readFeatures(data, {
                featureProjection: 'EPSG:3857'
            });

            if (!features.length) {
                throw new Error('No GeoJSON features found');
            }

            uploadedSource.clear();
            uploadedSource.addFeatures(features);

            map.getView().fit(uploadedSource.getExtent(), {
                padding: [35, 35, 35, 35],
                maxZoom: 15,
                duration: 400
            });

            toast('Loaded ' + features.length + ' GeoJSON feature(s) on the map.');

        } catch (err) {
            toast('Could not load GeoJSON: ' + err.message);
        }

        this.value = '';
    });

});
