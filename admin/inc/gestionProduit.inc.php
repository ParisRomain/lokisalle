<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
  <table>
    <tr>
      <td><b>ID produit </b></td>
      <td><b>Date arrivee </b></td>
      <td><b>Date depart </b></td>
      <td><b>ID salle </b></td>
      <td><b>Prix </b></td>
      <td><b>Etat </b></td>
      <td><b>Action </b></td>
    </tr>
    <?php echo getProduits(); ?>
  </table>

  <form action="../libs/services.php?action=reservation" method="post">

  	<div class="container">
   		<div class="row">
   			<section class="col-md-6">
          <label>Date d'arivée</label><br>
          <input type="text" name="arrive"id="datepicker"><br>
          <label>Date de départ</label><br>
          <input type="text" name="depart"id="datepicker"><br>
          <label>Salle</label><br>
          <label>Tarif</label><br>
          <input type="text" name="prix" placeholder="prix en €" required="required"><br>

    			<input type="submit" value="Inscription">
    		</section>
    	</div>
  	</div>
  </form>

  </body>
</html
