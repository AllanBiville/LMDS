<?php
include("php/header.php");
session_start();
if (isset($_POST['marque'])){
  $marque = $_POST['marque'];
  $_SESSION['marque'] = $marque;
  $_SESSION['marque2'] = NULL;
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
echo "<select required name='modele'>";
echo "<option disabled selected hidden value=''>";
echo "=== Choisir un modèle ===" ;
echo "</option>\n" ;
include("php/connexion_bd_telephone.php");
$Requete = "select * from modele,marque where modele.id_marque = marque.id_marque and modele.id_marque = $marque" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
  echo "<option value='".$ligne['id_modele']. "'>";
  echo $ligne['nom_modele'] ;
  echo "</option>\n" ;
}
echo "</select><br/><br/>" ;
mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;  
?>
    </fieldset>
    <a href='devis_modele_autre.php' class='devis_bouton_marque_modele_autre'><i class='fas fa-mobile-alt'></i> Mon modèle n'est pas dans la liste</a>
    <input type="submit" value="Etape suivante" />
    </form>
    <br/><br/>
</main>
<?php
include("php/footer.php");
?>



