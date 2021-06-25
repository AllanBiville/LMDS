<?php
include("header.php");
include("verification.php");
$ajouterProbleme = $_GET['ajouterProbleme'];
include('../php/connexion_bdd.php');
    $Requete = "INSERT INTO probleme (nom_probleme) VALUES ('$ajouterProbleme'); " ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_close ( $DataBase ) ;
    header("location:probleme.php");
include("footer.php");
?>