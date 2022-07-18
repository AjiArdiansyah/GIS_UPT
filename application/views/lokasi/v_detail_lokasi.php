<div class="row">
    <div class="col-sm-6">
    <div id="map" style="width: 100%; height: 500px;"></div>
</div>

<div class="col-sm-6">
   
    

    <table class="table table-bordered">
        <tr>
            <th>Nama Lokasi </th>
                <th>:</th>
                <td><?= $lokasi->nama_lokasi ?></td>
             </tr>
             <tr>
            <th>Latitude</th>
                <th>:</th>
                <td><?= $lokasi->latitude ?></td>
             </tr>
             <tr>
            <th>Longitude </th>
                <th>:</th>
                <td><?= $lokasi->longitude ?></td>
             </tr>
    </table>
    <a class="btn btn-success" href="<?= base_url('lokasi/index') ?>">Kembali</a>

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

    L.marker([<?= $lokasi->latitude ?>, <?= $lokasi->longitude ?>])
    .addTo(map)
    .bindPopup("<b><?= $lokasi->nama_lokasi ?></b><br>" +
            "Lat : <?= $lokasi->latitude ?><br>"+
            "Long : <?= $lokasi->longitude ?><br>"
            "<img width='200px' src='<?= base_url('gambar/' . $lokasi->gambar) ?>'><br><br>"
            ).openPopup();
   
</script>