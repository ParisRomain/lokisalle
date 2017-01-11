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

    default: break;
  }
}

function inscription() {
		global $connection;

		if(!empty($_POST['pseudo']) &&  !empty($_POST['mdp']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['sexe']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

			// cryptage du mot de passe
			$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

			$data = array(
          'pseudo' => $_POST['pseudo'],
          'pwd'		=> $password,
          'nom' => $_POST['prenom'],
					'email'	=> $_POST['email'],
          'sexe' => $_POST['sexe']
					);

			$sql = "INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite ) VALUES (:pseudo, :mdp :nom, :prenom, :email, :civilite)";

			$req = $connection->prepare($sql);


			$req->execute($data);
		}else{
			die("fail");
		}
	}

	function connexion() {
		global $connection;

		if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {


			$data = array(
				'pseudo'	=> $_POST['pseudo']
        'mdp' => $_POST['password']);

			$req = "SELECT pseudo, mdp FROM membre WHERE pseudo=:pseudo, mdp=:mdp";

			$req = $connection->prepare($req);

			$req->execute($data);

			$result = $req->fetch();


		}

	}
	function logout(){
		session_destroy();
		setcookie("user_id", "", time() - 3600);
	}
