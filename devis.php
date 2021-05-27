<?php
include("php/header.php");
session_start();
?>
<main>
<div class="container_progress_bar">
      <ul class="progressbar">
          <li class="active">Informations personnelles</li>
          <li>Marque</li>
          <li>Modèle</li>
          <li>Problèmes</li>
          <li>Confirmation</li>
  </ul>
</div>
<br/><br/><br/><br/><br/><br/>

    <form class="form-devis" method="POST" action="devis_marque.php">
    <fieldset>
    <legend><span class="number">1</span>Informations clients</legend>
    <input type="text" name="nom" placeholder="Votre nom *">
    <input type="text" name="prenom" placeholder="Votre prénom *">
    <input type="email" name="email" placeholder="Votre email *">
    <input type="telephone" name="telephone" placeholder="Votre téléphone *">
    </fieldset>
    <input type="submit" value="Etape suivante" />
    </form>
    <br/><br/>
</main>
</body>
</html>



