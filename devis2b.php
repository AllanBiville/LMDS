<?php
include("php/header.php");
session_start();
if (!isset($_SESSION['nom'])){
    header('location:devis.php');
} 
if (!isset($_SESSION['prenom'])){
    header('location:devis.php');
}
if (!isset($_SESSION['email'])){
    header('location:devis.php');
}
if (!isset($_SESSION['telephone'])){
    header('location:devis.php');
}
?>
<main>
<form class="form-devis" method="POST" action="devis3b.php">
<fieldset>
<legend><span class="number">2</span>Quel est la marque de votre téléphone ?</legend>
<br/>
<a href="savoir-marque-modele.php" class="savoir-marque-modele"><i class="far fa-question-circle"></i> Comment savoir la marque ?</a>
<input minlength="1" maxlength="25" required autofocus="autofocus" type="text" name="marque2" placeholder="Marque *">
</fieldset>
<a href="devis2.php" class="devis_bouton_marque_modele_autre"><i class="fas fa-mobile-alt"></i> Revenir à la liste des téléphones</a>
<input type="submit" value="Etape suivante"></input>
</form>
</main>
<?php
include("php/footer.php");
?>