<!DOCTYPE html>
<?php
  include("./php/models/config.php");
  include(C."session.php");
  include("./php/models/image.php");

  $page = "home";
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

			<?php
        include(V."header.php");

		    include(V."main.php");

		    /*include(V."banner.php");

		    include(V."carousel.php");

		    include(V."features.php"); */

		    include(V."footer.php");

      ?>

		</div>

		<?php include(V."jscript.php"); ?>

	</body>
</html>
