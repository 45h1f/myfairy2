@push('styles')
    <style>
        #map {width: 98%;margin:auto;height: 700px;background-color: grey;}
    </style>
@endpush

@push('scripts')
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {lat: Number("29.9757429"), lng: Number("31.2683837")};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 12, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <script defer
            src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_KEY')}}&callback=initMap">
    </script>
@endpush

<div id="map"></div>
