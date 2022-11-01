<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/map.css">
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
  </head>
  <body>
  <div class="container mt-3">
    <h1 class="card-name">{{ $mapSpot[0]['spots_name'] }}</h1>
  </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-name card-header">Map</div>
                        <div id="mapid"></div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
  <script>
    var map = L.map('mapid', {
    center: [35.66572, 139.73100],
    zoom: 17,
    });
    var tileLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© <a href="http://osm.org/copyright">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
    });
    tileLayer.addTo(map);
    var features = [];
    var place = [{
    "name": "東京ミッドタウン",
    "lat": "35.66572",
    "long": "139.73100"
    }, {
    "name": "サントリー美術館",
    "lat": "35.6662186",
    "long": "139.7303961"
    }, ]
    // GeoJSON形式で複数個のマーカーを設定する
    for (var i = 0; i < place.length; i++) {
    features.push({ 
        "type": "Feature",
        "properties": {
        "name": place[i].name
        },
        "geometry": {
        "type": "Point",
        "coordinates": [place[i].long, place[i].lat]
        }
    });
    }
    L.geoJson(features, {
    onEachFeature: function(features, layer) {
        if (features.properties && features.properties.name) {
        layer.bindPopup(features.properties.name);
        }
    }
    }).addTo(map);
  </script>
</html>