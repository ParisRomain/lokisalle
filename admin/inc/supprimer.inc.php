  <div class="delete">

    <h1>Supprimer une salle</h1>

    <?php $id_membre = $data; ?>

    <form action="../../libs/services.php?action=delete">
      <input type="hidden" name="id" value="<?= $id_salle ?>">
      <p>Vous êtes sur le point de supprimer une salle. <strong>Cette action est irréversible</strong>.</p>
      <p>Souhaitez-vous confirmer votre action ? <input type="submit" value="Je confirme !"></p>
    </form>

  </div>
</div>