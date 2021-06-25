<?php
include("header.php");
include("verification.php");
$id_probleme = $_GET['id_probleme'];
include('../php/connexion_bdd.php');
    $Requete = "DELETE FROM probleme where id_probleme=$id_probleme ;" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;
    header("location:probleme.php");
include("footer.php");
?>
