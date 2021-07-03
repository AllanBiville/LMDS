<?php
include("header.php");
include("verification.php");
echo "<h1>Affichage des devis</h1><br/><br/>";
echo "<table class='table table-bordered table-striped table-responsive-stack'>";
echo "<tr style='background-color:#212529; color:white;'> 
            <th> ID </th> 
            <th class='status-th'> Status </th> 
            <th> Date </th> 
            <th> Nom </th> 
            <th> Prénom </th> 
            <th> Actions </th> 
        </tr>";
include('../php/connexion_bdd.php');
    $Requete = "Select * From devis order by id_devis DESC;" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    while (  $ligne = mysqli_fetch_array($Resultat)  )
    { 
    echo "<tr>\n" ;
    echo "<td>" . $ligne['id_devis']       . "</td>\n" ;

    echo "<td>" . $ligne['status']    . "<a class='status-bouton btn mb-1' href='devis_status.php?id_devis=". $ligne['id_devis']."'><i class='fas fa-sync-alt'></i></a></td>\n" ;

    echo "<td>" . $ligne['date'] . "</td>\n" ;
    echo "<td>" . $ligne['nom'] . "</td>\n" ;
    echo "<td>" . $ligne['prenom'] . "</td>\n" ;
    echo "<td><a class='btn btn-primary' href='devis_info.php?id_devis=". $ligne['id_devis']."'><i class='fas fa-eye'></i></a>" ;
    echo " <a class='btn btn-success disabled'  href='devis_repondre.php?id_devis=". $ligne['id_devis']."'><i class='fas fa-paper-plane'></i></a>" ;
    echo " <a class='btn btn-danger' href='devis_supprimer.php?id_devis=". $ligne['id_devis']."' onclick='return ConfirmSuppr();'><i class='fas fa-trash-alt'></i></a></td>\n" ;
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
    return(confirm('Etes-vous sûr de vouloir supprimer ce devis ?'));
}
</script>
