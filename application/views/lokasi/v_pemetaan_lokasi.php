<?php
//notifikasi pesan data berhasil disimpan
if ($this->session->flashdata('pesan')) {
	echo '<div class="alert alert-danger">';
	echo $this->session->flashdata('pesan');
	echo '</div>';
}
?>
<div id="map" style="width: 100%; height: 500px;"></div>

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

    <?php foreach ($lokasi as $key => $value) { ?>
        L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>])
        .bindPopup("<b><?= $value->nama_lokasi ?></b><br>" +
            "Lat : <?= $value->latitude ?><br>"+
            "Long : <?= $value->longitude ?><br><br>"+
			"<img width='200px' src='<?= base_url('gambar/' . $value->gambar) ?>'><br><br>"+
			"<div class='text-center'>"+
			"<a class='btn btn-xs btn-success'"+
			"href='<?= base_url('lokasi/edit/' . $value->id_lokasi) ?>'>Edit</a>     "+
			"<a class='btn btn-xs btn-warning'"+
			"href='<?= base_url('lokasi/detail/' . $value->id_lokasi) ?>'>Detail</a>     "+
			"<a onclick='return confirm()'class='btn btn-xs btn-danger'"+
			"href='<?= base_url('lokasi/delete/' . $value->id_lokasi) ?>'>Delete</a>"+
			"</div>")
        .addTo(map);
    <?php } ?>
</script>