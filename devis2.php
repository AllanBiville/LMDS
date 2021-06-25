<?php
include("php/header.php");
session_start();
if (isset($_POST['nom'])){
    $_SESSION['nom'] = $_POST['nom'];
} else if (!isset($_SESSION['nom'])){
    header('location:devis.php');
}
if (isset($_POST['prenom'])){
    $_SESSION['prenom'] = $_POST['prenom'];
} else if (!isset($_SESSION['prenom'])){
    header('location:devis.php');
}
if (isset($_POST['email'])){
    $_SESSION['email'] = $_POST['email'];
} else if (!isset($_SESSION['email'])){
    header('location:devis.php');
}
if (isset($_POST['telephone'])){
    $_SESSION['telephone'] = $_POST['telephone'];
}else if (!isset($_SESSION['telephone'])){
    header('location:devis.php');
} 
?>
<main>
<form class="form-devis" method="POST" action="devis3.php">
<fieldset>
<legend><span class="number">2</span>Quel est la marque de votre téléphone ?</legend>
<br/>
<a href="savoir-marque-modele.php" class="savoir-marque-modele"><i class="far fa-question-circle"></i> Comment savoir la marque ?</a>
<?php
echo "<select required name='marque'>";
echo "<opton disabled selected hidden value=''>";
echo "=== Choisir une marque ===";
echo "</option>";
include("php/connexion_bdd.php");
$Requete = "SELECT * FROM marque ORDER BY nom_marque";
$Resultat = mysqli_query ($DataBase, $Requete) or die(mysqli_error($DataBase));
while ($ligne = mysqli_fetch_array($Resultat)){
    echo "<option value='".$ligne['id_marque']."'>";
    echo $ligne['nom_marque'];
    echo "</option>";
}
echo "</select>";
mysqli_free_result($Resultat);
mysqli_close($DataBase);
?>
</fieldset>
<a href="devis2b.php" class="devis_bouton_marque_modele_autre"><i class="fas fa-mobile-alt"></i> Ma marque n'est pas dans la liste</a>
<input type="submit" value="Etape suivante"></input>
</form>
</main>
<?php
include("php/footer.php");
?>