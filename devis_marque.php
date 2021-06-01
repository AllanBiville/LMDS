<?php
include("php/header.php");
session_start();
if (isset($_POST['nom'])){
  $nom = $_POST['nom'];
  $_SESSION['nom'] = $nom;
}
if (isset($_POST['prenom'])){
  $prenom = $_POST['prenom'];
  $_SESSION['prenom'] = $prenom;
}
if (isset($_POST['email'])){
  $email = $_POST['email'];
  $_SESSION['email'] = $email;
}
if (isset($_POST['telephone'])){
  $telephone = $_POST['telephone'];
  $_SESSION['telephone'] = $telephone;
}
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
echo "<form class='form-devis' method='POST' action='devis_modele.php'>";
echo "<fieldset>";
echo "<legend><span class='number'>2</span>Quel est la marque de votre téléphone ?</legend> <br/><a href='savoir-marque-modele.php' class='savoir-marque-modele'><i class='far fa-question-circle'></i> Comment savoir la marque ?</a>";
//<a href='' class=''><i class='far fa-question-circle'></i> Comment savoir la marque ? </a>
echo "<select required name='marque'>";
echo "<option disabled selected hidden value=''>";
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
echo "</select>" ;
mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;  
echo "</fieldset>";
echo "<a href='devis_marque_autre.php' class='devis_bouton_marque_modele_autre'><i class='fas fa-mobile-alt'></i> Ma marque n'est pas dans la liste</a>";
echo "<input type='submit' value='Etape suivante' />";
echo "</form>";
?>
</main>
<?php
include("php/footer.php");
?>
</body>
</html>



