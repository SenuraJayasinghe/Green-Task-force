<?php
include_once 'header.php';
include_once 'locations_model1.php';
//get_unconfirmed_locations();exit;
?>


<div id="map"></div>


<script>
    /**
         * Create new map
         */
    var map;
    var marker;
    var infowindow;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
    var showmap = <?php get_all_locations() ?>;

    function initMap() {
        var colombo = {lat: 6.9271, lng: 79.8612};
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
            center: colombo,
            zoom: 13
        });


        var i ; var confirmed = 0;
        for (i = 0; i < showmap.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(showmap[i][2], showmap[i][3]),
                map: map,
                html: document.getElementById('form')
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    $("#name").val(showmap[i][1]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

    function saveData() {

        var id = document.getElementById('id').value;
        var name = document.getElementById('name').value;
        var url = 'locations_model1.php?confirm_location&id=' + id + '&confirmed=' + confirmed ;
        downloadUrl(url, function(data, responseCode) {
            if (responseCode === 200  && data.length > 1) {
                infowindow.close();
                window.location.reload(true);
            }else{
                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
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
            <input name="id" type='hidden' id='id'/>
            <td><a>Name:</a></td>
            <td><textarea disabled id='name' placeholder='Name'></textarea></td>
        </tr>

    </table>
</div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw&callback=initMap">
</script>