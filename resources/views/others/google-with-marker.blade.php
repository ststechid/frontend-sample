@extends ("layouts.blank")
@section("head")

    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

@endsection
@section("endbody")

    <script>
        var map;
        function initMap() {

            var center_position = {
                lat: -6.160847, lng: 106.730821
            };

            map = new google.maps.Map(document.getElementById('map'), {
                center: center_position,
                zoom: 15
            });

            // Create markers
            var marker = new google.maps.Marker({
                position: center_position,
                map: map,
                title: 'You are here'
            });

            // Assume data is from server
            // Get data from center_position some radius, from example n kms
            // The should only return position inside the radius
            var points = [
                { name: 'Surya Lestari', lat: -6.150600, lng: 106.730821 },
                { name: 'Mac Cafe', lat: -6.148600, lng: 106.728821 }
            ];

            for(var i = 0; i< points.length; i++){
                var marker = new google.maps.Marker({
                    position: { lat: points[i].lat, lng: points[i].lng },
                    map: map,
                    title: points[i].name
                });
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY') }}&callback=initMap"
            async defer></script>

@endsection
@section("content")
    <h2>Google Map With Markers</h2>

    <div id="map"></div>

@endsection