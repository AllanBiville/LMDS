<?php
include("header.php");
include("verification.php");
$id_modele = $_GET['id_modele'];
include('../php/connexion_bdd.php');
    $Requete = "DELETE FROM modele where id_modele=$id_modele ;" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;
    header("location:modele.php");
include("footer.php");
?>