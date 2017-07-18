<?php
$user_name=$_POST['user_name'];
$email=$_POST['email'];
$pass_word=$_POST['pass_word'];
$usertype=$_POST["usertype"];


//insert the information
require("opendbo.php");

$query="insert into users(user_name,email,pass_word,usertype)
 values('$user_name', '$email','$pass_word','$usertype')";



//execute query
$execute=mysqli_query($query);


if($execute)

{
	
echo "Data inserted";
Print '<script>="refresh" content="window.location.assign("index.php");</script>'; // redirects to login.php
	
}
	else{
		echo "There is a problem".mysqli_error();
	Print '<script>window.location.assign("register.php");</script>'; 
    }
	
?>