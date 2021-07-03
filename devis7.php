<?php
include("php/header.php");
session_start();
function test_input($data){
    $data = trim($data); // - espace
    $data = stripslashes($data); // - \
    $data = strip_tags($data); // - <balise>
    return $data;
}
$status = "Nouveau devis";
$date = date("d.m.y");  
$nom        = test_input($_SESSION['nom']);
$prenom     = test_input($_SESSION['prenom']);
$email      = test_input($_SESSION['email']);
$telephone  = test_input($_SESSION['telephone']);
$marque     = test_input($_SESSION['marque']);
$modele     = test_input($_SESSION['modele']);
$probleme   = test_input($_SESSION['probleme']);
$probleme2 = test_input($_SESSION['probleme2']);
$probleme3 = test_input($_SESSION['probleme3']);
if (!isset($_POST['mentions-legales'])){
    header('location:devis6.php');
}
$commentaire = test_input($_SESSION['commentaire']);
$protection = test_input($_SESSION['protection-checkbox']);
include("php/connexion_bdd.php");
?>
<ol class="progress">
  <li class="is-complete" data-step="1">
    Client
  </li>
  <li class="is-complete" data-step="2">
    Téléphone
  </li>
  <li class="is-complete" data-step="3">
    Problème(s)
  </li>
  <li class="is-complete" data-step="4">
    Commentaire &<br/>Protection écran
  </li>
  <li class="is-complete" data-step="5">
    Récapitulatif
  </li>
  <li class="is-complete" data-step="6">
    Envoi
  </li>
</ol>
<?php
if ($_POST['mentions-legales'] == "Oui"){
    $Requete = "INSERT INTO devis (status, date , nom , prenom , email, telephone, marque, modele, probleme1, probleme2, probleme3,commentaire, protection) 
                VALUES ('$status','$date','$nom','$prenom','$email','$telephone','$marque','$modele','$probleme','$probleme2','$probleme3','$commentaire','$protection');";
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_close ( $DataBase ) ;
    echo "<h1 class='devis-envoyer'><i class='fas fa-check-circle logo-devis-envoyer'></i><br/>Votre devis a bien été envoyé !</h1>";
    echo "<p class='p-devis-envoyer'>La boutique La Maison Du Smartphone vous remercie de votre demande de devis via notre site internet.</p>";
    echo "<p class='p-devis-envoyer'>Nous allons vous répondre dans les plus brefs délais Mr / Mme : ". $_SESSION['nom'].' ' .$_SESSION['prenom'].".</p>";
    echo "<p class='p-devis-envoyer'>Redirection vers l'accueil dans 60 secondes...</p>";
    echo "<meta http-equiv='refresh' content='60;URL=index.php'>";
    echo "<img class='img-devis-envoyer' src='images/devis.png'/>"; 
    session_destroy();   
} else {
    echo "<meta http-equiv='refresh' content='0;URL=devis6.php'>";
}
?>
<?php
include("php/footer.php");
?>