<?php
<html>
<style>
#page {
    background-color:black;
    color:green;
    text-align:center;
    padding:5px;
}
</style>
<head>
    <title>istreams receipt</title>
</head>
<body>
<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
   </head>
        <body > 
		<div id="page">
		<?php 
		echo "Print Receipt";
		?>
		</div>
                            <div id="divToPrint" >
							<fieldset>
							<legend>Customer's Receipt</legend>
						<form id="test">
               <div style="width:500px;height:400px;background-color:white;">
                  <center><img src="istrm.png" width="100" height="50"></center>
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
   ";
   ?>
                </div>
            </div>
			</fieldset>
            <div>
			<a href="finance.php">go back</a>
                <input type="button" value="print" onclick="PrintDiv();" />
            </div>
		</table>
	</form>	
	
		</fieldset>

</body>

</html>
?>

