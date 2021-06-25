<?php
include("header.php");
include("verification.php");
$id_devis = $_GET['id_devis'];
include('../php/connexion_bdd.php');
    $Requete = "DELETE FROM devis where id_devis=$id_devis ;" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;
    header("location:index.php");
include("footer.php");
?>