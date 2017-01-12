<?php
  include_once('header.inc.php');
 ?>

<h1><?php echo $salle['titre']; ?></h1>
<button type="button" class="btn btn-success">Réserver</button>
<section class="container">
  <div class="row">
    <aside class="col-sm-9 col-xs-12">
     <?php ?>
    </aside>
    <article class="col-sm-3">
      <div class="description">
        <?php echo $salle['description']; ?>
      </div>
      <div class="gmap">
        <?php //get gmap produit ?>
      </div>
    </article>
  </div>
  <div class="row">
    <h4>Informations complèmentaires</h4>
    <section class="col-md-4 col-sm-12">
      <p><?php  echo $salle['date_arrivee'] ?></p>
      <p><?php  echo $salle['date_depart'] ?></p>
    </section>
    <section class="col-md-4 col-sm-12">
      <p><?php  // get capacity?></p>
      <p><?php  // get category?></p>
    </section>
    <section class="col-md-4 col-sm-12">
      <p><?php  // get adresse?></p>
      <p><?php  // get price?></p>
    </section>
  </div>
  <div class="row">
    <h3>Autres produits</h3>
    <a href="<?php // get lien produit ?>"><img src="<?php //get image produit ?>" class="col-sm-3"></a>
    <a href="<?php // get lien produit ?>"><img src="<?php //get image produit ?>" class="col-sm-3"></a>
    <a href="<?php // get lien produit ?>"><img src="<?php //get image produit ?>" class="col-sm-3"></a>
    <a href="<?php // get lien produit ?>"><img src="<?php //get image produit ?>" class="col-sm-3"></a>
  </div>
</section>

<hr>
<a href="#">Déposer un commentaire et une note</a>
<a href="#">Retour vers le catalogue</a>
