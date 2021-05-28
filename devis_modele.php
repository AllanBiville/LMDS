<?php
include("php/header.php");
session_start();
$marque = $_POST['marque'];
$_SESSION['marque'] = $marque;
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

    <form class="form-devis" method="POST" action="devis_probleme.php">
    <fieldset>
    <legend><span class="number">3</span>Quel est le modèle de votre téléphone ?</legend>    
<?php 
echo "<select name='modele'>";
echo "<option value='0'>";
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
    <input type="submit" value="Etape suivante" />
    </form>
    <br/><br/>
</main>
<?php
include("php/footer.php");
?>
</body>
</html>



