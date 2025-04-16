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
                #map_c878a387a934e3274fec156165de9605 {
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
    
    
            <div class="folium-map" id="map_c878a387a934e3274fec156165de9605" ></div>
        
</body>
<script>
    
    
            var map_c878a387a934e3274fec156165de9605 = L.map(
                "map_c878a387a934e3274fec156165de9605",
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

            

        
    
            var tile_layer_d83214b5d2de77447aaa9319109b8c49 = L.tileLayer(
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
        
    
            tile_layer_d83214b5d2de77447aaa9319109b8c49.addTo(map_c878a387a934e3274fec156165de9605);
        
    
            var marker_4e885aeb56743190270850ac495a5094 = L.marker(
                [7.007697, 100.495903],
                {
}
            ).addTo(map_c878a387a934e3274fec156165de9605);
        
    
            var icon_5cd46a2ff8fa4f2c9e78c9d3a0fc6d20 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_4e885aeb56743190270850ac495a5094.setIcon(icon_5cd46a2ff8fa4f2c9e78c9d3a0fc6d20);
        
    
        var popup_49434a47b15e1925dce4abc33afc4bc0 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_b16ec70f95b94275810b6c1ec3ebf307 = $(`<div id="html_b16ec70f95b94275810b6c1ec3ebf307" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_49434a47b15e1925dce4abc33afc4bc0.setContent(html_b16ec70f95b94275810b6c1ec3ebf307);
            
        

        marker_4e885aeb56743190270850ac495a5094.bindPopup(popup_49434a47b15e1925dce4abc33afc4bc0)
        ;

        
    
    
            var marker_0a951af5c5ef7a7fbd77f127d6d59716 = L.marker(
                [7.006834, 100.495033],
                {
}
            ).addTo(map_c878a387a934e3274fec156165de9605);
        
    
            var icon_ae5fa0f8432e8cbb0203acc08910ce81 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_0a951af5c5ef7a7fbd77f127d6d59716.setIcon(icon_ae5fa0f8432e8cbb0203acc08910ce81);
        
    
        var popup_ef432451dee133073aba83d38bfc4ffb = L.popup({
  "maxWidth": 300,
});

        
            
                var html_06c9d7ea802f5041e2a036eaacd4edda = $(`<div id="html_06c9d7ea802f5041e2a036eaacd4edda" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_ef432451dee133073aba83d38bfc4ffb.setContent(html_06c9d7ea802f5041e2a036eaacd4edda);
            
        

        marker_0a951af5c5ef7a7fbd77f127d6d59716.bindPopup(popup_ef432451dee133073aba83d38bfc4ffb)
        ;

        
    
    
            var marker_5853dc9a5057e4e38cd2f983aea70e9c = L.marker(
                [7.006834, 100.495033],
                {
}
            ).addTo(map_c878a387a934e3274fec156165de9605);
        
    
            var icon_3c18d58cca95e16974f82adcdc1c95ca = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_5853dc9a5057e4e38cd2f983aea70e9c.setIcon(icon_3c18d58cca95e16974f82adcdc1c95ca);
        
    
        var popup_1d8655efa22dbcb9c38397ac1eadc3ed = L.popup({
  "maxWidth": 300,
});

        
            
                var html_6d03cfdee7d96ee29a0e29ae6808209d = $(`<div id="html_6d03cfdee7d96ee29a0e29ae6808209d" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_1d8655efa22dbcb9c38397ac1eadc3ed.setContent(html_6d03cfdee7d96ee29a0e29ae6808209d);
            
        

        marker_5853dc9a5057e4e38cd2f983aea70e9c.bindPopup(popup_1d8655efa22dbcb9c38397ac1eadc3ed)
        ;

        
    
    
            var marker_2186623670fe014ec23cd2832cf312f6 = L.marker(
                [7.007697, 100.495903],
                {
}
            ).addTo(map_c878a387a934e3274fec156165de9605);
        
    
            var icon_df2ddeab8fc6bcadfc66d452d6b9571b = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "leaf",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_2186623670fe014ec23cd2832cf312f6.setIcon(icon_df2ddeab8fc6bcadfc66d452d6b9571b);
        
    
        var popup_e20efa78d360f5be98c8121fa418a334 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_c90225f57e569ca94c76da31a0157f19 = $(`<div id="html_c90225f57e569ca94c76da31a0157f19" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_e20efa78d360f5be98c8121fa418a334.setContent(html_c90225f57e569ca94c76da31a0157f19);
            
        

        marker_2186623670fe014ec23cd2832cf312f6.bindPopup(popup_e20efa78d360f5be98c8121fa418a334)
        ;

        
    
</script>
</html>