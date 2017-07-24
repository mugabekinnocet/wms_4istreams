<?php

$user_name = $_POST['user_name'];
$email = $_POST['email'];
$pass_word = $_POST['pass_word'];
$usertype = $_POST["usertype"];


//insert the information
require("opendbo.php");

$query = "insert into users(user_name,email,pass_word,usertype)
 values('$user_name', '$email','$pass_word','$usertype')";



//execute query
$execute = mysql_query($query);


if ($execute) {

    echo "Data inserted";
   header('Refresh: 1; url=index.php');
} else {
    echo "There is a problem" . mysqli_error();
    header("Refresh:0; url=redirect_index.php");
}
?>