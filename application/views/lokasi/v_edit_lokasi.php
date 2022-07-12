<div class="row">
    <div class="col-sm-6">
    <div id="map" style="width: 100%; height: 500px;"></div>
</div>

<div class="col-sm-4">
    <?php
    //notifikasi pesan gagal input
    echo validation_errors('<div class="alert alert-danger">', '<div/>');

    //notifikasi pesan data berhasil disimpan
    if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('pesan');
        echo '</div>';
    }
    ?>
    <?php echo form_open ('lokasi/edit/' . $lokasi->id_lokasi)?>

    <div class="form-group">
            <label>Nama Lokasi</label>
            <input value="<?= $lokasi->nama_lokasi ?>" class="form-control" name="nama_lokasi" placeholder="Nama Lokasi">
        </div>

    <div class="form-group">
            <label>Latitude</label>
            <input value="<?= $lokasi->latitude ?>" class="form-control" name="latitude" id="Latitude" placeholder="Latitude">
        </div>

        <div class="form-group">
            <label>Longitude</label>
            <input value="<?= $lokasi->longitude ?>" class="form-control" name="longitude" id="Longitude" placeholder="Longitude">
        </div>

        <button type="submit" class="btn btn-primary"> Simpan </button>
        <a href="<?= base_url("lokasi/index") ?>" class="btn btn-warning"> Kembali </a>
    <?php echo form_close() ?>
</div>

</div>


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
		center: [<?= $lokasi->latitude ?>, <?= $lokasi->longitude ?>],
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
	

    //get coordinat
    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");

    var curLocation = [<?= $lokasi->latitude ?>, <?= $lokasi->longitude ?>];

    map.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
        draggable: 'true',
    });

    //mengambil coordinat saat marker di geser/pindah
    marker.on('dragend', function(e) {
        var position = marker.getLating();
        marker.setLating(position, {
            curLocation
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng);
    });

    //mengambil coordinat saat maps diklik
    map.on("click", function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if (!marker) {
            marker = L.marker(e.latlng).addTo(map);
        } else {
            marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
    });

    map.addLayer(marker);
</script>