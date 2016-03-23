@extends('layouts.app')

@section('content')

    <div id="map" style="width: 700px; height: 300px;"></div>
    <script>
        function initMap() {
            var mapDiv = document.getElementById('map');
            var map = new google.maps.Map(mapDiv, {
                center: {lat: {{$podaci->LAT}}, lng: {{$podaci->LON}}},
                zoom: 8
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
            async defer></script>

    <div>
        <h2>Država: {{ $podaci->COUNTRY_NAME }}</h2>

        <h2>Grad: {{ $podaci->CITY_NAME }}</h2>
    </div>

@endsection