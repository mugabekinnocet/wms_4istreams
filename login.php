<?php

?>

<script type="text/javascript">
function validate()
{
	if(document.form1.loginid.value=="")
	{
		alert("Enter username");
		document.form1.loginid.focus();
		return false;
	}
	if(document.form1.password.value=="")
	{
		alert("Enter Password");
		document.form1.loginid.focus();
		return false;
	}
}
</script>




<div id="main">

	<a name="TemplateInfo"></a>
	<h1>Login page</h1>
	<p>Please enter usertype,username and Password to login to the system.	</p>
	<form method="post" action="logindata.php"  onsubmit="return validate()">
		<table width="466" height="109" border="0">
			<tr>
				
			</tr>
			<tr>
				<th scope="row">Usertype</th>
				<td><input name="usertype" type="text" id="usertype" size="30" /></td>
			</tr>
			<tr>
				<th scope="row">Username<br /></th>
				<td><input name="user_name" type="text" id="user_name" size="30" /></td>
			</tr>
			<tr>
			<tr>
				<th scope="row">Password<br /></th>
				<td><input name="pass_word" type="password" id="pass_word" size="30" /></td>
			</tr>
				<th scope="row">&nbsp;</th>
				<td><input name="submit" type="submit" class="button" id="submit" value="Login" /></td>
			</tr>
			<tr>
				<th scope="row">&nbsp;</th>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th scope="row">&nbsp;</th>
				<td><strong><a href="forgotpassword.php">Forgot Password</a></strong></td>
				<td></th><a href="index.php">go back</a></td>
			</tr>
		</table>
	</form>
	</html>


