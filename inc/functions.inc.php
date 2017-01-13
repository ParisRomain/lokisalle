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



function getProduits() {
	global $connexion;
	$sql="SELECT id_salle, id_produit titre, description, photo, prix, date_arrivee, date_depart, etat FROM salle, produit INNER JOIN produit ON salle.id_salle=produit.id_salle";
	$req = $connexion->prepare($sql);

	$data = array();
	$req->execute($data);
	$resultat = $req->fetch();

		echo "<tr>";
			echo "<td>".$resultat['id_produit']."</td>";
			echo "<td>".$resultat['date_arrivee']."</td>";
			echo "<td>".$resultat['date_depart']."</td>";
			echo "<td>".$resultat['id_salle']."</td>";
			echo "<td>".$resultat['prix']."€"."</td>";
			echo "<td>".$resultat['etat']."</td>";
		echo "</tr>";
	}


function afficheSalles() {
	global $connexion;

	$sql="SELECT * FROM salle ";
	$req = $connexion->prepare($sql);

	$data = array ();
	$req->execute($data);
	$datas = $req->fetch();

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
	echo "</tr>";
}


function afficheMembres() {
	global $connexion;

	$sql="SELECT * FROM membre ";
	$req = $connexion->prepare($sql);

	$data = array ();
	$req->execute($data);
	$datas = $req->fetch();

	echo"<tr>";
	echo "<td>".$datas['id_membre']." "."</td>";
	echo "<td>".$datas['pseudo']." "."</td>";
	echo "<td>".$datas['nom']." "."</td>";
	echo "<td>".$datas['prenom']." "."</td>";
	echo "<td>".$datas['email']." "."</td>";
	echo "<td>".$datas['civilite']." "."</td>";
	echo "<td>".$datas['statut']." "."</td>";
	echo "<td>".$datas['date_enregistrement']." "."</td>";
	echo "</tr>";
}
