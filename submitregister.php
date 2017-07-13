<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$usertype=$_POST["usertype"];


//insert the information
require("opendbo.php");

$query="insert into users(username,email,usertype,password)
 values('$username', '$email','$usertype','$password')";

//execute query
$execute=mysql_query($query);


if($execute)

{
	
echo "Data inserted";
Print '<script>="refresh" content="window.location.assign("index.php");</script>'; // redirects to login.php
	
}
	else{
		echo "There is a problem".mysql_error();
	Print '<script>window.location.assign("register.php");</script>'; 
    }
	
?>