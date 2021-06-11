<?php
include("php/header.php");
session_start();
if (isset($_POST['marque2'])){
    $marque2 = $_POST['marque2'];
    $_SESSION['marque2'] = $marque2;
    $_SESSION['marque'] = NULL;
}
if (empty($_POST['marque2'])) {
  header('location:devis_marque_autre.php');
}
?>
<main>
<ol class="progress">
  <li class="is-complete" data-step="1">
    <span>Informations clients</span>
  </li>
  <li class="is-complete" data-step="2">
  <span>Marque</span>
  </li>
  <li class="is-active" data-step="3">
  <span>Modèle</span>
  </li>
  <li class="not-use"data-step="4">
  <span>Problème(s)</span>
  </li>
  <li  class="not-use" data-step="5">
  <span>Récapitulatif</span>
  </li>
  <li  class="not-use" data-step="6" class="progress__last">
  <span>Infos supp. & Envoi</span>
  </li>
</ol>
<?php 
echo "<form class='form-devis' method='POST' action='devis_probleme.php'>";
echo "<fieldset>";
echo "<legend><span class='number'>3</span>Quel est le modèle de votre téléphone ?</legend><br/><a href='savoir-marque-modele.php' class='savoir-marque-modele'><i class='far fa-question-circle'></i> Comment savoir le modèle ?</a>";
echo "<input minlength='1' maxlength='25' required autofocus='autofocus' style='text-transform: capitalize;' type='text' name='modele2' placeholder='Modele *'>";
?>
    </fieldset>
    
    <input type="submit" value="Etape suivante" />
    </form>
    <br/><br/>
</main>
<?php
include("php/footer.php");
?>



