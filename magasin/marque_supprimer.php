<?php
include("header.php");
include("verification.php");
$id_marque = $_GET['id_marque'];
include('../php/connexion_bdd.php');
    $Requete = "DELETE FROM marque where id_marque=$id_marque ;" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;
    header("location:marque.php");
include("footer.php");
?>