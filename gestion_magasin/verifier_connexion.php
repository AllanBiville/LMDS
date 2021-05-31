<?php
    session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    }
    else {
        header('Location: ../connexion_gestion_magasin.php');
    }
?>