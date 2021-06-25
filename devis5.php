<?php
include("php/header.php");
session_start();
if (isset($_POST['probleme'])){
    $_SESSION['probleme'] =$_POST['probleme'];
}
if(isset($_POST['probleme2'])){
$_SESSION['probleme2'] = $_POST['probleme2'];
} else{
    $_SESSION['probleme2'] = "Non";
}
if(isset($_POST['probleme3'])){
$_SESSION['probleme3'] = $_POST['probleme3'];
}else{
    $_SESSION['probleme3'] = "Non";
}
if (!isset($_SESSION['probleme'])){
    header('location:devis4.php');
}
?>
<main>
<form class='form-devis' method='POST' action='devis6.php'>
<fieldset>
<legend><span class='number'>5</span>Avez-vous quelque chose à rajouter ?</legend>
<br/>
<legend><i class="fas fa-chevron-right"></i>Commentaire</legend>
<textarea minlength='1' maxlength='150' autofocus='autofocus' id='commentaire' name='commentaire' rows='5' cols='33' placeholder='Commentaire (optionnel) - 150 caractères maximum'></textarea>

<legend><i class="fas fa-chevron-right"></i>Protection écran Invisible Shield</legend>
<p class="protection-ecran">
    
- Ajoutez la maintenant et <span>bénéficiez de 5% de remise sur l’ensemble du devis.</span><br/>
- Découvrez notre protection d’écran sur-mesure pour votre smartphone, elle utilise une technologie incassable et auto cicatrisante en cas d’impact.<br/>
- Invisble Shield est la protection d’écran la plus fiable du marché et la plus vendue aux Etats-Unis.<br/><br/>
<b>Cochez cette case pour en profitez :</b>
<span class="span-protection-checkbox">
	<input type="checkbox" id="protection-checkbox" name="protection-checkbox" value="Oui"/>
	<label for="protection-checkbox"></label>
</span>
</p>


</fieldset>
<input type='submit' value="Etape suivante" />
</form>
</main>
<style>

    </style>
<?php
include("php/footer.php");
?>