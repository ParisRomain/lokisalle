<?php //le fichier pour appeler les pages qui servent sur la majorité des autres pages (fonctions par exemple.) comme ça on appelle seulement init_session sur les autres pages

//session_start : autorise à utiliser les sessions : on peut stocker pour lire les variables de session de serveur
session_start();
//bien require le fichier functions et le fichier loginDB
if(is_file('./inc/connexion.inc.php')){
	require('./inc/connexion.inc.php');
	require_once('./inc/functions.inc.php');
/*} else {
	require('../inc/connexion.inc.php');
	require_once('../inc/functions.inc.php');*/
}


?>