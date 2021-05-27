<?php
include("php/header.php");
session_start();
$marque = $_POST['modele'];
$_SESSION['modele'] = $marque;
?>
<main>
<div class="container_progress_bar">
      <ul class="progressbar">
          <li class="active">Informations personnelles</li>
          <li class="active">Marque</li>
          <li class="active">Modèle</li>
          <li class="active">Problèmes</li>
          <li>Confirmation</li>
  </ul>
</div>
<br/><br/><br/><br/><br/><br/>

    <form class="form-devis" method="POST" action="">
    <fieldset>
    <legend><span class="number">4</span>Quel est votre problème ?</legend>    
<?php 
echo "<select name='probleme'>";
include("php/connexion_bd_telephone.php");
$Requete = "select * from probleme" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
  echo "<option value='".$ligne['id_probleme']. "'>";
  echo $ligne['nom_probleme'] ;
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
</body>
</html>



