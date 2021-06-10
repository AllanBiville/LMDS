<?php
include("php/header.php");
session_start();
?>
<main>
<ol class="progress">
  <li class="is-complete" data-step="1">
    <span>Informations clients</span>
  </li>
  <li class="is-active" data-step="2">
  <span>Marque</span>
  </li>
  <li class="not-use" data-step="3">
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
echo "<form class='form-devis' method='POST' action='devis_modele_autre.php'>";
echo "<fieldset>";
echo "<legend><span class='number'>2</span>Quel est la marque de votre téléphone ?</legend><br/><a href='savoir-marque-modele.php' class='savoir-marque-modele'><i class='far fa-question-circle'></i> Comment savoir la marque ?</a>    ";
echo "<input minlength='1' maxlength='25' required autofocus='autofocus' style='text-transform: capitalize;' type='text' name='marque2' placeholder='Marque *'>";
echo "</fieldset>";
echo "<a href='devis_marque.php' class='devis_bouton_marque_modele_autre'><i class='fas fa-mobile-alt'></i> Revenir à la liste des téléphones</a>";
echo "<input type='submit' value='Etape suivante' />";
echo "</form>";
?>
</main>
<?php
include("php/footer.php");
?>




