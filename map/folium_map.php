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
                #map_972ee790231ccf3984e9e634f66bc5b0 {
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
    
    
            <div class="folium-map" id="map_972ee790231ccf3984e9e634f66bc5b0" ></div>
        
</body>
<script>
    
    
            var map_972ee790231ccf3984e9e634f66bc5b0 = L.map(
                "map_972ee790231ccf3984e9e634f66bc5b0",
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

            

        
    
            var tile_layer_9198eb8a22820ffcd871c0ce9991604c = L.tileLayer(
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
        
    
            tile_layer_9198eb8a22820ffcd871c0ce9991604c.addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var marker_2c478032c444e198681f1937e5f7e593 = L.marker(
                [7.007306, 100.49556],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_a892753a4d3c8ea070391b322cd0ce60 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_2c478032c444e198681f1937e5f7e593.setIcon(icon_a892753a4d3c8ea070391b322cd0ce60);
        
    
        var popup_a8ac5e2f5232ab9af5cdd6dde05e9293 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_863a693c33064db972dcd27cefbd8a85 = $(`<div id="html_863a693c33064db972dcd27cefbd8a85" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_a8ac5e2f5232ab9af5cdd6dde05e9293.setContent(html_863a693c33064db972dcd27cefbd8a85);
            
        

        marker_2c478032c444e198681f1937e5f7e593.bindPopup(popup_a8ac5e2f5232ab9af5cdd6dde05e9293)
        ;

        
    
    
            var marker_15d24a0a6d81d75573c64eb4c0d56fe8 = L.marker(
                [7.00733, 100.495247],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_fec43df1c3529cdcced393b508f5edd1 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_15d24a0a6d81d75573c64eb4c0d56fe8.setIcon(icon_fec43df1c3529cdcced393b508f5edd1);
        
    
        var popup_db587f66ff471140e8e602b61b11a8c0 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_694cfc39e7716095085171ddd63eb4b9 = $(`<div id="html_694cfc39e7716095085171ddd63eb4b9" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_db587f66ff471140e8e602b61b11a8c0.setContent(html_694cfc39e7716095085171ddd63eb4b9);
            
        

        marker_15d24a0a6d81d75573c64eb4c0d56fe8.bindPopup(popup_db587f66ff471140e8e602b61b11a8c0)
        ;

        
    
    
            var marker_8258f391039014b6f1d168b967824991 = L.marker(
                [7.007306, 100.49556],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_1709223c4c4a0cbbdb94601076f8d237 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_8258f391039014b6f1d168b967824991.setIcon(icon_1709223c4c4a0cbbdb94601076f8d237);
        
    
        var popup_f2e4ba1ae9b12a26451b1afed1e0e58c = L.popup({
  "maxWidth": 300,
});

        
            
                var html_683ba2e3624a30d83eac813724a592ff = $(`<div id="html_683ba2e3624a30d83eac813724a592ff" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_f2e4ba1ae9b12a26451b1afed1e0e58c.setContent(html_683ba2e3624a30d83eac813724a592ff);
            
        

        marker_8258f391039014b6f1d168b967824991.bindPopup(popup_f2e4ba1ae9b12a26451b1afed1e0e58c)
        ;

        
    
    
            var marker_c5151a30b4e416dc7bf4ae47c9631f4f = L.marker(
                [7.007306, 100.49556],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_abd2c287167eeeaa35880cdb2fd0e20b = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_c5151a30b4e416dc7bf4ae47c9631f4f.setIcon(icon_abd2c287167eeeaa35880cdb2fd0e20b);
        
    
        var popup_f48ef431d3cb1c1a079468c2a8be0e56 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_c057647b186d988d93e206c6bdd935fb = $(`<div id="html_c057647b186d988d93e206c6bdd935fb" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_f48ef431d3cb1c1a079468c2a8be0e56.setContent(html_c057647b186d988d93e206c6bdd935fb);
            
        

        marker_c5151a30b4e416dc7bf4ae47c9631f4f.bindPopup(popup_f48ef431d3cb1c1a079468c2a8be0e56)
        ;

        
    
    
            var marker_b715fb8fe3e74223c86874d171e9fcb8 = L.marker(
                [7.007306, 100.49556],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_3b9b4b7a91e673bc39c67d2bd30f904c = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_b715fb8fe3e74223c86874d171e9fcb8.setIcon(icon_3b9b4b7a91e673bc39c67d2bd30f904c);
        
    
        var popup_370349d2bc84e688c889771091b90550 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_5c49269fed579018ec082256432d886a = $(`<div id="html_5c49269fed579018ec082256432d886a" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_370349d2bc84e688c889771091b90550.setContent(html_5c49269fed579018ec082256432d886a);
            
        

        marker_b715fb8fe3e74223c86874d171e9fcb8.bindPopup(popup_370349d2bc84e688c889771091b90550)
        ;

        
    
    
            var marker_e470a6d56af748a4d574456b039f0bac = L.marker(
                [7.007306, 100.49556],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_09ee80d911a81e1285e9f06e48f1b3c6 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_e470a6d56af748a4d574456b039f0bac.setIcon(icon_09ee80d911a81e1285e9f06e48f1b3c6);
        
    
        var popup_6c4d5f2d2c73c7eaf92f860158050ca6 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_c81aa86f1d01884e5db9302d1423fc94 = $(`<div id="html_c81aa86f1d01884e5db9302d1423fc94" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_6c4d5f2d2c73c7eaf92f860158050ca6.setContent(html_c81aa86f1d01884e5db9302d1423fc94);
            
        

        marker_e470a6d56af748a4d574456b039f0bac.bindPopup(popup_6c4d5f2d2c73c7eaf92f860158050ca6)
        ;

        
    
    
            var marker_713088c676bcb31b8e577bc9c6cbd265 = L.marker(
                [7.007306, 100.49556],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_1d4238183f4dbcf3784b035a7ed3edbc = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_713088c676bcb31b8e577bc9c6cbd265.setIcon(icon_1d4238183f4dbcf3784b035a7ed3edbc);
        
    
        var popup_5e7582c110a8bc11a9a3ae70a0c205db = L.popup({
  "maxWidth": 300,
});

        
            
                var html_045ff2ff3b318542f4b7e5c0ed415705 = $(`<div id="html_045ff2ff3b318542f4b7e5c0ed415705" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_5e7582c110a8bc11a9a3ae70a0c205db.setContent(html_045ff2ff3b318542f4b7e5c0ed415705);
            
        

        marker_713088c676bcb31b8e577bc9c6cbd265.bindPopup(popup_5e7582c110a8bc11a9a3ae70a0c205db)
        ;

        
    
    
            var marker_7a870c3e9beb27ccecc7d071d99e0617 = L.marker(
                [7.007306, 100.49556],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_ed9857441152bbce8dd81a65de95fbde = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_7a870c3e9beb27ccecc7d071d99e0617.setIcon(icon_ed9857441152bbce8dd81a65de95fbde);
        
    
        var popup_20504f69fad101d3ef4c77193417e9ba = L.popup({
  "maxWidth": 300,
});

        
            
                var html_825ab0a26b4f99059e0ce47e9fa0638e = $(`<div id="html_825ab0a26b4f99059e0ce47e9fa0638e" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_20504f69fad101d3ef4c77193417e9ba.setContent(html_825ab0a26b4f99059e0ce47e9fa0638e);
            
        

        marker_7a870c3e9beb27ccecc7d071d99e0617.bindPopup(popup_20504f69fad101d3ef4c77193417e9ba)
        ;

        
    
    
            var marker_9aef91288188403e5b7a209bc44ab659 = L.marker(
                [7.00733, 100.495247],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_79f068c41876cc829faa25848552683f = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_9aef91288188403e5b7a209bc44ab659.setIcon(icon_79f068c41876cc829faa25848552683f);
        
    
        var popup_42d1fea649c5f81a345e6cfb88ae3330 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_80bfe4f737d6aa2582dd591da200e309 = $(`<div id="html_80bfe4f737d6aa2582dd591da200e309" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_42d1fea649c5f81a345e6cfb88ae3330.setContent(html_80bfe4f737d6aa2582dd591da200e309);
            
        

        marker_9aef91288188403e5b7a209bc44ab659.bindPopup(popup_42d1fea649c5f81a345e6cfb88ae3330)
        ;

        
    
    
            var marker_f058a6ea92b3e24fbfa09407229ac090 = L.marker(
                [7.00733, 100.495247],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_29385e82d32302257014bb4bb534864a = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_f058a6ea92b3e24fbfa09407229ac090.setIcon(icon_29385e82d32302257014bb4bb534864a);
        
    
        var popup_fdbd5ff0907ddea96e73129165d95fbd = L.popup({
  "maxWidth": 300,
});

        
            
                var html_26189d14130180f4f01bf8c8a5509231 = $(`<div id="html_26189d14130180f4f01bf8c8a5509231" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_fdbd5ff0907ddea96e73129165d95fbd.setContent(html_26189d14130180f4f01bf8c8a5509231);
            
        

        marker_f058a6ea92b3e24fbfa09407229ac090.bindPopup(popup_fdbd5ff0907ddea96e73129165d95fbd)
        ;

        
    
    
            var marker_20d27301bf7b12da9aa9c491607e4608 = L.marker(
                [7.00733, 100.495247],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_0774115609d60abf01c317bc22b4708d = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_20d27301bf7b12da9aa9c491607e4608.setIcon(icon_0774115609d60abf01c317bc22b4708d);
        
    
        var popup_ead11f4e804d56a8ee9983543ba86076 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_c2151f194fee4a8e4f73c4eb93454c51 = $(`<div id="html_c2151f194fee4a8e4f73c4eb93454c51" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_ead11f4e804d56a8ee9983543ba86076.setContent(html_c2151f194fee4a8e4f73c4eb93454c51);
            
        

        marker_20d27301bf7b12da9aa9c491607e4608.bindPopup(popup_ead11f4e804d56a8ee9983543ba86076)
        ;

        
    
    
            var marker_6339dd20a3451c56c30f5c3c542d37b9 = L.marker(
                [7.00733, 100.495247],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_a82527fd3993cd67614f922615a65ea4 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_6339dd20a3451c56c30f5c3c542d37b9.setIcon(icon_a82527fd3993cd67614f922615a65ea4);
        
    
        var popup_276144cc609739d8e1969ffcd395ea5d = L.popup({
  "maxWidth": 300,
});

        
            
                var html_de2be3a61177df8a76899bffb0e56251 = $(`<div id="html_de2be3a61177df8a76899bffb0e56251" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_276144cc609739d8e1969ffcd395ea5d.setContent(html_de2be3a61177df8a76899bffb0e56251);
            
        

        marker_6339dd20a3451c56c30f5c3c542d37b9.bindPopup(popup_276144cc609739d8e1969ffcd395ea5d)
        ;

        
    
    
            var marker_de558abf7d63a33ad02f53e8d2057425 = L.marker(
                [7.00733, 100.495247],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_f8b736162908312abdbaf56c6e1f46cf = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_de558abf7d63a33ad02f53e8d2057425.setIcon(icon_f8b736162908312abdbaf56c6e1f46cf);
        
    
        var popup_6560c57fb22af709dfd50131d2066640 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_2df02bd2f5ff1f1162f0935683da9f65 = $(`<div id="html_2df02bd2f5ff1f1162f0935683da9f65" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_6560c57fb22af709dfd50131d2066640.setContent(html_2df02bd2f5ff1f1162f0935683da9f65);
            
        

        marker_de558abf7d63a33ad02f53e8d2057425.bindPopup(popup_6560c57fb22af709dfd50131d2066640)
        ;

        
    
    
            var marker_77699399296eccc9eebb1b4ae7645423 = L.marker(
                [7.00733, 100.495247],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_66b5d0d4b3d02b4a1c564d2dbb976fa2 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_77699399296eccc9eebb1b4ae7645423.setIcon(icon_66b5d0d4b3d02b4a1c564d2dbb976fa2);
        
    
        var popup_f8d91cb7b2b6fe01ee93555ed2da3b79 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_41d833eebbff0ac56df62211ade7f228 = $(`<div id="html_41d833eebbff0ac56df62211ade7f228" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_f8d91cb7b2b6fe01ee93555ed2da3b79.setContent(html_41d833eebbff0ac56df62211ade7f228);
            
        

        marker_77699399296eccc9eebb1b4ae7645423.bindPopup(popup_f8d91cb7b2b6fe01ee93555ed2da3b79)
        ;

        
    
    
            var marker_9aac31bf232bdafaa10eaca7c4bb6aae = L.marker(
                [7.00733, 100.495247],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_8364dbe81744159b83a4159ce765b042 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_9aac31bf232bdafaa10eaca7c4bb6aae.setIcon(icon_8364dbe81744159b83a4159ce765b042);
        
    
        var popup_c03429966196b52976d9b10143ac658f = L.popup({
  "maxWidth": 300,
});

        
            
                var html_d126d19c5a678ee1d43f4de5f3e38dad = $(`<div id="html_d126d19c5a678ee1d43f4de5f3e38dad" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_c03429966196b52976d9b10143ac658f.setContent(html_d126d19c5a678ee1d43f4de5f3e38dad);
            
        

        marker_9aac31bf232bdafaa10eaca7c4bb6aae.bindPopup(popup_c03429966196b52976d9b10143ac658f)
        ;

        
    
    
            var marker_187dba872f9140441fc609e9f0d03367 = L.marker(
                [7.007306, 100.49556],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_38fcae3e7c2cd76cbbea0027cef38042 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_187dba872f9140441fc609e9f0d03367.setIcon(icon_38fcae3e7c2cd76cbbea0027cef38042);
        
    
        var popup_f910ba0e4c30265ac6a59c2d292f04e5 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_c0e63f0c6368d9a64cfb841cd41ccabb = $(`<div id="html_c0e63f0c6368d9a64cfb841cd41ccabb" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=1" target="_blank">ดูรายละเอียดต้นไม้ 1</a></div>`)[0];
                popup_f910ba0e4c30265ac6a59c2d292f04e5.setContent(html_c0e63f0c6368d9a64cfb841cd41ccabb);
            
        

        marker_187dba872f9140441fc609e9f0d03367.bindPopup(popup_f910ba0e4c30265ac6a59c2d292f04e5)
        ;

        
    
    
            var marker_ddac295113035928ed539ed84963a0c3 = L.marker(
                [7.00733, 100.495247],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_1593f34d7027abb900951f36da2667b7 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_ddac295113035928ed539ed84963a0c3.setIcon(icon_1593f34d7027abb900951f36da2667b7);
        
    
        var popup_18c3c4bfa2793488197bd90cab47f09e = L.popup({
  "maxWidth": 300,
});

        
            
                var html_95723d8462f4cf827a6e9948fd9d5ffe = $(`<div id="html_95723d8462f4cf827a6e9948fd9d5ffe" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=2" target="_blank">ดูรายละเอียดต้นไม้ 2</a></div>`)[0];
                popup_18c3c4bfa2793488197bd90cab47f09e.setContent(html_95723d8462f4cf827a6e9948fd9d5ffe);
            
        

        marker_ddac295113035928ed539ed84963a0c3.bindPopup(popup_18c3c4bfa2793488197bd90cab47f09e)
        ;

        
    
    
            var marker_2da7941e4aa76b51cdee4e28ccf36b90 = L.marker(
                [7.00718, 100.495277],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_0a60764cc1caba4967b878af730c6aa3 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_2da7941e4aa76b51cdee4e28ccf36b90.setIcon(icon_0a60764cc1caba4967b878af730c6aa3);
        
    
        var popup_77935158535b611295fb966135f47a6b = L.popup({
  "maxWidth": 300,
});

        
            
                var html_6d650324e2ba336ebc6d34bb66b5b366 = $(`<div id="html_6d650324e2ba336ebc6d34bb66b5b366" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=3" target="_blank">ดูรายละเอียดต้นไม้ 3</a></div>`)[0];
                popup_77935158535b611295fb966135f47a6b.setContent(html_6d650324e2ba336ebc6d34bb66b5b366);
            
        

        marker_2da7941e4aa76b51cdee4e28ccf36b90.bindPopup(popup_77935158535b611295fb966135f47a6b)
        ;

        
    
    
            var marker_3c292be6717dc05764ff720fe527092e = L.marker(
                [7.00718, 100.495277],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_b612e304f4fabb99f06f29651a4ae7ce = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_3c292be6717dc05764ff720fe527092e.setIcon(icon_b612e304f4fabb99f06f29651a4ae7ce);
        
    
        var popup_ac02970033c7ffc978f6db01f8a60bd8 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_a04b4f8b51a23f570d86e7aec3129b96 = $(`<div id="html_a04b4f8b51a23f570d86e7aec3129b96" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=3" target="_blank">ดูรายละเอียดต้นไม้ 3</a></div>`)[0];
                popup_ac02970033c7ffc978f6db01f8a60bd8.setContent(html_a04b4f8b51a23f570d86e7aec3129b96);
            
        

        marker_3c292be6717dc05764ff720fe527092e.bindPopup(popup_ac02970033c7ffc978f6db01f8a60bd8)
        ;

        
    
    
            var marker_46cc0eb5461bb3e45be52b6fa32aa263 = L.marker(
                [7.00718, 100.495277],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_bff72ba21ad67a7919380db284345eca = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_46cc0eb5461bb3e45be52b6fa32aa263.setIcon(icon_bff72ba21ad67a7919380db284345eca);
        
    
        var popup_bda6f762814f335b5dfde28fdce58eb9 = L.popup({
  "maxWidth": 300,
});

        
            
                var html_67a4403d7372aa22bddecfca9d64a86b = $(`<div id="html_67a4403d7372aa22bddecfca9d64a86b" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=3" target="_blank">ดูรายละเอียดต้นไม้ 3</a></div>`)[0];
                popup_bda6f762814f335b5dfde28fdce58eb9.setContent(html_67a4403d7372aa22bddecfca9d64a86b);
            
        

        marker_46cc0eb5461bb3e45be52b6fa32aa263.bindPopup(popup_bda6f762814f335b5dfde28fdce58eb9)
        ;

        
    
    
            var marker_0cbaba8bb49ae08f05b0b042efa3da68 = L.marker(
                [7.007468, 100.495193],
                {
}
            ).addTo(map_972ee790231ccf3984e9e634f66bc5b0);
        
    
            var icon_21cb94105ef8043b5fab1bad5034e021 = L.AwesomeMarkers.icon(
                {
  "markerColor": "green",
  "iconColor": "white",
  "icon": "tree",
  "prefix": "glyphicon",
  "extraClasses": "fa-rotate-0",
}
            );
            marker_0cbaba8bb49ae08f05b0b042efa3da68.setIcon(icon_21cb94105ef8043b5fab1bad5034e021);
        
    
        var popup_f33ed2926d42a9ba61e1ca1ba546cdad = L.popup({
  "maxWidth": 300,
});

        
            
                var html_d3792423b11b62922234daddc868c9c4 = $(`<div id="html_d3792423b11b62922234daddc868c9c4" style="width: 100.0%; height: 100.0%;"><a href="treeshow.php?tree_id=5" target="_blank">ดูรายละเอียดต้นไม้ 5</a></div>`)[0];
                popup_f33ed2926d42a9ba61e1ca1ba546cdad.setContent(html_d3792423b11b62922234daddc868c9c4);
            
        

        marker_0cbaba8bb49ae08f05b0b042efa3da68.bindPopup(popup_f33ed2926d42a9ba61e1ca1ba546cdad)
        ;

        
    
</script>
</html>