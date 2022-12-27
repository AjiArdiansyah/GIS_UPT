<div id="map" style="width: 100%; height: 600px;"></div>

<script>

var map = L.map('map').setView([-6.770664956358395, 111.7254219767461], 20);

	var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

//circle
var icon1 = L.icon({
    iconUrl: '<?= base_url('icon/gedung.png')?>',
    iconSize:     [30, 40], // size of the icon
});

L.marker([-6.770577614850306, 111.72542732661564],{
    icon: icon1
}).bindPopup("Informasi").addTo(map);

L.marker([-6.770491422823416, 111.72509080867889],{
    icon: icon1
}).bindPopup("Informasi").addTo(map);

L.circle([-6.770577614850306, 111.72542732661564],{
    color: 'red',
    radius: 10,
}).addTo(map);

L.circle([-6.770491422823416, 111.72509080867889],{
    color: 'yellow',
    radius: 10,
}).addTo(map);

</script>