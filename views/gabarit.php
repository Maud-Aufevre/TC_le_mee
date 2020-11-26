<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/public.css">
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <title>TC le Mée sur Seine</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="./assets/js/public.js"></script> -->
  </head>
  <body>
    <header>
      <nav>
      <a href="./">
        <div>
          <img src="./assets/images/logo-tc-le-mee-2.png" alt="logo TC le Mée">
        </div>
        </a>
        <ul>
          <li class="navItem">
            <a href="#">le club <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
            <div class="dropdown">
                <ul>
                  <li><a href="index.php?action=installations">nos installations</a></li>
                  <!-- <li><a href="#">l'histoire du club</a></li> -->
                  <li><a href="index.php?action=bureau">le bureau</a></li>
                </ul>
            </div>
          </li>

          <li class="navItem">
            <a href="#">enseignement <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
            <div class="dropdown">
                <ul>
                  <li><a href="index.php?action=dir">le mot du directeur sportif</a></li>
                  <li><a href="index.php?action=enseignement">l'équipe pédagogique</a></li>
                </ul>
            </div>
          </li>

          <li class="navItem"><a href="index.php?action=adh">adhésions</a></li>
          <li class="navItem">
            <a href="#">compétition <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
            <div class="dropdown">
                <ul>
                  <li><a href="index.php?action=equipesJ">les équipes jeunes</a></li>
                  <li><a href="index.php?action=equipesA">les équipes adultes</a></li>
                  <li><a href="index.php?action=tournois_club">les tournois du club</a></li>
                </ul>
            </div>
          </li>

          <li class="navItem"><a href="index.php?action=actualites">actus</a></li>

          <li class="navItem"><a href="index.php?action=contact">contact</a></li>

          
        </ul>

        <div id="iconResponsive"><a href="javascript:void(0);">

          <i class="fa fa-bars fa-2x" id="barres"></i>
          <i class="fa fa-window-close fa-2x" aria-hidden="true" id="croix"></i>

        </a></div>

      </nav>
    </header>

    <main>    
      <?= $content; ?>
    </main>

    <footer>
      <div id="footer">
        <div>
          <h4>Contact</h4>
          <p>335, avenue du Vercors <br/>77350 Le Mée sur Seine</p>
          <p>tel: 01 64 37 66 98</p>
          <p><a href="mailto:contact@tc-le-mee.fr">Email: contact@tc-le-mee.fr</a></p>
        </div>
        <div>
          <a href="./"><img src="./assets/images/logo-tc-le-mee-2.png" alt="logo TC le Mée"></a>
        </div>
        <div>
          <h4>Retrouvez-nous sur...</h4>
          <a href="https://fr-fr.facebook.com/TENNISLEMEE/"><img class="reseaux" src="./assets/images/facebook.png" alt="logo TC le Mée"></a>
          <a href="https://fr-fr.facebook.com/TENNISLEMEE/"><img class="reseaux" src="./assets/images/instagram.png" alt="logo TC le Mée"></a>
        </div>
      </div>
      <div id="mentions">
        <p>Réalisé par Maud Aufèvre</p>
        <p>Copyright &copy; 2020 - Tous droits réservés</p>
        <p><a href="#">Mentions légales</a></p>
      </div>
    </footer>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/public1.js"></script>
</body>
</html>