<?php
include("php/header.php");
session_start();
?>
<main>
<div class="container_progress_bar">
      <ul class="progressbar">
          <li class="active">Informations personnelles</li>
          <li class="active">Marque</li>
          <li>Modèle</li>
          <li>Problèmes</li>
          <li>Confirmation</li>
  </ul>
</div>
<br/><br/><br/><br/><br/><br/>
<?php 
echo "<form class='form-devis' method='POST' action='devis_modele_autre.php'>";
echo "<fieldset>";
echo "<legend><span class='number'>2</span>Quel est la marque de votre téléphone ?</legend><br/><a href='savoir-marque-modele.php' class='savoir-marque-modele'><i class='far fa-question-circle'></i> Comment savoir la marque ?</a>    ";
echo "<input autofocus='autofocus' style='text-transform: capitalize;' type='text' name='marque2' placeholder='Marque *'>";
echo "</fieldset>";
echo "<a href='devis_marque.php' class='devis_bouton_marque_modele_autre'><i class='fas fa-mobile-alt'></i> Revenir à la liste des téléphones</a>";
echo "<input type='submit' value='Etape suivante' />";
echo "</form>";
?>
</main>
<?php
include("php/footer.php");
?>
</body>
</html>



