<!--Google maps Api -->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLovFE8SOpL89SKvCKsGxos3GGeBhSso8&libraries=places"></script>

<script>
    var myCenter = new google.maps.LatLng(43.214050, 27.914733);

    var mapCanvas = document.getElementById('map');
    var mapOptions = {
        center: {lat: 42.721866, lng: 24.3596031},
        zoom: 6
    };

    var map = new google.maps.Map(mapCanvas, mapOptions);

    var marker = new google.maps.Marker({position: myCenter});
    marker.setMap(map);

    var defaultBounds = new google.maps.LatLngBounds(
            new google.maps.LatLng(43.214050, 27.914733),
            new google.maps.LatLng(43.214050, 27.914733));

    var input = document.getElementById('inputAddress');
    var options = {
        bounds: defaultBounds,
        types: ['address']
    };

    autocomplete = new google.maps.places.Autocomplete(input, options);


    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var place = autocomplete.getPlace();
        console.log(place);
        console.log(place.geometry.location);


        if (place.formatted_address  === undefined) {
            document.getElementById('inputAddress').value = null;
            document.getElementById('url').value = place.url;
        }else{
            document.getElementById('inputAddress').value = place.formatted_address;
            document.getElementById('url').value = place.url;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
        }
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

    });

</script>