<form method='POST' action='Ajouter.php' >  
   Marque    : <input name=marque     type=text value=''> <br>
   Prénom : <input name=modele           type=text value=''> <br>
   NumDep : <select name='NumDep'>
<?php 
$DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
mysqli_select_db ( $DataBase, "bd04" ) ;
$Requete = "select * from departement" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
  //$NomDep = $ligne['NomDep'];
  echo "<option value='".$ligne['NumDep']."'>";
  echo $ligne['NumDep'].' - '.$ligne['NomDep'] ;
  echo "</option>\n" ;
}
mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;  

?>
  </select><br/>
   Age    : <input name=Age              type=text value=''> <br>
   Sexe   : <select name='Sexe'>
              <option value='H'>Homme</option>
              <option value='F'>Femme</option>
            </select><br/>
   Metier : <input name=Metier           type=text value=''> <br>
   <br>
    <input type=submit value='Ajouter' >
   </form>
    <?php
    
  
      $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
    
      //--- Ouverture de la base de données
      mysqli_select_db ( $DataBase, "bd04" ) ;
    
      //--- Préparation de la requête
      $Requete = "INSERT INTO client (NomFamille, Prenom , Age , Sexe , Metier, NumDep) 
                  VALUES ('$NomFamille','$Prenom','$Age','$Sexe','$Metier','$NumDep');";
        
      //--- Exécution de la requête (fin du script possible sur erreur ...)
      $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    
      //--- Déconnection de la base de données
      mysqli_close ( $DataBase ) ;  
      
    ?>
    </center>
    
    <br>
    
    <hr>
    </BODY>
    </HTML>
