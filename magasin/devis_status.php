<?php
include("header.php");
include("verification.php");
$id_devis = $_GET['id_devis'];
include('../php/connexion_bdd.php');
    $Requete = "SELECT * FROM devis where id_devis=$id_devis ;" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    while (  $ligne = mysqli_fetch_array($Resultat)  )
    {
      $status= $ligne['status'];
    }
    if ($status == "Nouveau devis"){
        $Requete = "UPDATE devis SET status = 'En cours' where id_devis=$id_devis;";
        $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    }
    if ($status == "En cours"){
        $Requete = "UPDATE devis SET status = 'Fini' where id_devis=$id_devis;";
        $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    }
    if ($status == "Fini"){
        $Requete = "UPDATE devis SET status = 'Nouveau devis' where id_devis=$id_devis;";
        $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    }
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;
    header("location:index.php");
include("footer.php");
?>