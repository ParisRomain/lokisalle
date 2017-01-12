<form action="../libs/services.php?action=inscription" method="post">
  	
	<div class="container">
 		<div class="row">
 			<section class="col-md-6">
 				<label>Pseudo</label><br>
  				<input type="text" name="pseudo" placeholder="Votre pseudo" required="required"><br>

  				<label>Mot de passe</label><br>
  				<input type="password" name="mdp" placeholder="Votre mot de passe" required="	required"><br>

  				<label>Nom</label><br>
  				<input type="text" name="nom" placeholder="Votre Nom" required	="required"><br>

  				<label>Prénom</label><br>
  				<input type="text" name="prenom" placeholder="Votre Prénom" required="required"><br>
  			</section>

  			<section class="col-md-6">
  				<label>E-mail</label><br>
  				<input type="email" name="email" placeholder="Votre Email" 	required="required"><br>

  				<label>Genre</label><br>
  				<select name="sexe" required="required">
  				  <option value="Femme">Femme</option>
  				  <option value="Homme">Homme</option>
  				</select><br>

  				<input type="submit" value="Inscription">
  			</section>
  		</div>
	</div>
</form>