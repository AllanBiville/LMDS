<?php
include("header.php");
include("verification.php");
if (isset($_GET['modifierMarque'])){
    $modifierMarque = $_GET['modifierMarque'];
    $id_marque = $_GET['id_marque'];
    include('../php/connexion_bdd.php');
    $Requete = "UPDATE marque SET nom_marque = '$modifierMarque'  where id_marque=$id_marque; " ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    mysqli_close ( $DataBase ) ;
    header("location:marque.php");  
    exit();
}
?>
<?php
$id_marque = $_GET['id_marque'];
echo "<h1>Modifier marque n°".$id_marque."</h1><br/>";
echo "<form class='form-magasin' action='marque_modifier' method='GET'>";
include('../php/connexion_bdd.php');
$Requete = "Select * From marque where id_marque = $id_marque;" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{ 
    echo "<input type='hidden' id='id_marque' name='id_marque' value='".$ligne['id_marque']."'/>";
    echo "<label for='modifierMarque'>Nom de la Marque</label>";
    echo "<input type='text' id='modifierMarque' name='modifierMarque' value='".$ligne['nom_marque']."'/>";
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
    