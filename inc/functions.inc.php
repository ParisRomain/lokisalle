 <!-- requete sql des salles
  photo, nom, prix, description, date -->

<?php

function getSalles() {
	global $connexion;

	$sql="SELECT * FROM salle INNER JOIN produit ON salle.id_salle=produit.id_salle";
	$req = $connexion->prepare($sql);
	$req->execute();
	$data = $req->fetchAll();

	return $data;
}



function getProduits() {
	global $connexion;
	$sql="SELECT * FROM salle INNER JOIN produit ON salle.id_salle=produit.id_salle";
	$req = $connexion->prepare($sql);

	$data = array();
	$req->execute($data);
	while ($resultat = $req->fetch()) {

		echo "<tr>";
			echo "<td>".$resultat['id_produit']."</td>";
			echo "<td>".$resultat['date_arrivee']."</td>";
			echo "<td>".$resultat['date_depart']."</td>";
			echo "<td>".$resultat['id_salle']."</td>";
			echo "<td>".$resultat['prix']."€"."</td>";
			echo "<td>".$resultat['etat']."</td>";
			echo "<td><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i></td>";
		echo "</tr>";
	}
}


function afficheSalles() {
	global $connexion;

	$sql="SELECT * FROM salle ";
	$req = $connexion->prepare($sql);

	$data = array ();
	$req->execute($data);


	while ($datas = $req->fetch()) {

		echo"<tr>";
			echo "<td>".$datas['id_salle']." "."</td>";
			echo "<td>".$datas['titre']." "."</td>";
			echo "<td>".$datas['description']." "."</td>";
			echo "<td>".$datas['photo']." "."</td>";
			echo "<td>".$datas['pays']." "."</td>";
			echo "<td>".$datas['ville']." "."</td>";
			echo "<td>".$datas['adresse']." "."</td>";
			echo "<td>".$datas['cp']." "."</td>";
			echo "<td>".$datas['capacite']." "."</td>";
			echo "<td>".$datas['categorie']." "."</td>";
			echo "<td><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i></td>";
		echo "</tr>";
	}
}


function afficheMembres() {
	global $connexion;

	$sql="SELECT * FROM membre ";
	$req = $connexion->prepare($sql);

	$data = array ();
	$req->execute($data);

	while ($datas = $req->fetch()) {

	echo"<tr>";
	echo "<td>".$datas['id_membre']." "."</td>";
	echo "<td>".$datas['pseudo']." "."</td>";
	echo "<td>".$datas['nom']." "."</td>";
	echo "<td>".$datas['prenom']." "."</td>";
	echo "<td>".$datas['email']." "."</td>";
	echo "<td>".$datas['civilite']." "."</td>";
	echo "<td>".$datas['statut']." "."</td>";
	echo "<td>".$datas['date_enregistrement']." "."</td>";
	echo "<td><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i></td>";
	echo "</tr>";
	}
}


function selectSalle() {
	global $connexion;

	$sql = "SELECT * FROM salle ORDER BY titre ASC";
	
	
	$req = $connexion->prepare($sql);

			try {
				$req->execute();
			}catch(Exception $e) {
				var_dump($e);
			}
			
			$html = "<select name='id' >";
			while($datas = $req->fetch()){

			$html .= "<option value='".$datas['id_salle']."'>".$datas['titre']." </option>";
			}
			$html .="</select>";
			echo $html;

}