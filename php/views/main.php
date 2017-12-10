
 <?php  ?>

 
 <!-- Main -->
  <div id="map"></div>
  <div id="getmap"></div>
	<script>


		var map;
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				zoom: 16,
				center: new google.maps.LatLng(50.850346, 4.351721),
				mapTypeId: 'roadmap'
			});

			var iconBase = 'images/ico/';
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
					name:'Tintin Escaler',
					url:'./uploads/Tintin.jpg',
					descritpion:'Dans le centre, vous êtes sûrement déjà passé devant une fresque de Tintin. Connu dans les quatre coins du monde, le détective belge s’installe sur les murs de la capitale. Cette peinture murale est en fait une vignette de L’affaire Tournesol qui date de 1955.',
					id:'1'

				},{
					position: new google.maps.LatLng(50.837738, 4.342003),
					type: 'bd',
					name:'Le chat',
					url:'	./uploads/lechat.jpg',
					descritpion:'Fresque de Gelucke',
					id:'3'
				},
        {
					position: new google.maps.LatLng(50.825017, 4.281840),
					type: 'graff',
					name:'Dzia, la Baleine',
					url:'./uploads/balaine dezia_resto.jpg',
					descritpion:'Si vous voyez des lignes abstraites et géométriques qui parcourent le corps d’un animal, c’est que Dzia Krank est passé par là. Des fresques animalières très colorées envahissent les rues de Bruxelles. Outre ses talents d’artiste, il est également le fondateur du magazine Krank qui met en avant les street-artist.',
					id:'4'
				}
			];
      
      /*<?php 

      /*for ($i==0;$i<$data.length();$i++) {
        echo $data[$i]['lat'];
      }*/
      /*$i=0;
      $len=count($data);
        echo"var features=[";
      forEach($data as $champImage){
      $lat = floatval($champImage['lat']);
        $long = floatval($champImage['long']);
      echo "{
					position: new google.maps.LatLng(".$lat.",".$long."),
					type: ".$champImage['type'].",
					name:".$champImage['title'].",
					url:".$champImage['url'].",
					descritpion:".$champImage['description'].",
					id:".$champImage['id']."

				}";
        if($i!=$len-1){
          echo",";
          
        }
        $i++;
        
  
      }; 
        echo"];";*/
      ?>
      */

			// Create markers.
			function modal(feature){
				document.querySelector("#getmap").innerHTML = '<div class="remodal" data-remodal-id='+feature.id+'><div><button id="remodalclose" data-remodal-action="close" onclick="closeElem();">&times;</button><h1>'+feature.name+'</h1><p>'+feature.descritpion+'</p><img id="previewimg" style="width:100;" src="'+feature.url+'" alt=""><button data-remodal-action="cancel" class="remodal-cancel">Cancel</button><button data-remodal-action="confirm" class="remodal-confirm">OK</button></div></div>';
			}

			features.forEach(function(feature) {


				var marker = new google.maps.Marker({
					position: feature.position,
					icon: icons[feature.type].icon,
					map: map
				});

				marker.addListener('click', ()=>modal(feature),false);



        
		});
	}
	</script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt_zMT2EJuzj0cUnHZ_BHX7DqB9RTU2n8&callback=initMap">
	</script>
	<!-- <script src="../../assets/js/remodal.js"></script> -->



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
