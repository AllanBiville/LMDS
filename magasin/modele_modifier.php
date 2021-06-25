<?php

include("header.php");
include("verification.php");
if (isset($_GET['modifierModele'])){
    $modifierModele = $_GET['modifierModele'];
    $modifierModeleMarque = $_GET['modifierModeleMarque'];
    $id_modele = $_GET['id_modele'];
    include('../php/connexion_bdd.php');
    $Requete = "UPDATE modele SET nom_modele = '$modifierModele', id_marque = '$modifierModeleMarque'  where id_modele='$id_modele'; " ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_close ( $DataBase ) ;
    header("location:modele.php");  
    exit();
}
?>
<?php
$id_modele = $_GET['id_modele'];
echo "<h1>Modifier modèle n°".$id_modele."</h1><br/>";
echo "<form class='form-magasin' action='modele_modifier.php' method='GET'>";
include('../php/connexion_bdd.php');
$Requete = "Select * From marque,modele where marque.id_marque = modele.id_marque AND id_modele=$id_modele;" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{ 
    echo "<input type='hidden' id='id_modele' name='id_modele' value='".$ligne['id_modele']."'/>";
    echo "<label for='modifierModele'>Nom du Modèle</label>";
    echo "<input type='text' id='modifierModele' name='modifierModele' value='".$ligne['nom_modele']."'/>";
    echo "<br/>";
    $id_marque = $ligne['id_marque'];
}
mysqli_free_result ( $Resultat ) ;
echo "<label for='modifierModeleMarque'>Marque assigné au modèle</label>";
echo "<select id='modifierModeleMarque' name='modifierModeleMarque'>";
include("../php/connexion_bdd.php");
$Requete = "SELECT * FROM marque";
$Resultat = mysqli_query ($DataBase, $Requete) or die(mysqli_error($DataBase));
while ($ligne = mysqli_fetch_array($Resultat)){
    if ($ligne['id_marque'] == $id_marque){
        echo "<option selected value='".$ligne['id_marque']."'>";
        echo $ligne['nom_marque'];
        echo "</option>";
    } else {
        echo "<option value='".$ligne['id_marque']."'>";
        echo $ligne['nom_marque'];
        echo "</option>";
    }
}
echo "</select>";
echo "<br/><br/>";
mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;
?>
<input class='btn btn-success btn-lg btn-block' type="submit" value="Modifier"/>
</form>


<?php 
include("footer.php");
?>
    