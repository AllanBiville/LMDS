<?php
include("php/header.php");
session_start();
function test_input($data){
    $data = htmlentities($data);
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}

$status = "Nouveau devis";
$_SESSION['status'] = $status;
$date = date("d.m.y");  
$_SESSION['date'] = $date;
$nom        = test_input($_SESSION['nom']);
$prenom     = test_input($_SESSION['prenom']);
$email      = test_input($_SESSION['email']);
$telephone  = test_input($_SESSION['telephone']);
$marque     = test_input($_SESSION['marque']);
$modele     = test_input($_SESSION['modele']);
$probleme   = test_input($_SESSION['probleme']);
if(isset($_SESSION['probleme2'])){
    $probleme2 = test_input($_SESSION['probleme2']);
}
else{
    $probleme2 = " ";
    $_SESSION['probleme2'] = " ";
}
if(isset($_SESSION['probleme3'])){
    $probleme3 = test_input($_SESSION['probleme3']);
}
else{
    $probleme3 = " ";
    $_SESSION['probleme3'] = " ";
}
if (isset($_POST['commentaire'])){
    $commentaire = test_input($_POST['commentaire']);
    $_SESSION['commentaire'] = $commentaire;
} else {
    $commentaire = " ";
    $_SESSION['commentaire'] = " ";
}

include("php/connexion_bdd.php");

if (!empty($_SESSION['marque']) && $_POST['mentions-legales'] == "mentions-ok"){
    $Requete = "INSERT INTO devis (status, date , nom , prenom , email, telephone, marque, modele, probleme1, probleme2, probleme3,commentaire) 
                VALUES ('$status','$date','$nom','$prenom','$email','$telephone','$marque','$modele','$probleme','$probleme2','$probleme3','$commentaire');";
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_close ( $DataBase ) ;
    echo "<h1 class='devis-envoyer'><i class='fas fa-check-circle logo-devis-envoyer'></i><br/>Votre devis a bien été envoyé !</h1>";
    echo "<p class='p-devis-envoyer'>La boutique La Maison Du Smartphone vous remercie de votre demande de devis via notre site internet.</p>";
    echo "<p class='p-devis-envoyer'>Nous allons vous répondre dans les plus brefs délais Mr / Mme : ". $_SESSION['nom'].' ' .$_SESSION['prenom'].".</p>";
    echo "<p class='p-devis-envoyer'>Redirection vers l'accueil dans 60 secondes...</p>";
    echo "<meta http-equiv='refresh' content='60;URL=index.php'>";
    echo "<img class='img-devis-envoyer' src='images/devis.png'/>"; 
    session_destroy();  
    if (isset($_POST['newsletters'])){
        include("php/connexion_bdd.php");
        $newsletters  = $_POST['newsletters'];
        $Requete = "INSERT INTO newsletters (email) 
        VALUES ('$email');";
        $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
        mysqli_close ( $DataBase ) ;
    }       
} else {
    echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
}


?>
<?php
include("php/footer.php");
?>