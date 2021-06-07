<?php
include("php/header.php");
session_start();
?>
<main>
<div class="container_progress_bar">
      <ul class="progressbar">
          <li class="active">Informations personnelles</li>
          <li class="active">Marque</li>
          <li class="active">Modèle</li>
          <li class="active">Problèmes</li>
          <li class="active">Confirmation</li>
  </ul>
</div>
<br/><br/><br/><br/><br/><br/>


<?php
echo "<form class='form-devis' method='POST' action='devis_envoi.php'>";
echo "<fieldset>";
echo "<legend><span class='number'>5</span>Confirmation</legend>"; 
echo "<br/><hr><br/>";
echo "<legend><i class='fas fa-chevron-right'></i>Un petit commentaire ?</legend>";
echo "<textarea minlength='2' maxlength='150' autofocus='autofocus' id='commentaire' name='commentaire' rows='5' cols='33' placeholder='Commentaire (optionnel) - 150 caractères maximum'></textarea>";
echo "<legend><i class='fas fa-chevron-right'></i>Infos supplémentaires</legend>";
?>
<input required type="checkbox" name="mentions-legales" id="mentions-legales" value="mentions-ok">
<label class="label-checkbox" for="mentions-legales">J'accepte les <a href="mentions-legales.php">mentions légales</a> du site. (Obligatoire)</label>
<br/>
<input type="checkbox" name="newsletters" id="newsletters" value="news-ok">
<label class="label-checkbox" for="newsletters">Je m'abonne a la newsletters. (Optionnel)</label>
</fieldset>

<input type='submit' value="Envoyer" />
</form>

</main>
<?php
include("php/footer.php");
?>