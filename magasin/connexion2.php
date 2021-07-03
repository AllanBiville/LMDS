<?php
session_start();
function test_input($data){
  $data = trim($data); // - espace
  $data = stripslashes($data); // - \
  $data = strip_tags($data); // - <balise>
  return $data;
}
$username = test_input($_POST['username']);
$password = test_input($_POST['password']);
if ($username == "' or 1 --"){
  header('location:connexion.php');
  exit();
}
if ($password == "' or 1 --"){
  header('location:connexion.php');
  exit();
}
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