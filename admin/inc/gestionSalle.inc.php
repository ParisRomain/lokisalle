 <!-- Affichage en tableau de la liste de salles dejà enregistrées + FORM ajout de salle -->

 <form>
 	<label>Titre</label><br>
 		<input type="text" name="titre" placeholder="titre de la salle"><br>
 	<label>Description</label><br>
 		<textarea placeholder="Description de la salle"></textarea>
 	 <label>Photo</label><br>
 		<input type="image" name="titre" value="parcourir.."> ajouter une photo<br>
  	<label>Capacité</label><br>
 		<?php //boucle pour afficher la capacité en menu deroulant
		  // Variable qui ajoutera l'attribut selected de la liste déroulante
		  $selected = '';
		 
		  // Parcours du tableau
		  echo '<select name="annees">',"\n";
		  for($i=1; $i<=500; $i++)
		  {
		    // Affichage de la ligne
		    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
		    // Remise à zéro de $selected
		    $selected='';
		  }
		  echo '</select>',"\n";
		?><br>
	<label>Catégorie</label> <br>
		<select>
			<option>bureau</option>
			<option>formation</option>
			<option>reunion</option>
		</select>




 </form>