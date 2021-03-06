function initMap() {
    var latitude = document.getElementById("latitude").value;
    var longitude = document.getElementById("longitude").value;

    var e = { monTheme:[{featureType:"all",stylers:[{saturation:-100 },{ gamma:.5 }] }] };

    map=new google.maps.Map( document.getElementById("map"), {
        zoom:16,
        center:new google.maps.LatLng(latitude,longitude),
        mapTypeId:"monTheme" }
    );

    var a = new google.maps.StyledMapType (
        e.monTheme,
        {name:"monTheme"}
    );

    map.mapTypes.set("monTheme",a);

    var m={map:{icon:"http://artskory.fr/wp-content/themes/artskory/img/maps.png"}};

    [{position:new google.maps.LatLng(latitude,longitude),type:"map"}].forEach(
        function(e){
            new google.maps.Marker ({
                position:e.position,
                icon:m[e.type].icon,
                map:map
            });
        });
};

var map;
