<?php

 $username="root";
 $password="";
 $database="wms";
 $servername="localhost";
 
 mysql_connect($servername,$username,$password) or die ('nope '.mysql_error()) ;
 mysql_select_db($database) or die ('nope for db '.mysql_error()) ;
 
?>