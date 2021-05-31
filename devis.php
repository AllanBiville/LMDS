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
    <input autofocus="autofocus" pattern="[A-Za-z- ]*" required="required" type="text" name="nom" placeholder="Votre nom *">
    <input pattern="[A-Za-z- ]*" required="required" type="text" name="prenom" placeholder="Votre prénom *">
    <input pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" required="required" type="email" name="email" placeholder="Votre email *">
    <input pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" required="required" type="text" name="telephone" placeholder="Votre téléphone *">
    </fieldset>
    <input type="submit" value="Etape suivante" />
    </form>
    <form class="form-session_destroy" method="POST" action="php/session_destroy.php">
    <input type="submit" value="En cas de bug"/>
    </form>
    

</script>
</body>
</html>
    
    <br/><br/>
</main>
<?php
include("php/footer.php");
?>
</body>
</html>