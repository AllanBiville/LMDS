<?php
include("header.php");
include("verification.php");
?>
<h1>Ajouter une marque à la base de données</h1><br/>
<form class="form-magasin" action="marque_ajouter.php" method="GET">
<label for="ajouterMarque">Nom de la Marque</label>
<input type="text" id="ajouterMarque" name="ajouterMarque"/>
<br/><br/>
<input class='btn btn-success btn-lg btn-block' type="submit" value="Ajouter marque"/>
</form>
<br/><hr>
<?php
echo "<h1>Affichage des marques</h1><br/><br/>";
echo "<table class='table table-bordered table-striped table-responsive-stack'>";
echo "<tr style='background-color:#212529; color:white;'> 
            <th> ID </th> 
            <th> Nom </th> 
            <th> Actions </th>
        </tr>";
include('../php/connexion_bdd.php');
    $Requete = "Select * From marque ;" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    while (  $ligne = mysqli_fetch_array($Resultat)  )
    { 
    echo "<tr>\n" ;
    echo "<td>" . $ligne['id_marque']       . "</td>\n" ;
    echo "<td>" . $ligne['nom_marque']    . "</td>\n" ;
    echo "<td> <a class='btn btn-secondary' href='marque_modifier.php?id_marque=". $ligne['id_marque']."'><i class='fas fa-pen'></i></a>" ;
    echo " <a class='btn btn-danger' href='marque_supprimer.php?id_marque=". $ligne['id_marque']."' onclick='return ConfirmSuppr();'><i class='fas fa-trash-alt'></i></a></td>\n" ;
    echo "</tr>\n" ;
    }
    echo "</table>" ;
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;
    
?>
<script>
function ConfirmSuppr()
{
    return(confirm('Etes-vous sûr de vouloir supprimer cette marque ?'));
}
</script>
<?php 
include("footer.php");
?>
    