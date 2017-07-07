<?php
$username=$_POST['username'];
$email=$_POST['email'];
$Password=$_POST['Password'];
$type=$_POST["type"];


//insert the information
require("opendbo.php");

$query="insert into user(username,email,type,Password)
 values('$username', '$email','$type','$Password')";

//execute query
$execute=mysql_query($query);


if($execute)

{
	
echo "Data inserted";
Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
	
}
	else{
		echo "There is a problem".mysql_error();
	
    }
	
?>