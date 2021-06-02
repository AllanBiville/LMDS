<?php
session_start();
$bloque=99;
if(isset($_POST['captcha'])){
    if($_POST['captcha']==$_SESSION['captcha']){
        echo "Code correct";
    } else {
        echo "Code incorrect";
       $bloque=0;
    }
}
if ($bloque==99) 
{
/*================tu envoie le mail */
}
?>
<html><body><br>
<form action="captchatest.php" method="post">
    <input type="text" name="captcha"/>
    <input type="submit"/>
    <img src="captcha.php" onclick="this.src='captcha.php?' + Math.random();" alt="captcha" style="cursor:pointer;">
</form>
</body></html>