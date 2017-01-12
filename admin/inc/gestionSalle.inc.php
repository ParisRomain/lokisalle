 <!-- Affichage en tableau de la liste de salles dejà enregistrées + FORM ajout de salle -->

 <!-- <form action="../libs/services.php?action=addSalle" method="post">
   <input type="text" name="titre" placeholder="nom de la salle">
   <input type="text" name="description" placeholder="description">
   <input type="file" name="photo">
   <select name="capacite">
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
   </select>
   <select name="categorie">
     <option value="reunion">réunion</option>
     <option value="formation">formation</option>
     <option value="seminaire">séminaire</option>
   </select>
   <select name="pays">
     <option value="france">France</option>
     <option value="Japon">Japon</option>
   </select>
   <select name="ville">
     <option value="paris">paris</option>
     <option value="lyon">lyon</option>
     <option value="marseille">marseille</option>
   </select>
   <input type="text" name="adresse" placeholder="Adresse">
   <input type="text" name="cp" placeholder="Code Postal">
   <input type="submit">
 </form> -->
 <!-- Affichage en tableau de la liste de salles dejà enregistrées + FORM ajout de salle -->

  <form action="../libs/services.php?action=addSalle" method="post">

 	<div class="container">
 		<div class="row">

 			<section class="col-md-6">
 	 			<label>Titre</label><br>
 	 				<input type="text" name="titre" placeholder="titre de la salle"><br>

 	 			<label>Description</label><br>
 	 				<textarea name="description" placeholder="Description de la salle"></textarea><br>

 	 			 <label>Photo</label><br>
 	 				<input type="image" name="photo" value="parcourir..">ajouter une photo<br>

 	  			<label>Capacité</label><br>
 	 				<?php //boucle pour afficher la capacité en menu 			deroulant
 					  // Variable qui ajoutera l'attribut selected 	de la 		liste déroulante
 					  $selected = '';
 					  // Parcours du tableau
 					  echo '<select name="capacite">',"\n";
 					  for($i=1; $i<=500; $i++)
 					  {
 					    // Affichage de la ligne
 					    echo "\t",'<option value="', $i ,'"', $selected ,'>'	, $i ,'</option>',"\n";
 					    // Remise à zéro de $selected
 					    $selected='';
 					  }
 					  echo '</select>',"\n";
 					?><br>

 				<label>Catégorie</label> <br>
 					<select name="categorie">
 						<option>bureau</option>
 						<option>formation</option>
 						<option>reunion</option>
 					</select><br>
 			</section>

 			<section class="col-md-6">
 				<label>Pays</label><br>
 					<select name="pays">
 						<option>France</option>
 					</select><br>

 				<label>Ville</label><br>
 					<select name="ville">
 						<option>Lyon</option>
 						<option>Paris</option>
 					</select><br>

 				<label>Adresse</label><br>
 					<textarea name="adresse" placeholder="Adresse de la salle"></textarea><br>

 				<label>Code Postal</label><br>
 					<input type="text" name="cp" placeholder="Code Postal de la salle"><br>

 				<input type="submit" value="enregistrer">
 			</section>
 		</div>

 	</div>

  </form>
