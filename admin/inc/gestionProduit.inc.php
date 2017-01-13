<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<h3>Nos produits </h3>
  <div class="container">
    <div class="row">
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
    </div>
  </div>

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
