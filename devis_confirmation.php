<?php
include("php/header.php");
session_start();
if (isset($_POST['probleme'])){
    $probleme = $_POST['probleme'];
    $_SESSION['probleme'] = $probleme;
}

$marque = $_SESSION['marque'];
$modele = $_SESSION['modele'];
if(isset($_POST['probleme2'])){
    $probleme2 = $_POST['probleme2'];
$_SESSION['probleme2'] = $probleme2;
} else {
    $_SESSION['probleme2'] = NULL;
}
if(isset($_POST['probleme3'])){
    $probleme3 = $_POST['probleme3'];
$_SESSION['probleme3'] = $probleme3;
} else {
    $_SESSION['probleme3'] = NULL;
}
?>
<main>
<div class="container_progress_bar">
      <ul class="progressbar">
          <li class="active">Informations personnelles</li>
          <li class="active">Marque</li>
          <li class="active">Modèle</li>
          <li class="active">Problèmes</li>
          <li class="active">Confirmation</li>
  </ul>
</div>
<br/><br/><br/><br/><br/><br/>
<?php
    echo "<form class='form-devis' method='POST' action='devis_confirmation_final.php'>";
    echo "<fieldset>";
    echo "<legend><span class='number'>5</span>Confirmation de votre devis</legend>"; 
    echo "<br/><hr><br/>";
    
    
    
    echo "<input type='text' readOnly='readOnly' name='nom' placeholder='Votre nom *' value='".$_SESSION['nom']."'>";
    echo "<input type='text' readOnly='readOnly' name='prenom' placeholder='Votre prénom *' value='".$_SESSION['prenom']."'>";
    echo "<input type='email' readOnly='readOnly' name='email' placeholder='Votre email *' value='".$_SESSION['email']."'>";
    echo "<input type='text' readOnly='readOnly' name='telephone' placeholder='Votre téléphone *' value='".$_SESSION['telephone']."'>";

    echo "<legend><i class='fas fa-chevron-right'></i>Informations téléphones</legend>";
    include("php/connexion_bdd.php");
    $Requete = "select * from marque where id_marque = '$marque';" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    while (  $ligne = mysqli_fetch_array($Resultat)  )
    {
        if ($ligne['id_marque'] == $_SESSION['marque']){
            $_SESSION['marque'] = $ligne['nom_marque'];
            echo "<input type='text' readOnly='readOnly' name='marque' placeholder='Marque *' value='".$ligne['nom_marque']."'>";
        }
    }
    if (isset($_SESSION['marque2'])){
        echo "<input type='text' readOnly='readOnly' name='marque' placeholder='Marque *' value='".$_SESSION['marque2']."'>";
        $_SESSION['marque'] = $_SESSION['marque2'];
    }
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;  

    
    include("php/connexion_bdd.php");
    $Requete = "select * from modele where modele.id_modele = '$modele';" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    while (  $ligne = mysqli_fetch_array($Resultat)  )
    {
        if ($ligne['id_modele'] == $_SESSION['modele']){
            echo "<input type='text' readOnly='readOnly' name='modele' placeholder='Modele *' value='".$ligne['nom_modele']."'>";
            $_SESSION['modele'] = $ligne['nom_modele'];
        }
    }
    if (isset($_SESSION['modele2'])){
        echo "<input type='text' readOnly='readOnly' name='modele' placeholder='Modèle *' value='".$_SESSION['modele2']."'>";
        $_SESSION['modele'] = $_SESSION['modele2'];
    }
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;  


    echo "<legend><i class='fas fa-chevron-right'></i>Problèmes téléphone</legend>";
    include("php/connexion_bdd.php");
    $Requete = "select * from probleme where id_probleme = $probleme" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    while (  $ligne = mysqli_fetch_array($Resultat)  )
    {
        if ($ligne['id_probleme'] == $_SESSION['probleme']){
            echo "<input type='text' readOnly='readOnly' name='probleme' placeholder='Problème 1 *' value='".$ligne['nom_probleme']."'>";
            $_SESSION['probleme'] = $ligne['nom_probleme'];
        }       
    }
   
    if (isset($probleme2)){
    include("php/connexion_bdd.php");
    $Requete = "select * from probleme where id_probleme = $probleme2" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    while (  $ligne = mysqli_fetch_array($Resultat)  )
    {
        if ($ligne['id_probleme'] == $_SESSION['probleme2']){
            echo "<input type='text' readOnly='readOnly' name='probleme2' placeholder='Problème 2 *' value='".$ligne['nom_probleme']."'>";
            $_SESSION['probleme2'] = $ligne['nom_probleme'];
        }    
    }
}
if (isset($probleme3)){
    include("php/connexion_bdd.php");
    $Requete = "select * from probleme where id_probleme = $probleme3" ;
    $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
    while (  $ligne = mysqli_fetch_array($Resultat)  )
    {
        if ($ligne['id_probleme'] == $_SESSION['probleme3']){
            echo "<input type='text' readOnly='readOnly' name='probleme3' placeholder='Problème 3 *' value='".$ligne['nom_probleme']."'>";
            $_SESSION['probleme3'] = $ligne['nom_probleme'];
        } 
    }
}
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;  



 
   
   
    ?>
    </fieldset>
    <input type='submit' value="Continuer" />
    </form>
    
</main>
<?php
include("php/footer.php");
?>


