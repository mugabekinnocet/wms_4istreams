<?php

include("opendbo.php");
$user_name='$_POST[user_name]';
		if($user_name == 'user_name')
	{
		header("Location: register.php");
	}
	
if($user_name == 'user_name')
{
$result = mysql_query("SELECT * FROM users where user_name='$_POST[user_name]'");

	if(mysql_num_rows($result) == 1)
	{
		header("Location: changepassword.php?user_name=$_POST[user_name]");
	}
	else
	{
		$logres = "user_name does not exit in wms database";
	}
}

?>
		
							
		<div id="main">				
			
			<a name="TemplateInfo"></a>
			<h1>Forgot password</h1>
			<p>Please enter user_name to reset password </p>
		  <form id="form1" name="form1" method="post" action="changepassword.php"  onsubmit="return validate()">
		  <table width="466" height="122" border="0">
		    <tr>
		      <th colspan="2" scope="row"><font color="#FF0000"><b></b></font></th>
	        </tr>
		    <tr>
		      <th width="122" height="39" scope="row">Username</th>
		      <td width="334"><input name="user_name" type="text" id="loginid" size="50" /></td>
	        </tr>
		    <tr>
		      <th scope="row">&nbsp;</th>
		      <td><input name="submit" type="submit" class="button" id="submit" value="Recover password" /></td>
	        </tr>
		    <tr>
		      <th scope="row">&nbsp;</th>
		      <td>&nbsp;</td>
	        </tr>
		    </table>
		</form>
			<p>&nbsp;</p>
		</div>			
		
<!-- wrap ends here -->
