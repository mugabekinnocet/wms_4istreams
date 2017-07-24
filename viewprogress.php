<?php
$serviceId=$_POST['serviceId'];
include("opendbo.php");
$sql = mysql_query("select firstname,lastname,items,agreedamount,paid from user where serviceId=$_POST[serviceId]");


		
							
		
			echo "<h1>if your status is in finished, please pay through finance office and pick your item/s from the store</h1><br>";
			echo "<h2>when in progress, please be patient as we work upon it<h2>";
            
if($sql == 1)
{
	echo "<center><b>Employees account created successfully...</b></center><br>";
	echo "<center><b><a href='emplogin.php'>Click here to Login.</a></b></center>";
}
else
	
{

	
		echo'<form id="form1" name="form1" method="post" action="customer.php">
		  <table width="1000" border="1">
		    <tr>
		      <th width="150" scope="col">FIRST NAME</th>
		      <th width="150" scope="col">LAST NAME</th>  
			  <th width="200" scope="col">ITEMS</th>
				<th width="200" scope="col">AGREED AMOUNT</th>
				<th width="100" scope="col">PAID</th>
				
				
	        </tr>';
          
		  while ($row = mysql_fetch_array($sql)) {
                                            echo "
  <tr>
  <td >" . $row['firstname'] . "</td>
   <td >" . $row['lastname'] . "</td>
   <td >" . $row['items'] . "</td>
   <td >" . $row['agreedamount'] . "</td>
   <td >" . $row['paid'] . "</td>
  
   
  
    </tr> ";
	}
	
     echo "</table>
		</form>";                                       
            	
	}

?>	                           