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
                #map_4abe21cce1b380e02078db5d694a3b5a {
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
    
    
            <div class="folium-map" id="map_4abe21cce1b380e02078db5d694a3b5a" ></div>
        
</body>
<script>
    
    
            var map_4abe21cce1b380e02078db5d694a3b5a = L.map(
                "map_4abe21cce1b380e02078db5d694a3b5a",
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

            

        
    
            var tile_layer_995be82361ff4ba279c4049c6f761856 = L.tileLayer(
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
        
    
            tile_layer_995be82361ff4ba279c4049c6f761856.addTo(map_4abe21cce1b380e02078db5d694a3b5a);
        
    
            var marker_9576c23fe56226c69b4e254c607741a2 = L.marker(
                [7.008126, 100.494164],
                {
}
            ).addTo(map_4abe21cce1b380e02078db5d694a3b5a);
        
    
            var icon_f9216d8ad7d12c15bee44778541b6848 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_9576c23fe56226c69b4e254c607741a2.setIcon(icon_f9216d8ad7d12c15bee44778541b6848);
        
    
        var popup_7bcd36edaac25e8f52a1e457f16176c5 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_dffe03f376a2712fc087cbbba2a43bc4 = $(`<div id="html_dffe03f376a2712fc087cbbba2a43bc4" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_7bcd36edaac25e8f52a1e457f16176c5.setContent(html_dffe03f376a2712fc087cbbba2a43bc4);
            
        

        marker_9576c23fe56226c69b4e254c607741a2.bindPopup(popup_7bcd36edaac25e8f52a1e457f16176c5)
        ;

        
    
    
            var marker_64bd3e3d5e1621e63c22d195c5802bc2 = L.marker(
                [7.006614, 100.496674],
                {
}
            ).addTo(map_4abe21cce1b380e02078db5d694a3b5a);
        
    
            var icon_598f4ac74062cdbd4e3aeb311c8c16f6 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_64bd3e3d5e1621e63c22d195c5802bc2.setIcon(icon_598f4ac74062cdbd4e3aeb311c8c16f6);
        
    
        var popup_a2f28584b061defabcc59e054b51d337 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_da6dbcc7bd59097f75da2ff548652411 = $(`<div id="html_da6dbcc7bd59097f75da2ff548652411" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_a2f28584b061defabcc59e054b51d337.setContent(html_da6dbcc7bd59097f75da2ff548652411);
            
        

        marker_64bd3e3d5e1621e63c22d195c5802bc2.bindPopup(popup_a2f28584b061defabcc59e054b51d337)
        ;

        
    
    
            var marker_3db5ea9201eba7119a33935511a47b96 = L.marker(
                [7.007367, 100.494629],
                {
}
            ).addTo(map_4abe21cce1b380e02078db5d694a3b5a);
        
    
            var icon_4cf31f940070776c4178bfcaac31211b = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_3db5ea9201eba7119a33935511a47b96.setIcon(icon_4cf31f940070776c4178bfcaac31211b);
        
    
        var popup_c663177bf6d8ff2dec6148ef837e8518 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_76d5341f9b25ec31ab65dea6185e4407 = $(`<div id="html_76d5341f9b25ec31ab65dea6185e4407" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=3" target="_blank">ดูรายละเอียดต้นไม้ 3</a></div>`)[0];
                popup_c663177bf6d8ff2dec6148ef837e8518.setContent(html_76d5341f9b25ec31ab65dea6185e4407);
            
        

        marker_3db5ea9201eba7119a33935511a47b96.bindPopup(popup_c663177bf6d8ff2dec6148ef837e8518)
        ;

        
    
</script>
</html>