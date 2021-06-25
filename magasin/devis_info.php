<?php
include("header.php");
include("verification.php");
if (isset($_GET['id_devis'])){
    $id_devis = $_GET['id_devis'];
} else {
    header("location: index.php");
}
echo "<h1>Devis n°".$id_devis."</h1><br/><br/>";
include('../php/connexion_bdd.php');
    $Requete = "Select * From devis where id_devis=$id_devis ;" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    while (  $ligne = mysqli_fetch_array($Resultat)  )
    { 
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>ID</h5>";
        echo"<p class='mb-1'>".$ligne['id_devis']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Status</h5>";
        echo"<p class='mb-1'>".$ligne['status']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Date</h5>";
        echo"<p class='mb-1'>".$ligne['date']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Nom</h5>";
        echo"<p class='mb-1'>".$ligne['nom']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Prénom</h5>";
        echo"<p class='mb-1'>".$ligne['prenom']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Email</h5>";
        echo"<p class='mb-1'>".$ligne['email']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Telephone</h5>";
        echo"<p class='mb-1'>".$ligne['telephone']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Marque</h5>";
        echo"<p class='mb-1'>".$ligne['marque']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Modèle</h5>";
        echo"<p class='mb-1'>".$ligne['modele']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Problème n°1</h5>";
        echo"<p class='mb-1'>".$ligne['probleme1']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Problème n°2</h5>";
        echo"<p class='mb-1'>".$ligne['probleme2']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Problème n°3</h5>";
        echo"<p class='mb-1'>".$ligne['probleme3']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Commentaire</h5>";
        echo"<p class='mb-1'>".$ligne['commentaire']."</p>";
        echo"</div>";
        echo"<div class='list-group  list-group-item'>";
        echo"<h5 class='mb-1'>Protection</h5>";
        echo"<p class='mb-1'>".$ligne['protection']."</p>";
        echo"</div>";
    }
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;
include("footer.php");
?>