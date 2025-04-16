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
                #map_a4bfa5ab3e61689eadff1caf01b774af {
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
    
    
            <div class="folium-map" id="map_a4bfa5ab3e61689eadff1caf01b774af" ></div>
        
</body>
<script>
    
    
            var map_a4bfa5ab3e61689eadff1caf01b774af = L.map(
                "map_a4bfa5ab3e61689eadff1caf01b774af",
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

            

        
    
            var tile_layer_fabed8bd334df7e762436fbfbb4e4337 = L.tileLayer(
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
        
    
            tile_layer_fabed8bd334df7e762436fbfbb4e4337.addTo(map_a4bfa5ab3e61689eadff1caf01b774af);
        
    
            var marker_eb7a5d2e2210163862e9375ccb0a3068 = L.marker(
                [7.008126, 100.494164],
                {
}
            ).addTo(map_a4bfa5ab3e61689eadff1caf01b774af);
        
    
            var icon_20eae8f7a21fffc113a1fcba744405a1 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_eb7a5d2e2210163862e9375ccb0a3068.setIcon(icon_20eae8f7a21fffc113a1fcba744405a1);
        
    
        var popup_7af4c6e356a172cf37b6949997cc2885 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_e8c448eec3205780beeb2d68b1b89b8b = $(`<div id="html_e8c448eec3205780beeb2d68b1b89b8b" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_7af4c6e356a172cf37b6949997cc2885.setContent(html_e8c448eec3205780beeb2d68b1b89b8b);
            
        

        marker_eb7a5d2e2210163862e9375ccb0a3068.bindPopup(popup_7af4c6e356a172cf37b6949997cc2885)
        ;

        
    
    
            var marker_3041f7ad42a1a8980afa75e85b5ae219 = L.marker(
                [7.006614, 100.496674],
                {
}
            ).addTo(map_a4bfa5ab3e61689eadff1caf01b774af);
        
    
            var icon_31543019a972014439ed0e9bed56859d = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_3041f7ad42a1a8980afa75e85b5ae219.setIcon(icon_31543019a972014439ed0e9bed56859d);
        
    
        var popup_7c6b822fc9467a8fb6fa7b6c6e81764c = L.popup({
  "maxWidth": 300,
});

        
            
                var html_2cbeb3c4558551364520afd8dbb662bc = $(`<div id="html_2cbeb3c4558551364520afd8dbb662bc" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_7c6b822fc9467a8fb6fa7b6c6e81764c.setContent(html_2cbeb3c4558551364520afd8dbb662bc);
            
        

        marker_3041f7ad42a1a8980afa75e85b5ae219.bindPopup(popup_7c6b822fc9467a8fb6fa7b6c6e81764c)
        ;

        
    
</script>
</html>