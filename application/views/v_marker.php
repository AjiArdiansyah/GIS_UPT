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
		zoom: 19,
		layers: [peta2],
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

		var icon3 = L.icon({
    iconUrl: '<?= base_url('icon/mck.png')?>',
    iconSize:     [30, 50], // size of the icon
});

		var icon4 = L.icon({
    iconUrl: '<?= base_url('icon/RTLH.png')?>',
    iconSize:     [30, 50], // size of the icon
});

		var icon5 = L.icon({
    iconUrl: '<?= base_url('icon/gapura.png')?>',
    iconSize:     [30, 50], // size of the icon
});

		var icon6 = L.icon({
    iconUrl: '<?= base_url('icon/parkir.jpg')?>',
    iconSize:     [30, 50], // size of the icon
});

		var icon7 = L.icon({
    iconUrl: '<?= base_url('icon/mushola.png')?>',
    iconSize:     [55, 50], // size of the icon
});


	//marker
    L.marker([-6.770679336608596, 111.72541081988405],{icon:icon1}).bindPopup("<b>KANTOR UPT PPP BULU TUBAN </br><br> "
     + "<img src='<?= base_url('foto/KANTOR UPT PPP BULU TUBAN.jpg')?>' width='300px'>").addTo(map);

    L.marker([-6.770231867913587, 111.72540966110954],{icon:icon1}).bindPopup("<b>KANTOR TPI BULU</br><br>"
     + "<img src='<?= base_url('foto/KANTOR TPI.jpg')?>' width='300px'>").addTo(map);

	L.marker([-6.771142785937426, 111.72530388338042],{icon:icon5}).bindPopup("<b>GERBANG UPT</br><br>"
    + "<img src='<?= base_url('foto/GERBANG UPT.jpg')?>' width='300px'>").addTo(map);

	L.marker([-6.770450275324344, 111.72419218156901],{icon:icon1}).bindPopup("<b>GEDUNG SERBAGUNA</br><br>"
    + "<img src='<?= base_url('foto/GEDUNG SERBAGUNA.jpg')?>' width='300px'>").addTo(map);

	L.marker([-6.770466256317438, 111.72608527974309],{icon:icon3}).bindPopup("<b>GUDANG PENGEPAKAN IKAN BESAR</br><br>"
    + "<img src='<?= base_url('foto/GUDANG PENGEPAKAN IKAN BESAR.jpg')?>' width='300px'>").addTo(map);

	L.marker([-6.770631393526329, 111.7260205512683],{icon:icon3}).bindPopup("<b>GUDANG PENGEPAKAN IKAN KECIL</br><br>"
    + "<img src='<?= base_url('foto/GUDANG PENGEPAKAN IKAN KECIL.jpg')?>' width='300px'>").addTo(map);

	L.marker([-6.770109346641349, 111.72459436526933],{icon:icon3}).bindPopup("<b>GUDANG PENYIMPANAN BARANG</br><br>"
    + "<img src='<?= base_url('foto/GUDANG PENYIMPANAN BARANG.jpg')?>' width='300px'>").addTo(map);

	L.marker([-6.77085512779883, 111.72600488593143],{icon:icon3}).bindPopup("<b>GUDANG PENYIMPANAN ES TIMUR</br><br>"
    + "<img src='<?= base_url('foto/GUDANG PENYIMPANAN ES BAGIAN TIMUR.jpg')?>' width='300px'>").addTo(map);

	L.marker([-6.770492891390484, 111.72478200095851],{icon:icon7}).bindPopup("<b>MUSHOLA</br><br>"
    + "<img src='<?= base_url('foto/MUSHOLA.jpg')?>' width='300px'>").addTo(map);

	L.marker([-6.770519526425948, 111.72491621121101],{icon:icon4}).bindPopup("<b>POS KAMLADU</br><br>"
    + "<img src='<?= base_url('foto/POS KAMLADU.jpg')?>' width='300px'>").addTo(map);



	 
</script>