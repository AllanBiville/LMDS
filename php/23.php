<?php
  $DataBase = mysqli_connect ( "mysql-allan-biville.alwaysdata.net" , "230452" , "A25122002a" , "allan-biville_bd_telephone" ) ;
  mysqli_select_db ($DataBase, "bd_telephone" ) ;
  mysqli_set_charset($DataBase, "uft8_general_ci");
?>