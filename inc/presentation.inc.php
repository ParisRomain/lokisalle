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
    <link rel="stylesheet" href="../assets/css/style.css">

  </head>

  <body>
    <header>
      <?php
      include_once('./header.inc.php');
       ?>
    </header>
    <main>
      
      <h1>Qui Sommes Nous?</h1>
      <h3>LOKISALLE est une société proposant la location de salle de réunion à ses client</h3>
      <ul>
        <li><b>Raison Social: </b>LOKISALLE</li>
        <li><b>Adresse: </b>300 Boulevard de Vaugirard, 75015 Paris, France</li>
        <li><b>Mission: </b>La société est spécialisée dans la location de salle pour l'organisation de réunions par les entreprises ou les particuliers.</li>
        <li><b>Périmètre géographique de l'activité: </b> La société dispose de salles de réunion à Paris, Lyon et Marseille.</li>
        <li><b>Objectifs: </b>L'enjeu est D'attribuer plusieurs périodes de location sur chacune des salles, ce qui nous donnera plusieurs produits.</li>
      </ul>
      <h3>Explications :</h3>
      <table>
        <tr>
          <td>Salles</td>
          <td>Produits</td>
          <td>Descriiption</td>
        </tr>
        <tr>
          <td><?php  ?></td>
          <td><?php  ?></td>
          <td><?php  ?></td>
        </tr>
      </table>
    </main>

    <footer class="container">
      <?php
      include_once('inc/footer.inc.php');
       ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
