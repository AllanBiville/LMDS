<?php
include("php/header.php");
session_start();
$status = "Nouveau devis";
$_SESSION['status'] = $status;

$date = date("d.m.y");  
$_SESSION['date'] = $date;


$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$email = $_SESSION['email'];
$telephone = $_SESSION['telephone'];
$marque = $_SESSION['marque'];
$modele = $_SESSION['modele'];
$probleme = $_SESSION['probleme'];
if(isset($_SESSION['probleme2'])){
    $probleme2 = $_SESSION['probleme2'];
}
if(isset($_SESSION['probleme3'])){
    $probleme3 = $_SESSION['probleme3'];
}
$commentaire = "test";

// if insert into ok, session destroy.
// si empty probleme, mettre vide.
// si variable mannquante retour début.
include("php/connexion_bdd.php");
$Requete = "INSERT INTO devis (status, date , nom , prenom , email, telephone, marque, modele, probleme1, probleme2, probleme3,commentaire) 
            VALUES ('$status','$date','$nom','$prenom','$email','$telephone','$marque','$modele','$probleme','$probleme2','$probleme3','$commentaire');";
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
mysqli_close ( $DataBase ) ;  
?>
    
    

<?php
include("php/footer.php");
?>


