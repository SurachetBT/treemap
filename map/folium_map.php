<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
        <script>
            L_NO_TOUCH = false;
            L_DISABLE_3D = false;
        </script>
    
    <style>html, body {width: 100%;height: 100%;margin: 0;padding: 0;}</style>
    <style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/python-visualization/folium/folium/templates/leaflet.awesome.rotate.min.css"/>
    
            <meta name="viewport" content="width=device-width,
                initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <style>
                #map_14e892c1fe0f88ae7c62c7af7c716b67 {
                    position: relative;
                    width: 100.0%;
                    height: 100.0%;
                    left: 0.0%;
                    top: 0.0%;
                }
                .leaflet-container { font-size: 1rem; }
            </style>
        
</head>
<body>
    
    
            <div class="folium-map" id="map_14e892c1fe0f88ae7c62c7af7c716b67" ></div>
        
</body>
<script>
    
    
            var map_14e892c1fe0f88ae7c62c7af7c716b67 = L.map(
                "map_14e892c1fe0f88ae7c62c7af7c716b67",
                {
                    center: [7.007148548620727, 100.49537658960665],
                    crs: L.CRS.EPSG3857,
                    ...{
  "zoom": 20,
  "zoomControl": true,
  "preferCanvas": false,
}

                }
            );

            

        
    
            var tile_layer_87e32a7e28082473f7433dd2a8ffe164 = L.tileLayer(
                "https://tile.openstreetmap.org/{z}/{x}/{y}.png",
                {
  "minZoom": 0,
  "maxZoom": 19,
  "maxNativeZoom": 19,
  "noWrap": false,
  "attribution": "\u0026copy; \u003ca href=\"https://www.openstreetmap.org/copyright\"\u003eOpenStreetMap\u003c/a\u003e contributors",
  "subdomains": "abc",
  "detectRetina": false,
  "tms": false,
  "opacity": 1,
}

            );
        
    
            tile_layer_87e32a7e28082473f7433dd2a8ffe164.addTo(map_14e892c1fe0f88ae7c62c7af7c716b67);
        
    
            var marker_70f95e25e1312d0e4d4e8fd23bd9ab31 = L.marker(
                [7.007463, 100.494751],
                {
}
            ).addTo(map_14e892c1fe0f88ae7c62c7af7c716b67);
        
    
            var icon_e3737a8e6ab8daf6c4e57abf346082d1 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_70f95e25e1312d0e4d4e8fd23bd9ab31.setIcon(icon_e3737a8e6ab8daf6c4e57abf346082d1);
        
    
        var popup_113f8fbe8e2b96dd5b8534943145edc3 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_a59b15bb30da67605d90e4a0ccc330b7 = $(`<div id="html_a59b15bb30da67605d90e4a0ccc330b7" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_113f8fbe8e2b96dd5b8534943145edc3.setContent(html_a59b15bb30da67605d90e4a0ccc330b7);
            
        

        marker_70f95e25e1312d0e4d4e8fd23bd9ab31.bindPopup(popup_113f8fbe8e2b96dd5b8534943145edc3)
        ;

        
    
</script>
</html>