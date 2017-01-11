<?php

 ?>
 <form action="/libs/services.php?action=inscription" method="post">
  <input type="text" name="pseudo" placeholder="Votre pseudo">
  <input type="password" name="mdp" placeholder="Votre mot de passe">
  <input type="text" name="nom" placeholder="Votre Nom">
  <input type="text" name="prenom" placeholder="Votre Prénom">
  <input type="email" name="email" placeholder="Votre Email">
  <select name="sexe">
    <option value="Femme">Femme</option>
    <option value="Homme">Homme</option>
  </select>
  <input type="submit" value="Inscription">
 </form>
