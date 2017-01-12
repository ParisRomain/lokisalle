<div class="row">
        <!-- elements de recherches -->
        <section class="menuRecherche col-md-3 col-xs-12">
          <h3>Catégorie</h3>
            <div class="btn-group-vertical" role="group" aria-label="categorie">
              <button type="button" class="btn btn-reunion">Réunion</button>
              <button type="button" class="btn btn-bureau">Bureau</button>
              <button type="button" class="btn btn-formation">Formation</button>
            </div>

          <h3>Ville</h3>
            <div class="btn-group-vertical" role="group" aria-label="ville">
              <button type="button" class="btn btn-paris">Paris</button>
              <button type="button" class="btn btn-lyon">Lyon</button>
              <button type="button" class="btn btn-marseille">Marseille</button>
            </div>
        
          <h3>Capacité</h3>
            <select>
              <option value="moins10">moins de 10</option>
              <option value="10a30">10 à 30</option>
              <option value="30a50">30 à 50</option>
              <option value="50a70">50 à 70</option>
              <option value="70a100">70 à 100</option>
              <option value="plus100">plus de 100</option>
            </select>

         <!--  <h3>Prix</h3>
            <input type="range" value="500" max="1800" min="0" step="5" name="prix" list="prix">  -->

          <h3>Période</h3>


        </section>

        <!-- les restultats de recherche -->
        <section class="resultats col-md-9 col-xs-12">
          
            
           
              <?php 
                $salles = getSalles();
                foreach ($salles as $salle)
                {
              ?>
                <div class="col-md-4">
                   <img src="<?php echo $salle['photo']; ?>" class="img-responsive img-thumbnail">

                   <h3><?php echo $salle['titre']; ?></h3>
                   <p><b><?php echo $salle['prix']. "€"; ?></b></p>

                   <p><?php echo $salle['description']; ?></p>
                   <p><?php echo $salle['date_arrivee']." au ".$salle['date_depart']; ?></p>

            
                </div>

              <?php  
                } 
              ?>
              
        </section>
</div>
