<?php
require_once('../inc/init.inc.php');

if(!empty($_GET['action'])) {
  switch ($_GET['action']) {

    case 'inscription':
      inscription();
    break;

    case 'connexion' :
      connexion();
    break;

    case 'logout':
      logout();
      break;

    case 'addSalle':
    	addSalle();
    	break;
  }
}

function inscription() {
		global $connexion;

		if(!empty($_POST['pseudo']) &&  !empty($_POST['mdp']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['sexe']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

			// cryptage du mot de passe
			$password = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
      /* Requete from php my admin
      INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `statut`, `date_enregistrement`) VALUES (NULL, 'test', '123456', 'testeur', 'test', 'test@test.fr', 'f', '', '2017-01-02 00:00:00');
      */
			$data = array(
          'pseudo' => $_POST['pseudo'],
          'mdp'		=> $password,
          'nom' => $_POST['nom'],
          'prenom' => $_POST['prenom'],
					'email'	=> $_POST['email'],
          'civilite' => $_POST['sexe']
					);

			$sql = "INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite ) VALUES (:pseudo, :mdp, :nom, :prenom, :email, :civilite)";

			$req = $connexion->prepare($sql);

			$req->execute($data);

      echo "inscription validée!";
		}else{
			die("fail");
		}
	}

	 function connexion() {
	 	global $connexion;

	 	if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {


	 		$data = array(
	 			'pseudo'	=> $_POST['pseudo'],
         'mdp' => $_POST['password']
       );

	 		$req = "SELECT pseudo, mdp FROM membre WHERE pseudo=:pseudo, mdp=:mdp";

	 		$req = $connexion->prepare($req);

	 		$req->execute($data);

			$result = $req->fetch();
      header('Location: ../index.php');
	 	}

	}

	function logout(){
		session_destroy();
		setcookie("user_id", "", time() - 3600);
	}


/* ajout salle à la  BDD*/
/*function addSalle(){
	global $connexion;
	if(isset($_POST['titre']) && isset($_POST['description']) /*&& isset($_POST['photo'])&& isset($_POST['capacite']) && isset($_POST['categorie']) && isset($_POST['pays']) && isset($_POST['ville']) && isset($_POST['adresse']) && isset($_POST['cp'])  !=="" ) {

		$sql = "INSERT INTO `salle` (`titre`, `description`, `photo`, `capacite`, `categorie`, `pays`, `ville`, `adresse`, `cp`) VALUES (:titre, :description, :photo, :capacite, :categorie, :pays, :ville, :adresse, :cp);";

		$req = $connexion->prepare($sql);

		$datas = array ("titre"			=>$_POST['titre'],
						"description"	=>$_POST['description'],
						"photo"			=>$_POST['photo'],
						"capacite"		=>$_POST['capacite'],
						"categorie"		=>$_POST['categorie'],
						"pays"			=>$_POST['pays'],
						"ville"			=>$_POST['ville'],
						"adresse"		=>$_POST['adresse'],
						"cp"			=>$_POST['cp'], );

		$req->execute($datas);

	}

	echo ("Vous venez d'ajouter une salle !");


}*/

function addSalle() {
		global $connexion;

		if(!empty($_POST['titre']) &&  !empty($_POST['description']) &&   !empty($_POST['capacite']) && !empty($_POST['categorie']) && !empty($_POST['pays']) && !empty($_POST['ville']) && !empty($_POST['adresse']) && !empty($_POST['cp'])) {

			$data = array(
          'tite' => $_POST['titre'],
          'description'	=> $_POST['description'],
          'capacite' => $_POST['capacite'],
					'categorie'	=> $_POST['categorie'],
          'pays' => $_POST['pays'],
          'ville' => $_POST['ville'],
          'adresse' => $_POST['adresse'],
          'cp' => $_POST['cp']
					);

			$sql = "INSERT INTO salle (titre, description, capacite, categorie, pays, ville, adresse, cp ) VALUES (:titre, :description, :capacite, :categorie, :pays, :ville, :adresse, :cp)";

			$req = $connexion->prepare($sql);

			$req->execute($data);

      echo "Salle Ajoutée!";
		}else{
			die("fail");
		}
	}
