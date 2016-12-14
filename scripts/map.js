/**
 * Created by AntonioMelo on 14/12/2016.
 */
$('document').ready(PageLoaded);
function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(41.1400762, -8.6398997),
        zoom: 18
    };

    var map = new google.maps.Map(mapCanvas, mapOptions);
}