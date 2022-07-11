<div id="map" style="width: 100%; height: 500px;"></div>

<script>

var map = L.map('map').setView([-6.770664956358395, 111.7254219767461], 20);

	var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

    //polygon
    L.polygon([
        [-6.770895607927965, 111.72573267016831],
        [-6.770322236898361, 111.72584093223506],
        [-6.770097715027063, 111.72523012588458],
        [-6.7706740300078, 111.72504425830091],

    ]).addTo(map);

</script>