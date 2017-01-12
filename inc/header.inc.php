<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Lokisalle</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#">Qui Somme Nous</a></li>
        <li><a href="#">Contact</a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="admin/inc/gestionSalle.inc.php">Gestion Salles</a></li>
                  <li><a href="admin/inc/gestionProduit.inc.php">Gestion Produits</a></li>
                  <li><a href="admin/inc/gestionMembres.inc.php">Gestion Membres</a></li>
                  <li><a href="admin/inc/gestionCommande.inc.php">Gestion commandes</a></li>
                  <li><a href="admin/inc/gestionAvis.inc.php">Gestion Avis</a></li>
                </ul>
          </li>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Espace Membre <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="inc/inscription.inc.php">Inscription</a></li>
            <li><a href="inc/userConnexion.inc.php">Connexion</a></li>
            <li><a href="inc/profil.inc.php">Profil</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
