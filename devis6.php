<?php
include("php/header.php");
session_start();
if (isset($_POST['commentaire'])){
    $_SESSION['commentaire'] = $_POST['commentaire'];
} else if (!isset($_SESSION['commentaire'])){
    $_SESSION['commentaire'] = "Aucun";
}

if  (isset($_POST['protection-checkbox'])){
    $_SESSION['protection-checkbox'] = $_POST['protection-checkbox'];
} else {
    $_SESSION['protection-checkbox'] = "Non";
}
$marque = $_SESSION['marque'];
$modele = $_SESSION['modele'];
?>
<main> 
<?php
    echo "<form class='form-devis' method='POST' action='devis7.php'>";
    echo "<fieldset>";
    echo "<legend><span class='number'>6</span>Récapitulatif de votre devis</legend>"; 
    echo "<br/><hr><br/>";
    echo "<legend><i class='fas fa-chevron-right'></i>Informations clients</legend>";
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
        }
    }
    if (isset($_SESSION['marque'])){
        echo "<input type='text' readOnly='readOnly' name='marque' placeholder='Marque *' value='".$_SESSION['marque']."'>";
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
            $_SESSION['modele'] = $ligne['nom_modele'];
        }
    }
    if (isset($_SESSION['modele'])){
        echo "<input type='text' readOnly='readOnly' name='modele' placeholder='Modele *' value='".$_SESSION['modele']."'>";
    }
    

    if (isset($_SESSION['modele2'])){
        echo "<input type='text' readOnly='readOnly' name='modele' placeholder='Modèle *' value='".$_SESSION['modele2']."'>";
        $_SESSION['modele'] = $_SESSION['modele2'];
    }
    mysqli_free_result ( $Resultat ) ;
    mysqli_close ( $DataBase ) ;  


    echo "<legend><i class='fas fa-chevron-right'></i>Problèmes téléphone</legend>";
        echo "<input type='text' readOnly='readOnly' name='probleme' placeholder='Problème 1 *' value='".$_SESSION['probleme']."'>";
    if (isset($_SESSION['probleme2'])){
        echo "<input type='text' readOnly='readOnly' name='probleme2' placeholder='Problème 2 *' value='".$_SESSION['probleme2']."'>";
    }
    if (isset($_SESSION['probleme3'])){
        echo "<input type='text' readOnly='readOnly' name='probleme3' placeholder='Problème 3 *' value='".$_SESSION['probleme3']."'>";
    } 
    echo "<legend><i class='fas fa-chevron-right'></i>Commentaire</legend>";
    echo "<textarea style='resize : none;' readOnly='readOnly' id='commentaire' name='commentaire' rows='5' cols='33' placeholder='Aucun commentaire'>".$_SESSION['commentaire']."</textarea>";

    echo "<legend><i class='fas fa-chevron-right'></i>Protection écran</legend>";
    if ($_SESSION['protection-checkbox'] == "Oui"){
    echo "<input type='text' readOnly='readOnly' name='protection-checkbox1' value='Oui, je veux la protection d&apos;écran Invisible Shield et profitez de 5% sur mon devis !'></input>";
    } else {
        echo "<input type='text' readOnly='readOnly' name='protection-checkbox1' value='Non, je ne veux pas de protection d&apos;écran Invisible Shield !'></input>";
    }
    ?>
    <legend><i class="fas fa-chevron-right"></i>Mentions légales</legend>

    <script>
function choix()
{
    var validation = document.getElementById('validation');
    var inputMentions = document.getElementById('mentions-legales');
    if (inputMentions.checked == false){
        validation.disabled = true;
    }
    if (inputMentions.checked == true){
        validation.disabled = false;
    }
    
}
</script>
<p class="mentions-legales">
- J'accepte les <a href="mentions-legales.php">mentions légales</a> du site<br/>
- J'autorise que mes données enregistrés dans ce formulaire soit stockés dans une base de données uniquement dans le cadre du devis.
<br/><br/>
<b>Cochez cette case pour accepter :</b>
<span class="span-mentions-legales">
	<input type="checkbox" id="mentions-legales" onClick="choix();" required="required" name="mentions-legales" value="Oui"/>
	<label for="mentions-legales"></label>
</span>
</p>
    </fieldset>
    <input type='submit' id="validation" disabled="disabled" value="Envoyer" />
    </form>   

</main>
<?php
include("php/footer.php");
?>


