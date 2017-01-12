 <!-- requete sql des salles
  photo, nom, prix, description, date -->

<?php

function getSalles() {
	global $connexion;

	$sql="SELECT titre, description, photo, prix, date_arrivee, date_depart FROM salle INNER JOIN produit ON salle.id_salle=produit.id_salle";
	$req = $connexion->prepare($sql);
	$req->execute();
	$data = $req->fetchAll();

	return $data;
}

/* affichage des categories en menu deroulant*/
/*function selectCat($valueSelected="") {
	global $connexion;

	$sql = "SELECT * FROM salle ORDER BY categorie ASC";


	$req = $connexion->prepare($sql);


			try {
				$req->execute();
			}catch(Exception $e) {
				var_dump($e);
			}

			$html = "<select name='categorie' >";
			while($datas = $req->fetch()){
			$selected=($datas['categorie']==$valueSelected)? "selected" : "";
			$html .= "<option value='".$datas['categorie']."' ".$selected.">".$datas['categorie']." </option>";
			}
			$html .="</select>";
			echo $html;
}
*/
function getSalles2() {
	global $connexion;
	$sql="SELECT id_salle, id_produit titre, description, photo, prix, date_arrivee, date_depart, etat FROM salle, produit INNER JOIN produit ON salle.id_salle=produit.id_salle";
	$req = $connexion->prepare($sql);
	$req->execute();
	
	while ($resultat = $req->fetch()) {
		echo "<tr>";
			echo "<td>".$resultat['id_produit']."</td>";
			echo "<td>".$resultat['date_arrivee']."</td>";
			echo "<td>".$resultat['date_depart']."</td>";
			echo "<td>".$resultat['id_salle']."</td>";
			echo "<td>".$resultat['prix']."€"."</td>";
			echo "<td>".$resultat['etat']."</td>";
		echo "</tr>";
	}
}
