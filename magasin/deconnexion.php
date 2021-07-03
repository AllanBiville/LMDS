<?php 
if (isset($_GET['deconnexion'])){
    session_start();
    session_destroy();
    header("location:connexion.php");
} else {
    header("location:index.php");
}
?>