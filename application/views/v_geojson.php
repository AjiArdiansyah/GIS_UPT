<div id="map" style="width: 100%; height: 600px;"></div>

<script>
var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	});

    

    var map = L.map('map', {
		center: [-6.770664956358395, 111.7254219767461],
		zoom: 17,
		layers: [peta2],
	});

    var baseLayers = {
		'Default 1': peta1,
		'Satelite 2': peta2,
        'Street 3': peta3,
        'Dark 4': peta4,
    };
        var layerControl = L.control.layers(baseLayers).addTo(map);
	
    //geojson aceh
    $.getJSON("<?= base_url('provinsi/11.geojson')?>", function(data){
        geoLayer = L.geoJson(data, {
            style: function(feature) {
                return {
                    color: 'red',
                    fillOpacity: 1.0,
                }
            }
        }).addTo(map);
        //menampilkan informasi saat wilayah di click
        geoLayer.eachLayer(function(layer){
            layer.bindPopup("<b>UPT </br><br> "+ "Pelabuhan perikanan pantai<br>"
     + "<img src='<?= base_url('foto/download.jpg')?>' width='300px'>")
        })
    });

    //geojson sumut
    $.getJSON("<?= base_url('provinsi/12.geojson')?>", function(data){
        geoLayer = L.geoJson(data, {
            style: function(feature) {
                return {
                    color: 'yellow',
                }
            }
        }).addTo(map);
    });

    //geojson sumbar
    $.getJSON("<?= base_url('provinsi/13.geojson')?>", function(data){
        geoLayer = L.geoJson(data).addTo(map);
    });

    //geojson jambi
    $.getJSON("<?= base_url('provinsi/14.geojson')?>", function(data){
        geoLayer = L.geoJson(data).addTo(map);
    });

</script>