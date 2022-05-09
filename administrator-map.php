<?php
include_once 'header.php';
include 'locations_model1.php';
//get_unconfirmed_locations();exit;
?>

    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw">
    </script>

    <div id="map"></div>
    <script>
      /**
         * Create new map
         */
        var infowindow;
        var map;
        var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;

        var myOptions = {
            zoom: 13,
            center: new google.maps.LatLng(6.9271, 79.8612),
            mapTypeId: 'roadmap'
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);
/**
         * Global marker object that holds all markers.
         * @type {Object.<string, google.maps.LatLng>}
         */


       
        var markers = {};
/**
         * Concatenates given lat and lng with an underscore and returns it.
         * This id will be used as a key of marker to cache the marker in markers object.
         * @param {!number} lat Latitude.
         * @param {!number} lng Longitude.
         * @return {string} Concatenated marker id.
         */
        
        var getMarkerUniqueId= function(lat, lng) {
            return lat + '_' + lng;
        };
/**
         * Creates an instance of google.maps.LatLng by given lat and lng values and returns it.
         * This function can be useful for getting new coordinates quickly.
         * @param {!number} lat Latitude.
         * @param {!number} lng Longitude.
         * @return {google.maps.LatLng} An instance of google.maps.LatLng object
         */
        
        var getLatLng = function(lat, lng) {
            return new google.maps.LatLng(lat, lng);
        };
 /**
         * Binds click event to given map and invokes a callback that appends a new marker to clicked location.
         */
        
        var addMarker = google.maps.event.addListener(map, 'click', function(e) {
            var lat = e.latLng.lat(); // lat of clicked point
            var lng = e.latLng.lng(); // lng of clicked point
            var markerId = getMarkerUniqueId(lat, lng); // an that will be used to cache this marker in markers object.
            var marker = new google.maps.Marker({
                position: getLatLng(lat, lng),
                map: map,
                animation: google.maps.Animation.DROP,
                id: 'marker_' + markerId,
                html: "    <div id='info_"+markerId+"'>\n" +
                "        <table class=\"map1\">\n" +
                "            <tr>\n" +
                "                <td><a>Name:</a></td>\n" +
                "                <td><textarea  id='manual_name' placeholder='Name'></textarea></td></tr>\n" +
                " <tr>\n"+
                " <td><b>Confirm Location:</b></td>\n"+
                "<td><input id='confirmed' type='checkbox' name='confirmed'>"+
                " </td>"+
                " <tr>\n"+
                "            <tr><td></td><td><input type='button' value='Save' onclick='saveData("+lat+","+lng+")'/></td></tr>\n" +
                "        </table>\n" +
                "    </div>"
                
            });

            markers[markerId] = marker; // cache marker in markers object
            bindMarkerEvents(marker); // bind right click event to marker
            bindMarkerinfo(marker); // bind infowindow with click event to marker
        });
        /**
         * Binds  click event to given marker and invokes a callback function that will remove the marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
         */

       
        var bindMarkerinfo = function(marker) {
            google.maps.event.addListener(marker, "click", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                infowindow = new google.maps.InfoWindow();
                infowindow.setContent(marker.html);
                infowindow.open(map, marker);
              // removeMarker(marker, markerId); // remove it
            });
        };
/**
         * Binds right click event to given marker and invokes a callback function that will remove the marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
         */
       
        var bindMarkerEvents = function(marker) {
            google.maps.event.addListener(marker, "rightclick", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                removeMarker(marker, markerId); // remove it
            });
        };
        /**
         * Removes given marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that will be removed.
         * @param {!string} markerId Id of marker.
         */

        
        var removeMarker = function(marker, markerId) {
            marker.setMap(null); // set markers setMap to null to remove it from map
            delete markers[markerId]; // delete marker instance from markers object
        };
        /**
         * loop through (Mysql) dynamic locations to add markers to map.
         */


       
        var i ; var confirmed = 0;
        for (i = 0; i < showmap.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(showmap[i][1], showmap[i][2]),
                map: map,

                html: "<div>\n" +
                "<table class=\"map1\">\n" +
                "<tr>\n" +
                "<td><a>Name:</a></td>\n" +
                "<td><textarea disabled id='manual_name' placeholder='Name'>"+showmap[i][1]+"</textarea></td></tr>\n" +
                "<tr>\n" +
                "<tr>\n" +
                "<td><b>Confirm Location ?:</b></td>"+
                "<td><input id='confirmed' type='checkbox' name='confirmed'>"+showmap[i][2]+"</td></tr>"+  
                "</table>\n" +
                "</div>"
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed =  locations[i][4] === '1' ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][4]);
                    infowindow = new google.maps.InfoWindow();
                    $("#name").val(showmap[i][1]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
/**
         * SAVE save marker from map.
         * @param lat  A latitude of marker.
         * @param lng A longitude of marker.
         */
       
        function saveData(lat,lng) {
            var name = document.getElementById('manual_name').value;
            var url = 'locations_model1.php?add_location&name=' + name + '&lat=' + lat + '&lng=' + lng;
            downloadUrl(url, function(data, responseCode) {
                if (responseCode === 200  && data.length > 1) {
                    var markerId = getMarkerUniqueId(lat,lng);// get marker id by using clicked point's coordinate  
                    var manual_marker = markers[markerId]; 
                    infowindow.close();
                    infowindow.setContent("<div style=' color: purple; font-size: 25px;'>Successfully Entered Garbage Spot!!</div>");
                    infowindow.open(map, manual_marker);

                }else{
                    console.log(responseCode);
                    console.log(data);
                    infowindow.setContent("<div style='color: red; font-size: 25px;'>Inserting Errors</div>");
                }
            });
        }

        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    callback(request.responseText, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }


    </script>
<div style="display: none" id="form">
    <table class="map1">
        <tr>
            <td><b>Confirm Location ?:</b></td>
            <td><input id='confirmed' type='checkbox' name='confirmed'></td>
        </tr>



<?php
include_once 'footer.php';

?>