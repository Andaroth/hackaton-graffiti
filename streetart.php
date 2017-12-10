<!DOCTYPE html>
<?php
  include("./php/models/config.php");
  include(C."session.php");

  $page = "streetart";
?>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="fr">
	<?php include(V."head.php"); ?>
	<body class="homepage">
		<div id="page-wrapper">

			<?php include(V."header.php"); ?>

			<!-- Carousel -->
				<section id="galerie" class="carousel">
					<div id="grider">

						<article>
							<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Pulvinar sagittis congue</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>
            
            <article>
							<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Pulvinar sagittis congue</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>
            
            <article>
							<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Pulvinar sagittis congue</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>
         
          </div>
      </section>

			<?php include(V."footer.php"); ?>
				

		</div>

		<?php include(V."jscript.php"); ?>

	</body>
</html>