<?php
include("header.php");
include("verification.php");
$ajouterMarque = $_GET['ajouterMarque'];
include('../php/connexion_bdd.php');
    $Requete = "INSERT INTO marque (nom_marque) VALUES ('$ajouterMarque'); " ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_close ( $DataBase ) ;
    header("location:marque.php");
include("footer.php");
?>