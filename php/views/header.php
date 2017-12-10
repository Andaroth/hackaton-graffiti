<!-- Header -->
      <div id="header" <?php if($page!="home"){echo'class="nohome"';} ?>>

        <!-- Inner -->
          <div class="inner" <?php if($page=="home"){echo'id="homeinner"';} ?>>
          <?php switch($page) {
            
            case "home": ?>
            <header>
              <h1><a href="index.php" id="logo"><?= $site["title"] ?></a></h1>
              <hr />
              <p><?= $site["description"] ?></p>
            </header>
            <footer>
              <a id="visitbtn" href="#map" class="button circled scrolly">Découvrez</a>
            </footer>
            <?php break;
            // Page "Artiste"
            case "artist": ?>
            <header>
              <h1>Artiste</h1>
            </header>
            <?php break; 
            // Page "Street art"
            case "streetart": ?>
            <header>
              <h1>L'art de rue</h1>
            </header>
            <?php break; 
            // page "Vos découvertes"
            case "discover": ?>
            <header>
              <h1>Découvrir</h1>
            </header>
            <?php break; 
            // Autres
            default: ?>
            <header>
              <h1>Page</h1>
            </header>
            <?php break; } ?>
          </div>
          <?php if ($page == "home") { ?>
          <div class="bgvideo">
            <!--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/nwYyM39vSX8?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;loop=1&amp;volume=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>-->
            <video width="100%" height="100%" autoplay loop>
              <source src="./assets/video/video_graff.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video> 
          </div>
          <?php } ?>

        <!-- Nav -->
          <nav id="nav">
            <ul>
              <li>
                <a href="./index.php">Accueil</a>
                <ul>
                  <li><a href="./index.php#map">La carte</a></li>
                  <li><a href="#">Faire une recherche</a></li>
                </ul>
              </li>
              <li>
                <a href="./streetart.php">L'art en rue</a>
                <ul>
                  <li><a href="./streetart.php#">Les parcours</a></li>
                  <li><a href="./streetart.php#galerie">Galerie photos</a></li>
                  <!--<li><a href="./streetart.php#videos">Nos vidéos et métrages</a></li>-->
                </ul>
              </li>
              <li><a href="./artist.php">Les artistes</a></li>
              <li>
                <a href="./discover.php">Vos découvertes</a>
                <!--<ul>
                  <li><a href="./discover.php#slider">Découvrez la galerie</a></li>
                  <li><a href="./discover.php#send">Envoyez vos photos</a></li>
                </ul>-->
              </li>
            </ul>
          </nav>

      </div>