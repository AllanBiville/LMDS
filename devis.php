<?php
include("php/header.php");
session_start();
session_destroy();
?>
<ol class="progress">
  <li class="is-active" data-step="1">
    Client
  </li>
  <li data-step="2">
    Téléphone
  </li>
  <li data-step="3">
    Problème(s)
  </li>
  <li data-step="4">
    Commentaire &<br/>Protection écran
  </li>
  <li data-step="5">
    Récapitulatif
  </li>
  <li data-step="6">
    Envoi
  </li>
</ol>
<main>
<form class="form-devis" method="POST" action="devis2.php">
<fieldset>
<legend><span class="number">1</span>Informations clients</legend>
<input minlength="2" maxlength="30" autofocus="autofocus" pattern="[A-za-z- ]*" required="required" type="text" name="nom"    placeholder="Votre nom *">   </input>
<input minlength="2" maxlength="30"                       pattern="[A-za-z- ]*" required="required" type="text" name="prenom" placeholder="Votre prénom *"></input>

<input pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" 
required="required" type="email" name="email" placeholder="Votre email *"></input>
<input pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" 
required="required" type="text" name="telephone" placeholder="Votre téléphone *"></input>
</fieldset>
<input type="submit" value="Etape suivante"></input>
</form>
</main>
<?php
include("php/footer.php");
?>