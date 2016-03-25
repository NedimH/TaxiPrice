@extends('layouts.app')

@section('content')

    <div>
        <h2>Država: {{ $podaci->COUNTRY_NAME }}</h2>

        <h2>Grad: {{ $podaci->CITY_NAME }}</h2>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF6QzC9iuvjUMH43oAZnBj_BgY-s0uYwM&libraries=places&callback=initMap" async defer></script>

    <script>
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        function initMap() {
            var origin_place_id = null;
            var destination_place_id = null;
            var travel_mode = google.maps.TravelMode.DRIVING;
            var map = new google.maps.Map(document.getElementById('map'), {
                mapTypeControl: false,
                center: {lat:{{$podaci->LAT}}, lng: {{$podaci->LON}}},
                zoom: 13
            });
            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;
            directionsDisplay.setMap(map);

            var origin_input = document.getElementById('origin-input');
            var destination_input = document.getElementById('destination-input');
            var modes = document.getElementById('mode-selector');

            var origin_autocomplete = new google.maps.places.Autocomplete(origin_input);
            origin_autocomplete.bindTo('bounds', map);
            var destination_autocomplete = new google.maps.places.Autocomplete(destination_input);
            destination_autocomplete.bindTo('bounds', map);

            function expandViewportToFitPlace(map, place) {
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
            }

            origin_autocomplete.addListener('place_changed', function() {
                var place = origin_autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }
                expandViewportToFitPlace(map, place);

                // If the place has a geometry, store its place ID and route if we have
                // the other place ID
                origin_place_id = place.place_id;
                route(origin_place_id, destination_place_id, travel_mode,
                        directionsService, directionsDisplay);
            });

            destination_autocomplete.addListener('place_changed', function() {
                var place = destination_autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }
                expandViewportToFitPlace(map, place);

                // If the place has a geometry, store its place ID and route if we have
                // the other place ID
                destination_place_id = place.place_id;
                route(origin_place_id, destination_place_id, travel_mode,
                        directionsService, directionsDisplay);
            });

            function route(origin_place_id, destination_place_id, travel_mode, directionsService, directionsDisplay) {
                if (!origin_place_id || !destination_place_id) {
                    return;
                }
                directionsService.route({
                    origin: {'placeId': origin_place_id},
                    destination: {'placeId': destination_place_id},
                    travelMode: travel_mode
                }, function(response, status) {
                    if (status === google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });
            }
        }
    </script>

@endsection