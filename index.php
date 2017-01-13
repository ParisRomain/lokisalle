<?php
 require_once('inc/init.inc.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lokisalle</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">



  </head>

  <body>
    <header>
      <?php
      include_once('inc/header.inc.php');
       ?>
    </header>
    <main classe="container">
      <?php
      // On appelle la Vue correspondant à la page demandée
      if (!empty($_GET['page'])) { // Si l'utilisateur cherche à atteindre une page...
        if (file_exists('./inc/' . $_GET['page'] . '.inc.php')) { // On vérifie si elle existe : si oui, on l'inclut
          include('./inc/' . $_GET['page'] . '.inc.php');
        } else { // Sinon, on inclut la page erreur 404
          include('./inc/404.inc.php');
        }
      } else { // Sinon, c'est que l'utilisateur est sur la page d'accueil
        include('./inc/main.inc.php');
      }
    ?>
    
    </main>

    <footer class="container">
      <?php
      include_once('inc/footer.inc.php');
       ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
