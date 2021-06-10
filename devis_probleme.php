<?php
include("php/header.php");
session_start();
if (isset($_POST['modele'])){
  $modele = $_POST['modele'];
  $_SESSION['modele'] = $modele;
  $_SESSION['modele2'] = NULL;
}
if (isset($_POST['modele2'])){
  $modele2 = $_POST['modele2'];
  $_SESSION['modele2'] = $modele2;
  $_SESSION['modele'] = NULL;
}

?>
<main>
<ol class="progress">
  <li class="is-complete" data-step="1">
    <span>Informations clients</span>
  </li>
  <li class="is-complete" data-step="2">
  <span>Marque</span>
  </li>
  <li class="is-complete" data-step="3">
  <span>Modèle</span>
  </li>
  <li class="is-active"data-step="4">
  <span>Problème(s)</span>
  </li>
  <li  class="not-use" data-step="5">
  <span>Récapitulatif</span>
  </li>
  <li  class="not-use" data-step="6" class="progress__last">
  <span>Infos supp. & Envoi</span>
  </li>
</ol>

    <form class="form-devis" method="POST" action="devis_confirmation.php">
    <fieldset>
    <legend><span class="number">4</span>Quel est votre problème ?</legend>    
<?php 
echo "<select required name='probleme'>";
echo "<option disabled selected hidden value=''>";
echo "=== Choisir un problème ===" ;
echo "</option>\n" ;
include("php/connexion_bdd.php");
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
echo "<select id='probleme20' name='probleme2'>";
echo "<option disabled selected hidden value=''>";
echo "=== Choisir un problème ===" ;
echo "</option>\n" ;
include("php/connexion_bdd.php");
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
echo "<select id='probleme30' name='probleme3'>";
echo "<option disabled selected hidden value=''>";
echo "=== Choisir un problème ===" ;
echo "</option>\n" ;
include("php/connexion_bdd.php");
$Requete = "select * from probleme" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
  echo "<option value='".$ligne['id_probleme']. "'>";
  echo $ligne['nom_probleme'];
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


