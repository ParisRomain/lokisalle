<?php  
// http://php.net/manual/fr/pdo.construct.php

$host = "localhost";
$user = "root";
$password = "";
$db = "lokisalle";


	try {
		$connexion = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $password);
		//$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	}catch (Exception $e) {
		echo 'connexion échoué: '.$e->getMessage();
	} 
?>