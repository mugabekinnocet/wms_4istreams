
<?php
$usertype=$_POST['usertype'];
$user_name=$_POST['user_name'];
$pass_word=$_POST['pass_word'];
//include(connection.php);
require("opendbo.php");

$execute = mysql_query("SELECT usertype,user_name,pass_word FROM users"); 
while($row = mysql_fetch_array($execute))
{

//insert the information

if($usertype==$row['usertype']&& $user_name==$row['user_name']&&$pass_word==$row['pass_word'])
{
	
	
if($usertype=='administrator')
{
	header("Location:administrator.php");
	//echo "select usertype <br/>";
	}
	if($usertype=='technician')
{
	header("Location:technician.php");
	//echo "select usertype <br/>";
	}
	if($usertype=='finance')
{
	header("Location:finance.php");
	//echo "select usertype <br/>";
	}
	
if($user_name=='')
{
	
	echo "enter user_name <br/>";
	}
	if($pass_word=='')
{
	
	echo "enter pass_word <br/>";
	}
	}
else{
		echo "enter correct user_name and password";
}
}
?>