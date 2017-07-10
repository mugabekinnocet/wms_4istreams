<html>
	<head>
	<title>Retrieve data from database</title>
	</head>
	<body>

	<dl>

	<?php

	// Connect to database server
	 include "opendbo.php";	
	// Select database
	//mysql_select_db("wms") or die(mysql_error());
	//mysql_select_db("wms", $conn);

$id = $_GET['id'];

/*if( ! is_numeric($id) )
  die('invalid id');
else*/
$query = "SELECT * FROM `user` WHERE `id` =$id LIMIT 0 , 30";

$comments = mysqli_query($conn, $query);

	// Get data from the database depending on the value of the id in the URL
	//$strSQL = "SELECT * FROM user WHERE id=" . $_GET["id"];
	//$rs = mysql_query($strSQL);
	
	// Loop the recordset $rs
	//while($row = mysql_fetch_array($rs)) 
	
	if(mysqli_num_rows($comments)){
		//while( $row = mysqli_fetch_array( $comments ) ){
		//	echo "<tr><td>{$row['ServiceId']}</td><td>{$row['FirstName']}</td><td>{$row['LastName']}</td><td>{$row['Items']}</td></tr>\n";
		//}
		
		while($row = mysqli_fetch_array($comments)){//, MYSQL_ASSOC)){
		  
		 
		 $ServiceId = $row['ServiceId'];
		 $Name = $row['FirstName'] . " " . $row['LastName'];
		 $Items = $row['Items'];
		 $Agreedamount = $row['Agreedamount'];
		 $Phone = $row['Phone'];
		 
		 
		 $ServiceId = htmlspecialchars($row['ServiceId'],ENT_QUOTES);
		 $Name = htmlspecialchars($row['FirstName'] . " " . $row['LastName'],ENT_QUOTES);
		 $Items = htmlspecialchars($row['Items'],ENT_QUOTES);
		 $Agreedamount = htmlspecialchars($row['Agreedamount'],ENT_QUOTES);
		 $Phone = htmlspecialchars($row['Phone'],ENT_QUOTES);


			// Write the data of the person
			echo"<div style='margin:30px 0px;'>
			<dt>ServiceId:</dt><dd>$ServiceId</dd>
			<dt>Name:</dt><dd>$FirstName $LastName</dd>
			<dt>Items:</dt><dd>$Items</dd>
			<dt>Agreedamount:</dt><dd>$Agreedamount</dd>
			<dt>Phone:</dt><dd>$Phone</dd>
			 </div>";
			
		}
	
	}
	
	else{
		echo '<tr><td colspan="4">No Rows Returned</td></tr>';
	}
	// Close the database connection
	//mysql_close();
	?>
	

	</dl>
	<p><a href="list.php">Return to the list</a></p>

	</body>

	</html>
	