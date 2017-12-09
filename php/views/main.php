<!-- Main -->

<html>
<head>
	<title>Custom Markers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<style>
		/* Always set the map height explicitly to define the size of the div
		 * element that contains the map. */
		#map {
			height: 100vh;
		}
		/* Optional: Makes the sample page fill the window. */
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
	</style>
	<link rel="stylesheet" href="../../assets/css/remodal-default-theme.css"/>
	<link rel="stylesheet" href="../../assets/css/remodal.css"/>
</head>
<body>
	<div id="map"></div>
	<script>


		var map;
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				zoom: 16,
				center: new google.maps.LatLng(50.850346, 4.351721),
				mapTypeId: 'roadmap'
			});

			var iconBase = '../../images/ico/';
			var icons = {
				graff: {
					icon: iconBase+'paint.png'
				},
				bd: {
					icon:iconBase+'paintbrush.png'
				}
			};

			var features = [
				{
					position: new google.maps.LatLng(50.845409, 4.350503),
					type: 'bd',
					name:'tintin',
					url:'',
					descritpion:'',
					id:''

				}, {
					position: new google.maps.LatLng(50.846520, 4.350350),
					type: 'bd',
					name:'le passage',
					url:'',
					descritpion:'',
					id:''
				}, {
					position: new google.maps.LatLng(50.847814, 4.361705),
					type: 'bd',
					name:'ta maman',
					url:'',
					descritpion:'',
					id:''
				}
			];

			// Create markers.
			function modal(feature){
				document.write('<div class="remodal" data-remodal-id='+feature.id+'><button data-remodal-action="close" class="remodal-close"></button><h1>'+feature.name+'</h1><p>'+feature.descritpion+'</p><img style="width:100;" src='+feature.url+'" alt=""><button data-remodal-action="cancel" class="remodal-cancel">Cancel</button><button data-remodal-action="confirm" class="remodal-confirm">OK</button></div>')
			}
			features.forEach(function(feature) {


				var marker = new google.maps.Marker({
					position: feature.position,
					icon: icons[feature.type].icon,
					map: map
				});

				marker.addListener('click', (feature)=>modal(feature));




		});
	}
	</script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt_zMT2EJuzj0cUnHZ_BHX7DqB9RTU2n8&callback=initMap">
	</script>
	<!-- <script src="../../assets/js/remodal.js"></script> -->
</body>
</html>
-->



				<!-- <div class="wrapper style2">

					<article id="main" class="container special">

						<header>
							<h2><a href="#">Sed massa imperdiet magnis</a></h2>
							<p>
								Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
								pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
							</p>
						</header>
						<p>
							Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
							posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
							sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
							mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
							lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
							consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
							interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
							natoque aenean scelerisque.
						</p>
						<footer>
							<a href="#" class="button">Continue Reading</a>
						</footer>
					</article>

				</div> -->
