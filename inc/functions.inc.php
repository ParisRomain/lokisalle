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
