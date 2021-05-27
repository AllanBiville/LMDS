<?php
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
  mysqli_select_db ($DataBase, "bd_telephone" ) ;
  mysqli_set_charset($DataBase, "uft8_general_ci");
?>