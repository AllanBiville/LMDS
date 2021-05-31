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

    <form class="form-devis" method="POST" action="devis_confirmation.php">
    <fieldset>
    <legend><span class="number">4</span>Quel est votre problème ?</legend>    
<?php 
echo "<select required name='probleme'>";
echo "<option disabled selected hidden value=''>";
echo "=== Choisir un problème ===" ;
echo "</option>\n" ;
include("php/connexion_bd_telephone.php");
$Requete = "select * from probleme" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
  echo "<option value='".$ligne['id_probleme']. "'>";
  echo $ligne['nom_probleme'] ;
  echo "</option>\n" ;
}
echo "</select>" ;
mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;  
?>


  <div id="probleme2">
  <?php 
echo "<select name='probleme2'>";
echo "<option disabled selected hidden value=''>";
echo "=== Choisir un problème ===" ;
echo "</option>\n" ;
include("php/connexion_bd_telephone.php");
$Requete = "select * from probleme" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
  echo "<option value='".$ligne['id_probleme']. "'>";
  echo $ligne['nom_probleme'] ;
  echo "</option>\n" ;
}
echo "</select>" ;

mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;  
?>
    </div>
    <div id="probleme3">
  <?php 
echo "<select name='probleme3'>";
echo "<option disabled selected hidden value=''>";
echo "=== Choisir un problème ===" ;
echo "</option>\n" ;
include("php/connexion_bd_telephone.php");
$Requete = "select * from probleme" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
  echo "<option value='".$ligne['id_probleme']. "'>";
  echo $ligne['nom_probleme'] ;
  echo "</option>\n" ;
}
echo "</select>" ;

mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;  
?>
    </div>


<a class="devis_bouton_add" id="add2"><i class="fas fa-plus"></i> Ajouter un problème</a>
<a class="devis_bouton_add" id="add3"><i class="fas fa-plus"></i> Ajouter un problème</a>
<a class="devis_bouton_remove" id="remove2"><i class="fas fa-minus"></i> Retirer un problème</a>
<a class="devis_bouton_remove" id="remove3"><i class="fas fa-minus"></i> Retirer un problème</a>


<script src="javascript/add_remove_content.js"></script>





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



