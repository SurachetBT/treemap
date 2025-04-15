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
                #map_25b0f0689a38d2305eb716bb905692d4 {
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
    
    
            <div class="folium-map" id="map_25b0f0689a38d2305eb716bb905692d4" ></div>
        
</body>
<script>
    
    
            var map_25b0f0689a38d2305eb716bb905692d4 = L.map(
                "map_25b0f0689a38d2305eb716bb905692d4",
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

            

        
    
            var tile_layer_be2a2c5e497948d836dfff57598984b0 = L.tileLayer(
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
        
    
            tile_layer_be2a2c5e497948d836dfff57598984b0.addTo(map_25b0f0689a38d2305eb716bb905692d4);
        
    
            var marker_64d97f3eee521606da90be3877a3c0fe = L.marker(
                [7.006856, 100.494362],
                {
}
            ).addTo(map_25b0f0689a38d2305eb716bb905692d4);
        
    
            var icon_c1e5f0441f24dc32003628e818c7519c = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_64d97f3eee521606da90be3877a3c0fe.setIcon(icon_c1e5f0441f24dc32003628e818c7519c);
        
    
        var popup_1270bc18ea82988bdb0f1502089f382f = L.popup({
  "maxWidth": 300,
});

        
            
                var html_00754d0f9895191255eedecb198d7d6d = $(`<div id="html_00754d0f9895191255eedecb198d7d6d" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_1270bc18ea82988bdb0f1502089f382f.setContent(html_00754d0f9895191255eedecb198d7d6d);
            
        

        marker_64d97f3eee521606da90be3877a3c0fe.bindPopup(popup_1270bc18ea82988bdb0f1502089f382f)
        ;

        
    
    
            var marker_740b3326488471c045de5548be466aed = L.marker(
                [7.006771, 100.496391],
                {
}
            ).addTo(map_25b0f0689a38d2305eb716bb905692d4);
        
    
            var icon_12cb933fe00d50eb911f0fd254c97d6b = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_740b3326488471c045de5548be466aed.setIcon(icon_12cb933fe00d50eb911f0fd254c97d6b);
        
    
        var popup_2a7440c93210d6507ccd1fa2ae3c2eb9 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_3afb5e14e03a172c8ca4b33aedef20da = $(`<div id="html_3afb5e14e03a172c8ca4b33aedef20da" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=3" target="_blank">ดูรายละเอียดต้นไม้ 3</a></div>`)[0];
                popup_2a7440c93210d6507ccd1fa2ae3c2eb9.setContent(html_3afb5e14e03a172c8ca4b33aedef20da);
            
        

        marker_740b3326488471c045de5548be466aed.bindPopup(popup_2a7440c93210d6507ccd1fa2ae3c2eb9)
        ;

        
    
    
            var marker_27f6f9cd594bc6b7d06470717fa511bd = L.marker(
                [7.006856, 100.494362],
                {
}
            ).addTo(map_25b0f0689a38d2305eb716bb905692d4);
        
    
            var icon_7212a58e5a354b2f6b123a7785e1dfa2 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_27f6f9cd594bc6b7d06470717fa511bd.setIcon(icon_7212a58e5a354b2f6b123a7785e1dfa2);
        
    
        var popup_e8c6b881243597d3ce88bafc3ce8bd00 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_de8902483cfc83efede467272bb97c9e = $(`<div id="html_de8902483cfc83efede467272bb97c9e" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_e8c6b881243597d3ce88bafc3ce8bd00.setContent(html_de8902483cfc83efede467272bb97c9e);
            
        

        marker_27f6f9cd594bc6b7d06470717fa511bd.bindPopup(popup_e8c6b881243597d3ce88bafc3ce8bd00)
        ;

        
    
    
            var marker_918ff3fb030b48ce0951360190dedb90 = L.marker(
                [7.006856, 100.494362],
                {
}
            ).addTo(map_25b0f0689a38d2305eb716bb905692d4);
        
    
            var icon_9deafcabe3b073b6b5aded72136d3007 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_918ff3fb030b48ce0951360190dedb90.setIcon(icon_9deafcabe3b073b6b5aded72136d3007);
        
    
        var popup_6c0c97809867052bc1e5ee281a4b96f7 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_ec94f9ea6a36fedc85021c28c5f52f3b = $(`<div id="html_ec94f9ea6a36fedc85021c28c5f52f3b" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_6c0c97809867052bc1e5ee281a4b96f7.setContent(html_ec94f9ea6a36fedc85021c28c5f52f3b);
            
        

        marker_918ff3fb030b48ce0951360190dedb90.bindPopup(popup_6c0c97809867052bc1e5ee281a4b96f7)
        ;

        
    
    
            var marker_6aae68b1166f58c718726387c597c300 = L.marker(
                [7.006856, 100.494362],
                {
}
            ).addTo(map_25b0f0689a38d2305eb716bb905692d4);
        
    
            var icon_3bb532e362e6105092036f239a09183e = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_6aae68b1166f58c718726387c597c300.setIcon(icon_3bb532e362e6105092036f239a09183e);
        
    
        var popup_bc8c3771f22bd0a25b19da37d0ed744d = L.popup({
  "maxWidth": 300,
});

        
            
                var html_a775a91fb1d32b54f7616f0c0e47a589 = $(`<div id="html_a775a91fb1d32b54f7616f0c0e47a589" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_bc8c3771f22bd0a25b19da37d0ed744d.setContent(html_a775a91fb1d32b54f7616f0c0e47a589);
            
        

        marker_6aae68b1166f58c718726387c597c300.bindPopup(popup_bc8c3771f22bd0a25b19da37d0ed744d)
        ;

        
    
    
            var marker_e037b9cbfcdb89ce67199f6809c56b90 = L.marker(
                [7.006856, 100.494362],
                {
}
            ).addTo(map_25b0f0689a38d2305eb716bb905692d4);
        
    
            var icon_988d8c8fb860c4f26dab34f81efdde52 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_e037b9cbfcdb89ce67199f6809c56b90.setIcon(icon_988d8c8fb860c4f26dab34f81efdde52);
        
    
        var popup_f1f1c141e4a6fce14de8c4d807be86b0 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_2b4d61a1cf52ff7d0f996a7a48cd6ea4 = $(`<div id="html_2b4d61a1cf52ff7d0f996a7a48cd6ea4" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_f1f1c141e4a6fce14de8c4d807be86b0.setContent(html_2b4d61a1cf52ff7d0f996a7a48cd6ea4);
            
        

        marker_e037b9cbfcdb89ce67199f6809c56b90.bindPopup(popup_f1f1c141e4a6fce14de8c4d807be86b0)
        ;

        
    
    
            var marker_65fb44cf15b30f47b1894a218ceacc09 = L.marker(
                [7.006771, 100.495018],
                {
}
            ).addTo(map_25b0f0689a38d2305eb716bb905692d4);
        
    
            var icon_ad82422ac7f4fbee240151213caeba31 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_65fb44cf15b30f47b1894a218ceacc09.setIcon(icon_ad82422ac7f4fbee240151213caeba31);
        
    
        var popup_75f964d7b44b4a3f983dfa3f4862bae3 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_52cc5c1c93a89c0a2404c6e04d0240b0 = $(`<div id="html_52cc5c1c93a89c0a2404c6e04d0240b0" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=6" target="_blank">ดูรายละเอียดต้นไม้ 6</a></div>`)[0];
                popup_75f964d7b44b4a3f983dfa3f4862bae3.setContent(html_52cc5c1c93a89c0a2404c6e04d0240b0);
            
        

        marker_65fb44cf15b30f47b1894a218ceacc09.bindPopup(popup_75f964d7b44b4a3f983dfa3f4862bae3)
        ;

        
    
</script>
</html>