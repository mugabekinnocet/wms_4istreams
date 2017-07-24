<?php

include("opendbo.php");

if(isset($_SESSION[user_name]))
{
	header("Location: register.php");
}
if($usertype == $row['usertype'])
{
	header("Location: register.php");
}

	if(isset($_POST[submit]))
		{
			mysql_query("UPDATE users SET password='$_POST[password]' where user_name='$_POST[user_name]'");
			if(mysql_affected_rows() == 1)
			{
				$respass_word = "Password updated successfully...";
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
			if(isset($_POST[submit]))
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
		      <th width="155" height="39" scope="row">user_name</th>
		      <td width="301"><input name="user_name" type="text" id="user_name" value="<?php echo $_GET[user_name] ; ?>" size="50" readonly="readonly" /></td>
	        </tr>
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