<?php
include("header.php");
include("verification.php");
?>
<h1>Ajouter un problème à la base de données</h1><br/>
<form class="form-magasin" action="probleme_ajouter.php" method="GET">
<label for="ajouterProbleme">Nom du Problème</label>
<input type="text" id="ajouterProbleme" name="ajouterProbleme"/>
<br/><br/>
<input class='btn btn-success btn-lg btn-block' type="submit" value="Ajouter problème"/>
</form>
<br/><hr>
<?php
echo "<h1>Affichage des problèmes</h1><br/><br/>";
echo "<table class='table table-bordered table-striped table-responsive-stack'>";
echo "<tr style='background-color:#212529; color:white;'> 
            <th> ID </th> 
            <th> Nom </th> 
            <th> Actions </th>
        </tr>";
include('../php/connexion_bdd.php');
    $Requete = "Select * From probleme ;" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    while (  $ligne = mysqli_fetch_array($Resultat)  )
    { 
    echo "<tr>\n" ;
    echo "<td>" . $ligne['id_probleme']       . "</td>\n" ;
    echo "<td>" . $ligne['nom_probleme']    . "</td>\n" ;
    echo "<td> <a class='btn btn-secondary' href='probleme_modifier.php?id_probleme=". $ligne['id_probleme']."'><i class='fas fa-pen'></i></a>" ;
    echo " <a class='btn btn-danger' href='probleme_supprimer.php?id_probleme=". $ligne['id_probleme']."' onclick='return ConfirmSuppr();'><i class='fas fa-trash-alt'></i></a></td>\n" ;
    echo "</tr>\n" ;
    }
    echo "</table>" ;
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;
include("footer.php");
?>
<script>
function ConfirmSuppr()
{
    return(confirm('Etes-vous sûr de vouloir supprimer ce problème ?'));
}
</script>