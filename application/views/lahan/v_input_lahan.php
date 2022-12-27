<div class="row">
    <div class="col-sm-8">
        <div id="map" style="width: 100%; height: 700px;"></div>
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
        //notifikasi gagal upload
        if (isset($error_upload)) {
            echo '<div class="alert alert-warning">'.$error_upload.'</div>';
        }


        echo form_open_multipart('lahan/input')
        ?>
        <div class="form-group">
            <label>Nama Lahan</label>
            <input class="form-control" name="nama_lahan">
        </div>
    

    
        <div class="form-group">
            <label>Pemilik</label>
            <input class="form-control" name="pemilik">
        </div>
    

    
        <div class="form-group">
            <label>Luas</label>
            <input class="form-control" name="luas">
        </div>
    

    
        <div class="form-group">
            <label>GeoJSON</label>
            <textarea name="geojson" rows="8" class="form-control" readonly></textarea>
        </div>

        <div class="form-group">
            <label>Warna</label>
            <input class="form-control" name="warna">
        </div>
    

    
        <div class="form-group">
            <label>Sertifikat</label>
            <input type="file" accept="application/pdf" class="form-control" name="sertifikat" required>
        </div>
    

        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        <button type="reset" class="btn btn-sm btn-warning">Reset</button>
    </div>

    <?php echo form_close(); ?>

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
	
        // FeatureGroup is to store editable layers
     var drawnItems = new L.FeatureGroup();
     map.addLayer(drawnItems);
     var drawControl = new L.Control.Draw({
         draw: {
            polygon : true,
            polyline : false,
            rectangle : false,
            circle : false,
            marker : false,
            circlemarker : false,
         },
         edit:{
            featureGroup: drawnItems
         }
     });
     map.addControl(drawControl);


     //create Draw
     map.on('draw:created', function(e) {
        var layer = e.layer;
        var feature = layer.feature = layer.feature || {};
        feature.type = feature.type || "Feature";
        var props = feature.properties = feature.properties || {};
        drawnItems.addLayer(layer);
        $("[name=geojson").html(JSON.stringify(drawnItems.toGeoJSON()));
     });


     
</script>