<div id="map" style="width: 100%; height: 400px;"></div>

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
		zoom: 14,
		layers: [peta1],
	});

    var baseLayers = {
		'Default 1': peta1,
		'Satelite 2': peta2,
        'Street 3': peta3,
        'Dark 4': peta4,
    };
        var layerControl = L.control.layers(baseLayers).addTo(map);

        var icon1 = L.icon({
    iconUrl: '<?= base_url('icon/gedung.png')?>',
    iconSize:     [30, 50], // size of the icon
});

var icon2 = L.icon({
    iconUrl: '<?= base_url('icon/taman.png')?>',
    iconSize:     [30, 50], // size of the icon
});

	//marker
    L.marker([-6.770664956358395, 111.7254219767461],{icon:icon1}).bindPopup("<b>UPT </br><br> "+ "Pelabuhan perikanan pantai<br>"
     + "<img src='<?= base_url('foto/download.jpg')?>' width='150px'>").addTo(map);

    L.marker([-6.770483838104275, 111.72491772150086],{icon:icon2}).addTo(map);



</script>