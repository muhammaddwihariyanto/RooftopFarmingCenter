<title>RFC - App | {{ $title }}</title>
@extends('partials.headerFooter')
@include('partials.sidebar')
@section('content')
    <style>
        #map {
            width: 100%;
            height: 500px;
            padding: 10px;
        }
    </style>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Denah Sensor</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Denah Sensor</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <!-- map Start-->
        <div class="card">
            <div class="card-body">

                <h5 class="card-title">Denah Sensor <span>by : Geographic information system </span></h5>
                <div id="map"></div>
            </div>
        </div>
        <!-- map Ends-->
        <!-- map script start-->
        <script>
            var map = L.map('map').setView([-6.308701, 106.635580], 30);

            var data1 = '1'
            /*===================================================
                                  Sensor Markers
            ===================================================*/
            var sensor1 = L.marker([-6.308718, 106.635554])
                .bindPopup('Nomor Sensor: ' + data1 + '<br>Jenis Sensor: Sensor LoRa<br>Status Sensor : Respon'),
                sensor2 = L.marker([-6.308734, 106.635565])
                .bindPopup('Nomor Sensor: <b>2</b><br>Jenis Sensor: Sensor LoRa<br>Status Sensor : Respon'),
                sensor3 = L.marker([-6.308754, 106.635516])
                .bindPopup('Nomor Sensor: <b>3</b><br>Jenis Sensor: Sensor LoRa<br>Status Sensor : Respon')
                sensor4 = L.marker([-6.308776, 106.635520])
                .bindPopup('Nomor Sensor: <b>3</b><br>Jenis Sensor: Sensor LoRa<br>Status Sensor : Respon')
            var sensorLora = L.layerGroup([sensor1, sensor2, sensor3, sensor4]);

            /*===================================================
                                  OSM  LAYER
            ===================================================*/
            var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            });
            osm.addTo(map);

            /*===================================================
                                TILE LAYER
            ===================================================*/

            var CartoDB_DarkMatter = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
                maxZoom: 30
            });
            CartoDB_DarkMatter.addTo(map);

            /*===================================================
                                GOOGLEMAPS LAYER
            ===================================================*/

            googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                maxZoom: 30,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
            });
            googleStreets.addTo(map);

            // Satelite Layer
            googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                maxZoom: 30,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
            });
            googleSat.addTo(map);

            /*===================================================
                            LAYER CONTROL
            ===================================================*/

<<<<<<< HEAD
      var overlayMaps = {
        "Sensor Nitrogen": sensorLora
      };
=======
            var baseLayers = {
                "Google Satellite": googleSat,
                "Google Street": googleStreets,
            };
>>>>>>> 758eef8f6c7ccada3bccfe13f9f113d6a8c54436

            var overlayMaps = {
                "Sensor LoRa": sensorLora
            };

            L.control.layers(baseLayers, overlayMaps).addTo(map);
        </script>
        <!-- map script end -->
    </main>
@endsection
