<?php
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
  mb_internal_encoding('UTF-8');
  mysqli_query("SET NAMES 'utf8';");
mysqli_query("SET CHARACTER SET 'utf8';");
  mysqli_select_db ( $DataBase, "bd_telephone" ) ;
  
?>