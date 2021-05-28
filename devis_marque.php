<?php
include("php/header.php");
session_start();
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$_SESSION['nom'] = $nom;
$_SESSION['prenom'] = $prenom;
$_SESSION['email'] = $email;
$_SESSION['telephone'] = $telephone;
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

    <form class="form-devis" method="POST" action="devis_modele.php">
    <fieldset>
    <legend><span class="number">2</span>Quel est la marque de votre téléphone ?</legend>    
<?php 
echo "<select name='marque'>";
echo "<option value='0'>";
echo "=== Choisir une marque ===" ;
echo "</option>\n" ;
include("php/connexion_bd_telephone.php");
$Requete = "select * from marque" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
  echo "<option value='".$ligne['id_marque']. "'>";
  echo $ligne['nom_marque'] ;
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



