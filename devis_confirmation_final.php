<?php
include("php/header.php");
session_start();

echo $_SESSION['nom'];
echo "<br>";
echo $_SESSION['prenom'];
echo "<br>";
echo $_SESSION['email'];
echo "<br>";
echo $_SESSION['telephone'];
echo "<br>";
echo $_SESSION['marque'];
echo "<br>";
echo $_SESSION['modele'];
echo "<br>";
echo $_SESSION['probleme'];
echo "<br>";
if(isset($_SESSION['probleme2'])){
echo $_SESSION['probleme2'];
}
echo "<br>";
if(isset($_SESSION['probleme3'])){
echo $_SESSION['probleme3'];
}
echo "<br>";
$date = date("d.m.y");  
$_SESSION['date'] = $date;
echo $_SESSION['date'];
echo "<br>";
$status = "Reçu";
$_SESSION['status'] = $status;
echo $_SESSION['status'];
?>
    
    

<?php
include("php/footer.php");
?>


