<html>
<head><title>accounts</title></head>
<?php


include("opendbo.php");
$result= mysql_query("select * from users");
?>
		
		<fieldset>					
		<div id="main">				
			
			<a name="TemplateInfo"></a>
			
			<legend><h1>Created Accounts</h1><legend>
            <?php
if($result == 1)
{
	echo "<center><b>Employees account created successfully...</b></center><br>";
	echo "<center><b><a href='emplogin.php'>Click here to Login.</a></b></center>";
}
else
{
	?>
		<form id="form1" name="form1" method="post" action="">
		  <table width="790" border="3" style=color:#blue>
		    <tr>
		      <th width="110" scope="col">usertype</th>
		      <th width="88" scope="col">user_name</th>
		      <th width="88" scope="col">email</th>
		      <th width="133" scope="col">pass_word</th>
		      
	        </tr>
          <?php
		  while ($row = mysql_fetch_array($result)) {
                                            echo "
  <tr>
  <td  style='border-style:groove; border-width:2px;' >" . $row['usertype'] . "</td>
   <td style='border-style:groove; border-width:2px;'>" . $row['user_name'] . "</td>
   <td style='border-style:groove; border-width:2px;'>" . $row['email'] . "</td>
   <td style='border-style:groove; border-width:2px;'>" . $row['pass_word'] . "</td>
  
    </tr> ";
	}
	?>
     </table>
		</form>                                       
            	<?php
	}
	?>                           
        </fieldset>                               
       <center><a href="administrator.php">click here to go back </a>                                   
                                        
                                       
                                        
                               
                               