<?php
error_reporting(0);

$host = "localhost";
$user = "root";
$password = "";
$dbname = "wms";

//create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
	
else{
	echo"connection succesful";
   }

?>