<?php
//notifikasi pesan data berhasil disimpan
        if ($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success">';
            echo $this->session->flashdata('pesan');
            echo '</div>';
        }
?>
<div id="map" style="width: 100%; height: 700px;"></div>

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
	
	//pemetaan lahan
	<?php foreach ($lahan as $key => $value) { ?>
		L.geoJSON(<?= $value->geojson ?>,{
			color: 'grey',
			fillColor: '<?=$value->warna ?>',
            fillOpacity: 1.0,
		}).bindPopup("Nama Lahan : <? $value->nama_lahan ?><br>" +
			"Pemilik : <? $value->pemilik ?><br>" +
			"Luas : <? $value->Luas ?><br>" +
			"Sertifikat : <a target='_blank' href='<?= base_url('sertifikat/'.$value->sertifikat) ?>'>Lihat<br>"+
			"<div class='text-center'>"+
			"<a class='btn btn-xs btn-warning'"+
			"href='<?= base_url('lahan/edit/' . $value->id_lahan) ?>'>Edit</a>     "+
			"<a class='btn btn-xs btn-danger' onClick='return confirm()'"+
			"href='<?= base_url('lahan/delete/' . $value->id_lahan) ?>'>Delete</a>     "+     
			"</div>")
		.addTo(map);
	<?php } ?>
</script>