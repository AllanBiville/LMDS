<?php
include("header.php");
include("verification.php");
?>
<h1>Ajouter un modèle à la base de données</h1><br/>
<form class="form-magasin" action="modele_ajouter.php" method="GET">
<label for="ajouterModele">Nom du modèle</label>
<input type="text" id="ajouterModele" name="ajouterModele"/>
<br/>
<label for="ajouterModeleMarque">Marque assigné au modèle</label>
<?php
echo "<select id='ajouterModeleMarque' name='ajouterModeleMarque'>";
include("../php/connexion_bdd.php");
$Requete = "SELECT * FROM marque";
$Resultat = mysqli_query ($DataBase, $Requete) or die(mysqli_error($DataBase));
while ($ligne = mysqli_fetch_array($Resultat)){
    echo "<option value='".$ligne['id_marque']."'>";
    echo $ligne['nom_marque'];
    echo "</option>";
}
echo "</select>";
?>
<br/><br/>
<input class='btn btn-success btn-lg btn-block' type="submit" value="Ajouter modèle"/>
</form>
<br/><hr>
<?php
echo "<h1>Affichage des modèles</h1><br/><br/>";
echo "<table class='table table-bordered table-striped table-responsive-stack'>";
echo "<tr style='background-color:#212529; color:white;'> 
            <th> ID </th> 
            <th> Marque </th> 
            <th> Modèle </th>
            <th> Actions </th>
        </tr>";
include('../php/connexion_bdd.php');
    $Requete = "Select * From marque, modele where marque.id_marque = modele.id_marque ORDER BY nom_modele, nom_marque;" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    while (  $ligne = mysqli_fetch_array($Resultat)  )
    { 
    echo "<tr>\n" ;
    echo "<td>" . $ligne['id_modele']       . "</td>\n" ;
    echo "<td>" . $ligne['nom_marque']    . "</td>\n" ;
    echo "<td>" . $ligne['nom_modele']    . "</td>\n" ;
    echo "<td> <a class='btn btn-secondary' href='modele_modifier.php?id_modele=". $ligne['id_modele']."'><i class='fas fa-pen'></i></a>" ;
    echo " <a class='btn btn-danger' href='modele_supprimer.php?id_modele=". $ligne['id_modele']."' onclick='return ConfirmSuppr();'><i class='fas fa-trash-alt'></i></a></td>\n" ;
    echo "</tr>\n" ;
    }
    echo "</table>" ;
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;

?>
<script>
function ConfirmSuppr()
{
    return(confirm('Etes-vous sûr de vouloir supprimer ce modèle ?'));
}
</script>
<?php 
include("footer.php");
?>