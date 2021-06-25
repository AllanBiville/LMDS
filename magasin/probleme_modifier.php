<?php
include("header.php");
include("verification.php");
if (isset($_GET['modifierProbleme'])){
    $modifierProbleme = $_GET['modifierProbleme'];
    $id_probleme = $_GET['id_probleme'];
    include('../php/connexion_bdd.php');
    $Requete = "UPDATE probleme SET nom_probleme = '$modifierProbleme'  where id_probleme=$id_probleme; " ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_close ( $DataBase ) ;
    header("location:probleme.php");  
    exit();
}
?>
<?php
$id_probleme = $_GET['id_probleme'];
echo "<h1>Modifier problème n°".$id_probleme."</h1><br/>";
echo "<form class='form-magasin' action='probleme_modifier.php' method='GET'>";
include('../php/connexion_bdd.php');
$Requete = "Select * From probleme where id_probleme = $id_probleme;" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{ 
    echo "<input type='hidden' id='id_probleme' name='id_probleme' value='".$ligne['id_probleme']."'/>";
    echo "<label for='modifierProbleme'>Nom du Problème</label>";
    echo "<input type='text' id='modifierProbleme' name='modifierProbleme' value='".$ligne['nom_probleme']."'/>";
    echo "<br/><br/>";
}
mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;
?>
<input class='btn btn-success btn-lg btn-block' type="submit" value="Modifier"/>
</form>
<?php 
include("footer.php");
?>
    