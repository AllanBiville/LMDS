<?php
include("header.php");
include("verification.php");
$ajouterModele = $_GET['ajouterModele'];
$ajouterModeleMarque = $_GET['ajouterModeleMarque'];
include('../php/connexion_bdd.php');
    $Requete = "INSERT INTO modele (nom_modele, id_marque) VALUES ('$ajouterModele','$ajouterModeleMarque');" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_close ( $DataBase ) ;
    header("location:modele.php");
    include("footer.php");
?>