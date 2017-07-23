<?php

include("opendbo.php");
$user_name='$_POST[user_name]';

if($user_name == 'user_name')
{
	header("Location: register.php");
}
if($user_name == 'user_name')
{
	header("Location: account.php");
}

	if($user_name == 'user_name')
		{
			mysql_query("UPDATE users SET pass_word='$_POST[pass_word]' where user_name='$_POST[user_name]'");
			if(mysql_affected_rows() == 1)
			{
				$respass = "Password updated successfully...";
			}
		}
?>
		
							
		<div id="main">				
			
			<a name="TemplateInfo"></a>
			<h1>Forgot password</h1>
			<p><strong>Please enter New Password and confirmation password to reset password </strong></p>
		  <form id="form1" name="form1" method="post" action="submitregister.php"  onsubmit="return validate()">
		  <table width="521" height="208" border="0">
          <?php
			if($user_name == 'user_name')
		  {
		  ?>
		    <tr>
		      <th colspan="2" scope="row"><font color="#FF0000"><b><?php echo $respass; ?></b></font></th>
	        </tr>
            <?php
		  }
		  else
		  {			  
			?>
		    
		    <tr>
		      <th height="39" scope="row">New Password</th>
		      <td><input name="pass_word" type="password" id="pass_word" size="50" /></td>
	        </tr>
		    <tr>
		      <th height="49" scope="row">Confirm password</th>
		      <td><input name="pass_word" type="password" id="pass_word" size="50" /></td>
	        </tr>
		    <tr>
		      <th scope="row">&nbsp;</th>
		      <td><input name="submit" type="submit" class="button" id="submit" value="Recover password" /></td>
	        </tr>
            <?php
		  }
			?>
		    <tr>
		      <th scope="row">&nbsp;</th>
		      <td>&nbsp;</td>
	        </tr>
		    </table>
</form>
			