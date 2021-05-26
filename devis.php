<html>
<head>
<meta charset="UTF-8">
<title>Devis</title>
</head>
<body>
<h1 align=center>Devis</h1>
<hr>
<form method="POST" action="">
    <h1>Informations Clients</h1>
    <label for="nom">Nom</label><br/>
    <input type="text" id="nom" name="nom"><br/><br/>
    <label for="prenom">Prénom</label><br/>
    <input type="text" id="prenom" name="prenom"><br/><br/>
    <label for="email">Email</label><br/>
    <input type="text" id="email" name="email"><br/><br/>

    <h1>Informations Téléphone</h1>

    <label for="marque">Marque</label><br/>
    <select name='marque' onchange="myFunction()">
<?php 
include("connexion_bd_telephone.php");
$Requete = "select * from marque" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
  echo "<option value='".$ligne['id_marque']. "'>";
  echo $ligne['nom_marque'] ;
  echo "</option>\n" ;
}
mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;  

?>
  </select><br/><br/>
  <label for="modele">Modele</label><br/>
  <select name='modele'>
<?php 
include("connexion_bd_telephone.php");
$Requete = "select * from modele" ;
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
while (  $ligne = mysqli_fetch_array($Resultat)  )
{
  echo "<option value='".$ligne['id_modele']."'>";
  echo $ligne['nom_modele'] ;
  echo "</option>\n" ;
}
mysqli_free_result ( $Resultat ) ;
mysqli_close ( $DataBase ) ;  

?>
  </select>
<br/><br/>
    <input type=submit value='Envoyer'>
</form>
<script>
function myFunction() {
    <?php
  $id_marque = $ligne['id_marque'];
  echo $id_marque;
  ?>
}
</script>


</body>
</html>
