<?php
include("php/header.php");
session_start();
$probleme = $_POST['probleme'];
$_SESSION['probleme'] = $probleme;
$marque = $_SESSION['marque'];
$modele = $_SESSION['modele'];
?>
<main>
<div class="container_progress_bar">
      <ul class="progressbar">
          <li class="active">Informations personnelles</li>
          <li class="active">Marque</li>
          <li class="active">Modèle</li>
          <li class="active">Problèmes</li>
          <li class="active">Confirmation</li>
  </ul>
</div>
<br/><br/><br/><br/><br/><br/>
<?php
    echo "<form class='form-devis' method='POST' action=''>";
    echo "<fieldset>";
    echo "<legend><span class='number'>5</span>Confirmation de votre devis</legend>"; 
    echo "<br/><hr><br/>";
    echo "<legend><i class='fas fa-chevron-right'></i>Informations clients</legend>";
    echo "<input type='text' readOnly='readOnly' name='nom' placeholder='Votre nom *' value='".$_SESSION['nom']."'>";
    echo "<input type='text' readOnly='readOnly' name='prenom' placeholder='Votre prénom *' value='".$_SESSION['prenom']."'>";
    echo "<input type='email' readOnly='readOnly' name='email' placeholder='Votre email *' value='".$_SESSION['email']."'>";
    echo "<input type='text' readOnly='readOnly' name='telephone' placeholder='Votre téléphone *' value='".$_SESSION['telephone']."'>";
    echo "<legend><i class='fas fa-chevron-right'></i>Informations téléphones</legend>";

    include("php/connexion_bd_telephone.php");
$Requete = "select * from marque where id_marque = '$marque';" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
    if ($ligne['id_marque'] == $_SESSION['marque']){
        echo "<input type='text' readOnly='readOnly' name='marque' placeholder='Marque *' value='".$ligne['nom_marque']."'>";
      }
}
mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;  

    
include("php/connexion_bd_telephone.php");
$Requete = "select * from modele where modele.id_modele = '$modele';" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
    if ($ligne['id_modele'] == $_SESSION['modele']){
        echo "<input type='text' readOnly='readOnly' name='modele' placeholder='Modele *' value='".$ligne['nom_modele']."'>";
      }
}
mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;  

    echo "</fieldset>";

    echo "<input type='submit' value='Envoyer le devis' />";
    echo "</form>";
    echo "<br/><br/>";
    ?>
</main>
<?php
include("php/footer.php");
?>
</body>
</html>

