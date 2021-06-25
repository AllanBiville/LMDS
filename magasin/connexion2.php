<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
include('../php/connexion_bdd.php');
$Requete = "select * from utilisateurs 
            where username= '$username'
            and password = '$password' ;" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  if (  $ligne = mysqli_fetch_array($Resultat)  )
  {
      header('Location: index.php');
      $_SESSION["username"]=$username;
      $_SESSION["password"]=$password;
      exit();
    }else{
        echo "<h1 align=center>Erreur de connexion</h1>";
        header('Refresh: 3; connexion.php');
        session_destroy();
        exit();
    }
  mysqli_free_result ( $Resultat ) ;
  mysqli_close ( $DataBase ) ;  
    ?>