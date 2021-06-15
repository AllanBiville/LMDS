<?php
include("php/header.php");
session_start();
if (isset($_POST['marque'])){
    $_SESSION['marque'] = $_POST['marque'];
    $marque = $_SESSION['marque'];
    $_SESSION['marque2'] = NULL;
} else if (!isset($_SESSION['marque'])){
    header('location:devis2.php');
}
?>
<main>
<form class="form-devis" method="POST" action="devis4.php">
<fieldset>
<legend><span class="number">3</span>Quel est le modèle de votre téléphone ?</legend>
<br/>
<a href="savoir-marque-modele.php" class="savoir-marque-modele"><i class="far fa-question-circle"></i> Comment savoir le modèle ?</a>
<?php
echo "<select required name='modele'>";
echo "<opton disabled selected hidden value=''>";
echo "=== Choisir un modèle ===";
echo "</option>";
include("php/connexion_bdd.php");
$Requete = "SELECT * FROM modele,marque WHERE modele.id_marque = marque.id_marque AND modele.id_marque = $marque";
$Resultat = mysqli_query ($DataBase, $Requete) or die(mysqli_error($DataBase));
while ($ligne = mysqli_fetch_array($Resultat)){
    echo "<option value='".$ligne['nom_modele']."'>";
    echo $ligne['nom_modele'];
    echo "</option>";
}
echo "<select>";
mysqli_free_result($Resultat);
mysqli_close($DataBase);
?>
</fieldset>
<a href="devis3b.php" class="devis_bouton_marque_modele_autre"><i class="fas fa-mobile-alt"></i> Mon modèle n'est pas dans la liste</a>
<input type="submit" value="Etape suivante"></input>
</form>
</main>
<?php
include("php/footer.php");
?>