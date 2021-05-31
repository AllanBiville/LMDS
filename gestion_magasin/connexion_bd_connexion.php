<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magasin</title>
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon"/>
</head>
<body>
<main>
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
mysqli_select_db ( $DataBase, "bd_connexion" ) ;
$Requete = "select * from utilisateurs 
            where username= '$username'
            and password = '$password' ;" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  if (  $ligne = mysqli_fetch_array($Resultat)  )
  {
      $ConnectionOK = true;
      header('Location: gestion_magasin.php');
      $_SESSION["username"]=$username;
      $_SESSION["password"]=$password;
      exit();
    }else{
        $ConnectionOK = false;
        echo "<h1 align=center>Erreur de connexion</h1>";
        header('Refresh: 3; ../connexion_gestion_magasin.php');
        session_destroy();
        exit();
    }

    /*
    echo "<tr>\n" ;
    echo "<td>" . $ligne['IDPers']       . "</td>\n" ;
    echo "<td>" . $ligne['NomFamille']       . "</td>\n" ;
    echo "<td>" . $ligne['Prenom']    . "</td>\n" ;
    */

  

  mysqli_free_result ( $Resultat ) ;
  mysqli_close ( $DataBase ) ;  


    ?>
    
</main>
</body>
</html>
