<head>
    <?php
      switch($page) {
        case "artist":
          $pagetitle = " - Les artistes";
          break;
        case "streetart":
            $pagetitle = " - Les rues de Bruxelles";
          break;
        default:
          $pagetitle = "";
          break;
      }
    ?>
		<title><?= $site["title"].$pagetitle ?></title>
		<meta name="description" content="<?= $site["description"] ?>">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="assets/css/self.css">
		<link rel="stylesheet" href="../../assets/css/remodal-default-theme.css"/>
	  <link rel="stylesheet" href="../../assets/css/remodal.css"/>
	</head>
	
