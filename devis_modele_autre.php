<?php
include("php/header.php");
session_start();
if (isset($_POST['marque2'])){
    $marque2 = $_POST['marque2'];
    $_SESSION['marque2'] = $marque2;
    $_SESSION['marque'] = NULL;
}
?>
<main>
<div class="container_progress_bar">
      <ul class="progressbar">
          <li class="active">Informations personnelles</li>
          <li class="active">Marque</li>
          <li class="active">Modèle</li>
          <li>Problèmes</li>
          <li>Confirmation</li>
  </ul>
</div>
<br/><br/><br/><br/><br/><br/>
<?php 
echo "<form class='form-devis' method='POST' action='devis_probleme.php'>";
echo "<fieldset>";
echo "<legend><span class='number'>3</span>Quel est le modèle de votre téléphone ?</legend><br/><a href='savoir-marque-modele.php' class='savoir-marque-modele'><i class='far fa-question-circle'></i> Comment savoir le modèle ?</a>";
echo "<input autofocus='autofocus' style='text-transform: capitalize;' type='text' name='modele2' placeholder='Modele *'>";
echo "<a href='devis_marque_autre.php' class='devis_bouton_marque_modele_autre'><i class='fas fa-mobile-alt'></i> Retourner au choix de la marque</a>";
?>
    </fieldset>
    
    <input type="submit" value="Etape suivante" />
    </form>
    <br/><br/>
</main>
<?php
include("php/footer.php");
?>
</body>
</html>



