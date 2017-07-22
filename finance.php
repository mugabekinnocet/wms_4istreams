<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {

}
?>
<doctype html>
<html>
	<head>
		<title>
			finance page
		</title>
	</head>
	<style>
#header {
    background-color:black;
    color:green;
    text-align:center;
    padding:5px;
}
#footer{
	margin: 30px 0;
	background: grey;
	padding: 20px;
	clear: both;
}
#footer1 p{
		text-align: center;
		text-transform: uppercase;
		font-size: 100%;
		color: green;
	}
	</style>
	<body>
	<div id="header">
	<center><h1>
	<?php
		echo "WELCOME TO THE FINANCE MANAGER'S PAGE";
	?><h1></center><br>
	</div>
	<form action="finance.php" method="get">
		<table>
			<tr>
				
				<?php
require("opendbo.php");

$result = mysql_query("SELECT * FROM user");

echo "<table style='border-style:groove; border-width:5px; color:#960; border-collapse:collapse; width:65%;margin-left:5.5%;background-color: white;'>
<tr style='background-color: green; color:black;'>
<th style='border-style:groove; border-width:2px;'>SERVICEID</th>
<th style='border-style:groove; border-width:2px;'FIRST NAME</th>
<th style='border-style:groove; border-width:2px;'LAST NAME</th>
<th style='border-style:groove; border-width:2px;'>ITEMS</th>
<th style='border-style:groove; border-width:2px;'>SERVICE-DATE</th>
<th style='border-style:groove; border-width:2px;'>AGREED-AMOUNT</th>
<th style='border-style:groove; border-width:2px;'>PAID</th>
<th style='border-style:groove; border-width:2px;'>PHONE NUMBER</th>
<th style='border-style:groove; border-width:2px;'>UPDATE PAID</th>
<th style='border-style:groove; border-width:2px;'>EDIT</th>
<th style='border-style:groove; border-width:2px;'>DELETE</th>

</tr>";

while($row = mysql_fetch_array($result))
  {
echo "
  <tr>
  <td  style='border-style:groove; border-width:2px;' >" . $row['serviceId'] . "</td>
   <td style='border-style:groove; border-width:2px;'>" . $row['firstname'] . "</td>
   <td style='border-style:groove; border-width:2px;'>" . $row['lastname'] . "</td>
   <td style='border-style:groove; border-width:2px;'>" . $row['items'] . "</td>
   <td style='border-style:groove; border-width:2px;'>" . $row['servicedate'] . "</td>
   <td style='border-style:groove; border-width:2px;'>" . $row['agreedamount'] . "</td>
   <td style='border-style:groove; border-width:2px;'>" . $row['paid'] . "</td>
    <td style='border-style:groove; border-width:2px;'>" . $row['phone'] . "</td>
   
   
  <td style='border-style:groove; border-width:2px;'>
   <input type='hidden' name='id' value='".$row['serviceId']."'> 
   <input type='submit' value='Update paid'>
   </td>
   </form>
   <form action='editingform2.php' method='post'>
  <td style='border-style:groove; border-width:2px;'>
   <input type='hidden' name='id' value='".$row['serviceId']."'> 
   <input type='submit' value='edit'>
   </td>
   </form>
   <form action='deletingform2.php' method='post'>
   <td style='border-style:groove; border-width:2px;'>
   <input type='hidden' name='kk' value='".$row['serviceId']."'>
   <input type='submit' value='delete' onclick='return confirm(are you sure you want to delete ?)'</td>
   </form>
   
   ";
  
  ?>
  <?php
  echo "</tr>";
  }
echo "</table>";


?>
			</tr>
		</table>
		
	</form>
	<div id="footer">
		<h2>Pages</h2>
		<li><a href="receipt.php"> Receipt</a><br>
		<li><a href="logout.php">Logout</a>
		</div>
	<div id="footer1">
	<p>
			 by atm
			</p>
		
	</div>
	</body>
</html>