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


