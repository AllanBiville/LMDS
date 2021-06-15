<?php
include("php/header.php");
session_start();
session_destroy();
?>
<main>
<ol class="progress">
  <li class="is-active" data-step="1">
    <span>Informations clients</span>
  </li>
  <li class="not-use" data-step="2">
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
    <form class="form-devis" method="POST" action="devis_marque.php">
    <fieldset>
    <legend><span class="number">1</span>Informations clients</legend>
    <input minlength="2" maxlength="30" autofocus="autofocus" pattern="[A-Za-z- ]*" required="required" type="text" name="nom" placeholder="Votre nom *">
    <input minlength="2" maxlength="30" pattern="[A-Za-z- ]*" required="required" type="text" name="prenom" placeholder="Votre prénom *">
    <input pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" required="required" type="email" name="email" placeholder="Votre email *">
    <input pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" required="required" type="text" name="telephone" placeholder="Votre téléphone *">
    </fieldset>
    <input type="submit" value="Etape suivante" />
    </form>
</main>
<?php
include("php/footer.php");
?>
