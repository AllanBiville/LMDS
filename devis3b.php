<?php
include("php/header.php");
session_start();
if (isset($_POST['marque2'])){
    $_SESSION['marque2'] = $_POST['marque2'];
    $_SESSION['marque'] = NULL;
} else if (!isset($_SESSION['marque2']) && !isset($_SESSION['marque'])){
    header('location:devis2b.php');
}
?>
<main>
<form class="form-devis" method="POST" action="devis4.php">
<fieldset>
<legend><span class="number">3</span>Quel est le modèle de votre téléphone ?</legend>
<br/>
<a href="savoir-marque-modele.php" class="savoir-marque-modele"><i class="far fa-question-circle"></i> Comment savoir le modèle ?</a>
<input minlength="1" maxlength="25" required autofocus="autofocus" type="text" name="modele2" placeholder="Modèle *"></input>
</fieldset>
<input type="submit" value="Etape suivante"></input>
</form>
</main>
<?php
include("php/footer.php");
?>