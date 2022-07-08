<div id="map" style="width: 100%; height: 500px;"></div>

<script>

var map = L.map('map').setView([-6.770664956358395, 111.7254219767461], 20);

	var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

</script>